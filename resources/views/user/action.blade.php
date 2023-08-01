<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/action.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <title>EC_SITE風ポートフォリオ</title>
</head>
<body>
    <header>
        <div class="header_wrapper">
            <div class="header_logo">
                <a href="{{ url('/') }}"><img src="img/logo001.png" alt="ロゴ画像"></a>
            </div>
            <div class="menu">
                <li class="menu_list"><a href="{{ url('/') }}">トップ</a></li>
                <li class="menu_list"><a href="{{ url('user.action') }}">利用方法</a></li>
                <li class="menu_list"><a href="{{ route('user.login') }}">ログイン</a></li>
            </div>
            <button type="button" class="btn js-btn">
                <span class="btn-line"></span>
            </button>
        </div>
    </header>
    <main>
        <div class="bg">
            <div class="list_wrapper">
                <h1>利用方法</h1>
                <div class="list_flex">
                    <div class="list_left">
                        <h1>管理者ページ</h1>
                        <div class="list_box">
                            <div class="list_title">
                                <h2>STEP1</h2>
                            </div>
                            <div class="list_menu">
                                <p><span>管理者ページ</span>より新規登録
                                    <br><span>Adminpage</span>からアカウントを作成してください。
                                </p>
                            </div>    
                        </div>
                        <div class="list_box">
                            <div class="list_title">
                                <h2>STEP2</h2>
                            </div>
                            <div class="list_menu">
                                <p><span>管理者ページ</span>にログインし商品登録
                                    <br>商品登録を行うことでユーザー側に商品が表示されます。
                                </p>
                            </div>      
                        </div>
                        <div class="list_box">
                            <div class="list_title">
                                <h2>STEP3</h2>
                            </div>
                            <div class="list_menu">
                                <p><span>管理者ページ</span>よりお知らせ登録
                                    <br>トップページにお知らせ情報が表示されます。
                                </p>
                            </div>    
                        </div>
                        <div class="list_box">
                            <div class="list_title">
                                <h2>STEP4</h2>
                            </div>
                            <div class="list_menu">
                                <p><span>管理者ページ</span>より店舗登録
                                    <br>店舗情報など登録ができます。
                                </p>
                            </div>   
                        </div>
                    </div>
                    <div class="list_right">
                        <h1>お客様ページ</h1>
                        <div class="list_box">
                            <div class="list_title">
                                <h2>STEP1</h2>
                            </div>
                            <div class="list_menu">
                                <p><span>お客様ページ</span>より新規登録
                                    <br><span>Loginpage</span>からアカウントを作成してください。
                                </p>
                            </div>    
                        </div>
                        <div class="list_box">
                            <div class="list_title">
                                <h2>STEP2</h2>
                            </div>
                            <div class="list_menu">
                                <p><span>お客様ページ</span>にログインし商品を閲覧
                                    <br>管理者側で商品登録されていると表示されます。
                                </p>
                            </div>      
                        </div>
                        <div class="list_box">
                            <div class="list_title">
                                <h2>STEP3</h2>
                            </div>
                            <div class="list_menu">
                                <p>商品を選ぶ
                                    <br>ご希望の商品をお選びください。
                                </p>
                            </div>    
                        </div>
                        <div class="list_box">
                            <div class="list_title">
                                <h2>STEP4</h2>
                            </div>
                            <div class="list_menu">
                                <p>カートに入れる
                                    <br>数量を選択しカートに入れてください。
                                </p>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <main>
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