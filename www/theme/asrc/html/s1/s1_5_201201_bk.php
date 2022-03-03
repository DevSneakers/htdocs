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
		<div class="organization_tble organization_tble_blue">
			<table>
				<colgroup>
					<col width="15%">
					<col width="10%">
					<col width="20%">
					<col width="55%">
				</colgroup>
				<thead>
					<tr>
						<th>직책</th>
						<th>성명</th>
						<th>전화번호</th>
						<th>담당업무</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>관장</td>
						<td>이형진</td>
						<td>070-8978-8800</td>
						<td class="pad_st">
							<ul>
								<li>복지관 운영 총괄 및 대외업무</li>
							</ul> 
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class="organization_detail_page"><!--// 사무국장 -->
		<h4 class="h4_label">사무국장</h4>
		<div class="organization_tble  organization_tble_blue">
			<table>
				<colgroup>
					<col width="15%">
					<col width="10%">
					<col width="20%">
					<col width="55%">
				</colgroup>
				<thead>
					<tr>
						<th>직책</th>
						<th>성명</th>
						<th>전화번호</th>
						<th>담당업무</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>사무국장</td>
						<td>임은진</td>
						<td>070-8978-8801</td>
						<td class="pad_st">
							<ul> 
								<li>복지관 업무 총괄 및 대외업무</li>
							</ul>
						</td>
					</tr>		
					<tr>
						<td>사무국장</td>
						<td>주현실</td>
						<td>070-8978-8836</td>
						<td class="pad_st">
							<ul>
								<li>주간·단기보호센터 업무 총괄 및 대외업무</li>
							</ul>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class="organization_detail_page"><!--// 운영지원부 총괄 -->
		<h4 class="h4_label">운영지원부</h4>
		<div class="organization_tble  organization_tble_green">
			<table>
				<thead>
					<tr>
						<th>직책</th>
						<th>성명</th>
						<th>전화번호</th>
						<th>담당업무</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>운영지원부<br> 부장</td>
						<td>정혜민</td>
						<td>070-8978-8802</td>
						<td class="pad_st">
							<ul>
								<li>운영지원부(총무팀, 기획협력팀) 총괄관리</li>
								<li>복지관 사업계획 및 평가 관리, 중장기 발전계획</li>
								<li>복지관 운영지침 및 규정관리</li>
								<li>장애인복지관 평가, 행정감사, 회계감사 </li>
								<li>개인정보관리, 이용자 민원관리</li>
								<li>회의체(운영위원회, 인사위원회, 노사협의회, 고충처리위원회) 관리</li>
							</ul>
						</td>
					</tr>		
				</tbody>
			</table>
		</div>
	</div>

	<div class="organization_detail_page"><!--// 총무팀 -->
		<h4 class="h4_label">총무팀</h4>
		<div class="organization_tble organization_tble_gray">
			<table>
				<thead>
					<tr>
						<th>직책</th>
						<th>성명</th>
						<th>전화번호</th>
						<th>담당업무</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>팀장</td>
						<td>차경화</td>
						<td>070-8978-8803</td>
						<td class="pad_st">
							<ul>
								<li>총무팀 업무 총괄</li>
								<li>인사관리, 복무관리</li>
								<li>외부인력관리(사회복무요원, 장애인일자리 등)</li>
								<li>물품관리, 대관관리</li>
							</ul>
						</td>
					</tr>						
					<tr>
						<td>사무원</td>
						<td>박유진</td>
						<td>070-8978-8804</td>
						<td class="pad_st">
							<ul>
								<li>회계(복지관), 문서관리, 계약관리</li>
							</ul>
						</td>
					</tr>				
					<tr>
						<td>사무원</td>
						<td>김주연</td>
						<td>070-8978-8805</td>
						<td class="pad_st">
							<ul>
								<li>회계(아동발달센터, 무료셔틀), 보험관리</li>
								<li>인사관리, 연말정산</li>
							</ul>
						</td>
					</tr>			
					<tr>
						<td>영양사</td>
						<td>정지혜</td>
						<td rowspan="2">070-8978-8806</td>
						<td class="pad_st">
							<ul>
								<li>식단작성</li>
								<li>조리지도 및 검식, 배식관리</li>
								<li>주식, 부식구매 및 검수관리</li>
								<li>급식시설 위생관리</li>
							</ul>
						</td>
					</tr>		
					<tr>
						<td>조리사</td>
						<td>조창길</td>
						<td class="pad_st">
							<ul>
								<li>일일 조리 및 배식</li>
								<li>부식 검수</li>
								<li>주방 및 식기 조리용구 관리</li>
							</ul>
						</td>
					</tr>				
					<tr>
						<td>사무원</td>
						<td>성하원</td>
						<td>070-8978-8808</td>
						<td class="pad_st">
							<ul>
								<li>이용료 수납, 식권판매</li>
							</ul>
						</td>
					</tr>		
					<tr>
						<td>대리</td>
						<td>김진봉</td>
						<td rowspan="7">070-8978-8818</td>
						<td class="pad_st">
							<ul>
								<li>해피버스, 복지관 차량관리(차량검사 및 수리)</li>
							</ul>
						</td>
					</tr>			
					<tr>
						<td>운전기사</td>
						<td>류용환</td>
						<td rowspan="3" class="pad_st">
							<ul>
								<li>무료셔틀버스 운행, 차량관리</li>
							</ul>
						</td>
					</tr>		
					<tr>
						<td>운전기사</td>
						<td>이승민</td>
					</tr>		
					<tr>
						<td>운전기사</td>
						<td>류규선</td>
					</tr>		
					<tr>
						<td>운전보조원</td>
						<td>박용수</td>
						<td rowspan="3" class="pad_st">
							<ul>
								<li>무료셔틀버스 탑승안내 및 보조</li>
							</ul>
						</td>
					</tr>			
					<tr>
						<td>운전기사</td>
						<td>박경수</td>
					</tr>			
					<tr>
						<td>운전기사</td>
						<td>한태승</td>
					</tr>	
				</tbody>
			</table>
		</div>
	</div>


<div class="organization_detail_page"><!--// 기획협력팀 -->
	<h4 class="h4_label">기획협력팀</h4>
	<div class="organization_tble organization_tble_gray">
		<table>
			<thead>
				<tr>
					<th>직책</th>
					<th>성명</th>
					<th>전화번호</th>
					<th>담당업무</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>팀장</td>
					<td>정나현</td>
					<td>070-8978-8823</td>
					<td class="pad_st">
						<ul>
							<li>기획협력팀 업무 총괄</li>
							<li>사회교육지원(실습지도)</li>
							<li>조사연구사업(욕구 및 만족도조사) </li>
							<li>정보제공사업(사업설명회/업무매뉴얼 제작)</li>
							<li>자문활용 및 관리</li>
						</ul>
					</td>
				</tr>			
				<tr>
					<td>대리</td>
					<td>강아름</td>
					<td>070-8978-8824</td>
					<td class="pad_st">
						<ul>
							<li>
								자원봉사관리사업(홍보/활동/관리/교육/친목행사/간담회)
							</li>
							<li>
								홍보사업(기관견학/관보/홍보물제작/관내&외홍보) 
							</li>
							<li>멘토링 지원(멘토링활동/간담회)</li>
						</ul>
					</td>
				</tr>			
				<tr>
					<td>사회복지사</td>
					<td>임정훈</td>
					<td>070-8978-8822</td>
					<td class="pad_st">
						<ul>
							<li>직원복지사업(직원교육/시무식&종무식/직원연수)</li>
							<li>장애인식개선사업(교육/캠페인/인식개선 활동단)</li>
							<li>홍보사업(홈페이지 관리)</li>
							<li>권익옹호사업</li>
						</ul>
					</td>
				</tr>		
				<tr>
					<td>사회복지사</td>
					<td>한기주</td>
					<td>070-8978-8825</td>
					<td class="pad_st">
						<ul>
							<li>후원관리사업(개발/관리/후원금지원/행복나눔장터)</li>
							<li>회교육사업(열린강좌)</li>
							<li>주말프로그램 엔젤인어스 지원</li>
							<li>회연계사업(이혈상담)</li>
						</ul>
					</td>
				</tr>		
			</tbody>
		</table>
	</div>
</div>




	<!--<div class="organization_detail_page">// 재활사업부 총괄
	</div> -->
	<div class="organization_detail_page"><!--// 상담치료지원부 총괄 -->
		<h4 class="h4_label">상담치료지원부</h4>
		<div class="organization_tble  organization_tble_orange">
			<table>
				<colgroup>
					<col width="15%">
					<col width="10%">
					<col width="20%">
					<col width="55%">
				</colgroup>
				<thead>
					<tr>
						<th>직책</th>
						<th>성명</th>
						<th>전화번호</th>
						<th>담당업무</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>상담치료지원부<br>부장</td>
						<td>유근혜</td>
						<td>070-8978-8863</td>
						<td class="pad_st">
							<ul>
								<li>상담치료지원부(상담가족지원팀, 기능향상지원팀, 아동발달센터) 총괄관리</li>
								<li>소아물리치료, 부모상담, 평가</li>
							</ul>
						</td>
					</tr>		
				</tbody>
			</table>
		</div>
	</div>



	<div class="organization_detail_page"><!--// 상담가족지원팀 -->
		<h4 class="h4_label">상담가족지원팀</h4>
		<div class="organization_tble organization_tble_gray">
			<table>
				<colgroup>
					<col width="15%">
					<col width="10%">
					<col width="20%">
					<col width="55%">
				</colgroup>
				<thead>
					<tr>
						<th>직책</th>
						<th>성명</th>
						<th>전화번호</th>
						<th>담당업무</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>팀장</td>
						<td>나연숙</td>
						<td>070-8978-8861</td>
						<td class="pad_st">
							<ul>
								<li>상담가족지원팀 업무 총괄</li>
								<li>상담/진단평가사업</li>
								<li>대기자관리사업(양육코칭-성인)</li>
								<li>가족지원사업(장애부모지원)</li>
								<li>부모회운영사업(정기회의/부모교육/나들이)</li>
								<li>회의체운영사업(확대사례회의/윤리위원회)</li>
							</ul>
						</td>
					</tr>		
					<tr>
						<td>대리</td>
						<td>이혜인</td>
						<td>070-8978-8867</td>
						<td class="pad_st">
							<ul>
								<li>진단평가사업(교육진단)</li>
								<li>대기자관리(양육코칭-아동)</li>
								<li>교육운영사업(유치반, 취학반)</li>
								<li>가족지원사업(장애부모지원)</li>
							</ul>
						</td>
					</tr>			
					<tr>
						<td>사회복지사</td>
						<td>박서희</td>
						<td>070-8978-8862</td>
						<td class="pad_st">
							<ul>
								<li>상담사업</li>
								<li>가족지원사업(가족나들이/가족참여프로그램)</li>
								<li>교육운영사업(계절학교/초등방과후)</li>
							</ul>
						</td>
					</tr>	
				</tbody>
			</table>
		</div>
	</div>

	<div class="organization_detail_page"><!--// 기능향상지원팀 -->
		<h4 class="h4_label">기능향상지원팀(아동발달센터 포함)</h4>
		<div class="organization_tble organization_tble_gray">
			<table>
				<colgroup>
					<col width="15%">
					<col width="10%">
					<col width="20%">
					<col width="55%">
				</colgroup>
				<thead>
					<tr>
						<th>직책</th>
						<th>성명</th>
						<th>전화번호</th>
						<th>담당업무</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>팀장</td>
						<td>한석환</td>
						<td>070-8978-8868</td>
						<td class="pad_st">
							<ul>
								<li>의료심리재활 사업 계획 및 평가 관리</li>
								<li>성인물리치료사업(치료, 상담, 평가)</li>
								<li>수중물리치료사업(치료, 상담, 평가)</li>
								<li>주단기연계치료</li>
								<li>진단사업(진단평가, 자립지원계획회의)</li>
							</ul>
						</td>
					</tr>		
					<tr>
						<td>대리</td>
						<td>문경진</td>
						<td>070-8978-8869</td>
						<td class="pad_st">
							<ul>
								<li>사업관리(의료심리재활사업)</li>
								<li>성인물리치료(치료, 상담, 평가)</li>
								<li>진단사업(진단평가, 자립지원계획회의)</li>
								<li>조사연구사업(욕구 및 만족도조사)</li>
								<li>문화여가사업(은하수 캠프)</li>
							</ul>
						</td>
					</tr>			
					<tr>
						<td>물리치료사</td>
						<td>정혜림</td>
						<td>070-8978-8864</td>
						<td class="pad_st">
							<ul>
								<li>사업진행(계획, 진행, 평가)s</li>
								<li>소아물리치료사업(치료, 상담, 평가)</li>
								<li>진단사업(진단평가, 자립지원계획회의)</li>
								<li>기타사업(자문활용)</li>
							</ul>
						</td>
					</tr>					
					<tr>
						<td>놀이치료사</td>
						<td>주은유</td>
						<td>070-8978-8873</td>
						<td class="pad_st">
							<ul>
								<li>사업진행(계획, 진행, 평가)</li>	
								<li>놀이치료사업(치료, 상담, 평가)</li>	
								<li>놀이그룹치료사업(치료, 상담, 평가)</li>	
								<li>진단사업(진단평가, 자립지원계획회의)</li>	
								<li>기타사업(자문활용, 가족놀이터)</li>	
								<li>문화여가사업(무지개 캠프)</li>	
							</ul>
						</td>
					</tr>			
					<tr>
						<td>미술치료사</td>
						<td>김소담</td>
						<td>070-8978-8872</td>
						<td class="pad_st">
							<ul>
								<li>사업진행(계획, 진행, 평가)</li>
								<li>미술치료사업(치료, 상담, 평가)</li>
								<li>기타사업(상담가족지원팀 가족놀이터)</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td>작업치료사</td>
						<td>이솔</td>
						<td>070-8978-8889</td>
						<td class="pad_st">
							<ul>
								<li>사업진행(계획, 진행, 평가)</li>
								<li>소아치료사업(치료, 상담, 평가)</li>
								<li>감각통합치료사업(치료, 상담, 평가)</li>
								<li>진단사업(진단평가, 자립지원계획회의</li>
							</ul>
						</td>
					</tr>			
					<tr>
						<td>작업치료사</td>
						<td>권혜림</td>
						<td>070-8978-8888</td>
						<td class="pad_st">
							<ul>
								<li>사업진행(계획, 진행, 평가)</li>
								<li>감각통합치료사업(치료, 상담, 평가)</li>
							</ul>
						</td>
					</tr>				
					<tr>
						<td>작업치료사</td>
						<td>서유정</td>
						<td>070-8978-8870</td>
						<td class="pad_st">
							<ul>
								<li>사업진행(계획, 진행, 평가)</li>
								<li>성인작업치료사업(치료, 상담, 평가)</li>
								<li>진단사업(진단평가, 자립지원계획회의)</li>
								<li>기타사업(자문활용)</li>
							</ul>
						</td>
					</tr>			
					<tr>
						<td>작업치료사</td>
						<td>윤유희</td>
						<td>070-8978-8871</td>
						<td class="pad_st">
							<ul>
								<li>사업진행(계획, 진행, 평가)</li>
								<li>성인작업치료사업(치료, 상담, 평가)</li>
							</ul>
						</td>
					</tr>			
					<tr>
						<td>언어치료사</td>
						<td>임소명</td>
						<td>070-8978-8866</td>
						<td class="pad_st">
							<ul>
								<li>사업진행(계획, 진행, 평가)</li>
								<li>언어치료사업(치료, 상담, 평가)</li>
								<li>언어그룹치료사업(치료, 상담, 평가) 중등반</li>
							</ul>
						</td>
					</tr>			
					<tr>
						<td>언어치료사</td>
						<td>김소연</td>
						<td>070-8978-8865</td>
						<td class="pad_st">
							<ul>
								<li>사업진행(계획, 진행, 평가)</li>
								<li>언어치료사업(치료, 상담, 평가)</li>
								<li>언어그룹치료사업(치료, 상담, 평가) 초등반</li>
							</ul>
						</td>
					</tr>			
					<tr>
						<td>언어치료사</td>
						<td>박진영</td>
						<td>-</td>
						<td class="pad_st">
							<ul>
								<li>육아휴직</li>
							</ul>
						</td>
					</tr>		
					<tr>
						<td>언어치료사</td>
						<td>이시현</td>
						<td>-</td>
						<td class="pad_st">
							<ul>
								<li>육아휴직</li>
							</ul>
						</td>
					</tr>	
				</tbody>
			</table>
		</div>
	</div>


	<div class="organization_detail_page"><!--// 사회통합지원부 총괄 -->
		<h4 class="h4_label">사회통합지원부</h4>
		<div class="organization_tble  organization_tble_red">
			<table>
				<colgroup>
					<col width="15%">
					<col width="10%">
					<col width="20%">
					<col width="55%">
				</colgroup>
				<thead>
					<tr>
						<th>직책</th>
						<th>성명</th>
						<th>전화번호</th>
						<th>담당업무</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>사회통합지원부부장</td>
						<td>신현숙</td>
						<td>070-8978-8853</td>
						<td class="pad_st">
							<ul>
								<li>사회통합지원부(평생교육지원팀, 지역복지팀) 총괄관리</li>
								<li>발달장애인 평생교육 및 지역복지 사업  관련 대외협력 활동</li>
								<li>장애인권익옹호사업 운영 </li>
							</ul>
						</td>
					</tr>		
				</tbody>
			</table>
		</div>
	</div>

	<div class="organization_detail_page"><!--// 지역복지팀 -->
		<h4 class="h4_label">지역복지팀</h4>
		<div class="organization_tble organization_tble_gray">
			<table>
				<colgroup>
					<col width="15%">
					<col width="10%">
					<col width="20%">
					<col width="55%">
				</colgroup>
				<thead>
					<tr>
						<th>직책</th>
						<th>성명</th>
						<th>전화번호</th>
						<th>담당업무</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>팀장</td>
						<td>한혜진</td>
						<td>070-8978-8854</td>
						<td class="pad_st">
							<ul>
								<li>지역복지팀 사업 총괄</li>
								<li>사례관리사업(사례발굴 및 사정, 개입계획수립 및 실행, 종결관리,  사례회의 및 자원발굴, 네트워크 활동, 사례발표, 유관기관 연계 및 관리)	</li>
								<li>기타지원사업(욕구 및 만족도조사, 자문활용, 실습지도)</li>
							</ul>
						</td>
					</tr>				
					<tr>
						<td>대리</td>
						<td>김철환</td>
						<td>070-8978-8856</td>
						<td class="pad_st">
							<ul>
								<li>성인장애인문화여가지원사업(캘리그라피, 신장장애인자조모임, 하모니카, 가요, 연필화교실)</li>
								<li>칸타빌레합창단 운영</li>
								<li>절기지원사업(설명절지원)</li>
								<li>늘해랑학교</li>
							</ul>
						</td>
					</tr>			
					<tr>
						<td>사회복지사</td>
						<td>김보경</td>
						<td>070-8978-8857</td>
						<td class="pad_st">
							<ul>
								<li>사례관리사업(사례발굴 및 사정, 개입계획수립 및 실행, 종결관리 / 사례회의)</li>
								<li>지역복지사업(일상생활지원사업 - 관내목욕, 관내이미용, 보장구지원 및 무상점검, 중증장애인 쉼지원(재가장애인 나들이, 건강지원 ‘밥상공동체 함밥’)</li>
								<li>맞춤형도우미파견사업</li>
								<li>늘해랑학교</li>
							</ul>
						</td>
					</tr>			
					<tr>
						<td>사회복지사</td>
						<td>박진우</td>
						<td>070-8978-8859</td>
						<td class="pad_st">
							<ul>
								<li>시각장애인 지원사업(자료이용, 정보제공, 도서제작사업, 전문인력교육, 점역사업, 기관협력)</li>
								<li>성인장애인문화여가지원사업(요가교실, 장애인연극단, 성인장애인문화체험, 민요교실, 서예교실, 사진교실, 영화관람)</li>
								<li>절기지원사업(추석명절지원, 무더위쉼터)</li>
							</ul>
						</td>
					</tr>	
					<tr>
						<td>사회복지사</td>
						<td>류지아</td>
						<td>070-8978-8855</td>
						<td class="pad_st">
							<ul>
								<li>사례관리사업(사례발굴 및 사정, 개입계획수립 및 실행, 종결관리, 사례회의)</li>
								<li>지역복지사업(일상생활지원사업 - 주거개선지원, 반찬지원, 방문이미용, 방문목욕, 세탁지원 / 중증장애인 쉼지원 - 터닝포인트, 재가장애인 나들이)</li>
								<li>절기지원사업(김장지원)</li>
								<li>무더위쉼터</li>
							</ul>
						</td>
					</tr>	
				</tbody>
			</table>
		</div>
	</div>
<div class="organization_detail_page"><!--// 평생교육지원팀 -->
		<h4 class="h4_label">평생교육지원팀</h4>
		<div class="organization_tble organization_tble_gray">
			<table>
				<colgroup>
					<col width="15%">
					<col width="10%">
					<col width="20%">
					<col width="55%">
				</colgroup>
				<thead>
					<tr>
						<th>직책</th>
						<th>성명</th>
						<th>전화번호</th>
						<th>담당업무</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>팀장</td>
						<td>신민재</td>
						<td>070-8978-8874</td>
						<td class="pad_st">
							<ul>
								<li>평생교육지원팀 총괄</li>
								<li>사회교육지원(실습지도)</li>
								<li>자문활용 및 관리</li>
							</ul>
						</td>
					</tr>				
					<tr>
						<td>대리</td>
						<td>박인철</td>
						<td>070-8978-8877</td>
						<td class="pad_st">
							<ul>
								<li>수리꿈터 총괄</li>
								<li>수리꿈터 6반 담당</li>
								<li>성인발달장애인 교육훈련</li>
							</ul>
						</td>
					</tr>			
					<tr>
						<td>대리</td>
						<td>표지현</td>
						<td>070-8978-8878</td>
						<td class="pad_st">
							<ul>
								<li>장애인일자리사업 및 취업, 고용, 공감카페 총괄</li>
							</ul>
						</td>
					</tr>			
					<tr>
						<td>사회복지사</td>
						<td>서수미</td>
						<td>070-8978-8879</td>
						<td class="pad_st">
							<ul>
								<li>수리꿈터 5반 담당교사</li>
								<li>성인발달장애인 교육훈련</li>
							</ul>
						</td>
					</tr>	
					<tr>
						<td>재활상담사</td>
						<td>양인영</td>
						<td>070-8978-8880</td>
						<td class="pad_st">
							<ul>
								<li>장애인복지일자리사업 및 발달장애인생활일자리사업 담당</li>
							</ul>
						</td>
					</tr>			
					<tr>
						<td>사회복지사</td>
						<td>이도연</td>
						<td>070-8978-8881</td>
						<td class="pad_st">
							<ul>
								<li>수리꿈터 1반 담당교사</li>
								<li>성인발달장애인 교육훈련</li>
							</ul>
						</td>
					</tr>		
					<tr>
						<td>재활상담사</td>
						<td>김정렬</td>
						<td>070-8978-8882</td>
						<td class="pad_st">
							<ul>
								<li>수리꿈터 7반 담당교사</li>
								<li>성인발달장애인 교육훈련</li>
							</ul>
						</td>
					</tr>		
					<tr>
						<td>재활상담사</td>
						<td>정수인</td>
						<td>070-8978-8876</td>
						<td class="pad_st">
							<ul>
								<li>수리꿈터 2반 담당교사</li>
								<li>성인발달장애인 교육훈련</li>
							</ul>
						</td>
					</tr>		
					<tr>
						<td>사회복지사</td>
						<td>김태훈</td>
						<td>070-8978-8887</td>
						<td class="pad_st">
							<ul>
								<li>수리꿈터 4반 담당교사</li>
								<li>성인발달장애인 교육훈련</li>
							</ul>
						</td>
					</tr>			
					<tr>
						<td>사회복지사</td>
						<td>박빛나래</td>
						<td>070-8978-8883</td>
						<td class="pad_st">
							<ul>
								<li>수리꿈터 3반 담당교사</li>
								<li>성인발달장애인 교육훈련</li>
							</ul>
						</td>
					</tr>	
					<tr>
						<td>사회복지사</td>
						<td>이예림</td>
						<td>070-8978-8884</td>
						<td class="pad_st">
							<ul>
								<li>중등/고등방과후 교실 담당</li>
								<li>잡앤조이 담당</li>
								<li>꽃보다 중년 담당</li>
							</ul>
						</td>
					</tr>			
					<tr>
						<td>직무지도원</td>
						<td>서지혜</td>
						<td>070-8978-8885</td>
						<td class="pad_st">
							<ul>
								<li>장애인일자리사업 직무지도원</li>
							</ul>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="organization_detail_page"><!--// 재활스포츠센터 총괄 -->
		<h4 class="h4_label">재활스포츠센터</h4>
		<div class="organization_tble  organization_tble_yellow">
			<table>
				<colgroup>
					<col width="15%">
					<col width="10%">
					<col width="20%">
					<col width="55%">
				</colgroup>
				<thead>
					<tr>
						<th>직책</th>
						<th>성명</th>
						<th>전화번호</th>
						<th>담당업무</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>재활스포츠센터 부장</td>
						<td>이영규</td>
						<td>070-8978-8826</td>
						<td class="pad_st">
							<ul>
								<li>수리재활스포츠센터 총괄</li>
								<li>복지관 시설 관리</li>
								<li>자문 및 실습생 지도 관리</li>
								<li>프로그램 적합성 평가 </li>
								<li>내, 외부 수영대회 관리</li>
							</ul>
						</td>
					</tr>		
				</tbody>
			</table>
		</div>
	</div>

	<div class="organization_detail_page"><!--// 수중운동팀 -->
		<h4 class="h4_label">수중운동팀</h4>
		<div class="organization_tble  organization_tble_gray">
			<table>
				<colgroup>
					<col width="15%">
					<col width="10%">
					<col width="20%">
					<col width="55%">
				</colgroup>
				<thead>
					<tr>
						<th>직책</th>
						<th>성명</th>
						<th>전화번호</th>
						<th>담당업무</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>부장</td>
						<td>이영규</td>
						<td>070-8978-8826</td>
						<td class="pad_st">
							<ul>
								<li>수리재활스포츠부 총괄</li>
								<li>자문 및 실습생 지도 관리</li>
								<li>프로그램 적합성 평가</li>
								<li>내, 외부 수영대회 관리</li>
								<li>자문활용 및 관리</li>
							</ul>
						</td>
					</tr>				
					<tr>
						<td>수중재활운동사</td>
						<td>강병문</td>
						<td>070-8978-8827</td>
						<td class="pad_st">
							<ul>
								<li>수중재활 교육관리</li>
								<li>이용자 간담회 관리</li>
								<li>시설물 관리(비품관리)</li>
								<li>뇌병변B/D, 관절요통B, 장애성인A, 유아반</li>
								<li>직장인B, 어린이B, 장애성인C, 토요, 개별</li>
							</ul>
						</td>
					</tr>			
					<tr>
						<td>수중재활운동사</td>
						<td>김창하</td>
						<td>070-8978-8828</td>
						<td class="pad_st">
							<ul>
								<li>팀 월계획서, 실적관리</li>
								<li>자원봉사 관리</li>
								<li>수영장 이용자 관리</li>
								<li>직장인A, 뇌병변A/E, 모자아동, 장애성인B</li>
								<li>어머니A, 실버반, 장애아동, 토요, 개별</li>
							</ul>
						</td>
					</tr>			
					<tr>
						<td>수중재활운동사</td>
						<td>박문순</td>
						<td>070-8978-8819</td>
						<td class="pad_st">
							<ul>
								<li>교육자료 관리</li>
								<li>꿈이든 카드 및 이용자 관리</li>
								<li>내, 외부 홍보 관리</li>
								<li>뇌병변B/C, 관절요통A, 어린이A/B, 어머니B</li>
								<li>장애아동, 장애성인B, 토요, 장애청소년A</li>
							</ul>
						</td>
					</tr>	
					<tr>
						<td>수중재활운동사</td>
						<td>김찬미</td>
						<td>070-8978-8829</td>
						<td class="pad_st">
							<ul>
								<li>수영장(기자재, 소모품)관리</li>
								<li>교육자료/회의록 관리</li>
								<li>팀 문서 관리</li>
								<li>뇌병변A/D, 관절요통A, 모자아동, 어린이A</li>
								<li>실버반, 유아반, 장애성인C, 장애청소년B</li>
							</ul>
						</td>
					</tr>			
					<tr>
						<td>회원관리</td>
						<td>정수연</td>
						<td>070-8978-8830</td>
						<td class="pad_st">
							<ul>
								<li>안내데스크 회원관리(내방/전화 상담)</li>
								<li>프로그램 회원 이용 안내</li>
								<li>재등록/호보물 관리</li>
								<li>이용자, 자원봉사자, 입퇴소 관리</li>
							</ul>
						</td>
					</tr>		
					<tr>
						<td>회원관리</td>
						<td>송빛나</td>
						<td>070-8978-8830</td>
						<td class="pad_st">
							<ul>
								<li>안내데스크 회원관리(내방/전화 상담)</li>
								<li>프로그램 회원 이용 안내</li>
								<li>재등록/호보물 관리</li>
								<li>이용자, 자원봉사자, 입퇴소 관리</li>
							</ul>
						</td>
					</tr>		
					<tr>
						<td>환경관리</td>
						<td>신지훈</td>
						<td>070-8978-8831</td>
						<td class="pad_st">
							<ul>
								<li>남자 탈의실 관리(수영장)</li>
								<li>장애인탈의 보조</li>
								<li>지하1층 화장실 관리</li>
								<li>지하3,4층 로비 관리</li>
							</ul>
						</td>
					</tr>		
					<tr>
						<td>환경관리</td>
						<td>구성철</td>
						<td>070-8978-8831</td>
						<td class="pad_st">
							<ul>
								<li>남자 탈의실 관리(수영장)</li>
								<li>장애인탈의 보조</li>
								<li>지하1층 화장실 관리</li>
								<li>지하3,4층 로비 관리</li>
							</ul>
						</td>
					</tr>			
					<tr>
						<td>환경관리</td>
						<td>송미승</td>
						<td>070-8978-8832</td>
						<td class="pad_st">
							<ul>
								<li>여자 탈의실 관리(수영장, 체단실)</li>
								<li>장애인탈의 보조</li>
								<li>지하1층 로비 관리</li>
								<li>지하1층 화장실 관리</li>
							</ul>
						</td>
					</tr>	
					<tr>
						<td>환경관리</td>
						<td>김미경</td>
						<td>070-8978-8832</td>
						<td class="pad_st">
							<ul>
								<li>여자 탈의실 관리(수영장, 체단실)</li>
								<li>장애인탈의 보조</li>
								<li>지하1층 로비 관리</li>
								<li>지하1층 화장실 관리</li>
							</ul>
						</td>
					</tr>			
					<tr>
						<td>환경관리</td>
						<td>문홍자</td>
						<td>070-8978-8832</td>
						<td class="pad_st">
							<ul>
								<li>환경미화</li>
								<li>장애인일자리사업 참여자 관리</li>
								<li>청소용품 및 화장실용품 관리</li>
							</ul>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class="organization_detail_page"><!--// 생활체육팀 -->
		<h4 class="h4_label">생활체육팀</h4>
		<div class="organization_tble  organization_tble_gray">
			<table>
				<colgroup>
					<col width="15%">
					<col width="10%">
					<col width="20%">
					<col width="55%">
				</colgroup>
				<thead>
					<tr>
						<th>직책</th>
						<th>성명</th>
						<th>전화번호</th>
						<th>담당업무</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>팀장</td>
						<td>김태훈</td>
						<td>070-8978-8833</td>
						<td class="pad_st">
							<ul>
								<li>생활체육팀 업무 총괄</li>	
								<li>사업계획서,예산,평가 지도</li>	
								<li>조사연구사업(만족도 조사)</li>	
								<li>체력단련실 관리</li>	
								<li>팀(파트강사) 관리</li>	
								<li>프로그램 이용자 관리</li>	
								<li>담당프로그램 진행(체력단련실, 체육교실, 생활체육교실)</li>	
							</ul>
						</td>
					</tr>				
					<tr>
						<td>재활운동사</td>
						<td>김승현</td>
						<td>070-8978-8834</td>
						<td class="pad_st">
							<ul>
								<li>자문위원 운영 및 관리</li>
								<li>체력단련실 이용자 관리</li>
								<li>내부행사 행사지원업무</li>
								<li>전산관리, 문서관리</li>
								<li>비품 및 기자재 관리</li>
								<li>외부대회 관리</li>
								<li>이용료 청구</li>
								<li>담당프로그램 진행(체력단련실, 체육교실, 생활체육교실)</li>
							</ul>
						</td>
					</tr>			
				</tbody>
			</table>
		</div>
	</div>

	<div class="organization_detail_page"><!--// 시설관리팀 -->
		<h4 class="h4_label">시설관리팀</h4>
		<div class="organization_tble  organization_tble_gray">
			<table>
				<colgroup>
					<col width="15%">
					<col width="10%">
					<col width="20%">
					<col width="55%">
				</colgroup>
				<thead>
					<tr>
						<th>직책</th>
						<th>성명</th>
						<th>전화번호</th>
						<th>담당업무</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>팀장</td>
						<td>김태용</td>
						<td>070-8978-8811</td>
						<td class="pad_st">
							<ul>
								<li>시설점검 및 계획</li>
								<li>전기실 관리</li>
								<li>소방시설관리</li>
								<li>소방교육 및 훈련ㄴ</li>
								<li>산업안전감독자 업무</li>
							</ul>
						</td>
					</tr>				
					<tr>
						<td>시설기사</td>
						<td>양회봉</td>
						<td>070-8978-8813</td>
						<td class="pad_st">
							<ul>
								<li>장애인 편의시설 관리, 서류･도면･일지 관리</li>
								<li>건축부문관리(도로･광장･벽체･난간･타일･경사로 바닥 등)</li>
								<li>냉동시설･보일러 관리</li>
								<li>목욕탕 설비･배기휀･승강기･펌프류 관리</li>
								<li>동파방지 관련 기기관리</li>
								<li>가스시설관리</li>
							</ul>
						</td>
					</tr>		
					<tr>
						<td>시설기사</td>
						<td>이문식</td>
						<td>070-8978-8814</td>
						<td class="pad_st">
							<ul>
								<li>자동문 및 방범 방화셔터 관리</li>
								<li>저수조, 응축수조 등 탱크류 관리</li>
								<li>주차관제 시설관리</li>
								<li>CCTV 설비 관리</li>
								<li>공조냉난방 관리(공조기,에어컨)</li>
								<li>수영장 시설관리</li>
							</ul>
						</td>
					</tr>			
					<tr>
						<td>시설기사</td>
						<td>안재욱</td>
						<td>070-8978-8812</td>
						<td class="pad_st">
							<ul>
								<li>수영장 운영</li>
								<li>냉동기 운영</li>
								<li>야간 경비업무</li>
							</ul>
						</td>
					</tr>	
				</tbody>
			</table>
		</div>
	</div>

	<div class="organization_detail_page"><!--// 자립생활지원부 총괄 -->
		<h4 class="h4_label">자립생활지원부</h4>
		<div class="organization_detail">
			<ul>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img78.jpg" alt="자립생활지원부장 주현실씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">주현실</p>
						<p>직위 : 단기보호센터 국장</p>
						<p>업무 : 자립생활지원부 총괄</p>
						<p>번호 : 070-8978-8836</p>
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
						<p>번호 : 070-8978-8841</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img75.jpg" alt="주간보호센터 이효선씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">이효선</p>
						<p>직위 : 대리</p>
						<p>업무 : 주간보호</p>
						<p>번호 : 070-8978-8844</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img73.jpg" alt="주간보호센터 윤지해씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">윤지해</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 주간보호</p>
						<p>번호 : 070-8978-8843</p>
					</div>
				</li>
				<!-- <li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img76.jpg" alt="주간보호센터 이대로씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">이대로</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 주간보호</p>
						<p>번호 : gogocof@naver.com </p>
					</div>
				</li> -->

				<!-- <li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img100.jpg" alt="주간보호센터 육선화씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">육선화</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 주간보호</p>
						<p>번호 : dbrtjsghk6@naver.com </p>
					</div>
				</li> -->
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img122.jpg" alt="주간보호센터 김준범씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">김준범</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 주간보호</p>
						<p>번호 : 070-8978-8842</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img141.jpg" alt="주간보호센터 홍대웅씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">홍대웅</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 주간보호</p>
						<p>번호 : 070-8978-8846</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img157.jpg" alt="주간보호센터 이예솔씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">이예솔</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 주간보호</p>
						<p>번호 : 070-8978-8847</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img157.jpg" alt="주간보호센터 이예솔씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">임유진</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 주간보호</p>
						<p>번호 : 070-8978-8845</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img109.jpg" alt="주간보호센터 유척희씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">유척희</p>
						<p>직위 : 운전기사</p>
						<p>업무 : 주간보호 셔틀 운영</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img74.jpg" alt="주간보호센터 곽동명씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">곽동명(육아휴직)</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 주간보호</p>
					<!-- 	<p>번호 : 070-8978-8845</p> -->
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
						<p>번호 : 070-8978-8890</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img81.jpg" alt="단기보호센터 최예지씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">최예지</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 단기보호</p>
						<p>번호 : 070-8978-8839</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img82.jpg" alt="단기보호센터 윤영운씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">윤영운</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 단기보호</p>
						<p>번호 : 070-8978-8840</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img123.jpg" alt="단기보호센터 전호성씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">전호정</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 단기보호</p>
						<p>번호 : 070-8978-8838</p>
					</div>
				</li>
				<li>
					<p class="picture"><!-- <img src="<?=$g4[path]?>/images/sub1/picture_img111.jpg" alt="단기보호센터 임대성씨 사진입니다." /> --></p>
					<div class="detail">
						<p class="name">전병우</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 단기보호</p>
						<p>번호 : 070-8978-8837</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img112.jpg" alt="단기보호센터 민옥련씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">민옥련</p>
						<p>직위 : 생활지도원</p>
						<p>업무 : 단기보호</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img118.jpg" alt="단기보호센터 이준희씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">이준희</p>
						<p>직위 : 생활지도원</p>
						<p>업무 : 단기보호</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img119.jpg" alt="단기보호센터 노미숙씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">노미숙</p>
						<p>직위 : 생활지도원</p>
						<p>업무 : 단기보호</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img132.jpg" alt="단기보호센터 한정미씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">한정미</p>
						<p>직위 : 생활지도원</p>
						<p>업무 : 단기보호</p>
					</div>
				</li>
				<li>
					<p class="picture"><!-- <img src="<?=$g4[path]?>/images/sub1/picture_img132.jpg" alt="단기보호센터 한정미씨 사진입니다." /> --></p>
					<div class="detail">
						<p class="name">황인태</p>
						<p>직위 : 생활지도원</p>
						<p>업무 : 단기보호</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img105.jpg" alt="운영지원팀 김희진씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">김희진</p>
						<p>직위 : 조리사</p>
						<p>업무 : 조리사</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img80.jpg" alt="단기보호센터 백은오씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">백은오(육아휴직)</p>
						<p>직위 : 대리</p>
						<p>업무 : 단기보호</p>
						<p>번호 : 070-8978-8837</p>
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
						<p>번호 : 070-8978-8849</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img87.jpg" alt="사회서비스센터 김주영씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">김주영</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 활동지원사업</p>
						<p>번호 : 070-8978-8850</p>
					</div>
				</li>
				<li>
					<p class="picture"><img src="<?=$g4[path]?>/images/sub1/picture_img120.jpg" alt="사회서비스센터 안진씨 사진입니다." /></p>
					<div class="detail">
						<p class="name">안진</p>
						<p>직위 : 사회복지사</p>
						<p>업무 : 활동지원사업</p>
						<p>번호 : 070-8978-8848</p>
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