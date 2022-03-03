<?
	//화면의 성격
	$user_division = "user";
	$screen_div = "sub";
	$frame_div = "two";

	//카테고리 명칭 & 카테고리 번호
	$cate_name = "복지관소개";
	$cate_num = "1";

	//페이지 명칭 & 페이지 번호
	$page_name = "법인소개";
	$page_num = "2";

	//현재 활성화 상태
	$gn_btn = "gn_btn".$cate_num;
	$$gn_btn = "current";
	$ln_btn = "ln_btn".$page_num;
	$$ln_btn = "current";
?>
<?include_once("../include/head_sub.php");?>
<?include_once("../include/header.php");?>
<!-- 컨텐츠 : 시작 -->
<div class="about_corporation">
	<h4 class="h4_label">개요</h4>
	<div class="text1">돕는사람들은 2006년 12월 21일 민법 제 32조 및 보건복지부 및 그 소관 비영리법인의 설립 및 감독에 관한 규칙에 따라 설립, <br />
		인도적 구호사업을 목적으로 기아와 재난으로 고통당하는 국내외 사람들의 생존을 돕고 지역사회의 발전을 지원하는 사업을<br />
		확대하여 보다 나은 삶의 질을 제공하고자 합니다. </div>
	<ul class="summary_area">
		<li><span>법인명</span>사회복지법인 돕는사람들</li>
		<li><span>이사장</span>박중식
		<li><span>소재지</span>(14059)경기도 안양시 동안구 흥안대로 427번길 38<br />(인덕원성지 스타위드 1106호)</li>
		<li><span>연락처</span>1600-1695 / 031-423-2704</li>
		<li><span>홈페이지</span>http://goodhelpers.or.kr</li>
	</ul>
	<h4 class="h4_label">연혁</h4>
	<div class="history">
		<ul>
			<li>
				<span class="year">2018</span>
				<span class="month">01</span>
				<span class="text">인도 비하르주, 자무이군, 친베리아 마을 내 미션스쿨 증축</span>
				<span class="icon"><img src="<?=$g4[path]?>/images/sub1/history_icon.gif" alt="" /></span>
			</li>
		</ul>
		<ul>
			<li>
				<span class="year">2017</span>
				<span class="month">10</span>
				<span class="text">중국 단동 북한 주민 돕기</span>
				<span class="icon"><img src="<?=$g4[path]?>/images/sub1/history_icon.gif" alt="" /></span>
			</li>
			<li>
				<span class="month">06</span>
				<span class="text">네팔 커히러허니스쿨 삼성 꿈 도서관 사업</span>
			</li>
			<li>
				<span class="month">05</span>
				<span class="text">필리핀 마라위 IS난민 돕기 헌옷, 생필품 지원</span>
			</li>
			<li>
				<span class="month">05</span>
				<span class="text">아시아(필리핀) 지부 설립</span>
			</li>
			<li>
				<span class="month">04</span>
				<span class="text">안양장례식장 MOU 체결</span>
			</li>
			<li>
				<span class="month">03</span>
				<span class="text">KT WIZ 프로야구단 업무 제휴 협약</span>
			</li>
			<li>
				<span class="month">01</span>
				<span class="text">네팔 지부 행정 요원 파견</span>
			</li>
			<li>
				<span class="month">01</span>
				<span class="text">월드프렌즈 NGO 봉사단 파견</span>
			</li>
		</ul>
		<ul>
			<li>
				<span class="year">2016</span>
				<span class="month">10</span>
				<span class="text">만안종합사회복지관 수탁 선정</span>
				<span class="icon"><img src="<?=$g4[path]?>/images/sub1/history_icon.gif" alt="" /></span>
			</li>
			<li>
				<span class="month">09</span>
				<span class="text">네팔 로컬 NGO 지부 설립</span>
			</li>
			<li>
				<span class="month">06</span>
				<span class="text">희망프로젝트 공모전 실시</span>
			</li>
			<li>
				<span class="month">02</span>
				<span class="text">월드프렌즈 NGO 봉사단 파견</span>
			</li>
		</ul>
		<ul>
			<li>
				<span class="year">2015</span>
				<span class="month">10</span>
				<span class="text">1365 자원봉사우수수요처 선정</span>
				<span class="icon"><img src="<?=$g4[path]?>/images/sub1/history_icon.gif" alt="" /></span>
			</li>
			<li>
				<span class="month">07</span>
				<span class="text">디딤씨앗통장 후원 협약 (안양시)</span>
			</li>
			<li>
				<span class="month">07</span>
				<span class="text">월드프렌즈 NGO 봉사단 파견 (KCOC 운영)</span>
			</li>
			<li>
				<span class="month">04</span>
				<span class="text">UN 경제사회이사회 특별협의적 지위 획득</span>
			</li>
			<li>
				<span class="month">03</span>
				<span class="text">안양푸드뱅크 MOU 협약</span>
			</li>
			<li>
				<span class="month">01</span>
				<span class="text">2015 KOICA 다년도 민간협력사업 선정</span>
			</li>
		</ul>
		<ul>
			<li>
				<span class="year">2014</span>
				<span class="month">10</span>
				<span class="text">KCOC 회원단체 승인</span>
				<span class="icon"><img src="<?=$g4[path]?>/images/sub1/history_icon.gif" alt="" /></span>
			</li>
			<li>
				<span class="month">07</span>
				<span class="text">안양시 수리장애인종합복지관 재위탁 선정</span>
			</li>
			<li>
				<span class="month">02</span>
				<span class="text">숭실대학교 MOU 협약</span>
			</li>
			<li>
				<span class="month">01</span>
				<span class="text">2014 KOICA 단년도 민간협력사업 선정</span>
			</li>
		</ul>
		<ul>
			<li>
				<span class="year">2013</span>
				<span class="month">03</span>
				<span class="text">사단법인 돕는사람들로 명칭 변경</span>
				<span class="icon"><img src="<?=$g4[path]?>/images/sub1/history_icon.gif" alt="" /></span>
			</li>
			<li>
				<span class="month">02</span>
				<span class="text">경기도 안양과천교육지원청 MOU 협약</span>
			</li>
		</ul>
		<ul>
			<li>
				<span class="year">2012</span>
				<span class="month">11</span>
				<span class="text">한국은행과 사랑의 저금통 MOU 협약</span>
				<span class="icon"><img src="<?=$g4[path]?>/images/sub1/history_icon.gif" alt="" /></span>
			</li>
			<li>
				<span class="month">08</span>
				<span class="text">안양시청소년지원센터 MOU 협약</span>
			</li>
			<li>
				<span class="month">07</span>
				<span class="text">안양시 수리장애인 종합복지관 수탁운영 체결</span>
			</li>
		</ul>
		<ul>
			<li>
				<span class="year">2011</span>
				<span class="month">11</span>
				<span class="text">한국 마사회 MOU 협약</span>
				<span class="icon"><img src="<?=$g4[path]?>/images/sub1/history_icon.gif" alt="" /></span>
			</li>
			<li>
				<span class="month">07</span>
				<span class="text">복지법인 돕는사람들 설립</span>
			</li>
		</ul>
		<ul>
			<li>
				<span class="year">2009</span>
				<span class="month">04</span>
				<span class="text">돕는사람들 IDF로 명칭변경</span>
				<span class="icon"><img src="<?=$g4[path]?>/images/sub1/history_icon.gif" alt="" /></span>
			</li>
		</ul>
		<ul>
			<li>
				<span class="year">2007</span>
				<span class="month">01</span>
				<span class="text">대북지원 사업자 지정</span>
				<span class="icon"><img src="<?=$g4[path]?>/images/sub1/history_icon.gif" alt="" /></span>
			</li>
		</ul>
		<ul>
			<li>
				<span class="year">2006</span>
				<span class="month">12</span>
				<span class="text">민법 제 32조 보건 복지부 소관 비영리 사단법인 <br />한국 IDF 창립</span>
				<span class="icon"><img src="<?=$g4[path]?>/images/sub1/history_icon.gif" alt="" /></span>
			</li>
		</ul>
		<span class="box1"></span>
		<span class="box2"></span>
	</div>
</div>
<!-- 컨텐츠 : 종료 -->
<?include_once("../include/footer.php");?>
<?include_once("../_tail.php");?>