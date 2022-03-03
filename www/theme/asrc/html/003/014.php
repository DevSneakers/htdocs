<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "참여공간"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "자원봉사안내"; //커스텀페이지의 타이틀을 입력합니다.
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

<p>&nbsp;
   <table cellpadding="1" cellspacing="0" style="border-color: #ffffff; border-style: solid; border-width: 1px; border-collapse: collapse; width: 800px;">
      <tbody>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <p style="text-align: center;"><span style="font-size: 36px; font-family: 바탕;">자원봉사 안내</span></p>
               <p style="text-align: center;"><span style="font-size: 36px; font-family: 바탕;">&nbsp;</span></p>
               </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <p style=""><span style="font-size: 24px;"><img src="http://hahaza.cafe24.com/yjh/data/editor/2106/20210609133120_1ea786a0e48ecec10e2c234ad2c574fa_tulf.jpg" alt="n5gk.jpg" style="width: 30px; height: 32px;" />&nbsp;</span><span style="font-size: 28px; font-family: 바탕;">자원봉사 활동 방법</span></p>
               </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <p style="text-align: left;"><br /></p>
               </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;"><span style="font-family: 바탕;">&nbsp; &nbsp;</span>
               <p style="text-align: center;"><img src="http://hahaza.cafe24.com/yjh/data/editor/2106/20210609154724_1ea786a0e48ecec10e2c234ad2c574fa_ripk.jpg" alt="20210609_154325.jpg" style="width: 615px; height: 187px;" /></p>
               <br /></td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;"><br /></td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <p style=""><span style="font-size: 24px;"><img src="http://hahaza.cafe24.com/yjh/data/editor/2106/20210609133120_1ea786a0e48ecec10e2c234ad2c574fa_tulf.jpg" alt="n5gk.jpg" style="width: 30px; height: 32px;" />&nbsp;</span><span style="font-size: 28px; font-family: 바탕;">활동분야</span></p>
               <p style=""><span style="font-size: 28px; font-family: 바탕;">&nbsp;</span></p>
               <p style=""><span style="font-family: 바탕; font-size: 20px;">&nbsp; &nbsp; &nbsp;① 프로그램 지원<br />&nbsp; &nbsp; &nbsp;② 일상생활 지원<br />&nbsp; &nbsp; &nbsp;③ 행정업무 지원<br />&nbsp; &nbsp; &nbsp;④ 문화/행사 지원<br />&nbsp; &nbsp; &nbsp; ※ 자원봉사는 개인, 기업, 단체 모두 신청 가능합니다.</span></p>
               <p style=""><span style="font-family: 바탕; font-size: 20px;">&nbsp;</span></p>
               </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <p style=""><br /></p>
               </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <p style=""><span style="font-size: 24px;"><img src="http://hahaza.cafe24.com/yjh/data/editor/2106/20210609133120_1ea786a0e48ecec10e2c234ad2c574fa_tulf.jpg" alt="n5gk.jpg" style="width: 30px; height: 32px;" />&nbsp;</span><span style="font-size: 28px; font-family: 바탕;">문의 : 기획협력팀(031-465-0959)</span></p>
               <p style=""><span style="font-size: 28px; font-family: 바탕;">&nbsp;</span></p>
               <p style=""><span style="font-size: 28px; font-family: 바탕;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="http://asrc2103.cafe24.com/bbs/write.php?bo_table=2002" target="_self" title="자원봉사 신청">-&gt; 자원봉사 신청</a></span></p>
               </td>
            </tr>
         </tbody>
      </table>
   </p>



<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>