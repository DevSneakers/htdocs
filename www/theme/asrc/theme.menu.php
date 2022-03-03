<?php
/**************************************
	
	메뉴설정 설명입니다.
	메뉴설정은 2가지로 선택이 가능합니다.

	1. 관리자모드의 메뉴설정 사용	: $daon_admin_menu = true; 로 설정 단, 큰타이틀 하단의 짧은 설명문구 는 사용이 불가능합니다.		
		1-1. 관리자모드 > 메뉴관리가 미등록 상태라면 다온테마 데모의 메뉴가 관리자모드에 자동으로 등록됩니다.
		1-2. 만약 관리자모드 > 메뉴관리가 이미 등록된 상태라면 그대로 유지합니다.

	2. 직접설정						: $daon_admin_menu = false; 로 설정 후 아래쪽의 메뉴설정대로 입력

	3. 게시판은 직접 생성하셔야 합니다. ( 관리자모드 > 게시판관리 /adm/board_list.php )


	자주하시는질문(FAQ) 과 게시판의 타이틀은 head.php 에서 재정비 합니다.  
	head.php 에서 " 게시판, faq, 회원관련 등 그누보드 내부 프로그램 페이지 상단연결 " 로 검색하세요.
	

	짧은주소 사용안내(그누보드 5.4용 이하버전 지원안됨)
	
	1. 짧은주소 사용은 관리자 모드에서 설정이 가능합니다. (관리자모드 > 기본환경설정 : /adm/config_form.php#anc_cf_url )	
		짧은주소는 내용관리에서 등록한 페이지와 게시판에 한해 적용됩니다.
		짧은주소는 테마디자인과 상관이 없는 그누보드 고유 기능으로 서버에 따라 직접 설정하셔야 할 수 있으며,(관리자모드 > 기본환경설정에  안내되어 있음)
		100% 적용을 확신할 수 없으며, 무료, 유료 수정 지원대상이 아닙니다.

	2. 설정된 짧은주소는 관리자모드 게시판관리에서 게시판 코드를 누르시거나, 내용관리 페이지에서 보기 버튼을 누르시면 주소 확인이 가능합니다.
	    FTP를 통해 직접 작업하시는 커스텀 페이지는  theme.shorturl.php 에서 세팅합니다.
	
	3. 메뉴세팅을 짧은주소가 아닌 기존 긴주소로 세팅하시더라도, 짧은주소를 설정하면 자동으로 메뉴 링크가 짧은주소로 변경됩니다. 
		3-1. 예외사항
			3-1-1. 커스텀페이지는 자동변환되지 않으므로, 변환된 짧은주소로 세팅하셔야 합니다. ( theme.shorturl.php 로 세팅및확인 )
			3-1-2. 내용관리에서 등록한 페이지와 게시판에 한해 자동 변경됩니다.	

**************************************/


$daon_admin_menu = false; //관리자모드의 메뉴관리를 사용하시려면 true 로, 아니면 false로 변경하세요. 
$second_menu_view = true; //2차메뉴가 필요없으시면 false 로 바꾸세요. 2차메뉴 삭제로 인해 전체 css파일에서 메뉴 배경과 높이를 조정하셔야 합니다.(전체css파일명은 설명서 pdf 파일에서 확인가능)

$first_menu = array(); $first_menu_target = array(); $first_menu_so_title = array();
$second_menu = array(); $second_menu_target = array(); $second_menu_so_title = array();


/*
	메뉴직접설정 예제

	1차 메뉴는 아래와 같이 입력합니다.

	$first_menu["1차메뉴명"] = "링크주소";
	$first_menu_target["1차메뉴명"] = "타겟";
	$first_menu_so_title["1차메뉴명"] = "서브페이지 타이틀 아래 문구입니다.";


		2차 메뉴는 아래와 같이 입력합니다.
		
		$second_menu["1차메뉴명"]["2차메뉴명"] = "링크주소";
		$second_menu_target["1차메뉴명"]["2차메뉴명"] = "타겟";
		$second_menu_so_title["1차메뉴명"]["2차메뉴명"] = "서브페이지 타이틀 아래 문구입니다.";

	------------------------------------------------------------------------------------------------

	ex)	회사소개 > 인사말 		을 세팅한다면

	1차메뉴 설정($first_menu)
	
		$first_menu["회사소개"] = G5_THEME_URL."/html/company/01.php";
		$first_menu_target["회사소개"] = "_self";
		$first_menu_so_title["회사소개"] = "서브페이지 타이틀 아래 문구입니다.";	

	
		2차메뉴 설정($second_menu)

			$second_menu["회사소개"]["인사말"] = G5_THEME_URL."/html/company/01.php";
			$second_menu_target["회사소개"]["인사말"] = "_self";
			$second_menu_so_title["회사소개"]["인사말"] = "서브페이지 타이틀 아래 문구입니다.";		


	G5_THEME_URL : 관리자모드에서 선택한 테마의 기본경로
	G5_BBS_URL : 선택한 테마에 맞는 게시판 경로		

*/


//1차 메뉴 입력



$first_menu["이용안내"] = G5_THEME_URL."/html/0001/001.php";
$first_menu_target["이용안내"] = "_self";
$first_menu_so_title["이용안내"] = "";	//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

$first_menu["참여공간"] = G5_THEME_URL."/html/0002/006.php";
$first_menu_target["참여공간"] = "_self";
$first_menu_so_title["참여공간"] = "";	//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

$first_menu["알립니다"] = G5_BBS_URL."/board.php?bo_table=1004";
$first_menu_target["알립니다"] = "_self";
$first_menu_so_title["알립니다"] = "질문주시면 빠른 시간내에 피드백드리겠습니다.";

$first_menu["기관안내"] = G5_THEME_URL."/html/0004/008.php";
$first_menu_target["기관안내"] = "_self";
$first_menu_so_title["기관안내"] = "";	//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.




//2차 메뉴 입력

/***			이용안내			***********************************************************************/
$second_menu["이용안내"]["이용절차"] = G5_THEME_URL."/html/0001/001.php";
$second_menu_target["이용안내"]["이용절차"] = "_self";
$second_menu_so_title["이용안내"]["이용절차"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

$second_menu["이용안내"]["사업별 안내"] = G5_THEME_URL."/html/0001/002-01.php";
$second_menu_target["이용안내"]["사업별 안내"] = "_self";
$second_menu_so_title["이용안내"]["사업별 안내"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

$second_menu["이용안내"]["대기자현황"] = G5_THEME_URL."/html/wait/wait_pass.php";
$second_menu_target["이용안내"]["대기자현황"] = "_self";
$second_menu_so_title["이용안내"]["대기자현황"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

$second_menu["이용안내"]["주간식단안내"] = G5_THEME_URL."/html/002/002.php";
$second_menu_target["이용안내"]["주간식단안내"] = "_self";
$second_menu_so_title["이용안내"]["주간식단안내"] = "";

$second_menu["이용안내"]["무료셔틀 버스"] = G5_THEME_URL."/html/0001/005.php";
$second_menu_target["이용안내"]["무료셔틀 버스"] = "_self";
$second_menu_so_title["이용안내"]["무료셔틀 버스"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

$second_menu["이용안내"]["해피버스"] = G5_THEME_URL."/html/0001/0051.php";
$second_menu_target["이용안내"]["해피버스"] = "_self";
$second_menu_so_title["이용안내"]["해피버스"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

/***			참여공간			***********************************************************************/
$second_menu["참여공간"]["후원안내 및 신청"] = G5_THEME_URL."/html/0002/006.php";
$second_menu_target["참여공간"]["후원안내 및 신청"] = "_self";
$second_menu_so_title["참여공간"]["후원안내 및 신청"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

$second_menu["참여공간"]["자원봉사 안내 및 신청"] = G5_THEME_URL."/html/0002/007.php";
$second_menu_target["참여공간"]["자원봉사 안내 및 신청"] = "_self";
$second_menu_so_title["참여공간"]["자원봉사 안내 및 신청"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

$second_menu["참여공간"]["견학/실습/대관"] = G5_THEME_URL."/html/0002/0071.php";
$second_menu_target["참여공간"]["견학/실습/대관"] = "_self";
$second_menu_so_title["참여공간"]["견학/실습/대관"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

$second_menu["참여공간"]["장애인식개선"] = G5_BBS_URL."/board.php?bo_table=1002";
$second_menu_target["참여공간"]["장애인식개선"] = "_self";
$second_menu_so_title["참여공간"]["장애인식개선"] = "";

$second_menu["참여공간"]["고객의 소리"] = G5_BBS_URL."/board.php?bo_table=1003";
$second_menu_target["참여공간"]["고객의 소리"] = "_self";
$second_menu_so_title["참여공간"]["고객의 소리"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

$second_menu["참여공간"]["자유게시판"] = G5_BBS_URL."/board.php?bo_table=1010";
$second_menu_target["참여공간"]["자유게시판"] = "_self";
$second_menu_so_title["참여공간"]["자유게시판"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

/***			알립니다			***********************************************************************/
$second_menu["알립니다"]["공지사항"] = G5_BBS_URL."/board.php?bo_table=1004";
$second_menu_target["알립니다"]["공지사항"] = "_self";
$second_menu_so_title["알립니다"]["공지사항"] = "안양수리장애인종합복지관입니다.";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

//$second_menu["알립니다"]["프로그램게시판"] = G5_BBS_URL."/board.php?bo_table=1005";
//$second_menu_target["알립니다"]["프로그램게시판"] = "_self";
//$second_menu_so_title["알립니다"]["프로그램게시판"] = "안양수리장애인종합복지관입니다.";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

$second_menu["알립니다"]["수리소식"] = G5_BBS_URL."/board.php?bo_table=1006";
$second_menu_target["알립니다"]["수리소식"] = "_self";
$second_menu_so_title["알립니다"]["수리소식"] = "안양수리장애인종합복지관입니다.";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

$second_menu["알립니다"]["발간자료"] = G5_BBS_URL."/board.php?bo_table=1008";
$second_menu_target["알립니다"]["발간자료"] = "_self";
$second_menu_so_title["알립니다"]["발간자료"] = "안양수리장애인종합복지관입니다.";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

$second_menu["알립니다"]["복지관 일정"] = G5_BBS_URL."/board.php?bo_table=schedule";
$second_menu_target["알립니다"]["복지관 일정"] = "_self";
$second_menu_so_title["알립니다"]["복지관 일정"] = "안양수리장애인종합복지관입니다.";

$second_menu["알립니다"]["복지 정보"] =  G5_BBS_URL."/board.php?bo_table=1009";
$second_menu_target["알립니다"]["복지 정보"] = "_self";
$second_menu_so_title["알립니다"]["복지 정보"] = "안양수리장애인종합복지관입니다.";

/***			기관안내			***********************************************************************/
$second_menu["기관안내"]["인사말"] = G5_THEME_URL."/html/0004/008.php";
$second_menu_target["기관안내"]["인사말"] = "_self";
$second_menu_so_title["기관안내"]["인사말"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

$second_menu["기관안내"]["기관소개"] = G5_THEME_URL."/html/0004/009-01.php";
$second_menu_target["기관안내"]["기관소개"] = "_self";
$second_menu_so_title["기관안내"]["기관소개"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

$second_menu["기관안내"]["법인소개"] = "http://goodhelpers.or.kr/";
$second_menu_target["기관안내"]["법인소개"] = "_blank";
$second_menu_so_title["기관안내"]["법인소개"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

$second_menu["기관안내"]["조직현황"] = G5_THEME_URL."/html/00041/011.php";
$second_menu_target["기관안내"]["조직현황"] = "_self";
$second_menu_so_title["기관안내"]["조직현황"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

$second_menu["기관안내"]["권익옹호"] = G5_THEME_URL."/html/0004/012.php";
$second_menu_target["기관안내"]["권익옹호"] = "_self";
$second_menu_so_title["기관안내"]["권익옹호"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

$second_menu["기관안내"]["시설안내"] = G5_THEME_URL."/html/0004/013.php";
$second_menu_target["기관안내"]["시설안내"] = "_self";
$second_menu_so_title["기관안내"]["시설안내"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.


//여기서부터 수정,삭제하지 마십시오.
if($daon_admin_menu == true){	
	unset($first_menu, $first_menu_target, $first_menu_so_title);
	unset($second_menu, $second_menu_target, $second_menu_so_title);

	$sql = " select * from {$g5['menu_table']} where me_use = '1' and length(me_code) = '2' order by me_order, me_id ";
	$result = sql_query($sql, false);
	$first_menu = array();
	$first_menu_target = array();
	$second_menu = array();
	$second_menu_target = array();

	for ($i=0; $row=sql_fetch_array($result); $i++) {
		$first_menu[$row['me_name']] = $row['me_link'];
		$first_menu_target[$row['me_name']] = "_".$row['me_target'];		

		$sql2 = " select * from {$g5['menu_table']} where me_use = '1' and length(me_code) = '4' and substring(me_code, 1, 2) = '{$row['me_code']}' order by me_order, me_id ";
		$result2 = sql_query($sql2);
		for ($k=0; $row2=sql_fetch_array($result2); $k++) {
			
			$second_menu[$row['me_name']][$row2['me_name']] = $row2['me_link'];
			$second_menu_target[$row['me_name']][$row2['me_name']] = "_".$row2['me_target'];
			
		}
	}	
}
//여기까지 수정,삭제하지 마십시오.




/***			회원			***********************************************************************/
if ($is_member) {
	
	$second_menu["맴버쉽"]["로그아웃"] = G5_BBS_URL."/logout.php";
	$second_menu_target["맴버쉽"]["로그아웃"] = "_self";
	$second_menu_so_title["맴버쉽"]["로그아웃"] = "회원서비스입니다.";

	$second_menu["맴버쉽"]["정보수정"] = G5_BBS_URL."/member_confirm.php?url=".G5_BBS_URL."/register_form.php";
	$second_menu_target["맴버쉽"]["정보수정"] = "_self";
	$second_menu_so_title["맴버쉽"]["정보수정"] = "회원서비스입니다.";

	$second_menu["맴버쉽"]["개인정보처리방침"] = G5_BBS_URL."/content.php?co_id=privacy";
	$second_menu_target["맴버쉽"]["개인정보처리방침"] = "_self";
	$second_menu_so_title["맴버쉽"]["개인정보처리방침"] = "개인정보처리방침을 준수합니다.";

	$second_menu["맴버쉽"]["서비스 이용약관"] = G5_BBS_URL."/content.php?co_id=provision";
	$second_menu_target["맴버쉽"]["서비스 이용약관"] = "_self";
	$second_menu_so_title["맴버쉽"]["서비스 이용약관"] = "서비스 이용약관을 준수합니다.";

	$second_menu["맴버쉽"]["회원탈퇴"] = G5_BBS_URL."/member_confirm.php?url=".G5_BBS_URL."/member_leave.php";
	$second_menu_target["맴버쉽"]["회원탈퇴"] = "_self";
	$second_menu_so_title["맴버쉽"]["회원탈퇴"] = "회원서비스입니다.";

}else{

	$second_menu["맴버쉽"]["로그인"] = G5_BBS_URL."/login.php";
	$second_menu_target["맴버쉽"]["로그인"] = "_self";
	$second_menu_so_title["맴버쉽"]["로그인"] = "회원서비스입니다.";

	$second_menu["맴버쉽"]["회원가입"] = G5_BBS_URL."/register.php";
	$second_menu_target["맴버쉽"]["회원가입"] = "_self";
	$second_menu_so_title["맴버쉽"]["회원가입"] = "회원서비스입니다.";

	$second_menu["맴버쉽"]["개인정보처리방침"] = G5_BBS_URL."/content.php?co_id=privacy";
	$second_menu_target["맴버쉽"]["개인정보처리방침"] = "_self";
	$second_menu_so_title["맴버쉽"]["개인정보처리방침"] = "개인정보처리방침을 준수합니다.";

	$second_menu["맴버쉽"]["서비스 이용약관"] = G5_BBS_URL."/content.php?co_id=provision";
	$second_menu_target["맴버쉽"]["서비스 이용약관"] = "_self";
	$second_menu_so_title["맴버쉽"]["서비스 이용약관"] = "서비스 이용약관을 준수합니다.";	

}