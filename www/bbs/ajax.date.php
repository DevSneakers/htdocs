<?php
include_once('./_common.php');


$table = $g5['write_prefix'] . $bo_table;	

?>
<table cellpadding='0' cellspacing='0' align="center"  class="cal_top">
<tr>
	<td><a href="#none"><?php echo date("Y년 m월 d일", strtotime($wr_1))?> 일정</a></td>
</tr>
</table>
<?php

$sql = " select * from $table where wr_is_comment = 0 and wr_1 = '{$wr_1}' ";
$result = sql_query($sql);

echo "<div class='tit'>";
for ($i=0; $row=sql_fetch_array($result); $i++) {
	echo "<a href=\"".get_pretty_url($bo_table, $row['wr_id'])."\" target=\"_top\"> - ".$row['wr_subject']."</a>";
}
if($i == 0) echo "일정이 없습니다.";
echo "</div>";
?>