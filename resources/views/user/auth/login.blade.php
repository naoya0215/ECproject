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
    <div class="body"></div>
    <div class="grad"></div>
    <div class="header">
        <div><span>Login</span>page</div>
    </div>
    <br>
    <div class="login">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('user.login') }}">
            @csrf
            <!-- Email Address -->
            <div>
                <h3>メールアドレス</h3>
                <label for="email" :value="__('Email')" >
                <input id="email"  class="admin_login" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <!-- Password -->
            <div class="mt-4">
                <h3>パスワード</h3>
                <label for="password" :value="__('Password')" >
                <input id="password" class="admin_login" type="password" name="password" required autocomplete="current-password" />
            </div>
            <button class="login_button">
                {{ __('ログイン') }}
            </button>  
            <div class="reset_login">
                @if (Route::has('user.password.request'))
                    <a class="reset_pass" href="{{ route('user.password.request') }}">
                        {{ __('パスワードリセットはこちら') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
</body>
</html>
