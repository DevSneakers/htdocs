<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "이용안내"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "사업별 안내"; //커스텀페이지의 타이틀을 입력합니다.
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

<p></p>


<ul class="tab_aa">
	<li><a href="http://asrc2103.cafe24.com/theme/asrc/html/0001/002-01.php" target="_self" rel="nofollow noreferrer noopener" class="on">운영지원사업</a></li>
	<li><a href="http://asrc2103.cafe24.com/theme/asrc/html/0001/002-02.php" target="_self" rel="nofollow noreferrer noopener">기획협력사업</a></li>
	<li><a href="http://asrc2103.cafe24.com/theme/asrc/html/0001/002-03.php" target="_self" rel="nofollow noreferrer noopener">상담가족사업</a></li>
	<li><a href="http://asrc2103.cafe24.com/theme/asrc/html/0001/002-04.php" target="_self" rel="nofollow noreferrer noopener">기능향상지원사업</a></li>
	<li><a href="http://asrc2103.cafe24.com/theme/asrc/html/0001/002-05.php" target="_self" rel="nofollow noreferrer noopener">평생교육지원사업</a></li>
	<li><a href="http://asrc2103.cafe24.com/theme/asrc/html/0001/002-06.php" target="_self" rel="nofollow noreferrer noopener">지역복지사업</a></li>
	<li><a href="http://asrc2103.cafe24.com/theme/asrc/html/0001/002-07.php" target="_self" rel="nofollow noreferrer noopener">수중운동사업</a></li>
	<li><a href="http://asrc2103.cafe24.com/theme/asrc/html/0001/002-08.php" target="_self" rel="nofollow noreferrer noopener">생활체육사업</a></li>
	<li><a href="http://asrc2103.cafe24.com/theme/asrc/html/0001/002-09.php" target="_self" rel="nofollow noreferrer noopener">주간보호사업</a></li>
	<li><a href="http://asrc2103.cafe24.com/theme/asrc/html/0001/002-10.php" target="_self" rel="nofollow noreferrer noopener">단기보호사업</a></li>
	<li><a href="http://asrc2103.cafe24.com/theme/asrc/html/0001/002-11.php" target="_self" rel="nofollow noreferrer noopener">활동지원사업</a></li>
	<li><a href="http://asrc2103.cafe24.com/theme/asrc/html/0001/002-12.php" target="_self" rel="nofollow noreferrer noopener">치료바우처사업</a></li>
</ul>

<!-- <table cellpadding="10" cellspacing="10" style="border-color:#ffffff;border-style:solid;border-width:1px;border-collapse:collapse; border-collapse: collapse; width: 100%; height: 76px;">
   <tbody>
      <tr>
         <td bgcolor="#dcdcdc" style="text-align:center;border-style:solid;border-width:1px;border-color:#ffffff;">
            <a href="http://asrc2103.cafe24.com/theme/asrc/html/0001/002-01.php" target="_self" rel="nofollow noreferrer noopener"><span style="font-size:16px;color:#434343;"><b><span>운영지원사업</span></b></span></a>
         </td>
         <td bgcolor="#dcdcdc" style="text-align:center;border-style:solid;border-width:1px;border-color:#ffffff;">
            <a href="http://asrc2103.cafe24.com/theme/asrc/html/0001/002-02.php" target="_self" rel="nofollow noreferrer noopener"><span style="font-size:16px;"><b><span style="color:#434343;">기획협력사업</span></b></span></a>
         </td>
         <td bgcolor="#dcdcdc" style="text-align:center;border-style:solid;border-width:1px;border-color:#ffffff;">
            <a href="http://asrc2103.cafe24.com/theme/asrc/html/0001/002-03.php" target="_self" rel="nofollow noreferrer noopener"><span style="font-size:16px;"><b><span style="color:#434343;">상담가족사업</span></b></span></a>
         </td>
         <td bgcolor="#dcdcdc" style="text-align:center;border-style:solid;border-width:1px;border-color:#ffffff;">
            <a href="http://asrc2103.cafe24.com/theme/asrc/html/0001/002-04.php" target="_self" rel="nofollow noreferrer noopener"><span style="font-size:16px;"><b><span style="color:#434343;">기능향상지원사업</span></b></span></a>
         </td>
         <td bgcolor="#dcdcdc" style="text-align:center;border-style:solid;border-width:1px;border-color:#ffffff;">
            <a href="http://asrc2103.cafe24.com/theme/asrc/html/0001/002-05.php" target="_self" rel="nofollow noreferrer noopener"><span style="font-size:16px;"><b><span style="color:#434343;">평생교육지원사업</span></b></span></a>
         </td>
         <td bgcolor="#dcdcdc" style="text-align:center;border-style:solid;border-width:1px;border-color:#ffffff;">
            <a href="http://asrc2103.cafe24.com/theme/asrc/html/0001/002-06.php" target="_self" rel="nofollow noreferrer noopener"><span style="font-size:16px;"><b><span style="color:#434343;">지역복지사업</span></b></span></a>
         </td>
         </tr>
      <tr>
         <td bgcolor="#dcdcdc" style="text-align:center;border-style:solid;border-width:1px;border-color:#ffffff;">
            <a href="http://asrc2103.cafe24.com/theme/asrc/html/0001/002-07.php" target="_self" rel="nofollow noreferrer noopener"><span style="font-size:16px;"><b><span style="color:#434343;">수중운동사업</span></b></span></a>
         </td>
         <td bgcolor="#dcdcdc" style="text-align:center;border-style:solid;border-width:1px;border-color:#ffffff;">
            <a href="http://asrc2103.cafe24.com/theme/asrc/html/0001/002-08.php" target="_self" rel="nofollow noreferrer noopener"><span style="font-size:16px;"><b><span style="color:#434343;">생활체육사업</span></b></span></a>
         </td>
         <td bgcolor="#dcdcdc" style="text-align:center;border-style:solid;border-width:1px;border-color:#ffffff;">
            <a href="http://asrc2103.cafe24.com/theme/asrc/html/0001/002-09.php" target="_self" rel="nofollow noreferrer noopener"><span style="font-size:16px;"><b><span style="color:#434343;">주간보호사업</span></b></span></a>
         </td>
         <td bgcolor="#dcdcdc" style="text-align:center;border-style:solid;border-width:1px;border-color:#ffffff;">
            <a href="http://asrc2103.cafe24.com/theme/asrc/html/0001/002-10.php" target="_self" rel="nofollow noreferrer noopener"><span style="font-size:16px;"><b><span style="color:#434343;">단기보호사업</span></b></span></a>
         </td>
         <td bgcolor="#dcdcdc" style="text-align:center;border-style:solid;border-width:1px;border-color:#ffffff;">
            <a href="http://asrc2103.cafe24.com/theme/asrc/html/0001/002-11.php" target="_self" rel="nofollow noreferrer noopener"><span style="font-size:16px;"><b><span style="color:#434343;">활동지원사업</span></b></span></a>
         </td>
         <td bgcolor="#dcdcdc" style="text-align:center;border-style:solid;border-width:1px;border-color:#ffffff;">
            <a href="http://asrc2103.cafe24.com/theme/asrc/html/0001/002-12.php" target="_self" rel="nofollow noreferrer noopener"><b><span style="font-size:16px;color:#434343;">치료바우처사업</span></b></a>
         </td>
         </tr>
      </tbody>
   </table> -->

<p>
   <span style="">&nbsp;</span>
</p>
<p align="center">&nbsp;</p>
<table cellpadding="10" cellspacing="5" style="border-color:#ffffff;border-style:solid;border-width:1px;border-collapse:collapse;width: 100%;">
   <tbody>
      <tr>
         <td style="border-style:solid;border-width:1px;border-color:#ffffff;">
            <p style="text-align:center;">
               <span style="font-size:36px;">&nbsp;</span>
            </p>
            <p style="text-align:center;">
               <span style="font-size:36px;">운영 지원</span>
            </p>
            <p style="text-align:center;">
               <span style="font-size:36px;">&nbsp;</span>
            </p>
         </td>
      </tr>
      <tr>
         <td style="border-style:solid;border-width:1px;border-color:#ffffff;">
            <p style="line-height:1.5;">
               <span style="font-size:24px; text-align:center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;복지관 운영전반을 지원하며,이용장애인의 편의증진을 도모하고 있습니다.</span>
            </p>
         </td>
      </tr>
      <tr>
         <td style="border-style:solid;border-width:1px;border-color:#ffffff;">
            <p style="text-align:left;">
               <br />
            </p>
         </td>
      </tr>
      <tr>
         <td style="border-style:solid;border-width:1px;border-color:#ffffff;">
            <br />
         </td>
      </tr>
      <tr>
         <td style="border-style:solid;border-width:1px;border-color:#ffffff;">
            <br />
         </td>
      </tr>
      <tr>
         <td style="border-style:solid;border-width:1px;border-color:#ffffff;">
            <p>
               <span style="font-size:24px;">운영지원사업</span><span style="font-size:24px;"><img src="http://asrc2103.cafe24.com/data/editor/2106/20210625155500_67bf217161aee30f459a67959df18551_7d93.jpg" alt="제목아이콘" style="width:21px;height:23px;float:left;margin-right:1em;" /></span><br /><br />
            </p>
         </td>
      </tr>
   </tbody>
</table>
<table  cellpadding="1" cellspacing="0" style="text-align:left;border-color:#dcdcdc;border-style:solid;border-width:1px;border-collapse:collapse;width: 100%;">
   <tbody>
      <tr>
         <td colspan="2" bgcolor="#99ccff" style="text-align: center; border-style: solid; border-width: 1px; border-color: #dcdcdc; line-height: 1.8;">
            <span style="font-size:18px;">&nbsp;구분</span>
         </td>
         <td bgcolor="#99ccff" style="text-align: center; border-style: solid; border-width: 1px; border-color: #dcdcdc; line-height: 1.8;">
            <span style="font-size:18px;">&nbsp;내용</span>
         </td>
      </tr>
      <tr>
         <td colspan="2" style="text-align: center; border-style: solid; border-width: 1px; border-color: #dcdcdc; line-height: 1.8;">
            <span style="font-size:18px;">&nbsp;재무회계관리</span>
         </td>
         <td style="border-style: solid; border-width: 1px; border-color: #dcdcdc; line-height: 1.8;">
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;복지관(부설 기관) 예산 수립 및 결산 보고</span>
            </p>
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;복지관(부설 기관) 현금출납 잡행 및 자금 관리</span>
            </p>
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;복지관 물품, 공사, 보험 등 계약체결</span>
            </p>
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;복지관 재물조사 실시</span>
            </p>
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;세무(원천징수이행사항신고, 연말 정산 등) 관련 업무 처리</span>
            </p>
         </td>
      </tr>
      <tr>
         <td colspan="2" style="text-align: center; border-style: solid; border-width: 1px; border-color: #dcdcdc; line-height: 1.8;">
            <span style="font-size:18px;">&nbsp;인사복무관리</span>
         </td>
         <td style="border-style: solid; border-width: 1px; border-color: #dcdcdc; line-height: 1.8;">
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;복지관 인사위원회 운영(직원 채용면접, 직원 상벌 심의 등)</span>
            </p>
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;직원임용(채용, 면접 등) 행정 업무</span>
            </p>
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;직원 인사발령 업무처리</span>
            </p>
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;직원 근태관리</span>
            </p>
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;사회보험(취득, 상실 등), 퇴직연금관리</span>
            </p>
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;직원복리후생지원 등</span>
            </p>
         </td>
      </tr>
      <tr>
         <td colspan="2" style="text-align: center; border-style: solid; border-width: 1px; border-color: #dcdcdc; line-height: 1.8;">
            <span style="font-size:18px;">&nbsp;재산(시설)관리</span>
         </td>
         <td style="border-style: solid; border-width: 1px; border-color: #dcdcdc; line-height: 1.8;">
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;복지관 물품/비품 관리</span>
            </p>
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;복지관 환경개선, 기능보강, 영선사업 괸리 등</span>
            </p>
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;차량지원 및 운행관리</span>
            </p>
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;장애인 편의시설 및 소방시설 관리</span>
            </p>
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;위생관리사업(건물 내ㆍ외부청소,소독관리,수영장 관리, 정화조 관리 등)</span>
            </p>
         </td>
      </tr>
      <tr>
         <td colspan="2" style="text-align: center; border-style: solid; border-width: 1px; border-color: #dcdcdc; line-height: 1.8;">
            <span style="font-size:18px;">&nbsp;행정지원</span>
         </td>
         <td style="border-style: solid; border-width: 1px; border-color: #dcdcdc; line-height: 1.8;">
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;문서 수신/발신관리</span>
            </p>
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;제증명서 발급 및 관리</span>
            </p>
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;지역사회 시설개방 및 대관</span>
            </p>
         </td>
      </tr>
      <tr>
         <td colspan="2" style="text-align: center; border-style: solid; border-width: 1px; border-color: #dcdcdc; line-height: 1.8;">
            <span style="font-size:18px;">&nbsp;지원인력관리</span>
         </td>
         <td style="text-align: left; border-style: solid; border-width: 1px; border-color: #dcdcdc; line-height: 1.8;">
            <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;사회복무요원 관리, 장애인일자리, 행정체험연수관리</span>
         </td>
      </tr>
      <tr>
         <td colspan="2" style="text-align: center; border-style: solid; border-width: 1px; border-color: #dcdcdc; line-height: 1.8;">
            <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;이용자관리</span>
         </td>
         <td style="border-style: solid; border-width: 1px; border-color: #dcdcdc; line-height: 1.8;">
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;이용자수납 및 관련 서류 발급</span>
            </p>
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;관내 주차증 발급</span>
            </p>
         </td>
      </tr>
      <tr>
         <td rowspan="2" style="border-style: solid; border-width: 1px; border-color: #dcdcdc; line-height: 1.8;">
            <p style="text-align: center; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;사업</span>
            </p>
            <p style="text-align: center; line-height: 1.8;">
               <span style="font-size:18px;">관리</span>
            </p>
         </td>
         <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #dcdcdc; line-height: 1.8;">
            <span style="font-size:18px;">&nbsp;식당운영</span>
         </td>
         <td style="border-style: solid; border-width: 1px; border-color: #dcdcdc; line-height: 1.8;">
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;운영시간</span><span style="font-size:18px;">: 월~ 금</span>
            </p>
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;조식 06:30~07:00 (단기보호센터, 직원)</span>
            </p>
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;중식 11:20~12:00 (주간/단기보호센터 이용자)</span>
            </p>
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; 11:40~12:40 (장애인 및 당직근무자)</span>
            </p>
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; 12:00~13:00 (비장애인 및 직업훈련생, 직원)</span>
            </p>
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;석식 17:40~18:20 단기보호, 직원 등</span>
            </p>
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;이용금액</span>
            </p>
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;장애인 : 2,500원 / 비장애인: 3,000원</span><span style="font-size:18px;">&nbsp;직원 : (월)50,000원</span>
            </p>
         </td>
      </tr>
      <tr>
         <td style="border-style: solid; border-width: 1px; border-color: #dcdcdc; line-height: 1.8;">
            <p style="text-align: center; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;무료 셔틀</span>
            </p>
            <p style="text-align: center; line-height: 1.8;">
               <span style="font-size:18px;">운영</span>
            </p>
            <p style="text-align: center; line-height: 1.8;">
               <span style="font-size:18px;">(총2대)</span>
            </p>
         </td>
         <td style="border-style: solid; border-width: 1px; border-color: #dcdcdc; line-height: 1.8;">
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;운영시간 : 월~금 08:00 / 12:40 / 14:40 / 16:30 (총4회) 토 08:00, 12:30 (총2회)</span>
            </p>
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;&nbsp;&nbsp;이용대상 : 안양시 거주하는 장애인 및 노약자</span>
            </p>
         </td>
      </tr>
   </tbody>
</table>



</div>




<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>