<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="css/notification.css">
<link href="css/naviBar.css" rel="stylesheet" type="text/css">

<title>Notification</title>
<script src="jQueryAssets/jquery-1.11.1.min.js"></script>
<script src="jQueryAssets/jquery.ui-1.10.4.slider.min.js"></script>
</head>

<body class="notifbody">
<nav class="my-navbar navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#inverseNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
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
        <li id="loggedIn" ><a><span class="glyphicon glyphicon-user" aria-hidden="true" style= "color: rgba(133,139,144,1.00);"</span><?php echo " ". $_SESSION["login_user"];?></a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Usage<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="main.php">Daily Usage</a></li>
            <li><a href="weeklyUsage.php">Weekly Usage</a></li>
            <li><a href="monthlyUsage.php">Monthly</a></li>
            <li><a href="yearlyUsage.php">Yearly Usage</a></li>
          </ul>
        <li><a href="myGoal.php">My Goal</a></li>
        <li class="active"><a href="notification.php">Notification</a></li>
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
  <div class="jumbotron" style="background-color:black; color:rgba(133,139,144,1.00);">
    <h3>Notification</h3>
    <div class="alert success"> <span class="closebtn">&times;</span> <strong>Success!</strong> 15/11/2016 at 10:06 AM -You have succeed your goal. </div>
    <div class="alert info"> <span class="closebtn">&times;</span> <strong>Info!</strong> 15/11/2016 at 5:48 AM -You're back below your goal! </div>
    <div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> <strong>Danger!</strong>14/11/2016 at 4:52 AM - You have exceed your goal. </div>
    <div class="alert"><span class="closebtn">&times;</span> <strong>Danger!</strong> 13/11/2016 at 22:06 PM- You have exceed your goal. </div>
    <div class="alert success"> <span class="closebtn">&times;</span> <strong>Success!</strong>12/11/2016 at 20:00 PM -You have succeed your goal. </div>
    <div class="alert info"> <span class="closebtn">&times;</span> <strong>Info!</strong> 12/11/2016 at 15:48 PM -You're back below your goal! </div>
    <div class="alert warning"> <span class="closebtn">&times;</span> <strong>Warning!</strong> 11/11/2016 at 16:52 PM - You will exceed your goal. </div>
    <script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}
</script> 
    <script src="js/loggedIn.js"></script> 
    <script src="js/jquery-1.11.3.min.js"></script> 
    <!-- Latest compiled and minified JavaScript --> 
    
    <script src="js/bootstrap.min.js"></script> 
  </div>
</div>
</body>
</html>
