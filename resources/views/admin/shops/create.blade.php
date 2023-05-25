<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../../css/admin.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>店舗登録</title>
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
    <form method="post" action="{{ route('admin.shops.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form_boxs">
            <h2>店舗登録</h2>
            <div class="form_box">
                <div class="text_border">下記の項目を入力の上登録ボタンを押してください</div>
                    <div class="form_list">
                        <label for="name">店舗名<span class="red">*</span></label><br>
                        <input type="text" id="name" name="name" placeholder="店舗名" value="{{ old('name') }}">
                    </div>
                    <div class="form_list">
                        <label for="address">店舗住所<span class="red">*</span></label><br>
                        <input type="text" id="address" name="address" placeholder="店舗住所" value="{{ old('address') }}">
                    </div>
                    <div class="form_list">
                        <label for="information">店舗について<span class="red">*</span></label><br>
                        <input type="text" id="information" name="information" placeholder="店舗について" value="{{ old('information') }}">
                    </div>
                    <div class="form_list">
                        <label for="image">画像<span class="red">*</span></label><br>
                        <input type="file" id="image" name="image" multiple accept=“image/png,image/jpeg/jpg”>
                    </div>
                    <div class="form_button">
                        <button type="button" class="button" onclick="location.href='{{ route('admin.shops.index')}}'">戻る</button>
                        <button class="button" type="submit">登録</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
