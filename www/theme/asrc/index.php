<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>


<div id="container">


		<section id="main_visual">

			<div class="swiper-container" >
				<div class="swiper-wrapper">				
					

					<div class="swiper-slide swiper-lazy" data-swiper-autoplay="8000"> <?php  //data-swiper-autoplay="5000" 5초후 다음컷 ?>
						<div class="sliderkit-text wow fadeIn">
							<h1 class="lviewa animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="0.5s"></h1>
							<h1 class="sviewa animated" data-swiper-animation="fadeInUp"   data-duration="1.2s" data-delay="0.7s"> </h1>
							<div class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1s"><span><h2></h2></span></div>
						</div>
						<div class="backgroundimg">
							<div class="pc_only"><img src="<?php echo G5_THEME_URL;?>/html/image/main-210701.jpg"></div>
							<div class="mobile_only"><img src="<?php echo G5_THEME_URL;?>/html/image/main-210701.jpg"></div>
						</div>   
						<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
					</div>					


				</div>
				<div class="swiper-pagination"></div>

				<div class="swiper-button-prev"></div>
			</div>
			<script src="<?php echo G5_THEME_URL;?>/html/css_js/main.js"></script>
			<script>
				if($('#bgndVideo').length) {
					$("#bgndVideo").YTPlayer();
					$("#bgndVideo").YTPPause();
				}
			</script>
		</section>	
		
		<section id="business_wrap">
<!-- 			<div class="business_tit wow bounceInUp"> -->
<!-- 				<span>이용자와 소통하는</span> -->
<!-- 				<p>안양시수리장애인종합복지관</p> -->
<!--  -->
<!-- 			</div> -->







<!-- <p style="text-align: center; "> -->
<!--    <span style="font-size: 18px;">이용자와 소통하는</span> -->
<!-- </p> -->
<!-- <p style="text-align: center; "> -->
<!--    <span style="font-size: 22px;"><b>안양시수리장애인종합복지관</b></span> -->
<!-- </p> -->
<!-- <br><br> -->
<!--  -->
<!-- 			<div class="business_area"> -->
<!-- 			<ul> -->
<!-- 				<li> -->
<!-- 					<a href="<?php echo G5_THEME_URL;?>/html/005/017.php"> -->
<!-- 						<img src="<?php echo G5_THEME_URL;?>/html/image/main-21040705.jpg"> -->
<!-- 						<div class="summary"> -->
<!-- 							<p class="name">복지관 소개</p> -->
<!-- 							<p class="sname"> -->
<!--                                이용자와 소통하는 안양시수리장애인종합복지관의 <br> -->
<!--                                이모저모를 알려드립니다 -->
<!-- 							</p> -->
<!-- 							<span class="btn_view"></span> -->
<!-- 						</div> -->
<!-- 					</a> -->
<!-- 				</li> -->
<!-- 				<li> -->
<!-- 					<a href="<?php echo G5_THEME_URL;?>/html/001/001.php"> -->
<!-- 						<img src="<?php echo G5_THEME_URL;?>/html/image/main-21040706.jpg"> -->
<!-- 						<div class="summary"> -->
<!-- 							<p class="name">이용절차</p> -->
<!-- 							<p class="sname"> -->
<!-- 								복지관 서비스 이용방법에 대해<br> -->
<!--                                 안내해 드립니다. -->
<!--  -->
<!-- 							</p> -->
<!-- 							<span class="btn_view"></span> -->
<!-- 						</div> -->
<!-- 					</a> -->
<!-- 				</li> -->
<!-- 				<li> -->
<!-- 					<a href="<?php echo G5_THEME_URL;?>/html/003/011.php"> -->
<!-- 						<img src="<?php echo G5_THEME_URL;?>/html/image/main-21040707.jpg"> -->
<!-- 						<div class="summary"> -->
<!-- 							<p class="name">참여하기</p> -->
<!-- 							<p class="sname"> -->
<!--                                누구나 쉽게 참여할 수 있는<br> -->
<!-- 							   후원과 자원봉사를 안내해 드립니다. -->
<!--  -->
<!-- 							</p> -->
<!-- 							<span class="btn_view"></span> -->
<!-- 						</div> -->
<!-- 					</a> -->
<!-- 				</li> -->
<!-- 			</ul> -->
<!-- 			</div> -->
<!-- 		</section> -->

		
		



<!-- 		<section id="m_bnr"> -->
<!-- 			<div class="con_box1 wow fadeInLeft"> -->
<!-- 				<div class="hover_area"> -->
<!-- 					<em>주간식단안내</em> -->
<!-- 					<strong> <br> </strong> -->
<!-- 					<span class="btn_go1"><a href="<?php echo G5_THEME_URL;?>/html/002/009.php">자세히보기</a></span> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 			<div class="con_box2 wow fadeInRight"> -->
<!-- 				<div class="hover_area"> -->
<!-- 					<em>무료셔틀버스</em> -->
<!-- 					<strong> <br> </strong> -->
<!-- 					<span class="btn_go1"><a href="<?php echo G5_THEME_URL;?>/html/002/010.php">자세히보기</a></span> -->
<!-- 				</div> -->
<!-- 			</div>		 -->
<!-- 		</section> -->



		<?php 			
			/*
				슬라이드형 갤러리는 5개이상 진열 되면 슬라이드 됩니다.			
			*/			
		?>
		<section id="rolling_box" >			
			<div class="g_tit wow fadeInUp">
				<p>수리복지관 이야기</p>
				<span>수리의 생생한 소식을 <br class="sview">전해드립니다.</span>
			</div>
			<div class="swiper-container2 wow fadeInUp">
				<div class="swiper-wrapper" >
					<?php 
						$daon_category = "";		//카테고리명 카테고리를 사용하지 않고 전체 출력하실때는  값을 비웁니다.
						echo daontheme_lastest('theme/daon_product_slide', "1006", 10, 24); //daontheme_lastest("theme/daon_product2", "게시판테이블명", 출력개수, 타이틀길이);
					?>	
				</div>
			</div>
			<div class="swiper-btn-wrap">
				<div class="swiper-scrollbar-wrap1">
					<div class="swiper-scrollbar2">						
					</div>
				</div>
				<div class="swiper-scrollbar-wrap2">
					<div class="swiper-button-next2" ></div>
					<div class="swiper-button-prev2" ></div>				
				</div>
				<div class="swiper-pagination2"></div>
			</div>
		</section>
		<script src="<?php echo G5_THEME_URL;?>/html/css_js/g_slide.js"></script>	



		<section id="comm_wrap">
			<div class="board_area">
				<div class="dleft wow fadeInLeft">
					<div class="board_box">

						<div class="notice_area">
							<ul class="tab">
								<li class="on"><a href="#noticeList1">공지사항</a></li>	
								<li><a href="#noticeList2">질문과 답변</a></li>
							</ul>
							<div id="noticeList1" class="active">
								<?php 
									$daon_category = "";		//카테고리명 카테고리를 사용하지 않고 전체 출력하실때는  값을 비웁니다.
									echo daontheme_lastest('theme/daon_simple', "1004", 5, 24); //daontheme_lastest("theme/daon_simple", "게시판테이블명", 출력개수, 타이틀길이);
								?>								
							</div>	
							<div id="noticeList2" >
								<?php 
									$daon_category = "";		//카테고리명 카테고리를 사용하지 않고 전체 출력하실때는  값을 비웁니다.
									echo daontheme_lastest('theme/daon_simple', "1003", 5, 24); //daontheme_lastest("theme/daon_simple", "게시판테이블명", 출력개수, 타이틀길이);
								?>
							</div>
						</div>	
						
						<script>
						var tabMenu = function(item,active){
						  var $item = $(item);
						  active($item);
						}

						tabMenu('.notice_area .tab a',function(item,active){
						  item.on('click', function(e){
							var $parent = $(this).parent();
							var id = $(this).attr("href");
							if(!$parent.hasClass('on')){
							  $('.notice_area li').siblings('.on').removeClass('on');
							  $('.notice_area > div').siblings('.active').removeClass('active');
							  $parent.addClass('on');
							  $(id).addClass('active');
							}
							return false;
						  });
						});
					</script>


					</div>
				</div>
				<div class="dright wow fadeInRight">
					
					<div class="schedule">
					<h1>복지관 일정 <a href="<?php echo get_pretty_url("schedule");?>"></a></h1>
					<iframe src="<?php echo G5_BBS_URL;?>/cal.php" style="width:100%; border:0; height:248px;" frameborder=0 scrolling=no></iframe></div>

				</div>
			</div>
<!-- 			<div class="comm_area"> -->
<!-- 				<div class="comm_bnr"> -->
<!-- 				<ul> -->
<!-- 					<li class="wow fadeInUp" style="animation-delay: 0s;"> -->
<!-- 						<a href="http://asrc2103.cafe24.com/bbs/board.php?bo_table=1006"> -->
<!-- 							<div><i class="fa fa-edit" aria-hidden="true"></i></div> -->
<!-- 							<p class="txt_tit">활동지원 안내</p> -->
<!-- 							<p class="txt_list">중증 장애인 활동지원<br>서비스에 대해 알려드립니다.</p> -->
<!-- 						</a> -->
<!-- 					</li> -->
<!-- 					<li class="wow fadeInUp" style="animation-delay: 0.2s;"> -->
<!-- 						<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=1001"> -->
<!-- 							<div><i class="fa fa-question-circle" aria-hidden="true"></i></div> -->
<!-- 							<p class="txt_tit">해피버스</p> -->
<!-- 							<p class="txt_list">장애인 문화/체험 여행을 위한 <br>해피버스 신청방법을 알려드립니다.</p> -->
<!-- 						</a> -->
<!-- 					</li> -->
<!-- 					<li class="wow fadeInUp" style="animation-delay: 0.4s;"> -->
<!-- 						<a href="http://asrc2103.cafe24.com/bbs/board.php?bo_table=1008"> -->
<!-- 							<div><i class="fa fa-camera" aria-hidden="true"></i></div> -->
<!-- 							<p class="txt_tit">문의하기</p> -->
<!-- 							<p class="txt_list">복지관 이용에 대한<br>문의사항을 답변해 드립니다.</p> -->
<!-- 						</a> -->
<!-- 					</li> -->
<!-- 					<li class="wow fadeInUp" style="animation-delay: 0.6s;"> -->
<!-- 						<a href="<?php echo G5_THEME_URL;?>/html/005/023.php"> -->
<!-- 							<div><i class="fa fa-hand-holding-heart" aria-hidden="true"></i></div> -->
<!-- 							<p class="txt_tit">조직현황</p> -->
<!-- 							<p class="txt_list">수리복지관 직원현황에 대해 <br>알려드립니다.</p> -->
<!-- 						</a> -->
<!-- 					</li> -->
<!-- 				</ul> -->
<!-- 				</div> -->
<!-- 			</div>	 -->
<!-- 		</section> -->
<!--  -->
<!-- 		 -->
<!-- 		<section id="company_wrap"> -->
<!-- 			<div class="company_tit wow bounceInUp"> -->
<!-- 				<p>참여마당</p> -->
<!-- <!-- 				<span>장애인과 비장애인이 조화롭게 어울리는 <br class="sview">다양한 사업을 진행하고 있습니다.</span> --> -->
<!-- 			</div> -->
<!-- 			<div class="circle_wrap"> -->
<!-- 				<div class="circle_area"> -->
<!-- 				<li class="wow fadeInUp"> -->
<!-- 					<a href="<?php echo G5_THEME_URL;?>/html/0001/001.php" > -->
<!-- 						<div class="tb"> -->
<!-- 							<div class="td">								 -->
<!-- 								<i class="fa fa-building"></i> -->
<!-- 								<p>이용절차</p> -->
<!-- 								<span>안양시수리장애인종합복지관<br>이용방법을 알려드립니다. </span> -->
<!-- 							</div> -->
<!-- 						</div> -->
<!-- 					</a> -->
<!-- 				</li> -->
<!-- 				<li class="wow fadeInDown"> -->
<!-- 					<a href="<?php echo G5_THEME_URL;?>/html/wait/wait_pass.php"> -->
<!-- 						<div class="tb"> -->
<!-- 							<div class="td">							 -->
<!-- 								<i class="far fa-hourglass"></i> -->
<!-- 								<p>대기자 조회</p> -->
<!-- 								<span>이용 대기현황을 확인할 수 있습니다. </span> -->
<!-- 							</div> -->
<!-- 						</div> -->
<!-- 					</a> -->
<!-- 				</li> -->
<!-- 				<li class="wow fadeInUp"> -->
<!-- 					<a href="http://asrc2103.cafe24.com/theme/asrc/html/002/002.php"> -->
<!-- 						<div class="tb"> -->
<!-- 							<div class="td">								 -->
<!-- 								<i class="fab fa-accessible-icon"></i> -->
<!-- 								<p>주간식단안내</p> -->
<!-- 								<span>금주의 식단을 확인할 수 있습니다. </span> -->
<!-- 							</div> -->
<!-- 						</div> -->
<!-- 					</a> -->
<!-- 				</li> -->
<!-- 				<li class="wow fadeInDown"> -->
<!-- 					<a href="<?php echo G5_THEME_URL;?>/html/0001/005.php"> -->
<!-- 						<div class="tb"> -->
<!-- 							<div class="td">								 -->
<!-- 								<i class="fa fa-trophy"></i> -->
<!-- 								<p>무료셔틀버스</p> -->
<!-- 								<span>장애인, 노약자 및 임산부를 위한 <br>무료셔틀버스 노선도를 알려드립니다. </span> -->
<!-- 							</div> -->
<!-- 						</div> -->
<!-- 					</a> -->
<!-- 				</li> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 		</section>		 -->
			



			<div class="comm_area">
				<div class="comm_bnr">
				<ul>
					<li class="wow fadeInUp" style="animation-delay: 0s;">
						<a href="<?php echo G5_THEME_URL;?>/html/0001/001.php">
							<div><i class="fa fa-edit" aria-hidden="true"></i></div>
							<p class="txt_tit">이용절차</p>
							<p class="txt_list">안양시수리장애인종합복지관<br>이용방법을 알려드립니다.</p>
						</a>
					</li>
					<li class="wow fadeInUp" style="animation-delay: 0.2s;">
						<a href="<?php echo G5_THEME_URL;?>/html/wait/wait_pass.php">
							<div><i class="fa fa-question-circle" aria-hidden="true"></i></div>
							<p class="txt_tit">대기자 조회</p>
							<p class="txt_list">이용대기현황을<br>확인할 수 있습니다.</p>
						</a>
					</li>
					<li class="wow fadeInUp" style="animation-delay: 0.4s;">
						<a href="<?php echo G5_THEME_URL;?>/html/002/002.php">
							<div><i class="fa fa-camera" aria-hidden="true"></i></div>
							<p class="txt_tit">주간식단안내</p>
							<p class="txt_list">금주의 식단을<br>확인할 수 있습니다</p>
						</a>
					</li>
					<li class="wow fadeInUp" style="animation-delay: 0.6s;">
						<a href="<?php echo G5_THEME_URL;?>/html/0001/005.php">
							<div><i class="fa fa-hand-holding-heart" aria-hidden="true"></i></div>
							<p class="txt_tit">무료셔틀버스</p>
							<p class="txt_list">장애인, 노약자 및 임산부를 위한<br>무료셔틀버스 노선도를 알려드립니다.</p>
						</a>
					</li>
				</ul>
				</div>
			</div>





<!-- 		<section id="comm_wrap1"> -->
<!-- 			<p style="text-align: center; "> -->
<!-- 			   <span style="font-size: 22px;"><b>자주 찾는 서비스</b></span> -->
<!-- 			</p> -->
<!--  -->
<!-- 			<div class="comm_area"> -->
<!-- 				<div class="comm_bnr"> -->
<!-- 				<ul> -->
<!-- 					<li class="wow fadeInUp" style="animation-delay: 0s;"> -->
<!-- 						<a href="<?php echo G5_THEME_URL;?>/html/wait/wait_pass.php"> -->
<!-- 							<div><i class="fa fa-edit" aria-hidden="true"></i></div> -->
<!-- 							<p class="txt_tit">대기자 조회</p> -->
<!-- 							<p class="txt_list"> &nbsp;&nbsp;   </p> -->
<!-- 						</a> -->
<!-- 					</li> -->
<!-- 					<li class="wow fadeInUp" style="animation-delay: 0.2s;"> -->
<!-- 						<a href="http://asrc2103.cafe24.com/bbs/board.php?bo_table=1005"> -->
<!-- 							<div><i class="fa fa-question-circle" aria-hidden="true"></i></div> -->
<!-- 							<p class="txt_tit">프로그램 신청</p> -->
<!-- 							<p class="txt_list">&nbsp;&nbsp; </p> -->
<!-- 						</a> -->
<!-- 					</li> -->
<!-- 					<li class="wow fadeInUp" style="animation-delay: 0.4s;"> -->
<!-- 						<a href="<?php echo G5_THEME_URL;?>/html/0002/006.php"> -->
<!-- 							<div><i class="fab fa-accusoft" aria-hidden="true"></i></div>  -->
<!-- 							<p class="txt_tit">후원 신청 </p> -->
<!-- 							<p class="txt_list">&nbsp;&nbsp; </p> -->
<!-- 						</a> -->
<!-- 					</li> -->
<!-- 					<li class="wow fadeInUp" style="animation-delay: 0.6s;"> -->
<!-- 						<a href="<?php echo G5_THEME_URL;?>/html/0002/007.php"> -->
<!-- 							<div><i class="fa fa-hand-holding-heart" aria-hidden="true"></i></div> -->
<!-- 							<p class="txt_tit">자원봉사 신청</p> -->
<!-- 							<p class="txt_list">&nbsp;&nbsp; </p> -->
<!-- 						</a> -->
<!-- 					</li> -->
<!-- 					<li class="wow fadeInUp" style="animation-delay: 0.8s;"> -->
<!-- 						<a href="<?php echo G5_THEME_URL;?>/html/002/002.php"> -->
<!-- 							<div><i class="fa fa-hand-holding-heart" aria-hidden="true"></i></div> -->
<!-- 							<p class="txt_tit">주간식단안내</p> -->
<!-- 							<p class="txt_list">&nbsp;&nbsp; </p> -->
<!-- 						</a> -->
<!-- 					</li> -->
<!-- 										<li class="wow fadeInUp" style="animation-delay: 1.0s;"> -->
<!-- 						<a href="<?php echo G5_THEME_URL;?>/html/0001/005.php"> -->
<!-- 							<div><i class="fa fa-hand-holding-heart" aria-hidden="true"></i></div> -->
<!-- 							<p class="txt_tit">무료셔틀버스</p> -->
<!-- 							<p class="txt_list">&nbsp;&nbsp; </p> -->
<!-- 						</a> -->
<!-- 					</li> -->
<!-- 									 -->
<!-- 				</ul> -->
<!-- 				</div> -->
<!-- 			</div>	 -->
<!-- 		</section> -->
	

</div>


<section id="partner">
	<?php 			
		/*
			파트너배너는 5개이상 진열 되면 슬라이드 됩니다.		
			크기 224*62
		*/			
	?>
	<div id="partner_box">
		<div class="swiper-container3">
			<div class="swiper-wrapper">
				
				<?php 
					$daon_category = "";		//카테고리명 카테고리를 사용하지 않고 전체 출력하실때는  값을 비웁니다.
					echo daontheme_lastest('theme/pic_list1', "banner", 12, 24); //daontheme_lastest("theme/daon_simple", "게시판테이블명", 출력개수, 타이틀길이);
				?>				
			</div>
		</div>

		<div class="swiper-btn-wrap">
			<div class="swiper-scrollbar-wrap22">
				<div class="swiper-button-next3"></div>
				<div class="swiper-button-prev3"></div>				
			</div>
		</div>
	</div>
	<script src="<?php echo G5_THEME_URL;?>/html/css_js/g_slide2.js"></script>
</section>


<?php
include_once(G5_THEME_PATH.'/tail.php');