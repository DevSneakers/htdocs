<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "복지관소개"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "담당자 안내"; //커스텀페이지의 타이틀을 입력합니다.
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
			고객님의 방문을 환영합니다.
		</p>
	</div>


	<div class="scontents">

<p>
   <table cellpadding="1" cellspacing="0" style="border-color: #cccccc; border-style: solid; border-width: 1px; border-collapse: collapse; width: 800px;">
      <tbody>
         <tr>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;"><a href="http://asrc2103.cafe24.com/theme/daontheme_business08/html/005/017.php" target="_self">설립목적 및 비전&nbsp;</td>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;"><a href="http://asrc2103.cafe24.com/theme/daontheme_business08/html/005/018.php" target="_self">기관CI&nbsp;&nbsp;</td>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;"><a href="http://asrc2103.cafe24.com/theme/daontheme_business08/html/005/019.php" target="_self">연혁&nbsp;&nbsp;</td>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;"><a href="http://asrc2103.cafe24.com/theme/daontheme_business08/html/005/020.php" target="_self">오시는 길&nbsp;&nbsp;</td>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;"><a href="http://asrc2103.cafe24.com/theme/daontheme_business08/html/005/021.php" target="_self">담당자 안내&nbsp;&nbsp;</td>
         </tr>

         </tr>
      </tbody>
   </table>
   </p>
<br><br>
		
		

<p><img src="http://asrc09502.cafe24.com/data/editor/2101/20210103151955_4a9eaecc6a58616f46681d24342af334_kcj3.jpg" alt="203744.jpg" style="width:698px;height:595px;" /></p>
<iframe style="border:0px solid #777777;" src="http://gpsports.cafe24.com/asrc/board.php?board=kkk200801&amp;config=2" width="700" height="1000" frameborder="0" marginwidth="0" marginheight="0"></iframe>


<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>