<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "복지관 소개"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "조직현황"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	include_once('header.php'); //회사소개의 공통 상단을 연결합니다.

	
?>

	<div id="sub_tit">
		<div class="path">
			<li><a href="/"><span class="ic-home"><i></i></span></a></li>
			<li><?php echo $tmenu_?></li>
			<li><?php echo $g5['title']?></li>
		</div>
		<div class="title"><?php echo $tmenu_?></div>
		<p class="normal_txt">
			홈페이지를 방문해주셔서 감사합니다.
		</p>
	</div>


	<div class="scontents">

	
		<div class="organization_area">
			<div class="orover">
			<div class="organization">
				<dl class="executives executives1">
					<dt>사회복지법인<br>돕는 사람들</dt>
					<dd><span class="blet">이사회</span></dd>
				</dl>
				<dl class="executives executives2">
					<dt><a href="#none">관장</a></dt>
					<dd>
						<span class="blet">운영위원회</span>
						<span class="blet">인사위원회</span>
						<span class="blet">자문위원회</span>
						<span class="blet">식당운영위원회</span>
						<span class="blet">수리부모회</span>
						<span class="blet">수리어울림봉사단</span>
					</dd>
				</dl>
				<div class="executives3"><a href="#none">사무국장</a></div>
				<div class="executives executives4"><a href="#none">자립생활지원부<br>사무국장</a></div>
				<div class="team_area">
					<dl class="team1">
						<dt><a href="#none">운영지원부</a></dt>
						<dd class="first"><a href="#none">
							<span>총무팀</span>
							<p>총무회계</p>
							<p>식당관리</p>
							<p>차량관리</p>
							<p>환경관리</p>
						</a></dd>
		<!--
						<dd><a href="#none">
							<span>시설<br>관리팀</span>
							<p>- 시설관리<br>- 차량관리</p>
						</a></dd>
		-->
						<dd><a href="#none">
							<span>기획<br>협력팀</span>
							<p>기획사업<br>홍보사업<br>지역연계<br>후원관리<br>자원봉사</p>
						</a></dd>
						<!--<dd><a href="#none">수중<br />운동팀</a></dd>
						<dd><a href="#none">생활<br />체육팀</a></dd>-->
					</dl>
					<dl class="team2">
						<dt><a href="#none">상담치료지원부</a></dt>
						<dd><a href="#none">
							<span>상담가족<br>지원팀</span>
							<p>상담지원<br>가족지원<br>교육재활<br>방과후교육(초등)<br>계절학교 </p>
						</a></dd>
						<dd><a href="#none">
							<span>기능향상<br>지원팀</span>
							<p>의료재활<br>심리치료 <br>아동발달</p>
						</a></dd>
					</dl>
					<dl class="team2-1">
						<dt><a href="#none">사회통합지원부</a></dt>
						<dd><a href="#none">
							<span>지역<br>복지팀</span>
							<p>사례관리<br>제가복지<br>문화여가<br>사각지원(도서관)<br>정보화 <br>늘해랑</p>
						</a></dd>
						<dd><a href="#none">
							<span>평생교육<br>지원팀</span>
							<p>평생교육<br>직업재활 <br>중장년pg <br>방과후(중고등) <br>까페(마카롱)</p>
						</a></dd>
					</dl>
					<dl class="team3">
						<dt><a href="#none">재활스포츠센터</a></dt>
						<dd class="first"><a href="#none">
							<span>수중<br>운동팀</span>
							<p>수영장</p>
						</a></dd>
						<dd><a href="#none">
							<span>생활<br>체육팀</span>
							<p>생활체육<br>체력단련실</p>
						</a></dd>
						<dd><a href="#none">
							<span>시설<br>관리팀</span>
							<p>시설관리</p>
						</a></dd>
					</dl>
					<dl class="team4">
						<dt class="pad_top66"><!-- <a href="#none">자립생활지원부</a> --></dt>
						<dd class="first"><a href="#none">
							<span>주간<br>보호<br>센터</span>
						</a></dd>
						<dd><a href="#none">
							<span>단기<br>보호<br>센터</span>
						</a></dd>
						<dd><a href="#none">
							<span>활동<br>지원<br>기관</span>
						</a></dd>
					</dl>
				</div>
				<div class="reference">※ 각 팀명 클릭시 세부 내역 볼 수 있습니다.</div>
			</div>
			</div>

			<div class="organization_detail_page" style="display: none;"><!--// 관장 -->
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

			<div class="organization_detail_page" style="display: none;"><!--// 사무국장 -->
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
		<!-- 					<tr>
								<td>사무국장</td>
								<td>주현실</td>
								<td>070-8978-8836</td>
								<td class="pad_st">
									<ul>
										<li>주간·단기보호센터 업무 총괄 및 대외업무</li>
									</ul>
								</td>
							</tr> -->
						</tbody>
					</table>
				</div>
			</div>

			<div class="organization_detail_page" style="display: none;"><!--// 자립생활지원부 사무국장 -->
				<h4 class="h4_label">자립생활지원부 사무국장</h4>
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
								<td style="line-height:1.3">자립생활지원부<br>사무국장</td>
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
			<div class="organization_detail_page" style="display: none;"><!--// 운영지원부 총괄 -->
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

			<div class="organization_detail_page" style="display:none;"><!--// 총무팀 -->
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
								<td>정나현</td>
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
								<td>대리</td>
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
								<td>운전보조원</td>
								<td>박경수</td>
							</tr>			
							<tr>
								<td>운전보조원</td>
								<td>한태승</td>
							</tr>	
						</tbody>
					</table>
				</div>
			</div>


		<div class="organization_detail_page" style="display: none;"><!--// 기획협력팀 -->
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
							<td>신민재</td>
							<td>070-8978-8823</td>
							<td class="pad_st">
								<ul>
									<li>기획협력팀 업무 총괄</li>
									<li>사회교육지원(실습지도)</li>
									<li>조사연구사업(욕구 및 만족도조사) </li>
									<li>정보제공사업(사업설명회/업무매뉴얼 제작)</li>
									<li>자문활용 및 관리</li>
									<li>후원관리사업(개발/관리/후원금지원/행복나눔장터)</li>
								</ul>
							</td>
						</tr>			
						<tr>
							<td>사회복지사</td>
							<td>임정훈</td>
							<td>070-8978-8822</td>
							<td class="pad_st">
								<ul>
									<li>직원복지사업(직원교육/시무식&amp;종무식/직원연수)</li>
									<li>장애인식개선사업(교육/캠페인/인식개선 활동단)</li>
									<li>홍보사업(홈페이지 관리)</li>
									<li>권익옹호사업</li>
								</ul>
							</td>
						</tr>		
				
						<tr>
							<td>사회복지사</td>
							<td>김은선</td>
							<td>070-8978-8824</td>
							<td class="pad_st">
								<ul>
									<li>사회교육사업(열린강좌, 사회복무요원실습)</li>
									<li>직원복지사업(직원교육/시무식&amp;종무식/직원연수)</li>
									<li>홍보사업 (기관견학/관보/홍보물제작/관내&amp;외홍보)</li>
									<li>멘토링 지원 (멘토링활동/간담회)</li>
								</ul>
							</td>
						</tr>	
						<tr>
							<td>사회복지사</td>
							<td>정예진</td>
							<td>070-8978-8825</td>
							<td class="pad_st">
								<ul>
									<li>자원봉사관리사업 (홍보/활동/관리/교육/친목행사/간담회)</li>
									<li>사회교육사업(열린강좌)</li>
									<li>주말프로그램 엔젤인어스 지원</li>
									<li>지역연계사업(이혈상담)</li>
								</ul>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>




			<!--<div class="organization_detail_page">// 재활사업부 총괄
			</div> -->
			<div class="organization_detail_page" style="display: none;"><!--// 상담치료지원부 총괄 -->
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



			<div class="organization_detail_page" style="display: none;"><!--// 상담가족지원팀 -->
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

			<div class="organization_detail_page" style="display: none;"><!--// 기능향상지원팀 -->
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
								<td>문경진</td>
								<td>070-8978-8869</td>
								<td class="pad_st">
									<ul>
										<li>의료심리재활 사업 계획 및 평가 관리</li>
										<li>성인물리치료(치료, 상담, 평가)</li>
										<li>진단사업(진단평가, 자립지원계획회의)</li>
										<li>조사연구사업(욕구 및 만족도조사)</li>
									</ul>
								</td>
							</tr>			
							<tr>
								<td>대리</td>
								<td>정혜림</td>
								<td>070-8978-8864</td>
								<td class="pad_st">
									<ul>
										<li>사업관리(의료심리재활사업)</li>
										<li>사업진행(계획, 진행, 평가)</li>
										<li>소아물리치료사업(치료, 상담, 평가)</li>
										<li>진단사업(진단평가, 자립지원계획회의)</li>
									</ul>
								</td>
							</tr>	
							<tr>
								<td>물리치료사</td>
								<td>한석환</td>
								<td>070-8978-8868</td>
								<td class="pad_st">
									<ul>
										<li>성인물리치료사업(치료, 상담, 평가)</li>
										<li>수중물리치료사업(치료, 상담, 평가)</li>
										<li>주단기연계치료</li>
										<li>기타사업(자문활용)</li>
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
										<li>문화여가사업(무지개 캠프)</li>
										<li>기타사업(상담가족지원팀 가족놀이터)</li>
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
										<li>진단사업(진단평가, 자립지원계획회의)</li>
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
										<li>문화여가사업(은하수 캠프)</li>
										<li>조사연구사업(욕구 및 만족도조사)</li>
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
								<td>이시현</td>
								<td>070-8978-8866</td>
								<td class="pad_st">
									<ul>
										<li>사업진행(계획, 진행, 평가)</li>
										<li>언어치료사업(치료, 상담, 평가)</li>
										<li>언어그룹치료사업(치료, 상담, 평가) 중등반</li>
										<li>기타사업(자문활용)</li>
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
										<li>진단사업(진단평가, 자립지원계획회의)</li>
									</ul>
								</td>
							</tr>	
												<tr>
								<td>놀이치료사</td>
								<td>이지희</td>
								<td>070-8978-8873</td>
								<td class="pad_st">
									<ul>
										<li>사업진행(계획, 진행, 평가)</li>	
										<li>놀이치료사업(치료, 상담, 평가)</li>	
										<li>놀이그룹치료사업(치료, 상담, 평가)</li>	
										<li>진단사업(진단평가, 자립지원계획회의)</li>	
										<li>기타사업(자문활용, 가족놀이터)</li>	
									</ul>
								</td>
							</tr>	
							<tr>
								<td>사회복지사</td>
								<td>주배련</td>
								<td>070-8978-8851</td>
								<td class="pad_st">
									<ul>
										<li>재활치료사업(발달재활/언어발달지원/우리아이심리지원/치료서비스) 운영 관리</li>
										<li>방과 후 프로그램</li>
									</ul>
								</td>
							</tr>			
							<tr>
								<td>미술치료사</td>
								<td>김용경</td>
								<td>-</td>
								<td class="pad_st">
									<ul>
										<li>재활치료사업(발달재활/우리아이심리지원/치료서비스)</li>
									</ul>
								</td>
							</tr>		
							<tr>
								<td>언어치료사</td>
								<td>박희영</td>
								<td>-</td>
								<td class="pad_st">
									<ul>
										<li>재활치료사업(발달재활/언어발달지원/우리아이심리지원/치료서비스)</li>
									</ul>
								</td>
							</tr>				
							<tr>
								<td>언어치료사</td>
								<td>송지윤</td>
								<td>-</td>
								<td class="pad_st">
									<ul>
										<li>재활치료사업(발달재활/언어발달지원/우리아이심리지원/치료서비스)</li>
									</ul>
								</td>
							</tr>			
							<tr>
								<td>인지치료사</td>
								<td>이경아</td>
								<td>-</td>
								<td class="pad_st">
									<ul>
										<li>재활치료사업(발달재활/우리아이심리지원/치료서비스)</li>
									</ul>
								</td>
							</tr>		
							<tr>
								<td>인지치료사</td>
								<td>조순남</td>
								<td>-</td>
								<td class="pad_st">
									<ul>
										<li>재활치료사업(발달재활/우리아이심리지원/치료서비스)</li>
									</ul>
								</td>
							</tr>	
							<tr>
								<td>음악치료사</td>
								<td>한윤정</td>
								<td>-</td>
								<td class="pad_st">
									<ul>
										<li>재활치료사업(발달재활/우리아이심리지원/치료서비스)</li>
									</ul>
								</td>
							</tr>	
							<tr>
								<td>언어치료사</td>
								<td>이고은</td>
								<td>-</td>
								<td class="pad_st">
									<ul>
										<li>재활치료사업(발달재활/언어발달지원/우리아이심리지원/치료서비스)</li>
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
								<td>작업치료사</td>
								<td>이솔</td>
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


			<div class="organization_detail_page" style="display: none;"><!--// 사회통합지원부 총괄 -->
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
								<td>사회통합지원부<br>부장</td>
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

			<div class="organization_detail_page" style="display: none;"><!--// 지역복지팀 -->
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
							<tr>
								<td>사회복지사</td>
								<td>박은경</td>
								<td>070-8978-8856</td>
								<td class="pad_st">
									<ul>
										<li>성인장애인문화여가지원사업 (캘리그라피, 신장장애인자조모임,  하모니카, 연필화교실)</li>
										<li>지역복지사업(일상생활지원-보장구지원 및 무상점검)</li>
										<li>맞춤형도우미파견사업</li>
										<li>늘해랑학교</li>
									</ul>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		<div class="organization_detail_page" style="display: none;"><!--// 평생교육지원팀 -->
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
								<td>차경화</td>
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
								<td>표지현</td>
								<td>070-8978-8878</td>
								<td class="pad_st">
									<ul>
										<li>장애인일자리사업 및 취업, 고용, 공감카페 총괄</li>
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
								<td>사회복지사</td>
								<td>서지혜</td>
								<td>070-8978-8880</td>
								<td class="pad_st">
									<ul>
										<li>장애인복지일자리사업 및 발달장애인생활일자리사업 담당</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>직무지도원</td>
								<td>전희진</td>
								<td> 070-8978-8885</td>
								<td class="pad_st">
									<ul>
										<li>직무지도</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>직무지도원</td>
								<td>서장혁</td>
								<td> 070-8978-8885</td>
								<td class="pad_st">
									<ul>
										<li>직무지도</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>재활상담사</td>
								<td>양인영</td>
								<td></td>
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
			<div class="organization_detail_page" style="display: none;"><!--// 재활스포츠센터 총괄 -->
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
								<td>재활스포츠센터<br> 부장</td>
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

			<div class="organization_detail_page" style="display: none;"><!--// 수중운동팀 -->
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
								<td>대리</td>
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

			<div class="organization_detail_page" style="display: none;"><!--// 생활체육팀 -->
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

			<div class="organization_detail_page" style="display: none;"><!--// 시설관리팀 -->
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
										<li>소방교육 및 훈련</li>
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

			<div class="organization_detail_page" style="display: none;"><!--// 주간보호센터 -->
				<h4 class="h4_label">주간보호센터</h4>
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
								<td>함동훈</td>
								<td>070-8978-8841</td>
								<td class="pad_st">
									<ul>
										<li>주간보호센터 업무 총괄</li>
										<li>주간보호센터 사업계획/예산 조정 및 평가</li>
										<li>회의체 운영(운영위원회, 노사협의회)</li>
										<li>사례관리사업(대기자상담, 초기상담, 상황평가, 서비스계획회의, 재활계획수립, 정기평가)</li>
										<li>가족지원사업(가족상담, 부모간담회, 부모자조모임, 가족데이)</li>
										<li>사회교육(실습생 지도)</li>
										<li>조사연구사업(자문위원활용, 사업평가, 욕구 및 만족도조사) </li>
										<li>종사자역량강화(개별교육, 팀교육, 직원연수)</li>
										<li>인권사업(인권교육, 인권영화제, 매뉴얼제작, 강사양성)</li>
									</ul>
								</td>
							</tr>				
							<tr>
								<td>대리</td>
								<td>이효선</td>
								<td>070-8978-8844</td>
								<td class="pad_st">
									<ul>
										<li>사례관리사업(사례회의)</li>
										<li>자립생활지원사업(식생활지원, 간식지원, 일상생활관리, 등하원지원)</li>
										<li>교육지원사업(개별학습지도)</li>
										<li>특성화 프로그램(운동테라피)</li>
										<li>사회통합지원사업(나들이, 연합행사)</li>
										<li>자기결정지원사업(동아리활동, 동아리캠프)</li>
										<li>가족지원사업(가족캠프)</li>
									</ul>
								</td>
							</tr>		
							<tr>
								<td>사회복지사</td>
								<td>윤지해</td>
								<td>070-8978-8843</td>
								<td class="pad_st">
									<ul>
										<li>자립생활지원사업(식생활지원, 간식지원, 일상생활관리, 등하원지원)</li>
										<li>교육지원사업(개별학습지도, 프로그램 연계지도, 소방재난 안전훈련)</li>
										<li>재활지원사업(미술활동, 강사간담회)</li>
										<li>정서안정·여가지원사업(기념일행사)</li>
										<li>사회통합지원사업(현장학습)</li>
									</ul>
								</td>
							</tr>			
							<tr>
								<td>사회복지사</td>
								<td>김준범</td>
								<td>070-8978-8842</td>
								<td class="pad_st">
									<ul>
										<li>자립생활지원사업(식생활지원, 간식지원, 일상생활관리, 등하원지원)</li>
										<li>교육지원사업(개별학습지도)</li>
										<li>재활지원사업(음악활동, 체육활동)</li>
										<li>지역자원활용(자원봉사관리, 후원관리, 홍보물제작)</li>
									</ul>
								</td>
							</tr>	
							<tr>
								<td>사회복지사</td>
								<td>홍대웅</td>
								<td>070-8978-8846</td>
								<td class="pad_st">
									<ul>
										<li>자립생활지원사업(식생활지원, 간식지원, 일상생활관리, 등하원지원, 건강관리)</li>
										<li>교육지원사업(개별학습지도)</li>
										<li>특성화 프로그램(원예활동, 함께걷기)</li>
										<li>사회통합지원사업(소그룹캠프, 신난데이)</li>
									</ul>
								</td>
							</tr>		
							<tr>
								<td>사회복지사</td>
								<td>이예솔</td>
								<td>070-8978-8845</td>
								<td class="pad_st">
									<ul>
										<li>자립생활지원사업(식생활지원, 간식지원, 일상생활관리, 등하원지원)</li>
										<li>교육지원사업(개별학습지도)</li>
										<li>회계업무</li>
									</ul>
								</td>
							</tr>		
							<tr>
								<td>사회복지사</td>
								<td>임유진</td>
								<td>070-8978-8847</td>
								<td class="pad_st">
									<ul>
										<li>자립생활지원사업(식생활지원, 간식지원, 일상생활관리, 등하원지원)</li>
										<li>교육지원사업(개별학습지도)</li>
										<li>정서안정·여가지원사업(요리활동)</li>
										<li>특성화 프로그램(기능개발훈련)</li>
										<li>사회통합지원사업(사회적응훈련)</li>
									</ul>
								</td>
							</tr>	
							<tr>
								<td>운전기사</td>
								<td>유척희</td>
								<td>-</td>
								<td class="pad_st">
									<ul>
										<li>주간보호센터 송영차량 운행 및 차량관리</li>
									</ul>
								</td>
							</tr>		
							<tr>
								<td>사회복지사</td>
								<td>곽동명</td>
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

			<div class="organization_detail_page" style="display: none;"><!--// 단기보호센터 -->
				<h4 class="h4_label">단기보호센터</h4>
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
								<td>전경화</td>
								<td>070-8978-8890</td>
								<td class="pad_st">
									<ul>
										<li>단기보호사업 사업 총괄 </li>
										<li>사회교육지원(실습지도)</li>
										<li>가족지원사업(부모간담회, 자조모임)</li>
										<li>인권사업(인권지킴이단)</li>
										<li>고충처리</li>
										<li>자문활용 및 관리</li>
									</ul>
								</td>
							</tr>				
							<tr>
								<td>사회복지사</td>
								<td>윤영운</td>
								<td>070-8978-8840</td>
								<td class="pad_st">
									<ul>
										<li>사례관리</li>
										<li>보호서비스</li>
										<li>가족지원사업(가족데이, 나들이, 김장사업)</li>
										<li>지역자원사업(자원봉사자 관리)</li>
										<li>비품관리</li>
									</ul>
								</td>
							</tr>		
							<tr>
								<td>사회복지사</td>
								<td>최예지</td>
								<td>070-8978-8839</td>
								<td class="pad_st">
									<ul>
										<li>사례관리</li>
										<li>보호서비스</li>
										<li>예산관리</li>
										<li>지역자원사업(후원자 관리)</li>
										<li>홍보사업</li>
										<li>조사연구사업(욕구 및 만족도조사) </li>
									</ul>
								</td>
							</tr>			
							<tr>
								<td>사회복지사</td>
								<td>전호정</td>
								<td>070-8978-8838</td>
								<td class="pad_st">
									<ul>
										<li>사례관리</li>
										<li>보호서비스</li>
										<li>인권사업(인권교육)</li>
										<li>사회복무요원 관리</li>
										<li>시설환경관리</li>
									</ul>
								</td>
							</tr>			
							<tr>
								<td>사회복지사</td>
								<td>전병우</td>
								<td>070-8978-8837</td>
								<td class="pad_st">
									<ul>
										<li>사례관리</li>
										<li>보호서비스</li>
										<li>특성화사업(푸드테라피)</li>
										<li>사회통합지원사업(사회적응훈련)</li>
									</ul>
								</td>
							</tr>	
							<tr>
								<td>사회복지사</td>
								<td>민옥련</td>
								<td>070-8978-8839</td>
								<td class="pad_st">
									<ul>
										<li>야간보호서비스</li>
										<li>일상생활기술훈련지원</li>
									</ul>
								</td>
							</tr>		
							<tr>
								<td>사회복지사</td>
								<td>이준희</td>
								<td>070-8978-8840</td>
								<td class="pad_st">
									<ul>
										<li>야간보호서비스</li>
									</ul>
								</td>
							</tr>		
						</tbody>
					</table>
				</div>
			</div>

			<div class="organization_detail_page" style="display: none;"><!--// 활동보조지원센터 -->
				<h4 class="h4_label">활동지원기관</h4>
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
								<td>곽아롬</td>
								<td>070-8978-8849</td>
								<td class="pad_st">
									<ul>
										<li>활동지원사업 및 예산관리 총괄</li>
										<li>활동지원기관 관리(운영위원회/자문)</li>
										<li>활동지원사 관리(상담/고충처리/보수교육/모집 및 채용)</li>
										<li>이용자 관리(사례회의/나들이)</li>
										<li>네트워크</li>
									</ul>
								</td>
							</tr>				
							<tr>
								<td>사회복지사</td>
								<td>김주영</td>
								<td>070-8978-8850</td>
								<td class="pad_st">
									<ul>
										<li>활동지원기관 관리(월 사업 계획 및 실적 보고)</li>
										<li>활동지원사 관리(상담/실습/업무만족도조사)</li>
										<li>이용자 관리(접수 및 초기상담/상담/내방교육/욕구조사)</li>
										<li>네트워크 관리(제공기관 간담회)</li>
									</ul>
								</td>
							</tr>		
							<tr>
								<td>사회복지사</td>
								<td>안진</td>
								<td>070-8978-8848</td>
								<td class="pad_st">
									<ul>
										<li>활동지원기관 관리(예산 및 회계 관리)</li>
										<li>활동지원사 관리(상담/활동지원사 급여 및 사대보험 관리/증명서 발급)</li>
										<li>이용자 관리(접수 및 초기상담/상담/방문교육/모니터링)</li>
									</ul>
								</td>
							</tr>			
						</tbody>
					</table>
				</div>
			</div>

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


<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>