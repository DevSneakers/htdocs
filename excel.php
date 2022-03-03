<!DOCTYPE html>
<html>
  <head>
      <title></title>
      <meta charset="utf-8">
  </head>
  <body>
    <?php
      $con=mysqli_connect("localhost","sensor_admin","rZ3Oytpn9lT*-M9.","all_sensor_data");

      if(mysqli_connect_error()){
        echo "Failed to MySQL:".mysqli_connect_error();
      }

      
      else{
        // 아두이노 번호에 따른 설치 장소를 리스트로 만들어둠 ex: 1번은 창가쪽 자리
        $locations = array("창가쪽 자리","냉장고 위", "이재건 뒷 자리", "이재건 자리", "김세민 자리", "김세민 뒷 자리", "교수님 방 문", "방지수 자리");

        for($i = 1 ; $i <= 8 ; $i++){
          for($j = 0 ; $j <= 23 ; $j++){
            // 0~23시까지의 쿼리문
            if($j < 23){
              $k = $j+1;
              ${'arduino'.$i.$j} = "SELECT * FROM (SELECT * FROM `indoor_env` WHERE Name_D = 'Arduino{$i}')a WHERE Time BETWEEN '2021-10-12, 0{$j}:00:00' AND '2021-10-12, 0{$k}:00:00'";
              ${'result'.$i.$j} = mysqli_query($con, ${'arduino'.$i.$j});
              ${'row_arduino_'.$i.'_'.$j} = mysqli_fetch_array(${'result'.$i.$j}); // 변수명은 row_arduino_번호_시간
            }
            // 24시일땐 시간 사이를 23시부터 다음날 00시 까지로
            else if($j == 23){
              ${'arduino'.$i.$j} = "SELECT * FROM (SELECT * FROM `indoor_env` WHERE Name_D = 'Arduino{$i}')a WHERE Time BETWEEN '2021-10-12, 0{$j}:00:00' AND '2021-10-13, 0{$j}:59:59'";
              ${'result'.$i.$j} = mysqli_query($con, ${'arduino'.$i.$j});
              ${'row_arduino_'.$i.'_'.$j} = mysqli_fetch_array(${'result'.$i.$j});
            }
          }
        }

        echo "<div style='height:750px'>";
          for($a = 1 ; $a <= 4 ; $a++){
              echo"<table border='2' style='float:left; margin-right:10px;'>";
                echo"<tr><th colspan='4'>{$a}번 센서 ({$locations[$a-1]})</th></tr>";
                echo"<tr><th>온도</th><th>습도</th><th>이산화탄소</th><th>조도</th></tr>";
                for($b = 0 ; $b <= 23 ; $b++){
                  echo"<tr>";
                    echo"<td>";
                      echo ${'row_arduino_'.$a.'_'.$b}['Temp_D'];
                    echo"</td>";
                    echo"<td>";
                      echo ${'row_arduino_'.$a.'_'.$b}['Humidity_D'];
                    echo"</td>";
                    echo"<td>";
                      echo ${'row_arduino_'.$a.'_'.$b}['CO2_D'];
                    echo"</td>";
                    echo"<td>";
                      echo ${'row_arduino_'.$a.'_'.$b}['illuminance_D'];
                    echo"</td>";
                  echo"</tr>";
                }
              echo"</table>";
            }
        echo"</div>";

        echo "<div style='height:750px'>";
          for($a = 5 ; $a <= 8 ; $a++){
              echo"<table border='2' style='float:left; margin-right:10px;'>";
                echo"<tr><th colspan='4'>{$a}번 센서 ({$locations[$a-1]})</th></tr>";
                echo"<tr><th>온도</th><th>습도</th><th>이산화탄소</th><th>조도</th></tr>";
                for($b = 0 ; $b <= 23 ; $b++){
                  echo"<tr>";
                    echo"<td>";
                      echo ${'row_arduino_'.$a.'_'.$b}['Temp_D'];
                    echo"</td>";
                    echo"<td>";
                      echo ${'row_arduino_'.$a.'_'.$b}['Humidity_D'];
                    echo"</td>";
                    echo"<td>";
                      echo ${'row_arduino_'.$a.'_'.$b}['CO2_D'];
                    echo"</td>";
                    echo"<td>";
                      echo ${'row_arduino_'.$a.'_'.$b}['illuminance_D'];
                    echo"</td>";
                  echo"</tr>";
                }
              echo"</table>";
            }
        echo"</div>";

        mysqli_close($con);
      }
    ?>
  </body>
  <style>
    table, th, td {
        border: 1px solid #bcbcbc;
    }
    table {
        width: 300px;
        height: 50px;
    }
    td {
        text-align: center;
    }
  </style>
</html>