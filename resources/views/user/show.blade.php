<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../css/show.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品詳細</title>
</head>
<body>
    <div class="header_wrapper">
        <div class="icon_form">
            <a href="{{ route('user.items.index') }}"><img src="../img/shop1.png" alt="rogo"></a>
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
    <div class="show_wrapper">
        <h1>商品詳細</h1>
        <div class="show_container">
            <img src="{{ Storage::url($product->image) }}" alt="商品画像">
            <div class="show_right">
                <h1>商品名</h1>
                <h3>{{ $product->name }}</h3>
                <h2>商品情報</h2>
                <h3>{{ $product->information }}</h3>
            </div>
        </div>
        <form method="post" action="{{ route('user.cart.add') }}">
            @csrf
            <div class="show_price">
                <div class="cart_flex">
                    <div class="cart_left">
                        <p>商品価格</p>
                        <p>{{ number_format($product->price) }}円(税込)</p>
                    </div>
                    <div class="cart_right">
                        <p>数量</p>
                        <select name="quantity" class="quantity">
                            @for($i = 1;$i <= $quantity; $i++)
                            <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="cart_tax">
                    <p>数量を選択しカートボタンを押してください</p>
                    <button class="cart">カート</button>
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                </div>
            </div>
        </form>
    </div>
</body>
</html>