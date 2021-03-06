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
<title>Central Zone Parks</title>
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
  <img class="image" src="https://www.indianholiday.com/pictures/wildlife/parks/pench-national-park-92.jpeg" alt="Headshot photo" />
  <a href="Pench.php"><h3>Pench National Park</h3></a>
The Pench National Park spreads over a vast area of 293 square kilometers, and the park stretches out into the neighboring state of Maharastra. The best time to visit the Pench National Park is between the month's of November to June
The wildlife park is very popular for its deer and leopards. The Pench National Park is open for the tourists from 5 a.m. to 7 p.m. The sanctuary can be easily accessible by rail and road.
  </p>
</div><br><br>
	<div class="main-content div">
  <p>
  <img class="image" src="https://www.indianholiday.com/pictures/wildlife/parks/bandhavgarh-9.jpeg" alt="Headshot photo" />
  <a href="Bandhavgarh.php"><h3>Bandhavgarh National Park</h3></a>
Located in the heart of Umaria district of the Indian state of Madhya Pradesh, Bandhavgarh National Park is flocked by nature lovers and wildlife enthusiasts, every year, in decent numbers. Covering a buffer area of around 448 sq km and a core area of around 105 sq km, this national park lies in the foothills of Vindhyas. Former hunting grounds of the Maharajas of Rewa, it is now famed for being the natural habitat for the White Tigers.
</p>
</div><br><br>
<div class="main-content div">
  <p>
  <img class="image" src="https://www.indianholiday.com/pictures/wildlife/parks/kanha-20.jpeg" alt="Headshot photo" />
  <a href="Kanha.php"><h3>Kanha National Park</h3></a>
  Located in the centermost state of India, in Madhya Pradesh, Kanha national Park, which was established in the year 1955, is a protected land that stretches for approximately 940 km. The park is known for various wildlife conservations schemes initiated by its management, particularly regarding Barasingha and Tiger species.
</div><br><br><br>

<div class="main-content div">
  <p>
  <img class="image" src="https://www.indianholiday.com/pictures/wildlife/parks/kanger-ghati-national-park-111.jpeg" alt="Headshot photo" />
  <a href="Kanger.php"><h3>Kanger-Ghati National Park</h3></a>
 
 Protecting these habitats as well as preserving the existing wildlife sanctuaries is a major concern for the ecological security of our country. The Kanger Ghati National Park in Chhattisgarh bears a living testimony to the helping hands that have been forwarded by the Indian environmentalists and avid animal lovers alike. If you are considering a tour to Chhattisgarh be sure to include this exciting National Park in your travel itinerary.
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