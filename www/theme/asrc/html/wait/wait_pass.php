<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "이용안내"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "대기자현황"; //커스텀페이지의 타이틀을 입력합니다.
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


	<section class="scontents">

		<div class="confrim_top">	
			<p class="txt">	
				<strong>대기관련 유의사항</strong><br>				

			1. 대기현황은 매월 10일 업데이트 됩니다.<br>
			2. 서비스 시작과 대기 취소로 대기 순서는 변동될 수 있습니다.<br>
			3. 서비스 이용은 2회까지 보류가 가능하며, 연락이 되지 않는 경우도 보류로 간주됩니다.<br>
			4. 연락처, 주소 등 개인정보 변경이 필요할 때에는 반드시 해당팀으로 연락바랍니다.<br><br>

			<span><i class="fas fa-chevron-circle-right"></i> 문의전화<br></span>
			<span>상담가족지원팀</span> : 031-465-0951 / <span>주간보호센터</span> : 031-465-1465 / <span>단기보호센터</span> : 031-465-0958
			</p>
		</div>
		<div id="pw_confirm" >

			<form name="fboardpassword" action="<?php echo G5_BBS_URL?>/wait_Confirm_chk.php" method="post">
			<input type="hidden" name="w" value="s">
			<input type="hidden" name="bo_table" value="wait">

			<fieldset>				
				
				<input type="text" name="wr_name" id="wr_name" required class="frm_input required" size="15" maxlength="7" placeholder="이름" style="margin:7px 0;">
				
				<input type="text" name="wr_1" id="wr_1" required  class="frm_input required" size="15" maxlength="6" placeholder="생년월일 ex) 800101">
	
			</fieldset>
			<center>
			<button type="submit" class="btn btn_submit" style="display:inline-block; width:150px; height:40px; line-height:40px; margin:20px auto; margin-bottom:0px;">검색</button>
			</center>

			</form>

		</div>

<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>