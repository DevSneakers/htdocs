<?
	//화면의 성격
	$user_division = "user";
	$screen_div = "sub";
	$frame_div = "two";

	//카테고리 명칭 & 카테고리 번호
	$cate_name = "복지관소개";
	$cate_num = "1";

	//페이지 명칭 & 페이지 번호
	$page_name = "무료셔틀 버스 노선도";
	$page_num = "7";

	//현재 활성화 상태
	$gn_btn = "gn_btn".$cate_num;
	$$gn_btn = "current";
	$ln_btn = "ln_btn".$page_num;
	$$ln_btn = "current";
?>
<?include_once("../include/head_sub.php");?>
<?include_once("../include/header.php");?>
<!-- 컨텐츠 : 시작 -->
<div class="shuttle_bus_area">
	<div class="bus_intro">
		<span>장애인, 노약자 및 임산부</span>를<br />
		위해 <span>무료 셔틀버스</span>를 운영합니다.
	</div>
	<div class="common_list mb50">
		<ul>
			<li>복지관을 출발하여 안양지역의 지하철역 및 주요지역을 순환, 주요지역 20여 곳을 들러 복지관으로 돌아오는 순환버스입니다.</li>
			<li>휠체어 장애인도 쉽게 탑승할 수 있는 초저상 셔틀버스입니다.</li>
			<li>토요일은 08:00, 12:30 총 2회 차량 운행되며, 차량의 흐름에 따라 시간이 변동될 수 있습니다.</li>
		</ul>
	</div>
	<h5 class="h5_label">무료셔틀 1호차<!-- <a href="../images/down/shuttle_bus_1.jpg" class="bus_down" target="blank" download="무료셔틀 1호차">노선도 다운로드<img src="../images/sub1/bus_down.jpg"></a> --><a href="../images/down/suri_num1.jpg" class="bus_down" target="blank" download="무료셔틀 1호차">노선도 다운로드<img src="../images/sub1/bus_down.jpg"></a>
	
	</h5>
	<div class="common_table">
		<table class="" summary="무료셔틀 1호차의 정류장에 따른 시간 정보 제공" >
			<caption>무료셔틀 1호차의 시간표</caption>
			<colgroup>
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
			</colgroup>
			<thead>
				<tr>
					<th scope="col">수리<br />복지관</th>
					<th scope="col">안양<br />샘병원</th>
					<th scope="col">안양5동<br />주민<br />센터</th>
					<th scope="col">삼일<br />센터카</th>
					<th scope="col">안양<br />예술고</th>
					<th scope="col">새마을</th>
					<th scope="col">병목안</th>
					<th scope="col">삼덕<br />공원</th>
					<th scope="col">안양<br />여고앞</th>
					<th scope="col">한라<br />비발디</th>
					<th scope="col">충훈부</th>
					<th scope="col">석수<br />럭키(A)</th>
					<th scope="col">군부대</th>
					<th scope="col">연현초</th>
					<th scope="col">관악역</th>
					<th scope="col">영화<br />아파트</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>08:00</td>
					<td>08:05</td>
					<td>08:06</td>
					<td>08:12</td>
					<td></td>
					<td></td>
					<td></td>
					<td>08:15</td>
					<td>08:20</td>
					<td>08:22</td>
					<td>08:25</td>
					<td>08:30</td>
					<td>08:35</td>
					<td>08:40</td>
					<td>08:45</td>
					<td>08:48</td>
				</tr>
				<tr>
					<td colspan="16">셔틀버스 연료주입</td>
				</tr>
				<tr>
					<td>12:40</td>
					<td>12:45</td>
					<td>12:47</td>
					<td>12:50</td>
					<td>12:55</td>
					<td>13:00</td>
					<td>13:02</td>
					<td>13:05</td>
					<td>13:08</td>
					<td>13:10</td>
					<td>13:12</td>
					<td>13:15</td>
					<td>13:20</td>
					<td>13:25</td>
					<td>13:30</td>
					<td>13:35</td>
				</tr>
				<tr>
					<td>14:40</td>
					<td>14:45</td>
					<td>14:47</td>
					<td>14:50</td>
					<td>14:55</td>
					<td>15:00</td>
					<td>15:02</td>
					<td>15:05</td>
					<td>15:08</td>
					<td>15:10</td>
					<td>15:12</td>
					<td>15:15</td>
					<td>15:20</td>
					<td>15:25</td>
					<td>15:30</td>
					<td>15:35</td>
				</tr>
				<tr>
					<td>16:30</td>
					<td>16:35</td>
					<td>16:39</td>
					<td>16:42</td>
					<td>16:45</td>
					<td>16:50</td>
					<td>16:52</td>
					<td>16:55</td>
					<td>16:57</td>
					<td>17:00</td>
					<td>17:05</td>
					<td>17:07</td>
					<td></td>
					<td>17:10</td>
					<td>17:12</td>
					<td>17:15</td>
				</tr>
			</tbody>
		</table>

		<table class="mt5" summary="무료셔틀 1호차의 정류장에 따른 시간 정보 제공" >
			<caption>무료셔틀 1호차의 시간표</caption>
			<colgroup>
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
			</colgroup>
			<thead>
				<tr>
					<th scope="col">삼성<br />아파트</th>
					<th scope="col">삼성초</th>
					<th scope="col">관악<br />복지관</th>
					<th scope="col">비산동<br />이마트</th>
					<th scope="col">미륭<br />아파트</th>
					<th scope="col">부흥동<br />슈퍼앞</th>
					<th scope="col">평생<br />학습원</th>
					<th scope="col">농협<br />중앙회</th>
					<th scope="col">안양<br />시청앞</th>
					<th scope="col">한림대<br />병원</th>
					<th scope="col">목련<br />우성(A)</th>
					<th scope="col">호계<br />노인<br />복지<br />회관</th>
					<th scope="col">명학역</th>
					<th scope="col">만안<br />구청앞</th>
					<th scope="col">수리<br />복지관</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>08:50</td>
					<td></td>
					<td>08:53</td>
					<td>08:57</td>
					<td>09:00</td>
					<td>09:03</td>
					<td>09:05</td>
					<td>09:10</td>
					<td>09:12</td>
					<td>09:14</td>
					<td>09:17</td>
					<td>09:22</td>
					<td>09:30</td>
					<td>09:33</td>
					<td>09:40</td>
					<td></td>
				</tr>
				<tr>
					<td>13:37</td>
					<td>13:41</td>
					<td>13:46</td>
					<td>13:49</td>
					<td>13:52</td>
					<td>13:55</td>
					<td>13:57</td>
					<td>13:59</td>
					<td></td>
					<td></td>
					<td></td>
					<td>14:05</td>
					<td>14:09</td>
					<td>14:11</td>
					<td>14:14</td>
					<td></td>
				</tr>
				<tr>
					<td>15:37</td>
					<td>15:42</td>
					<td>15:47</td>
					<td>15:50</td>
					<td>15:53</td>
					<td>15:56</td>
					<td>15:58</td>
					<td>16:01</td>
					<td></td>
					<td></td>
					<td></td>
					<td>16:07</td>
					<td>16:11</td>
					<td>16:13</td>
					<td>16:19</td>
					<td></td>
				</tr>
				<tr>
					<td>17:20</td>
					<td></td>
					<td>17:25</td>
					<td>17:30</td>
					<td>17:35</td>
					<td>17:37</td>
					<td>17:40</td>
					<td>17:45</td>
					<td></td>
					<td></td>
					<td></td>
					<td>17:50</td>
					<td>17:52</td>
					<td>17:55</td>
					<td>18:00</td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
	<h5 class="h5_label">무료셔틀 2호차<a href="../images/down/suri_num2.jpg" class="bus_down" target="blank" download="무료셔틀 2호차">노선도 다운로드<img src="../images/sub1/bus_down.jpg"></a></h5>
	<div class="common_table">
		<table class="" summary="무료셔틀 2호차의 정류장에 따른 시간 정보 제공" >
			<caption>무료셔틀 2호차의 시간표</caption>
			<colgroup>
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
			</colgroup>
			<thead>
				<tr>
					<th scope="col">수리<br />복지관</th>
					<th scope="col">만안<br />구청</th>
					<th scope="col">명학역</th>
					<th scope="col">호계<br />복지관</th>
					<th scope="col">목련<br />우성</th>
					<th scope="col">한림대<br />병원</th>
					<th scope="col">안양<br />시청</th>
					<th scope="col">농협<br />중앙회</th>
					<th scope="col">평생<br />학습원</th>
					<th scope="col">한양<br />스포츠</th>
					<th scope="col">이편한<br />세상@</th>
					<th scope="col">이마트</th>
					<th scope="col">관악<br />복지관</th>
					<th scope="col">삼성초</th>
					<th scope="col">삼성<br />아파트</th>
					<th scope="col">영화<br />아파트</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>08:00</td>
					<td>08:05</td>
					<td>08:06</td>
					<td>08:12</td>
					<td>08:15</td>
					<td>08:20</td>
					<td>08:23</td>
					<td>08:25</td>
					<td>08:28</td>
					<td>08:30</td>
					<td>08:32</td>
					<td>08:35</td>
					<td>08:40</td>
					<td>08:43</td>
					<td>08:50</td>
					<td>08:52</td>
				</tr>
				<tr>
					<td colspan="16">셔틀버스 연료주입</td>
				</tr>
				<tr>
					<td>12:40</td>
					<td>12:45</td>
					<td>12:46</td>
					<td>12:52</td>
					<td>12:55</td>
					<td>13:00</td>
					<td>13:03</td>
					<td>13:05</td>
					<td>13:08</td>
					<td>13:10</td>
					<td>13:12</td>
					<td>13:15</td>
					<td>13:20</td>
					<td></td>
					<td>13:23</td>
					<td>13:25</td>
				</tr>
				<tr>
					<td>14:40</td>
					<td>14:45</td>
					<td>14:46</td>
					<td>14:52</td>
					<td>14:55</td>
					<td>15:00</td>
					<td>15:03</td>
					<td>15:05</td>
					<td>15:08</td>
					<td>15:10</td>
					<td>15:12</td>
					<td>15:15</td>
					<td>15:20</td>
					<td></td>
					<td>15:23</td>
					<td>15:25</td>
				</tr>
				<tr>
					<td>16:30</td>
					<td>16:35</td>
					<td>16:36</td>
					<td>16:42</td>
					<td>16:45</td>
					<td>16:50</td>
					<td>16:53</td>
					<td>16:55</td>
					<td>16:58</td>
					<td>17:00</td>
					<td>17:02</td>
					<td>17:05</td>
					<td>17:10</td>
					<td>17:13</td>
					<td>17:20</td>
					<td>17:22</td>
				</tr>
			</tbody>
		</table>
		<table class="mt5" summary="무료셔틀 2호차의 정류장에 따른 시간 정보 제공" >
			<caption>무료셔틀 2호차의 시간표</caption>
			<colgroup>
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
			</colgroup>
			<thead>
				<tr>
					<th scope="col">관악역</th>
					<th scope="col">연현초</th>
					<th scope="col">군부대</th>
					<th scope="col">석수<br />럭키</th>
					<th scope="col">충훈부</th>
					<th scope="col">한라<br />비발디</th>
					<th scope="col">안양<br />여고</th>
					<th scope="col">삼덕<br />공원</th>
					<th scope="col">에술고</th>
					<th scope="col">새마을</th>
					<th scope="col">병목안</th>
					<th scope="col">삼일카</th>
					<th scope="col">근명<br />여중</th>
					<th scope="col">안양샘<br />병원</th>
					<th scope="col">수리<br />복지관</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td>08:59</td>
					<td>09:01</td>
					<td>09:04</td>
					<td>09:05</td>
					<td>09:07</td>
					<td>09:10</td>
					<td>09:14</td>
					<td>09:17</td>
					<td>09:19</td>
					<td>09:22</td>
					<td>09:30</td>
					<td>09:32</td>
					<td>09:35</td>
					<td>09:42</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>13:30</td>
					<td>13:34</td>
					<td>13:36</td>
					<td>13:37</td>
					<td>13:39</td>
					<td>13:42</td>
					<td>13:45</td>
					<td>13:47</td>
					<td>13:48</td>
					<td>13:52</td>
					<td>14:00</td>
					<td>14:02</td>
					<td>14:05</td>
					<td>14:10</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>15:30</td>
					<td>15:34</td>
					<td>15:36</td>
					<td>15:37</td>
					<td>15:39</td>
					<td>15:42</td>
					<td>15:45</td>
					<td>15:47</td>
					<td>15:48</td>
					<td>15:52</td>
					<td>16:00</td>
					<td>16:02</td>
					<td>16:05</td>
					<td>16:10</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>17:30</td>
					<td>17:34</td>
					<td>17:35</td>
					<td>17:37</td>
					<td>17:40</td>
					<td>17:44</td>
					<td></td>
					<td></td>
					<td></td>
					<td>17:49</td>
					<td>17:54</td>
					<td>17:57</td>
					<td>18:02</td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
	<h5 class="h5_label">무료셔틀 3호차<a href="../images/down/suri_num3.jpg" class="bus_down" target="blank" download="무료셔틀 3호차">노선도 다운로드<img src="../images/sub1/bus_down.jpg"></a></h5>
	<div class="common_table">
		<table class="" summary="무료셔틀 3호차의 정류장에 따른 시간 정보 제공" >
			<caption>무료셔틀 3호차의 시간표</caption>
			<colgroup>
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
			</colgroup>
			<thead>
				<tr>
					<th scope="col">수리<br />복지관</th>
					<th scope="col">중앙<br />한방<br />병원</th>
					<th scope="col">덕천<br />마을<br />입구</th>
					<th scope="col">비산<br />아파트</th>
					<th scope="col">미륭<br />아파트</th>
					<th scope="col">종합<br />운동장<br />사거리</th>
					<th scope="col">관양<br />사거리</th>
					<th scope="col">동편<br />마을<br />1,2단지</th>
					<th scope="col">인덕원<br />사거리</th>
					<th scope="col">새중앙<br />교회<br />(오뚜기)</th>
					<th scope="col">농수<br />산물<br />시장</th>
					<th scope="col">덕고개<br />사거리</th>
					<th scope="col">평촌<br />자유<br />공원</th>
					<th scope="col">평촌<br />학원가</th>
					<th scope="col">한림대<br />병원(중<br />앙공원)</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>08:00</td>
					<td>08:04</td>
					<td>08:06</td>
					<td>08:10</td>
					<td>08:13</td>
					<td>08:16</td>
					<td>08:18</td>
					<td>08:24</td>
					<td>08:29</td>
					<td>08:32</td>
					<td>08:34</td>
					<td>08:40</td>
					<td>08:42</td>
					<td>08:45</td>
					<td>08:50</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="16">셔틀버스 연료주입</td>
				</tr>
				<tr>
					<td>12:40</td>
					<td>12:44</td>
					<td>12:46</td>
					<td>12:50</td>
					<td>12:53</td>
					<td>12:56</td>
					<td>12:58</td>
					<td>13:04</td>
					<td>13:09</td>
					<td>13:12</td>
					<td>13:14</td>
					<td>13:20</td>
					<td>13:22</td>
					<td>13:25</td>
					<td>13:30</td>
					<td></td>
				</tr>
				<tr>
					<td>14:40</td>
					<td>14:44</td>
					<td>14:45</td>
					<td>14:49</td>
					<td>14:52</td>
					<td>14:54</td>
					<td>14:56</td>
					<td>15:00</td>
					<td>15:05</td>
					<td>15:08</td>
					<td>15:10</td>
					<td>15:15</td>
					<td>15:17</td>
					<td>15:20</td>
					<td>15:25</td>
					<td></td>
				</tr>
				<tr>
					<td>16:30</td>
					<td>16:34</td>
					<td>16:35</td>
					<td>16:39</td>
					<td>16:41</td>
					<td>16:43</td>
					<td>16:45</td>
					<td>16:49</td>
					<td>16:53</td>
					<td>16:58</td>
					<td>17:00</td>
					<td>17:05</td>
					<td>17:07</td>
					<td>17:10</td>
					<td>17:15</td>
					<td></td>
				</tr>
			</tbody>
		</table>
		<table class="mt5" summary="무료셔틀 3호차의 정류장에 따른 시간 정보 제공" >
			<caption>무료셔틀 3호차의 시간표</caption>
			<colgroup>
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
				<col width="6.25%" />
			</colgroup>
			<thead>
				<tr>
					<th scope="col">안양<br />시청</th>
					<th scope="col">범계역</th>
					<th scope="col">관악<br />장애인<br />복지관</th>
					<th scope="col">보장구<br />센터</th>
					<th scope="col">덕천<br />마을<br />1,2단지</th>
					<th scope="col">국제<br />나은<br />병원</th>
					<th scope="col">수리<br />복지관</th>
					<th scope="col"></th>
					<th scope="col"></th>
					<th scope="col"></th>
					<th scope="col"></th>
					<th scope="col"></th>
					<th scope="col"></th>
					<th scope="col"></th>
					<th scope="col"></th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>08:53</td>
					<td>08:55</td>
					<td>09:03</td>
					<td>09:10</td>
					<td>09:15</td>
					<td>09:20</td>
					<td>09:26</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>13:33</td>
					<td>13:35</td>
					<td>13:43</td>
					<td>13:50</td>
					<td>13:55</td>
					<td>14:00</td>
					<td>14:05</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>15:28</td>
					<td>15:30</td>
					<td>15:38</td>
					<td>15:43</td>
					<td>15:48</td>
					<td>15:53</td>
					<td>15:58</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>17:18</td>
					<td>17:20</td>
					<td>17:27</td>
					<td>17:34</td>
					<td>17:39</td>
					<td>17:43</td>
					<td>17:48</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<!-- 컨텐츠 : 종료 -->
<?include_once("../include/footer.php");?>
<?include_once("../_tail.php");?>