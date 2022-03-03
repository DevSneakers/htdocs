<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

<?php 
	if(!preg_match("/index\.php/",$_SERVER['PHP_SELF']) && $title_view != "no"){ // if문을 수정하지 마십시오.
?>
	</div>
</section>

<?php }?>

	<footer>
		<section id="footer">
			<div class="copy_bar">
				<div>
					<p class="copy_menu"><a href="<?php echo G5_THEME_URL;?>/html/00041/014.php">접근성정책</a>  &nbsp;&nbsp;&nbsp; <a href="<?php echo G5_THEME_URL;?>/html/00041/015.php">개인정보처리방침</a> &nbsp;&nbsp;&nbsp; <a href="<?php echo G5_THEME_URL;?>/html/00041/016.php">이메일주소무단수집거부</a></p>
				</div>
			</div>
			<div class="copy_area">
				<div class="copyright">
					<p>
						<span>안양시수리장애인종합복지관</span>
						<span>대표 : 이형진</span>
						<span>주소 : 14091 경기 안양시 만안구 냉천로 39(안양동 477-1)</span>
						<span>사업자등록번호 : 123-82-62800</span>
						<span>TEL : 031-465-0950~9</span>
						<span>Fax : 031-465-0960</span>
						<span>이메일 : asrc@hanmail.net</span>
						<span>Copyright 2021 안양시수리장애인종합복지관 All Rights Reserved.</span>
    				</p>
				</div>
				<div class="cs_area">
					<div class="cs_data">
						<p class="cs_title">업무시간</p>
						<p><a href="http://asrc2103.cafe24.com/theme/asrc/html/00041/011.php"><span style="color: #ffffff; font-size: 16px;">조직현황</span></p>
					</div>
					<div class="cs_info">
						<span>평일 09:30 - 18:00</span>
						<span>점심 12:00 - 13:00</span>
						<span>(주말, 공휴일 휴무)</span>
					</div>
				</div>
			</div>


		</section>
	</footer>


	<div class="q-menu" id="backtotop">
		<nav>
			<div><a href="<?php echo G5_URL?>"><i class="fa fa-home"></i><span>Home</span></a></div>
			<div><a href="<?php echo G5_THEME_URL;?>/html/company/01.php"><i class="fa fa-building"></i><span>About</span></a></div>
			<div><a href="<?php echo G5_THEME_URL;?>/html/company/04.php"><i class="fas fa-map-marker-alt"></i><span>Location</span></a></div>
			<div><a href="#top"><i class="fa fa-angle-up"></i><span>Top</span></a></div>
		</nav>
	</div>




	<script src="<?php echo G5_THEME_URL;?>/html/css_js/common.js"></script>




    <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
	<script>

	$(function() {
		$("#top_btn").on("click", function() {
			$("html, body").animate({scrollTop:0}, '500');
			return false;
		});
	});
	</script>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");