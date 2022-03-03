<?php

// 다른 파일의 사용자 정의 함수 "makeChartParts ()"를 읽어들입니다.

require_once './make_chart_parts.php';



// グラフの値

$data = array(

  array('월', '평균 기온', '평균 습도',),

  array('1 월',   4.5, 64), array('2월',   5.2, 61), array('3월',   8.7, 59),

  array('4월',  14.4, 60), array('5월',  18.9, 65), array('6월',  22.7, 71),

  array('7월',  26.4, 74), array('8월',  27.8, 70), array('9월',  24.1, 71),

  array('10월', 18.1, 68), array('11월', 12.2, 66), array('12월',  7.0, 65));



// 그래프 옵션

$options = array(

  'title'  => '평균 온도와 습도 그래프',  // 그래프 제목

  'titleTextStyle' => array('fontSize' => 16), // 제목 스타일

  'series' => array(1 => array('targetAxisIndex' => 1)),  // 세로축을 2 축화

  'vAxes'  => array(0 => array('title'    => '평균 기온（℃）',  // 세로축 왼쪽

                               'minValue' =>  0, 'minValue' => 40),

                    1 => array('title'    => '평균 습도（％）',  // 세로축 오른쪽

                               'minValue' => 40, 'maxValue' => 80)),

  'width'  => 700, 'height' => 500,  // 폭, 높이

  'chartArea' => array('width' => 600, 'height' => 240),  // 차트 영역

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