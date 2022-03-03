<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가


 $sql = " update $write_table set wr_2 = '완료' where wr_id='{$wr_id}'";
 sql_query($sql);

?>