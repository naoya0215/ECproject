<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../../css/admin.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品登録</title>
</head>
<body>        
    <div class="header_wrapper">
        <div class="icon_form">
            <a href="{{ route('admin.shops.index') }}"><img src="../../img/shop1.png" alt="rogo"></a>
        </div>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <a href="route('admin.logout')" class="logout" onclick="event.preventDefault();this.closest('form').submit();">
            {{ __('ログアウト') }}
            </a>
        </form> 
    </div> 
    <form method="post" action="{{ route('admin.products.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form_boxs">
            <h2>商品登録</h2>
            <div class="form_box">
                <div class="text_border">下記の項目を入力の上登録ボタンを押してください</div>
                <div class="form_list">
                    <select name="category" id="category">
                        @foreach($categories as $category)
                        <optgroup label = "{{ $category->name }}">
                            @foreach($category->secondary as $secondary)
                            <option value = "{{ $secondary->id }}">
                                {{ $secondary->name }}
                            </option>
                            @endforeach
                        @endforeach
                    </select>
                </div>
                <div class="form_list">
                    <label for="name">商品名<span class="red">*</span></label><br>
                    <input type="text" id="name" name="name" placeholder="商品名" value="{{ old('name') }}">
                </div>
                <div class="form_list">
                    <label for="information">商品情報<span class="red">*</span></label><br>
                    <input type="text" id="information" name="information" placeholder="商品情報" value="{{ old('information') }}">
                </div>
                <div class="form_list">
                    <label for="price">価格<span class="red">*</span></label><br>
                    <input type="number" id="price" name="price" placeholder="価格を設定(料金入力)" value="{{ old('price') }}">
                </div>
                <div class="form_list">
                    <label for="quantity">数量<span class="red">*</span></label><br>
                    <input type="number" id="quantity" name="quantity" placeholder="数量を選択(在庫)" value="{{ old('quantity') }}">
                </div>
                <div class="form_list">
                    <label for="sort_order">表示順</label><br>
                    <input type="number" id="sort_order" name="sort_order" placeholder="表示する順番" value="{{ old('sort_order') }}">
                </div>
                <div class="form_list">
                    <label for="image">画像</label><br>
                    <input type="file" id="image" name="image" multiple accept=“image/png,image/jpeg/jpg”>
                </div>
                <div class="form_button">
                    <button type="button" class="button" onclick="location.href='{{ route('admin.shops.index')}}'">戻る</button>
                    <button type="submit" class="button">登録</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
