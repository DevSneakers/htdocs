<?php
$con=mysqli_connect("localhost","sensor_admin","rZ3Oytpn9lT*-M9.","all_sensor_data");

if(mysqli_connect_error()){
  echo "Failed to MySQL:".mysqli_connect_error();
}
else{
  $request=$_POST["request"];

  if($request == "startData"){
    $result=mysqli_query($con, "SELECT ElectricFan, Warmer, Light, Mode FROM control ORDER BY Id DESC LIMIT 1");
    $result_array=mysqli_fetch_array($result);
    echo $result_array['ElectricFan'];
    echo $result_array['Warmer'];
    echo $result_array['Light'];
    echo $result_array['Mode'];
  }
  else if($request == "pushData"){
    $Mode=$_POST["Mode"];
    $ElectricFan=$_POST["ElectricFan"];
    $Warmer=$_POST["Warmer"];
    $Light=$_POST["Light"];

    $sql="insert into all_sensor_data.control(Mode, ElectricFan, Warmer, Light) values($Mode, $ElectricFan, $Warmer, $Light)";
    echo $Mode;
    echo "ok";
    mysqli_query($con,$sql);
  }
}
mysqli_close($con);
?>