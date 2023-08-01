<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../../css/admin.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お知らせ一覧</title>
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
        <h2>お知らせ一覧</h2>
        <p><span>※</span>登録することで表示されます</p>
        <table>
            <tr>
                <th>編集</th>
                <th>タイトル</th>
                <th>お知らせ画像</th>
                <th>お知らせ情報</th>
                <th>削除</th>
            </tr>
            @foreach ($notices as $notice)
            <tr>
                <td><button onclick="location.href='{{ route('admin.notices.edit', ['notice' => $notice->id ])}}' ">編集</button></td>
                <td>{{ $notice->name }}</td>
                <td class="image_form"><img src="{{ Storage::url($notice->image) }}"></td>
                <td>{{ $notice->information }}</td>
                <form id="delete_{{$notice->id}}" method="post" action="{{ route('admin.notices.destroy', ['notice' => $notice->id ] )}}">
                    @csrf
                    @method('delete')
                    <td><button>削除</button></td>
                </form>
            </tr>
            @endforeach
        </table>
        <div><a href="{{ route('admin.notices.create') }}">お知らせ登録</a></div>
    </div>  
</body>
</html>