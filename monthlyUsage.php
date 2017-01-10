<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Monthly Usage</title>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script-->

<script src="js/bootstrap.js"></script>



<link rel="stylesheet" href="css/dailyusage.css">
<link href="css/naviBar.css" rel="stylesheet" type="text/css">
</head>

<body class="mybody">
<nav class="my-navbar navbar navbar-inverse">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#inverseNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="#"><span class="title">Greeny Home </span></a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="inverseNavbar1">
      <ul class="nav navbar-nav">
        <li class="active"></li>
        <li></li>
        <li class="dropdown">
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group"> </div>
      </form>
      <ul class="nav navbar-nav navbar-right test">
      <li id="loggedIn" ><a><span class="glyphicon glyphicon-user" aria-hidden="true" style= "color: rgba(133,139,144,1.00);"</span><?php echo " ". $_SESSION["login_user"];?></a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Usage<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li ><a href="main.php">Daily Usage</a></li>
            <li ><a href="weeklyUsage.php">Weekly Usage</a></li>
            <li class="active"><a href="monthlyUsage.php">Monthly Usage</a></li>
            <li><a href="yearlyUsage.php">Yearly Usage</a></li>
          </ul>
        <li><a href="myGoal.php">My Goal</a></li>
        <li><a href="notification.php">Notification</a></li>
        <li><a href="contactUs.php">Contact Us</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><a></a></li>
        
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<div class="container">
  <center>
    <h3>Monthly Usage</h3>
  </center>
  <div class="jumbotron" style="background-color:black;" > 
    <script src="js/jquery-1.11.3.min.js"></script>
    <div class="usageChart"> 
      <script src="js/Chart.js"></script> 
      <script>
var ctx = document.getElementById("myChart");
</script>
      <canvas id="myChart"></canvas>
      <script>
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [
        {
            label: "Monthly Usage",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(75,192,192,0.4)",
            borderColor:"#EFF20C",			
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(226,14,17,1.00)",
            pointBackgroundColor: "#EFF20C",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "#EFF20C",
            pointHoverBorderColor: "#EFF20C",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: [250,270,230,260,300,280,320,300,260,250,],
            spanGaps: false,
			
        }
    ]
},

scales:{
  xAxes:[{
    gridLines:{
      color:"rgba(226,14,17,1.00)",
      zeroLineColor:"rgba(226,14,17,1.00)"
    }
  }],
  yAxes:[{
    display:false
  }],
}
   
	
	
});
</script> 
    </div>
  </div>
  <div class="container">
    <div class="jumbotron" style="background-color:hsla(159,74%,45%,1.00);" >
      <center>
        <span class="glyphicon glyphicon-chevron-down " aria-hidden="true" onclick="myFunction()" style="font-size: 2em"></span>
      </center>
      <div id="myDIV" style="display: none;">
        <table class="table" >
          <tbody >
            <tr>
              <td><h4>Currant Units </h4></td>
              <td> 60kWh </td>
            </tr>
            <tr>
              <td><h4> Current charges </h4></td>
              <td> 180kr </td>
            </tr>
            <tr>
              <td><h4> Estimate Cost</h4></td>
              <td> 500kr </td>
            </tr>
            <tr>
              <td><h4>From last Month usage </h4></td>
              <td> 200kWh </td>
            </tr>
          </tbody>
        </table>
        <script>
function myFunction() {
    var x = document.getElementById('myDIV');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}
</script> 
      </div>
      <script src="js/loggedIn.js"></script>

      <script src="js/jquery-1.11.3.min.js"></script> 
      <!-- Latest compiled and minified JavaScript --> 
      
      <script src="js/bootstrap.min.js"></script> 
    </div>
  </div>
</div>
</body>
</html>
