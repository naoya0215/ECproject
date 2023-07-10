<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Shop;
use App\Models\Admin;
use App\Models\Stock;
use App\Models\PrimaryCategory;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //検索フォーム
        $keyword = $request->input('keyword');
        $query = Product::query();

        if(!empty($keyword)) {
            $query->where('name', 'LIKE', "%{$keyword}%");
        }
        $products = $query->get();
        
        return view('admin.products.index', compact('products', 'keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = PrimaryCategory::with('secondary') 
        ->get();

        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::transaction(function () use($request) {
                // 画像フォームでリクエストした画像を取得
                $img = $request->file('image');
                // 画像情報がセットされていれば、保存処理を実行
                if (isset($img)) {
                    // storage > public > image配下に画像が保存される
                    $path = $img->store('products','public');
                    // store処理が実行できたらDBに保存処理を実行
                    if ($path) {
                        // DBに登録する処理
                        $product = Product::create([
                            'name' => $request->name,
                            'information' => $request->information,
                            'price' => $request->price,
                            'sort_order' => $request->sort_order,
                            'image' => $path,
                            'admin_id' => Auth::id(),
                            'secondary_category_id' => $request->category
                        ]);
                        Stock::create([
                            'product_id' => $product->id,
                            'quantity' => $request->quantity
                        ]);
                    }
                }
            });
        } catch(Throwable $e) {
            Log::error($e);
            throw $e;
        }

        return redirect()
        ->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function show($id)
    //{
    //    $product = Product::findOrFail($id);
    //    return view('admin.products.show',compact('product'));
    //}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        //在庫の合計
        $quantity = Stock::where('product_id', $product->id)->sum('quantity');
        $categories = PrimaryCategory::with('secondary') 
        ->get();

        return view('admin.products.edit',compact('product','quantity','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $quantity = Stock::where('product_id', $product->id)->sum('quantity');
        //在庫数が合っていなければ編集画面へ戻る
        if($request->current_quantity !== $quantity)
        {
            $id = $request->route()->parameter('product');
            return redirect()->route('admin.products.edit', ['product' => $id]);
        } else {
            try {
                DB::transaction(function () use($request, $product) {
                    // 画像フォームでリクエストした画像を取得
                    $image = $request->file('image');
                    // 現在の画像へのパスをセット
                    $path = $product->image;

                    if (isset($image)) {
                        // 現在の画像ファイルの削除
                        \Storage::disk('public')->delete($path);
                        // 選択された画像ファイルを保存してパスをセット
                        $path = $image->store('image','public');
                    }
                    // データベースを更新
                    $product->update([
                        'name' => $request->name,
                        'information' => $request->information,
                        'price' => $request->price,
                        'sort_order' => $request->sort_order,
                        'admin_id' => Auth::id(),
                        'secondary_category_id' => $request->category,
                        'image' => $path
                        ]);

                        $product->save();

                        Stock::create([
                            'product_id' => $product->id,
                            'quantity' => $request->quantity
                        ]);
                    }, 2);
            } catch(Throwable $e) {
                Log::error($e);
                throw $e;
            }
            return redirect()
            ->route('admin.products.index');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::findOrFail($id)->delete(); //ソフトデリート

        return redirect()
        ->route('admin.products.index');
    }
}
