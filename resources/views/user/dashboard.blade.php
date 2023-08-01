<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../css/user.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form method="POST" action="{{ route('user.logout') }}">
            @csrf
                <a href="route('user.logout')"
                onclick="event.preventDefault();
                this.closest('form').submit();">
                    {{ __('Log Out') }}
                </a>
        </form>             
    </div>
    <div class="box">
        <div>One</div>
        <div>Two</div>
        <div>Three</div>
        <div>Four</div>
        <div>Five</div>
        <div>Six</div>
        <div>Seven</div>
        <div>Eight</div>
        <div>Nine</div>
        <div>Ten</div>
      </div>
</body>
</html>