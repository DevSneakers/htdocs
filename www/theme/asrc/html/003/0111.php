<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "참여공간"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "후원안내"; //커스텀페이지의 타이틀을 입력합니다.
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
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;"><a href="http://asrc2103.cafe24.com/theme/daontheme_business08/html/003/011.php" target="_self">후원안내&nbsp;</td>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;"><a href="http://asrc2103.cafe24.com/theme/daontheme_business08/html/003/012.php" target="_self">후원신청&nbsp;&nbsp;</td>
            <td style="text-align: center; border-style: solid; border-width: 1px; border-color: #cccccc;"><a href="http://asrc2103.cafe24.com/theme/daontheme_business08/html/003/013.php" target="_self">후원처&nbsp;&nbsp;</td>
         </tr>

         </tr>
      </tbody>
   </table>
   </p>
<br><br>

<div class="sponsorship_application_top" style="margin:0px 0px 60px;padding:0px;height:393px;background-image:url(&quot;../images/sub3/sponsorship_application_bg.jpg&quot;);background-position:left top;background-repeat:no-repeat;color:#666666;font-family:'Nanum Gothic', '나눔고딕', 'Malgun Gothic', '맑은 고딕', '돋움', Dotum, '굴림', Gulim;font-size:14px;">
   <div class="text1" style="margin:0px;padding:30px 0px 0px;line-height:36px;font-size:28px;color:#333333;">
      <span style="margin:0px;padding:0px;vertical-align:baseline;color:#007cc3;">나눔의 물결</span><br /><span style="margin:0px;padding:0px;vertical-align:baseline;color:#007cc3;">소중한 후원금</span>은 이렇게 사용 됩니다.
      <p>
         <br />
      </p>
      <p>
         <img src="http://asrc09502.cafe24.com/data/editor/2101/20210103161812_4a9eaecc6a58616f46681d24342af334_gw8z.jpg" alt="gpbt.jpg" style="width:306px;height:153px;" />
      </p>
      <p>&nbsp;</p>
      <table cellpadding="1" cellspacing="0" style="border-collapse:collapse;width:100%;">
         <tbody>
            <tr>
               <td>&nbsp;
                  <p>
                     <img src="http://asrc09502.cafe24.com/data/editor/2101/20210103161825_4a9eaecc6a58616f46681d24342af334_sjn0.jpg" alt="bdzb.jpg" style="width:124px;height:123px;" />
                  </p>
                  </td>
               <td>
                  <span style="color:#666666;font-size:14px;">타인의 도움 없이는 일상생활이 어려운&nbsp;</span><span style="color:#666666;font-size:14px;">이들을 위한 돌봄서비스</span>
               </td>
               <td>
                  <p>
                     <img src="http://asrc09502.cafe24.com/data/editor/2101/20210103161835_4a9eaecc6a58616f46681d24342af334_p4kk.jpg" alt="dxvq.jpg" style="width:124px;height:123px;" />
                  </p>
                  <br /></td>
               <td>
                  <p>
                     <span style="font-size:12px;">&nbsp;추운겨울, 더운여름을 좀 더 편안히&nbsp;</span><span style="color:#666666;font-size:12px;">보낼 수 있는 계절용품지원</span>&nbsp;
                  </p>
                  </td>
            </tr>
            <tr>
               <td>&nbsp;
                  <p>
                     <img src="http://asrc09502.cafe24.com/data/editor/2101/20210103161847_4a9eaecc6a58616f46681d24342af334_3oym.jpg" alt="1xjx.jpg" style="width:124px;height:123px;" />
                  </p>
                  </td>
               <td>
                  <p>
                     <span style="font-size:12px;">&nbsp;</span><span style="color:#666666;font-size:12px;">전 연령대의 장애인들이 정서적 안정과&nbsp;</span><span style="font-size:12px;">기능향상을 위한 프로그램 지원</span><span style="color:#ff7700;font-size:18px;">&nbsp;</span>
                  </p>
                  </td>
               <td>&nbsp;
                  <p>
                     <img src="http://asrc09502.cafe24.com/data/editor/2101/20210103161856_4a9eaecc6a58616f46681d24342af334_m7d8.jpg" alt="drw.jpg" style="width:124px;height:123px;" />
                  </p>
                  </td>
               <td>&nbsp;<span style="color:#666666;font-size:14px;">장애인들의 독립적인 사회생활을 위한&nbsp;</span><span style="color:#666666;font-size:14px;">직업훈련과 취업연계</span>&nbsp;</td>
            </tr>
         </tbody>
      </table>
   </div>
   </div>
<h5 class="h5_label" style="margin:0px 0px 20px;padding:0px 0px 0px 17px;line-height:1.4;font-size:18px;color:#ff7700;background-image:url(&quot;../images/sub/h5_bg.gif&quot;);background-position:left 8px;background-repeat:no-repeat;font-family:'Nanum Gothic', '나눔고딕', 'Malgun Gothic', '맑은 고딕', '돋움', Dotum, '굴림', Gulim;">&nbsp;</h5>
<h5 class="h5_label" style="margin:0px 0px 20px;padding:0px 0px 0px 17px;line-height:1.4;font-size:18px;color:#ff7700;background-image:url(&quot;../images/sub/h5_bg.gif&quot;);background-position:left 8px;background-repeat:no-repeat;font-family:'Nanum Gothic', '나눔고딕', 'Malgun Gothic', '맑은 고딕', '돋움', Dotum, '굴림', Gulim;">
   <br />
</h5>
<h5 class="h5_label" style="margin:0px 0px 20px;padding:0px 0px 0px 17px;line-height:1.4;font-size:18px;color:#ff7700;background-image:url(&quot;../images/sub/h5_bg.gif&quot;);background-position:left 8px;background-repeat:no-repeat;font-family:'Nanum Gothic', '나눔고딕', 'Malgun Gothic', '맑은 고딕', '돋움', Dotum, '굴림', Gulim;">&nbsp;</h5>
<h5 class="h5_label" style="margin:0px 0px 20px;padding:0px 0px 0px 17px;line-height:1.4;font-size:18px;color:#ff7700;background-image:url(&quot;../images/sub/h5_bg.gif&quot;);background-position:left 8px;background-repeat:no-repeat;font-family:'Nanum Gothic', '나눔고딕', 'Malgun Gothic', '맑은 고딕', '돋움', Dotum, '굴림', Gulim;">&nbsp;</h5>
<h5 class="h5_label" style="margin:0px 0px 20px;padding:0px 0px 0px 17px;line-height:1.4;font-size:18px;color:#ff7700;background-image:url(&quot;../images/sub/h5_bg.gif&quot;);background-position:left 8px;background-repeat:no-repeat;font-family:'Nanum Gothic', '나눔고딕', 'Malgun Gothic', '맑은 고딕', '돋움', Dotum, '굴림', Gulim;">&nbsp;</h5>
<h5 class="h5_label" style="margin:0px 0px 20px;padding:0px 0px 0px 17px;line-height:1.4;font-size:18px;color:#ff7700;background-image:url(&quot;../images/sub/h5_bg.gif&quot;);background-position:left 8px;background-repeat:no-repeat;font-family:'Nanum Gothic', '나눔고딕', 'Malgun Gothic', '맑은 고딕', '돋움', Dotum, '굴림', Gulim;">♣ 다양한 방법으로 후원에 참여하실 수 있습니다.</h5>
<div class="common_list common_list1" style="margin:0px;padding:0px;color:#666666;font-family:'Nanum Gothic', '나눔고딕', 'Malgun Gothic', '맑은 고딕', '돋움', Dotum, '굴림', Gulim;font-size:14px;">
   <ol style="list-style:none;margin:0px 0px 20px;padding:0px;">
      <li style="line-height:30px;margin:0px 0px 20px;">
         <span style="margin:0px 10px 0px 0px;padding:0px;vertical-align:baseline;width:19px;height:19px;line-height:19px;font-size:13px;text-align:center;background:rgb(245,245,245);border:1px solid rgb(220,220,220);">1</span>계좌이체 및 CMS<br />매월 정기적 또는 일시적으로 원하시는 금액만큼 후원하는 방법입니다.
      </li>
      <li style="line-height:30px;margin:0px 0px 20px;">
         <span style="margin:0px 10px 0px 0px;padding:0px;vertical-align:baseline;width:19px;height:19px;line-height:19px;font-size:13px;text-align:center;background:rgb(245,245,245);border:1px solid rgb(220,220,220);">2</span>물품 후원<br />식료품 및 생활용품, 가전제품 등을 보내주시면 필요한 이웃에게 전달됩니다.
      </li>
      <li style="line-height:30px;margin:0px 0px 20px;">
         <span style="margin:0px 10px 0px 0px;padding:0px;vertical-align:baseline;width:19px;height:19px;line-height:19px;font-size:13px;text-align:center;background:rgb(245,245,245);border:1px solid rgb(220,220,220);">3</span>네이버 해피빈 콩기부<br />해피빈에서 안양시수리장애인종합복지관의 관심있는 모금함에 기부아이템 콩을 후원해주세요
         <div style="margin:0px;padding:0px;">
            <a href="http://happylog.naver.com/asrc.do" target="_blank" class="btn_haapybin" style="margin:3px 0px 0px;padding:0px;color:#ffffff;width:143px;height:32px;line-height:32px;text-align:center;background:rgb(130,170,27);" rel="nofollow noreferrer noopener">네이버 해피빈 후원</a>
         </div>
      </li>
   </ol>
   </div>
<h5 class="h5_label mt40" style="margin-right:0px;margin-bottom:20px;margin-left:0px;padding:0px 0px 0px 17px;line-height:1.4;font-size:18px;color:#ff7700;background-image:url(&quot;../images/sub/h5_bg.gif&quot;);background-position:left 8px;background-repeat:no-repeat;font-family:'Nanum Gothic', '나눔고딕', 'Malgun Gothic', '맑은 고딕', '돋움', Dotum, '굴림', Gulim;margin-top:40px;">♣ 나눔에 참여하시면</h5>
<div class="common_list mb40" style="margin-top:0px;margin-right:0px;margin-left:0px;padding:0px;color:#666666;font-family:'Nanum Gothic', '나눔고딕', 'Malgun Gothic', '맑은 고딕', '돋움', Dotum, '굴림', Gulim;font-size:14px;margin-bottom:40px;">
   <ol style="list-style:none;margin:0px 0px 20px;padding:0px;">
      <li style="line-height:30px;">
         <span style="margin:0px 10px 0px 0px;padding:0px;vertical-align:baseline;width:19px;height:19px;line-height:19px;font-size:13px;text-align:center;background:rgb(245,245,245);border:1px solid rgb(220,220,220);">1</span>우리복지관에서 주관하는 각종 행사 및 이벤트 초청
      </li>
      <li style="line-height:30px;">
         <span style="margin:0px 10px 0px 0px;padding:0px;vertical-align:baseline;width:19px;height:19px;line-height:19px;font-size:13px;text-align:center;background:rgb(245,245,245);border:1px solid rgb(220,220,220);">2</span>정기 발행물 발송
      </li>
      <li style="line-height:30px;">
         <span style="margin:0px 10px 0px 0px;padding:0px;vertical-align:baseline;width:19px;height:19px;line-height:19px;font-size:13px;text-align:center;background:rgb(245,245,245);border:1px solid rgb(220,220,220);">3</span>소득세법 34조에 의한 연말 정산 시 소득 공제 혜택
      </li>
   </ol>
   </div>
<h5 class="h5_label" style="margin:0px 0px 20px;padding:0px 0px 0px 17px;line-height:1.4;font-size:18px;color:#ff7700;background-image:url(&quot;../images/sub/h5_bg.gif&quot;);background-position:left 8px;background-repeat:no-repeat;font-family:'Nanum Gothic', '나눔고딕', 'Malgun Gothic', '맑은 고딕', '돋움', Dotum, '굴림', Gulim;">♣ 후원문의</h5>
<div class="common_arrow" style="margin:0px;padding:0px 0px 0px 22px;font-weight:600;background-image:url(&quot;../images/sub/icon1.gif&quot;);background-position:left 50%;background-repeat:no-repeat;color:#666666;font-family:'Nanum Gothic', '나눔고딕', 'Malgun Gothic', '맑은 고딕', '돋움', Dotum, '굴림', Gulim;font-size:14px;">
   <span style="margin:0px;padding:0px;vertical-align:baseline;color:#ff7700;">문의(기획협력팀)</span>&nbsp;: 031)465-0959
</div>


<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>