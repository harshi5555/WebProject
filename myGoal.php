<?php
include 'alertData.php';
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
<link rel="stylesheet" href="css/myGoal.css">
<link href="css/naviBar.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/toggleButton.css">
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.slider.min.css" rel="stylesheet" type="text/css">
<title>My Goal</title>

<script src="jQueryAssets/jquery-1.11.1.min.js"></script>
<script src="jQueryAssets/jquery.ui-1.10.4.slider.min.js"></script>



</head>

<body class="goalbody">
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
      <ul class="nav navbar-nav navbar-right test">
      <li id="loggedIn" ><a><span class="glyphicon glyphicon-user" aria-hidden="true" style= "color: rgba(133,139,144,1.00);"</span><?php echo " ". $_SESSION["login_user"];?></a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Usage<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="main.php">Daily Usage</a></li>
            <li><a href="weeklyUsage.php">Weekly Usage</a></li>
            <li><a href="monthlyUsage.php">Monthly</a></li>
            <li><a href="yearlyUsage.php">Yearly Usage</a></li>
          </ul>
        <li class="active"><a href="myGoal.php">My Goal</a></li>
        <li><a href="notification.php">Notification</a></li>
        <li><a  href="contactUs.php">Contact Us</a></li>
        <li><a href="logout.php">Logout</a></li>
        

      </ul>
      
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<div id="page-wrap">
  <div id="firstjumbotron ">
    <div class="container">
      <div class ="row">
        <div class="col-xs-12">
          <div class="jumbotron" >
            <h4> Alerts </h4>
            <table class="table table-condensed">
              <tbody>
                <tr>
                  <td><label class="checkbox-inline" >
                      <input type="checkbox" value="" >
                      Daliy </label></td>
                  <td><label class="checkbox-inline" >
                      <input type="checkbox" value="" >
                      Weekly </label></td>
                  <td><label class="checkbox-inline" >
                      <input type="checkbox" value="" >
                      Monthly </label></td>
                  <td><label class="checkbox-inline" >
                      <input type="checkbox" value="" >
                      Yearly </label></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class ="row">
      <div class="col-xs-12">
        <div class="jumbotron" >
          
            
            <form class="form-horizontal" action="saveAlerts.php" method= "post" >
             <div class="well well-sm">
              <div class="form-group" style="color:rgba(0,0,0,1.00)">
                <label style="padding-left:15px;">When usage units exceeds(kWh)</label>
                <div class="col-sm-4">
                  <input class="form-control" id="focusedInput1"  name="focusedInput1" type="text" value= <?php echo " ". $_SESSION["unitAlertLimit"];?>>
                </div>
              </div>
            <!--/form-->
          </div>
          <div class="well well-sm">
            <!--form class="form-horizontal"  -->
              <div class="form-group" style="color:rgba(0,0,0,1.00);">
                <label  style="padding-left:15px;">When charges exceeds(Kr)</label>
                <div class="col-sm-4">
                  <input class="form-control" id="focusedInput2" name="focusedInput2" type="text" value= <?php echo " ". $_SESSION["chargeAlertLimit"];?>>
                </div>
              </div>
            <!--/form-->
          </div>
          <div class="well well-sm">
            <!--form class="form-horizontal"  -->
              <div class="form-group" style="color:rgba(0,0,0,1.00)">
                <label style="padding-left:15px;">When Estimated charges exceeds(Kr)</label>
                <div class="col-sm-4">
                  <input class="form-control" id="focusedInput3" name="focusedInput3" type="text" value= <?php echo " ". $_SESSION["estChargeAlertLimit"];?>>
                </div>
              </div>
              
             
         

          </div>
          <div class="form-group">
             <button type="submit" class="btn btn-primary" styel0"margin-left:20px;">Save</button>
            </div>
               </form>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container">
  <div class ="row">
    <div class="col-xs-12">
      <div class="jumbotron" >
        <table class="table table-condensed" >
          <tbody >
            <tr>
              <td><h4> Alerts </h4></td>
              <td><label class="switch">
                <input type="checkbox" checked>
                <div class="slider round"></div>
                </label></td>
            </tr>
            <tr>
              <td><h4> Sent Email </h4></td>
              <td><label class="switch">
                <input type="checkbox" checked>
                <div class="slider round"></div>
                </label></td>
            </tr>
            <tr>
              <td><h4> Alarm</h4></td>
              <td><label class="switch">
                <input type="checkbox" checked>
                <div class="slider round"></div>
                </label></td>
            </tr>
          </tbody>
        </table>
      </div>
       
    </div>
  </div>
</div>

<script src="js/loggedIn.js"></script>

<script src="js/jquery-1.11.3.min.js"></script> 
<script src="js/bootstrap.min.js"></script>


</body>
</html>
