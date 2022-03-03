<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "이용안내"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "기관방문신청"; //커스텀페이지의 타이틀을 입력합니다.
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

<iframe style="border:0px solid #777777;" src="https://gpsports.cafe24.com/asrc/board.php?board=kkkorder2&amp;config=2&amp;command=skin_insert&amp;exe=insert_write_form2" width="700" height="1200" frameborder="0" marginwidth="0" marginheight="0"></iframe>


<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>