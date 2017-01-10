<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
 <title>index</title>
<link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
<link href="css/naviBar.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/dailyusage.css">
<link href="css/naviBar.css" rel="stylesheet" type="text/css">
</head>

<body class="mybody">
<nav class="my-navbar navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#inverseNavbar1" aria-expanded="false">
      	<span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
     
      <a class="navbar-brand" href="#"><span class="title">Greeny Home </span></a></div>
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
        <li id="loggedIn" ><a><span class="glyphicon glyphicon-user" aria-hidden="true" </span><?php echo " ". $_SESSION["login_user"];?></a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Usage<span class="caret"></span></a>
          
          <ul class="dropdown-menu">
            <li class="active"><a href="main.php">Daily Usage</a></li>
            <li><a href="weeklyUsage.php">Weekly Usage</a></li>
            <li><a href="monthlyUsage.php">Monthly</a></li>
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
  </div>
</nav>
<div class="container">
  <center>
    <h3>Daily Usage</h3>
  </center>
  
  <div class="jumbotron myjumbotron" > 
    
    
    <div class="usageChart"> 
      
      <canvas id="myChart"></canvas>
      
      
    </div>
  </div>
  <div class="container">
    
      <center>
        <span class="glyphicon glyphicon-chevron-down " aria-hidden="true" onclick="myFunction()"></span>
      </center>
      <div id="myDIV" >
        <table class="table" >
          <tbody >
            <tr>
              <td><h4>Currant Units </h4></td>
              <td> 3kWh </td>
            </tr>
            <tr>
              <td><h4> Current charges </h4></td>
              <td> 6kr </td>
            </tr>
            <tr>
              <td><h4> Estimate Cost</h4></td>
              <td> 15kr </td>
            </tr>
            <tr>
              <td><h4>From last hour usage </h4></td>
              <td> 1.5kWh </td>
            </tr>
          </tbody>
        </table>
       
     
    </div>
  </div>
</div>


<script src="js/Chart.js"></script> 

<script src="js/main.js"> </script>

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="js/loggedIn.js"></script> 
<script src="js/bootstrap-3.3.7.js"></script>
</body>
</html>
