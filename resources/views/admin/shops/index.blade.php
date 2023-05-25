<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../../css/admin.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>店舗一覧</title>
</head>
<body>        
    <div class="header_wrapper">
        <div class="icon_form">
            <img src="../../img/shop1.png" alt="rogo">
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
            <li><a href="{{ route('admin.shops.create') }}">店舗登録</a></li>
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
            @foreach ($shops as $shop)
            <tr>
                <td><button onclick="location.href='{{ route('admin.shops.edit', ['shop' => $shop->id ])}}' ">編集</button></td>
                <td class="image_form"><img src="{{ Storage::url($shop->image) }}"></td>
                <td>{{ $shop->name }}</td>
                <td>{{ $shop->address }}</td>
                <td>{{ $shop->information }}</td>
                <form id="delete_{{$shop->id}}" method="post" action="{{ route('admin.shops.destroy', ['shop' => $shop->id ] )}}">
                    @csrf
                    @method('delete')
                    <td><button>削除</button></td>
                </form>
            </tr>
            @endforeach
        </table>
    </div>  
</body>
</html>