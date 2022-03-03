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
                  <font face="바탕"><span style="font-size: 36px;">단기보호사업</span></font>
               </p>
               <p style="text-align: center;">
                  <span style="font-size: 36px; font-family: 바탕;">&nbsp;</span>
               </p>
               </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <p style="line-height: 1.5;">
                  <font face="바탕"><span style="font-size: 36px;">단기간의 생활 시설로 타인의 도움이 필요한 장애인에게 주/야간 또는 일시/긴급/주말 돌봄 서비스를 제공합니다.</span></font>
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
                  <span style="font-size: 24px;"><img src="http://hahaza.cafe24.com/yjh/data/editor/2106/20210609133120_1ea786a0e48ecec10e2c234ad2c574fa_tulf.jpg" alt="n5gk.jpg" style="width: 30px; height: 32px;" />&nbsp;</span><font face="바탕"><span style="font-size: 28px;">주중돌봄사업(정규 주·야간)</span></font>
               </p>
               </td>
            </tr>
         </tbody>
      </table>
   </p>
<p>&nbsp;</p>
<p>
   <span style="font-size: 18px; font-family: 바탕;">&nbsp; &nbsp; &nbsp; - 운영시간 : 일 21:00 ~ 토 08:00, 단 공휴일의 경우 휴관</span>
</p>
<p>
   <span style="font-size: 18px; font-family: 바탕;">&nbsp; &nbsp; &nbsp; - 이용대상 : 안양시 거주 등록장애인 만4세~ 50세 미만 (24시간 이용은 만8세~ 50세)</span>
</p>
<p>&nbsp;</p>
<p>
   <span style="font-size: 18px; font-family: 바탕;">&nbsp; &nbsp; &nbsp; - 이 용 료 : 24시간 14,000원 / 12시간 이하 11,500원 / 8시간 이하 9,000원 / 4시간 이하 4,500원</span>
</p>
<p>
   <span style="font-size: 18px; font-family: 바탕;">&nbsp;</span>
</p>
<p>
   <span style="font-size: 24px;"><img src="http://hahaza.cafe24.com/yjh/data/editor/2106/20210609133120_1ea786a0e48ecec10e2c234ad2c574fa_tulf.jpg" alt="n5gk.jpg" style="width: 30px; height: 32px;" />&nbsp;</span><font face="바탕"><span style="font-size: 28px;">주중돌봄사업(</span><span style="font-size: 28px;">일시/긴급)</span></font>
</p>
<p>&nbsp;</p>
<p>
   <span style="font-size: 18px; font-family: 바탕;">&nbsp; &nbsp; &nbsp; - 운영시간 및 이용료는 정규 주·야간 이용자와 같음.</span>
</p>
<p>
   <span style="font-size: 18px; font-family: 바탕;">&nbsp; &nbsp; &nbsp; - 신청방법</span>
</p>
<p>
   <span style="font-size: 18px; font-family: 바탕;">&nbsp; &nbsp; &nbsp; ① 일시 - 이용 전월 주중(월~금) 09:00~18:00(선착순 접수), 월 5회(5일) 신청가능</span>
</p>
<p>&nbsp;</p>
<p>
   <span style="font-size: 18px; font-family: 바탕;">&nbsp; &nbsp; &nbsp; ② 긴급 – 수시 신청가능, 연중 최대 30일 이용가능</span>
</p>
<p>
   <span style="font-size: 18px; font-family: 바탕;">&nbsp;</span>
</p>
<p>
   <span style="font-size: 24px;"><img src="http://hahaza.cafe24.com/yjh/data/editor/2106/20210609133120_1ea786a0e48ecec10e2c234ad2c574fa_tulf.jpg" alt="n5gk.jpg" style="width: 30px; height: 32px;" />&nbsp;</span><font face="바탕"><span style="font-size: 28px;">주말돌봄서비스</span></font>
</p>
<p>
   <font face="바탕"><span style="font-size: 18px; font-family: 바탕;">&nbsp; &nbsp; &nbsp; - 운영시간 : 매주 토 08:00 ~ 일 21:00 (1박2일), 단 공휴일의 경우 휴관
</span></font>
</p>
<p>
   <span style="font-size: 18px; font-family: 바탕;">&nbsp; &nbsp; &nbsp; - 이용인원 : 주말반 8명, 긴급 2명</span>
</p>
<p>
   <span style="font-size: 18px; font-family: 바탕;">&nbsp; &nbsp; &nbsp; - 신청방법 : 이용 일주일전 주중(월~금) 09:00~18:00(선착순 접수), 월 4회(4일) 신청가능</span>
</p>
<p>
   <font face="바탕"><span style="font-size: 18px; font-family: 바탕;">&nbsp; &nbsp; &nbsp; - 이 용 료 : 2일 40,000원/ 1일 20,000원/ 8시간 이하 10,000원/ 4시간 이하 5,000원</span></font>
</p>
<p>
   <img src="http://hahaza.cafe24.com/yjh/data/editor/2106/20210616163027_c7d1b9700719bcbc76e0ff08e75414f4_br9o.jpg" alt="20210616_163011.jpg" style="width: 800px; height: 672px;" />
</p>


<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>