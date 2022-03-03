<?php
include_once('./_common.php');

if(!$year) $year = date("Y");
if(!$month) $month = date("m");

if( $month == 1){
	$prevYear = $year - 1;
	$prevMonth = 12;
}else{
	$prevYear = $year;
	$prevMonth = $month - 1 ;	
}

if( $month == 12){
	$nextYear = $year + 1;
	$nextMonth = 1;
}else{
	$nextYear = $year;
	$nextMonth = $month + 1;		
}

$prev_month = $_SERVER['PHP_SELF']."?year=".sprintf("%02d",$prevYear)."&month=".sprintf("%02d",$prevMonth);
$next_month = $_SERVER['PHP_SELF']."?year=".sprintf("%02d",$nextYear)."&month=".sprintf("%02d",$nextMonth);

?>
<html>
<script src="/js/jquery-1.12.4.min.js?ver=191202"></script>
<style>@import url('https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean');</style>
<link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all" rel="stylesheet">
<link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all" rel="stylesheet">
<link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet">
<style>
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:13px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	a{text-decoration:none;}
	.cal_top{text-align:center; width:100%; margin-top:0px; padding:8px 0; font-weight: bold; color:#000; border:0px solid red; background-color:#f2f2f2;}
	.cal_top td a{color:#000; font-size:1.1em;}
	.calen{float:left; width:60%; height:240px; border:1px solid #ddd;}
	.ta_ble{width:100%;}
	.ta_ble th{width: 35px; text-align: center; color: #000; font-size:0.7em; background: #fff; font-weight:400; padding: 5px 0; }
	.ta_ble td{text-align: center; /*font-size:0.8em;*/ height:32px; line-height:32px; position:relative;}
	.ta_ble.tb5 td{height:27px; line-height:27px; position:relative;}
	.ta_ble td a{color:#666; display:block; width:100%; height:100%;}	
	.ta_ble td.sunday{color:red !important;}
	.ta_ble td.today{background: url('../img/cal_bg.png') center center no-repeat; color: #fff;}
	.ta_ble td.today a{color: #fff;}
	.ta_ble td .tgab{color: #000; font-weight:700;}
	.ta_ble td a:hover, .ta_ble td a:active{background: url('../img/cal_bg1.png') center center no-repeat; color: #fff;}	
	.ta_ble td a.on{background: url('../img/cal_bg1.png') center center no-repeat; color: #fff;}	
	.get_div{float:right;width:39%; border:1px solid #ddd; padding:0px;height:242px; overflow-x:hidden; overflow-y:auto; box-sizing:border-box; }
	.get_div div.tit{display:inline-block; width:100%; padding:10px;}
	.get_div div.tit a{color:#000; line-height:25px; display:block; text-overflow:ellipsis; white-space:nowrap;word-wrap:normal;overflow:hidden;width:90%;}
	@media screen and (max-width: 480px) {
		body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{font-size:11px;}
		/*.calen{width:49%;}
		.get_div{width:49%;}*/
	
	}
</style>
<body style="margin:0; padding:0;">
<div style="width:100%; position:relative;">	
	<div class="calen">
	<table cellpadding='0' cellspacing='0' align="center"  class="cal_top">
	<tr>
		<td><a href="<?=$prev_month?>"><i class="fas fa-chevron-left"></i>&nbsp;&nbsp; <?=$year?>년 <?=$month?>월 &nbsp;&nbsp;<a href="<?=$next_month?>"><i class="fas fa-chevron-right"></i></a></td>
	</tr>
	</table>
	<?php
	echo calender($year, $month);
	?>
	</div>
	<div class="get_div"></div>
</div>

<script>
	function get_d(wr_1, tg){
		var allData = { "wr_1": wr_1, "bo_table":"schedule"};
		$.ajax({
			url: "<?php echo G5_BBS_URL?>/ajax.date.php",
			type: "POST",
			data: allData,
			success: function(data){
				$('.get_div').html(data);	
			}
		});
		$(".tga").removeClass("on");
		$("#"+tg).addClass("on");
	}

	get_d('<?php echo date('Y-m-d', time())?>');
	
</script>
</body>
</html>