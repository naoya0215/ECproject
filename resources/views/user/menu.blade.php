<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
        <h1>商品一覧</h1>
        <dl class="accordion js-accordion">
            <div class="accordion__item js-accordion-trigger">
                <dt class="accordion__title">ギフト</dt>
                <dd class="accordion__content">
                    <div class="accordion_box">
                        <img src="img/menu001.jpg" alt="画像">
                        <p>ギフト人気アイテムなど</p>
                    </div>
                </dd>
            </div>
            <div class="accordion__item js-accordion-trigger">
                <dt class="accordion__title">アクセサリー</dt>
                <dd class="accordion__content">
                    <div class="accordion_box">
                        <img src="img/menu002.jpg" alt="画像">
                        <p>定番アイテムから最新トレンドアイテムまで</p>
                    </div>
                </dd>
            </div>
            <div class="accordion__item js-accordion-trigger">
                <dt class="accordion__title">ファッション</dt>
                 <dd class="accordion__content">
                    <div class="accordion_box">
                        <img src="img/menu003.jpg" alt="画像">
                        <p> レディースからメンズ・キッズまで</p>
                    </div>
                </dd>
            </div>
            <div class="accordion__item js-accordion-trigger">
                <dt class="accordion__title">日用品</dt>
                <dd class="accordion__content">
                    <div class="accordion_box">
                        <img src="img/menu004.jpg" alt="画像">
                        <p>日常の生活の中で使う雑貨など</p>
                    </div>
                </dd>
            </div>
            <div class="accordion__item js-accordion-trigger">
                <dt class="accordion__title">コーヒー</dt>
                <dd class="accordion__content">
                    <div class="accordion_box">
                        <img src="img/menu005.jpg" alt="画像">
                        <p>常に豊富な100種類以上のコーヒー豆をご用意</p>
                    </div>
                </dd>
            </div>
            <div class="accordion__item js-accordion-trigger">
                <dt class="accordion__title">アウトドア</dt>
                <dd class="accordion__content">
                    <div class="accordion_box">
                        <img src="img/menu007.jpg" alt="画像">
                        <p>自然と一体となる爽快感</p>
                    </div>
                </dd>
            </div>
            <div class="accordion__item js-accordion-trigger">
                <dt class="accordion__title">その他</dt>
                <dd class="accordion__content">
                    <div class="accordion_box">
                        <img src="img/menu006.jpg" alt="画像">
                        <p>大幅な性能アップが期待</p>
                    </div>
                </dd>
            </div>
        </dl>
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
    <script src="js/menu.js"></script>
</body>
</html>