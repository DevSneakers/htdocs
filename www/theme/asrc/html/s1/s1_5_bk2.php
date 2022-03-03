<?
	//화면의 성격
	$user_division = "user";
	$screen_div = "sub";
	$frame_div = "two";

	//카테고리 명칭 & 카테고리 번호
	$cate_name = "복지관소개";
	$cate_num = "1";

	//페이지 명칭 & 페이지 번호
	$page_name = "조직현황";
	$page_num = "5";

	//페이지 명칭 & 페이지 번호
	$spage_name = "조직도";
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
<div class="organization_area">
	<div class="organization">
		<dl class="executives executives1">
			<dt>사회복지법인<br />돕는 사람들</dt>
			<dd><span class="blet">이사회</span></dd>
		</dl>
		<dl class="executives executives2">
			<dt><a href="#n">관장</a></dt>
			<dd>
				<span class="blet">운영위원회</span>
				<span class="blet">인사위원회</span>
				<span class="blet">자문위원회</span>
				<span class="blet">식당운영위원회</span>
				<span class="blet">수리부모회</span>
				<span class="blet">수리어울림봉사단</span>
			</dd>
		</dl>
		<div class="executives3"><a href="#n">사무국장</a></div>
		<div class="team_area">
			<dl class="team1">
				<dt><a href="#n">운영지원부</a></dt>
				<dd class="first"><a href="#n">
					<span>총무팀</span>
					<p>총무회계</p>
					<p>식당관리</p>
					<p>차량관리</p>
					<p>환경관리</p>
				</a></dd>
<!--
				<dd><a href="#n">
					<span>시설<br>관리팀</span>
					<p>- 시설관리<br>- 차량관리</p>
				</a></dd>
-->
				<dd><a href="#n">
					<span>기획<br>협력팀</span>
					<p>기획사업<br>홍보사업<br>지역연계<br>후원관리<br>자원봉사</p>
				</a></dd>
				<!--<dd><a href="#n">수중<br />운동팀</a></dd>
				<dd><a href="#n">생활<br />체육팀</a></dd>-->
			</dl>
			<dl class="team2">
				<dt><a href="#n">상담치료지원부</a></dt>
				<dd><a href="#n">
					<span>상담가족<br>지원팀</span>
					<p>상담지원<br>가족지원<br>교육재활<br>방과후교육(초등)<br>계절학교 </p>
				</a></dd>
				<dd><a href="#n">
					<span>기능향상<br>지원팀</span>
					<p>의료재활<br>심리치료 <br>아동발달</p>
				</a></dd>
			</dl>
			<dl class="team2-1">
				<dt><a href="#n">사회통합지원부</a></dt>
				<dd><a href="#n">
					<span>지역<br>복지팀</span>
					<p>사례관리<br>제가복지<br>문화여가<br>사각지원(도서관)<br>정보화 <br>늘해랑</p>
				</a></dd>
				<dd><a href="#n">
					<span>평생교육<br>지원팀</span>
					<p>평생교육<br>직업재활 <br>중장년pg <br>방과후(중고등) <br>까페(마카롱)</p>
				</a></dd>
			</dl>
			<dl class="team3">
				<dt><a href="#n">재활스포츠센터</a></dt>
				<dd class="first"><a href="#n">
					<span>수중<br>운동팀</span>
					<p>수영장</p>
				</a></dd>
				<dd><a href="#n">
					<span>생활<br>체육팀</span>
					<p>생활체육<br>체력단련실</p>
				</a></dd>
				<dd><a href="#n">
					<span>시설<br>관리팀</span>
					<p>시설관리</p>
				</a></dd>
			</dl>
			<dl class="team4">
				<dt><a href="#n">자립생활지원부</a></dt>
				<dd class="first"><a href="#n">
					<span>주간<br>보호<br>센터</span>
				</a></dd>
				<dd><a href="#n">
					<span>단기<br>보호<br>센터</span>
				</a></dd>
				<dd><a href="#n">
					<span>활동<br>보조<br>지원<br>센터</span>
				</a></dd>
			</dl>
		</div>
		<div class="reference">※ 안양시수리보호작업장 별도</div>
	</div>

	<div class="organization_detail_page"><!--// 관장 -->
		<h4 class="h4_label">관장</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img2.jpg" alt="사무국장 유정환씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">유정환</p>
						<p>직위 : 관장 </p>
						<p>업무 : 복지관 운영 총괄 및 대외업무</p>
						<p>메일 : whan1202@hanmail.net</p>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="organization_detail_page"><!--// 사무국장 -->
		<h4 class="h4_label">사무국장</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img3.jpg" alt="운영지원팀 장성락씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">장성락</p>
						<p>직위 : 국장</p>
						<p>업무 : 복지관 업무 총괄 및 대외업무</p>
						<p>메일 : zec-key@hanmail.net</p>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="organization_detail_page"><!--// 운영지원부 총괄 -->
		<h4 class="h4_label">운영지원부 총괄</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img21.jpg" alt="운영지원부 총괄 정혜민씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">정혜민</p>
						<p>직위 : 부장</p>
						<p>업무 : 운영지원부 총괄</p>
						<p>메일 : skyhm0129@hanmail.net</p>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="organization_detail_page"><!--// 총무팀 -->
		<h4 class="h4_label">총무팀</h4>
		<div class="organization_detail">
			<ul>
				<!-- <li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img6.jpg" alt="운영지원팀 송은지씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">송은지</p>
						<p>직위 : 팀장</p>
						<p>업무 : 회계</p>
						<p>메일 : 39ssong@naver.com</p>
					</div>
				</li> -->
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img21.jpg" alt="기획협력팀 정혜민씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">정혜민</p>
						<p>직위 : 팀장</p>
						<p>업무 : 총무팀 사업 총괄</p>
						<p>메일 : skyhm0129@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img124.jpg" alt="운영지원팀 양지희씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">양지희</p>
						<p>직위 : 사무원</p>
						<p>업무 : 회계</p>
						<p>메일 : didwl9401@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img139.jpg" alt="운영지원팀 김민지씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">김민지</p>
						<p>직위 : 사무원</p>
						<p>업무 : 회계</p>
						<p>메일 : pinkpunkmj@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img143.jpg" alt="지역복지팀 김철환씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">김철환</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 인사관리</p>
						<p>메일 : chamsalang7@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img104.jpg" alt="운영지원팀 이미경씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">이미경</p>
						<p>직위 : 사무원</p>
						<p>업무 : 수납</p>
						<p>메일 : dksroduwk333@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img8.jpg" alt="운영지원팀 정지혜씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">정지혜</p>
						<p>직위 : 영양사</p>
						<p>업무 : 영양사</p>
						<p>메일 : jihye6608@hanmail.net </p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img9.jpg" alt="운영지원팀 조창길씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">조창길</p>
						<p>직위 : 조리사</p>
						<p>업무 : 조리사</p>
						<p>메일 : chang2260@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img105.jpg" alt="운영지원팀 김희진씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">김희진</p>
						<p>직위 : 조리사</p>
						<p>업무 : 조리사</p>
						<p>메일 : shhj564@hanmail.net </p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img11.jpg" alt="운영지원팀 문홍자씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">문홍자</p>
						<p>직위 : 미화원</p>
						<p>업무 : 환경미화</p>
						<p>메일 : munhj66@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img5.jpg" alt="운영지원팀 박유진씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">박유진(육아휴직)</p>
						<p>직위 : 사무원</p>
						<p>업무 : 회계</p>
						<p>메일 : dbwls7285@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img16.jpg" alt="운영지원팀 김진봉씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">김진봉</p>
						<p>직위 : 대리</p>
						<p>업무 : 차량관리 및 운행</p>
						<p>메일 : jetu70@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img18.jpg" alt="운영지원팀 이승민씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">이승민</p>
						<p>직위 : 운전기사</p>
						<p>업무 : 무료셔틀</p>
						<p>메일 : minlee20@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img136.jpg" alt="운영지원팀 류용환씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">류용환</p>
						<p>직위 : 운전기사</p>
						<p>업무 : 무료셔틀</p>
						<p>메일 : mimun0610@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img137.jpg" alt="운영지원팀 류규선씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">류규선</p>
						<p>직위 : 운전기사</p>
						<p>업무 : 무료셔틀</p>
						<p>메일 : dude80@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img19.jpg" alt="운영지원팀 박용수씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">박용수</p>
						<p>직위 : 운전보조원</p>
						<p>업무 : 무료셔틀</p>
						<p></p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img2_04.jpg" alt="운영지원팀 이재홍씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">이재홍</p>
						<p>직위 : 운전보조원</p>
						<p>업무 : 무료셔틀</p>
						<p></p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img2_01.jpg" alt="운영지원팀 박경수씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">박경수</p>
						<p>직위 : 운전보조원</p>
						<p>업무 : 무료셔틀</p>
						<p></p>
					</div>
				</li>
			</ul>
		</div>
	</div>


<div class="organization_detail_page"><!--// 기획협력팀 -->
		<h4 class="h4_label">기획협력팀</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img22.jpg" alt="기획협력팀 차경화씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">차경화</p>
						<p>직위 : 팀장</p>
						<p>업무 : 기획홍보사업, 지역연계사업 총괄</p>
						<p>메일 : ckh11021@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img25.jpg" alt="기획협력팀 강아름씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">강아름</p>
						<p>직위 : 대리</p>
						<p>업무 : 자원봉사사업</p>
						<p>메일 : areum8961@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img98.jpg" alt="기획협력팀 유현식씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">유현식</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 후원사업</p>
						<p>메일 : mr.yu@hanmail.net?</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img114.jpg" alt="기획협력팀 임정훈씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">임정훈</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 지역연계사업</p>
						<p>메일 : haha99987@naver.com</p>
					</div>
				</li>
			</ul>
		</div>
	</div>


	

	<div class="organization_detail_page"><!--// 재활사업부 총괄 -->
		<h4 class="h4_label">재활사업부 총괄</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img40.jpg" alt="상담가족지원팀 임은진씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">임은진</p>
						<p>직위 : 부장</p>
						<p>업무 : 재활사업부 총괄, 부모회 운영, 윤리위원회, 확대사례회의</p>
						<p>메일 : sunoa98@naver.com</p>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="organization_detail_page"><!--// 상담가족지원팀 -->
		<h4 class="h4_label">상담가족지원팀</h4>
		<div class="organization_detail">
			<ul>
				<!-- <li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img41.jpg" alt="상담가족지원팀 김윤희씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">김윤희</p>
						<p>직위 : 팀장</p>
						<p>업무 : 상담가족지원사업관리</p>
						<p>메일 : yunicuri@daum.net</p>
					</div>
				</li> -->
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img56.jpg" alt="지역복지팀 나연숙씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">나연숙</p>
						<p>직위 : 팀장</p>
						<p>업무 : 상담, 진단평가사업 총괄</p>
						<p>메일 : rararahappy@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img_42_n.png" alt="상담가족지원팀 배진경씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">배진경</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 상담, 진단평가사업</p>
						<p>메일 : abcd111999@naver.com</p>
					</div>
				</li>
				<!-- <li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img116.jpg" alt="기능향상지원팀 류은희씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">류은희</p>
						<p>직위 : 대리</p>
						<p>업무 : 장애아동 발달재활사업</p>
						<p>메일 : alsn1127@hanmail.net?</p>
					</div>
				</li> -->
			</ul>
		</div>
	</div>

	<div class="organization_detail_page"><!--// 기능향상지원팀 -->
		<h4 class="h4_label">기능향상지원팀(아동발달센터 포함)</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img43.jpg" alt="기능향상지원팀 유근혜씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">유근혜</p>
						<p>직위 : 팀장</p>
						<p>업무 : 아동물리치료</p>
						<p>메일 : miniswing@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img44.jpg" alt="기능향상지원팀 한석환씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">한석환</p>
						<p>직위 : 대리</p>
						<p>업무 : 성인 물리치료, 수중물리치료</p>
						<p>메일 : coccyx77@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img46.jpg" alt="기능향상지원팀 문경진씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">문경진</p>
						<p>직위 : 물리치료사</p>
						<p>업무 : 성인 물리치료</p>
						<p>메일 : witch076@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img47.jpg" alt="기능향상지원팀 박진영씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">박진영</p>
						<p>직위 : 언어치료사</p>
						<p>업무 : 언어치료</p>
						<p>메일 : 7206blue@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img48.jpg" alt="기능향상지원팀 이시현씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">이시현</p>
						<p>직위 : 언어치료사</p>
						<p>업무 : 언어치료</p>
						<p>메일 : tortillachip@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img50.jpg" alt="기능향상지원팀 이솔씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">이 솔</p>
						<p>직위 : 작업치료사</p>
						<p>업무 : 아동 작업치료, 감각통합치료</p>
						<p>메일 : green_day11@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img142.bmp" alt="기능향상지원팀 김소담씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">김소담</p>
						<p>직위 : 미술치료사</p>
						<p>업무 : 미술치료</p>
						<p>메일 :  hoyayu35@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img52.jpg" alt="기능향상지원팀 주은유씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">주은유</p>
						<p>직위 : 놀이치료사</p>
						<p>업무 : 놀이치료</p>
						<p>메일 : positive7175@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img54.jpg" alt="기능향상지원팀 서유정씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">서유정</p>
						<p>직위 : 작업치료사</p>
						<p>업무 : 성인작업치료</p>
						<p>메일 : ktsyjj@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img135.png" alt="기능향상지원팀 김은선씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">김은선</p>
						<p>직위 : 특수교사</p>
						<p>업무 : 교육재활사업</p>
						<p>메일 : cookieluv2@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img113.bmp" alt="기능향상지원팀 박은경씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">박은경</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 장애아동 발달재활사업</p>
						<p>메일 : dmsrud8610@naver.com?</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img134.jpg" alt="기능향상지원팀 이예림씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">이예림</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 장애아동 발달재활사업</p>
						<p>메일 : lyrim0825@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img49.jpg" alt="기능향상지원팀 최영환씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">최영환(육아휴직)</p>
						<p>직위 : 작업치료사</p>
						<p>업무 : 아동 작업치료, 감각통합치료</p>
						<p>메일 : choidud88@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img65.jpg" alt="기능향상지원팀 이혜인씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">이혜인(육아휴직)</p>
						<p>직위 : 대리</p>
						<p>업무 : 교육재활사업</p>
						<p>메일 : 2pdnim@hanmail.net?</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img45.jpg" alt="기능향상지원팀 정혜림씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">정혜림(육아휴직)</p>
						<p>직위 : 물리치료사</p>
						<p>업무 : 아동 물리치료</p>
						<p>메일 : junghl82@hanmail.net</p>
					</div>
				</li>
			</ul>
		</div>
	</div>

	
<div class="organization_detail_page">
</div>
	<div class="organization_detail_page"><!--// 지역복지팀 -->
		<h4 class="h4_label">지역복지(장애인활동지원 포함)</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img108.jpg" alt="지역복지팀 신민재씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">신민재</p>
						<p>직위 : 팀장</p>
						<p>업무 : 지역복지사업 총괄</p>
						<p>메일 : inter0311@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img42.jpg" alt="상담가족지원팀 한혜진씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">한혜진</p>
						<p>직위 : 대리</p>
						<p>업무 : 지역복지사업</p>
						<p>메일 : arimorning@daum.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img57.jpg" alt="지역복지팀 김보경씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">김보경</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 문화여가사업</p>
						<p>메일 : esc9552@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img59.jpg" alt="지역복지팀 이민우씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">이민우</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 지역복지사업</p>
						<p>메일 : alsdn6023@naver.com?</p>
					</div>
				</li>
				<!-- <li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img58.jpg" alt="지역복지팀 전지혜씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">전지혜</p>
						<p>직위 : 사서</p>
						<p>업무 : 시각지원사업</p>
						<p>메일 : esl-bi@hanmail.net</p>
					</div>
				</li> -->
				
			</ul>
		</div>
	</div>
<div class="organization_detail_page"><!--// 평생교육지원팀 -->
		<h4 class="h4_label">평생교육지원팀</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img60.jpg" alt="전환서비스지원팀 신현숙씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">신현숙</p>
						<p>직위 : 팀장</p>
						<p>업무 : 평생교육지원사업 총괄</p>
						<p>메일 : y2eve@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img62.jpg" alt="전환서비스지원팀 정나현씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">정나현</p>
						<p>직위 : 대리</p>
						<p>업무 : 교육훈련</p>
						<p>메일 : eekfrl07@nate.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img66.jpg" alt="전환서비스지원팀 표지현씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">표지현</p>
						<p>직위 : 대리</p>
						<p>업무 : 교육훈련</p>
						<p>메일 : pjh8806@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img68.jpg" alt="전환서비스지원팀 박인철씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">박인철</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 교육훈련</p>
						<p>메일 : hhsoii13@nate.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img64.jpg" alt="전환서비스지원팀 이도연씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">이도연</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 교육훈련</p>
						<p>메일 : keee1004@nate.com?</p>
					</div>
				</li>
				<!-- <li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img69.jpg" alt="전환서비스지원팀 강지혜씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">강지혜</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 교육훈련</p>
						<p>메일 : iijihye@naver.com</p>
					</div>
				</li> -->
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img102.jpg" alt="전환서비스지원팀 김태훈씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">김태훈</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 교육훈련</p>
						<p>메일 : 7star25@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img128.jpg" alt="전환서비스지원팀 박빛나래씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">박빛나래</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 교육훈련</p>
						<p>메일 : ykspbnr5@naver.com</p>
					</div>
				</li>
				<!--<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img129.jpg" alt="전환서비스지원팀 황대성씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">황대성</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 고용개발</p>
						<p>메일 : maniads8@naver.com</p>
					</div>
				</li>-->
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img103.bmp" alt="전환서비스지원팀 김정렬씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">김정렬</p>
						<p>직위 : 재활상담사</p>
						<p>업무 : 고용개발</p>
						<p>메일 : indulge2@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img101.jpg" alt="전환서비스지원팀 정수인씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">정수인</p>
						<p>직위 : 재활상담사</p>
						<p>업무 : 교육훈련</p>
						<p>메일 : wjdxotnr34@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_imgnew_10101.jpg" alt="전환서비스지원팀 정수인씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">양인영</p>
						<p>직위 : 재활상담사</p>
						<p>업무 : 교육훈련</p>
						<p>메일 : zlxl0622@nate.com</p>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="organization_detail_page"><!--// 재활스포츠센터 총괄 -->
		<h4 class="h4_label">재활스포츠센터 총괄</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img26.jpg" alt="수중운동팀 이영규씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">이영규</p>
						<p>직위 : 부장</p>
						<p>업무 : 재활스포츠센터 총괄</p>
						<p>메일 : lyk8062@hanmail.net</p>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="organization_detail_page"><!--// 수중운동팀 -->
		<h4 class="h4_label">수중운동팀</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img26.jpg" alt="수중운동팀 이영규씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">이영규</p>
						<p>직위 : 팀장</p>
						<p>업무 : 수중재활, 수중운동</p>
						<p>메일 : lyk8062@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img121.jpg" alt="수중운동팀 김창하씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">김창하</p>
						<p>직위 : 수중운동재활사</p>
						<p>업무 : 수중재활, 수중운동</p>
						<p>메일 : ckdgk6003@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img127.jpg" alt="수중운동팀 김찬미씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">김찬미</p>
						<p>직위 : 수중운동재활사</p>
						<p>업무 : 수중재활, 수중운동</p>
						<p>메일 : juande153@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img130.jpg" alt="수중운동팀 박치현씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">박치현</p>
						<p>직위 : 수중운동재활사</p>
						<p>업무 : 수중재활, 수중운동</p>
						<p>메일 : qkrclgus8359@naver.com</p>
					</div>
				</li>
				<!-- <li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img133.jpg" alt="수중운동팀 임미성씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">임미성</p>
						<p>직위 : 수중운동재활사</p>
						<p>업무 : 수중재활, 수중운동</p>
						<p>메일 : lms96win@gmail.com</p>
					</div>
				</li> -->
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img30.jpg" alt="수중운동팀 정수연씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">정수연</p>
						<p>직위 : 고객지원</p>
						<p>업무 : 안내데스크 고객지원</p>
						<p>메일 : suyeon0825@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img115.jpg" alt="수중운동팀 송빛나씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">송빛나</p>
						<p>직위 : 고객지원</p>
						<p>업무 : 안내데스크 고객지원</p>
						<p>메일 : thdqlcsk1510@gmail.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img32.jpg" alt="수중운동팀 박춘숙씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">박춘숙</p>
						<p>직위 : 고객지원</p>
						<p>업무 : 수영장 탈의실</p>
						<p>메일 : impcs123@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img33.jpg" alt="수중운동팀 송미승씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">송미승</p>
						<p>직위 : 고객지원</p>
						<p>업무 : 수영장 탈의실</p>
						<p>메일 : 3217sms@hanmail.net?</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img34.jpg" alt="수중운동팀 신지훈씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">신지훈</p>
						<p>직위 : 고객지원</p>
						<p>업무 : 수영장 탈의실</p>
						<p>메일 : ddn22@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img39.jpg" alt="수중운동팀 구성철씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">구성철</p>
						<p>직위 : 고객지원</p>
						<p>업무 : 수영장 탈의실</p>
						<p>메일 : zxc678910@naver.com</p>
					</div>
				</li>
				<!--<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img35.jpg" alt="수중운동팀 주홍기씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">주홍기</p>
						<p>직위 : 고객지원</p>
						<p>업무 : 수영장 탈의실</p>
						<p>메일 : </p>
					</div>
				</li>-->
			</ul>
		</div>
	</div>

	<div class="organization_detail_page"><!--// 생활체육팀 -->
		<h4 class="h4_label">생활체육팀</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img37.jpg" alt="생활체육팀 김태훈씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">김태훈</p>
						<p>직위 : 팀장</p>
						<p>업무 : 체력단련실, 생활체육</p>
						<p>메일 : mrgc79@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img2_02.jpg" alt="자립생활지원부장 김승현씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">김승현</p>
						<p>직위 : 재활운동사</p>
						<p>업무 : 생활체육</p>
						<p>메일 : kimseung8@gmail.com</p>
					</div>
				</li>
				<!-- <li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img38.jpg" alt="생활체육팀 이찬기씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">이찬기</p>
						<p>직위 : 재활운동사</p>
						<p>업무 : 체력단련실, 생활체육</p>
						<p>메일 : rugbyis@nate.com</p>
					</div>
				</li> -->
				<!--<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img107.jpg" alt="생활체육팀 황상욱씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">황상욱</p>
						<p>직위 : 재활운동사</p>
						<p>업무 : 생활체육</p>
						<p>메일 : 91kzsw@naver.com</p>
					</div>
				</li>-->
				<!-- <li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img131.jpg" alt="생활체육팀 이진희씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">이진희</p>
						<p>직위 : 재활운동사</p>
						<p>업무 : 생활체육</p>
						<p>메일 : dlwlsgml1000@naver.com</p>
					</div>
				</li> -->
			</ul>
		</div>
	</div>

	<div class="organization_detail_page"><!--// 시설관리팀 -->
		<h4 class="h4_label">시설관리팀</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img12.jpg" alt="운영지원팀 김태용씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">김태용</p>
						<p>직위 : 대리</p>
						<p>업무 : 시설관리</p>
						<p>메일 : taekim1961@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img13.jpg" alt="운영지원팀 양회봉씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">양회봉</p>
						<p>직위 : 시설기사</p>
						<p>업무 : 시설관리</p>
						<p>메일 : yhb5210@naver.com?</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img126.jpg" alt="운영지원팀 이문식씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">이문식</p>
						<p>직위 : 시설기사</p>
						<p>업무 : 시설관리</p>
						<p>메일 : bada1976@gmail.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img15.jpg" alt="운영지원팀 안재욱씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">안재욱</p>
						<p>직위 : 시설기사</p>
						<p>업무 : 시설관리</p>
						<p>메일 : comsman@hanmail.net?</p>
					</div>
				</li>
				
			</ul>
		</div>
	</div>

	<div class="organization_detail_page"><!--// 자립생활지원부 총괄 -->
		<h4 class="h4_label">자립생활지원부장</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img78.jpg" alt="자립생활지원부장 주현실씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">주현실</p>
						<p>직위 : 부장</p>
						<p>업무 : 자립생활지원부 총괄</p>
						<p>메일 : jhs6680@hanmail.net</p>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="organization_detail_page"><!--// 주간보호센터 -->
		<h4 class="h4_label">주간보호센터</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img72.jpg" alt="주간보호센터 함동훈씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">함동훈</p>
						<p>직위 : 팀장</p>
						<p>업무 : 주간보호</p>
						<p>메일 : nishigaki@naver.com?</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img75.jpg" alt="주간보호센터 이효선씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">이효선</p>
						<p>직위 : 대리</p>
						<p>업무 : 주간보호</p>
						<p>메일 : softrocker018@hanmail.net?</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img73.jpg" alt="주간보호센터 윤지해씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">윤지해</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 주간보호</p>
						<p>메일 : jhyoon1003@naver.com</p>
					</div>
				</li>
				<!-- <li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img76.jpg" alt="주간보호센터 이대로씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">이대로</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 주간보호</p>
						<p>메일 : gogocof@naver.com?</p>
					</div>
				</li> -->
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img74.jpg" alt="주간보호센터 곽동명씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">곽동명</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 주간보호</p>
						<p>메일 : kdm3049@naver.com</p>
					</div>
				</li>
				<!-- <li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img100.jpg" alt="주간보호센터 육선화씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">육선화</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 주간보호</p>
						<p>메일 : dbrtjsghk6@naver.com?</p>
					</div>
				</li> -->
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img122.jpg" alt="주간보호센터 김준범씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">김준범</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 주간보호</p>
						<p>메일 : kimjb0436@naver.com?</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img141.jpg" alt="주간보호센터 홍대웅씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">홍대웅</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 주간보호</p>
						<p>메일 : hoydw@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img109.jpg" alt="주간보호센터 유척희씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">유척희</p>
						<p>직위 : 운전기사</p>
						<p>업무 : 주간보호 셔틀 운영</p>
						<p>메일 : bigkjs10@naver.com?</p>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="organization_detail_page"><!--// 단기보호센터 -->
		<h4 class="h4_label">단기보호센터</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img110.jpg" alt="단기보호센터 전경화씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">전경화</p>
						<p>직위 : 팀장</p>
						<p>업무 : 단기보호 업무 총괄</p>
						<p>메일 : woorijkh@hanmail.net?</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img80.jpg" alt="단기보호센터 백은오씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">백은오</p>
						<p>직위 : 대리</p>
						<p>업무 : 단기보호</p>
						<p>메일 : tymhwan@lycos.co.kr</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img81.jpg" alt="단기보호센터 최예지씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">최예지</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 단기보호</p>
						<p>메일 : say_cheese1@naver.com?</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img82.jpg" alt="단기보호센터 윤영운씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">윤영운</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 단기보호</p>
						<p>메일 : youngun0501@nate.com?</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img123.jpg" alt="단기보호센터 전호성씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">전호정</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 단기보호</p>
						<p>메일 : ccgm@naver.com</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img111.jpg" alt="단기보호센터 임대성씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">임대성</p>
						<p>직위 : 생활지도원</p>
						<p>업무 : 단기보호</p>
						<p>메일 : myladder@naver.com?</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img112.jpg" alt="단기보호센터 민옥련씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">민옥련</p>
						<p>직위 : 생활지도원</p>
						<p>업무 : 단기보호</p>
						<p>메일 : myyoun23@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img118.jpg" alt="단기보호센터 이준희씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">이준희</p>
						<p>직위 : 생활지도원</p>
						<p>업무 : 단기보호</p>
						<p>메일 : andante-21@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img119.jpg" alt="단기보호센터 노미숙씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">노미숙</p>
						<p>직위 : 생활지도원</p>
						<p>업무 : 단기보호</p>
						<p>메일 : meesook921@hanmail.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img132.jpg" alt="단기보호센터 한정미씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">한정미</p>
						<p>직위 : 생활지도원</p>
						<p>업무 : 단기보호</p>
						<p>메일 : house2348@naver.com</p>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="organization_detail_page"><!--// 단기보호센터 -->
		<h4 class="h4_label">활동보조지원센터</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img138.jpg" alt="지역복지팀 곽아롬씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">곽아롬</p>
						<p>직위 : 팀장</p>
						<p>업무 : 활동지원사업 총괄</p>
						<p>메일 : gwakarom@daum.net</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img87.jpg" alt="사회서비스센터 김주영씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">김주영</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 활동지원사업</p>
						<p>메일 : dream-young@naver.com?</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img120.jpg" alt="사회서비스센터 안진씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">안진</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 활동지원사업</p>
						<p>메일 : anjin315@naver.com</p>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<script type="text/javascript">
		$(function(){
			var clickNum;

			$(".organization a").click(function(){
				clickNum = $(".organization a").index($(this));

				$(".organization_detail_page").hide();
				$(".organization_detail_page").eq(clickNum).fadeIn('fast');
			});
		});
	</script>
</div>
<!-- 컨텐츠 : 종료 -->
<?include_once("../include/footer.php");?>
<?include_once("../_tail.php");?>