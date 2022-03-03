<?
	//화면의 성격
	$user_division = "user";
	$screen_div = "sub";
	$frame_div = "two";

	//카테고리 명칭 & 카테고리 번호
	$cate_name = "복지관소개";
	$cate_num = "1";

	//페이지 명칭 & 페이지 번호
	$page_name = "기관소개";
	$page_num = "3";

	//페이지 명칭 & 페이지 번호
	$spage_name = "찾아오시는 길";
	$spage_num = "4";

	//현재 활성화 상태
	$gn_btn = "gn_btn".$cate_num;
	$$gn_btn = "current";
	$ln_btn = "ln_btn".$page_num;
	$$ln_btn = "current";
	$sln_btn = "sln_btn".$spage_num;
	$$sln_btn = "current";
?>
<?include_once("../include/head_sub.php");?>
<?include_once("../include/header.php");?>
<!-- 컨텐츠 : 시작 -->
<div class="map_area">
	<div class="map">
		<div id="daumRoughmapContainer1467939829439" class="root_daum_roughmap root_daum_roughmap_landing"></div>
		<script charset="UTF-8" class="daum_roughmap_loader_script" src="http://dmaps.daum.net/map_js_init/roughmapLoader.js"></script>
		<script charset="UTF-8">
			new daum.roughmap.Lander({
				"timestamp" : "1467939829439",
				"key" : "btay",
				"mapWidth" : "750",
				"mapHeight" : "407"
			}).render();
		</script>
	</div>
	<div class="map_info">
		<p><span>주소 : </span> 14091 경기 안양시 만안구 냉천로 39(안양동 477-1)</p>
		<p><span>Tel : </span> 031-465-0950~9</p>
		<p><span>Fax : </span> 031-465-0960</p>
		<div class="map_btn">
			<a href="http://dmaps.kr/27gpd" class="btn_map" target="_blank">지도</a>
			<a href="javascript:alert('텍스트')" class="btn_print">프린트</a>
		</div>
	</div>
	<div class="map_detail_info">
		<ul>
			<li>
				<dl>
					<dt>버스를 이용하실 경우</dt>
				</dl>
				<p class="text">· 마을버스 : 10-1, 10-2 (만안평생교육센터 하차)<br />
				· 시내버스 : 6, 6-3 (만안평생교육센터 하차)<br />
                · 시내버스 : 1, 1-2, 5, 8, 8-2, 15, 15-2, 5623, 5624, 5530, 5531, 5532(만안구청 앞 하차/도보10분)</p>
			</li>
			<li>
				<dl>
					<dt>지하철을 이용하실 경우</dt>
					<dd>버스 이용 후 만안평생교육센터 하차</dd>
				</dl>
				<p class="text"><span class="box box1">1호선</span>명학역 1번 출구 : 마을버스 10-1번, 10-2번  </p>
				<p class="text"><span class="box box2">4호선</span>범계역 3번 출구 : 마을버스 10-1번, 10-2번, <span class="indent">시내버스 6번</span></p>
			</li>
		</ul>
	</div>
</div>
<!-- 컨텐츠 : 종료 -->
<?include_once("../include/footer.php");?>
<?include_once("../_tail.php");?>