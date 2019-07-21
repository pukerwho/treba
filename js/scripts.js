$('.header__menu').on('click', function(e) {
  $('.menu-cover').css({'display':'block'}).delay(20).queue(function() {
    $('.menu-cover__block').addClass('menu-cover__block-active');
    $(this).dequeue();
  });
});

$('.menu-cover__close img, .menu-cover__close-circle').on('click', function(i) {
  $('.menu-cover__block').removeClass('menu-cover__block-active');
  $('.menu-cover').css({'display':'none'});
});

$(window).scroll(function(){
  var h_scroll = $(this).scrollTop();
  if (h_scroll > 56) {
    $('header').addClass('header__fixed')
  } else {
    $('header').removeClass('header__fixed')
  }
})

//Подпись
if($('.about__sign'). length){
  $(window).scroll(function(event){
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    signTop = $('.about__sign').offset().top - $(window).height() + 5;
    if (scrollTop > signTop) {
      $('.about__sign-animate').css({'opacity':'1'}).delay(4500).queue(function() {
        $('.about__sign-subtitle').addClass('about__sign-subtitle__show');
        $(this).dequeue();
      });
    }
  });
}

$(document).on('mousemove','.use',function(e){ 
  var x = e.offsetX;
  var newposX = x/10;
  // $('.tpl-shadows').css('transform','translate3d('+ newposX +'px, 0,0)');
});

var swiperMainWorks = function() {
  if ($(document).width() > 760) {
    var swiperWorks = new Swiper('.swiper-container-works', {
      slidesPerView: 1,
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
      loop: true,
      pagination: {
        el: '.swiper-pagination-works',
      },
      navigation: {
        nextEl: '.swiper-next-works',
        prevEl: '.swiper-prev-works',
      },
    })
  } else {
    var swiperWorks = new Swiper('.swiper-container-works', {
      slidesPerView: 1,
      centeredSlides: true,
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
      loop: true,
      pagination: {
        el: '.swiper-pagination-works',
      },
      navigation: {
        nextEl: '.swiper-next-works',
        prevEl: '.swiper-prev-works',
      },
    })
  }
}

swiperMainWorks();

var scene_one = document.querySelector('#works__info-one');
var parallaxInstanceOne = new Parallax(scene_one);
var scene_two = document.querySelector('#works__info-two');
var parallaxInstanceTwo = new Parallax(scene_two);
var scene_three = document.querySelector('#works__info-three');
var parallaxInstanceThree = new Parallax(scene_three);

var shadows = document.querySelector('#shadows-js');
var parallaxInstanceShadows = new Parallax(shadows);