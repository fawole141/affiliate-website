<?php
session_start();
$username = $_SESSION['user_login'];
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>

	<style type="text/css">
		

		.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px black;
  width: 300px;
  height: 300px;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

	</style>
</head>
<body>


<script type="text/javascript">
	
		var upgradeTime = 14900;
var seconds = upgradeTime;
function timer() {
  var days        = Math.floor(seconds/24/60/60);
  var hoursLeft   = Math.floor((seconds) - (days*86400));
  var hours       = Math.floor(hoursLeft/3600);
  var minutesLeft = Math.floor((hoursLeft) - (hours*3600));
  var minutes     = Math.floor(minutesLeft/60);
  var remainingSeconds = seconds % 60;
  function pad(n) {
    return (n < 10 ? "0" + n : n);
  }
  document.getElementById('countdown').innerHTML = pad(days) + ":" + pad(hours) + ":" + pad(minutes) + ":" + pad(remainingSeconds);
  if (seconds == 0) {
    clearInterval(countdownTimer);
    document.getElementById('countdown').innerHTML = "Completed";
    window.location.reload();

     location.replace("insert.php")




    
    
  } else {
    seconds--;
    document.getElementById("button").disabled = true;

  }
}





 countdownTimer = setInterval('timer()', 1000);




	</script>





		<center>
      <div class="alert alert-success">
        <?php echo @$_GET['msg'];?>
      </div>
<button class="button"  id="button" onclick="startTime()"><i class="fa fa-power-off" style="font-size:80px; "><br> Mine</i></button><br><br>

<span id="countdown" class="timer" style="font-size: 30px; "></span>
</center>




</body>
</html>