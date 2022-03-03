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
	<li><a href="http://asrc2103.cafe24.com/theme/asrc/html/0002/0073.php" target="_self" rel="nofollow noreferrer noopener">실습안내</a></li>
	<li><a href="http://asrc2103.cafe24.com/theme/asrc/html/0002/0072.php" target="_self" rel="nofollow noreferrer noopener" class="on">대관안내</a></li>
</ul>
   </p>
<br /><br />
   <table cellpadding="5" cellspacing="5" style="border-color:#ffffff;border-style:solid;border-width:1px;border-collapse:collapse;width:100%;">
      <tbody>
         <tr>
            <td style="text-align:center;border-style:solid;border-width:1px;border-color:#ffffff;">
               <p style="text-align: center; line-height: 1.8;">
                  <span style="font-size:36px;">&nbsp;</span>
               </p>
               &nbsp; <font face="맑은 고딕, malgun gothic"><span style="font-size:36px;">대관안내</span></font>
            </td>
         </tr>
         <tr>
            <td style="border-style: solid; border-width: 1px; border-color: #ffffff; line-height: 1.8;">
               <span style="font-size:18px;">&nbsp;</span>
               <p>
                  <img src="http://asrc2103.cafe24.com/data/editor/2106/20210625155500_67bf217161aee30f459a67959df18551_7d93.jpg" alt="제목아이콘" style="width:21px;height:23px;float:left;margin-right:1em;" />&nbsp;<span style="font-size:24px;">이용료</span>
               </p>

               <p style="line-height: 1.8;">
                  <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; - 이용대상: 안양시민</span>
               </p>
               <p style="line-height: 1.8;">
                  <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; - 이용시간: 월~토요일(09:00~18:00)</span>
               </p>
               <p style="line-height: 1.8;">
                  <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; - 사용용도: 강의, 교육, 회의 등</span>
               </p>
               <p style="line-height: 1.8;">
                  <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; - 시설대관 사용료</span>
               </p>

               <p style="line-height: 1.8;">
                  <img src="http://asrc2103.cafe24.com/data/editor/2106/20210625181444_67bf217161aee30f459a67959df18551_8q37.jpg" alt="이용료" style="width:674px;height:215px;" />
               </p>
               <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; &nbsp;※ 기본 2시간, 추가 시 기본시간(1시간) 기준으로 추가 징수</span><br /><br /><font face="맑은 고딕, malgun gothic"></font>
<br><br>
			   <p>
			   <img src="http://asrc2103.cafe24.com/data/editor/2106/20210625155500_67bf217161aee30f459a67959df18551_7d93.jpg" alt="제목아이콘" style="width:21px;height:23px;float:left;margin-right:1em;" />&nbsp;<span style="font-size:24px;">대관 시 주의사항</span>
			   </p>

               <p style="line-height: 1.8;">
                  <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; - 종교성 및 상업성의 사용을 제한합니다.</span>
               </p>
               <p style="line-height: 1.8;">
                  <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; - 사용자 부주의로 시설물 훼손, 파손 시 원상복구 및 변상조치 하여야 합니다.</span>
               </p>
               <p style="line-height: 1.8;">
                  <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; - 강당 내 반/출입 되는 물품 설치와 전기 등의 사용은 대관신청 시 반드시&nbsp;</span>
               </p>
               <p style="line-height: 1.8;">
                  <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; &nbsp; 협의 하여야 합니다.</span>
               </p>
               <p style="line-height: 1.8;">
                  <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; - 복지관은 흡연금지 구역으로 금연을 안내합니다.</span>
               </p>
               <p style="line-height: 1.8;">
                  <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; - 복지관 주차장이 부족하므로 대중교통을 이용하도록 홍보하여야 합니다.</span>
               </p>
               <p style="line-height: 1.8;">
                  <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; - 발생한 쓰레기는 사용자가 직접 운반처리 하여야 합니다.</span>
               </p>
               <p style="line-height: 1.8;">
                  <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; &nbsp; (안양시 쓰레기 수거 규격봉투 사용배출).</span>
               </p>
               <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; - 사용시간과 종료시간을 준수하여야 합니다.</span><br /><span style="font-size:18px;"><br />&nbsp;&nbsp;</span>
			   <p>
			   <img src="http://asrc2103.cafe24.com/data/editor/2106/20210625155500_67bf217161aee30f459a67959df18551_7d93.jpg" alt="제목아이콘" style="width:21px;height:23px;float:left;margin-right:1em;" /><span style="font-size: 24px;">문의</span><span style="font-size: 24px;">: <span style="font-size:22px;"><span style="font-size:24px;">총무팀(031-465-0950)&nbsp;</span>&nbsp;</span>
               </p>
            </td>
         </tr>
      </tbody>
   </table>
<br />


<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>