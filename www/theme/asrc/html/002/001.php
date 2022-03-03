<?php 	
	include "../../../../common.php";
	
	$tmenu_ = ""; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "이용절차"; //커스텀페이지의 타이틀을 입력합니다.
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

<h3 class="h4_label">
   <strong></strong>
</h3>
<h3>
   <strong><img src="http://asrc1.cafe24.com/data/editor/2012/20201217132508_f494ca8cf0b207b192020ac7efeda719_rl4w.jpg" alt="20201217_132401.jpg" style="width:30px;height:30px;" /><strong style="font-size:12px;"><span style="font-size:20px;">이용시간</span></strong></strong>
</h3>
<p>
   <strong><strong style="font-size:12px;"><span style="font-size:20px;">&nbsp;</span></strong></strong>
</p>
<strong></strong>
<div class="common_list common_list1 mb50">
   <ul>
      <li>프로그램 운영시간09:00 ~ 18:00<span class="week">(평일)</span></li>
      <li>식당 운영시간11:30~13:00<span class="week">(평일)</span></li>
      <li>휴관일법정공휴일 및 임시휴관일</li>
      </ul>
   </div>
&nbsp;
<h3 class="h4_label">
   <img src="http://asrc1.cafe24.com/data/editor/2012/20201217132508_f494ca8cf0b207b192020ac7efeda719_rl4w.jpg" alt="20201217_132401.jpg" style="font-size:12px;width:30px;height:30px;" /><span style="font-size:20px;">이용절차</span>
</h3>
<p>
   <span style="font-size:20px;">&nbsp;</span>
</p>
<h4 class="h5_label">
   <span style="color:#ff9900;">&nbsp;♦ 이용대상</span>
</h4>
<p class="text1 mb10">
   <strong>안양시에 거주하는 등록 장애인(취학 전 아동의 경우 미등록도 이용가능)</strong>
</p>
<div class="reference mb50">※ 타 지역 이용자의 경우 서비스 이용의 제한을 받을 수 있습니다.※ 이용대상의 경우 사업별로 상이하니 [사업별 안내]에서 세부내용을 참고하세요.</div>
&nbsp;
<h4 class="h5_label">
   <span style="color:#ff9900;">♦ </span><span style="color:#ff9900;">치료프로그램 이용 시</span>
</h4>
<div class="use_program">
   <p>
      <img src="http://asrc09502.cafe24.com/data/editor/2101/20210103153626_4a9eaecc6a58616f46681d24342af334_ul95.jpg" alt="185440.jpg" style="width:760px;height:155px;" />
   </p>
   &nbsp;
   <div class="reference">※ 그 외 프로그램은 각 프로그램별로 별도의 접수기간을 두어 모집합니다. (선착순 접수 및 추첨 등)</div>
   </div>
&nbsp;
<h4 class="h5_label">
   <span style="color:#ff9900;">♦ </span><span style="color:#ff9900;">주간보호센터, 단기보호센터 이용 시</span>
</h4>
<p class="text1 mb50">전화 방문접수(5층 센터에서 개별접수) 후 접수순번대로 이용 가능합니다.</p>
&nbsp;
<h4 class="h5_label">
   <span style="color:#ff9900;">♦ </span><span style="color:#ff9900;">공용시설 이용 시</span>
</h4>
<div class="common_list common_list2 mb10">
   <ul>
      <li>식당 이용1층 수납(이용권 구매)</li>
      <li>목욕탕 이용지하 1층에서 접수 후 이용(복지카드, 수급증명서 지참)</li>
      <li>주 2회 / 매주 화, 금 (10:00~16:00)</li>
      <li>&nbsp;</li>
      </ul>
   </div>
<div class="reference">※ 수리재활스포츠센터 및 체력단련실은 프로그램 별 시간표를 참조해 주세요</div>


<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>