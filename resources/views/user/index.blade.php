<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../css/user.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧</title>
</head>
<body>
    <div class="header_wrapper">
        <div class="icon_form">
            <a href="{{ route('user.cart.index') }}"><img src="../img/shop1.png" alt="rogo"></a>
        </div>
        <form method="POST" action="{{ route('user.logout') }}">
            @csrf
            <a href="route('user.logout')"
            onclick="event.preventDefault();
            this.closest('form').submit();">
                {{ __('Log Out') }}
            </a>
        </form>             
    </div>
    <div class="main_list">
        <form action="{{ route('user.items.index') }}" method="GET">
            @csrf
            <div class="name_key">
                <label for="">キーワードで探す
                    <div class="red">※検索したい商品名を入力してください</div>
                    <div>
                        <input type="text" name="keyword" class="keyword" value="{{ $keyword }}">
                    </div>
                </label>
            </div>
            <div class="name_search">
                <input type="submit" class="search_btn" value="検索">
            </div>
        </form>
        <h2>商品一覧</h2>
        <div class="main_content">
            @foreach($products as $product)
            <a href="{{ route('user.items.show', ['item' => $product->id])}}" class="item_border">
                <div class="content">
                    <div>商品名:{{ $product->name }}</div>
                    <div><img src="{{ Storage::url($product->image) }}"></div>
                    <div>カテゴリー:{{ $product->category->name }}</div>
                    <div>価格:{{ number_format($product->price) }}円(税込)</div>
                </div>
            </a>
            @endforeach    
        </div>       
    </div>
</body>
</html>