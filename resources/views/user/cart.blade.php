<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../css/cart.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カート</title>
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
    <div class="main_list">
        <h2>カート</h2> 
        @if (count($products) > 0)
            @foreach ( $products as $product )   
            <div class="product_cart">
                <img src="{{ Storage::url($product->image) }}" alt="商品画像">
                <div class="cart_box">
                    <div class="cart_name">商品名:{{ $product->name }}</div>
                    <div class="cart_price">金額:{{ number_format($product->pivot->quantity * $product->price) }}円(税込)</div>
                    <div class="cart_delete">
                        <form method="post" action="{{ route('user.cart.delete',['item' => $product->id]) }}">
                            @csrf
                            <button>削除</button>
                        </form>
                    </div> 
                </div>
            </div>
            @endforeach
            <div class="total">合計金額:{{ number_format($totalPrice) }}円(税込)</div>
        @else
            カートに商品が入ってません
        @endif
    </div>
</body>
</html>