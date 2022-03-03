<?php
	include "../../../../common.php";
	if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

	/*
		
		이 파일을 절대 수정, 삭제하지 마세요.  CSS는 테마폴더명/html/css_js/common.dt_ori.테마명.css 에서 수정하시면 됩니다
	
	*/
	
	$check_keys = array('fname', 'type', 'token', 'url');
	$_GETA = $_GET;

	while(list($k, $v) = each($_GETA)){
		if(!in_array($k, $check_keys)) exit('<meta charset="utf-8">잘못된 접근입니다.(A)');
	}	

	foreach($check_keys as $key){
		$$key = $_GET[$key] = isset($_GET[$key]) ? strip_tags(clean_xss_attributes($_GET[$key])) : '';
	}

	if(!$token) exit('<meta charset="utf-8">잘못된 접근입니다.(B)');


	$token = base64_decode($token);
	$nowt = time();
	$now = str_replace(" ","",date('l jS \of F Y h:i:s A')."_".$nowt);
	$ex_token = explode("_",$token);
	
	
	if($REMOTE_ADDR != $arrow_remote_addr){	

	if($nowt != $ex_token[1]){ //로딩속도가 다를때
		if($_SERVER['HTTP_REFERER']){			
			if(!preg_match("/".$_SERVER['HTTP_HOST']."/", $_SERVER['HTTP_REFERER'])){
				exit('<meta charset="utf-8">잘못된 접근입니다.(C)');
			}
			$ex_it = false;
			for($i=0; $i<=30; $i++){
				if($nowt == ($ex_token[1]+$i)){
					$ex_it = false;
				}
			}
			if($ex_it == true) exit('<meta charset="utf-8">잘못된 접근입니다.(D)');
		}else{
			if($now !=  $token) exit('<meta charset="utf-8">잘못된 접근입니다.(E)');
		}
		
	}else{
		if($now !=  $token){
			exit('<meta charset="utf-8">잘못된 접근입니다.F');
		}
	}	
	
	}

	


	$fname = base64_decode($fname);
	
	if(!$common_css_src){
		$fname .= ".dt_ori.".substr(str_replace("#",".",$theme_license),0,-11).".".$css_license;
	}else{
		$fname .= $common_css_src;
	}		
	
	$fname = $fname.".".$type;

	if($url){
		$url_A = str_replace($_SERVER['HTTP_HOST'],"",G5_URL);
		$url_A = str_replace(array('http://','https://'), '', $url_A);
		$url_A = str_replace("", '', $url_A);

		$url_en = str_replace($url_A."/".G5_THEME_DIR."/".$config['cf_theme'],"",$url);
		$f_file = G5_THEME_PATH.$url_en.$fname;
	}else{
		$f_file = G5_THEME_PATH."/html/css_js/".$fname;
	}

	$fp = fopen($f_file,"r");
	$fr = fread($fp,filesize($f_file));
	fclose($fp);		
	
	$optimize_txt = $fr;


	if(!$common_css_src){

	
	$fr_arr = explode("\n",$optimize_txt);
	$optimize_txt_a = "";
	$golbengi = array();

	foreach($fr_arr as $k => $v){			
		if(!preg_match("/@charset/i", $v) && !preg_match("/@import/i", $v)){
		  $optimize_txt_a .=  $v;
		}else{
		  $golbengi[] =  $v;
		}
	}
	if(trim($optimize_txt_a)) $optimize_txt = $optimize_txt_a;

	$optimize_txt = preg_replace('/\/\*(.*?)\*\//is', '', $optimize_txt);
	$optimize_txt = preg_replace('/<!--(.*?)-->/is', '', $optimize_txt);
	$optimize_txt = preg_replace('/\/\*((?!\*\/).)*\*\//', '', $optimize_txt); 
	$optimize_txt = preg_replace('/\s{2,}/', ' ', $optimize_txt);
	$optimize_txt = preg_replace('/\s*([:;{}])\s*/', '$1', $optimize_txt);		
	$optimize_txt = preg_replace('/;}/', '}', $optimize_txt);
	$optimize_txt = preg_replace('/\r\n|\r|\n/','',$optimize_txt);	
	$optimize_txt = preg_replace('/\t/', ' ', $optimize_txt);	


	
	if($OPTIMIZE_VER > 2){

	$css = array();
	$media_css = array();
	$keyframe_css = array();
	
	$css_txt = "";

	//미디어쿼리 key프레임 삭제
	preg_match_all("/\@(.*?)\}\}+/", $optimize_txt, $aa);
	$media_arr = $aa[0];

	$media_txt = implode(" ",$media_arr);
	foreach($media_arr as $k => $v){			
		$optimize_txt = str_replace($v,"",$optimize_txt);
	}

	$br_txt_arr = explode("}",$optimize_txt);
	foreach($br_txt_arr as $k => $v){		
		$br_txt_galho = explode("{",$v);		
		$br_txt_comma = explode(",",$br_txt_galho[0]);

		foreach($br_txt_comma as $kk => $vv){
			$css[] = $vv."{".$br_txt_galho[1]."}";
			$css_txt .= $vv."{".$br_txt_galho[1]."}";
		}	
	}

	
	//미디어쿼리 key프레임 다시 넣음
	$keyframe_txt = "";	
	foreach($media_arr as $k => $v){	

		if(preg_match("/@media/i", $v)){			

			$v = preg_replace("/\@(.*?)\)\{\}/","", $v);

			preg_match_all("/\@(.*?)\)\{/", $v, $bb);
			$media_arra = $bb[0];

			$media_txta = str_replace($media_arra[0],"", $v);
			$media_txta = str_replace("}}","}", $media_txta);			
			
			$media_txt_arr = explode("}",$media_txta);
			

			foreach($media_txt_arr as $kk => $vv){

				if(trim($vv)){
					$mediaquery_txt = "";
					$media_txt_galho = explode("{",$vv);				
					$media_txt_comma = explode(",",$media_txt_galho[0]);
					$mediaquery_txt = $media_arra[0];
					foreach($media_txt_comma as $kkk => $vvv){
						$mediaquery_txt .= $vvv."{".$media_txt_galho[1]."}";
					}	
					$mediaquery_txt .= "}";
					
					$media_css[] = $mediaquery_txt;
					$css_txt .= $mediaquery_txt;
				}

			}				

		}else{
			$keyframe_txt = $v;
			$keyframe_css[] = $keyframe_txt;
			$css_txt .= $keyframe_txt;
		}
	}	

	$optimize_txt = $css_txt;
	

	//shuffle($css);
	shuffle($keyframe_css);	
	$optimize_txt = implode(" ",$css); 	
	$optimize_txt .= implode(" ",$keyframe_css);
	$optimize_txt .= implode(" ",$media_css);


	} //ver 3


	if($OPTIMIZE_VER > 1){
	

	//url 체크
	preg_match_all("/url\((.*?)\)/", $optimize_txt, $c);
	$listc = $c[0];
	
	$temp_url = array();
	foreach($listc as $k => $v){	
		$strz = str_replace("'","",$v);
		$strz = str_replace('"',"",$strz);
		$strz = str_replace("url(","",$strz);
		$strz = str_replace(")","",$strz);
		$temp = parse_url($strz);
		if($temp['host']){
			$temp_url[] = $temp['host']; 
		}
	}



	preg_match_all("/\.[0-9a-zA-Z_-]+/", $optimize_txt, $a);
	$list = $a[0];
	
	$optimize_txt_arr = array();
	foreach($list as $k => $v){	
		if(!preg_match("/^\.[[:digit:]]/",$v) && !preg_match("/\.jpg$/",$v) && !preg_match("/\.gif$/",$v) && !preg_match("/\.png$/",$v) && !preg_match("/\.jpeg$/",$v) && !preg_match("/\.bmp$/",$v) && !preg_match("/\.net$/",$v) && !preg_match("/\.com$/",$v) && !preg_match("/\.co\.kr$/",$v) && !preg_match("/\.kr$/",$v) && !preg_match("/\.biz$/",$v) && !preg_match("/\.eot$/",$v) && !preg_match("/\.svg$/",$v) && !preg_match("/\.ttf$/",$v) && !preg_match("/\.woff$/",$v) && !preg_match("/\.woff2$/",$v) && !preg_match("/\.otf$/",$v) && !preg_match("/\.shop$/",$v) && !preg_match("/\.org$/",$v) && !preg_match("/\.or\.kr$/",$v) && !preg_match("/\.me$/",$v) && !preg_match("/\.go\.kr$/",$v) && !preg_match("/\.app$/",$v) && !preg_match("/\.go\.kr$/",$v)){	
			
			$optimize_txt_arr[] = trim($v);	
		}
	}
	
	arsort($optimize_txt_arr);
	foreach($optimize_txt_arr as $k => $v){				
		$replace_t = "[class~=".str_replace(".","",trim($v))."]";
		
		if(count($temp_url) != 0){
			foreach($temp_url as $kk => $vv){		
				if(!preg_match("/".str_replace(".","\\.",trim($v))."/",$vv)){
					$optimize_txt = preg_replace("/".str_replace(".","\\.",trim($v))."/", $replace_t, $optimize_txt);						
				}
			}
		}else{
			
			$optimize_txt = preg_replace("/".str_replace(".","\\.",trim($v))."/", $replace_t, $optimize_txt);	
		}
	}	

	} //ver 2


	} // end of common_css_src

	if(!$common_css_src){

	$golbengi_txt = implode(" ",$golbengi); 
	if(trim($golbengi_txt)) $optimize_txt = $golbengi_txt." ".$optimize_txt;	

	$css_waring = "
	/***********************************************************************************
	Copyright ⓒ DAONTHEME All rights reserved. Do Not delete the license.
	유료컨텐츠용 CSS입니다. 불법복제시 법적인 제제를 받으실 수 있습니다. 	
************************************************************************************/\n\n";
	if(trim($css_waring)) $optimize_txt = $css_waring." ".$optimize_txt;
	}

	header("Content-type: text/css; charset: UTF-8");
	header("Cache-Control: must-revalidate");
	echo preg_replace('/\n+/', "\n", trim($optimize_txt));