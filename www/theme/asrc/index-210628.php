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
					
					<?php				

						if(!$youtube_idx) $youtube_idx = "PZO-2Vww3lU"; //유투브동영상 아이디를 넣으세요. 유투브영상 링크의 v값이 아이디입니다. https://www.youtube.com/watch?v=유투브아이디

						/*
							
							유투브 동영상 삽입 주의사항
							1. 유투브 동영상을 첫번째 컷, 마지막 컷으로 사용하실 경우	/html/css_js/main.js 의 4번째 라인 loop: true, 를 loop: false, 로 바꾸셔야 합니다.	
							2. 유투브 동영상은 여러개 불가능하며 1개만 가능합니다.

							유투브 배경이미지 안내
							1. 유투브영상은 로딩되는 시간이 필요합니다. 이는 조절할 수 있는 시간이 아닙니다.
							2. 로딩시간이 길어져 동영상이 느리게 뜰 경우를 대비해 유투브 영상의 첫 프레임을 이미지화하여 배경이미지로 사용하면 좋습니다.							
						 
						*/

						if(!$youtube_bg) $youtube_bg = ""; //유투브 배경이미지 : 직접 만드신 이미지가 있다면 이미지경로를 입력하세요.
						if(!$youtube_bg || $_OS_ == "mobile") $youtube_bg = "https://img.youtube.com/vi/{$youtube_idx}/0.jpg"; // 수정삭제 하지 마세요. 배경이미지 경로를 입력하지 않으면 유투브영상의 썸네일을 자동으로 가져옵니다. 이미지가 깨져보일 수 있으며, 첫 프레임이미지가 아닐 수 있습니다.	
						
						$youtube_position = "center,right"; //유투브 영상의 위치를 정렬합니다. 상하,좌우  로 설정하며 상하 는 top center bottom  좌우는 left center right  center,right 라면 상하중간,우측 으로 정렬
						if($_OS_ == "mobile") $youtube_position = "center,center"; //모바일일때 상하중간,좌우중간 으로 정렬

						$youtube_optimize = "true"; // true 이면 슬라이드 전체화면에 유투브를 띄우며, 이경우 영상의 상하,좌후가 잘려보일수 있습니다.   flase 이면 유투브를 화면에 꽉차게 띄우지 않고 영상이 전체 보이도록 조정합니다.


					?>
					<div class="swiper-slide swiper-lazy" data-swiper-autoplay="8000"> <?php  //data-swiper-autoplay="5000" 5초후 다음컷 ?>
						<div class="sliderkit-text wow fadeIn">
							<h1 class="lviewa animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="0.5s"></h1>
							<h1 class="sviewa animated" data-swiper-animation="fadeInUp"   data-duration="1.2s" data-delay="0.7s"> </h1>
							<div class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1s"><span><h2></h2></span></div>
						</div>
						<div class="backgroundimg">
							<div class="pc_only"><img src="<?php echo G5_THEME_URL;?>/html/image/main-210621.jpg"></div>
							<div class="mobile_only"><img src="<?php echo G5_THEME_URL;?>/html/image/main-210621.jpg"></div>
						</div>   
						<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
					</div>					

					<div class="swiper-slide swiper-lazy"  data-swiper-autoplay="10000" > <?php  //data-swiper-autoplay="31000" 31초후 다음컷 동영상 시간만큼 설정 1초 = 1000 ?>							
						<div class="sliderkit-text" style="z-index:99999999;">
							<h1 class="lviewa animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="0.5s">안양수리장애인종합복지관</h1>
							<h1 class="sviewa animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="0.7s">전문성, 섬김, 사랑, 존중, 소통을 중요시합니다.<br>전문성을 기반으로 복지 서비스를 제공하는 사랑의 복지관</h1>
							<div class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1s"><span><h2>Tel:031-465-0950~9</h2></span></div>
						</div>
						<div id="bgndVideo1" style="width:100%; height:100%; background:url('<?php echo $youtube_bg;?>') no-repeat center center; background-size:cover;"></div>
						<div id="bgndVideo" class="player" data-property="{videoURL:'https://youtu.be/<?php echo $youtube_idx?>',containment:'#bgndVideo1',showControls:false,startAt:0,stopAt:0,mute:true,autoPlay:true,loop:true,opacity:1,quality:'highres',anchor:'<?php echo $youtube_position?>',optimizeDisplay:<?php echo $youtube_optimize?>}"></div>
						<?php 
							
							/*
								유투브 backgroundimg 는 
								다른 메인슬라이드 이미지와 같은 크기의 투명이미지를 올립니다.
							*/
						
						?>
						<div class="backgroundimg">
							<div class="pc_only"><img src="<?php echo G5_THEME_URL;?>/html/image/main-21040702.jpg"></div>
							<div class="mobile_only"><img src="<?php echo G5_THEME_URL;?>/html/image/main-21040702.jpg"></div>
						</div>
						<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
					</div>	

					<div class="swiper-slide swiper-lazy" data-swiper-autoplay="5000"> <?php  //data-swiper-autoplay="5000" 5초후 다음컷 ?>
						<div class="sliderkit-text">
							<h1 class="lviewa animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="0.5s">안양수리장애인종합복지관</h1>
							<h1 class="sviewa animated" data-swiper-animation="fadeInUp"   data-duration="1.2s" data-delay="0.7s">전문성, 섬김, 사랑, 존중, 소통을 중요시합니다.<br>존중으로 소통하는 행복한 지역공동체  </h1>
							<div class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1s"><span><h2>Fax:031-465-0960</h2></span></div>
						</div>
						<div class="backgroundimg">
							<div class="pc_only"><img src="<?php echo G5_THEME_URL;?>/html/image/main-21040703.jpg"></div>
							<div class="mobile_only"><img src="<?php echo G5_THEME_URL;?>/html/image/main-21040703.jpg"></div>
						</div>  
						<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
					</div>

				</div>
				<div class="swiper-pagination"></div>

				<div class="swiper-button-next"></div>
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


		<section id="comm_wrap1">
			<p style="text-align: center; ">
			   <span style="font-size: 22px;"><b>자주 찾는 서비스</b></span>
			</p>
			<div class="comm_area">
				<div class="comm_bnr">
				<ul>
					<li class="wow fadeInUp" style="animation-delay: 0s;">
						<a href="<?php echo G5_THEME_URL;?>/html/wait/wait_pass.php">
							<div><i class="fa fa-edit" aria-hidden="true"></i></div>
							<p class="txt_tit">대기자 조회</p>
							<p class="txt_list"> &nbsp;&nbsp;   </p>
						</a>
					</li>
					<li class="wow fadeInUp" style="animation-delay: 0.2s;">
						<a href="http://asrc2103.cafe24.com/bbs/board.php?bo_table=1005">
							<div><i class="fa fa-question-circle" aria-hidden="true"></i></div>
							<p class="txt_tit">프로그램 신청</p>
							<p class="txt_list">&nbsp;&nbsp; </p>
						</a>
					</li>
					<li class="wow fadeInUp" style="animation-delay: 0.4s;">
						<a href="<?php echo G5_THEME_URL;?>/html/003/011.php">
							<div><i class="fab fa-accusoft" aria-hidden="true"></i></div> 
							<p class="txt_tit">후원 신청 </p>
							<p class="txt_list">&nbsp;&nbsp; </p>
						</a>
					</li>
					<li class="wow fadeInUp" style="animation-delay: 0.6s;">
						<a href="<?php echo G5_THEME_URL;?>/html/003/014.php">
							<div><i class="fa fa-hand-holding-heart" aria-hidden="true"></i></div>
							<p class="txt_tit">자원봉사 신청</p>
							<p class="txt_list">&nbsp;&nbsp; </p>
						</a>
					</li>
					<li class="wow fadeInUp" style="animation-delay: 0.8s;">
						<a href="<?php echo G5_THEME_URL;?>/html/002/002.php">
							<div><i class="fa fa-hand-holding-heart" aria-hidden="true"></i></div>
							<p class="txt_tit">주간식단안내</p>
							<p class="txt_list">&nbsp;&nbsp; </p>
						</a>
					</li>
										<li class="wow fadeInUp" style="animation-delay: 1.0s;">
						<a href="<?php echo G5_THEME_URL;?>/html/002/010.php">
							<div><i class="fa fa-hand-holding-heart" aria-hidden="true"></i></div>
							<p class="txt_tit">무료셔틀버스</p>
							<p class="txt_list">&nbsp;&nbsp; </p>
						</a>
					</li>
									
				</ul>
				</div>
			</div>	
		</section>





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
			<div class="comm_area">
				<div class="comm_bnr">
				<ul>
					<li class="wow fadeInUp" style="animation-delay: 0s;">
						<a href="http://asrc2103.cafe24.com/bbs/board.php?bo_table=1006">
							<div><i class="fa fa-edit" aria-hidden="true"></i></div>
							<p class="txt_tit">활동지원 안내</p>
							<p class="txt_list">중증 장애인 활동지원<br>서비스에 대해 알려드립니다.</p>
						</a>
					</li>
					<li class="wow fadeInUp" style="animation-delay: 0.2s;">
						<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=1001">
							<div><i class="fa fa-question-circle" aria-hidden="true"></i></div>
							<p class="txt_tit">해피버스</p>
							<p class="txt_list">장애인 문화/체험 여행을 위한 <br>해피버스 신청방법을 알려드립니다.</p>
						</a>
					</li>
					<li class="wow fadeInUp" style="animation-delay: 0.4s;">
						<a href="http://asrc2103.cafe24.com/bbs/board.php?bo_table=1008">
							<div><i class="fa fa-camera" aria-hidden="true"></i></div>
							<p class="txt_tit">문의하기</p>
							<p class="txt_list">복지관 이용에 대한<br>문의사항을 답변해 드립니다.</p>
						</a>
					</li>
					<li class="wow fadeInUp" style="animation-delay: 0.6s;">
						<a href="<?php echo G5_THEME_URL;?>/html/005/023.php">
							<div><i class="fa fa-hand-holding-heart" aria-hidden="true"></i></div>
							<p class="txt_tit">조직현황</p>
							<p class="txt_list">수리복지관 직원현황에 대해 <br>알려드립니다.</p>
						</a>
					</li>
				</ul>
				</div>
			</div>	
		</section>

		
		<section id="company_wrap">
			<div class="company_tit wow bounceInUp">
				<p>수리 이모저모</p>
<!-- 				<span>장애인과 비장애인이 조화롭게 어울리는 <br class="sview">다양한 사업을 진행하고 있습니다.</span> -->
			</div>
			<div class="circle_wrap">
				<div class="circle_area">
				<li class="wow fadeInUp">
					<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=1006" >
						<div class="tb">
							<div class="td">								
								<i class="fa fa-building"></i>
								<p>소식지</p>
								<span>소중한 후원금은<br>이렇게 사용됩니다.</span>
							</div>
						</div>
					</a>
				</li>
				<li class="wow fadeInDown">
					<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=1009">
						<div class="tb">
							<div class="td">							
								<i class="far fa-hourglass"></i>
								<p>복지정보</p>
								<span>자원봉사는<br>이렇게 참여하실 수 있습니다.</span>
							</div>
						</div>
					</a>
				</li>
				<li class="wow fadeInUp">
					<a href="http://asrc2103.cafe24.com/bbs/board.php?bo_table=1002">
						<div class="tb">
							<div class="td">								
								<i class="fab fa-accessible-icon"></i>
								<p>장애인식개선</p>
								<span>장애에 대한<br>올바른 인식이 중요합니다.</span>
							</div>
						</div>
					</a>
				</li>
				<li class="wow fadeInDown">
					<a href="<?php echo G5_THEME_URL;?>/html/005/024.php">
						<div class="tb">
							<div class="td">								
								<i class="fa fa-trophy"></i>
								<p>권익옹호</p>
								<span>복지관 방문을 위한<br>사전 신청 공간</span>
							</div>
						</div>
					</a>
				</li>
				</div>
			</div>
		</section>		
			

	

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