<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(!$theme_license) exit("<center><span style='color:red; font-size:15px;'><b>Warning: DAONTHEME License is Missing!</b></span><br>You are an unauthorized user.<BR>E-MAIL : daontheme@daum.net</center>");

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<!--
	
	다온테마용 유료 게시판 스킨입니다.
	다온테마에서 분리하여 게시판 스킨만 별도 적용하실 경우 	라이센스 위반으로 예고없이 법적조치 될 수 있습니다.
	daontheme@daum.net

-->


<?php

			$skin_url = G5_PLUGIN_URL."/schedule";

			include (G5_PLUGIN_PATH."/schedule/moonday.php");

			$width="100%";
			if (preg_match('/%/', $width)) {
			  $col_width = "14.285%"; 
			} else{
			  $col_width = round($width/7);
			}

			$col_height= 80 ;
			$today = getdate(); 
			$b_mon = $today['mon']; 
			$b_day = $today['mday']; 
			$b_year = $today['year']; 
			if ($year < 1) { // 오늘의 달력 일때
			  $month = $b_mon;
			  $mday = $b_day;
			  $year = $b_year;
			}

			if(!$year) $year = date("Y");
			$file_index = G5_PLUGIN_PATH."/schedule"; 

			### 양력 기념일
			if(file_exists($file_index."/".$year.".txt")) {
				$dayfile = file($file_index."/".$year.".txt");
			} else { 
				$dayfile = file($file_index."/solar.txt");
			}
			include (G5_PLUGIN_PATH."/schedule/lunar.php");

			$lastday=array(0,31,28,31,30,31,30,31,31,30,31,30,31);
			if ($year%4 == 0) $lastday[2] = 29;
			$dayoftheweek = date("w", mktime (0,0,0,$month,1,$year));

			?>


			<form  method="get">
			<div style="text-align:center; margin:0 auto; margin-bottom:30px;">	
				<span><a href="<?php echo $_SERVER['PHP_SELF']."?";?><?php if ($month == 1) { $year_pre=$year-1; $month_pre=12; } else {$year_pre=$year; $month_pre=$month-1;} echo ("year=$year_pre&month=$month_pre")."&bo_table=".$bo_table."&".$qstr?>"><img src="<?php echo $skin_url?>/img/m_prev.gif" border="0" alt="<?php echo $month_pre?>월"></a></span>
				
				<span style="font-size:30px; font-weight:500; padding-left:10px; padding-right:10px;">	
				<?php echo $year."년 ".$month."월"; ?>
				</span>
				<span><a href="<?php echo $_SERVER['PHP_SELF']."?"; ?><?php if ($month == 12) { $year_pre=$year+1; $month_pre=1; } else {$year_pre=$year; $month_pre=$month+1;} echo ("year=$year_pre&month=$month_pre")."&bo_table=".$bo_table."&".$qstr?>"><img src="<?php echo $skin_url?>/img/m_next.gif" border="0" alt="<?php echo $month_pre?>월"></a></span>
			</div>
			</form>


			<table class="table_css">
			<thead>
			  <tr bgcolor="" align="center">     
				<th style="color:red">일</th>
				<th>월</th>
				<th>화</th>
				<th>수</th>
				<th>목</th>
				<th>금</th>
				<th style="color:blue">토</th>
			  </tr>
			</thead>
			<tbody>
			<?php
				$cday = 1;
				$mon_th = sprintf("%02d",$month);

				$temp = 7- (($lastday[$month]+$dayoftheweek)%7);

				if ($temp == 7) $temp = 0;
				 $lastcount = $lastday[$month]+$dayoftheweek + $temp;

				for ($iz = 1; $iz <= $lastcount; $iz++) {
					
					$bgcolor = "#ffffff"; 
					if ($b_year==$year && $b_mon==$month && $b_day==$cday) $bgcolor = "#DEFADE";      // 오늘날짜
					if (($iz%7) == 1) echo ("<tr>"); 

					if ($dayoftheweek < $iz  &&  $iz <= $lastday[$month]+$dayoftheweek)	{

						$daytext = $cday;   
						$daycontcolor = "" ; 
						$daycolor = ""; 
						if ($iz%7 == 1) $daycolor = "red"; // 일요일
						if ($iz%7 == 0) $daycolor = "blue"; // 토요일


						echo "<td width=$col_width height=$col_height bgcolor=$bgcolor valign=top ><div class='all'>";

						$f_date = $year.sprintf("%02d",$month).sprintf("%02d",$cday);
						$full   = $year."-".sprintf("%02d",$month)."-".sprintf("%02d",$cday);

						// 기념일
						if (strlen($month) == 1)	$monthp = "0".$month; else $monthp = $month;
						if (strlen($cday) == 1)		$cdayp = "0".$cday; else $cdayp = $cday;
						
						$memday = $year.$monthp.$cdayp;
						$daycont = "" ;

						// 기념일(양력) 표시
						for($i=0 ; $i < sizeof($dayfile) ; $i++) {  // 파일 첫 행부터 끝행까지 루프
							$arrDay = explode("|", $dayfile[$i]);
							if($memday == $year.$arrDay[0]) {
								$daycont = $arrDay[1]; 
								$daycontcolor = $arrDay[2];
								if(substr($arrDay[2],0,3)=="red") $daycolor = "red"; // 공휴일은 날짜를 빨간색으로 표시
							}
						}

						//기념일(기타)
						$etc_day = @explode("\n", trim($config["cf_".$year]));
						for($i=0 ; $i < sizeof($etc_day) ; $i++) {  // 파일 첫 행부터 끝행까지 루프
							$arrDay = explode(",", $etc_day[$i]);
							if($memday == $year.$arrDay[0]) {
								$daycont		= $arrDay[1]; 
								$daycontcolor	= "red";
								$daycolor		= "red"; // 공휴일은 날짜를 빨간색으로 표시
							}
						}

						$ret = soltolun($year, sprintf("%02d",$month), sprintf("%02d",$cday));
						if(!$ret['leap']) $annivmoonday = lunar_day_a($ret);	//윤달이 아니면 음력에 따른 공휴일 표시			

						if($annivmoonday) $daycolor = "red";
						
						$w_txt = $week_arr[date('w',strtotime($year.sprintf("%02d",$month).sprintf("%02d",$cday)))];
						
						echo "<div class='day_txt'><span style='color:$daycolor'>$daytext</span> <span class='yoil' style='display:none;'>{$w_txt}</span><span style='color:#aaaaaa' class='txt'>$daycont</span> $annivmoonday</div>";	

						echo "<div style='margin-top:5px; font-size:0.9em;'>";
						$daytext_sp = sprintf("%02d", $daytext);
						$month_sp = sprintf("%02d", $month);

					
						$sqlb = "select * from g5_write_{$bo_table} where wr_1='".$year."-".$month_sp."-".$daytext_sp."' "; //order by wr_id asc";						
						$rsb = sql_query($sqlb);
						while($trow = sql_fetch_array($rsb)){
							echo '<a href="'.G5_BBS_URL.'/board.php?bo_table='.$bo_table.'&wr_id='.$trow['wr_id'].'"><i class="fas fa-check-circle"></i> '.$trow['wr_subject']."</a><br>";
						}
						echo "</div>";
				
						unset($pc_row);
					
						echo "</div></td>";  
						$cday++;


					}else{

						echo "<td width=$col_width height=$col_height bgcolor=fafafa valign=top class='nnn'><div class='all'>";

						if(!$daytext) $daytexta = "01"; else $daytexta = $daytext;
					
						
						if ($iz%7 == 1 && $iz < 8) $day_aab = date("Y-m-d",strtotime("previous Sunday", strtotime($year."-".$month."-".$daytexta)));
						if ($iz%7 == 2 && $iz < 8) $day_aab = date("Y-m-d",strtotime("previous Monday", strtotime($year."-".$month."-".$daytexta)));
						if ($iz%7 == 3 && $iz < 8) $day_aab = date("Y-m-d",strtotime("previous Tuesday", strtotime($year."-".$month."-".$daytexta)));
						if ($iz%7 == 4 && $iz < 8) $day_aab = date("Y-m-d",strtotime("previous Wednesday", strtotime($year."-".$month."-".$daytexta)));
						if ($iz%7 == 5 && $iz < 8) $day_aab = date("Y-m-d",strtotime("previous Thursday", strtotime($year."-".$month."-".$daytexta)));
						if ($iz%7 == 6 && $iz < 8) $day_aab = date("Y-m-d",strtotime("previous Friday", strtotime($year."-".$month."-".$daytexta)));
						
						if($daytexta > 1){
						if ($iz%7 == 1 && $iz > $daytexta) $day_aab = date("Y-m-d",strtotime("next Sunday", strtotime($year."-".$month."-".$daytexta)));
						if ($iz%7 == 2 && $iz > $daytexta) $day_aab = date("Y-m-d",strtotime("next Monday", strtotime($year."-".$month."-".$daytexta)));
						if ($iz%7 == 3 && $iz > $daytexta) $day_aab = date("Y-m-d",strtotime("next Tuesday", strtotime($year."-".$month."-".$daytexta)));
						if ($iz%7 == 4 && $iz > $daytexta) $day_aab = date("Y-m-d",strtotime("next Wednesday", strtotime($year."-".$month."-".$daytexta)));
						if ($iz%7 == 5 && $iz > $daytexta) $day_aab = date("Y-m-d",strtotime("next Thursday", strtotime($year."-".$month."-".$daytexta)));
						if ($iz%7 == 6 && $iz > $daytexta) $day_aab = date("Y-m-d",strtotime("next Friday", strtotime($year."-".$month."-".$daytexta)));
						if ($iz%7 == 0 && $iz > $daytexta) $day_aab = date("Y-m-d",strtotime("next Saturday", strtotime($year."-".$month."-".$daytexta)));
						}
						
						$day_aab_j = date("j", strtotime($day_aab));

						echo "<div class='day_txt'><span style='color:#aaa;'>".$day_aab_j."</span></div>";
					
						
						echo "&nbsp;</div></td>";

						
					}
					if (($iz%7) == 0) echo "  </tr>";
				   
				} 
			?>
			</tbody>
			</table>



			<br><br>
		<div class="bg_vline"></div>
		<p class="eng">오늘의 <em>일정</em> </p>

		<table class="tbl">
		<?php
			$table = $g5['write_prefix'] . $bo_table;
			$limit = 999;

			$now = date('Y-m-d', time());

			 $rs = sql_query(" select * from $table  where wr_is_comment = 0 and wr_1 = '".$now."' limit $limit");
	
			$cok = 0;
			for($i=0; $i<$limit; $i++){

				$row = sql_fetch_array($rs);

				if($row){
				
					?>
					<tr style="text-align: center;">
						<th style="width:20%"><?php echo $row['wr_subject']?></th>
						<td style="text-align:left;"><?php echo $row['wr_1']?> <?php echo $row['wr_3']?> <?php echo $row['wr_2']?></td>
					</tr>

			<?php		$cok++;		
				}else{?>
				
				
			<?php		}
			}

			if($cok == 0) echo "<tr><td style='width:100%; text-align:center; height:100px;'>오늘 일정이 없습니다.</td></tr>";

		?>
		</table>

		<?php if ($list_href || $is_checkbox || $write_href) { ?>
		<br>
    <div class="bo_fx">
        <?php if ($list_href || $write_href) { ?>
        <ul class="btn_bo_user">
        	<!-- <?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_b011 btn_admin btn" title="관리자"><i class="fa fa-cog fa-spin fa-fw"></i><span class="">관리자</span></a></li><?php } ?>
            <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b011 btn" title="RSS" target="_blank"><i class="fa fa-rss" aria-hidden="true"></i><span class="">RSS</span></a></li><?php } ?> -->
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b011 btn" title="글쓰기"><i class="fas fa-pencil-alt"></i><span class="">글쓰기</span></a></li><?php } ?>
        </ul>	
        <?php } ?>
    </div>
    <?php } ?> 


<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = g5_bbs_url+"/board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == "copy")
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = g5_bbs_url+"/move.php";
    f.submit();
}

// 게시판 리스트 관리자 옵션
jQuery(function($){
    $(".btn_more_opt.is_list_btn").on("click", function(e) {
        e.stopPropagation();
        $(".more_opt.is_list_btn").toggle();
    });
    $(document).on("click", function (e) {
        if(!$(e.target).closest('.is_list_btn').length) {
            $(".more_opt.is_list_btn").hide();
        }
    });
	 $(".more_opt_close").on("click", function (e) {
       $(".more_opt.is_list_btn").hide();
    });
});
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->
