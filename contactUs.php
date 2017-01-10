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
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script-->
<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.1.1.js"></script>
<script src="js/javascript.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="jQueryAssets/jquery-1.11.1.min.js"></script>
<script src="jQueryAssets/jquery.ui-1.10.4.dialog.min.js"></script>
<link rel="stylesheet" href="css/contactUs.css">
<link href="css/naviBar.css" rel="stylesheet" type="text/css">

</head>
<body class="contactbody">
<nav class="my-navbar navbar navbar-inverse">
  <div class="container-fluid">
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
            <li><a href="main.php">Daily Usage</a></li>
            <li><a href="weeklyUsage.php">Weekly Usage</a></li>
            <li><a href="monthlyUsage.php">Monthly</a></li>
            <li><a href="yearlyUsage.php">Yearly Usage</a></li>
          </ul>
        <li><a href="myGoal.php">My Goal</a></li>
        <li ><a href="notification.php">Notification</a></li>
        <li class="active"><a href="contactUs.php">Contact Us</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><a></a></li>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <div class="jumbotron">
    <h3>Customer Service</h3>
    <img src= "images/customerser.jpeg" class= "img-thumbnail" alt="Cinque Terre" width="300" height="300" padding="50" >
    <div class="jumbotron">
      <p  >Chat Us</p>
      <a href="#"  > Available 10:00 am to 22:00 pm</a> </div>
   
    <div class= "jumbotron">
      <p >Call Us</p>
      <a href="#" >0807562347</a> </div>
    <div class="jumbotron">
      <p>Mail Us</p>
      <a href="#"  > customer_care@greenyhome.se</a> </div>
    
    <!-- Latest compiled and minified JavaScript --> 
    <script src="js/bootstrap.min.js"></script> 
    <!-- <script src="js/bootstrap.min.js"></script> --> 
    <script src="js/bootstrap-3.3.7.js"></script> 
  </div>
</div>
<script src="js/loggedIn.js"></script> 
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
</body>
</html>
