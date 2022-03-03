<?php
  $con=mysqli_connect("localhost","sensor_admin","rZ3Oytpn9lT*-M9.","all_sensor_data");

  //구글 차트 그려주는 함수
  require_once $_SERVER['DOCUMENT_ROOT'].'/example/make_chart_parts.php';

  if(mysqli_connect_error()){
    echo "Failed to MySQL:".mysqli_connect_error();
  }
  else{
    
    // 표 최상단 타이틀
    $locations = array("창가","냉장고 위", "4번 책상", "3번 책상", "2번 책상", "5번 책상", "6번 책상", "1번 책상");

    //ajax로부터 받은 데이터
    $ajax_sensor = $_POST['sensor'];
    $ajax_date = $_POST['date'];
    $ajax_view = $_POST['view'];
    $ajax_time = $_POST['time'];

    if($ajax_sensor == "Temp_D"){
      $sensor_name = "온도";
      $sensor_unit = "&#176C";
    }
    else if($ajax_sensor == "Humidity_D"){
      $sensor_name = "습도";
      $sensor_unit = "%";
    }
    else if($ajax_sensor == "CO2_D"){
      $sensor_name = "이산화탄소";
      $sensor_unit = "PPM";
    }
    else if($ajax_sensor == "illuminance_D"){
      $sensor_name = "조도";
      $sensor_unit = "Lux";
    }

    //표 그릴 데이터 가공(선택한 당일날의 평균값)
    if($ajax_time == "day"){
      for($i = 1 ; $i <= 8 ; $i++){
        ${'arduino'.$i} = "SELECT Name_D,AVG(".$ajax_sensor."),Time FROM (SELECT * FROM `indoor_env` WHERE Name_D = 'Arduino{$i}')a WHERE DATE_FORMAT(Time, '%Y-%m-%d') = '$ajax_date'";
        ${'result'.$i} = mysqli_query($con, ${'arduino'.$i});
        ${'row_arduino_'.$i} = mysqli_fetch_array(${'result'.$i});
      }
    }
    else if($ajax_time == "hour"){
      //표 그릴 데이터 가공(선택한 당일날의 1시간 단위 평균값)
      for($i = 1 ; $i <= 8 ; $i++){
        for($j = 0 ; $j <= 23 ; $j++){
          // 0~23시까지의 쿼리문
          if($j < 23){
            $k = $j+1;
            ${'arduino'.$i.$j} = "SELECT Name_D,AVG(".$ajax_sensor."),Time FROM (SELECT * FROM `indoor_env` WHERE Name_D = 'Arduino{$i}')a WHERE Time BETWEEN '$ajax_date, 0{$j}:00:00' AND '$ajax_date, 0{$k}:00:00'";
            ${'result'.$i.$j} = mysqli_query($con, ${'arduino'.$i.$j});
            ${'row_arduino_'.$i.'_'.$j} = mysqli_fetch_array(${'result'.$i.$j}); // 변수명은 row_arduino_번호_시간
          }
          // 24시일땐 시간 사이를 23시부터 23시 59분 59초 까지
          else if($j == 23){
            ${'arduino'.$i.$j} = "SELECT Name_D,AVG(".$ajax_sensor."),Time FROM (SELECT * FROM `indoor_env` WHERE Name_D = 'Arduino{$i}')a WHERE Time BETWEEN '$ajax_date, 0{$j}:00:00' AND '$ajax_date, 0{$j}:59:59'";
            ${'result'.$i.$j} = mysqli_query($con, ${'arduino'.$i.$j});
            ${'row_arduino_'.$i.'_'.$j} = mysqli_fetch_array(${'result'.$i.$j});
          }
        }
      }
    }
    else if($ajax_time == "minute"){
      //표 그릴 데이터 가공(선택한 당일날의 분 단위 값)
      for($i = 1 ; $i <= 8 ; $i++){
        for($j = 0 ; $j <= 23 ; $j++){
          // 0~23시까지의 쿼리문
          if($j < 23){
            for($k = 0 ; $k <= 1 ; $k++){
              if($k == 0){
                ${'arduino'.$i.$j.$k} = "SELECT Name_D,AVG(".$ajax_sensor."),Time FROM (SELECT * FROM `indoor_env` WHERE Name_D = 'Arduino{$i}')a WHERE Time BETWEEN '$ajax_date, 0{$j}:00:00' AND '$ajax_date, 0{$j}:30:00'";
                ${'result'.$i.$j.$k} = mysqli_query($con, ${'arduino'.$i.$j.$k});
                ${'row_arduino_'.$i.'_'.$j.'_'.$k} = mysqli_fetch_array(${'result'.$i.$j.$k}); // 변수명은 row_arduino_번호_시간_30분 단위로 앞뒤
              }
              else if($k == 1){
                ${'arduino'.$i.$j.$k} = "SELECT Name_D,AVG(".$ajax_sensor."),Time FROM (SELECT * FROM `indoor_env` WHERE Name_D = 'Arduino{$i}')a WHERE Time BETWEEN '$ajax_date, 0{$j}:30:01' AND '$ajax_date, 0{$j}:59:59'";
                ${'result'.$i.$j.$k} = mysqli_query($con, ${'arduino'.$i.$j.$k});
                ${'row_arduino_'.$i.'_'.$j.'_'.$k} = mysqli_fetch_array(${'result'.$i.$j.$k}); // 변수명은 row_arduino_번호_시간_30분 단위로 앞뒤
              }
            }
          }
          // 24시일땐 시간 사이를 23시부터 23시 59분 59초 까지
          else if($j == 23){
            for($k = 0 ; $k <= 1 ; $k++){
              if($k == 0){
                ${'arduino'.$i.$j.$k} = "SELECT Name_D,AVG(".$ajax_sensor."),Time FROM (SELECT * FROM `indoor_env` WHERE Name_D = 'Arduino{$i}')a WHERE Time BETWEEN '$ajax_date, 0{$j}:00:00' AND '$ajax_date, 0{$j}:30:00'";
                ${'result'.$i.$j.$k} = mysqli_query($con,  ${'arduino'.$i.$j.$k});
                ${'row_arduino_'.$i.'_'.$j.'_'.$k} = mysqli_fetch_array(${'result'.$i.$j.$k});
              }
              else if($k == 1){
                ${'arduino'.$i.$j.$k} = "SELECT Name_D,AVG(".$ajax_sensor."),Time FROM (SELECT * FROM `indoor_env` WHERE Name_D = 'Arduino{$i}')a WHERE Time BETWEEN '$ajax_date, 0{$j}:30:01' AND '$ajax_date, 0{$j}:59:59'";
                ${'result'.$i.$j.$k} = mysqli_query($con,  ${'arduino'.$i.$j.$k});
                ${'row_arduino_'.$i.'_'.$j.'_'.$k} = mysqli_fetch_array(${'result'.$i.$j.$k});
              }
            }
          }
        }
      }
    }

    //표 그리기
    if($ajax_view == "graph"){
      //하루 평균 표
      if($ajax_time == "day"){
        echo "<div style='height:200px'>";
          for($a = 1 ; $a <= 4 ; $a++){
            echo"<table border='2' style='float:left; margin-right:10px;'>";
              echo"<tr><th colspan='4'>{$a}번 센서 ({$locations[$a-1]})</th></tr>";
              echo"<tr><th>디바이스 이름</th><th>$sensor_name</th><th>시간</th></tr>";
                echo"<tr>";
                  echo"<td>";
                    echo ${'row_arduino_'.$a}['Name_D'];
                  echo"</td>";
                  echo"<td>";
                    echo substr(${'row_arduino_'.$a}["AVG(".$ajax_sensor.")"],0,5).$sensor_unit;
                  echo"</td>";
                  echo"<td>";
                    echo substr(${'row_arduino_'.$a}['Time'],0,10);
                  echo"</td>";
                echo"</tr>";
            echo"</table>";
          }
        echo"</div>";

        echo "<div style='height:200px'>";
          for($a = 5 ; $a <= 8 ; $a++){
            echo"<table border='2' style='float:left; margin-right:10px;'>";
              echo"<tr><th colspan='4'>{$a}번 센서 ({$locations[$a-1]})</th></tr>";
              echo"<tr><th>디바이스 이름</th><th>$sensor_name</th><th>시간</th></tr>";
                echo"<tr>";
                  echo"<td>";
                    echo ${'row_arduino_'.$a}['Name_D'];
                  echo"</td>";
                  echo"<td>";
                    echo substr(${'row_arduino_'.$a}["AVG(".$ajax_sensor.")"],0,5).$sensor_unit;
                  echo"</td>";
                  echo"<td>";
                    echo substr(${'row_arduino_'.$a}['Time'],0,10);
                  echo"</td>";
                echo"</tr>";
            echo"</table>";
          }
        echo"</div>";
      }
      //당일 시간 평균 표
      else if($ajax_time == "hour"){
        echo "<div style='height:750px'>";
          for($a = 1 ; $a <= 4 ; $a++){
            echo"<table border='2' style='float:left; margin-right:10px;'>";
              echo"<tr><th colspan='4'>{$a}번 센서 ({$locations[$a-1]})</th></tr>";
              echo"<tr><th>디바이스 이름</th><th>$sensor_name</th><th>시간</th></tr>";
              for($b = 0 ; $b <= 23 ; $b++){
                echo"<tr>";
                  echo"<td>";
                    echo ${'row_arduino_'.$a.'_'.$b}['Name_D'];
                  echo"</td>";
                  echo"<td>";
                    echo substr(${'row_arduino_'.$a.'_'.$b}["AVG(".$ajax_sensor.")"],0,5).$sensor_unit;
                  echo"</td>";
                  echo"<td>";
                    echo substr(${'row_arduino_'.$a.'_'.$b}['Time'],0,13)."시";
                  echo"</td>";
                echo"</tr>";
              }
            echo"</table>";
          }
        echo"</div>";
        echo"<br>";
        echo"<br>";
        echo "<div style='height:750px'>";
          for($a = 5 ; $a <= 8 ; $a++){
            echo"<table border='2' style='float:left; margin-right:10px;'>";
              echo"<tr><th colspan='4'>{$a}번 센서 ({$locations[$a-1]})</th></tr>";
              echo"<tr><th>디바이스 이름</th><th>$sensor_name</th><th>시간</th></tr>";
              for($b = 0 ; $b <= 23 ; $b++){
                echo"<tr>";
                  echo"<td>";
                    echo ${'row_arduino_'.$a.'_'.$b}['Name_D'];
                  echo"</td>";
                  echo"<td>";
                  echo substr(${'row_arduino_'.$a.'_'.$b}["AVG(".$ajax_sensor.")"],0,5).$sensor_unit;
                  echo"</td>";
                  echo"<td>";
                    echo substr(${'row_arduino_'.$a.'_'.$b}['Time'],0,13)."시";
                  echo"</td>";
                echo"</tr>";
              }
            echo"</table>";
          }
        echo"</div>";
      }
      //당일 30분 평균 표
      else if($ajax_time == "minute"){
        echo "<div style='height:750px'>";
          for($a = 1 ; $a <= 4 ; $a++){
            echo"<table border='2' style='float:left; margin-right:10px;'>";
              echo"<tr><th colspan='4'>{$a}번 센서 ({$locations[$a-1]})</th></tr>";
              echo"<tr><th>디바이스 이름</th><th>$sensor_name</th><th>시간</th></tr>";
              for($b = 0 ; $b <= 23 ; $b++){
                for($c = 0 ; $c <= 1 ; $c++){
                  echo"<tr>";
                    echo"<td>";
                      echo ${'row_arduino_'.$a.'_'.$b.'_'.$c}['Name_D'];
                    echo"</td>";
                    echo"<td>";
                      echo substr(${'row_arduino_'.$a.'_'.$b.'_'.$c}["AVG(".$ajax_sensor.")"],0,5).$sensor_unit;
                    echo"</td>";
                    if($c == 0){
                      echo"<td>";
                        echo substr(${'row_arduino_'.$a.'_'.$b.'_'.$c}['Time'],0,13)."시 30분 00초";
                      echo"</td>";
                    }
                    else if($c == 1){
                      echo"<td>";
                        echo substr(${'row_arduino_'.$a.'_'.$b.'_'.$c}['Time'],0,13)."시 59분 59초";
                      echo"</td>";
                    }
                  echo"</tr>";
                }
              }
            echo"</table>";
          }
        echo"</div>";
        echo"<br>";
        echo"<br>";
        echo "<div style='height:750px'>";
          for($a = 5 ; $a <= 8 ; $a++){
            echo"<table border='2' style='float:left; margin-right:10px;'>";
              echo"<tr><th colspan='4'>{$a}번 센서 ({$locations[$a-1]})</th></tr>";
              echo"<tr><th>디바이스 이름</th><th>$sensor_name</th><th>시간</th></tr>";
              for($b = 0 ; $b <= 23 ; $b++){
                for($c = 0 ; $c <= 1 ; $c++){
                  echo"<tr>";
                    echo"<td>";
                      echo ${'row_arduino_'.$a.'_'.$b.'_'.$c}['Name_D'];
                    echo"</td>";
                    echo"<td>";
                      echo substr(${'row_arduino_'.$a.'_'.$b.'_'.$c}["AVG(".$ajax_sensor.")"],0,5).$sensor_unit;
                    echo"</td>";
                    if($c == 0){
                      echo"<td>";
                        echo substr(${'row_arduino_'.$a.'_'.$b.'_'.$c}['Time'],0,13)."시 30분 00초";
                      echo"</td>";
                    }
                    else if($c == 1){
                      echo"<td>";
                        echo substr(${'row_arduino_'.$a.'_'.$b.'_'.$c}['Time'],0,13)."시 59분 59초";
                      echo"</td>";
                    }
                  echo"</tr>";
                }
              }
            echo"</table>";
          }
        echo"</div>";
      }
    }
    else if($ajax_view == "chart"){
      for($count = 1 ; $count <= 8 ; $count++){
        if($ajax_sensor == "Temp_D")${'data_'.$count} = array( array('', '실내 전체 평균 기온', $count.'번 디바이스 평균 기온'),);
        else if($ajax_sensor == "Humidity_D")${'data_'.$count} = array( array('', '실내 전체 평균 습도', $count.'번 디바이스 평균 습도'));
        else if($ajax_sensor == "CO2_D")${'data_'.$count} = array( array('', '실내 전체 평균 이산화탄소', $count.'번 디바이스 평균 이산화탄소'));
        else if($ajax_sensor == "illuminance_D")${'data_'.$count} = array( array('', '실내 전체 평균 조도', $count.'번 디바이스 평균 조도'));
      }
      if($ajax_time == "day"){
        //차트 세로축 제목
        $vAxes_title = "하루 단위";
        $div_title = "선택한 날짜로부터 보름전까지의 하루 평균값을 보여줍니다.";

        //하루 전체 평균 값
        for($count = 14; $count > -1; $count--){
          $oneday = mysqli_query($con, "SELECT AVG(".$ajax_sensor.") FROM `indoor_env` WHERE DATE_FORMAT(Time, '%Y-%m-%d') = '$ajax_date' - INTERVAL {$count} DAY");
          $oneday_row = mysqli_fetch_array($oneday);
          
          //하루 디바이스 별 평균 값
          for($i = 1 ; $i <= 8 ; $i++){
            ${'arduino'.$i} = "SELECT AVG(".$ajax_sensor.") FROM (SELECT * FROM `indoor_env` WHERE Name_D = 'Arduino{$i}')a WHERE DATE_FORMAT(Time, '%Y-%m-%d') = '$ajax_date' - INTERVAL {$count} DAY";
            ${'result'.$i} = mysqli_query($con, ${'arduino'.$i});
            ${'row_arduino_'.$i} = mysqli_fetch_array(${'result'.$i});
            ${'today_arr_'.$i} = array(date('d', strtotime($ajax_date."-$count day")).'일', (float)$oneday_row['AVG('.$ajax_sensor.')'], (float)${'row_arduino_'.$i}['AVG('.$ajax_sensor.')']);//(날짜,하루평균,디바이스 평균)
            array_push(${'data_'.$i},${'today_arr_'.$i});
          }
        }
      }
      else if($ajax_time == "hour"){
        //차트 세로축 제목
        $vAxes_title = "1시간 단위";
        $div_title = "선택한 날짜의 1시간 단위로 평균값을 보여줍니다.";

        //하루 전체 평균 값
        for($j = 0 ; $j <= 23 ; $j++){
          for($i = 1 ; $i <= 8 ; $i++){
            // 0~23시까지의 쿼리문
            if($j < 23){
              $k = $j+1;
              $onehour = mysqli_query($con, "SELECT AVG(".$ajax_sensor.") FROM `indoor_env` WHERE Time BETWEEN '$ajax_date, 0{$j}:00:00' AND '$ajax_date, 0{$k}:00:00'");
              $onehour_row = mysqli_fetch_array($onehour);
              ${'arduino'.$i} = "SELECT AVG(".$ajax_sensor.") FROM (SELECT * FROM `indoor_env` WHERE Name_D = 'Arduino{$i}')a WHERE Time BETWEEN '$ajax_date, 0{$j}:00:00' AND '$ajax_date, 0{$k}:00:00'";
              ${'result'.$i} = mysqli_query($con, ${'arduino'.$i});
              ${'row_arduino_'.$i} = mysqli_fetch_array(${'result'.$i}); // 변수명은 row_arduino_번호
              ${'today_arr_'.$i} = array($j.'시', (float)$onehour_row['AVG('.$ajax_sensor.')'], (float)${'row_arduino_'.$i}['AVG('.$ajax_sensor.')']);//(날짜,하루평균,디바이스 평균)
              array_push(${'data_'.$i},${'today_arr_'.$i});
            }
            // 24시일땐 시간 사이를 23시부터 23시 59분 59초 까지
            else if($j == 23){
              $onehour = mysqli_query($con, "SELECT AVG(".$ajax_sensor.") FROM `indoor_env` WHERE Time BETWEEN '$ajax_date, 0{$j}:00:00' AND '$ajax_date, 0{$j}:59:59'");
              $onehour_row = mysqli_fetch_array($onehour);
              ${'arduino'.$i.$j} = "SELECT AVG(".$ajax_sensor.") FROM (SELECT * FROM `indoor_env` WHERE Name_D = 'Arduino{$i}')a WHERE Time BETWEEN '$ajax_date, 0{$j}:00:00' AND '$ajax_date, 0{$j}:59:59'";
              ${'result'.$i.$j} = mysqli_query($con, ${'arduino'.$i.$j});
              ${'row_arduino_'.$i.'_'.$j} = mysqli_fetch_array(${'result'.$i.$j});
              ${'today_arr_'.$i} = array($j.'시', (float)$onehour_row['AVG('.$ajax_sensor.')'], (float)${'row_arduino_'.$i}['AVG('.$ajax_sensor.')']);//(날짜,하루평균,디바이스 평균)
              array_push(${'data_'.$i},${'today_arr_'.$i});
            }
          }
        }
      }
      else if($ajax_time == "minute"){
        //차트 세로축 제목
        $vAxes_title = "30분 단위";
        $div_title = "선택한 날짜의 30분 단위로 평균값을 보여줍니다.";

        //하루 전체 평균 값
        for($j = 0 ; $j <= 23 ; $j++){
          for($i = 1 ; $i <= 8 ; $i++){
            for($k = 0 ; $k <= 1 ; $k++){
              if($k == 0){
                $halfMinute = mysqli_query($con, "SELECT AVG(".$ajax_sensor.") FROM `indoor_env` WHERE Time BETWEEN '$ajax_date, 0{$j}:00:00' AND '$ajax_date, 0{$j}:30:00'");
                $halfMinute_row = mysqli_fetch_array($halfMinute);
                ${'arduino'.$i} = "SELECT AVG(".$ajax_sensor.") FROM (SELECT * FROM `indoor_env` WHERE Name_D = 'Arduino{$i}')a WHERE Time BETWEEN '$ajax_date, 0{$j}:00:00' AND '$ajax_date, 0{$j}:30:00'";
                ${'result'.$i} = mysqli_query($con, ${'arduino'.$i});
                ${'row_arduino_'.$i} = mysqli_fetch_array(${'result'.$i}); // 변수명은 row_arduino_번호
                ${'today_arr_'.$i} = array($j.'시 30분', (float)$halfMinute_row['AVG('.$ajax_sensor.')'], (float)${'row_arduino_'.$i}['AVG('.$ajax_sensor.')']);//(날짜,하루평균,디바이스 평균)
                array_push(${'data_'.$i},${'today_arr_'.$i});
              }
              else if($k == 1){
                $halfMinute = mysqli_query($con, "SELECT AVG(".$ajax_sensor.") FROM `indoor_env` WHERE Time BETWEEN '$ajax_date, 0{$j}:30:01' AND '$ajax_date, 0{$j}:59:59'");
                $halfMinute_row = mysqli_fetch_array($halfMinute);
                ${'arduino'.$i} = "SELECT AVG(".$ajax_sensor.") FROM (SELECT * FROM `indoor_env` WHERE Name_D = 'Arduino{$i}')a WHERE Time BETWEEN '$ajax_date, 0{$j}:30:01' AND '$ajax_date, 0{$j}:59:59'";
                ${'result'.$i} = mysqli_query($con, ${'arduino'.$i});
                ${'row_arduino_'.$i} = mysqli_fetch_array(${'result'.$i}); // 변수명은 row_arduino_번호
                ${'today_arr_'.$i} = array(($j+1).'시', (float)$halfMinute_row['AVG('.$ajax_sensor.')'], (float)${'row_arduino_'.$i}['AVG('.$ajax_sensor.')']);//(날짜,하루평균,디바이스 평균)
                array_push(${'data_'.$i},${'today_arr_'.$i});
              }
            }
          }
        }
      }
      
      for($count = 1 ; $count <= 8 ; $count++){
        // 그래프 옵션
        if($ajax_sensor == "Temp_D"){
          ${'options_'.$count} = array(
            'title'  => '평균 온도 그래프',  // 그래프 제목
            'titleTextStyle' => array('fontSize' => 16), // 제목 스타일
            'vAxes'  => array(0 => array('title'    => $vAxes_title.' 평균(℃)',  // 세로축 왼쪽
                                          'minValue' =>  0, 'maxValue' => 30)),
            'width'  => 1300, 'height' => 500,  // 폭, 높이
            'chartArea' => array('width' => 1200, 'height' => 240),  // 차트 영역
            'legend' => array('position' => 'bottom', 'alignment' => 'start'));  // 범례
        }
        else if($ajax_sensor == "Humidity_D"){
          ${'options_'.$count} = array(
            'title'  => '평균 습도 그래프',
            'titleTextStyle' => array('fontSize' => 16),
            'vAxes'  => array(0 => array('title'    => $vAxes_title.' 평균(%)',
                                          'minValue' =>  0, 'maxValue' => 100)),
            'width'  => 1300, 'height' => 500,
            'chartArea' => array('width' => 1200, 'height' => 240),
            'legend' => array('position' => 'bottom', 'alignment' => 'start'));
        }
        else if($ajax_sensor == "CO2_D"){
          ${'options_'.$count} = array(
            'title'  => '평균 이산화탄소 그래프',
            'titleTextStyle' => array('fontSize' => 16),
            'vAxes'  => array(0 => array('title'    => $vAxes_title.' 평균(PPM)',
                                          'minValue' =>  0, 'maxValue' => 2000)),          
            'width'  => 1300, 'height' => 500,
            'chartArea' => array('width' => 1200, 'height' => 240),
            'legend' => array('position' => 'bottom', 'alignment' => 'start'));
        }
        else if($ajax_sensor == "illuminance_D"){
          ${'options_'.$count} = array(
            'title'  => '평균 조도 그래프',
            'titleTextStyle' => array('fontSize' => 16),
            'vAxes'  => array(0 => array('title'    => $vAxes_title.' 평균(LUX)',
                                          'minValue' =>  0, 'maxValue' => 5000)),
            'width'  => 1300, 'height' => 500,
            'chartArea' => array('width' => 1200, 'height' => 240),
            'legend' => array('position' => 'bottom', 'alignment' => 'start'));
        }
      }

      // 그래프 유형 (선 그래프)
      $type = 'LineChart';
      for($count = 1 ; $count <= 8 ; $count++){
        list(${'chart_'.$count}, ${'chart_div_'.$count}) = makeChartParts(${'data_'.$count}, ${'options_'.$count}, $type);
      }

      /* // 그래프 그림의 JavaScript 함수, 표시할 <div> 태그의 생성
      $json_chart = json_encode(makeChartParts($data, $options, $type));
      print_r($json_chart); */

      echo'<script src="https://www.gstatic.com/charts/loader.js"></script>';
      echo"<script>";
      for($count = 1 ; $count <= 8 ; $count++){
        // 그래프 그리기 함수를 표시합니다.
        echo ${'chart_'.$count};
      }
      echo"</script>";
      echo"<h3>";
        echo $div_title;
        echo"</h3>";
      //차트를 표시 할 <div> 태그를 적당한 위치에 배치
      for($count = 1 ; $count <= 8 ; $count++){
        echo"<div>";
          echo ${'chart_div_'.$count};
        echo"</div>";
      }
    }
  }
?>