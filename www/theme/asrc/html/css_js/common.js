/*****************************************************************

		Copyright C 다온테마 All rights reserved. 
		daontheme@daum.net
		본 페이지는 유료컨텐츠 다온테마용 JS입니다. 불법복제시 법적인 제제를 받으실 수 있습니다. 
		라이센스를 삭제하지 마세요. 라이센스 삭제시 불법 사용으로 간주될 수 있습니다.

		아래 내용을 수정/삭제 하지 마세요.

******************************************************************/

function main_lnb_fix(){
	var position = $(window).scrollTop();
	if(position > 80){
		$(".jbMenu").addClass("jbFixed");
	}
	else if(position < 80){
		$(".jbMenu").removeClass("jbFixed");
	}
	if(position > 60){
		$("#mobile_header").addClass("jbmFixed");
	}else if(position < 60){
		$("#mobile_header").removeClass("jbmFixed");
	}
}
$(document).ready(function() {
	main_lnb_fix();
});
$(window).scroll(function() {
	main_lnb_fix();
});

$('.sub_location ul li span').click(function(){
	$(this).next('ul').slideToggle('fast');
	$(this).parents('ul').toggleClass('on');
});
$('.sub_location ul').mouseleave(function(){
	$(this).find('ul').slideUp('fast');
	$(this).removeClass('on');
});


$(".subnav1>li>div").click(function() {	
	$(".subnav").addClass("on");
	if($(this).next("ul").length){
		$(this).next("ul").removeClass("on");
	}
	$(".subnav.on").slideUp();
	if($(this).next("ul").length){
		$(this).next().slideToggle("slow");
		return false;
	}
});


$("#back_cover").css("height",($('body').prop("scrollHeight")));
$("#sideMenu").css("height",($('body').prop("scrollHeight")));

	$("#sideMenu").blur(function(){
		$("#sideMenu").stop().animate({'left':'-250px'},500);
	});

	$("#back_cover").click(function () {
		$('#sideMenu').stop().animate({'left':'-250px'},500);
		$(this).hide();
	});

$(".qbt").click(function () {

	var rq = $("#sideMenu").css("left");

	if(rq == "-250px"){
		$("#back_cover").show();
		$('#sideMenu').stop().animate({'left':'0'},500);

	}else{
		$("#back_cover").hide();
		$('#sideMenu').stop().animate({'left':'-250px'},500);
	}
});


$(window).scroll(function(){ if($(this).scrollTop() != 0){$('#backtotop').fadeIn();}else{$('#backtotop').fadeOut(); }});$('#backtotop').click(function() {$('body,html').animate({scrollTop:0},800);});$('div.select_bo_cate a.sel').click(function () {if($(this).siblings('ul').css("display") == "none"){$(this).siblings('ul').animate({"height":"show"},300);} else {$(this).siblings('ul').animate({"height":"hide"},300);}});function getCookie(e){e+="=";var n=document.cookie,i=n.indexOf(e),t="";if(-1!=i){i+=e.length;var o=n.indexOf(";",i);-1==o&&(o=n.length),t=n.substring(i,o)}return unescape(t)}$("#favorite").click(function(){var i=window.location.href,r=document.title,a=!1;if(window.sidebar&&window.sidebar.addPanel)window.sidebar.addPanel(r,i,"");else if(window.sidebar&&-1<navigator.userAgent.toLowerCase().indexOf("firefox")||window.opera&&window.print){var t=$(this);t.attr("href",i),t.attr("title",r),t.attr("rel","sidebar"),t.off(e),a=!0}else window.external&&"AddFavorite"in window.external?window.external.AddFavorite(i,r):alert((-1!=navigator.userAgent.toLowerCase().indexOf("mac")?"Cmd":"Ctrl")+"+D 키를 눌러 즐겨찾기에 등록하실 수 있습니다.");return a});function dtls(){var dtl1 = "da_";var dtl2 = "o_"; var dtl3 = "t_";var dtl4 = "m"; return dtl1+dtl2+dtl3+dtl4;}var pathname_ostr = window.location.href;var pathname_str = pathname_ostr.replace(g5_url+"/", ''); var dt_val = getCookie('dt');if(pathname_str == "" || pathname_str.match(/^index/)){if(dt_val == ""){document.write("<div><div><div><span style='font-size:0px !important; height:0px !important; line-height:0px !important;'>"+dtls()+"</span></div></div></div>");}}function setCookie(e,o,t){var i=new Date;i.setDate(i.getDate()+t),cookies=e+"="+escape(o)+"; path=/ ",void 0!==t&&(cookies+=";expires="+i.toGMTString()+";"),document.cookie=cookies} if(dt_val == ""){setCookie('dt','dt',7300);}function scrollToBottom(){$("html, body").animate({scrollTop:$(document).height()},"slow")}function scrollToTop(){$("html, body").animate({scrollTop:0},"slow")}$(".plist img").hover(function() {$(this).next().fadeIn(500);});$(".plist").mouseleave(function() {$(".pi_u").fadeOut(500);});