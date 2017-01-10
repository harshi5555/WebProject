<?php
   include("config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id,firstName FROM users WHERE email = '$myusername' and password = '$mypassword'";
	
      $result = mysqli_query($db,$sql);
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
		 $row = $result->fetch_assoc();
         $_SESSION['login_user'] = $row["firstName"];
		 $_SESSION['login_user_id'] = $row["id"];
      
         header("location: main.php");
		 exit;
      }else {
		 header("location: index.html");
		 exit;
		 
      }
   }
?>