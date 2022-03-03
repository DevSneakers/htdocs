<?php
	
/*

1차메뉴별 서브상단이미지를 세팅합니다.
1차 메뉴는 theme.menu.php 에서 세팅합니다.


서브 이미지가 노출되지 않는 경우
1. 아래에서 설정한 대메뉴명이나 이미지의 경로가 틀렸을 경우 : 대메뉴명이 "회 사 소 개" 이면  공백까지 똑같이 입력해야 합니다.
	입롁예) "회 사 소 개"          => G5_THEME_URL."/html/image/sub_visual01.jpg",   

2. FTP로 수정하는 커스텀페이지의 상위메뉴(대메뉴 $tmenu_ )와 타이틀($g5['title'])을 설정을 하지 않았거나 틀렸을 경우
   테마설명서 > 테마 사용 안내 > 02번 커스텀페이지 사용 방법(FTP를 통해 수정/삭제/추가)  참고

3. 이미지가 변경되지 않는 경우는 브라우저 캐시영향일 수 있으므로 브라우저의 캐시를 삭제후 확인해 주세요.

*/


$SUB_BACKGROUND = array(
    "이용안내"          => G5_THEME_URL."/html/image/sub_visual_01.jpg",   
    "참여공간"          => G5_THEME_URL."/html/image/sub_visual_02.jpg",   
	"알립니다"          => G5_THEME_URL."/html/image/sub_visual_03.jpg",    
	"기관안내"          => G5_THEME_URL."/html/image/sub_visual_04.jpg",   
  
	"맴버쉽"			 => G5_THEME_URL."/html/image/sub_visual06.jpg",   //회원관련
	//"대메뉴명"          => "이미지주소", 
	//"대메뉴명"          => "이미지주소", 
);