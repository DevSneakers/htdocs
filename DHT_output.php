<!DOCTYPE html>
<html>
    <head>
        <title>Temp and Humidity Output</title>
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
            div.DHT{
                width:700px;
                height:250px;
            }
            div.left{
                width:50%;
                float:left;
                box-sizing:border-box;
            }
            div.right{
                width:50%;
                float:right;
                box-sizing:border-box;
            }
        </style>
    </head>
    <body>
        <?php
            $con=mysqli_connect("localhost","sensor_admin","rZ3Oytpn9lT*-M9.","all_sensor_data");

            if(mysqli_connect_error())
            {
            echo "Failed to MySQL:".mysqli_connect_error();
            }

            else{
            $now_data="SELECT *FROM quality_meter ORDER BY ID DESC LIMIT 1"; // 최신값
            $prev_data="SELECT *FROM quality_meter ORDER BY ID DESC LIMIT 1,1"; // 최신 바로 이전값
            $max_temp="SELECT *FROM quality_meter ORDER BY Temp_D DESC LIMIT 1"; // 최대 온도값
            $min_temp="SELECT *FROM quality_meter ORDER BY Temp_D ASC LIMIT 1"; // 최소 온도값
            $max_humi="SELECT *FROM quality_meter ORDER BY Humidity_D DESC LIMIT 1"; // 최대 온도값
            $min_humi="SELECT *FROM quality_meter ORDER BY Humidity_D ASC LIMIT 1"; // 최대 습도값
            
            // 쿼리문 실행
            $result_nowdata=mysqli_query($con, $now_data);
            $result_prevdata=mysqli_query($con, $prev_data);
            $result_maxtemp=mysqli_query($con, $max_temp);
            $result_mintemp=mysqli_query($con, $min_temp);
            $result_maxhumi=mysqli_query($con, $max_humi);
            $result_minhumi=mysqli_query($con, $min_humi);
            
            // 표로 표현할때 편하게 쓰기 위해서 fetch_array로 정렬
            $row_nowdata=mysqli_fetch_array($result_nowdata);
            $row_prevdata=mysqli_fetch_array($result_prevdata);
            $row_maxtemp=mysqli_fetch_array($result_maxtemp);
            $row_mintemp=mysqli_fetch_array($result_mintemp);
            $row_maxhumi=mysqli_fetch_array($result_maxhumi);
            $row_minhumi=mysqli_fetch_array($result_minhumi);
            
            // 표 그리기
            echo "<div class='DHT'>";
                echo"<div class='left'>";
                    echo"<br>";
                    echo"현재 데이터";
                    echo"<table border='2'>";
                        echo"<tr><th>온도</th><th>습도</th><th>측정 시간</th></tr>";
                        echo"<td>";
                            echo $row_nowdata['Temp_D'].'&#176C';
                        echo"</td>";
                        echo"<td>";
                            echo $row_nowdata['Humidity_D'].'%';
                        echo"</td>";
                        echo"<td>";
                            echo $row_nowdata['Time'];
                        echo"</td>";
                    echo"</table>";
                        
                    echo"<br>";

                    echo"<table border='2'>";
                        echo"<tr><th>최고 온도</th><th>측정 시간</th></tr>";
                        echo"<td>";
                            echo $row_maxtemp['Temp_D'].'&#176C';
                        echo"</td>";
                        echo"<td>";
                            echo $row_maxtemp['Time'];
                        echo"</td>";
                        echo"<tr><th>최저 온도</th><th>측정 시간</th></tr>";
                        echo"<td>";
                            echo $row_mintemp['Temp_D'].'&#176C';
                        echo"</td>";
                        echo"<td>";
                            echo $row_mintemp['Time'];
                        echo"</td>";
                    echo"</table>";
                echo"</div>";

                echo"<div class='right'>";
                    echo"<br>";
                    echo"이전 데이터";
                    echo"<table border='2'>";
                    echo"<tr><th>온도</th><th>습도</th><th>측정 시간</th></tr>";
                        echo"<td>";
                            echo $row_prevdata['Temp_D'].'&#176C';
                        echo"</td>";
                        echo"<td>";
                            echo $row_prevdata['Humidity_D'].'%';
                        echo"</td>";
                        echo"<td>";
                            echo $row_prevdata['Time'];
                        echo"</td>";
                    echo"</table>";
                    
                    echo"<br>";

                    echo"<table border='2'>";
                    echo"<tr><th>최고 습도</th><th>측정 시간</th></tr>";
                    echo"<td>";
                        echo $row_maxhumi['Humidity_D'].'%';
                    echo"</td>";
                    echo"<td>";
                        echo $row_maxhumi['Time'];
                    echo"</td>";
                    echo"<tr><th>최저 습도</th><th>측정 시간</th></tr>";
                    echo"<td>";
                        echo $row_minhumi['Humidity_D'].'%';
                    echo"</td>";
                    echo"<td>";
                        echo $row_minhumi['Time'];
                    echo"</td>";
                    echo"</table>";
                echo"</div>";
            echo "</div>";
            mysqli_close($con);
            }
        ?>
    </body>
</html>