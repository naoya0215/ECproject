<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
                <a href="route('admin.logout')"
                onclick="event.preventDefault();
                this.closest('form').submit();">
                    {{ __('Log Out') }}
                </a>
        </form>             
    </div>
</body>
</html>