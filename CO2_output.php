<!DOCTYPE html>
<html>
    <head>
        <title>CO2 Output</title>
    </head>
    <body>
        <?php
            $con=mysqli_connect("localhost","sensor_admin","rZ3Oytpn9lT*-M9.","all_sensor_data");

            if(mysqli_connect_error())
            {
            echo "Failed to MySQL:".mysqli_connect_error();
            }

            else{
            $now_CO2="SELECT *FROM quality_meter ORDER BY ID DESC LIMIT 1";
            $prev_CO2="SELECT *FROM quality_meter ORDER BY ID DESC LIMIT 1,1";
            $max_CO2="SELECT *FROM quality_meter ORDER BY CO2_D DESC LIMIT 1";
            $min_CO2="SELECT *FROM quality_meter ORDER BY CO2_D ASC LIMIT 1";

            $result_nowCO2=mysqli_query($con, $now_CO2);
            $result_prevCO2=mysqli_query($con, $prev_CO2);
            $result_maxCO2=mysqli_query($con, $max_CO2);
            $result_minCO2=mysqli_query($con, $min_CO2);

            $row_nowCO2=mysqli_fetch_array($result_nowCO2);
            $row_prevCO2=mysqli_fetch_array($result_prevCO2);
            $row_maxCO2=mysqli_fetch_array($result_maxCO2);
            $row_minCO2=mysqli_fetch_array($result_minCO2);

            echo "<div class='CO2' id='sample'>";
                echo"<div class='left'>";
                    echo"<br/>";
                    echo"<table border='2'>";
                        echo"현재 데이터";
                        echo"<tr><th>이산화탄소</th><th>측정 시간</th></tr>";
                        echo"<td>";
                            echo $row_nowCO2['CO2_D'].'PPM';
                        echo"</td>";
                        echo"<td>";
                            echo $row_nowCO2['Time'];
                        echo"</td>";
                    echo"</table>";

                    echo"<br/>";

                    echo"<table border='2'>";
                        echo"<tr><th>최고 이산화탄소</th><th>측정 시간</th></tr>";
                        echo"<td>";
                            echo $row_maxCO2['CO2_D'].'PPM';
                        echo"</td>";
                        echo"<td>";
                            echo $row_maxCO2['Time'];
                        echo"</td>";
                    echo"</table>";
                echo"</div>";
                
                echo"<div class='right' id='sample'>";
                    echo"<table border='2'>";
                        echo"<br/>";
                        echo"이전 데이터";
                        echo"<tr><th>이산화탄소</th><th>측정 시간</th></tr>";
                        echo"<td>";
                            echo $row_prevCO2['CO2_D'].'PPM';
                        echo"</td>";
                        echo"<td>";
                            echo $row_prevCO2['Time'];
                        echo"</td>";
                    echo"</table>";

                    echo"<br/>";

                    echo"<table border='2'>";
                        echo"<tr><th>최저 이산화탄소</th><th>측정 시간</th></tr>";
                        echo"<td>";
                            echo $row_minCO2['CO2_D'].'PPM';
                        echo"</td>";
                        echo"<td>";
                            echo $row_minCO2['Time'];
                        echo"</td>";
                    echo"</table>";
                echo"</div>";
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
        div.CO2{
            width:700px;
            height:200px;
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
</html>