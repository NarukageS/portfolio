"use strict";

$(function () {
  /*---------- ハンバーガーメニュー ----------*/
  const hamburger = $(".js_hamburger");
  const navigation = $(".js_navigation");

  hamburger.on("click", function () {
    $(this).toggleClass("is_active");
    navigation.toggleClass("is_active");
    $(".js_body").toggleClass("is_active");
  });

   // #で始まるリンクをクリックした場合
  $('a[href^="#"]').click(function() {
    hamburger.removeClass("is_active");
    navigation.removeClass("is_active");
    $(".js_body").removeClass("is_active");
    // スクロールの速度
    let speed = 700;
    // スクロールタイプ
    let type = 'swing';
    // href属性の取得
    let href= $(this).attr("href");
    // 移動先の取得（hrefが#indexならトップ$(html)に、）
    let target = $(href == "#index" ? 'html' : href);
    // 移動先のポジション取得
    let position = target.offset().top;
    // animateでスムーススクロール
    $('body,html').animate({scrollTop:position}, speed, type);
    return false;

  
  });

  // スクロール時ヘッダーの高さ変更
  $(window).on('load scroll', function() {
    let scrollPos = $(this).scrollTop();
    if ( scrollPos > 100 ) {
    $('.l_header_inner').addClass('is-active');
    } else {
    $('.l_header_inner').removeClass('is-active');
    }
    });

    // SKILL
    $('.js_slider').slick({
      autoplay: true, // 自動でスクロール
      autoplaySpeed: 0, // 自動再生のスライド切り替えまでの時間を設定
      speed: 5000, // スライドが流れる速度を設定
      cssEase: "linear", // スライドの流れ方を等速に設定
      slidesToShow: 5, // 表示するスライドの数
      swipe: false, // 操作による切り替えはさせない
      arrows: false, // 矢印非表示
      pauseOnFocus: false, // スライダーをフォーカスした時にスライドを停止させるか
      pauseOnHover: false, // スライダーにマウスホバーした時にスライドを停止させるか
      responsive: [
        {
          breakpoint: 1080,
          settings: {
            slidesToShow: 4, 
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3, 
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2, 
          }
        }
      ]
    });

    $('.js_slider--reverse').slick({
      autoplay: true, // 自動でスクロール
      autoplaySpeed: 0, // 自動再生のスライド切り替えまでの時間を設定
      speed: 5000, // スライドが流れる速度を設定
      cssEase: "linear", // スライドの流れ方を等速に設定
      slidesToShow: 5, // 表示するスライドの数
      swipe: false, // 操作による切り替えはさせない
      arrows: false, // 矢印非表示
      pauseOnFocus: false, // スライダーをフォーカスした時にスライドを停止させるか
      pauseOnHover: false, // スライダーにマウスホバーした時にスライドを停止させるか
      rtl: true,
      responsive: [
        {
          breakpoint: 1080,
          settings: {
            slidesToShow: 4, 
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3, 
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2, 
          }
        }
      ]
    });

    //問い合わせページ
    $('.js_contact_wrapper').hide().fadeIn(1000);

    //ページトップ
    $(window).scroll(function () {
      if ($(window).scrollTop() > $(window).height() - 120) {
        $('.js_page_top').addClass('in');
      } else {
        $('.js_page_top').removeClass('in');
      }
    });
  
  
    $('.js_page_top').click(function () {
      $('html,body').animate({
        scrollTop:0
      }, 600)
    });
});

//gsap

//POLICY
const TL = gsap.timeline();

TL
.from('.js_kv_copy__1', {autoAlpha: 0, x: -100, duration: 0.5}, 0)
.from('.js_kv_copy__2', {autoAlpha: 0, x: -100, duration: 0.5}, 0.5)
.from('.js_kv_copy__3', {autoAlpha: 0, x: -100, duration: 0.5}, 1);

//セクション
gsap.from(".js_about", {
  scrollTrigger: {
    trigger: '.js_about',
    start: "center bottom",
    end: "center top",
  },
  duration: 1,
  y: 200,
  opacity: 0,
  ease: "Power4.inOut",
});

gsap.from(".js_policy_content", {
  scrollTrigger: {
    trigger: '.js_policy',
    start: "center bottom",
    end: "center top",
  },
  duration: 1,
  y: 200,
  opacity: 0,
  ease: "Power4.inOut",
  stagger: {
    from: "start", //左側から
    amount: 1 
  }
});

gsap.from(".js_works_content", {
  scrollTrigger: {
    trigger: '.js_works_content',
    start: "center bottom",
    end: "center top",
  },
  duration: 1,
  y: 200,
  opacity: 0,
  ease: "Power4.inOut",
  stagger: {
    from: "start", //左側から
    amount: 1.5
  }
});

// セクションタイトル
const items = gsap.utils.toArray(".js_section_title");
items.forEach((item, idx) => {
  gsap.fromTo(
    item,
    {
      // インデックス番号に+1して、2で割った時にあまりが0だったら100%、でなければ-100%に配置する
      x: (idx + 1) % 2 == 0 ? "100%" : "-100%",
      // 不透明度を0
      autoAlpha: 0,
    },
    {
      // y値を定位置に戻す
      x: 0,
      // 不透明度を0
      autoAlpha: 1,
      // 変化前から変化後のアニメーションのスピード
      ease: "Power4.inOut",
      // スクロールで発火させる
      scrollTrigger: {
        // アニメーションの発火するスクロール位置
        // item.parentNode: itemの親要素
        trigger: item.parentNode,
        // スクロール位置の基準（markersをするとscroller-startと表示され、top centerは画面中央）
        start: "top 70%",
        // 発火するスクロール位置や終了位置をマーカーする
        //markers: true,
      },
    }
  );

  });

  // 鳥
  VANTA.BIRDS({
    el: "#bird",
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    minHeight: 200.00,
    minWidth: 200.00,
    scale: 1.00,
    scaleMobile: 1.00,
    backgroundColor: 0xffffff,
    color1: 0x0,
    color2: 0x0,
    separation: 75.00,
    quantity: 4.00
  });

  