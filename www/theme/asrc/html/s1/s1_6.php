<?
	//화면의 성격
	$user_division = "user";
	$screen_div = "sub";
	$frame_div = "two";

	//카테고리 명칭 & 카테고리 번호
	$cate_name = "복지관소개";
	$cate_num = "1";

	//페이지 명칭 & 페이지 번호
	$page_name = "주간식단안내";
	$page_num = "6";

	//현재 활성화 상태
	$gn_btn = "gn_btn".$cate_num;
	$$gn_btn = "current";
	$ln_btn = "ln_btn".$page_num;
	$$ln_btn = "current";

	$bo_table = "s1_6";
?>
<?include_once("../include/head_sub.php");?>
<?include_once("../include/header.php");?>
<?
	if(!$s_date){
		$sss = time();
	}else{
		$sss = $s_date;
	}

	$today = date("Y-m-d",$sss);

	$b_date = $sss-(86400*7);
	$n_date = $sss+(86400*7);
	$yoil = get_yoil($today);

	for($i=1, $j=0;$i<=7;$i++,$j++){
		$ss1 = $sss-(86400*$i);
		$ss2 = $sss+(86400*$i);
		$today1[$j] = date("Y-m-d",$ss1);
		$today2[$j] = date("Y-m-d",$ss2);
	}

/*
	for($i=1, $j=0;$i<=7;$i++,$j++){
		$s1 = get_yoil($today1[$j]);
		$s2 = get_yoil($today2[$j]);

		if($s1 == "월" && $j > 0){ $b_text = $today1[$j]."(".$s1.")"; }
		if($s2 == "금"){ $n_text = $today2[$j]."(".$s2.")"; }
	}
*/
	$k=0;
	for($i=count($today1)-1, $j=0;$i>=0;$i--,$j++){
		$s1 = get_yoil($today1[$i]);
		if($s1 == "월" && $j > 0){ $view = true; }
		if($view){
			$week_date[$k] = $today1[$i];
			$k++;
		}
	}

	$week_date[$k] = $today;
	$k++;

	for($i=0;$i<count($today2);$i++){
		$s1 = get_yoil($today2[$i]);
		if($s1 == "토"){ $view1 = true; }
		if(!$view1){
			$week_date[$k] = $today2[$i];
			$k++;
		}
	}

	$s1 = get_yoil($week_date[0]);
	$s2 = get_yoil($week_date[4]);
	$b_text = $week_date[0]."(".$s1.")";
	$n_text = $week_date[4]."(".$s2.")";
?>

<!-- 컨텐츠 : 시작 -->
<div class="weekly_diet_guide">
	<div class="diet_btn_area">
		<a href="<?=$PHP_SELF?>?s_date=<?=urlencode($b_date)?>" class="btn_diet_left" title="지난주 주간식단 안내">&lt;</a>
		<span class="weekly"><?=$b_text?> ~ <?=$n_text?></span>
		<a href="<?=$PHP_SELF?>?s_date=<?=urlencode($n_date)?>" class="btn_diet_right" title="다음주 주간식단 안내">&gt;</a>
	</div>
	<div class="diet_area">
		<?
			for($i=0;$i<count($week_date);$i++){
				$s1 = get_yoil($week_date[$i]);
				$wr_1 = str_replace("-","",$week_date[$i]);
				$sik = sql_fetch("select * from g4_write_s1_6 where wr_1 = '$wr_1'");
		?>

		<dl>
			<dt><p class="date"><?=$week_date[$i]?></p>(<?=$s1?>)</dt>
			<dd class="menu">
				<?=cut_str(conv_content($sik[wr_content],2), 150)?>
			</dd>
			<dd class="kcal">총 열량<p><?=cut_str($sik[wr_subject], 10)?>Kcal</p></dd>
			<dd class="origin">
				<?=cut_str(conv_content($sik[wr_link1],2), 1065)?>
			</dd>
		</dl>

		<?}?>

	</div>
	<div class="common_arrow"><span>위 식단은 식자재 수급 및 기타 요인에 의해 변경될 수 있습니다. </span></div>
</div>
<!-- 컨텐츠 : 종료 -->
<?include_once("../include/footer.php");?>
<?include_once("../_tail.php");?>