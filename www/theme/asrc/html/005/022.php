<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "복지관 소개"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "법인소개"; //커스텀페이지의 타이틀을 입력합니다.
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


<p>
   <table cellpadding="1" cellspacing="0" style="border-color: #ffffff; border-style: solid; border-width: 1px; border-collapse: collapse; width: 800PX;">
      <tbody>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <p style="text-align: center;">
                  <span style="font-size: 36px;">법인소개</span>
               </p>
               </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <span style="font-size: 24px;">
                  <p>
                     <img src="http://hahaza.cafe24.com/yjh/data/editor/2106/20210609133120_1ea786a0e48ecec10e2c234ad2c574fa_tulf.jpg" alt="n5gk.jpg" style="width: 30px; height: 32px;" />&nbsp;<span style="font-size: 28px;">개요</span>
                  </p>
                  </span>
            </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <p style="text-align: left;">
                  <span style="font-size: 20px;">돕는사람들은 2006년 12월 21일 민법 제 32조 및 보건복지부 및 그 소관 비영리법인의 설립 및 감독에 관한 규칙에 따라 설립, 인도적 구호사업을 목적으로 기아와 재난으로 고통당하는 국내외 사람들의 생존을 돕고 지역사회의 발전을 지원하는 사업을 확대하여 보다 나은 삶의 질을 제공하고자 합니다.</span>
               </p>

               </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">&nbsp; &nbsp;
               <table align="center" cellpadding="1" cellspacing="0" style="border-color: #cccccc; border-style: solid; border-width: 1px; border-collapse: collapse; width: 700PX;">
                  <tbody>
                     <tr>
                        <td bgcolor="#3399cc" style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;">
                           <span style="font-size: 16px;">법인명</span>
                        </td>
                        <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;">
                           <span style="font-size: 16px;">&nbsp;사회복지법인 돕는사람들</span>
                        </td>
                        </tr>
                     <tr>
                        <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;">
                           <span style="font-size: 16px;">이사장</span>
                        </td>
                        <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;">
                           <span style="font-size: 16px;">&nbsp;박중식</span>
                        </td>
                        </tr>
                     <tr>
                        <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;">
                           <span style="font-size: 16px;">소재지</span>
                        </td>
                        <td style="text-align: left; border-style: solid; border-width: 1px; border-color: #cccccc;">
                           <p style="text-align: center;">
                              <span style="font-size: 16px;">&nbsp;(14059)경기도 안양시 동안구 흥안대로 427번길 38</span>
                           </p>
                           <p style="text-align: center;">
                              <span style="font-size: 16px;">(인덕원성지 스타위드 1106호)</span>
                           </p>

                           </td>
                        </tr>
                     <tr>
                        <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;">
                           <span style="font-size: 16px;">연락처</span>
                        </td>
                        <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;">
                           <span style="font-size: 16px;">&nbsp;1600-1695 / 031-423-2704</span>
                        </td>
                        </tr>
                     <tr>
                        <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;">
                           <span style="font-size: 16px;">홈페이지</span>
                        </td>
                        <td style="text-align: left; border-style: solid; border-width: 1px; border-color: #cccccc;">
                           <p style="text-align: center;">
                              <span style="font-size: 16px;">&nbsp;http://goodhelpers.or.kr</span>

                           </td>
                        </tr>
                     </tbody>
                  </table>
               </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <br />
            </td>
            </tr>
         </tbody>
      </table>
   <br /></p>




<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>