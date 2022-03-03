<?php
//error_reporting(E_ALL); ini_set("display_errors", 1);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

/* 테마의 라이센스 명칭을 절대 삭제하지 마십시오. 테마스킨폴더명을 변경하시더라도 수정하지 마십시오. 삭제나 수정시 오작동할 수 있으며, 불법사용으로 간주될 수 있습니다.*/
$theme_license = "daontheme_business#08_2021-03-17"; 
$css_license = "9xvST73";
$GNUBOARD_VERSION = "5.4.5.2"; //본 테마에 적용된 그누보드 버전입니다.
$OPTIMIZE_VER = "3";  //수정 삭제하지 마세요.
/* 테마의 라이센스 명칭을 절대 삭제하지 마십시오. 테마스킨폴더명을 변경하시더라도 수정하지 마십시오. 삭제나 수정시 오작동할 수 있으며, 불법사용으로 간주될 수 있습니다.*/


// 테마가 지원하는 장치 설정 pc, mobile
// 선언하지 않거나 값을 지정하지 않으면 그누보드5의 설정을 따른다.
// G5_SET_DEVICE 상수 설정 보다 우선 적용됨
define('G5_THEME_DEVICE', 'pc');

$theme_config = array();

// 갤러리 이미지 수 등의 설정을 지정하시면 게시판관리에서 해당 값을
// 가져오기 기능을 통해 게시판 설정의 해당 필드에 바로 적용할 수 있습니다.
// 사용하지 않는 스킨 설정은 값을 비워두시면 됩니다.

$theme_config = array(
    'set_default_skin'          => true,   // 기본환경설정의 최근게시물 등의 기본스킨 변경여부 true, false
    'preview_board_skin'        => 'daon_basic', // 테마 미리보기 때 적용될 기본 게시판 스킨
    'preview_mobile_board_skin' => 'basic', // 테마 미리보기 때 적용될 기본 모바일 게시판 스킨
    'cf_member_skin'            => 'daon', // 회원 스킨
    'cf_mobile_member_skin'     => 'basic', // 모바일 회원 스킨
    'cf_new_skin'               => 'daon', // 최근게시물 스킨
    'cf_mobile_new_skin'        => 'basic', // 모바일 최근게시물 스킨
    'cf_search_skin'            => 'daon', // 검색 스킨
    'cf_mobile_search_skin'     => 'basic', // 모바일 검색 스킨
    'cf_connect_skin'           => 'daon', // 접속자 스킨
    'cf_mobile_connect_skin'    => 'basic', // 모바일 접속자 스킨
    'cf_faq_skin'               => 'daon', // FAQ 스킨
    'cf_mobile_faq_skin'        => 'basic', // 모바일 FAQ 스킨
    'bo_gallery_cols'           => 3,       // 갤러리 이미지 수
    'bo_gallery_width'          => 370,     // 갤러리 이미지 폭
    'bo_gallery_height'         => 270,     // 갤러리 이미지 높이
    'bo_mobile_gallery_width'   => 125,     // 모바일 갤러리 이미지 폭
    'bo_mobile_gallery_height'  => 100,     // 모바일 갤러리 이미지 높이
    'bo_image_width'            => 1000,     // 게시판 뷰 이미지 폭
    'qa_skin'                   => 'daon', // 1:1문의 스킨
    'qa_mobile_skin'            => 'basic'  // 1:1문의 모바일 스킨
);


/* 아래는 수정,삭제하지 마십시오. */
if(!preg_match("/\/adm\/theme\.php/", $_SERVER['PHP_SELF']) && !preg_match("/\/adm\/theme_config_load\.php/", $_SERVER['PHP_SELF']) && !preg_match("/\/adm\/theme_update\.php/", $_SERVER['PHP_SELF'])){
	include G5_THEME_PATH."/theme.menu.php";		
	include G5_THEME_PATH."/theme.daon.php";	
	include G5_THEME_PATH."/theme.subtop.php";
}