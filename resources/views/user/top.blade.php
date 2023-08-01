<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
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
                <li class="menu_list"><a href="{{ url('user.menu') }}">商品一覧</a></li>
                <li class="menu_list"><a href="{{ url('user.action') }}">利用方法</a></li>
                <li class="menu_list"><a href="{{ route('user.login') }}">ログイン</a></li>
            </div>
            <button type="button" class="btn js-btn">
                <span class="btn-line"></span>
            </button>
        </div>
    </header>
    <main>
        <div class="img_inner">
            <img class="img" src="img/category001.jpg" alt="gift">
            <img class="img" src="img/category002.jpg" alt="gift">
            <img class="img" src="img/category003.jpg" alt="gift">
            <img class="img" src="img/category004.jpg" alt="gift">
            <img class="img" src="img/category005.jpg" alt="gift">
            <img class="img" src="img/category006.jpg" alt="gift">
        </div> 
        <div class="tab-panel">
            <!--タブ-->
            <ul class="tab-group">
                <li class="tab tab-A is-active fade-up">cafe</li>
                <li class="tab tab-B fade-up">shop</li>
                <li class="tab tab-C fade-up">gift</li>  
            </ul>
            <!--タブを切り替えて表示するコンテンツ-->
            <div class="panel-group fade-up">
                <div class="panel tab-A is-show">
                    <img src="img/shop_003.jpg" alt="店舗">
                    <p>cafe</p>
                </div>
                <div class="panel tab-B">
                    <img src="img/shop_002.jpg" alt="店舗">
                    <p>shop</p>
                </div>
                <div class="panel tab-C">
                    <img src="img/shop_001.jpg" alt="店舗">
                    <p>gift</p>
                </div>
            </div>
        </div>
        <div class="main_notice">
            <div class="notice">
                <h1>お知らせ</h1>
                @if (count($notices) > 0)
                    @foreach($notices as $notice)
                    <p>{{ $notice->name }}</p>
                    <img src="{{ Storage::url($notice->image) }}">
                    <p>{{ $notice->information }}</p>
                    @endforeach  
                @else
                    お知らせ情報がありません
                @endif 
            </div>
            <div class="news">
                <h1>NEWS</h1>
                <div class="news_wrapper">
                    <p class="fade-up">責任あるAI開発、米政府がオープンAIやマイクロソフトなど</p>
                    <p class="fade-up">アップルGPT開発中、オープンAIやグーグル追う</p>
                    <p class="fade-up">[最大40%OFF]サマーセール開催中！</p>
                    <p class="fade-up">「Llama 2」Metaが発表、Microsoftと優先連携</p>
                    <p class="fade-up">何万回も衝突実験をして 何百キロも走り続けて</p>
                </div>
            </div>
        </div>
        <div class="swiper">
            <!-- スライド要素を包む要素 -->
            <div class="swiper-wrapper">
            <!-- 各スライド -->
            <div class="swiper-slide slide1">
                <p><img src="img/gift010.jpg" alt="swiper" /></p>
            </div>
            <div class="swiper-slide slide1">
                <p><img src="img/gift011.jpg" alt="swiper" /></p>
            </div>
            <div class="swiper-slide slide1">
                <p><img src="img/gift012.jpg" alt="swiper" /></p>
            </div>
            <div class="swiper-slide slide2">
                <p><img src="img/gift008.jpg" alt="swiper" /></p>
            </div>
            <div class="swiper-slide slide3">
                <p><img src="img/gift009.jpg" alt="swiper" /></p>
            </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
        </div>
    </main>
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
    <!-- CDN読み込み -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- JSファイル読み込み -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>