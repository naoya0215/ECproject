<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../css/admin.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>        
    <div class="header_wrapper">
        <div class="icon_form">
            <img src="../img/shop1.png" alt="rogo">
        </div>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <a href="route('admin.logout')" class="logout" onclick="event.preventDefault();this.closest('form').submit();">
            {{ __('ログアウト') }}
            </a>
        </form> 
    </div> 
    <div class="header_list">
        <ul>
            <li>店舗登録</li>
            <li>商品登録</li>
            <li>商品一覧</li>
        </ul>
    </div> 
    <div class="main_list">
        <h2>店舗一覧</h2>
        <table>
            <tr>
                <th>編集</th>
                <th>店舗画像</th>
                <th>店舗名</th>
                <th>店舗住所</th>
                <th>店舗について</th>
                <th>削除</th>
            </tr>
            <tr>
                <td>編集</td>
                <td>ここに画像が入ります</td>
                <td>ここに店名が入ります</td>
                <td>ここに住所が入ります</td>
                <td>ここに内容が入ります</td>
                <td>削除</td>
            </tr>
        </table>
    </div>  
</body>
</html>
