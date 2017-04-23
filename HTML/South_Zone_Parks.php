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
<title>South Zone Parks</title>
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
  <img class="image" src="https://www.indianholiday.com/pictures/wildlife/parks/periyar-national-park-50.jpeg" alt="Headshot photo" />
  <a href="Periyar.php"><h3>Periyar National Park</h3></a>
Periyar National Park in Kerala is a protected wildlife reserve. The area covering 350 sq km right in the middle of serene Periyar Lake was declared as a National Park in the year 1982. The National Park is situated right at the heart of Pandalam Hills and Cardamom Hills of Southern Western Ghats.
  </p>
</div><br><br>
	<div class="main-content div">
  <p>
  <img class="image" src="https://www.indianholiday.com/pictures/wildlife/parks/bandipur-10.jpeg" alt="Headshot photo" />
  <a href="Bandipur.php"><h3>Bandipur National Park</h3></a>
Bandipur National Park is located in Chamarajanagar district in Karnataka. Gifted with a comfortable climate and varied geographical features, this wildlife sanctuary in Karnataka has a remarkable variety of flora and fauna, making it an absolute heaven for wildlife in India. It also happens to be one of the few reserves where you could avail the elephant safari in India.
</p>
</div><br><br>
<div class="main-content div">
  <p>
  <img class="image" src="https://www.indianholiday.com/pictures/wildlife/parks/viralimalai-wildlife-parks-226.jpeg" alt="Headshot photo" />
  <a href="Viralimalai.php"><h3>Viralimalai National Park</h3></a>
Viralimalai Wildlife Park is one of the popular tourist destinations. This wildlife resort is located in the midst of the small village 30 kms away from Thiruchirappalli and 40 kms from Pudukkottai. The place is famous for its Murugan Temple and the Peacock Sanctuary.
</div><br><br><br>

<div class="main-content div">
  <p>
  <img class="image" src="https://www.indianholiday.com/pictures/wildlife/parks/nagarhole-24.jpeg" alt="Headshot photo" />
  <a href="Nagarhole.php"><h3>Nagarhole National Park</h3></a>
Nagarhole National Park, popularly referred as Rajiv Gandhi National Park, in Karnataka is a popular tiger and elephant reserve of India. The forest area was given the designation of National Park in the year 1988. The total area of the protected Park is estimated to be 643 sq. km. 
The park currently houses more than 270 species of birds. With increasing popularity of Nagarhole National Park each day, UNESCO is considering to include it in World Heritage Sites.</div><br><br>
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