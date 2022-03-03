<?php
$con=mysqli_connect("localhost","sensor_admin","rZ3Oytpn9lT*-M9.","all_sensor_data");

if(mysqli_connect_error()){
    echo "Failed to MySQL:".mysqli_connect_error();
}
else{
    $Name_PHP=$_GET["Name_R"];
    $Temp_PHP=$_GET["Temp_R"];
    $Humidity_PHP=$_GET["Humi_R"];
    $CO2_PHP=$_GET["CO2_R"];
    $illuminance_PHP=$_GET["illuminance_R"];

    $sql="insert into all_sensor_data.indoor_env(Name_D, Temp_D, Humidity_D, CO2_D, illuminance_D) values($Name_PHP, $Temp_PHP, $Humidity_PHP, $CO2_PHP, $illuminance_PHP)";
    mysqli_query($con,$sql);
}
mysqli_close($con);
?>