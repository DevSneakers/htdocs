<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "기관안내"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "이메일무단수집거부"; //커스텀페이지의 타이틀을 입력합니다.
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
<p class="text" style="margin-top:18px;margin-bottom:15px;padding:0px;font-size:18px;color:#434343;background-color:#ffffff;">이메일주소&nbsp;<span style="margin:0px;padding:0px;vertical-align:baseline;font-weight:bold;color:#f51515;">무단수집</span>을&nbsp;<span style="margin:0px;padding:0px;vertical-align:baseline;font-weight:bold;color:#f51515;">거부</span>합니다.</p>
<p class="cnt" style="padding:0px;line-height:2.2;font-size:13px;color:#555555;letter-spacing:-0.5px;background-color:#ffffff;">본 웹사이트에 게시된 이메일 주소가 전자우편 수집 프로그램이나 그 밖의 기술적 장치를 이용하여&nbsp;<strong style="margin:0px;padding:0px;vertical-align:baseline;color:#010101;">무단으로 수집되는 것을 거부</strong>하며,<br />이를&nbsp;<strong style="margin:0px;padding:0px;vertical-align:baseline;color:#010101;">위반시 정보통신망법에 의해 형사 처벌</strong>됨을 유념하시기 바랍니다.</p>


<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>