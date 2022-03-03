<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "기관안내"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "기관소개"; //커스텀페이지의 타이틀을 입력합니다.
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
<ul class="tab_cc">
	<li><a href="http://asrc2103.cafe24.com/theme/asrc/html/0004/009-01.php" target="_self" rel="nofollow noreferrer noopener" class="on">설립목적 및 비전</a></li>
	<li><a href="http://asrc2103.cafe24.com/theme/asrc/html/0004/009-02.php" target="_self" rel="nofollow noreferrer noopener">기관CI</a></li>
	<li><a href="http://asrc2103.cafe24.com/theme/asrc/html/0004/009-03.php" target="_self" rel="nofollow noreferrer noopener">연혁</a></li>
	<li><a href="http://asrc2103.cafe24.com/theme/asrc/html/0004/009-04.php" target="_self" rel="nofollow noreferrer noopener">오시는 길</a></li>
</ul>



   </p>
<br /><br />
<p><br /></p>
<p>
<table cellpadding="1" cellspacing="0" style="border-color:#ffffff;border-style:solid;border-width:1px;border-collapse:collapse;width:100%;">
   <tbody>
      <tr>
         <td style="border-style:solid;border-width:1px;border-color:#ffffff;">
            <p style="text-align:center;">
               <span style="font-size:36px;">설립목적 및 비전</span>
            </p>
         </td>
      </tr>
   </tbody>
</table>
<p>
   <span style="">&nbsp;</span>
</p>
<p>
   <span style="">&nbsp;</span>
</p>
<table cellpadding="1" cellspacing="0" style="border-color:#ffffff;border-style:solid;width:800px;">
   <tbody>
      <tr>
         <td style="border-style:solid;border-width:1px;border-color:#ffffff;">
            <p style="text-align:left;">
               <br />
            </p>
         </td>
      </tr>
      <tr>
         <td style="border-style:solid;border-width:1px;border-color:#ffffff;">
            <p>
               <span style="font-size:24px;"><span style="">&nbsp;</span></span><img src="http://asrc2103.cafe24.com/data/editor/2106/20210625155500_67bf217161aee30f459a67959df18551_7d93.jpg" alt="제목아이콘" style="width:21px;height:23px;float:left;margin-right:1em;" /><span style="font-size:24px;">MISSION (수리복지관의 사명)</span>
            </p>
            <p>
               <br />
            </p>
            <p>
               <br />
            </p>
            <p>
               <img src="http://asrc2103.cafe24.com/data/editor/2106/20210629151108_50de28389299ffa2c67323e9e836b130_2u65.jpg" alt="수리복지관의 사명" style="width: 800px; height: 197px;" />
            </p>
            <p>
               <span style="font-size:24px;">&nbsp;</span>
            </p>
            <p>
               <span style="font-size:24px;">&nbsp;</span>
            </p>
            <span style="">&nbsp;</span><img src="http://asrc2103.cafe24.com/data/editor/2106/20210625155500_67bf217161aee30f459a67959df18551_7d93.jpg" alt="제목아이콘" style="width:21px;height:23px;float:left;margin-right:1em;" /><span style="font-size:24px;">VISION (함께하고 싶은 복지관 TOP3)</span>
            <p>
               <br />
            </p>
            <p>
               <br />
            </p>
            <p>
               <img src="http://asrc2103.cafe24.com/data/editor/2106/20210629151119_50de28389299ffa2c67323e9e836b130_xno7.jpg" alt="함께하고 싶은 복지관 TOP3" style="width: 800px; height: 136px;" />
            </p>
            <p>
               <span style="font-size:24px;">&nbsp;</span>
            </p>
            <p>
               <span style="font-size:24px;">&nbsp;</span>
            </p>
            <span style="">&nbsp;</span><img src="http://asrc2103.cafe24.com/data/editor/2106/20210625155500_67bf217161aee30f459a67959df18551_7d93.jpg" alt="제목아이콘" style="width:21px;height:23px;float:left;margin-right:1em;" /><span style="font-size:24px;">VALUE (수리복지관의 가치)</span>
            <p>
               <span style="font-size:28px;">&nbsp;</span>
            </p>
            <p style="line-height:1.5;">
               <span style="font-size:22px;">&nbsp; &nbsp; 저희 안양시수리장애인종합복지관은 이용자(고객) 중심, 전문성, 섬김,&nbsp;</span>
            </p>
            <p style="line-height:1.5;">
               <span style="font-size:22px;">&nbsp; &nbsp; 사랑, 존중, 소통을 중요시합니다.</span>
            </p>
         </td>
      </tr>
   </tbody>
</table>






<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>