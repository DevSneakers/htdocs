<?php

/*
	
	이 페이지는 절대, 수정, 삭제하지 마세요.

*/


$daontheme_lastest_fun_exists = function_exists('daontheme_lastest');

if(!$daontheme_lastest_fun_exists){

function daontheme_lastest($skin_dir='', $bo_table, $rows=10, $subject_len=40, $cache_time=1, $options='')
{
    global $g5, $daon_category;

    if (!$skin_dir) $skin_dir = 'basic';

    if(preg_match('#^theme/(.+)$#', $skin_dir, $match)) {
        if (G5_IS_MOBILE) {
            $latest_skin_path = G5_THEME_MOBILE_PATH.'/'.G5_SKIN_DIR.'/latest/'.$match[1];
            if(!is_dir($latest_skin_path))
                $latest_skin_path = G5_THEME_PATH.'/'.G5_SKIN_DIR.'/latest/'.$match[1];
            $latest_skin_url = str_replace(G5_PATH, G5_URL, $latest_skin_path);
        } else {
            $latest_skin_path = G5_THEME_PATH.'/'.G5_SKIN_DIR.'/latest/'.$match[1];
            $latest_skin_url = str_replace(G5_PATH, G5_URL, $latest_skin_path);
        }
        $skin_dir = $match[1];
    } else {
        if(G5_IS_MOBILE) {
            $latest_skin_path = G5_MOBILE_PATH.'/'.G5_SKIN_DIR.'/latest/'.$skin_dir;
            $latest_skin_url  = G5_MOBILE_URL.'/'.G5_SKIN_DIR.'/latest/'.$skin_dir;
        } else {
            $latest_skin_path = G5_SKIN_PATH.'/latest/'.$skin_dir;
            $latest_skin_url  = G5_SKIN_URL.'/latest/'.$skin_dir;
        }
    }

    $caches = false;

	if(G5_USE_CACHE) {
        if($daon_category){
			$daon_category_txt = base64_encode($daon_category);
			$cache_file_name = "latest-{$bo_table}-{$skin_dir}-{$rows}-{$subject_len}-{$daon_category_txt}-".g5_cache_secret_key();
		}else{
			$cache_file_name = "latest-{$bo_table}-{$skin_dir}-{$rows}-{$subject_len}-".g5_cache_secret_key();
		}		
        $caches = g5_get_cache($cache_file_name);
        $cache_list = isset($caches['list']) ? $caches['list'] : array();
        g5_latest_cache_data($bo_table, $cache_list);
    }

    if( $caches == false ){

        $list = array();

        $board = get_board_db($bo_table, true);

        $bo_subject = get_text($board['bo_subject']);

        $tmp_write_table = $g5['write_prefix'] . $bo_table; // 게시판 테이블 전체이름
        if($daon_category) $sql_ = " and ca_name = '{$daon_category}' ";
		$sql = " select * from {$tmp_write_table} where wr_is_comment = 0 {$sql_} order by wr_num limit 0, {$rows} ";
        
        $result = sql_query($sql);
        for ($i=0; $row = sql_fetch_array($result); $i++) {
            try {
                unset($row['wr_password']);     //패스워드 저장 안함( 아예 삭제 )
            } catch (Exception $e) {
            }
            $row['wr_email'] = '';              //이메일 저장 안함
            if (strstr($row['wr_option'], 'secret')){           // 비밀글일 경우 내용, 링크, 파일 저장 안함
                $row['wr_content'] = $row['wr_link1'] = $row['wr_link2'] = '';
                $row['file'] = array('count'=>0);
            }
            $list[$i] = get_list($row, $board, $latest_skin_url, $subject_len);

            $list[$i]['first_file_thumb'] = (isset($row['wr_file']) && $row['wr_file']) ? get_board_file_db($bo_table, $row['wr_id'], 'bf_file, bf_content', "and bf_type between '1' and '3'", true) : array('bf_file'=>'', 'bf_content'=>'');
            $list[$i]['bo_table'] = $bo_table;
            // 썸네일 추가
            if($options && is_string($options)) {
                $options_arr = explode(',', $options);
                $thumb_width = $options_arr[0];
                $thumb_height = $options_arr[1];
                $thumb = get_list_thumbnail($bo_table, $row['wr_id'], $thumb_width, $thumb_height, false, true);
                // 이미지 썸네일
                if($thumb['src']) {
                    $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" width="'.$thumb_width.'" height="'.$thumb_height.'">';
                    $list[$i]['img_thumbnail'] = '<a href="'.$list[$i]['href'].'" class="lt_img">'.$img_content.'</a>';
                // } else {
                //     $img_content = '<img src="'. G5_IMG_URL.'/no_img.png'.'" alt="'.$thumb['alt'].'" width="'.$thumb_width.'" height="'.$thumb_height.'" class="no_img">';
                }
            }
        }
        g5_latest_cache_data($bo_table, $list);

        if(G5_USE_CACHE) {

            $caches = array(
                'list' => $list,
                'bo_subject' => sql_escape_string($bo_subject),
            );

            g5_set_cache($cache_file_name, $caches, 3600 * $cache_time);
        }
    } else {
        $list = $cache_list;
        $bo_subject = (is_array($caches) && isset($caches['bo_subject'])) ? $caches['bo_subject'] : '';
    }

    ob_start();
    include $latest_skin_path.'/latest.skin.php';
    $content = ob_get_contents();
    ob_end_clean();

    return $content;
}

}

if($config['cf_bbs_rewrite'] != "0"){
	foreach($first_menu as $a => $b){				
		$bo_table_re ="";
		$daon_url = parse_url($b); 		
		$daon_url_exp = @explode("&",$daon_url['query']);	
		$daon_url_exp_query = $daon_url['query'];
		$daon_url_exp_a = $daon_url['path'];
		
		foreach($daon_url_exp as $y => $z){				
			if(preg_match("/bo_table\=/",$z)){				
				if(preg_match("/write\.php/",$daon_url_exp_a)){	
					$bo_table_re = str_replace("bo_table=","",$z);				
					$first_menu[$a] = urldecode(get_pretty_url($bo_table_re)."/write"."?".$daon_url_exp_query);
				}else{			
					$bo_table_re = str_replace("bo_table=","",$z);				
					$first_menu[$a] = urldecode(get_pretty_url($bo_table_re)."?".$daon_url_exp_query);
				}
			}
			if(preg_match("/co_id\=/",$z)){				
				$co_id_re = str_replace("co_id=","",$z);				
				$first_menu[$a] = urldecode(get_pretty_url('content', $co_id_re));
			}			
		}
		if(preg_match("/\/html\//",$b)){				
			$new_url_exp = explode(G5_THEME_DIR."/".$config['cf_theme'],$b);			
			$new_url = str_replace(G5_THEME_DIR."/".$config['cf_theme'],"",$b);
			$new_url = str_replace("/html/","".str_replace("daontheme_","",$config['cf_theme'])."/",$new_url);		
			$new_url = preg_replace('/\.[^.]+$/','',$new_url);
			$new_url = str_replace($new_url_exp[0],"/",$new_url);
			$new_url = G5_URL.$new_url;		

			if($config['cf_bbs_rewrite'] == "1") $first_menu[$a]  = $new_url;
			else if($config['cf_bbs_rewrite'] == "2"){
				$first_menu[$a]  = $new_url."/".preg_replace("/\s/",'-',$a)."/";
			}	
		}
		unset($daon_url_exp);
	}	
	foreach($second_menu as $ka => $va){
		foreach($second_menu[$ka] as $a => $b){	
		
			$bo_table_re ="";
			$co_id_re ="";
			$daon_url = parse_url($b); 
			$daon_url_exp = @explode("&",$daon_url['query']);		
			$daon_url_exp_query = $daon_url['query'];
			$daon_url_exp_a = $daon_url['path'];
			
			foreach($daon_url_exp as $y => $z){				
				if(preg_match("/bo_table\=/",$z)){						
					if(preg_match("/write\.php/",$daon_url_exp_a)){	
						$bo_table_re = str_replace("bo_table=","",$z);				
						$second_menu[$ka][$a] = urldecode(get_pretty_url($bo_table_re)."/write"."?".$daon_url_exp_query);
					}else{
						$bo_table_re = str_replace("bo_table=","",$z);				
						$second_menu[$ka][$a] = urldecode(get_pretty_url($bo_table_re)."?".$daon_url_exp_query);
					}
				}
				if(preg_match("/co_id\=/",$z)){						
					$co_id_re = str_replace("co_id=","",$z);				
					$second_menu[$ka][$a] = urldecode(get_pretty_url('content', $co_id_re));
				}				
			}	
			if(preg_match("/\/html\//",$b)){				
				$new_url_exp = explode(G5_THEME_DIR."/".$config['cf_theme'],$b);			
				$new_url = str_replace(G5_THEME_DIR."/".$config['cf_theme'],"",$b);
				$new_url = str_replace("/html/","".str_replace("daontheme_","",$config['cf_theme'])."/",$new_url);		
				$new_url = preg_replace('/\.[^.]+$/','',$new_url);
				$new_url = str_replace($new_url_exp[0],"/",$new_url);
				$new_url = G5_URL.$new_url;		

				if($config['cf_bbs_rewrite'] == "1") $second_menu[$ka][$a]  = $new_url;
				else if($config['cf_bbs_rewrite'] == "2"){
					$second_menu[$ka][$a]  = $new_url."/".preg_replace("/\s/",'-',$a)."/";
				}	
			}
			unset($daon_url_exp);
		}
	}
}




$tmenu_ = "";



if($bo_table){	
	if($config['cf_bbs_rewrite'] != "0" && $_SERVER['REDIRECT_URL'] && ( preg_match("/\/bbs\/board.php/", $_SERVER['PHP_SELF']) ||  preg_match("/\/bbs\/write.php/", $_SERVER['PHP_SELF'])) ){ 
		foreach($first_menu as $a => $b){	
			if((preg_match("/\/".$bo_table."\/write/", $b) || preg_match("/\/".$bo_table."/", $b)) && !preg_match("/bbs\/qalist/", $b) && !preg_match("/bbs\/qawrite/", $b) && !preg_match("/bbs\/qaview/", $b)){				
				$tmenu_ = $a;					
				$g5['so_title']	= $first_menu_so_title[$a];	
			}	
		}	
		foreach($second_menu as $ka => $va){
			foreach($second_menu[$ka] as $a => $b){
				if((preg_match("/\/".$bo_table."\/write/", $b) || preg_match("/\/".$bo_table."/", $b)) && !preg_match("/bbs\/qalist/", $b) && !preg_match("/bbs\/qawrite/", $b) && !preg_match("/bbs\/qaview/", $b)){				
					$tmenu_ = $ka;					
					$g5['so_title']	= $second_menu_so_title[$ka][$a];	
				}							
			}
		}			
	}else{
		foreach($first_menu as $a => $b){				
			$bo_table_re ="";
			$daon_url = parse_url($b); 		
			$daon_url_exp = @explode("&",$daon_url['query']);			
			foreach($daon_url_exp as $y => $z){					
				if(preg_match("/bo_table\=/",$z)){				
					$bo_table_re = str_replace("bo_table=","",$z);				
					if($bo_table == $bo_table_re){
						$tmenu_ = $a;					
						$g5['so_title']	= $first_menu_so_title[$a];	
					}
				}
			}
			if((preg_match("/\/".$bo_table."\/write/", $b) || preg_match("/\/".$bo_table."/", $b)) && !preg_match("/bbs\/qalist/", $b) && !preg_match("/bbs\/qawrite/", $b) && !preg_match("/bbs\/qaview/", $b)){				
				$tmenu_ = $a;					
				$g5['so_title']	= $first_menu_so_title[$a];	
			}
			unset($daon_url_exp);
		}	
		foreach($second_menu as $ka => $va){
			foreach($second_menu[$ka] as $a => $b){
				$bo_table_re =  "";
				$daon_url = parse_url($b); 			
				$daon_url_exp = @explode("&",$daon_url['query']);
				foreach($daon_url_exp as $y => $z){			
					if(preg_match("/bo_table\=/",$z)){
						$bo_table_re = str_replace("bo_table=","",$z);
						if($bo_table == $bo_table_re){
							$tmenu_ = $ka;				
							$g5['so_title']	= $second_menu_so_title[$ka][$a];				
						}
					}
				}
				if((preg_match("/\/".$bo_table."\/write/", $b) || preg_match("/\/".$bo_table."/", $b)) && !preg_match("/bbs\/qalist/", $b) && !preg_match("/bbs\/qawrite/", $b) && !preg_match("/bbs\/qaview/", $b)){				
					$tmenu_ = $ka;						
					$g5['so_title']	= $second_menu_so_title[$ka][$a];
				}
				unset($daon_url_exp);						
			}
		}
	}
}



if($co_seo_title){ //짧은주소 글이름 형태치환
	$sqla = "select * from {$g5['content_table']} where co_seo_title = '{$co_seo_title}' ";
	$co_row = sql_fetch($sqla);
	$co_id_a = $co_row['co_id'];
}else $co_id_a = "";


if($co_id || $co_id_a){	

	if($co_id){
		foreach($first_menu as $a => $b){				
			$co_id_re ="";
			$daon_url = parse_url($b); 
			$daon_url_exp = @explode("&",$daon_url['query']);	
			foreach($daon_url_exp as $y => $z){				
				if(preg_match("/co_id\=/",$z)){				
					$co_id_re = str_replace("co_id=","",$z);				
					if($co_id == $co_id_re){
						$tmenu_ = $a;					
						$g5['so_title']	= $first_menu_so_title[$a];	
					}
				}
			}	
			if($config['cf_bbs_rewrite'] == 1){
				if(preg_match("/\/".$co_id."$/", $b)){				
					$tmenu_ = $a;					
					$g5['so_title']	= $first_menu_so_title[$a];	
				}
			}else if($config['cf_bbs_rewrite'] == 2){
				$sqla = "select co_seo_title from {$g5['content_table']} where co_id = '{$co_id}' ";
				$co_row = sql_fetch($sqla);
				if(preg_match("/\/".($co_row['co_seo_title'])."$/", $b)){				
					$tmenu_ = $a;					
					$g5['so_title']	= $first_menu_so_title[$a];	
				}			
			}
			unset($daon_url_exp);
		}	
		foreach($second_menu as $ka => $va){
			foreach($second_menu[$ka] as $a => $b){				
				$co_id_re ="";
				$daon_url = parse_url($b); 
				$daon_url_exp = @explode("&",$daon_url['query']);	
				foreach($daon_url_exp as $y => $z){				
					if(preg_match("/co_id\=/",$z)){						
						$co_id_re = str_replace("co_id=","",$z);
						if($co_id == $co_id_re){
							$tmenu_ = $ka;				
							$g5['so_title']	= $second_menu_so_title[$ka][$a];	
						}
					}
				}
				if($config['cf_bbs_rewrite'] == 1){
					if(preg_match("/\/".$co_id."$/", $b)){	
						$tmenu_ = $ka;					
						$g5['so_title']	= $second_menu_so_title[$ka][$a];		
					}
				}else if($config['cf_bbs_rewrite'] == 2){
					$sqla = "select co_seo_title from {$g5['content_table']} where co_id = '{$co_id}' ";
					$co_row = sql_fetch($sqla);				
					
					if(preg_match("/\/".($co_row['co_seo_title'])."\/$/", $b)){				
						$tmenu_ = $ka;					
						$g5['so_title']	= $second_menu_so_title[$ka][$a];			
					}	
				}
				
				unset($daon_url_exp);
			}		
		}
	}else{
		if($co_id_a && $_SERVER['REDIRECT_URL'] && preg_match("/\/bbs\/content.php/", $_SERVER['PHP_SELF'])){ 	
			if($config['cf_bbs_rewrite'] == 1){
				foreach($first_menu as $a => $b){			
					if(preg_match("/\/".$co_id_a."$/", $b)){			
						$tmenu_ = $a;					
						$g5['so_title']	= $first_menu_so_title[$a];	
					}	
				}	
				foreach($second_menu as $ka => $va){
					foreach($second_menu[$ka] as $a => $b){
						if(preg_match("/\/".$co_id_a."$/", $b)){			
							$tmenu_ = $ka;					
							$g5['so_title']	= $second_menu_so_title[$ka][$a];	
						}							
					}
				}	
			}else if($config['cf_bbs_rewrite'] == 2){	
				foreach($first_menu as $a => $b){				
					if(preg_match("/\/".$co_seo_title."\//", ($b))){			
						$tmenu_ = $a;					
						$g5['so_title']	= $first_menu_so_title[$a];	
					}	
				}	
				
				foreach($second_menu as $ka => $va){
					foreach($second_menu[$ka] as $a => $b){

						if(preg_match("/\/".$co_seo_title."\//", ($b))){			
							$tmenu_ = $ka;					
							$g5['so_title']	= $second_menu_so_title[$ka][$a];	
						}							
					}
				}	
			}
		}
	}
}







if(preg_match("/bbs\/qa/",$_SERVER['PHP_SELF'])){
	foreach($first_menu as $a => $b){						
		if(preg_match("/bbs\/qa/",$b)){					
			$tmenu_ = $a;					
			$g5['so_title']	= $first_menu_so_title[$a];					
		}
	}		
	foreach($second_menu as $ka => $va){
		foreach($second_menu[$ka] as $a => $b){	
			if(preg_match("/bbs\/qa/",$b)){
				$tmenu_ = $ka;
				$g5['so_title']	= $second_menu_so_title[$ka][$a];
			}			
		}
	}
}

if(preg_match("/bbs\/search\.php/",$_SERVER['PHP_SELF'])){
	foreach($first_menu as $a => $b){						
		if(preg_match("/bbs\/search\.php/",$b)){				
			$tmenu_ = $a;					
			$g5['so_title']	= $first_menu_so_title[$a];					
		}
	}
	foreach($second_menu as $ka => $va){
		foreach($second_menu[$ka] as $a => $b){	
			if(preg_match("/bbs\/search\.php/",$b)){
				$tmenu_ = $ka;
				$g5['so_title']	= $second_menu_so_title[$ka][$a];
			}
		}
	}
}

if(preg_match("/bbs\/faq\.php/",$_SERVER['PHP_SELF'])){
	foreach($first_menu as $a => $b){						
		if(preg_match("/bbs\/faq\.php/",$b)){			
			$tmenu_ = $a;					
			$g5['so_title']	= $first_menu_so_title[$a];					
		}
	}
	foreach($second_menu as $ka => $va){
		foreach($second_menu[$ka] as $a => $b){	
			if(preg_match("/bbs\/faq\.php/",$b)){
				$tmenu_ = $ka;
				$g5['so_title']	= $second_menu_so_title[$ka][$a];
			}
		}
	}
}

if(preg_match("/bbs\/login\.php/",$_SERVER['PHP_SELF'])){
	foreach($first_menu as $a => $b){						
		if(preg_match("/bbs\/login\.php/",$b)){		
			$tmenu_ = $a;					
			$g5['so_title']	= $first_menu_so_title[$a];					
		}
	}
	foreach($second_menu as $ka => $va){
		foreach($second_menu[$ka] as $a => $b){	
			if(preg_match("/bbs\/login\.php/",$b)){
				$tmenu_ = $ka;
				$g5['so_title']	= $second_menu_so_title[$ka][$a];
			}
		}
	}
}

if(preg_match("/bbs\/register/",$_SERVER['PHP_SELF'])){
	foreach($first_menu as $a => $b){						
		if(preg_match("/bbs\/register/",$b)){	
			$tmenu_ = $a;					
			$g5['so_title']	= $first_menu_so_title[$a];					
		}
	}
	foreach($second_menu as $ka => $va){
		foreach($second_menu[$ka] as $a => $b){	
			if(preg_match("/bbs\/register/",$b)){
				$tmenu_ = $ka;
				$g5['so_title']	= $second_menu_so_title[$ka][$a];
			}
		}
	}
}

if(preg_match("/bbs\/member_confirm\.php/",$_SERVER['PHP_SELF'])){
	foreach($first_menu as $a => $b){						
		if(preg_match("/bbs\/member_confirm\.php/",$b)){
			$tmenu_ = $a;					
			$g5['so_title']	= $first_menu_so_title[$a];					
		}
	}
	foreach($second_menu as $ka => $va){
		foreach($second_menu[$ka] as $a => $b){	
			if(preg_match("/bbs\/member_confirm\.php/",$b)){
				$tmenu_ = $ka;
				$g5['so_title']	= $second_menu_so_title[$ka][$a];
			}
		}
	}
}





if($second_menu_view == false){
	unset($second_menu, $second_menu_target,$second_menu_so_title);
}

@reset($first_menu);
@reset($second_menu);



	
$MobileArray_d  = array("iphone","lgtelecom","skt","mobile","samsung","nokia","blackberry","android","android","sony","phone");
$checkCount = 0; 
for($i=0; $i<sizeof($MobileArray_d); $i++){ 
	if(preg_match("/".$MobileArray_d[$i]."/", strtolower($_SERVER['HTTP_USER_AGENT']))){ $checkCount++; break; } 
} 
if($checkCount >= 1){
	$_OS_ =  "mobile";
}else{
	$_OS_ = "pc";
}


$sql_mm = " select count(*) as co from {$g5['menu_table']}";
$row_mm = sql_fetch($sql_mm);
$G5_THEME_URL_A = G5_THEME_URL;
$G5_BBS_URL_A = G5_BBS_URL;
if($row_mm['co'] == 0){
	sql_query("INSERT INTO `{$g5['menu_table']}` VALUES (255,'10','회사소개','{$G5_THEME_URL_A}/html/company/01.php','self',0,1,1),(256,'1010','인사말','{$G5_THEME_URL_A}/html/company/01.php','self',0,1,1),(257,'1020','연혁','{$G5_THEME_URL_A}/html/company/02.php','self',0,1,1),(258,'1030','비전','{$G5_THEME_URL_A}/html/company/03.php','self',0,1,1),(259,'1040','인증서','{$G5_BBS_URL_A}/board.php?bo_table=cer','self',0,1,1),(260,'1050','오시는길','{$G5_THEME_URL_A}/html/company/04.php','self',0,1,1),(261,'1060','전체테마보기','http://daontheme.cafe24.com','blank',0,1,1),(262,'20','사업영역','{$G5_THEME_URL_A}/html/business/01.php','self',0,1,1),(263,'2010','Type01','{$G5_THEME_URL_A}/html/business/01.php','self',0,1,1),(264,'2020','Type02','{$G5_THEME_URL_A}/html/business/02.php','self',0,1,1),(265,'30','제품소개','{$G5_BBS_URL_A}/board.php?bo_table=product1','self',0,1,1),(266,'3010','갤러리형','{$G5_BBS_URL_A}/board.php?bo_table=product1','self',0,1,1),(267,'3020','리스트형','{$G5_BBS_URL_A}/board.php?bo_table=product2','self',0,1,1),(268,'40','온라인문의','{$G5_BBS_URL_A}/board.php?bo_table=online','self',0,1,1),(269,'4010','비회원문의','{$G5_BBS_URL_A}/board.php?bo_table=online','self',0,1,1),(270,'4020','1:1문의','{$G5_BBS_URL_A}/qalist.php','self',0,1,1),(271,'50','고객센터','{$G5_BBS_URL_A}/board.php?bo_table=notice','self',0,1,1),(272,'5010','공지사항','{$G5_BBS_URL_A}/board.php?bo_table=notice','self',0,1,1),(273,'5020','질문과답변','{$G5_BBS_URL_A}/board.php?bo_table=qa','self',0,1,1),(274,'5030','유투브동영상','{$G5_BBS_URL_A}/board.php?bo_table=youtube','self',0,1,1),(275,'5040','갤러리','{$G5_BBS_URL_A}/board.php?bo_table=gallery','self',0,1,1),(276,'5050','통합검색','{$G5_BBS_URL_A}/search.php','self',0,1,1),(277,'5060','자주하시는질문','{$G5_BBS_URL_A}/faq.php','self',0,1,1);");
}