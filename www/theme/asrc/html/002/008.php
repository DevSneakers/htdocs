<?php 	
	include "../../../../common.php";
	
	$tmenu_ = ""; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "이용절차"; //커스텀페이지의 타이틀을 입력합니다.
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

<p>
   <table cellpadding="1" cellspacing="0" style="border-color: #cccccc; border-style: solid; border-width: 1px; border-collapse: collapse; width: 800px;">
      <tbody>
         <tr>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;">대기자 현황&nbsp;</td>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;">보호작업장 소개&nbsp;&nbsp;</td>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;">기본현황&nbsp;&nbsp;</td>
         </tr>

         </tr>
      </tbody>
   </table>
   </p>
<br><br>

<h3 class="h5_label">
   <strong><span style="color:#ff9900;"></span></strong>
</h3>
<p>
   <strong><img src="http://asrc09502.cafe24.com/data/editor/2101/20210103160128_4a9eaecc6a58616f46681d24342af334_jfni.jpg" alt="162842.jpg" style="width:750px;height:199px;" /></strong>
</p>
<strong>
         ♠ 확인 가능 분야</strong>
<div class="text1 mb60">&nbsp; 놀이치료, 미술치료, 소아물리치료, 성인물리치료, 수중물리치료, 소아작업치료, 성인작업치료, 감각통합치료, 언어치료, 주간보호, 단기보호</div>
<div class="text1 mb60">&nbsp;</div>
<h3 class="h5_label">
   <strong><span style="color:#ff9900;">♠ 대기관련 유의사항</span></strong>
</h3>
<div class="common_list">
   <ol>
      <li>대기현황은 매월 10일 업데이트 됩니다.</li>
      <li>서비스 시작과 대기 취소로 대기 순서는 변동될 수 있습니다</li>
      <li>서비스 이용은 2회까지 보류가 가능하며, 연락이 되지 않는 경우도 보류로 간주됩니다.</li>
      <li>연락처, 주소 등 개인정보 변경이 필요할 때에는 반드시 해당팀으로 연락바랍니다.</li>
   </ol>
   </div>
<div class="common_arrow">
   <span style="color:#ff9900;">문의 (상담가족지원팀)</span>: 031-465-0951 /<span class="normal" style="color:#ff9900;">(주간보호센터)</span>: 031-465-1465 /<span class="normal" style="color:#ff9900;">(단기보호센터)</span>: 031-465-0958)
</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
&nbsp;&nbsp;<iframe style="border:1px solid #777777;" src="http://gpsports.cafe24.com/asrc/board.php?board=kkk200803" width="760" height="500" frameborder="0" marginwidth="0" marginheight="0"></iframe>


<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>