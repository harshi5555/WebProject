<?php 
session_start();
include("config.php");
 $tmpId = $_SESSION['login_user_id'];
 $sql = "SELECT unitAlertLimit,chargeAlertLimit,estChargeAlertLimit FROM alert WHERE id='$tmpId'";
	
      $result = mysqli_query($db,$sql);
      $count = mysqli_num_rows($result);
		
      if($count >= 1) {
		 $row = $result->fetch_assoc();
         $_SESSION['unitAlertLimit'] = $row["unitAlertLimit"];
		 $_SESSION['chargeAlertLimit'] = $row["chargeAlertLimit"];
		 $_SESSION['estChargeAlertLimit'] = $row["estChargeAlertLimit"];
	
      } else{
	  
	     $_SESSION['unitAlertLimit'] = "Kwh";
		 $_SESSION['chargeAlertLimit'] = "Kr";
		 $_SESSION['estChargeAlertLimit'] = "Kr";
	}
?>