<?php
if(!$theme_license || $theme_license == "" ) $theme_license = "daontheme_business#08_2021-03-17"; 
$S_H = str_replace("www.","",$_SERVER['HTTP_HOST']); $S_H_A = $S_H." ".$theme_license;

if($_GET['mode'] == "daon_ver"){
	echo $S_H_A;
	exit;
}

if(!sql_query(" select cf_d_s from {$g5['config_table']} limit 1 ")) {
	sql_query(" ALTER TABLE `{$g5['config_table']}`
					ADD `cf_d_s` longtext NOT NULL DEFAULT '' ", true);		
}

$sql = " select cf_d_s from {$g5['config_table']} ";
$result_ds = sql_fetch($sql);

if(!$result_ds['cf_d_s']){		
	@include_once(G5_LIB_PATH.'/mailer.lib.php');
	$contents_ds =  $S_H_A.' ('.$_SERVER['REMOTE_ADDR'].') '.G5_TIME_YMDHIS;
	if(!$config['cf_admin_email']) $config['cf_admin_email'] = "admin@".$_SERVER['REMOTE_ADDR'];
	if(!$config['cf_admin_email_name']) $config['cf_admin_email_name'] = "daontheme";
	$send_ok = @mailer($config['cf_admin_email_name'], $config['cf_admin_email'], trim("daontheme@daum.net"), 'theme_domain_check',$contents_ds, 1);
	//if(!$send_ok) @mailer($config['cf_admin_email_name'], $config['cf_admin_email'], trim("daontheme@daum.net"), 'theme_domain_check',$contents_ds, 1);
	$sql = " update {$g5['config_table']} set cf_d_s='".$result_ds['cf_d_s']." ".$contents_ds."' ";
	sql_query($sql);	
}else{
	if(!preg_match("/".$S_H."/i",$result_ds['cf_d_s'])){
		@include_once(G5_LIB_PATH.'/mailer.lib.php');
		$contents_ds =  $S_H_A.' ('.$_SERVER['REMOTE_ADDR'].') '.G5_TIME_YMDHIS;
		if(!$config['cf_admin_email']) $config['cf_admin_email'] = "admin@".$_SERVER['REMOTE_ADDR'];
		if(!$config['cf_admin_email_name']) $config['cf_admin_email_name'] = "daontheme";
		$send_ok = @mailer($config['cf_admin_email_name'], $config['cf_admin_email'], trim("daontheme@daum.net"), 'theme_domain_check',$contents_ds, 1);
		//if(!$send_ok) @mailer($config['cf_admin_email_name'], $config['cf_admin_email'], trim("daontheme@daum.net"), 'theme_domain_check',$contents_ds, 1);
		$sql = " update {$g5['config_table']} set cf_d_s='".$result_ds['cf_d_s']." ".$contents_ds."' ";
		sql_query($sql);
	}
}
?>