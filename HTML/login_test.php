<?php
$servername = "127.1.0.0";
$username = "root";
$password = "";
$dbname = "seproj";
// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
	
} 
   session_start();

   //if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
     
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $sql = "SELECT cid FROM user WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         if($myusername == 'admin')
		 {header('location:Home.php');}
	      else
		  {header('location:Home.php');}
      }else {
         echo '<script language="javascript">';
         echo 'alert("Inavlid Username or Password")';
		 header('location:signup.php');
         echo '</script>';
		 //header('location:Login.php');
	  }
   //}
?>