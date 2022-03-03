<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "기관안내"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
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
   </p>
<br /><br />
<p><br /></p>
<p>
<table cellpadding="1" cellspacing="0" style="border-color:#ffffff;border-style:solid;border-width:1px;border-collapse:collapse;width:100%;">
   <tbody>
      <tr>
         <td style="border-style:solid;border-width:1px;border-color:#ffffff;">
            <p style="text-align: center; line-height: 1.8;">
               <span style="font-size:36px;">권익옹호 안내</span>
            </p>
            <br /><br />
         </td>
      </tr>
      <tr>
         <td style="border-style: solid; border-width: 1px; border-color: #ffffff; line-height: 1.8;">
            <p style="line-height: 1.8;">
               <img src="http://asrc2103.cafe24.com/data/editor/2106/20210625155500_67bf217161aee30f459a67959df18551_7d93.jpg" alt="제목아이콘" style="width:21px;height:23px;float:left;margin-right:1em;" />
            </p>
            <p>
               <span style="font-size:24px;">절차안내</span>
            </p>

         </td>
      </tr>
      <tr>
         <td style="border-style: solid; border-width: 1px; border-color: #ffffff; line-height: 1.8;">
            <p style="text-align: left; line-height: 1.8;">
               <span style="font-size:20px;">안양시수리장애인종합복지관에서는 장애인의 권익증진을 위하여 권익옹호 절차를 안내합니다. 장애인 차별금지법 및 권리구제 등에 관한 법률 위반사항 등 각종 인권침해 사례가 있을 시 본인 또는 당사자와 관계된 분들께서는 즉각적인 신고를 통해 신속한 권리구제가 이루어질 수 있도록 협조 바랍니다.</span>
            </p>

         </td>
      </tr>
      <tr>
         <td style="border-style: solid; border-width: 1px; border-color: #ffffff; line-height: 1.8;">

            <p>
               <img src="http://asrc2103.cafe24.com/data/editor/2106/20210629152757_50de28389299ffa2c67323e9e836b130_6adi.jpg" alt="절차안내" style="width: 900px; height: 250px;" />
            </p>
            <br />
         </td>
      </tr>
      <tr>
         <td style="border-style: solid; border-width: 1px; border-color: #ffffff; line-height: 1.8;">
            <br />
         </td>
      </tr>
      <tr>
         <td style="border-style: solid; border-width: 1px; border-color: #ffffff; line-height: 1.8;">
            <p style="line-height: 1.8;">
               <img src="http://asrc2103.cafe24.com/data/editor/2106/20210625155500_67bf217161aee30f459a67959df18551_7d93.jpg" alt="제목아이콘" style="text-align:center;width:21px;height:23px;float:left;margin-right:1em;" />
            </p>
            <p>
               <span style="font-size:24px;text-align:center;">문의전화: 031-465-7465</span>
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