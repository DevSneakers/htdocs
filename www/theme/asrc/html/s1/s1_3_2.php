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
	$spage_name = "기관CI";
	$spage_num = "2";

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
<div class="agency_ci_area">
	<h4 class="h4_label">심벌마크</h4>
	<div><img src="<?=$g4[path]?>/images/sub1/ci_img1.jpg" alt="심벌마크" /></div>
	<div class="mark_area">
		<dl>
			<dt><span></span> Blue Color</dt>
			<dd>복지의 전문성</dd>
		</dl>
		<dl>
			<dt><span></span> Orange Color</dt>
			<dd>열정의 대한 의지</dd>
		</dl>
		<dl>
			<dt><span></span> Sky Color</dt>
			<dd>푸른 창공을 향한<br />미래의 대한 의지</dd>
		</dl>
	</div>
	<div class="common_text">
		심벌마크(Symbol Mark)는 수리종합복지관의 이니셜을 부드러운 소문자로 표현하고, 수리복지관을 통해 새 생명이 자라고,<br />
		새 날개가 자라나며 그것이 피어나는 사랑을 받치고 있는 것을 표현하였습니다.<br />
		날렵한 모양의 영문 마지막 글자는 세련됨을 더하고, 하트와 함께 복지관을 통해 새로운 삶을 부여받은 생명을 표현하고 있습니다.<br />
		파란색은 전문성을, 주황색은 열정에의 의지를, 하늘색은 푸른 창공을 향한 미래에의 의지를 드러내며, 여러가지로 해석이 <br />
		가능합니다. 
	</div>
	
	<h4 class="h4_label">로고타입</h4>
	<ul class="logo_img">
		<li><img src="<?=$g4[path]?>/images/sub1/ci_img2.jpg" alt="로고1" /></li>
		<li><img src="<?=$g4[path]?>/images/sub1/ci_img3.jpg" alt="로고2" /></li>
		<li><img src="<?=$g4[path]?>/images/sub1/ci_img4.jpg" alt="로고3" /></li>
	</ul>
	<div class="reference">
		※ 심벌마크 색상활용(Color Usage), 로고타입(Logo Type), 그래픽 모티프(Graphic Motif), 서체(Typefaces), 응용예시 등의 자세한 내용은 좌측<br />
		매뉴얼을 참조하시기 바랍니다
	</div>
	<div><a href="<?=$g4[path]?>/images/sub1/suri_ci_img.jpg" target="_blank" download="안양시수리장애인종합복지관 CI logo.jpg" class="download">CI 다운로드</a></div>
</div>
<!-- 컨텐츠 : 종료 -->
<?include_once("../include/footer.php");?>
<?include_once("../_tail.php");?>