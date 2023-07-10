<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/earlyaccess/kokoro.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link href="css/style.css" rel="stylesheet">
    <title>EC_SITE風ポートフォリオ</title>
</head>
<body>
    <header>
        <div class="header_wrapper">
            <img src="img/logo001.png" alt="ロゴ画像">
            <ul>
                <li>紹介</li>
                <li>実績</li>
                <li>お問い合わせ</li>
                <li><a href="{{ route('user.login') }}">ログイン</a></li>
            </ul>
        </div>
    </header>
    <main>
        <div class="main_wrapper">
            <div class="top_image">
                <img src="img/top_gift.jpg" alt="トップイメージ">
                <h1>人生には価値がある<br>
                    自由な心が生まれる場所へ
                </h1>
            </div>
            <div class="main_box">
                <div class="main_left">
                    <img src="img/gift001.jpg" alt="メイン画像">
                    <div class="main_text">
                        <h1>これまでの道のり</h1>
                        <p>
                            仕立てのいい服を着たときのような 自由な心が生まれる場所へ<br>
                            心のこもった料理を食べたときのような 生きる力が生まれる場所へ<br>
                            新しいものが好きな人と 時に磨かれたものが好きな人 その両方に 愛される場所でありたい<br>
                            これまでにないものを一番に実現する あなたにとっての一番を追求する<br>
                            人生は素晴らしい 生きることには価値がある 心の底からそう思える日々のために<br>
                            時代の感性をもった、いいものにいいと言える人のためのマンション<br>
                            きっと、あなたに似合うと思います<br>
                        </p>
                    </div>
                </div>
                <div class="main_right">
                    <div class="main_text">
                        <h1>これまでの道のり</h1>
                        <p>
                            仕立てのいい服を着たときのような 自由な心が生まれる場所へ<br>
                            心のこもった料理を食べたときのような 生きる力が生まれる場所へ<br>
                            新しいものが好きな人と 時に磨かれたものが好きな人 その両方に 愛される場所でありたい<br>
                            これまでにないものを一番に実現する あなたにとっての一番を追求する<br>
                            人生は素晴らしい 生きることには価値がある 心の底からそう思える日々のために<br>
                            時代の感性をもった、いいものにいいと言える人のためのマンション<br>
                            きっと、あなたに似合うと思います<br>
                        </p>
                    </div>
                    <img src="img/gift001.jpg" alt="メイン画像">
                </div>
            </div>
        </div>
        <div class="main_grid">
            <div class="grid_item">
                <img src="img/gift001.jpg" alt="grid">
            </div>
            <div class="grid_item">
                <img src="img/gift002.jpg" alt="grid">
            </div>
            <div class="grid_item">
                <img src="img/gift003.jpg" alt="grid">
            </div>
            <div class="grid_item">
                <img src="img/gift004.jpg" alt="grid">
            </div>
            <div class="grid_item">
                <img src="img/gift005.jpg" alt="grid">
            </div>
            <div class="grid_item">
                <img src="img/gift006.jpg" alt="grid">
            </div>
        </div> 
        <div class="main_swiper">
            <div class="swiper_text">
                <h1>それでもやる、頭と、心と、手を動かして</h1>
                <p>
                    何万回も衝突実験をして 何百キロも走り続けて<br>
                    一つ一つ安全性をつみあげていく まだないものはつくればいい 多くの人が使えなければ意味がない<br>
                    ひとりにひとつのいのち そのためにHondaは、二輪でも四輪でも 交通事故死亡者ゼロを目指し続ける <br>
                    その道のりは果てしない それでもやる、頭と、心と、手を動かして<br>
                </p>
            </div>
            <div class="container">
                <div class="swiper infinite-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="img/gift007.jpg" alt="swiper" /></div>
                        <div class="swiper-slide"><img src="img/gift008.jpg" alt="swiper" /></div>
                        <div class="swiper-slide"><img src="img/gift009.jpg" alt="swiper" /></div>
                        <div class="swiper-slide"><img src="img/gift010.jpg" alt="swiper" /></div>
                    </div>
                </div>
            </div>
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
    <script src="js/main.js"></script>
</body>
</html>