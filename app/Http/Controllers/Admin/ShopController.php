<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Shop;
use App\Models\Admin;
use App\Http\Requests\StoreShopRequest;
use App\Http\Requests\UpdateShopRequest;


class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = Shop::all();
        return view('admin.shops.index' ,compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreShopRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShopRequest $request)
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
                $shop = Shop::create([
                    'admin_id' => Auth::id(),
                    'name' => $request->name,
                    'address' => $request->address,
                    'information' => $request->information,
                    'image' => $path,
                ]);
            }
        }
        return redirect()
        ->route('admin.shops.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shop = Shop::findOrFail($id);
        return view('admin.shops.edit' ,compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShopRequest  $request
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShopRequest $request, Shop $shop)
    {
        // 画像フォームでリクエストした画像を取得
        $image = $request->file('image');
        // 現在の画像へのパスをセット
        $path = $shop->image;

        if (isset($image)) {
            // 現在の画像ファイルの削除
            \Storage::disk('public')->delete($path);
            // 選択された画像ファイルを保存してパスをセット
            $path = $image->store('image','public');
        }
        // データベースを更新
        $shop->update([
            'name' => $request->name,
            'address' => $request->address,
            'information' => $request->information,
            'image' => $path,
            ]);

            $shop->save();

        return redirect()
        ->route('admin.shops.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Shop::findOrFail($id)->delete(); //ソフトデリート

        return redirect()
        ->route('admin.shops.index');
    }
}
