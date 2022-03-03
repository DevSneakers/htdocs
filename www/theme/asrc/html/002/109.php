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

<p>
   <table cellpadding="1" cellspacing="0" style="border-color: #cccccc; border-style: solid; border-width: 1px; border-collapse: collapse; width: 970px;">
      <tbody>
         <tr>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;"><a href="http://asrc2103.cafe24.com/theme/asrc/html/002/101.php" target="_self"><span style="font-size: 16px; font-family: &quot;맑은 고딕&quot;, &quot;Malgun Gothic&quot;;"><b>운영지원사업</b></span></a></td>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;"><a href="http://asrc2103.cafe24.com/theme/asrc/html/002/102.php" target="_self"><span style="font-size: 16px;"><b><span style="font-family: &quot;맑은 고딕&quot;, &quot;Malgun Gothic&quot;;">기획협력사업</span></b></span></a></td>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;"><a href="http://asrc2103.cafe24.com/theme/asrc/html/002/103.php" target="_self"><span style="font-size: 16px;"><b><span style="font-family: &quot;맑은 고딕&quot;, &quot;Malgun Gothic&quot;;">상담가족사업</span></b></span></a></td>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;"><a href="http://asrc2103.cafe24.com/theme/asrc/html/002/104.php" target="_self"><span style="font-size: 16px;"><b><span style="font-family: &quot;맑은 고딕&quot;, &quot;Malgun Gothic&quot;;">기능향상지원사업</span></b></span></a></td>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;"><a href="http://asrc2103.cafe24.com/theme/asrc/html/002/105.php" target="_self"><span style="font-size: 16px;"><b><span style="font-family: &quot;맑은 고딕&quot;, &quot;Malgun Gothic&quot;;">평생교육지원사업</span></b></span></a></td>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;"><a href="http://asrc2103.cafe24.com/theme/asrc/html/002/106.php" target="_self"><span style="font-size: 16px;"><b><span style="font-family: &quot;맑은 고딕&quot;, &quot;Malgun Gothic&quot;;">지역복지사업</span></b></span></a></td>
            </tr>
         <tr>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;"><a href="http://asrc2103.cafe24.com/theme/asrc/html/002/107.php" target="_self"><span style="font-size: 16px;"><b><span style="font-family: &quot;맑은 고딕&quot;, &quot;Malgun Gothic&quot;;">수중운동사업</span></b></span></a></td>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;"><a href="http://asrc2103.cafe24.com/theme/asrc/html/002/108.php" target="_self"><span style="font-size: 16px;"><b><span style="font-family: &quot;맑은 고딕&quot;, &quot;Malgun Gothic&quot;;">생활체육사업</span></b></span></a></td>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;"><a href="http://asrc2103.cafe24.com/theme/asrc/html/002/109.php" target="_self"><span style="font-size: 16px;"><b><span style="font-family: &quot;맑은 고딕&quot;, &quot;Malgun Gothic&quot;;">주간보호사업</span></b></span></a></td>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;"><a href="http://asrc2103.cafe24.com/theme/asrc/html/002/110.php" target="_self"><span style="font-size: 16px;"><b><span style="font-family: &quot;맑은 고딕&quot;, &quot;Malgun Gothic&quot;;">단기보호사업</span></b></span></a></td>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;"><a href="http://asrc2103.cafe24.com/theme/asrc/html/002/111.php" target="_self"><span style="font-size: 16px;"><b><span style="font-family: &quot;맑은 고딕&quot;, &quot;Malgun Gothic&quot;;">활동지원사업</span></b></span></a></td>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;"><a href="http://asrc2103.cafe24.com/theme/asrc/html/002/112.php" target="_self"><b><span style="font-size: 16px; font-family: &quot;맑은 고딕&quot;, &quot;Malgun Gothic&quot;;">치료바우처사업</span></b></a></td>
            </tr>
         </tbody>
      </table>
   </p>
<p>&nbsp;
   <table cellpadding="1" cellspacing="0" style="border-color: #ffffff; border-style: solid; border-width: 1px; border-collapse: collapse; width: 800px;">
      <tbody>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <p style="text-align: center;">
                  <span style="font-size: 36px; font-family: 바탕;">&nbsp;</span>
               </p>
               <p style="text-align: center;">
                  <font face="바탕"><span style="font-size: 36px;">주간보호사업</span></font>
               </p>
               <p style="text-align: center;">
                  <span style="font-size: 36px; font-family: 바탕;">&nbsp;</span>
               </p>
               </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <p style="line-height: 1.5;">
                  <font face="바탕"><span style="font-size: 36px;">낮 시간 동안 다양한 재활서비스를 통해 장애인의 자립능력을 개발하고 사회통합을 도모하여, 장애인 가족의 사회/경제활동을 지원합니다.</span></font>
               </p>
               </td>
            </tr>
         </tbody>
      </table>
   </p>
<p>
   <table cellpadding="1" cellspacing="0" style="border-color: #ffffff; border-style: solid; border-width: 1px; border-collapse: collapse; width: 800px;">
      <tbody>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;"></td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <p style="text-align: left;">
                  <br />
               </p>
               </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <span style="font-family: 바탕;"><br /></span><br />
            </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <br />
            </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <p style="">
                  <span style="font-size: 24px;"><img src="http://hahaza.cafe24.com/yjh/data/editor/2106/20210609133120_1ea786a0e48ecec10e2c234ad2c574fa_tulf.jpg" alt="n5gk.jpg" style="width: 30px; height: 32px;" />&nbsp;</span><span style="font-size: 28px; font-family: 바탕;">주간보호센터</span>
               </p>
               </td>
            </tr>
         </tbody>
      </table>
   </p>
<p>
   <br />
</p>
<p>
   <img src="http://hahaza.cafe24.com/yjh/data/editor/2106/20210616161915_c7d1b9700719bcbc76e0ff08e75414f4_mgwa.jpg" alt="20210616_161901.jpg" style="width: 800px; height: 737px;" />
</p>



<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>