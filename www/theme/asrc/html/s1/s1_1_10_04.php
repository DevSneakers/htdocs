<?
	//화면의 성격
	$user_division = "user";
	$screen_div = "sub";
	$frame_div = "two";

	//카테고리 명칭 & 카테고리 번호
	$cate_name = "복지관소개";
	$cate_num = "1";

	//페이지 명칭 & 페이지 번호
	$page_name = "인사말";
	$page_num = "1";

	//현재 활성화 상태
	$gn_btn = "gn_btn".$cate_num;
	$$gn_btn = "current";
	$ln_btn = "ln_btn".$page_num;
	$$ln_btn = "current";
?>
<?include_once("../include/head_sub.php");?>
<?include_once("../include/header.php");?>
<!-- 컨텐츠 : 시작 -->
<div class="ceo_massege">
	<div class="text1"><span>지역사회 안에서 장애인의 삶을 깊이 이해하고 공감하기 위해 노력하겠습니다. </span></div>
	<div class="text_area">
		<div class="bold">
			안양시수리장애인종합복지관은 2003년 11월 5일 개관하여 장애인의 변화하는<br />
			욕구에 발맞춰 다양한 시도를 통해 꾸준히 성장해오고 있습니다.<br />
			그리고 2012년 7월 18일부터 '사회복지법인 돕는 사람들'에서<br />
			수탁 운영하며 새로운 도약의 계기가 되었습니다. <br /><br />
		</div>
			우리복지관은 아름다운 수리산기슭에 자리 잡고 있으며<br />
			면적 약 4,730여평에 이르는 넓은 공간과 전문성과 가진 직원들이 <br />
			올바른 사회복지를 실천하기 위해 노력하고 있습니다.<br />
			<br /><br />
		<div class="bold">
			지역의 장애인들에게 사랑방처럼 따뜻한 공간이 되기 위해<br />
			작은 일에도 정성을 다하며 이용자들에게 잔잔한 울림을 전하고자 합니다.<br />
			장애인의 삶에 동행자가 될 수 있도록 따뜻한 관심과 아낌없는 조언을 부탁드립니다.<br />
			<br /><br />
		</div>
			복지관을 방문하시는 모든 분들이 강건하시고 평안하시길 소망합니다.<br />
			감사합니다. <br /><br />
	</div>
	<div class="sign">안양시수리장애인종합복지관 관장 <img src="<?=$g4[path]?>/images/sub1/sign.jpg" alt="유정환" /></div>
</div>
<!-- 컨텐츠 : 종료 -->
<?include_once("../include/footer.php");?>
<?include_once("../_tail.php");?>