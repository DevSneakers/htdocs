<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.sub.php');
$g5['title'] = "대기자현황 엑셀등록";
?>
<link href="<?php echo G5_ADMIN_URL?>/css/admin.css" media="all" rel="stylesheet">
<style>
	body{background:#fff;}
</style>
<div class="new_win">
    <h1><?php echo $g5['title']; ?></h1>

    <div class="local_desc01 local_desc">
        <p>
            엑셀파일을 이용하여 대기자명단을 일괄등록할 수 있습니다.<br>
            <span style="color:red;">등록된 자료가 있을 경우 리셋되며, 새로 등록한 자료로 업데이트 됩니다.<br>			
            이름과 생년월일 값이 누락되면 입력되지 않습니다.</span>
        </p>
    </div>

    <form name="fitemexcel" method="post" action="<?php echo G5_BBS_URL?>/bexcel_update.php" enctype="MULTIPART/FORM-DATA" autocomplete="off">
    
	<div id="excelfile_upload">      
		<label for="excelfile">파일선택</label>
        <input type="file" name="excelfile" id="excelfile" required>
    </div>

    <div class="win_btn btn_confirm">
        <input type="submit" value="엑셀파일 등록" class="btn_submit btn">
        <button type="button" onclick="window.close();" class="btn_close btn">닫기</button>
    </div>

    </form>

</div>

<?php
include_once(G5_THEME_PATH.'/tail.sub.php');
?>
