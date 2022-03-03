<?php
$con=mysqli_connect("localhost","LJG","rZ3Oytpn9lT*-M9.","sensor");

if(mysqli_connect_error()){
    echo "Failed to MySQL:".mysqli_connect_error();
}
else{
    $percentage_PHP=$_GET["percentage_R"];

    $sql="insert into sensor.table_CO2(percentage_D) values($percentage_PHP)";
    mysqli_query($con,$sql);
}
mysqli_close($con);
?>