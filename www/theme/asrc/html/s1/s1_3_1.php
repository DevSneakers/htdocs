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
	$spage_name = "설립목적 및 비전";
	$spage_num = "1";

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
<div class="purpose_vision_area">
	<h4 class="h4_label">MISSION (수리복지관의 사명)</h4>
	<div class="mission">
		<div class="text text1">섬김의 실천</div>
		<div class="text text2"><span>행복</span>한<br />지역공동체<br /><span>구축</span></div>
		<div class="text text3">사랑의 실천</div>
	</div>
	<h4 class="h4_label">VISION (함께하고 싶은 복지관 TOP3)</h4>
	<div class="vision">
		<dl>
			<dt>TOP1</dt>
			<dd>이용자(고객)와 지역주민이 주인<br />되는 섬김의 복지관</dd>
		</dl>
		<dl>
			<dt>TOP2</dt>
			<dd>전문성을 기반으로 복지 서비스를<br />제공하는 사랑의 복지관</dd>
		</dl>
		<dl>
			<dt>TOP3</dt>
			<dd>존중으로 소통하는 행복한<br />지역공동체 </dd>
		</dl>
	</div>
	<h4 class="h4_label">VALUE (수리복지관의 가치)</h4>
	<div class="value">
		저희 안양시수리장애인종합복지관은 <span class="txt1">이용자(고객) 중심</span>, <span class="txt2">전문성</span>, <span class="txt3">섬김</span>, <span class="txt4">사랑</span>, <span class="txt5">존중</span>, <span class="txt6">소통</span>을 중요시합니다.
	</div>
</div>
<!-- 컨텐츠 : 종료 -->
<?include_once("../include/footer.php");?>
<?include_once("../_tail.php");?>