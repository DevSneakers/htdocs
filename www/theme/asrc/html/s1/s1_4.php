<?
	//화면의 성격
	$user_division = "user";
	$screen_div = "sub";
	$frame_div = "two";

	//카테고리 명칭 & 카테고리 번호
	$cate_name = "복지관소개";
	$cate_num = "1";

	//페이지 명칭 & 페이지 번호
	$page_name = "시설안내";
	$page_num = "4";

	//현재 활성화 상태
	$gn_btn = "gn_btn".$cate_num;
	$$gn_btn = "current";
	$ln_btn = "ln_btn".$page_num;
	$$ln_btn = "current";
?>
<?include_once("../include/head_sub.php");?>
<?include_once("../include/header.php");?>
<!-- 컨텐츠 : 시작 -->
<div class="facility_information">
	<dl>
		<dt><span>6F</span></dt>
		<dd>옥상휴게실(희망마루)</dd>
	</dl>
	<dl>
		<dt><span>5F</span></dt>
		<dd>주간보호센터, 단기보호센터, 수리아동발달센터, 부모대기실, 쉼터</dd>
	</dl>
	<dl>
		<dt class="vc_middle"><span>4F</span></dt>
		<dd>	관장실, 종합사무실, 자원봉사자실, 수리꿈터 7반, 방과후교실, 직원휴게실, 사회적응교실, <span class="bold">다목적실</span>, 소아작업치료실·감각통합실, 지역복지팀(점자도서실), 쉼터</dd>
	</dl>
	<dl>
		<dt><span>3F</span></dt>
		<dd><span class="stong">수리꿈터 프로그램실(1반~6반),</span> 다목적실, 세미나실, 보호작업장, 당구장, 쉼터</dd>
	</dl>
	<dl>
		<dt class="vc_top"><span>2F</span></dt>
		<dd>
			강당, 성인물리치료실, 성인작업치료실, 놀이치료실, <br>
			 <span class="bold">활동지원기관</span>, 체력단련실, 샤워실(남/여),<br>
			 대기실, 휴게실
		</dd>
	</dl>
	<dl>
		<dt class="vc_top"><span>1F</span></dt>
		<dd>
			식당(주방), 나빌리스 커피&베이커리, 카페공감, 안내 및 수납, <br>
			상담가족지원팀 사무실(고객지원센터), 상담실, 소아물리치료실,<br>
			집단교육실, 개별교육실Ⅰ, 개별교육실Ⅱ, 언어치료실,<br>
			미술치료실, <span class="bold">다목적실,</span> 멀티체험실, 나빌리스 제과제빵실, 나눔가게
		</dd>
	</dl>
	<dl>
		<dt class="vc_middle"><span class="grey_bg">B1</span></dt>
		<dd>
			수영장안내, 탈의실(남/여), 상담실, 수영장(의무실), <br>가족탈의실, 목욕탕(남/여), 통합관제센터, <br>
			문서보관소, 주차장, 쉼터
		</dd>
	</dl>
	<dl>
		<dt><span class="grey_bg">B2~B4F</span></dt>
		<dd>주차장</dd>
	</dl>
	<div class="reference">※ 지하4층, 지상6층(연면적 15,621.25㎥)</div>
</div>
<!-- 컨텐츠 : 종료 -->
<?include_once("../include/footer.php");?>
<?include_once("../_tail.php");?>