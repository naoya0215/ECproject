

window.addEventListener("DOMContentLoaded", () => {
    const infiniteSlider = new Swiper(".infinite-slider", {
        loop: true,
        loopedSlides: 2,
        slidesPerView: "auto",
        speed: 8000,
        autoplay: {
        delay: 0,
        disableOnInteraction: false,
        },
    });
});


//loop	         trueでスライダーがループするようになる。
//loopedSlides	 ループ時に何枚のスライドを複製するかを指定。slidesPerView: 'auto'とloopを併用する場合は、このオプションが必要。
//slidesPerView	 一度に何枚のスライドを表示するかを指定。'auto'にすると、各スライドが持つ本来の横幅が指定される。
//speed	         スライドが切り替わる速度を指定。
//autoplay	     スライダーが自動再生するようになる。
//delay          …スライドが表示されてから、次のスライドに移動するまでの停止時間を指定。停止させたくないので、0にしておく。
//disableOnInteraction…falseにすると、ユーザーがスライドをドラッグやスワイプしても、すぐに自動再生が再開する。


