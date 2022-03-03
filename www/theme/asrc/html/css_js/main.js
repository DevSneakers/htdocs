/**
 * Swiper 4.0.7
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 * http://www.idangero.us/swiper/
 *
 * Copyright 2014-2017 Vladimir Kharlampidi
 *
 * Released under the MIT License
 *
 * Released on: November 28, 2017
 */
var swiperAnimation = new SwiperAnimation();
var swiper = new Swiper('.swiper-container', {
	slidesPerView: 1,
	spaceBetween: 0,
	effect:"fade",
	loop: true, //������ ������ ù��° ��, ������ ������ ����Ͻ� ��� false �� �����ϼž� �մϴ�. �����꿵���� ���ų� �ι�°�̻� �ƿ� �����Ŵٸ� true �� �ٲټŵ� �˴ϴ�.
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	preloadImages: false,   
	lazy: true,
	lazy: {
		loadPrevNext: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	paginationClickable: true,
	speed: 1000,
	autoplay: {
		delay: 5000,
		disableOnInteraction: false
	},
	on: {
      init: function () {
        swiperAnimation.init(this).animate();
      },
      slideChange: function () {
        swiperAnimation.init(this).animate();
      }
    }
});

if($('#bgndVideo').length) {
	swiper.on('slideChange', function () {	
		var isVideoa = swiper.slides[swiper.activeIndex].querySelector('#bgndVideo1');
		if (isVideoa) {		
			$("#bgndVideo").YTPPlay();	
		}else{
			$("#bgndVideo").YTPPause();
		}
	});
}


$( ".swiper-container" ).mouseover(function(){
	$(".swiper-button-next").show();
	$(".swiper-button-prev").show();
});
$( ".swiper-container" ).mouseleave(function(){
	$(".swiper-button-next").hide();
	$(".swiper-button-prev").hide();
});
