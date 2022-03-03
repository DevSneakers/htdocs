<!DOCTYPE html>
<html>
    <head>
        <title>Dust Output</title>
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
            div.dust{
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
    </head>
    <body>
        <?php
            $con=mysqli_connect("localhost","sensor_admin","rZ3Oytpn9lT*-M9.","all_sensor_data");

            if(mysqli_connect_error())
            {
            echo "Failed to MySQL:".mysqli_connect_error();
            }

            else{
            $sql_nowdust="SELECT *FROM quality_meter ORDER BY ID DESC LIMIT 1";
            $sql_prevdust="SELECT *FROM quality_meter ORDER BY ID DESC LIMIT 1,1";
            $max_dust="SELECT *FROM quality_meter ORDER BY Dust_D DESC LIMIT 1";
            $min_dust="SELECT *FROM quality_meter ORDER BY Dust_D ASC LIMIT 1";

            $result_nowdust=mysqli_query($con, $sql_nowdust);
            $result_prevdust=mysqli_query($con, $sql_prevdust);
            $result_maxdust=mysqli_query($con, $max_dust);
            $result_mindust=mysqli_query($con, $min_dust);

            $row_nowdust=mysqli_fetch_array($result_nowdust);
            $row_prevdust=mysqli_fetch_array($result_prevdust);
            $row_maxdust=mysqli_fetch_array($result_maxdust);
            $row_mindust=mysqli_fetch_array($result_mindust);
            
            echo "<div class='dust'>";
                echo"<div class='left'>";
                    echo"<br/>";
                    echo"현재 데이터";
                    echo"<table border='2'>";
                        echo"<tr><th>미세먼지</th><th>측정 시간</th></tr>";
                        echo"<td>";
                            echo $row_nowdust['Dust_D'].'PM';
                        echo"</td>";
                        echo"<td>";
                            echo $row_nowdust['Time'];
                        echo"</td>";
                    echo"</table>";

                    echo"<br/>";

                    echo"<table border='2'>";
                        echo"<tr><th>최고 미세먼지</th><th>측정 시간</th></tr>";
                        echo"<td>";
                            echo $row_maxdust['Dust_D'].'PM';
                        echo"</td>";
                        echo"<td>";
                            echo $row_maxdust['Time'];
                        echo"</td>";
                    echo"</table>";
                echo "</div>";

                echo"<div class='right'>";
                    echo"<br/>";
                    echo"이전 데이터";
                    echo"<table border='2'>";
                        echo"<tr><th>미세먼지</th><th>측정 시간</th></tr>";
                        echo"<td>";
                            echo $row_prevdust['Dust_D'].'PM';
                        echo"</td>";
                        echo"<td>";
                            echo $row_prevdust['Time'];
                        echo"</td>";
                    echo"</table>";

                    echo"<br/>";

                    echo"<table border='2'>";
                        echo"<tr><th>최저 미세먼지</th><th>측정 시간</th></tr>";
                        echo"<td>";
                            echo $row_mindust['Dust_D'].'PM';
                        echo"</td>";
                        echo"<td>";
                            echo $row_mindust['Time'];
                        echo"</td>";
                    echo"</table>";
                echo "</div>";
            echo "</div>";

            mysqli_close($con);
            }
        ?>
    </body>
</html>