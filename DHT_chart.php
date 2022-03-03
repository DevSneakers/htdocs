<?php

// 다른 파일의 사용자 정의 함수 "makeChartParts ()"를 읽어들입니다.

require_once './example/make_chart_parts.php';

$con=mysqli_connect("localhost","sensor_admin","rZ3Oytpn9lT*-M9.","all_sensor_data");

if(mysqli_connect_error()){echo "Failed to MySQL:".mysqli_connect_error();}


$data = array( array('', '평균 기온', '평균 습도'),);

for($count = 15; $count > 0; $count--){
  $temp = mysqli_query($con, "SELECT AVG(Temp_D) FROM `quality_meter` WHERE DATE_FORMAT(Time, '%Y-%m-%d') = CURDATE() - INTERVAL {$count} DAY");
  $humi = mysqli_query($con, "SELECT AVG(Humidity_D) FROM `quality_meter` WHERE DATE_FORMAT(Time, '%Y-%m-%d') = CURDATE() - INTERVAL {$count} DAY");
  $temp_row = mysqli_fetch_array($temp);
  $humi_row = mysqli_fetch_array($humi);
  $arr = array(date('d', strtotime($day."-$count day")).'일',(float)$temp_row['AVG(Temp_D)'],(float)$humi_row['AVG(Humidity_D)']);
  array_push($data,$arr);
}

// 그래프 옵션

$options = array(

  'title'  => '평균 온도 그래프',  // 그래프 제목

  'titleTextStyle' => array('fontSize' => 16), // 제목 스타일

  'series' => array(1 => array('targetAxisIndex' => 1)),  // 세로축을 2 축화

  'vAxes'  => array(0 => array('title'    => '평균 기온（℃）',  // 세로축 왼쪽

                               'minValue' =>  0, 'minValue' => 30),

                    1 => array('title'    => '평균 습도（％）',  // 세로축 오른쪽

                               'minValue' => 40, 'maxValue' => 80)),

  'width'  => 1000, 'height' => 500,  // 폭, 높이

  'chartArea' => array('width' => 900, 'height' => 240),  // 차트 영역

  'legend' => array('position' => 'bottom', 'alignment' => 'start'));  // 범례



// 그래프 유형 (선 그래프)

$type = 'LineChart';



// 그래프 그림의 JavaScript 함수, 표시할 <div> 태그의 생성

list($chart, $chart_div) = makeChartParts($data, $options, $type);

?>

<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8">
    <title>꺾은 선 그래프</title>
  </head>
  <body>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
    // 그래프 그리기 함수를 표시합니다.
      <?php
        echo $chart;
      ?>
    </script>
    <!-- 차트를 표시 할 <div> 태그를 적당한 위치에 배치 -->
    <div>
      <?php echo $chart_div; ?>
    </div>
  </body>
</html>