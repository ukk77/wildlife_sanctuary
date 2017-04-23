<?php
$servername = "127.1.0.0";
$username = "root";
$password = "";
$dbname = "seproj";
// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
   session_start();

   //if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = $_POST['username'];
      $password = $_POST['password']; 
	  $sql="insert into user(username,password) values ('$username','$password')";
	 $result = mysqli_query($con,$sql);
	  if ($result) {
    echo "New record created successfully";
	header('location:Login.php');
    } 
else {
   echo "Error: " . $sql . "<br>" . mysqli_error($con);
   header('location:signup.php');
}
mysqli_close($con);
	  ?>