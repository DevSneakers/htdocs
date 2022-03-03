<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "이용안내"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "주간식단"; //커스텀페이지의 타이틀을 입력합니다.
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


		

		<div class="bg_vline"></div>
		<p class="eng"><em>주간</em> 식단</p>
		<p class="stitle"><!-- 깨끗하고 정성스런 한끼 <br class="sview">고객이 먼저 자랑하는 기업이 되겠습니다. --></p>

<?php

	if(!$setdate)$setdate = date("Y-m-d");
	$today = strtotime($setdate);
	$today = (strtotime('SUNDAY', $today) > $today) ? strtotime('LAST SUNDAY', $today) : strtotime('SUNDAY', $today); 	

	$mon_str= strtotime('MONDAY', $today);
	$fri_str = strtotime('FRIDAY', $today);  

	$mon = date('Y-m-d', $mon_str);
	$fri = date('Y-m-d', $fri_str);

	$prev_day = date("Y-m-d", strtotime($setdate." -7 day"));
	$next_day = date("Y-m-d", strtotime($setdate." +7 day"));


	$botable = "food";	
	$table = $g5['write_prefix'] . $botable;		


?>				

		
			<div class="weekly_diet_guide">
				<div class="diet_btn_area">
					<a href="?setdate=<?php echo $prev_day?>" class="btn_diet_left" title="지난주 주간식단 안내"><i class="fa fa-angle-left"></i></a>
					<span class="weekly"><?php echo $mon?>(<?php echo yoil_str($mon)?>) ~ <?php echo $fri?>(<?php echo yoil_str($fri)?>)</span>
					<a href="?setdate=<?php echo $next_day?>"  class="btn_diet_right" title="다음주 주간식단 안내"><i class="fa fa-angle-right"></i></a>
				</div>
				<div class="weekly_diet_guide_all">
					<div class="diet_area">				
					
						<?php 
							 
						 for ($i=$mon_str; $i<=$fri_str; $i+=86400) {
						
							$day = date('Y-m-d', $i);

							$sql = " select * from $table  where wr_is_comment = 0 and wr_1 like '%{$day}%' order by wr_num asc limit 1";
							$row = sql_fetch($sql);

							if($row){
								
						?>
						<dl>
							<dt><p class="date"><?php echo $day?></p>(<?php echo yoil_str($day)?>)</dt>
							<dd class="menu"><?php echo nl2br($row['wr_2'])?></dd>
							<dd class="kcal">총 열량<p><?php echo number_format($row['wr_3'])?>Kcal</p></dd>
							<dd class="origin"><?php echo nl2br($row['wr_4'])?></dd>
						</dl>
						<?php }else{?>
						<dl>
							<dt><p class="date"><?php echo $day?></p>(<?php echo yoil_str($day)?>)</dt>
							<dd class="menu">등록된 식단이 없습니다.</dd>
							<dd class="kcal">총 열량<p><?php echo number_format($row['wr_3'])?>Kcal</p></dd>
							<dd class="origin"></dd>
						</dl>
						<?php 
							
							}
						 }
						?>
						
						

						
					</div>
					<div class="common_arrow"><span>위 식단은 식자재 수급 및 기타 요인에 의해 변경될 수 있습니다. </span></div>
				</div>
				
			</div>
		</div>



	</div>

<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>