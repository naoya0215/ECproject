<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../css/login.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
</head>
<body>
    <header>
        <div class="header_wrapper">
            <div class="header_logo">
                <a href="{{ url('/') }}"><img src="img/logo001.png" alt="ロゴ画像"></a>
            </div>
            <div class="menu">
                <li class="menu_list"><a href="{{ url('user.menu') }}">商品一覧</a></li>
                <li class="menu_list"><a href="{{ url('user.action') }}">利用方法</a></li>
                <li class="menu_list"><a href="{{ route('user.login') }}">ログイン</a></li>
            </div>
            <button type="button" class="btn js-btn">
                <span class="btn-line"></span>
            </button>
        </div>
    </header>
    <div class="flex_wrapper">
        <div class="page_list">
            <h1><span>Login</span>page</h1>
            <p><a href="{{ route('admin.login') }}">管理者の方はこちら</a></p>
        </div>
        <div class="login">
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <form method="POST" action="{{ route('user.login') }}">
                @csrf
                <div class="text_login">
                    <h3>メールアドレス</h3>
                    <label for="email" :value="__('Email')" >
                    <input id="email" type="email" name="email" :value="old('email')" required autofocus />
                </div>
                <div class="text_login">
                    <h3>パスワード</h3>
                    <label for="password" :value="__('Password')" >
                    <input id="password" type="password" name="password" required autocomplete="current-password" />
                </div>
                <button class="login_button">
                    {{ __('ログイン') }}
                </button>  
                <div class="reset_login">
                    <a class="reset_pass" href="{{ route('user.register') }}">
                        {{ __('新規登録はこちら') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
    <footer>
        <div class="footer_wrapper">
            <ul class="footer_box">
                <li>紹介</li>
                <li>XXXXXXXXXXXX</li>
                <li>XXXXXXXXXXXX</li>
                <li>XXXXXXXXXXXX</li>
            </ul>
            <ul class="footer_box">
                <li>実績</li>
                <li>XXXXXXXXXXXX</li>
                <li>XXXXXXXXXXXX</li>
                <li>XXXXXXXXXXXX</li>
            </ul>
            <ul class="footer_box">
                <li>お問い合わせ</li>
                <li>XXXXXXXXXXXX</li>
                <li>XXXXXXXXXXXX</li>
                <li>XXXXXXXXXXXX</li>
            </ul>
            <ul class="footer_box">
                <li>トップ</li>
                <li>XXXXXXXXXXXX</li>
                <li>XXXXXXXXXXXX</li>
                <li>XXXXXXXXXXXX</li>
            </ul>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>
