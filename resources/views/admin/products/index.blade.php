<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../../css/product.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧</title>
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
    <div class="main_list">
        <form action="{{ route('admin.products.index') }}" method="GET">
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
        <p><span>※</span>商品登録することで表示されます</p>
        <table class="product_wrapper" border="1">
            <?php 
            $i=0; 
            $max = 3;
            foreach($products as $product):
                $i++;
            ?>
            <?php if($i == 1):?>
                <tr>
                    <?php endif;?>
                    <td>
                        <a href="{{ route('admin.products.edit', ['product' => $product->id ])}}">
                            <table class="product_box">
                                <tr>
                                    <td>商品名:<?php echo $product['name']?></td>
                                </tr>
                                <tr>
                                    <td><img src="{{ Storage::url($product->image) }}"></td>
                                </tr>
                                <tr>
                                    <td>価格:<?php echo $product['price']?>円</td>
                                </tr>
                            </table>
                        </a>
                    </td>
                    <?php if($i == $max):?>
                </tr>
            <?php $i=0; ?><?php endif;?>
            <?php endforeach;?>
        </table>
    </div>
</body>
</html>

