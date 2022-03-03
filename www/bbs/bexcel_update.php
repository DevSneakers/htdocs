<?php
error_reporting( E_ALL & ~E_NOTICE ); 	 ini_set("display_errors", 1);
include_once('./_common.php');

$bo_table = "wait";	
$wtable = $g5['write_prefix'] . $bo_table;


// 입력이 많을 경우 대비 설정변경
set_time_limit ( 0 );
ini_set('memory_limit','-1');

function only_number($n)
{
    return preg_replace('/[^0-9]/', '', $n);
}


$sql = " delete from {$wtable} ";
sql_query($sql);


if($_FILES['excelfile']['tmp_name']) {
    $file = $_FILES['excelfile']['tmp_name'];

	

	include_once(G5_LIB_PATH.'/PHPExcel.php');

	$objPHPExcel = new PHPExcel();

	include_once(G5_LIB_PATH.'/PHPExcel/IOFactory.php');

	$filename = $file; // 읽어들일 엑셀 파일의 경로와 파일명을 지정한다.

	try {

		// 업로드 된 엑셀 형식에 맞는 Reader객체를 만든다.
		$objReader = PHPExcel_IOFactory::createReaderForFile($filename);

		// 읽기전용으로 설정
		$objReader->setReadDataOnly(true);

		// 엑셀파일을 읽는다
		$objExcel = $objReader->load($filename);

		// 첫번째 시트를 선택
		$objExcel->setActiveSheetIndex(0);

		$objWorksheet = $objExcel->getActiveSheet();

		$rowIterator = $objWorksheet->getRowIterator();

		foreach ($rowIterator as $row) { // 모든 행에 대해서
		   $cellIterator = $row->getCellIterator();
		   $cellIterator->setIterateOnlyExistingCells(false); 
		}

		$maxRow = $objWorksheet->getHighestRow();

		
		for ($i = 1 ; $i <= $maxRow ; $i++) {
			
			$name = $objWorksheet->getCell('A' . $i)->getValue(); // 이름
			$birth = $objWorksheet->getCell('B' . $i)->getValue(); // 생년월일	
			$program = $objWorksheet->getCell('C' . $i)->getValue(); // 프로그램명	
			$sunbun = $objWorksheet->getCell('D' . $i)->getValue(); // 대기순번	
			$tno = $objWorksheet->getCell('E' . $i)->getValue(); // 접수번호	
			$date = $objWorksheet->getCell('F' . $i)->getValue(); // 접수일자	

			$birth_arr = explode("-",trim($birth));

			$wr_password = get_encrypt_string($birth_arr[0]);

			//홍길동	951225-2	단기보호 주야간수급	100	1	2015.08.01

			$secret = "secret"; //무조건 비밀글
			

			if(is_numeric($birth_arr[0])){
				
				$sqla = " insert into {$wtable}
						set wr_name		= '{$name}',
							wr_subject		= '{$program}',
							wr_1				= '{$birth}',
							wr_2				= '{$sunbun}',
							wr_3				= '{$tno}',
							wr_4				= '{$date}',
							wr_5				= '{$birth}',
							wr_option = '$html,$secret,$mail',
							wr_password				= '{$wr_password}',
							wr_datetime = '".G5_TIME_YMDHIS."',
							wr_last = '".G5_TIME_YMDHIS."',
							wr_ip = '{$_SERVER['REMOTE_ADDR']}'
							";	

				sql_query($sqla);
				
			}
				

		}

	}catch (exception $e) {

		echo '엑셀파일을 읽는도중 오류가 발생하였습니다.';

	}


}

include_once (G5_PATH.'/head.sub.php');
?>
<link href="<?php echo G5_ADMIN_URL?>/css/admin.css" media="all" rel="stylesheet">
<style>
	body{background:#fff;}
</style>
<div class="new_win">
    <h1>대기자현황 엑셀등록</h1>

    <div class="local_desc01 local_desc">
        <p>엑셀 등록을 완료했습니다.</p>
    </div>
   

    <div class="btn_win01 btn_win">
        <button type="button" onclick="opener.location.reload(); window.close();">창닫기</button>
    </div>

</div>

<?php
include_once(G5_PATH.'/tail.sub.php');
?>