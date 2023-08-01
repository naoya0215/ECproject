//ハンバーガーメニュー

$(function() {
    $('.js-btn').on('click', function() {
      $('.menu , .btn-line').toggleClass('open');
    })
});


//画像切り替え
$(function(){
    let index = 0;
    $('.img').eq(index).addClass('current-img');

    setInterval(function() {
        $('.img').eq(index).removeClass('current-img');
        if(index == $('.img').length - 1) {
            index = 0;
        }else{
            index++;
        }
        // 表示
        $('.img').eq(index).addClass('current-img');
    }, 3000);
});

//フェード処理
$(window).on('scroll', function() {
  $('.fade-up').each(function() {
    var target = $(this).offset().top;
    var scroll = $(window).scrollTop();
    var height = $(window).height();

    var point = target - height;

    if (scroll > point && scroll < (point + $(this).height() + height)) {
      $(this).addClass('active');
    } else {
      $(this).removeClass('active');
    }
  });

});

//タブ切り替え

document.addEventListener('DOMContentLoaded', function(){
  // タブに対してクリックイベントを適用
  const tabs = document.getElementsByClassName('tab');
  for(let i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener('click', tabSwitch, false);
  }

  // タブをクリックすると実行する関数
  function tabSwitch(){
    // タブのclassの値を変更
    document.getElementsByClassName('is-active')[0].classList.remove('is-active');
    this.classList.add('is-active');
    // コンテンツのclassの値を変更
    document.getElementsByClassName('is-show')[0].classList.remove('is-show');
    const arrayTabs = Array.prototype.slice.call(tabs);
    const index = arrayTabs.indexOf(this);
    document.getElementsByClassName('panel')[index].classList.add('is-show');
  };
}, false);

//スライダー

const swiper = new Swiper(".swiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    pagination: {
      el: ".swiper-pagination", //必須の設定：ページネーションのclass指定
      type: "bullets",
      clickable: "clickable"
    },
    loop: true, //繰り返し指定
    spaceBetween: 10 //スライド感の余白
});


