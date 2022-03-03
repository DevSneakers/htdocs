<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "이용안내"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "실습안내"; //커스텀페이지의 타이틀을 입력합니다.
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
   <br />
</p>
<p>
   <table cellpadding="1" cellspacing="0" style="border-color: #ffffff; border-style: solid; border-width: 1px; border-collapse: collapse; width: 920px;">
      <tbody>
         <tr>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #ffffff;">
               <span style="font-size: 20px;"><span style="font-size: 26px;">실습안내<br /></span><br /></span>
            </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <img src="http://asrc2103.cafe24.com/data/editor/2106/20210608165818_02ed7f18ab1ffc3d841f6026fb90dbec_n5gk.jpg" alt="20210608_155754.jpg" style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; vertical-align: middle; font-size: 24px; max-width: 100%; height: auto; color: #333333; font-family: &quot;Noto Sans KR&quot;, sans-serif; letter-spacing: -0.28px; background-color: #ffffff; font-weight: 700; width: 20px;" /><span style="color: #333333; font-family: &quot;Noto Sans KR&quot;, sans-serif; font-size: 14px; letter-spacing: -0.28px; background-color: #ffffff;">&nbsp;</span><span style="font-size: 20px;">실습신청</span>
            </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <span style="font-size: 20px;">&nbsp; &nbsp; - 실습대상: 사회복지 및 직업재활 관련학과 재학생</span><br /><span style="font-size: 20px;">&nbsp; &nbsp; - 실습기간: 하계(7~8월)·동계(12~1월) 방학 중</span><br /><span style="font-size: 20px;">&nbsp; &nbsp; - 실습시간: 월~금 9:00-18:00 (4주간) / 160시간</span><br /><span style="font-size: 20px;">&nbsp; &nbsp; - 실습내용: 장애인 복지사업에 대한 이해, 각 분야별 심화실습</span><br /><span style="font-size: 20px;">&nbsp; &nbsp; - 실습공고: 하계실습 5월, 동계실습 11월중 홈페이지 모집</span><br /><span style="font-size: 20px;">&nbsp; &nbsp; - 실 습 비: 10만원(식비제외)</span><br /><span style="font-size: 20px;">&nbsp; &nbsp; - 담당: 기획협력팀 신민재(070-8978-8824)</span>
            </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">&nbsp;</td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <img src="http://asrc2103.cafe24.com/data/editor/2106/20210608165818_02ed7f18ab1ffc3d841f6026fb90dbec_n5gk.jpg" alt="20210608_155754.jpg" style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; vertical-align: middle; font-size: 24px; max-width: 100%; height: auto; color: #333333; font-family: &quot;Noto Sans KR&quot;, sans-serif; letter-spacing: -0.28px; background-color: #ffffff; font-weight: 700; width: 20px;" /><span style="color: #333333; font-family: &quot;Noto Sans KR&quot;, sans-serif; font-size: 14px; letter-spacing: -0.28px; background-color: #ffffff;">&nbsp;</span><span style="font-size: 20px;">신청절차</span>
            </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <br />
               <p>&nbsp; &nbsp;&nbsp;<img src="http://asrc2103.cafe24.com/data/editor/2106/20210608173458_02ed7f18ab1ffc3d841f6026fb90dbec_fswp.jpg" alt="20210608_172821.jpg" style="width: 554px; height: 129px;" /></p>
            </td>
            </tr>
         </tbody>
      </table>
   </p>



<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>