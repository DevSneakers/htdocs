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
	$spage_name = "연혁";
	$spage_num = "3";

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
<div class="agency_history_area about_corporation">
	<div class="agency_history_tabs">
		<a href="#history_1" class="current">현재 ~ 2011년</a>
		<a href="#history_2">2010년 ~ 2006년</a>
		<a href="#history_3">2005년 ~ 개관</a>
	</div>
	<div id="history_1" class="agency_history_box agency_history_box1 history">
		<ul>

			<li>
				<span class="year">2020</span>
				<span class="month">03</span>
				<span class="text">안양시 평생학습지원사업 “아름도자” 선정 : 안양시 평생교육원</span>
				<span class="text">안양시 시민인성교육지원사업 “함께걸음” 선정 : 안양시 평생교육원</span>
				<span class="text">문화예술지원사업 선정 : 한국장애인복지관협회</span>
				<span class="text">코로나19 저소득 계층 긴급지원사업(맞춤형 키트, 긴급생계비 지원) : 한국장애인복지관협회</span>
			</li>
			<li>
				<span class="month">04</span>
				<span class="text">코로나19 장애인을 위한 따뜻한 도시락배달 선정 : 경기도장애인복지관협회</span>
				<span class="text">발달장애인 댄스스포츠교실 지원사업 선정 : 안양시 장애인체육회</span>
			</li>
			<li>
				<span class="month">05</span>
				<span class="text">공감카페 비산점 개소</span>
			</li>
			<li>
				<span class="month">07</span>
				<span class="text">경기도 장애인복지관 평가 실시</span>
			</li>
			<li>
				<span class="month">11</span>
				<span class="text">활동지원기관 평가 실시</span>
			</li>
			<li>
				<span class="year">2019</span>
				<span class="month">03</span>
				<span class="text">장애인 문화․체험여행을 위한 해피버스 운영</span>
			</li>
			<li>
				<span class="month">04</span>
				<span class="text">전국장애인요리경연대회 대상 수상</span>
				<span class="text">2019년 안양시시민인성교육 협약식 진행</span>
				<span class="text">장애인연극단“물레방아” 정기공연 진행</span>
				<span class="text">GS어패럴과 함께하는 행복나눔장터</span>
			</li>
			<li>
				<span class="month">05</span>
				<span class="text">2019년 전체직원연수 실시</span>
			</li>
			<li>
				<span class="month">08</span>
				<span class="text">장애인고용창출을 위한 통큰카페 리모델링 개소</span>
			</li>
			<li>
				<span class="month">10</span>
				<span class="text">어울림 당구대회 개최</span>
			</li>
			<li>
				<span class="month">11</span>
				<span class="text">제 8대 관장(이형진) 취임</span>
			</li>
			<li>
				<span class="month">12</span>
				<span class="text">발달장애인 생애사 책자 발간</span>
			</li>
		</ul>
		<ul>
			<li>
				<span class="year">2018</span>
				<span class="month">01</span>
				<span class="text">늘해랑학교 위탁기관 선정(경기도 안양과천교육청)</span>
				<span class="text">월동지원사업(사회복지공동모금회)</span>
			</li>
			<li>
				<span class="month">03</span>
				<span class="text">발달장애 청년들의 사회성과 전문성 향상을 위한 배움터 만들기 놀.일.터(놀면서 일하는 배움터) -사)경기도장애인복지시설연합회</span>
				<span class="text">안양시장애인농구교실-경기도장애인체육회</span>
			</li>
			<li>
				<span class="month">04</span>
				<span class="text">문화여가지원사업(영화, 연극, 미술)-한국장애인복지관협회</span>
				<span class="text">통합형 다종목 클럽-경기도장애인체육회</span>
				<span class="text">평생교육지원사업(도자기로 빚는 빛)-안양시평생교육원</span>
			</li>
			<li>
				<span class="month">05</span>
				<span class="text">소외계층 인문프로그램(생애사)-안양시미래인재육성재단</span>
			</li>
						<li>
				<span class="month">06</span>
				<span class="text">무료셔틀 3호차 증차 운영</span>
			</li>
			<li>
				<span class="month">07</span>
				<span class="text">경기도 장애인수영 어울림생활체육대회 개최</span>
			</li>
			<li>
				<span class="month">08</span>
				<span class="text">지역복지모델발굴공모사업(장애인을 위한 옹호인 양성파견사업)-경기복지재단</span>
			</li>
			<li>
				<span class="month">10</span>
				<span class="text">개관 15주년 기념행사(기념식 및 칸타빌레합창단 연주회)</span>
			</li>
		</ul>
		<ul>
			<li>
				<span class="year">2017</span>
				<span class="month">01</span>
				<span class="text">늘해랑학교 위탁기관 선정(경기도 안양과천교육청)</span>
				<span class="text">식사를 통한 관계주선사업“혼밥 아닌 함밥”-경기사회복지공동모금회</span>
			</li>
			<li>
				<span class="month">03</span>
				<span class="text">문화여가지원사업(영화, 연극, 미술)-한국장애인복지관협회</span>
				<span class="text">안양시 장애인생활체육교실-경기도장애인체육회</span>
			</li>
			<li>
				<span class="month">04</span>
				<span class="text">성인장애인 평생교육지원사업(도자기로 빚는 빚)-안양시평생교육원 </span>
				<span class="text">장애인 체육용품(재활보조기구) 지원-안양시장애인체육회</span>
			</li>
			<li>
				<span class="month">05</span>
				<span class="text">안양수리스포츠단(농구) 지원-스페셜올림픽 코리아</span>
				<span class="text">중증장애인 일자리 창출을 위한 업무협약 체결 - 선진엔지니어링</span>
			</li>
			<li>
				<span class="month">06</span>
				<span class="text">중증장애인 일자리 창출 카페 “소통” 오픈-선진엔지니어링 내 사내카페</span>
			</li>
			<li>
				<span class="month">10</span>
				<span class="text">2017년 장애인일자리사업 우수일자리 사례 선정</span>
				<span class="text">어울림 수중운동대회 개최</span>
			</li>
			<li>
				<span class="month">11</span>
				<span class="text">장애인활동지원기관 우수기관 선정(보건복지부, 국민연금공단)</span>
				<span class="text">개관 14주년 기념행사 개최</span>
			</li>
		</ul>
		<ul>
			<li>
				<span class="year">2016</span>
				<span class="month">02</span>
				<span class="text">중증장애인 지원고용 - 한국장애인고용공단</span>
				<span class="text">발달장애인의 직업능력 및 사회성 향상 프로그램(놀.일.터)-경기도복지시설연합회</span>
			</li>
			<li>
				<span class="month">03</span>
				<span class="text">장애인집합정보화 교육사업-경기도</span>
				<span class="text">문화여가지원사업(영화)-한국장애인복지관협회</span>
				<span class="text">성인장애인 평생교육지원사업(레디콩)-안양시평생교육원</span>
			</li>
			<li>
				<span class="month">04</span>
				<span class="text">장애 가족과 함께하는 “응답하라, FC안양”-경기사회복지공동모금회</span>
				<span class="text">장애인식개선사업 “반갑다 친구야!” 아띠축제 캠페인-경기사회복지공동모금회</span>
				<span class="text">저소득층 에너지효율개선사업-한국에너지재단</span>
				<span class="text">경기도 장애인 청소년 종합형 스포츠교실-경기도장애인체육회</span>
			</li>
			<li>
				<span class="month">05</span>
				<span class="text">지적·자폐성 장애인과 비장애인이 함께하는 unified sports 농구교실-스페셜올림픽 코리아</span>
			</li>
			<li>
				<span class="month">07</span>
				<span class="text">2016 경기도어울림생활체육대회-경기도장애인수영연맹</span>
				<span class="text">2016 여름방학 늘해랑학교-안양과천교육지원청</span>
			</li>
			<li>
				<span class="month">09</span>
				<span class="text">안양시 기부의 날 기념 나눔문화공모전-경기사회복지공동모금회</span>
				<span class="text">기획 인재육성 지원사업“재능나누기 희망더하기”찾아가는 멘토링-경기사회복지공동모금회</span>
			</li>
			<li>
				<span class="month">11</span>
				<span class="text">개관 13주년 기념행사 개최</span>
				<span class="text">제 7대 관장(유정환) 취임</span>
			</li>
		</ul>
		<ul>
			<li>
				<span class="year">2015</span>
				<span class="month">01</span>
				<span class="text">늘해랑학교 위탁기관 선정(경기도 안양과천교육청)</span>
				<span class="text">일반재활프로그램 ‘즐거운 나의 JOB’선정(경기도장애인복지시설)</span>
				<span class="text">법률자문을 위한 협약(법률사무소 규원)</span>
				<span class="text">발달장애아동 음악활동지원사업 “음악여행 라라라” 선정(하트하트재단)</span>
			</li>
			<li>
				<span class="month">02</span>
				<span class="text">정보소외계층집합정보화교육 협약체결(경기도)</span>
			</li>
			<li>
				<span class="month">03</span>
				<span class="text">문화여가지원사업-미술·영화(한국문화예술진흥원)</span>
				<span class="text">장애인도전정신 함양 및 지역사회소통을 위한 함께걷기 프로그램 선정</span>
				<span class="text">(경기사회복지 공동모금회)</span>
				<span class="text">기능보강사업 지원(경기사회복지 공동모금회)</span>
				<span class="text">중증장애인지원고용 위탁운영(한국장애인고용공단)</span>
			</li>
			<li>
				<span class="month">04</span>
				<span class="text">성인장애인 평생교육지원사업 선정(안양시 평생교육원)</span>
				<span class="text">주말프로그램 바이크 운영관련 협약체결(만안청소년수련관)</span>
				<span class="text">2014년 성폭력 예방교육 위탁협약체결(안양시)</span>
			</li>
			<li>
				<span class="month">08</span>
				<span class="text">저소득 에너지효율개선사업 선정(한국에너지재단)</span>
				<span class="text">문화예술교육지원사업 “띠앗놀이터” 선정(한국장애인복지관협회)</span>
				<span class="text">중국청도 한국인 장애학생 치료교육을 위한 project 선정(밀알복지재단)</span>
			</li>
			<li>
				<span class="month">09</span>
				<span class="text">자원봉사활성화를 위한 협약(성결대학교)</span>
			</li>
			<li>
				<span class="month">10</span>
				<span class="text">어울림 수중운동대회 개최</span>
			</li>
			<li>
				<span class="month">11</span>
				<span class="text">개관 12주년 기념행사 개최</span>
				<span class="text">장애인 당사자와 가족의 생애사 쓰기 「뜻밖의 여정 2권 ‘괜찮아, 이대로’」출간</span>
			</li>
			<li>
				<span class="month">12</span>
				<span class="text">사회공헌사업 연계협약(안양의료소비자생활협동조합)</span>
			</li>
		</ul>
		<ul>
			<li>
				<span class="year">2014</span>
				<span class="month">01</span>
				<span class="text">늘해랑학교 위탁기관 선정(경기도 안양과천교육청)</span>
				<span class="text">발달장애 아동 및 청소년 토요 음악활동 지원(하트하트 재단)</span>
				<span class="text">일반재활프로그램 ‘즐거운 나의 JOB’선정(경기도장애인복지시설)</span>
				<span class="text">문화여가지원사업-미술·영화(한국문화예술진흥원)</span>
				<span class="text">카페직무능력향상 프로그램 “카페 story” 기능보강(사회복지공동모금회)</span>
			</li>
			<li>
				<span class="month">02</span>
				<span class="text">프로그램 활성화를 위한 업무협약 체결(사회복지법인 코스모스 재단)</span>
				<span class="text">정보소외계층집합정보화교육 협약체결(경기도)</span>
			</li>
			<li>
				<span class="month">03</span>
				<span class="text">장애인복지관의 기능활성화와 복지증진을 위한 협약체결(열손가락서로돌봄사회적협동조합)</span>
				<span class="text">중증장애인지원고용 위탁운영(한국장애인고용공단)</span>
				<span class="text">장애인 의료지원을 위한 협약체결 – 행복한마을 의료복지 사회적 협동조합</span>
				<span class="text">장애인의 지식 정보서비스 이용 활성화를 위한 협약체결(석수도서관)</span>
				<span class="text">지적 자폐성 장애인 소통을 위한 팔도 트레킹 사업선정(바보의 나눔 재단)</span>
			</li>
			<li>
				<span class="month">04</span>
				<span class="text">성인장애인 평생교육지원사업 “따오기”선정(안양시 평생교육원)</span>
				<span class="text">2014년 성폭력 예방교육 위탁협약체결(안양시)</span>
				<span class="text">중증장애인 직무능력향상 및 취업을 위한 협약체결(㈜다래월드)</span>
			</li>
			<li>
				<span class="month">05</span>
				<span class="text">인적자원, 학술정보화 기술, 시설과 기자재 상호 교류 및 활용을 위한 협약(연성대학교)</span>
			</li>
			<li>
				<span class="month">07</span>
				<span class="text">사회복지법인 돕는사람들 “안양시수리장애인종합복지관” 재위탁 선정</span>
			</li>
			<li>
				<span class="month">09</span>
				<span class="text">어울림 수중운동대회 개최</span>
			</li>
			<li>
				<span class="month">11</span>
				<span class="text">개관 11주년 기념행사 개최</span>
			</li>
			<li>
				<span class="month">12</span>
				<span class="text">장애인활동지원기관 최우수기관 선정(국민연금공단)</span>
			</li>
		</ul>
		<ul>
			<li>
				<span class="year">2013</span>
				<span class="month">01</span>
				<span class="text">2013년 복지관 사업설명회 실시</span>
				<span class="text">일반재활프로그램 ‘즐거운 나의 JOB’선정(경기도장애인복지시설)</span>
				<span class="text">문화여가지원사업-미술·영화(한국문화예술진흥원)</span>
				<span class="text">장애인복지증진을 위한 업무협약체결-(주)이야기너머</span>
			</li>
			<li>
				<span class="month">02</span>
				<span class="text">우리은행과 함께 하는 ‘우리 사랑나눔터’ 자매결연식 진행</span>
				<span class="text">근로지원인사업(한국장애인고용공단)</span>
				<span class="text">정보소외계층집합정보화교육 협약체결(경기도)</span>
			</li>
			<li>
				<span class="month">03</span>
				<span class="text">수리아동발달센터 리모델링 및 개소식</span>
				<span class="text">성인장애인지원사업 ‘따오기’ 선정(안양시평생교육원)</span>
			</li>
			<li>
				<span class="month">04</span>
				<span class="text">사회봉사 및 복지관 프로그램 활성화를 위한 업무협약 체결(총신대학교)</span>
				<span class="text">멀티체험실 개소</span>
				<span class="text">2013년 성폭력 예방교육 위탁협약체결(안양시)</span>
			</li>
			<li>
				<span class="month">05</span>
				<span class="text">현장실습운영 및 가족회사 산학협력체결(대림대학교)</span>
			</li>
			<li>
				<span class="month">07</span>
				<span class="text">휴먼네트워크 협력기관 협약체결(한국사회복지협의회)</span>
			</li>
			<li>
				<span class="month">09</span>
				<span class="text">노후설계서비스·장애인지원사업 수행을 위한 협약체결</span>
				<span class="text">(국민연금공단 안양과천지사)</span>
				<span class="text">다누리장애통합사회적협동조합 협약체결</span>
			</li>
			<li>
				<span class="month">11</span>
				<span class="text">개관10주년 기념행사/제10회 전국장애인수중운동대회 개최</span>
				<span class="text">단기보호센터 주말돌봄서비스 실시</span>
				<span class="text">장애인 당사자와 가족의 생애사 쓰기 「뜻밖의 여정 1권」출간</span>
			</li>
		</ul>
		<ul>
			<li>
				<span class="year">2012</span>
				<span class="month">01</span>
				<span class="text">전국장애인복지관 평가 '최우수 기관' 선정</span>
				<span class="text">늘해랑학교 위탁기관 선정(경기도 안양과천교육청)</span>
				<span class="text">장애아동재활치료서비스 제공기관 선정(안양시)</span>
				<span class="text">우리아이심리지원서비스 제공기관 선정(경기도)</span>
				<span class="text">시청각 장애부모의 언어발달지원사업 제공기관 선정(안양시)</span>
			</li>
			<li>
				<span class="month">03</span>
				<span class="text">홍주일 관장 취임(상근)</span>
				<span class="text">복지관 문화예술교육지원사업 선정(한국장애인복지관협회)</span>
				<span class="text">무료안마서비스 협약(대한 안마사협회 경기지부)</span>
				<span class="text">2012년 가정폭력·성폭력·성매매 예방교육 위탁운영(안양시)</span>
				<span class="text">2012년 장애인 집합정보화 교육 수행기관 선정(경기도)</span>
				<span class="text">지역사회통합지원기관 협약(구립 늘희망어린이집, 매곡 어린이집)</span>
				<span class="text">중증장애인지원고용 위탁 운영협약(한국장애인고용공단)</span>
				<span class="text">제 5대 관장(홍주일) 취임</span>
			</li>
			<li>
				<span class="month">07</span>
				<span class="text">사회복지법인 돕는사람들 위탁계약 체결</span>
				<span class="text">제 6대 관장(이형진) 취임</span>
			</li>
			<li>
				<span class="month">09</span>
				<span class="text">비전선포식 및 어울림축제 실시</span>
			</li>
			<li>
				<span class="month">10</span>
				<span class="text">제9회 전국수중운동대회 개최</span>
			</li>
			<li>
				<span class="month">12</span>
				<span class="text">주간보호센터 야간보호사업 “별빛교실” 사업 선정(공동모금회)</span>
				<span class="text">2012년 '늘해랑학교' 위탁기관 선정(경기도안양과천교육청)</span>
			</li>
		</ul>
		<ul>
			<li>
				<span class="year">2011</span>
				<span class="month">01</span>
				<span class="text">장애아동 재활치료 서비스 제공기관 지정(안양시)</span>
				<span class="text">시각장애인 콜센터"사랑합니다. 어르신 빛샘 콜센터입니다."사업 선정(공동모금회)</span>
				<span class="text">2011년 '늘해랑학교' 위탁기관 선정(경기도안양과천교육청)</span>
				<span class="text">문제행동아동조기개입서비스 제공기관 선정(안양시)</span>
				<span class="text">시청각장애부모의 언어발달지원사업 제공 기관 지정(안양시)</span>
				<span class="text">'도전! 나도 Working Woman' 사업 선정(경기도)</span>
				<span class="text">장애인활동보조지원 제공기관지정(안양시)</span>
			</li>
			<li>
				<span class="month">02</span>
				<span class="text">2011년 장애가정청소년'mentoring'학습지원사업 선정(한국장애인재활협회)</span>
				<span class="text">2011년 복지기관 문화예술교육지원사업 선정(한국장애인복지관협회)</span>
			</li>
			<li>
				<span class="month">03</span>
				<span class="text">2011년 장애인 집합정보화 교육 수행기관 선정(경기도)</span>
			</li>
			<li>
				<span class="month">04</span>
				<span class="text">제4대 관장 취임(성결대학교 사회복지학부 임병우 교수)</span>
				<span class="text">안양시장애인복지관 기능개선 연구용역 협약(안양시)</span>
			</li>
			<li>
				<span class="month">05</span>
				<span class="text">2011년 성폭력 예방교육 위탁협약체결(안양시)</span>
			</li>
			<li>
				<span class="month">06</span>
				<span class="text">2011년 장애학생 취업활성화를 위한 산학결연 협약(안양공업고등학교)</span>
			</li>
			<li>
				<span class="month">07</span>
				<span class="text">2011년 '늘해랑학교' 위탁기관 선정(경기도안양과천교육청)</span>
			</li>
			<li>
				<span class="month">09</span>
				<span class="text">자원봉사활성화와 나눔문화 확산을 위한 협약(신성고등학교)</span>
			</li>
			<li>
				<span class="month">10</span>
				<span class="text">IBK 기업은행과 함께하는 휴먼네트워크 멘토링 지원사업 선정(보건복지부 휴먼네트워크)</span>
			</li>
			<li>
				<span class="month">12</span>
				<span class="text">수리어울림연합봉사단 발촉</span>
				<span class="text">자원봉사활성화 및 나눔 문화 확산을 위한 군부대 협약(육군2506부대)</span>
			</li>
		</ul>
	</div>

	<div id="history_2" class="agency_history_box agency_history_box2 history">
		<ul>
			<li>
				<span class="year">2010</span>
				<span class="month">01</span>
				<span class="text">장애아동 재활치료 서비스 제공기관 지정(안양시)</span>
			</li>
			<li>
				<span class="month">03</span>
				<span class="text">2010년 장애인 집합정보화 교육 수행기관 선정(경기도)</span>
			</li>
			<li>
				<span class="month">04</span>
				<span class="text">2010년 경기도 여성장애인교육사업 협력사업 수행기관 선정(경기도장애인복지관)</span>
				<span class="text">특수교육대상자 진단평가 협력기관 공동협약(경기도안양과천교육청)</span>
				<span class="text">산학협동협약(안양과학대학)</span>
			</li>
			<li>
				<span class="month">05</span>
				<span class="text">장애인 취업지원 서비스 연계 협약(노동부 안양고용지원센터)</span>
			</li>
			<li>
				<span class="month">06</span>
				<span class="text">2010년 가정폭력·성폭력 예방교육 위탁운영(안양시)</span>
				<span class="text">고용구조개선 컨설팅 (노무법인 로고스)</span>
			</li>
			<li>
				<span class="month">07</span>
				<span class="text">언어발달지원 서비스 제공기관 지정(안양시)</span>
			</li>
			<li>
				<span class="month">08</span>
				<span class="text">2010년 '늘해랑학교' 위탁기관 선정(경기도안양과천교육청)</span>
			</li>
			<li>
				<span class="month">09</span>
				<span class="text">2011년도 녹색자금사업 선정(경기도산림청)</span>
			</li>
			<li>
				<span class="month">10</span>
				<span class="text">2010사례관리컨설팅사업 선정(경기도장애인종합복지관)</span>
			</li>
		</ul>
		<ul>
			<li>
				<span class="year">2009</span>
				<span class="month">02</span>
				<span class="text">2009년도 여성장애인교육사업 협력사업 수행기관 선정(경기도장애인복지관)</span>
			</li>
			<li>
				<span class="month">03</span>
				<span class="text">제3대 관장 취임(성결대학교 사회복지학부 박용순 교수)</span>
			</li>
			<li>
				<span class="month">07</span>
				<span class="text">재위탁 협약 체결</span>
			</li>
			<li>
				<span class="month">08</span>
				<span class="text">비전수립을 통한 조직 및 사업활성화 컨설팅 (컨설턴트 나사렛대학교 강종건 박사)</span>
			</li>
			<li>
				<span class="month">10</span>
				<span class="text">화면해설 DVD 공동제작 협약((주)케이디미디어)</span>
			</li>
			<li>
				<span class="month">11</span>
				<span class="text">단기보호센터 주말운영프로그램 ‘주말 꿈나눔터’ 개시</span>
			</li>
		</ul>
		<ul>
			<li>
				<span class="year">2008</span>
				<span class="month">09</span>
				<span class="text">수리해피전문안마센터 개소</span>
			</li>
			<li>
				<span class="month">11</span>
				<span class="text">개관 5주년 기념식 및 학술세미나 개최</span>
			</li>
		</ul>
		<ul>
			<li>
				<span class="year">2007</span>
				<span class="month">09</span>
				<span class="text">장애인전국체전 참가 (남·여 각 금메달 획득)</span>
				<span class="text">전국제과기능대회 쿠키 및 케이크 만들기 체험 개최</span>
				<span class="text">협약체결(전국제과인총연합회)</span>
			</li>
			<li>
				<span class="month">11</span>
				<span class="text">수리사랑재활치료센터 개소</span>
			</li>
		</ul>
		<ul>
			<li>
				<span class="year">2006</span>
				<span class="month">03</span>
				<span class="text">제2대 관장 취임(성결대학교 사회복지학부 이영실 교수)</span>
				<span class="text">복지관 부모회 총회</span>
			</li>
			<li>
				<span class="month">07</span>
				<span class="text">재위탁 협약 체결</span>
			</li>
		</ul>
	</div>

	<div id="history_3" class="agency_history_box agency_history_box3 history">
		<ul>
			<li>
				<span class="year">2005</span>
				<span class="month">02</span>
				<span class="text">복지관 부모회 조직</span>
			</li>
			<li>
				<span class="month">07</span>
				<span class="text">복지관 연합캠프 실시</span>
			</li>
			<li>
				<span class="month">08</span>
				<span class="text">제1회 전국 정신지체인 제과기능대회 개최</span>
			</li>
			<li>
				<span class="month">10</span>
				<span class="text">제1회 한마음체육대회 개최</span>
			</li>
		</ul>
		<ul>
			<li>
				<span class="year">2004</span>
				<span class="month">01</span>
				<span class="text">수리재활스포츠센터(수영장, 체력단련실) 개원</span>
			</li>
			<li>
				<span class="month">02</span>
				<span class="text">정월대보름맞이 척사대회 개최</span>
			</li>
			<li>
				<span class="month">03</span>
				<span class="text">단기보호센터 개원</span>
			</li>
			<li>
				<span class="month">06</span>
				<span class="text">제1회 장애인수중운동대회 개최</span>
			</li>
			<li>
				<span class="month">12</span>
				<span class="text">제1회 송년감사의 밤 개최</span>
			</li>
		</ul>
		<ul>
			<li>
				<span class="year">2003</span>
				<span class="month">07</span>
				<span class="text">위탁 협약 체결(학교법인 성결신학원)</span>
			</li>
			<li>
				<span class="month">08</span>
				<span class="text">초대 관장 취임(성결대학교 사회복지학부 유양숙 교수)</span>
			</li>
			<li>
				<span class="month">11</span>
				<span class="text">안양시수리장애인종합복지관 개관</span>
				<span class="text">주간보호센터 개원</span>
			</li>
			<li>
				<span class="month">12</span>
				<span class="text">보호작업장 개원</span>
			</li>
		</ul>
	</div>

	<script type="text/javascript">
		$(function(){
			var clickNum;

			$(".agency_history_box").hide();
			$(".agency_history_box").eq(0).show();
			$(".agency_history_tabs a").click(function(){

				clickNum = $(".agency_history_tabs a").index($(this));

				$(".agency_history_box").hide();
				$(".agency_history_box").eq(clickNum).show();

				$(".agency_history_tabs a").removeClass("current");
				$(this).addClass("current");
			});
		});
	</script>
</div>
<!-- 컨텐츠 : 종료 -->
<?include_once("../include/footer.php");?>
<?include_once("../_tail.php");?>