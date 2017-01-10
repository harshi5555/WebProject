<?php
   include("config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $tmpMeterNum1 = mysqli_real_escape_string($db,$_POST['meterNum1']);
      $tmpMeterNum2 = mysqli_real_escape_string($db,$_POST['meterNum2']); 
	  $tmpMeterNum3 = mysqli_real_escape_string($db,$_POST['meterNum3']);
      $tmpMeterNum4 = mysqli_real_escape_string($db,$_POST['meterNum4']); 
      $tmpMeterNum5 = mysqli_real_escape_string($db,$_POST['meterNum5']);
	  #$tmpMeterNum6 = mysqli_real_escape_string($db,$_POST['meterNum6']);
      $tmpMeterNum  = $tmpMeterNum1.$tmpMeterNum2.$tmpMeterNum3.$tmpMeterNum4.$tmpMeterNum5;
	  $tmpLoginUserEmail = $_SESSION['login_user_email'];
      $sql =  "UPDATE users SET meterNumber='$tmpMeterNum' WHERE email='$tmpLoginUserEmail' ";
     
		
      if($db->query($sql) === TRUE) {
		  header("Location: main.php");
		  exit;
      }else {
		 header("Location: meterRegister.html");
		 exit;
      }
   }
?>