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

<p>
   <table cellpadding="1" cellspacing="0" style="border-color: #cccccc; border-style: solid; border-width: 1px; border-collapse: collapse; width: 800px;">
      <tbody>
         <tr>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;"><a href="http://asrc2103.cafe24.com/theme/daontheme_business08/html/003/014.php" target="_self">자원봉사안내&nbsp;</td>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;"><a href="http://asrc2103.cafe24.com/theme/daontheme_business08/html/003/015.php" target="_self">자원봉사신청&nbsp;&nbsp;</td>
         </tr>

         </tr>
      </tbody>
   </table>
   </p>
<br><br>

<h5 class="h5_label" style="margin:0px 0px 20px;padding:0px 0px 0px 17px;line-height:1.4;font-size:18px;color:#ff7700;background-image:url(&quot;../images/sub/h5_bg.gif&quot;);background-position:left 8px;background-repeat:no-repeat;font-family:'Nanum Gothic', '나눔고딕', 'Malgun Gothic', '맑은 고딕', '돋움', Dotum, '굴림', Gulim;">▣ 자원봉사는 누가, 어떤 활동을 할 수 있나요?</h5>
<p>&nbsp;</p>
<p>
   <img src="http://asrc09502.cafe24.com/data/editor/2101/20210103162112_4a9eaecc6a58616f46681d24342af334_pqq8.jpg" alt="volunteer_img.jpg" style="width:750px;height:489px;" />
</p>
<p>&nbsp;</p>
<h5 class="h5_label" style="margin:0px 0px 20px;padding:0px 0px 0px 17px;line-height:1.4;font-size:18px;color:#ff7700;background-image:url(&quot;../images/sub/h5_bg.gif&quot;);background-position:left 8px;background-repeat:no-repeat;font-family:'Nanum Gothic', '나눔고딕', 'Malgun Gothic', '맑은 고딕', '돋움', Dotum, '굴림', Gulim;">&nbsp;</h5>
<h5 class="h5_label" style="margin:0px 0px 20px;padding:0px 0px 0px 17px;line-height:1.4;font-size:18px;color:#ff7700;background-image:url(&quot;../images/sub/h5_bg.gif&quot;);background-position:left 8px;background-repeat:no-repeat;font-family:'Nanum Gothic', '나눔고딕', 'Malgun Gothic', '맑은 고딕', '돋움', Dotum, '굴림', Gulim;">▣&nbsp; 이렇게 참여하실 수 있습니다.</h5>
<div class="common_list" style="margin:0px;padding:0px;color:#666666;font-family:'Nanum Gothic', '나눔고딕', 'Malgun Gothic', '맑은 고딕', '돋움', Dotum, '굴림', Gulim;font-size:14px;">
   <ol style="list-style:none;margin:0px 0px 20px;padding:0px;">
      <li style="line-height:30px;">
         <span style="margin:0px 10px 0px 0px;padding:0px;vertical-align:baseline;width:19px;height:19px;line-height:19px;font-size:13px;text-align:center;background:rgb(245,245,245);border:1px solid rgb(220,220,220);">1</span>홈페이지 or VMS 봉사내용 확인
      </li>
      <li style="line-height:30px;">
         <span style="margin:0px 10px 0px 0px;padding:0px;vertical-align:baseline;width:19px;height:19px;line-height:19px;font-size:13px;text-align:center;background:rgb(245,245,245);border:1px solid rgb(220,220,220);">2</span>희망봉사 신청
      </li>
      <li style="line-height:30px;">
         <span style="margin:0px 10px 0px 0px;padding:0px;vertical-align:baseline;width:19px;height:19px;line-height:19px;font-size:13px;text-align:center;background:rgb(245,245,245);border:1px solid rgb(220,220,220);">3</span>상담 (유선/내방)
      </li>
      <li style="line-height:30px;">
         <span style="margin:0px 10px 0px 0px;padding:0px;vertical-align:baseline;width:19px;height:19px;line-height:19px;font-size:13px;text-align:center;background:rgb(245,245,245);border:1px solid rgb(220,220,220);">4</span>봉사활동
      </li>
      <li style="line-height:30px;">
         <span style="margin:0px 10px 0px 0px;padding:0px;vertical-align:baseline;width:19px;height:19px;line-height:19px;font-size:13px;text-align:center;background:rgb(245,245,245);border:1px solid rgb(220,220,220);">5</span>VMS 사이트를 통한 인증서 출력
      </li>
   </ol>
   </div>


<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>