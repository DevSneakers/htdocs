<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "기관안내"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "접근성정책"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	include_once('header.php'); //회사소개의 공통 상단을 연결합니다.

	
?>

	<div id="sub_tit">
		<div class="path">
			<li><a href="/"><span class="ic-home"><i></i></span></a></li>
			<li><?php echo $tmenu_?></li>
			<li><?php echo $g5['title']?></li>
		</div>
		<div class="title"><?php echo $tmenu_?></div>
		<p class="normal_txt">
			홈페이지를 방문해주셔서 감사합니다.
		</p>
	</div>


	<div class="scontents">

<p>   </p>
<br /><br />
<p><br /></p>
<p>
<div class="text1" style="margin:0px 0px 30px;padding:0px;line-height:31px;font-size:15px;font-weight:600;color:#666666;background-color:#ffffff;">본 홈페이지는 장애인, 노인 등 정보취약계층의 인터넷 정보 접근을 보장하기 위해 2005년 12월<br />국가표준(KICS)으로 제정된 “인터넷 웹 콘텐츠 접근성 지침(KICS.0T-10.0003)"을 준수하여 제작하였습니다.<br />웹 접근성의 문제점을 발견하시는 이용자분께서는 언제든지 아래로 연락주시기 바랍니다.</div>
<div class="common_list" style="margin:0px;padding:0px;color:#666666;font-family:'Nanum Gothic', '나눔고딕', 'Malgun Gothic', '맑은 고딕', '돋움', Dotum, '굴림', Gulim;font-size:14px;background-color:#ffffff;">
   <ul style="list-style:none;margin:0px;padding:0px;">
      <li style="line-height:30px;padding-left:10px;background:url(&quot;../images/sub/blet2.gif&quot;) no-repeat left 13px;letter-spacing:-0.5px;">접근성정책 담당: 운영지원부장</li>
      <li style="line-height:30px;padding-left:10px;background:url(&quot;../images/sub/blet2.gif&quot;) no-repeat left 13px;letter-spacing:-0.5px;">이메일 : asrc@hanmail.net</li>
      <li style="line-height:30px;padding-left:10px;background:url(&quot;../images/sub/blet2.gif&quot;) no-repeat left 13px;letter-spacing:-0.5px;">연락처 : 031-465-0950</li>
      </ul>
   </div>




<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>