<?php
// 음력 절기 파일, 기념일 추가시 else if 구문 복사해서 사용하세요. 한자리 날짜는 한자리로 써야 합니다.

function lunar_day_a($myarray){

	//if($myarray['month'].'/'.$myarray['day']=="1/15" ) $annivmoonday="<span color=blue>대보름</span>" ;
	//if($myarray['month'].'/'.$myarray['day']=="5/5" ) $annivmoonday="<span color=blue>단오</span>" ;

	if($myarray['month'].'/'.$myarray['day']=="12/30" ){
		$annivmoonday="<span style='color:#aaaaaa' class='txt'>설연휴</span>" ;
	}else if($myarray['month'].'/'.$myarray['day']=="1/1"){
		$annivmoonday="<span style='color:#aaaaaa' class='txt'>설날</span>" ;
	}else if($myarray['month'].'/'.$myarray['day']=="1/2"){
		$annivmoonday="<span style='color:#aaaaaa' class='txt'>설연휴</span>" ;
	}else if($myarray['month'].'/'.$myarray['day']=="4/8"){
		$annivmoonday="<span style='color:#aaaaaa' class='txt'>석가탄신일</span>" ;
	}else if($myarray['month'].'/'.$myarray['day']=="8/14"){
		$annivmoonday="<span style='color:#aaaaaa' class='txt'>추석연휴</span>" ;
	}else if($myarray['month'].'/'.$myarray['day']=="8/15"){
		$annivmoonday="<span style='color:#aaaaaa' class='txt'>추석</span>" ;
	}else if($myarray['month'].'/'.$myarray['day']=="8/16"){
		$annivmoonday="<span style='color:#aaaaaa' class='txt'>추석연휴</span>" ;
	}else $annivmoonday="" ;

	return $annivmoonday;
}
?>