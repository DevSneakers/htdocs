<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 285;
$thumb_height = 220;
$list_count = (is_array($list) && $list) ? count($list) : 0;

// echo $options; // 카테고리

?>

    <?php
    for ($i=0; $i<$list_count; $i++) {
   
		if($options && $list[$i]['ca_name'] != $options) continue;

		$thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

		if(isset($thumb['src']) && $thumb['src']) {
			$img = $thumb['src'];
			$thumb['alt'] = strip_tags($list[$i]['wr_content']);
		} else {
			$img = G5_IMG_URL.'/no_img.png';
			$thumb['alt'] = '이미지가 없습니다.';
		}
		$img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';


    ?>        
		<div class="swiper-slide" style="width:285px !important;">
			<a href="<?php echo get_pretty_url($bo_table, $list[$i]['wr_id']) ?>">
				<?php echo run_replace('thumb_image_tag', $img_content, $thumb); ?>
				<p class="txtBox">
					<span class="tit"><?php echo $list[$i]['subject'];?></span>
					<span class="txt"><?php echo cut_str(strip_tags($list[$i]['wr_content']),45)?></span>
					<span class="date"><?php echo $list[$i]['datetime'] ?></span>
				</p>
			</a>
		</div>		
            
            
    <?php } 

	?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
   
    <?php }  ?>