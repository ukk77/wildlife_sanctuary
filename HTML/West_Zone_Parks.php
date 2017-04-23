<html>
<head>
<style>
.main-content img {
   float: left;
   padding: 0 20px 20px 0;
}
.image {
	height: 150px;
    width: 200px;
.div {
    width: 75%;
    border: 5px solid green;
    float: right;
	height: 150px;
	
.footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #efefef;
  text-align: center;
}
.division {
	background-color: green;
    width: 250px;
    border: 10px solid green;
	float: right;
	height: 450px;
}
.login {
float: right;
}
.form {
padding-top: 50px;
}
.box {
    width: 250px;
	height: 400px;
    border: 5px solid green;
    padding: 5px;
	float:right;
}
</style>
<title>West Zone Parks</title>
</head>
<body>
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
   $u = $_SESSION['login_user'];
   echo "<p>Welcome $u !</p>";
 ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.light_green-green.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">National Parks Of India</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"> 

	  </div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <!-- Expandable Textfield -->
		
		
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Welcome!</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="Home.php">Home</a>
	  <a class="mdl-navigation__link" href="North_Zone.php">North Zone</a>
	  <a class="mdl-navigation__link" href="East_Zone.php">East Zone</a>
	  <a class="mdl-navigation__link" href="West_Zone.php">West Zone</a>
	  <a class="mdl-navigation__link" href="South_Zone.php">South Zone</a>
	  <a class="mdl-navigation__link" href="Central_Zone.php">Central Zone</a>
	  
	  <a class="mdl-navigation__link" href="">Contact Us</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content"><!-- Your content goes here --><br><br><br>
	
	<div class="main-content div">
  <p>
  <img class="image" src="https://www.indianholiday.com/pictures/wildlife/parks/yawal-sanctuary-169.jpeg" alt="Headshot photo" />
  <a href="Yawal.php"><h3>Yawal National Park</h3></a>
  Considered as the treasure trove of nature, Yawal Sanctuary boasts a wide collection of flora and fauna. Drained by the Sukki River Dam which remains filled for the entire year, Yawal Sanctuary is a veritable heaven for nature lovers. This dam, 615 meters in length and 18.74 meters in breadth is deep enough to enclose sufficient water reserve for summer months.
  </p>
</div><br><br><br>
	<div class="main-content div">
  <p>
  <img class="image" src="https://www.indianholiday.com/pictures/wildlife/parks/bhimashankar-wildlife-sanctuary-102.jpeg" alt="Headshot photo" />
  <a href="Bhimashankar.php"><h3>Bhimashankar National Park</h3></a>
The Bhimashankar Wildlife Sanctuary is the home of the Giant Indian Squirrel and a huge number of other animals and birds. The Bhimashankar Wildlife Sanctuary in Maharashtra is spread across an extensive area of 120 square kilometers on the Western Ghats or the Sahyadri Ranges. 
The densely forested area of the Maharashtra, Bhimashankar Wildlife Sanctuary in India receives heavy monsoon rainfall. The Bhimashankar Wildlife Sanctuary in is a very popular weekend gateway from the cities of Pune and Mumbai.
</p>
</div><br><br>
<div class="main-content div">
  <p>
  <img class="image" src="https://www.indianholiday.com/pictures/wildlife/parks/koyna-wildlife-sanctuary-128.jpeg" alt="Headshot photo" />
  <a href="Koyna.php"><h3>Koyna National Park</h3></a>
Koyna Wildlife Sanctuary, in Maharasthra, forms the Northern part of Sahyadri Tiger Reserve. Covering an area of 424 sq. km. Surrounded by Koyana dam on Eastern and Western side, which is the central hydroelectric project in Maharashtra, the sanctuary looks spectacular. 
Also surrounding the sanctuary are the Western Ghats’ vertical slopes and Shivasagar reservoir.
  </div><br><br><br>

<div class="main-content div">
  <p>
  <img class="image" src="https://www.indianholiday.com/pictures/wildlife/parks/bor-wildlife-sanctuary-107.jpeg" alt="Headshot photo" />
  <a href="Bor.php"><h3>Bor National Park</h3></a>
  Bor Wildlife Sanctuary is a reserve forest with all the measures for the welfare of the wild animals. Hunting or causing any harm can lead to criminal offences.The sanctuary is home to dry deciduous forests with various species of trees like the teak, ain, tendua and bamboo.

Among the wild animals there are tigers, panthers, nilgai, sambhars, barking deer, chinkaras, wildboars, bears, wild dogs and wild cats.
</div><br><br>
	</div>
	

	</div>
  </main>
</div>
<footer class="footer">
  <p>Posted by: GOVERNMENT OF INDIA</p>
  <p>Contact information: <a href="mailto:ayush@gmail.com">contact@gmail.com</a>.</p>
</footer>

</body>
</html>