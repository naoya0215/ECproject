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
        <div><span>Register</span>page</div>
    </div>
    <br>
    <div class="login">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('user.register') }}">
            @csrf
            <!-- Name -->
            <div>
                <h3>名前</h3>
                <label for="name" :value="__('Name')" >
                <input id="name" type="text" name="name" :value="old('name')" required autofocus />
            </div>
            <!-- Email Address -->
            <div>
                <h3>メールアドレス</h3>
                <label for="email" :value="__('Email')" >
                <input id="email" class="admin_login" type="email" name="email" :value="old('email')" required autofocus >
            </div>
            <!-- Password -->
            <div>
                <h3>パスワード</h3>
                <label for="password" :value="__('Password')" >
                <input id="password" class="admin_login" type="password" name="password" required autocomplete="current-password" >
            </div>
            <!-- Confirm Password -->
            <div>
                <h3>パスワード確認</h3>
                <label for="password_confirmation" :value="__('Confirm Password')" >
                <input id="password_confirmation" type="password"  name="password_confirmation" required />
            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('user.login') }}">
                    {{ __('Already registered?') }}
                </a>
                <button class="login_button">
                    {{ __('新規登録') }}
                </button> 
            </div>
        </form>
    </div>
</body>
</html>
