<!DOCTYPE html>
<html>
    <head>
        <title>통합 센서 출력 페이지</title>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="2">
        <style>
        </style>
        <script>
            var time_view = new Date();
            document.write("현재 시간 : ");
            document.write(time_view.toLocaleString()+"<br>");
            setTimeout(function() {
                location.reload();
            }, 1000);
        </script>
    </head>
    <body>
        <br>
        <link>
        <div>
            <button type="button" onclick="location.href='output_temp_humidity.php'"> 온습도 </button>
            <button type="button" onclick="location.href='output_CO2.php'"> 이산화탄소 </button>
        </div>
        <br>
        <?php
            echo "온습도";
            require 'DHT_output.php';
            require 'DHT_chart.php';
        ?>
    </body>
</html>