<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "이용안내"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "기관방문안내"; //커스텀페이지의 타이틀을 입력합니다.
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

<p><br /></p>
<p>
   <table cellpadding="1" cellspacing="0" style="border-color: #ffffff; border-style: solid; border-width: 1px; border-collapse: collapse; width: 860px;">
      <tbody>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <h1></h1>
               <h1 style="text-align: center;">
                  <span style="font-family: &quot;맑은 고딕&quot;, &quot;malgun gothic&quot;; font-size: 24px;">&nbsp;기관방문 안내/신청</span>
               </h1>
               <p>
                  <span style="font-family: &quot;맑은 고딕&quot;, &quot;malgun gothic&quot;; font-size: 24px;">&nbsp;</span>
               </p>
               <p>
                  <span style="font-family: &quot;맑은 고딕&quot;, &quot;malgun gothic&quot;; font-size: 24px;">&nbsp;</span>
               </p>
               </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">&nbsp;<img src="http://asrc2103.cafe24.com/data/editor/2106/20210608165818_02ed7f18ab1ffc3d841f6026fb90dbec_n5gk.jpg" alt="20210608_155754.jpg" style="font-size: 24px; font-weight: 700; width: 20px; height: 22px;" /><span style="font-weight: 700; font-family: &quot;맑은 고딕&quot;, &quot;malgun gothic&quot;; font-size: 18px;">신청절차</span></td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <span style="font-family: &quot;맑은 고딕&quot;, &quot;malgun gothic&quot;; font-size: 18px;"><br />&nbsp; &nbsp; 이용순서</span>
            </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <span style="font-family: &quot;맑은 고딕&quot;, &quot;malgun gothic&quot;; font-size: 18px;">&nbsp; &nbsp;&nbsp;</span><img src="http://asrc2103.cafe24.com/data/editor/2106/20210608165906_02ed7f18ab1ffc3d841f6026fb90dbec_izwv.jpg" alt="20210608_155810.jpg" style="font-family: 바탕; font-size: 18px; width: 442px; height: 163px;" /><br />
            </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <span style="font-family: &quot;맑은 고딕&quot;, &quot;malgun gothic&quot;; font-size: 18px;">&nbsp; &nbsp; - 안양시수리장애인종합복지관 기관방문은 누구나 가능</span><br /><span style="font-family: &quot;맑은 고딕&quot;, &quot;malgun gothic&quot;; font-size: 18px;">&nbsp; &nbsp; - 방문가능 일시: 월 2회 / 담당자와 협의, 조정</span><br /><span style="font-family: &quot;맑은 고딕&quot;, &quot;malgun gothic&quot;; font-size: 18px;">&nbsp; &nbsp; - 소요시간: 1시간</span><br /><span style="font-family: &quot;맑은 고딕&quot;, &quot;malgun gothic&quot;; font-size: 18px;">&nbsp; &nbsp; - 견학내용: 복지관 사업안내, 시설 라운딩</span><br /><span style="font-family: &quot;맑은 고딕&quot;, &quot;malgun gothic&quot;; font-size: 18px;">&nbsp; &nbsp; - 견학신청: 견학 희망일 최소 일주일 전에 신청</span>
            </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <span style="font-family: &quot;맑은 고딕&quot;, &quot;malgun gothic&quot;; font-size: 18px;"><br />&nbsp;</span><img src="http://asrc2103.cafe24.com/data/editor/2106/20210608165818_02ed7f18ab1ffc3d841f6026fb90dbec_n5gk.jpg" alt="20210608_155754.jpg" style="font-size: 24px; font-weight: 700; width: 20px; height: 22px;" /><span style="font-size: 24px; font-weight: 700;">&nbsp;</span><span style="font-family: &quot;맑은 고딕&quot;, &quot;malgun gothic&quot;; font-size: 18px;">안내사항</span>
            </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <span style="font-family: &quot;맑은 고딕&quot;, &quot;malgun gothic&quot;; font-size: 18px;">&nbsp; &nbsp; - 작성한 방문 목적 또는 부서 일정에 따라 조정될 수도 있습니다.</span><br /><span style="font-family: &quot;맑은 고딕&quot;, &quot;malgun gothic&quot;; font-size: 18px;">&nbsp; &nbsp; - 기관 및 단체의 경우 일정 협의 후 공문을 요청합니다.</span><br /><span style="font-family: &quot;맑은 고딕&quot;, &quot;malgun gothic&quot;; font-size: 18px;">&nbsp; &nbsp; - 확정된 방문일에 방문이 불가할 경우, 최소 7일전에 담당자에게 연락을 취하여 조정하면 됩니다.</span><br /><span style="font-family: &quot;맑은 고딕&quot;, &quot;malgun gothic&quot;; font-size: 18px;">&nbsp; &nbsp; - 1인 방문의 경우 협의 후에 동일한 방문 목적의 타 단체와 함께 안내가 진행될 수 있습니다.</span>
            </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <span style="font-family: &quot;맑은 고딕&quot;, &quot;malgun gothic&quot;; font-size: 18px;">&nbsp;</span><br /><br /><img src="http://asrc2103.cafe24.com/data/editor/2106/20210608165818_02ed7f18ab1ffc3d841f6026fb90dbec_n5gk.jpg" alt="20210608_155754.jpg" style="font-size: 24px; font-weight: 700; width: 20px; height: 22px;" /><span style="font-size: 24px; font-weight: 700;">&nbsp;</span><span style="font-family: &quot;맑은 고딕&quot;, &quot;malgun gothic&quot;; font-size: 18px;">문의 : 기획협력팀 김은선(070-8978-884)</span>
            </td>
            </tr>
         </tbody>
      </table>
   </p>




<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>