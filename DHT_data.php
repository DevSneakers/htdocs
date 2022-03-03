<?php
$con=mysqli_connect("localhost","LJG","rZ3Oytpn9lT*-M9.","sensor");

if(mysqli_connect_error()){
    echo "Failed to MySQL:".mysqli_connect_error();
}
else{
    $temp_PHP=$_GET["temp_R"];
    $humidity_PHP=$_GET["humi_R"];

    $sql="insert into sensor.table_sht(temp_D, humi_D) values($temp_PHP, $humidity_PHP)";
    mysqli_query($con,$sql);
}
mysqli_close($con);
?>