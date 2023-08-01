<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../../css/admin.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お知らせ登録</title>
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
    <form method="post" action="{{ route('admin.notices.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form_boxs">
            <h2>お知らせ登録</h2>
            <div class="form_box">
                <div class="text_border">下記の項目を入力の上登録ボタンを押してください</div>
                <x-auth-validation-errors class="error" :errors="$errors" /> 
                    <div class="form_list">
                        <label for="name">タイトル<span class="red">*</span></label><br>
                        <input type="text" id="name" name="name" placeholder="お知らせタイトル" value="{{ old('name') }}">
                    </div>
                    <div class="form_list">
                        <label for="image">お知らせ画像<span class="red">*</span></label><br>
                        <input type="file" id="image" name="image" multiple accept=“image/png,image/jpeg/jpg”>
                    </div>
                    <div class="form_list">
                        <label for="information">お知らせ内容<span class="red">*</span></label><br>
                        <input type="text" id="information" name="information" placeholder="お知らせ内容を入力してください" value="{{ old('information') }}">
                    </div>
                    <div class="form_button">
                        <button type="button" class="button" onclick="location.href='{{ route('admin.notices.index')}}'">戻る</button>
                        <button class="button" type="submit">登録</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
