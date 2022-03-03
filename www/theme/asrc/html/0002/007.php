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


<table cellpadding="1" cellspacing="0" style="border-color:#ffffff;border-style:solid;border-width:1px;border-collapse:collapse;width:100%;">
   <tbody>
      <tr>
         <td style="border-style:solid;border-width:1px;border-color:#ffffff;">
            <p style="text-align:center;">
               <span style="font-size:36px;">&nbsp;</span>
            </p>
            <p style="text-align:center;">
               <span style="font-size:36px;">자원봉사 안내</span>
            </p>
            <p style="text-align:center;">
               <span style="font-size:36px;font-family:'바탕';">&nbsp;</span>
            </p>
         </td>
      </tr>
      <tr>
         <td style="border-style:solid;border-width:1px;border-color:#ffffff;">
            <p>
               <img src="http://asrc2103.cafe24.com/data/editor/2106/20210625155500_67bf217161aee30f459a67959df18551_7d93.jpg" alt="제목아이콘" style="width:21px;height:23px;float:left;margin-right:1em;" />&nbsp;<span style="font-size:24px;">자원봉사 활동 방법</span>
            </p>
         </td>
      </tr>

      <tr>
         <td style="border-style:solid;border-width:1px;border-color:#ffffff;">

            <p>
               <img src="http://asrc2103.cafe24.com/data/editor/2106/20210625174052_67bf217161aee30f459a67959df18551_5e50.jpg" alt="007-1.jpg" style="width:615px;height:187px;" />
            </p>
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
               <img src="http://asrc2103.cafe24.com/data/editor/2106/20210625155500_67bf217161aee30f459a67959df18551_7d93.jpg" alt="제목아이콘" style="width:21px;height:23px;float:left;margin-right:1em;" />&nbsp;<span style="font-size:24px;">활동분야</span>
            </p>

            <p style="line-height: 1.8;">
               <span style="font-size:20px;">&nbsp; &nbsp; &nbsp;① 프로그램 지원<br />&nbsp; &nbsp; &nbsp;② 일상생활 지원<br />&nbsp; &nbsp; &nbsp;③ 행정업무 지원<br />&nbsp; &nbsp; &nbsp;④ 문화/행사 지원<br />&nbsp; &nbsp; &nbsp; ※ 자원봉사는 개인, 기업, 단체 모두 신청 가능합니다.</span>
            </p>
            <p style="line-height: 1.8;"><span style="font-family:'바탕';font-size:20px;">&nbsp;</span></p>
         </td>
      </tr>
      <tr>
         <td style="border-style: solid; border-width: 1px; border-color: #ffffff; line-height: 1.8;">
            <p style="line-height: 1.8;">
               <br />
            </p>
         </td>
      </tr>
      <tr>
         <td style="border-style: solid; border-width: 1px; border-color: #ffffff; line-height: 1.8;">

<p><br><br><br>
   <table align="center" bgcolor="#3399ff" cellpadding="1" cellspacing="0" style="border-color: #ffffff; border-style: solid; border-width: 1px; border-collapse: collapse; width: 200px; height: 50px;">
      <tbody>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <span style="font-size: 20px; color: #ffffff;">&nbsp;</span><a href="http://asrc2103.cafe24.com/bbs/board.php?bo_table=2002" title="자원봉사신청하기" target="_self" rel="nofollow noreferrer noopener"><span style="font-size: 20px; color: #ffffff;"><b>▶&nbsp; 자원봉사신청하기</b></span>
            </td>
         </tr>
      </tbody>
   </table>
   <br />
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