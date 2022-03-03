<!DOCTYPE HTML>
<html>
  <head lang="ko">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta charset="UTF-8">
    <title>indoor environment</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.8.0.js" integrity="sha256-00Fh8tkPAe+EmVaHFpD+HovxWk7b97qwqVi7nLvjdgs=" crossorigin="anonymous"></script>

    <script>
      //로딩창 제어 함수
      function loading_control(val){
        if(val=="hide"){
          $("#load").hide();
        }
        else if(val=="show"){
          $("#load").show();
        }
      }
      // 오늘 날짜 가져오기
      window.onload = function(){
        var dt = new Date();
        var Year = dt.getFullYear();        
        var Month = "" + (dt.getMonth()+1);
        var Day = "" + dt.getDate();            
        
        if(Month.length < 2) Month = "0" + Month;
        if(Day.length < 2) Day = "0" + Day;
        
        var Today = Year.toString() +"-"+ Month +"-"+ Day;
        
        document.getElementById("date-picker").value = Today;

        var Mode_toggleBG = $('#mode').find('.toggleBG');
        var Mode_toggleFG = $('#mode').find('.toggleFG');
        var Fan_toggleBG = $('#electricFan').find('.toggleBG');
        var Fan_toggleFG = $('#electricFan').find('.toggleFG');
        var Warmer_toggleBG = $('#warmer').find('.toggleBG');
        var Warmer_toggleFG = $('#warmer').find('.toggleFG');
        var Light_toggleBG = $('#light').find('.toggleBG');
        var Light_toggleFG = $('#light').find('.toggleFG');

        var controlData = (control_data());//장치 컨트롤 데이터 오브젝트

        //페이지 로딩시 장치 제어상태 표시
        if(controlData.Mode == "1"){
          Mode_toggleBG.css('background', '#53FF4C');
          toggleActionStart(Mode_toggleFG, 'TO_RIGHT');
        }
        else if(controlData.Mode == "0"){
          Mode_toggleBG.css('background', '#CCCCCC');
          toggleActionStart(Mode_toggleFG, 'TO_LEFT');
        }
        if(controlData.ElectricFan == "1"){
          Fan_toggleBG.css('background', '#53FF4C');
          toggleActionStart(Fan_toggleFG, 'TO_RIGHT');
        }
        else if(controlData.ElectricFan == "0"){
          Fan_toggleBG.css('background', '#CCCCCC');
          toggleActionStart(Fan_toggleFG, 'TO_LEFT');
        }
        if(controlData.Warmer == "1"){
          Warmer_toggleBG.css('background', '#53FF4C');
          toggleActionStart(Warmer_toggleFG, 'TO_RIGHT');
        }
        else if(controlData.Warmer == "0"){
          Warmer_toggleBG.css('background', '#CCCCCC');
          toggleActionStart(Warmer_toggleFG, 'TO_LEFT');
        }
        if(controlData.Light == "1"){
          Light_toggleBG.css('background', '#53FF4C');
          toggleActionStart(Light_toggleFG, 'TO_RIGHT');
        }
        else if(controlData.Light == "0"){
          Light_toggleBG.css('background', '#CCCCCC');
          toggleActionStart(Light_toggleFG, 'TO_LEFT');
        }


        view_ajax(4)

        loading_control("hide");
      }
    </script>

    <script type="text/javascript">
      function view_ajax(val) {
        // 필터 선택시 해당 값만 변경
        if(val==1)$date = $("#date-picker").val()
        else if(val==0)$sensor = $("#sensor-picker").val()
        else if(val==2)$view = $("#view-type").val()
        else if(val==3)$time = $("#time-picker").val()
        // 필터 초기 상태
        else if(val==4){
          $sensor = "Temp_D"
          $date = $("#date-picker").val()
          $view = "graph"
          $time = "day"
        }
        loading_control("show");
        $.ajax({
            url: "get_data.php",
            type: "post",
            data: {
              sensor: $sensor,
              date: $date,
              view: $view,
              time: $time,
            },
          }).done(function(data){			
            $("#input_data").html(data);		
            loading_control("hide");
          });
      }

      function control_data(){
        var Mode = ""
        var ElectricFan = ""
        var Warmer = ""
        var Light = ""
        $.ajax({
          url: "controlData.php",
          type: "post",
          async:false,
          data: {
            request:"startData",
          },
        }).done(function(data){
          ElectricFan = data.substr(0,1);
          Warmer = data.substr(1,1);
          Light = data.substr(2,1);
          Mode = data.substr(3,6);
        });
        return {"ElectricFan":ElectricFan, "Warmer":Warmer, "Light":Light, "Mode":Mode}
      }
    </script>

    <!-- 이미지 팝업을 위해 넣음 -->
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="_main.js"></script>
    
    <!-- 미리보기 레이어-->
    <link rel='stylesheet' href="_main.css">

    <script>
      // 그림에 마우스 올라왔을때 (mouse over) 레이어로 또다른 이미지 보여주는 자바스크립트 (java script)
      this.imagePreview = function(){
      /* CONFIG */

        xOffset = -55;
        yOffset = -500;

        /* END CONFIG */
        $("img.preview").hover(function(e){
          this.t = this.title;
          this.title = "";
          var c = (this.t != "") ? "<br/>" + this.t : "";
          $("body").append("<p id='preview'><img src='"+ $("#pics"+this.id).val() +"' alt='Image preview' width='499px' />"+ c +"</p>");
          $("#preview")
          .css("top",(e.pageY - xOffset) + "px")
          .css("left",(e.pageX + yOffset) + "px")
          .fadeIn("fast");
        },

        function(){
          this.title = this.t;
          $("#preview").remove();
        });

        $("img.preview").mousemove(function(e){
        $("#preview")
        .css("top",(e.pageY - xOffset) + "px")
        .css("left",(e.pageX + yOffset) + "px");
        });
      };

      // starting the script on page load
      $(document).ready(function(){
      imagePreview();
      });
    </script>

    <!-- 구글 차트 -->
    <script src="https://www.gstatic.com/charts/loader.js"></script>

    <!--토글 버튼-->
    <script>
      $(document).on('click', '.toggleBG', function () {
        var toggleBG = $(this);
        var toggleFG = $(this).find('.toggleFG');
        var left = toggleFG.css('left');
        if(left == '40px') {
            toggleBG.css('background', '#CCCCCC');
            toggleActionStart(toggleFG, 'TO_LEFT');
        }else if(left == '0px') {
            toggleBG.css('background', '#53FF4C');
            toggleActionStart(toggleFG, 'TO_RIGHT');
        }
      });
  
      // 토글 버튼 이동 모션 함수
      function toggleActionStart(toggleBtn, LR) {
          // 0.01초 단위로 실행
          var intervalID = setInterval(
              function() {
                  // 버튼 이동
                  var left = parseInt(toggleBtn.css('left'));
                  left += (LR == 'TO_RIGHT') ? 5 : -5;
                  if(left >= 0 && left <= 40) {
                      left += 'px';
                      toggleBtn.css('left', left);
                  }
              }, 10);
          setTimeout(function(){
              clearInterval(intervalID);
          }, 100);
      }
    </script>

<script>
  //딜레이 함수
  function sleep(ms) {
    return new Promise(resolve=>setTimeout(resolve, ms));
  }

  // 장치 컨트롤을 위한 함수
  async function control_ajax(val) {
    loading_control("show");

    var Mode_toggleFG = $('#mode').find('.toggleFG');
    var Fan_toggleFG = $('#electricFan').find('.toggleFG');
    var Warmer_toggleFG = $('#warmer').find('.toggleFG');
    var Light_toggleFG = $('#light').find('.toggleFG');

    var Data = control_data();

    var modeData = Data.Mode;
    var electricFanData = Data.ElectricFan;
    var warmerData = Data.Warmer;
    var lightData = Data.Light;

    // 버튼 위치에 따라 컨트롤 데이터 바꾸기
    if(val=="mode"){
      var Mode_left = Mode_toggleFG.css('left');
      if(Mode_left == '0px')modeData = "1"; //0px에서 동작시켰을 때
      else if(Mode_left == '40px')modeData = "0"; //40px에서 동작시켰을 때
    }
    else if(val=="electricFan"){
      var Fan_left = Fan_toggleFG.css('left');
      if(Fan_left == '0px')electricFanData = "1"; //0px에서 동작시켰을 때
      else if(Fan_left == '40px')electricFanData = "0"; //40px에서 동작시켰을 때
    }
    else if(val == "warmer"){
      var Warmer_left = Warmer_toggleFG.css('left');
      if(Warmer_left == '0px')warmerData = "1";
      else if(Warmer_left == '40px')warmerData = "0";
    }
    else if(val == "light"){
      var Light_left = Light_toggleFG.css('left');
      if(Light_left == '0px')lightData = "1";
      else if(Light_left == '40px')lightData = "0";
    }
    console.log(electricFanData);
    // 컨트롤 데이터 보내기
    $.ajax({
      url: "controlData.php",
      type: "post",
      data: {
        request:"pushData",
        Mode: modeData,
        ElectricFan: electricFanData,
        Warmer: warmerData,
        Light: lightData,
      },
    }).done(function(data){			
      console.log(data);
    });
    await sleep(1000);
    loading_control("hide");
  }
</script>

  </head>
<body>
  <div id="load">
    <img src="./images/loading.gif" alt="loading">
  </div>
	<div id="header">
    <ul id="navigation">
      <li>
        <a href="index.html">홈</a>
      </li>
      <li class="active">
        <a href="sensor.php">센서 값 확인</a>
      </li>
    </ul>
	</div>
	<div id="contents">
    <div class="filter-bar">
      <div style="margin-left: 10px;">

        <div class="filter-contents">
          <label for="sensor-picker">센서 종류 선택 :</label>
          <select id="sensor-picker" onchange='view_ajax(0)' style="height:22px; margin-left:5px;">
            <option value="Temp_D">온도</option>
            <option value="Humidity_D">습도</option>
            <option value="CO2_D">이산화탄소</option>
            <option value="illuminance_D">조도</option>
          </select>
        </div>

        <div style="margin-top:5px;">
          <label for="date-picker">날짜 선택 :</label>
          <input type="date" id="date-picker" onchange='view_ajax(1)'
              min="2021-01-01" max="2021-12-31" style="margin-left:5px;">
        </div>
      </div>

      <div style="margin-left: 10px;">
        <div style="margin-top:5px;">
          <label for="view-type">뷰 타입 선택 :</label>
          <select id="view-type" onchange='view_ajax(2)' style="height:22px; margin-left:5px;">
            <option value="graph">표</option>
            <option value="chart">차트</option>
          </select>
        </div>

        <div style="margin-top:5px;">
          <label for="time-picker">시간대 선택 :</label>
          <select id="time-picker" onchange='view_ajax(3)' style="height:22px; margin-left:5px;">
            <option value="day">하루 평균</option>
            <option value="hour">1시간 평균</option>
            <option value="minute">30분 평균</option>
          </select>
        </div>
      </div>
    </div>
    <div class="control-bar">
      <div style="width:16%;">
        <h5 style="text-align:center;">선풍기 On/Off</h5>
      </div>
      <div style="width:16%;" id="electricFan">
        <div class='toggleBG'>
          <button onclick='control_ajax("electricFan")' class='toggleFG'></button>
        </div>
      </div>
      <div style="width:16%;">
        <h5 style="text-align:center;">온열기 On/Off</h5>
      </div>
      <div style="width:16%;" id="warmer">
        <div class='toggleBG'>
          <button onclick='control_ajax("warmer")' class='toggleFG'></button>
        </div>
      </div>
      <div style="width:16%;">
        <h5 style="text-align:center;">조명 On/Off</h5>
      </div>
      <div style="width:16%;" id="light">
        <div class='toggleBG'>
          <button onclick='control_ajax("light")' class='toggleFG'></button>
        </div>
      </div>
    </div>
    <div class="mode-bar">
      <div style="margin-left: 10px;">
        <img src="./images/button.PNG" align="center" id="1001" class="preview" alt="" width=""/>
        <input type="hidden" id="pics1001" value="./images/device_num.PNG" />
      </div>
      <div style="width:16%;">
        <h5 style="text-align:center;">수동/자동</h5>
      </div>
      <div style="width:16%;" id="mode">
        <div class='toggleBG'>
          <button onclick='control_ajax("mode")' class='toggleFG'></button>
        </div>
      </div>
    </div>
		<div id='input_data' style="margin-top: 50px;"></div>
	</div>
	<div id="footer">
		<div class="clearfix">
			<div id="connect">
				
			</div>
			<p>
				© 2021 INCLab(M201) Smart Farm environment check system Make LJG.
			</p>
		</div>
	</div>
</body>

<style>
  #load {
    width: 100%;
    height: 100%;
    top: 0; left: 0;
    position: fixed;
    display: block;
    opacity: 0.8;
    background: white;
    z-index: 99;
    text-align: center;
  }
  #load > img {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 100;
  }
  .filter-bar{
    max-width: 600px;
    max-height: 70px;
    width:100%;
    height:100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #eee;
    border: solid 0.5px;
    position: fixed;
    top: 40px;
    right: 2%;
    z-index: 98;
  }
  .control-bar{
    max-width: 600px;
    max-height: 50px;
    width:100%;
    height:100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #eee;
    border: solid 0.5px;
    position: fixed;
    top: 111px;
    right: 2%;
    z-index: 98;
  }
  .mode-bar{
    max-width: 600px;
    max-height: 50px;
    width:100%;
    height:100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #eee;
    border: solid 0.5px;
    position: fixed;
    top: 162px;
    right: 2%;
    z-index: 98;
  }
  .filter-contents{
    justify-content: left;
  }
  #preview{
    position:absolute;
    border:1px solid #eee;
    background:#eee;
    padding:2px;
    display:none;
    color:#fff;
  }
  .toggleBG{
    background: #CCCCCC;
    width: 70px;
    height: 30px;
    border: 1px solid #CCCCCC;
    border-radius: 15px;
    pointer-events: none;
  }
  .toggleFG{
    background: #FFFFFF;
    width: 30px;
    height: 30px;
    border: none;
    border-radius: 15px;
    position: relative;
    left: 0px;
    pointer-events: auto;
  }
</style>

</html>