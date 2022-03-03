/*****************************************************************

		Copyright C 다온테마 All rights reserved. 
		daontheme@daum.net
		본 페이지는 유료컨텐츠 다온테마용 JS입니다. 불법복제시 법적인 제제를 받으실 수 있습니다. 
		라이센스를 삭제하지 마세요. 라이센스 삭제시 불법 사용으로 간주될 수 있습니다.

		아래 내용을 수정/삭제 하지 마세요.

******************************************************************/
function main_lnb(){
	TmenuTG = $('.lnb_wrap');
	Tmenu_H = $('.lnb_wrap').height();
	Tpo = $('#header').height();
	TmenuTG.find('> ul > li a').bind('mouseenter focus click',function(){
		var position = $(window).scrollTop();
		if(position <= Tpo){
			$("#header").addClass("header_on");
		}
	});
	TmenuTG.bind('mouseleave',function(){
		setTimeout(function() {
			$("#header").removeClass("header_on");
		}, 140);
	});	
	$("#lnb").bind('mouseenter focus click',function(){
		var position = $(window).scrollTop();
		if(position <= Tpo){
			$("#header").addClass("header_on");
		}
	});
	$("#lnb").bind('mouseleave',function(){
		setTimeout(function() {
			$("#header").removeClass("header_on");
		}, 140);
	});	
	TmenuTG.find('> ul > li').bind('mouseenter mouseleave',function(event){
		if(event.type=='mouseenter'){
			if(!$(this).hasClass('current')){
				$(this).addClass('current');
			}
		}else{
			if(!$(this).hasClass('actived')){
				$(this).removeClass('current');
			}
		}
	});	
}


$(document).ready(function() {
	main_lnb();
});