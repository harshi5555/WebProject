<?php
   include("config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $tmpInputFirstName = mysqli_real_escape_string($db,$_POST['InputFirstName']);
      $tmpInputLastName = mysqli_real_escape_string($db,$_POST['InputLastName']); 
	  $tmpInputEmail = mysqli_real_escape_string($db,$_POST['InputEmail']);
      $tmpInputAddress = mysqli_real_escape_string($db,$_POST['InputAddress']); 
      $tmpInputPassword = mysqli_real_escape_string($db,$_POST['InputPassword']);
      
      $sql =  "INSERT INTO users(`firstName`, `lastName`, `address`, `email`, `password`) VALUES ('$tmpInputFirstName','$tmpInputLastName','$tmpInputAddress','$tmpInputEmail','$tmpInputPassword')";

		
      if($db->query($sql) === TRUE) {
		  $_SESSION['login_user_email'] = $tmpInputEmail;
		  $_SESSION['login_user'] = $tmpInputFirstName;
		  $sql = "SELECT id FROM users WHERE email = '$tmpInputEmail'";
		  $result = mysqli_query($db,$sql);
		  $row = $result->fetch_assoc();
          $_SESSION['login_user_id'] = $row['id'];
		  header("Location: meterRegister.html");
		  exit;
      }else {
		 header("Location: signup.html");
		 exit;
      }
   }
?>