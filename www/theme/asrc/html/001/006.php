<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "복지관 소개"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "시설안내"; //커스텀페이지의 타이틀을 입력합니다.
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

<p>&nbsp;&nbsp;</p>
<p>
   <table cellpadding="1" cellspacing="0" style="border-color: #ffffff; border-style: solid; border-width: 1px; border-collapse: collapse; width: 800PX;">
      <tbody>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <p style="text-align: center;">
                  <span style="font-size: 36px;">시설안내</span>
               </p>
              <br><br> </td>
            </tr>
         <tr>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #ffffff;">&nbsp;<img src="http://hahaza.cafe24.com/yjh/data/editor/2106/20210609130233_1ea786a0e48ecec10e2c234ad2c574fa_8ej3.jpg" alt="20210609_125912.jpg" style="width: 535px; height: 401px;" /><br /><br><br><br></td>
         </tr>
         
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <span style="font-size: 24px;">
                  <p>
                     <img src="http://hahaza.cafe24.com/yjh/data/editor/2106/20210609133120_1ea786a0e48ecec10e2c234ad2c574fa_tulf.jpg" alt="n5gk.jpg" style="width: 30px; height: 32px;" />&nbsp;<span style="font-size: 24px;">층별안내</span>
                  </p>
                  </span>
            </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">&nbsp; &nbsp;
               <table align="center" cellpadding="1" cellspacing="0" style="border-color: #cccccc; border-style: solid; border-width: 1px; border-collapse: collapse; width: 700PX;">
                  <tbody>
                     <tr>
                        <td bgcolor="#ccffff" style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;">
                           <span style="font-size: 16px;">6층</span>
                        </td>
                        <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;">
                           <span style="font-size: 16px;">&nbsp;옥상휴게실(희망마루)</span>
                        </td>
                        </tr>
                     <tr>
                        <td bgcolor="#ccffff" style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;">
                           <span style="font-size: 16px;">5층</span>
                        </td>
                        <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;">
                           <span style="font-size: 16px;">&nbsp;주간보호센터,단기보호센터,수리아동발달센터,부모대기실,쉼터</span>
                        </td>
                        </tr>
                     <tr>
                        <td bgcolor="#ccffff" style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;">
                           <span style="font-size: 16px;">4층</span>
                        </td>
                        <td style="text-align: left; border-style: solid; border-width: 1px; border-color: #cccccc;">
                           <p style="text-align: center;">
                              <span style="font-size: 16px;">&nbsp;관장실,종합사무실,자원봉사자실,수리꿈터7반,방과후교실,직원휴게실,</span>
                           </p>
                           <p style="text-align: center;">
                              <span style="font-size: 16px;">사회적응교실,다목적실,소아작업치료실.감각통합실,지역복지팀(점자도서실),쉼터</span>
                           </p>
                           </td>
                        </tr>
                     <tr>
                        <td bgcolor="#ccffff" style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;">
                           <span style="font-size: 16px;">3층&nbsp;</span>
                        </td>
                        <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;">
                           <span style="font-size: 16px;">&nbsp;수리꿈터 프로그램실(1반~6반),다목적실,세미나실,보호작업장,당구장,쉼터</span>
                        </td>
                        </tr>
                     <tr>
                        <td bgcolor="#ccffff" style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;">
                           <span style="font-size: 16px;">2층</span>
                        </td>
                        <td style="text-align: left; border-style: solid; border-width: 1px; border-color: #cccccc;">
                           <p style="text-align: center;">
                              <span style="font-size: 16px;">&nbsp;강당,성인물리치료실,성인작업치료실,놀이치료실,활동지원기관,</span>
                           </p>
                           <p style="text-align: center;">
                              <span style="font-size: 16px;">체력단련실,샤워실(남/여),대기실,휴게실</span>
                           </p>
                           </td>
                        </tr>
                     <tr>
                        <td bgcolor="#ccffff" style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;">
                           <span style="font-size: 16px;">1층</span>
                        </td>
                        <td style="text-align: left; border-style: solid; border-width: 1px; border-color: #cccccc;">
                           <p style="text-align: center;">
                              <span style="font-size: 16px;">식당(주방),나빌리스 커피&amp;베이커리,카페공감,안내 및 수납,</span>
                           </p>
                           <p style="text-align: center;">
                              <span style="font-size: 16px;">상담가족지원팀 사무실(고객지원센터),</span><span style="font-size: 16px;">상담실,소아물리치료실,집단교육실,</span>
                           </p>
                           <p style="text-align: center;">
                              <span style="font-size: 16px;">개별교육실1,개별교육실2,언어치료실,미술치료실,</span>
                           </p>
                           <p style="text-align: center;">
                              <span style="font-size: 16px;">다목적실,멀티체험실,나빌리스 제과제빵실,나눔가게</span>
                           </p>
                           </td>
                        </tr>
                     <tr>
                        <td bgcolor="#ccffff" style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;">
                           <span style="font-size: 16px;">B1층</span>
                        </td>
                        <td style="text-align: left; border-style: solid; border-width: 1px; border-color: #cccccc;">
                           <p style="text-align: center;">
                              <span style="font-size: 16px;">수영장안내,탈의실(남/여),상담실,수영장(의무실),가족탈의실,목욕탕(남/여),</span>
                           </p>
                           <p style="text-align: center;">
                              <span style="font-size: 16px;">통합관제센터,문서보관소,주차장,쉼터</span>
                           </p>
                           </td>
                        </tr>
                     <tr>
                        <td bgcolor="#ccffff" style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;">
                           <span style="font-size: 16px;">B2~B4</span>
                        </td>
                        <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;">
                           <span style="font-size: 16px;">&nbsp;주차장</span>
                        </td>
                        </tr>
                     </tbody>
                  </table>
               <br /></td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <span style="font-size: 16px;">&nbsp; &nbsp; &nbsp; &nbsp;<span style="font-size: 18px;"> &nbsp;※ 지하4층, 지상6층(연면적 15,621.25㎥)</span></span>
            </td>
            </tr>
         </tbody>
      </table>
   <br /></p>




<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>