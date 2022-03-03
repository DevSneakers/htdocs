<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "사업영역"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "Type01"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	include_once('header.php'); //회사소개의 공통 상단을 연결합니다.

	
?>


	<div id="sub_tit">
		<div class="path">
			<li><a href="/"><span class="ic-home"><i></i></span></a></li>
			<li><?php echo $tmenu_?></li>
			<li><?php echo $g5['title']?></li>
		</div>
		<div class="title"><?php echo $tmenu_?></div>
		<p class="normal_txt">
			홈페이지를 방문해주셔서 감사합니다.
		</p>
	</div>



	<section class="scontents">


		
		<div class="bg_vline"></div>
		<p class="eng"><em>BUSINESS</em> AREAS</p>
		<p class="stitle">주요사업내역을 안내해드립니다.</p>


		<div class="business">
		<ul>
			<li class="wow fadeInUp">
				<img src="<?php echo G5_THEME_URL;?>/html/business/image/01_1.jpg" alt="사업영역">
				<strong>홈페이지 제작</strong>
				<span>
					이곳은 사업영역 간략설명글이 들어갈 자리입니다.<br>
					이곳은 사업영역 간략설명글이 들어갈 자리입니다.
				</span>
				<br>
				<table class="tbl">
					<tbody>
						<tr>
							<th>방식</th>
							<td>전후진입형</td>
						</tr>					
						<tr>
							<th>펌프</th>
							<td>130 w</td>
						</tr>
						<tr>
							<th>구동모터</th>
							<td>220 V / 400 W</td>
						</tr>
						<tr>
							<th>탱크</th>
							<td>50 L</td>
						</tr>
						<tr>
							<th>정격 소비전력<br>(히타3Kw 제외시)</th>
							<td>1.6Kw</td>
						</tr>
						<tr>
							<th>제품규격(LxWxH)</th>
							<td>850 x 500 x 1,420</td>
						</tr>
						<tr>
							<th>사용전력</th>
							<td>단상 220 V / 60 Hz</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:center;"><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=product1"><span class="btn_go">제품바로가기</span></a></td>
						</tr>
					</tbody>
				</table>
				
			</li>
			<li class="wow fadeInDown">
				<img src="<?php echo G5_THEME_URL;?>/html/business/image/01_2.jpg" alt="사업영역">
				<strong>쇼핑몰 제작</strong>
				<span>
					이곳은 사업영역 간략설명글이 들어갈 자리입니다.<br>
					이곳은 사업영역 간략설명글이 들어갈 자리입니다.
				</span>
				<br>
				<table class="tbl">
					<tbody>
						<tr>
							<th>방식</th>
							<td>전후진입형</td>
						</tr>					
						<tr>
							<th>펌프</th>
							<td>130 w</td>
						</tr>
						<tr>
							<th>구동모터</th>
							<td>220 V / 400 W</td>
						</tr>
						<tr>
							<th>탱크</th>
							<td>50 L</td>
						</tr>
						<tr>
							<th>정격 소비전력<br>(히타3Kw 제외시)</th>
							<td>1.6Kw</td>
						</tr>
						<tr>
							<th>제품규격(LxWxH)</th>
							<td>850 x 500 x 1,420</td>
						</tr>
						<tr>
							<th>사용전력</th>
							<td>단상 220 V / 60 Hz</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:center;"><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=product1"><span class="btn_go">제품바로가기</span></a></td>
						</tr>
					</tbody>
				</table>
			</li>
			<li class="wow fadeInUp">
				<img src="<?php echo G5_THEME_URL;?>/html/business/image/01_3.jpg" alt="사업영역">
				<strong>웹컨텐츠 제작</strong>
				<span>
					이곳은 사업영역 간략설명글이 들어갈 자리입니다.<br>
					이곳은 사업영역 간략설명글이 들어갈 자리입니다.
				</span>
				<br>
				<table class="tbl">
					<tbody>
						<tr>
							<th>방식</th>
							<td>전후진입형</td>
						</tr>					
						<tr>
							<th>펌프</th>
							<td>130 w</td>
						</tr>
						<tr>
							<th>구동모터</th>
							<td>220 V / 400 W</td>
						</tr>
						<tr>
							<th>탱크</th>
							<td>50 L</td>
						</tr>
						<tr>
							<th>정격 소비전력<br>(히타3Kw 제외시)</th>
							<td>1.6Kw</td>
						</tr>
						<tr>
							<th>제품규격(LxWxH)</th>
							<td>850 x 500 x 1,420</td>
						</tr>
						<tr>
							<th>사용전력</th>
							<td>단상 220 V / 60 Hz</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:center;"><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=product1"><span class="btn_go">제품바로가기</span></a></td>
						</tr>
					</tbody>
				</table>
			</li>
		</ul>
		</div>
		


	</section>



<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>