<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Notice;
use App\Http\Requests\StoreNoticeRequest;
use App\Http\Requests\UpdateNoticeRequest;

class NoticeController extends Controller
{

    public function __construct() 
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $notices = Notice::all();
        return view('admin.notices.index' ,compact('notices'));
    }

    public function create()
    {
        return view('admin.notices.create');
    }

    public function store(StoreNoticeRequest $request)
    {
        // 画像フォームでリクエストした画像を取得
        $img = $request->file('image');

        // 画像情報がセットされていれば、保存処理を実行
        if (isset($img)) {
            // storage > public > image配下に画像が保存される
            $path = $img->store('image','public');
            // store処理が実行できたらDBに保存処理を実行
            if ($path) {
                // DBに登録する処理
                $notice = Notice::create([
                    'admin_id' => Auth::id(),
                    'name' => $request->name,
                    'image' => $path,
                    'information' => $request->information,
                ]);
            }
        }
        return redirect()
        ->route('admin.notices.index');
    }

    public function edit($id)
    {
        $notice = Notice::findOrFail($id);
        return view('admin.notices.edit' ,compact('notice'));
    }

    public function update(UpdateNoticeRequest $request, Notice $notice)
    {
        // 画像フォームでリクエストした画像を取得
        $image = $request->file('image');
        // 現在の画像へのパスをセット
        $path = $notice->image;

        if (isset($image)) {
            // 現在の画像ファイルの削除
            \Storage::disk('public')->delete($path);
            // 選択された画像ファイルを保存してパスをセット
            $path = $image->store('image','public');
        }
        // データベースを更新
        $notice->update([
            'name' => $request->name,
            'image' => $path,
            'information' => $request->information,
            ]);

            $notice->save();

        return redirect()
        ->route('admin.notices.index');
    }

    public function destroy($id)
    {
        Notice::findOrFail($id)->delete(); //ソフトデリート

        return redirect()
        ->route('admin.notices.index');
    }
}
