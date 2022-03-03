/**
 * Swiper 5.2.1
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 * http://swiperjs.com
 *
 * Copyright 2014-2019 Vladimir Kharlampidi
 *
 * Released under the MIT License
 *
 * Released on: November 16, 2019
 */
$(document).ready(function(){						
			
	var newsList = new Swiper('.swiper-container3', {		
		slidesPerView: "auto", 
		initialSlide:0,
		spaceBetween: 20,
		slidesPerGroup: 1,
		loop: false, // false 로 고정하셔야 합니다.
		spaceBetween: 20,
		centeredSlides: true,
		loopFillGroupWithBlank: true,
		autoplay: {
			delay: 3000, //롤링되는 속도
			disableOnInteraction: false
		},
		scrollbar: {
			el: '.swiper-scrollbar3',
			hide: false,
		},
		navigation: {
			nextEl: '.swiper-button-next3',
			prevEl: '.swiper-button-prev3',
		},
		pagination:{
			el:'.swiper-pagination3',
			type:'bullets',
			clickable:true
		},
		breakpoints: {
			360: {
			  slidesPerView: 3,
			  spaceBetween: 10,
			},
			 640: {
			  slidesPerView: 3,
			  spaceBetween: 20,
			},
			768: {
			  slidesPerView: 4,
			  spaceBetween: 20,
			  centeredSlides: false,
			},
			1024: {
			  slidesPerView: 5,
			  spaceBetween: 20,
			  centeredSlides: false,
			}
		}
	});

	$(".swiper-container3 .swiper-slide img").css("width",$(".swiper-container3 .swiper-slide").width());


	$(window).resize(function(){
		$(".swiper-container3 .swiper-slide img").css("width",$(".swiper-container3 .swiper-slide").width());
	}); 

	$('.swiper-container3').on('mouseenter', function(e){
		newsList.autoplay.stop();
	});
	$('.swiper-container3').on('mouseleave', function(e){
		newsList.autoplay.start();
	});
});