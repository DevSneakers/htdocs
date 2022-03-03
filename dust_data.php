<?php
$con=mysqli_connect("localhost","LJG","rZ3Oytpn9lT*-M9.","sensor");

if(mysqli_connect_error()){
    echo "Failed to MySQL:".mysqli_connect_error();
}
else{
    $dust_PHP=$_GET["dust_R"];

    $sql="insert into sensor.table_dust(dust_D) values($dust_PHP)";
    mysqli_query($con,$sql);
}
mysqli_close($con);
?>