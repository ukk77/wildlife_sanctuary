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
<title>East Zone Parks</title>
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
      <a class="mdl-navigation__link" href="">Home</a>
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
  <img class="image" src="https://www.indianholiday.com/pictures/wildlife/parks/sunderbans-55.jpeg" alt="Headshot photo" />
  <a href="Sundarban.php"><h3>Sundarban National Park</h3></a>
  Sunderbans is the largest estuarine forests in West Bengal that are covered throughout by mangrove forests. They are constituted by the crisscrossing of 54 small islands along with numerous River Ganges tributaries.
Tourists come here not only to enjoy gorgeous sceneries but also to enjoy the wildlife constituted by 55 species of reptiles, 250 species of birds and 58 species of mammals. The only way to traverse the park is by availing a boat. Jeep safaris are not allowed here. No one is even allowed to get down on the river bank.
  </p>
</div><br>
	<div class="main-content div">
  <p>
  <img class="image" src="https://www.indianholiday.com/pictures/wildlife/parks/kaziranga-21.jpeg" alt="Headshot photo" />
  <a href="Kazinranga.php"><h3>Kaziranga National Park</h3></a>
Kaziranga National Park acquired a significant position in the list of the most popular tourist destinations in India. Rich flora and fauna, and beautiful ambience are the major factors that the national park a must visit amidst adventure seekers.
These attributes have also made the park get listed amidst the UNESCO’ World Heritage Site List. The national park also provides shelter to about 35 mammalian species, which includes 15 species of mammals are categorized as threatened under the IUCN Red List.
</p>
</div><br><br>
<div class="main-content div">
  <p>
  <img class="image" src="https://www.indianholiday.com/pictures/wildlife/parks/nameri-national-park-33.jpeg" alt="Headshot photo" />
  <a href="Nameri.php"><h3>Nameri National Park</h3></a>
Located in the Sontipur district of Assam, India, The Nameri National Park covers an area of around 200 sq. km. The park offers the best sights to all the nature lovers and makes them take back some beautiful memories which they are going to cherish forever.
</div><br><br><br>

<div class="main-content div">
  <p>
  <img class="image" src="https://www.indianholiday.com/pictures/wildlife/parks/manas-22.jpeg" alt="Headshot photo" />
  <a href="Manas.php"><h3>Manas National Park</h3></a>
  Located at the foothills of the Bhutan-Himalayas in Assam, Manas National Park is a park known for its unique biodiversity and landscape. It is among the first reserves which were included in the Project Tiger in 1973. The park is home to some rare and endangered species such as Pygmy Hog, Assam Roofed Turtle, Golden Langur and Hispid Hare.
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