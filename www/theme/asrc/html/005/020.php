<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "복지관 소개"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "기관소개"; //커스텀페이지의 타이틀을 입력합니다.
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
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;"><a href="http://asrc2103.cafe24.com/theme/asrc/html/005/017.php" target="_self"><span style="font-size: 18px;">설립목적 및 비전&nbsp;</span></a></td>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;"><a href="http://asrc2103.cafe24.com/theme/asrc/html/005/018.php" target="_self"><span style="font-size: 18px;">기관CI&nbsp;&nbsp;</span></a></td>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;"><a href="http://asrc2103.cafe24.com/theme/asrc/html/005/019.php" target="_self"><span style="font-size: 18px;">연혁&nbsp;&nbsp;</span></a></td>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;"><a href="http://asrc2103.cafe24.com/theme/asrc/html/005/020.php" target="_self"><span style="font-size: 18px;">오시는 길&nbsp;&nbsp;</span></a></td>
            </tr>
         </tbody>
      </table>
   </p>
<br /><br />
<p><br /></p>
<br><br>
		
		
		
			<div class="bg_vline"></div>
			<p class="eng"><em>CONTACT</em> US</p>
			<p class="stitle">찾아오시는 길을 자세히 알려드립니다.</p>


			<div class="map_wrap wow fadeInUp">
				
				
				
				<div class="g_map">
					
					<?php 
						//다음지도 안내
						// http://map.kakao.com/ 에서 주소로 검색하신 후 지도공유 > 지도 퍼가기로 아래 코드를 넣으시면 됩니다.
						// 코드를 넣으신 후 아래 주석의 1,2,3을 추가 또는 수정하시면 됩니다.
					?>


<!--
	* 카카오맵 - 약도서비스
	* 한 페이지 내에 약도를 2개 이상 넣을 경우에는
	* 약도의 수 만큼 소스를 새로 생성, 삽입해야 합니다.
-->
<!-- 1. 약도 노드 -->
<div id="daumRoughmapContainer1617259962688" class="root_daum_roughmap root_daum_roughmap_landing"></div>

<!-- 2. 설치 스크립트 -->
<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

<!-- 3. 실행 스크립트 -->
<script charset="UTF-8">
	new daum.roughmap.Lander({
		"timestamp" : "1617259962688",
		"key" : "255s5",
		"mapWidth" : "1200",
		"mapHeight" : "600"
	}).render();
</script>



<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>