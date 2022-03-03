<?php

	include_once('./_common.php');

	$write_table = $g5['write_prefix'] . $_POST['bo_table'];

	$wr_1     = trim($_POST['wr_1']);
	$wr_name     = trim($_POST['wr_name']);
	$wr_password     = trim($_POST['wr_1']);

	$sql = " SELECT * FROM  {$write_table} WHERE  wr_1 like '".$wr_1."%' and wr_name =  '".$wr_name."'  ";
	$row = sql_fetch($sql);

	
	if($row['wr_id']){

		$wr = get_write($write_table, $row['wr_id']);

		if( !$wr['wr_password'] && $wr['mb_id'] ){
			if ( $mb = get_member($wr['mb_id']) ){
				$wr['wr_password'] = $mb['mb_password'];
			}
		}

		if(!check_password($wr_password, $wr['wr_password'])) {
			alert('비밀번호가 틀립니다.');			
			exit;
		}

		 echo '
        <!doctype html>
        <html lang="ko">
        <head>
        <meta charset="utf-8">
        <title></title>
        <body>
        <form name="fregisterupdate" method="post" action="'.G5_HTTP_BBS_URL.'/password_check.php">
        <input type="hidden" name="w" value="s">
		<input type="hidden" name="wr_id" value="'.$wr['wr_id'].'">
        <input type="hidden" name="bo_table" value="'.$_POST['bo_table'].'">
        <input type="hidden" name="wr_password" value="'.$wr_password.'">
        </form>
        <script>
        document.fregisterupdate.submit();
        </script>
        </body>
        </html>';	


	}else{
		alert("입력하신 정보에 맞는 대기자가 없습니다.");
	}