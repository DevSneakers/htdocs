<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "이용안내"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "대관안내"; //커스텀페이지의 타이틀을 입력합니다.
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
   <table cellpadding="1" cellspacing="0" style="border-color: #ffffff; border-style: solid; border-width: 1px; border-collapse: collapse; width: 920px;">
      <tbody>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <p style="text-align: center;">
                  <span style="font-size: 20px;"><b><span style="font-size: 24px;">&nbsp;대관안내</span></b></span>
               </p>
               </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <img src="http://asrc2103.cafe24.com/data/editor/2106/20210608165818_02ed7f18ab1ffc3d841f6026fb90dbec_n5gk.jpg" alt="20210608_155754.jpg" style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; vertical-align: middle; font-size: 24px; max-width: 100%; height: auto; color: #333333; font-family: &quot;Noto Sans KR&quot;, sans-serif; letter-spacing: -0.28px; background-color: #ffffff; font-weight: 700; width: 20px;" />&nbsp;<span style="font-size: 20px;">이용료</span>
            </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <span style="font-size: 20px;">&nbsp; &nbsp; - 이용대상: 안양시민</span><br /><span style="font-size: 20px;">&nbsp; &nbsp; - 이용시간: 월~토요일(09:00~18:00)</span><br /><span style="font-size: 20px;">&nbsp; &nbsp; - 사용용도: 강의, 교육, 회의 등</span><br /><span style="font-size: 20px;">&nbsp; &nbsp; - 시설대관 사용료</span>
            </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <span style="font-size: 20px;">&nbsp;</span>
               <p>
                  <img src="http://asrc2103.cafe24.com/data/editor/2106/20210608171816_02ed7f18ab1ffc3d841f6026fb90dbec_00n8.jpg" alt="20210608_171759.jpg" style="width: 611px; height: 183px;" />
               </p>
            </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <span style="font-size: 20px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;※ 기본 2시간, 추가 시 기본시간(1시간) 기준으로 추가 징수</span>
            </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <span style="font-size: 20px;">&nbsp;</span>
            </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <img src="http://asrc2103.cafe24.com/data/editor/2106/20210608165818_02ed7f18ab1ffc3d841f6026fb90dbec_n5gk.jpg" alt="20210608_155754.jpg" style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; vertical-align: middle; font-size: 24px; max-width: 100%; height: auto; color: #333333; font-family: &quot;Noto Sans KR&quot;, sans-serif; letter-spacing: -0.28px; background-color: #ffffff; font-weight: 700; width: 20px;" /><span style="font-size: 20px;">&nbsp;대관 시 주의사항</span>
            </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <span style="font-size: 20px;">&nbsp; &nbsp; - 종교성 및 상업성의 사용을 제한합니다.</span><br /><span style="font-size: 20px;">&nbsp; &nbsp; - 사용자 부주의로 시설물 훼손, 파손 시 원상복구 및 변상조치 하여야 합니다.</span><br /><span style="font-size: 20px;">&nbsp; &nbsp; - 강당 내 반/출입 되는 물품 설치와 전기 등의 사용은 대관신청 시 반드시 협의 하여야 합니다.</span><br /><span style="font-size: 20px;">&nbsp; &nbsp; - 복지관은 흡연금지 구역으로 금연을 안내합니다.</span><br /><span style="font-size: 20px;">&nbsp; &nbsp; - 복지관 주차장이 부족하므로 대중교통을 이용하도록 홍보하여야 합니다.</span><br /><span style="font-size: 20px;">&nbsp; &nbsp; - 발생한 쓰레기는 사용자가 직접 운반처리 하여야 합니다.(안양시 쓰레기 수거 규격봉투 사용배출)</span><br /><span style="font-size: 20px;">&nbsp; &nbsp; - 사용시간과 종료시간을 준수하여야 합니다.</span>
            </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <span style="font-size: 20px;">&nbsp;</span>
            </td>
            </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff;">
               <img src="http://asrc2103.cafe24.com/data/editor/2106/20210608165818_02ed7f18ab1ffc3d841f6026fb90dbec_n5gk.jpg" alt="20210608_155754.jpg" style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; vertical-align: middle; font-size: 24px; max-width: 100%; height: auto; color: #333333; font-family: &quot;Noto Sans KR&quot;, sans-serif; letter-spacing: -0.28px; background-color: #ffffff; font-weight: 700; width: 20px;" /><span style="font-size: 20px;">&nbsp;문의 : 총무팀(031-465-0950)</span>
            </td>
            </tr>
         </tbody>
      </table>
   </p>
<p>&nbsp;</p>
<p>
   <br />
</p>



<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>