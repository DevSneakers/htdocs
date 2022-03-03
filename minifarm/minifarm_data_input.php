<?php
$con=mysqli_connect("localhost","sensor_admin","rZ3Oytpn9lT*-M9.","all_sensor_data");

if(mysqli_connect_error()){
    echo "Failed to MySQL:".mysqli_connect_error();
}
else{
    $temp_PHP=$_GET["temp_R"];
    $humidity_PHP=$_GET["humi_R"];
    $CO2_PHP=$_GET["CO2_R"];
    $illuminance_PHP=$_GET["illuminance_R"];
    $moisture_PHP=$_GET["moisture_R"];
    $waterLevel_PHP=$_GET["waterLevel_R"];

    $sql="insert into all_sensor_data.minifarm(Temp_D, Humidity_D, CO2_D, illuminance_D, moisture_D, waterLevel_D) values($temp_PHP, $humidity_PHP, $CO2_PHP, $illuminance_PHP, $moisture_PHP, $waterLevel_PHP)";
    mysqli_query($con,$sql);
}
mysqli_close($con);
?>