<?php
 include("config.php");
  session_start();
  
	  $tmpId = $_SESSION['login_user_id'];
	  $tmpUnitAlertLimit      = mysqli_real_escape_string($db,$_POST['focusedInput1']);
	  $tmpChargeAlertLimit    = mysqli_real_escape_string($db,$_POST['focusedInput2']);
	  $tmpEstChargeAlertLimit = mysqli_real_escape_string($db,$_POST['focusedInput3']);
	  $sql = "SELECT id FROM alert WHERE id = '$tmpId'";
      $result = mysqli_query($db,$sql);
	  $count = mysqli_num_rows($result);
		
      if($count >= 1) {
	  		
			$sql = "UPDATE alert SET unitAlertLimit='$tmpUnitAlertLimit',chargeAlertLimit='$tmpChargeAlertLimit',estChargeAlertLimit='$tmpEstChargeAlertLimit' where id = '$tmpId'";
			if ($db->query($sql) === TRUE) {
				 header("Location: myGoal.php");	 
			} 
	   } else {
    	    $sql = "INSERT INTO alert(`id`, `unitAlertLimit`, `chargeAlertLimit`, `estChargeAlertLimit`) VALUES ('$tmpId','$tmpUnitAlertLimit','$tmpChargeAlertLimit','$tmpEstChargeAlertLimit')";
			if ($db->query($sql) === TRUE) {
				 header("Location: myGoal.php");	 
			} 
	  	} 
 ?>