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
	<div class="text1"><span>안양시 수리장애인종합복지관 방문을 기쁨으로 환영합니다.</span></div>
	<div class="text_area">
		<div class="bold">
			복지관이 장애인들과 그 가족들에게 가장 편안하고 행복한 공간이 되게 하려고 애썼던 때가 있었습니다. <br>
			그래서 ‘복지관에 오면 천국 같다’고 하신 장애 자녀를 둔 어머니의 말씀이 순간 행복했던 때가 있었습니다.<br>
			그런데 돌이켜 생각해보니 복지관에 오면 천국 같다는 말은 복지관에 오지 않으면 천국 같지 않다는 말로 이해되었습니다.<br><br>
		</div>
			수리장애인종합복지관은 장애를 갖고 살아가는 모든 사람들이 복지관 뿐 아니라 <br>
			지역사회와 가정에서 그리고 모든 삶의 현장과 관계들 속에서 행복하고<br>
			편안한 삶을 이어갈 수 있도록 살피고 함께 하겠습니다.
			<br /><br />
		<div class="bold">
			존중으로 소통하는 복지관 <br>
			이용인과 주민을 주인으로 섬기는 복지관<br>
			전문성을 기반으로 사랑을 실천하는 복지관
			<br /><br />
		</div>
			복지관이 지향하는 목표를 잘 찾아갈 수 있도록 함께 지켜봐 주시고 격려와 지지를 <br>
			보내 주시면 감사하겠습니다. <br><br>

			복지관을 방문하시는 모든 분들이 늘 평안하시고 강건하시기를 소망합니다. <br>
			수리산 기슭에서 인사드립니다. <br>

	</div>


	<div class="sign">안양시수리장애인종합복지관 관장 <img src="<?=$g4[path]?>/images/sub1/sign.jpg" alt="이형진" /> 
		<p style="margin-right: 16px; font-size: 15px; font-weight: 700;">2019.10</p>
	</div>
</div>
<!-- 컨텐츠 : 종료 -->
<?include_once("../include/footer.php");?>
<?include_once("../_tail.php");?>