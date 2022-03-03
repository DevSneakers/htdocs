<?php
/*
	다온테마 커스텀페이지 짧은주소 별도설정
			
	******************************************************************************

	필독 주요공지

	FTP를 통해 직접 작업하시는 커스텀페이지는 짧은주소를 지원하지 않습니다.
	다만, 짧은주소 사용을 원하시는 분께 다온테마에서 관련 프로그램을 제공해 드리고 있으나, 
	서버환경등 여러가지 제반사항과 페이지 생성 규칙등 환경이 맞지 않으면 사용이 불가능하며,
	짧은주소 적용이 되지 않는다 해서, 무료, 유료 수정 지원 대상에 해당되지 않으며, 관련된 문의에 대한 답변 또한 불가능합니다.
	만약, 짧은주소 사용을 원하시는데, 
	커스텀페이지 짧은주소 별도설정이 어려우시다면, 관리자모드 > 내용관리(/adm/contentlist.php)로 커스텀 페이지를 등록하시는 것이 바람직합니다.

	******************************************************************************
	
	1. 리눅스계열 apache 서버만 지원함. 
	    nginx 서버는 지원이 안되며, 위 주요공지를 참고해 내용관리로 등록하세요.
			
		1-1. 주의사항 숙지
			1-1-0. 커스텀 페이지를 짧은주소 형태로 사용하려면 반드시 /테마폴더명/html/내에 페이지를 작업하셔야 합니다. 다른 경로에서 작업시 지원이 안됩니다.
			1-1-1. 기본 테마폴더명을 바꾸시면 작동이 안됩니다. 기본 테마폴더명이 daontheme_business01 이면 그대로 사용해야 합니다. 
					  daontheme_business01 => basic1 등으로 폴더명을 변경하시면 작동하지 않습니다.
			1-1-2. 파일확장자를 .php로 만드셔야 합니다. .htm .html .php3 확장자는 지원이 안됩니다.
			1-1-3. 파일명은 영문소문자와 숫자로만 만드셔야 합니다.
			ex) 테마폴더명이 daontheme_business01 일 경우 /theme/daontheme_business01/html/company/01.php 로 커스텀페이지 작업


		1-2. 별도설정 방법 
			1-2-0. 관리자모드에서 먼저 짧은주소를 설정합니다. 위 1번 참고.
			1-2-1. 관리자모드의 게시판관리로 이동하여 게시판 코드를 누른 후 짧은 주소가 적용됐는지 확인합니다.
			1-2-2. theme.menu.php 에서 기존의 긴주소로 메뉴를 세팅합니다.
			1-2-3. 브라우저에서 http://도메인/그누보드설치폴더가있다면설치폴더명/theme/테마폴더명/theme.shorturl.php 를 실행합니다. 
					  ex) 테마폴더명이 daontheme_business01 일 경우 http://도메인/그누보드설치폴더가있다면설치폴더명/theme/daontheme_business01/theme.shorturl.php 
			1-2-4. 1-2-3의 실행된 페이지의 브라우저의 내용을 카피합니다.
			1-2-5. ftp상의 루트/.htaccess 를 엽니다. (/adm/ 폴더와 동일한 위치의 .htaccess 파일임)
			1-2-6. </IfModule> 위에 카피한 내용을 삽입합니다.
			1-2-7. 짧은주소를 실행하여 해당 웹페이지가 보이는지 확인합니다.	

*/

error_reporting(E_ALL); ini_set("display_errors", 1);
include "_common.php";

if(!$is_admin){
	alert("관리자모드 로그인 후 파일을 다시 실행해 주세요.");
}
include "theme.menu.php";
?>

<html>
<meta charset="utf-8">
<style>
	body{padding:30px;}
	body,table,tr,td{font-size:14px;}
	hr{border:0px; border-top:1px solid #ccc;}
</style>
<body>
<?php
//print_r($_SERVER);

if($config['cf_bbs_rewrite'] == "0"){
	exit("짧은주소를 사용하지 않아 변환할 주소가 없습니다.");
}

echo "<hr>";

if($config['cf_bbs_rewrite'] == "1"){
	echo "<b>짧은주소 : 숫자형</b>";
}else{
	echo "<b>짧은주소 : 글이름형</b>";
}

echo "<br>짧은주소는 관리자모드 설정에 따라 2가지 형태로 제공하며, 관리자모드 설정후 각각 변환해야 합니다.<br>.htaccess 파일적용 코드 : 복사후 .htaccess 파일 </IfModule> 위에 붙여넣으세요.<hr><br>";
foreach($first_menu as $a => $b){			
	if(preg_match("/\/html\//", $b)){		

		if(!preg_match("/\.php/", $b)) exit("확장자가 .php가 아닙니다.");
		
		$new_url = str_replace(G5_THEME_URL,"",$b);
		$new_url = str_replace("/html/","",$new_url);
		$new_url_arr = @explode("/",$new_url);
		
		$coa = 2;
		foreach($new_url_arr as $aa => $bb){
			if(trim($bb)){		
				if(preg_match("/\./",$bb)){				
					$bb_arr = explode(".",$bb);								
					if($config['cf_bbs_rewrite'] == "1"){
						$a_url[] = "([^/]+)$";
						$b_url[] = "$".$coa.".".$bb_arr[1];
					}else if($config['cf_bbs_rewrite'] == "2"){
						$a_url[] = "([^/]+)/([^/]+)/$";
						$b_url[] = "$".$coa.".".$bb_arr[1]."?daon_pg_seo_title=$".($coa+1);
					}
				}else{
					$a_url[] = "([0-9a-zA-Z_]+)";
					$b_url[] = "$".$coa;
				}
				$coa++;
			}
		}

		$RewriteRule_daon[] = "RewriteRule ^([0-9a-zA-Z_]+)/".implode("/",$a_url)."  theme/daontheme_$1/html/".implode("/",$b_url)."  [QSA,L]"."<br>";		
		
	}
	unset($a_url,$b_url,$bb_arr,$new_url_arr);
}

foreach($second_menu as $ka => $va){
	foreach($second_menu[$ka] as $a => $b){
		if(preg_match("/\/html\//", $b)){		
			
			if(!preg_match("/\.php/", $b)) exit("확장자가 .php가 아닙니다.");
		
			$new_url = str_replace(G5_THEME_URL,"",$b);
			$new_url = str_replace("/html/","",$new_url);
			$new_url_arr = @explode("/",$new_url);
			
			$coa = 2;
			foreach($new_url_arr as $aa => $bb){
				if(trim($bb)){		
					if(preg_match("/\./",$bb)){				
						$bb_arr = explode(".",$bb);								
						if($config['cf_bbs_rewrite'] == "1"){
							$a_url[] = "([^/]+)$";
							$b_url[] = "$".$coa.".".$bb_arr[1];
						}else if($config['cf_bbs_rewrite'] == "2"){
							$a_url[] = "([^/]+)/([^/]+)/$";
							$b_url[] = "$".$coa.".".$bb_arr[1]."?daon_pg_seo_title=$".($coa+1);
						}
					}else{
						$a_url[] = "([0-9a-zA-Z_]+)";
						$b_url[] = "$".$coa;
					}
					$coa++;
				}
			}
			$RewriteRule_daon[] = "RewriteRule ^([0-9a-zA-Z_]+)/".implode("/",$a_url)."  theme/daontheme_$1/html/".implode("/",$b_url)."  [QSA,L]"."<br>";		
			
		}
		unset($a_url,$b_url,$bb_arr,$new_url_arr);						
	}
}	

$RewriteRule_daon = array_unique($RewriteRule_daon);


echo implode("\n",$RewriteRule_daon);
echo "<br>";
echo "<br><br><br><br>";
echo "<hr>변환된 짧은주소 : theme.menu.php 에 세팅할 짧은주소입니다.<hr><br><table>";


foreach($first_menu as $a => $b){			
	if(preg_match("/\/html\//", $b)){		
		
		$new_url = str_replace(G5_THEME_URL,"",$b);
		$new_url = str_replace("/html/","/".str_replace("daontheme_","",$config['cf_theme'])."/",$new_url);
		$new_url = preg_replace('/\.[^.]+$/','',$new_url);

		if($config['cf_bbs_rewrite'] == "1") $a_url[] = $new_url;
		else if($config['cf_bbs_rewrite'] == "2"){
			$a_url[] = $new_url."/".preg_replace("/\s/",'-',$a)."/";
		}
	
		echo "<tr><td width=120>".$a."</td><td>G5_URL.\"".implode('/',$a_url)."\"</td></tr>";
	}
	unset($a_url);	
}	
foreach($second_menu as $ka => $va){
	foreach($second_menu[$ka] as $a => $b){
		if(preg_match("/\/html\//", $b)){				
			$new_url = str_replace(G5_THEME_URL,"",$b);
			$new_url = str_replace("/html/","/".str_replace("daontheme_","",$config['cf_theme'])."/",$new_url);
			$new_url = preg_replace('/\.[^.]+$/','',$new_url);

			if($config['cf_bbs_rewrite'] == "1") $a_url[] = $new_url;
			else if($config['cf_bbs_rewrite'] == "2"){
				$a_url[] = $new_url."/".preg_replace("/\s/",'-',$a)."/";
			}
			echo "<tr><td width=120>".$a."</td><td>G5_URL.\"".implode('/',$a_url)."\"</td></tr>";
		}
		unset($a_url);	
	}
}	


echo "</table><br>";
echo "<br><br><br><br>";
echo "<br><hr>";
echo "변환된 짧은주소 확인용 : 링크주소를 클릭하세요.<hr><br><table>";


foreach($first_menu as $a => $b){			
	if(preg_match("/\/html\//", $b)){				
		$new_url = str_replace(G5_THEME_URL,"",$b);
		$new_url = str_replace("/html/","/".str_replace("daontheme_","",$config['cf_theme'])."/",$new_url);
		$new_url = preg_replace('/\.[^.]+$/','',$new_url);

		if($config['cf_bbs_rewrite'] == "1") $a_url[] = $new_url;
		else if($config['cf_bbs_rewrite'] == "2"){
			$a_url[] = $new_url."/".preg_replace("/\s/",'-',$a)."/";
		}		
		echo "<tr><td width=120>".$a."</td><td><a href='".G5_URL."".implode('/',$a_url)."' target='_blank'>".G5_URL."",implode('/',$a_url)."</a></td></tr>";
	}
	unset($a_url);	
}	
foreach($second_menu as $ka => $va){
	foreach($second_menu[$ka] as $a => $b){
		if(preg_match("/\/html\//", $b)){				
			$new_url = str_replace(G5_THEME_URL,"",$b);
			$new_url = str_replace("/html/","/".str_replace("daontheme_","",$config['cf_theme'])."/",$new_url);
			$new_url = preg_replace('/\.[^.]+$/','',$new_url);

			if($config['cf_bbs_rewrite'] == "1") $a_url[] = $new_url;
			else if($config['cf_bbs_rewrite'] == "2"){
				$a_url[] = $new_url."/".preg_replace("/\s/",'-',$a)."/";
			}		
			echo "<tr><td width=120>".$a."</td><td><a href='".G5_URL."".implode('/',$a_url)."' target='_blank'>".G5_URL."",implode('/',$a_url)."</a></td></tr>";
		}
		unset($a_url);	
	}
}	

echo "</table><br><br><br>";

?>
</body>
</html>