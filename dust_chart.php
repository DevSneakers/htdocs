<?php

// 다른 파일의 사용자 정의 함수 "makeChartParts ()"를 읽어들입니다.

require_once './example/make_chart_parts.php';

$con=mysqli_connect("localhost","sensor_admin","rZ3Oytpn9lT*-M9.","all_sensor_data");

if(mysqli_connect_error()){echo "Failed to MySQL:".mysqli_connect_error();}


$data = array( array('', '평균 미세먼지'),);

for($count = 15; $count > 0; $count--){
  $temp = mysqli_query($con, "SELECT AVG(dust_D) FROM `quality_meter` WHERE DATE_FORMAT(Time, '%Y-%m-%d') = CURDATE() - INTERVAL {$count} DAY");
  $temp_row = mysqli_fetch_array($temp);
  $arr = array(date('d', strtotime($day."-$count day")).'일',(int)$temp_row['AVG(dust_D)']);
  array_push($data,$arr);
}

// 그래프 옵션

$options = array(

  'title'  => '평균 미세먼지 그래프 ('.(date('m').'월)'),  // 그래프 제목

  'titleTextStyle' => array('fontSize' => 16), // 제목 스타일

  'vAxes'  => array(0 => array('title'    => '평균 미세먼지（PM）',  // 세로축 왼쪽

                               'minValue' =>  0, 'maxValue' => 1000)),

  'width'  => 1200, 'height' => 500,  // 폭, 높이

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
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
    // 그래프 그리기 함수를 표시합니다.
      <?php
        echo $chart;
        echo 'console.log('.json_encode($data).')';
      ?>
    </script>
  </head>
  <body>
    <!-- 차트를 표시 할 <div> 태그를 적당한 위치에 배치 -->
    <div>
      <?php echo $chart_div; ?>
    </div>
  </body>
</html>