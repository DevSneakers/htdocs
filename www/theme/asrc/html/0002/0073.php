<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "참여공간"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "견학/실습/대관"; //커스텀페이지의 타이틀을 입력합니다.
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
<ul class="tab_bb">
	<li><a href="http://asrc2103.cafe24.com/theme/asrc/html/0002/0071.php" target="_self" rel="nofollow noreferrer noopener" >기관방문</a></li>
	<li><a href="http://asrc2103.cafe24.com/theme/asrc/html/0002/0073.php" target="_self" rel="nofollow noreferrer noopener" class="on">실습안내</a></li>
	<li><a href="http://asrc2103.cafe24.com/theme/asrc/html/0002/0072.php" target="_self" rel="nofollow noreferrer noopener" >대관안내</a></li>
</ul>
   </p>
<br /><br />


<table cellpadding="5" cellspacing="5" style="border-color:#ffffff;border-style:solid;border-width:1px;border-collapse:collapse;width:100%;">
   <tbody>
      <tr>
         <td style="text-align:center;border-style:solid;border-width:1px;border-color:#ffffff;line-height:1.8;">
            <p style="text-align:center;">
               <span style="font-size:36px;">&nbsp;</span>
            </p>
            &nbsp;&nbsp; <span style="font-size:36px;">실습안내</span>
         </td>
      </tr>
      <tr>
         <td style="border-style:solid;border-width:1px;border-color:#ffffff;line-height:1.8;">
            <span style="font-size:18px;">&nbsp;</span>
            <p>
               <img src="http://asrc2103.cafe24.com/data/editor/2106/20210625155500_67bf217161aee30f459a67959df18551_7d93.jpg" alt="제목아이콘" style="width:21px;height:23px;float:left;margin-right:1em;" />&nbsp;<span style="font-size:24px;">실습신청</span>
            </p>
 
            <p style="line-height:1.8;">
               <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; - 실습대상: 사회복지 및 직업재활 관련학과 재학생</span>
            </p>
            <p style="line-height:1.8;">
               <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; - 실습기간: 하계(7~8월)·동계(12~1월) 방학 중</span>
            </p>
            <p style="line-height:1.8;">
               <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; - 실습시간: 월~금 9:00-18:00 (4주간) / 160시간</span>
            </p>
            <p style="line-height:1.8;">
               <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; - 실습내용: 장애인 복지사업에 대한 이해, 각 분야별 심화실습</span>
            </p>
            <p style="line-height:1.8;">
               <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; - 실습공고: 하계실습 5월, 동계실습 11월중 홈페이지 모집</span>
            </p>
            <p style="line-height:1.8;">
               <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; - 실 습 비: 10만원(식비제외)</span>
            </p>
            <p style="line-height:1.8;">
               <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; - 담&nbsp; &nbsp; 당: 기획협력팀 신민재(070-8978-8824)&nbsp; &nbsp;&nbsp;</span>
            </p>
            <p style="line-height:1.8;">
               <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ※ 기본 2시간, 추가 시 기본시간(1시간) 기준으로 추가 징수</span>
            </p>
            <br /><br />
            <p>
               <img src="http://asrc2103.cafe24.com/data/editor/2106/20210625155500_67bf217161aee30f459a67959df18551_7d93.jpg" alt="제목아이콘" style="width:21px;height:23px;float:left;margin-right:1em;" />&nbsp;<span style="font-size:24px;">신청절차</span>
            </p>
            <p>
               <br />
            </p>
            <p>
               <img src="http://asrc2103.cafe24.com/data/editor/2106/20210629150145_50de28389299ffa2c67323e9e836b130_1y30.jpg" alt="신청절차" style="width: 800px; height: 169px;" />
            </p>
            <br />
         </td>
      </tr>
   </tbody>
</table>



<br />


<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>