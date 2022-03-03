<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "복지관 소개"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "권익옹호"; //커스텀페이지의 타이틀을 입력합니다.
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
			고객님의 방문을 환영합니다.
		</p>
	</div>


	<div class="scontents">

<p>
   <table cellpadding="1" cellspacing="0" style="border-color: #ffffff; border-style: solid; border-width: 1px; border-collapse: collapse; width: 800px;">
      <tbody>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <p style="text-align: center;">
                  <span style="font-size: 36px; font-family: 바탕;">권익옹호 안내</span>
               </p>
              <br><br> </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <p style="">
                  <span style="font-size: 24px;"><img src="http://hahaza.cafe24.com/yjh/data/editor/2106/20210609133120_1ea786a0e48ecec10e2c234ad2c574fa_tulf.jpg" alt="n5gk.jpg" style="width: 30px; height: 32px;" /><span style="font-family: 바탕;">&nbsp;</span></span><span style="font-size: 28px; font-family: 바탕;">절차안내</span>
               </p>
               <br><br></td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <p style="text-align: left;">
                  <span style="font-size: 20px; font-family: 바탕;">안양시수리장애인종합복지관에서는 장애인의 권익증진을 위하여 권익옹호 절차를 안내합니다. 장애인 차별금지법 및 권리구제 등에 관한 법률 위반사항 등 각종 인권 침해 사례가 있을 시 본인 또는 당사자와 관계된 분들께서는 즉각적인 신고를 통해 신속한 권리구제가 이루어질 수 있도록 협조 바랍니다.</span>
               </p>
               </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <span style="font-family: 바탕;">&nbsp; &nbsp;</span>
               <p style="text-align: center;">
                  <img src="http://hahaza.cafe24.com/yjh/data/editor/2106/20210609151430_1ea786a0e48ecec10e2c234ad2c574fa_hd86.jpg" alt="20210609_151212.jpg" style="width: 614px; height: 143px;" />
               </p>
               <br />
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
                  <span style="font-size: 24px;"><img src="http://hahaza.cafe24.com/yjh/data/editor/2106/20210609133120_1ea786a0e48ecec10e2c234ad2c574fa_tulf.jpg" alt="n5gk.jpg" style="width: 30px; height: 32px;" /><span style="font-family: 바탕;">&nbsp;</span></span><span style="font-size: 28px; font-family: 바탕;">문의전화: 031-465-7465</span>
               </p>
               </td>
            </tr>
         </tbody>
      </table>
   </p>



<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>