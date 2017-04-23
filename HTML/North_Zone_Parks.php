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
<title>North Zone Parks</title>
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
  <img class="image" src="https://www.indianholiday.com/pictures/wildlife/parks/ranthambore-51.jpeg" alt="Headshot photo" />
  <a href="Ranthambore.php"><h3>Ranthambore National Park</h3></a>
Established in the year 1955 as a game sanctuary, Ranthambore National Park is one of the
 most popular places to visit for wildlife lovers. In 1972, the commencement of Project Tiger took place. Ranthambore
 received the status of a national park in the year 1980. At this point of time, Ranthambore National Park was conferred 
 the status of a tiger reserve in the country. It is spread on an area of 1,334
 square kilometers along with its neighboring sanctuaries- the Kaila Devi Sanctuary and the Mansingh Sanctuary.
  </p>
</div><br>
	<div class="main-content div">
  <p>
  <img class="image" src="https://www.indianholiday.com/pictures/wildlife/parks/corbett-13.jpeg" alt="Headshot photo" />
  <a href="Corbett.php"><h3>Corbett National Park</h3></a>
Jim Corbett National Park in Uttarakhand covers an area of approximately 520.8 sq. km witnesses almost 70,000 
visitors every season from all around the world. One of India’s largest National Park, is home to more than 488 species of 
fauna and 586 wildlife species.
</p>
</div><br><br>
<div class="main-content div">
  <p>
  <img class="image" src="https://www.indianholiday.com/pictures/wildlife/parks/great-himalayan-national-park-83.jpeg" alt="Headshot photo" />
  <a href="Great_Himalyan.php"><h3>Great Himalayan National Park</h3></a>
One of the most popular national parks of India, the Great Himalayan National Park (GHNP), is located in Kullu region in the state of Himachal Pradesh.
 Established back in the year 1984, the national park is spread over an area of 1,171 km2 at an elevation of 1500 to 6000m.
</div><br><br><br>

<div class="main-content div">
  <p>
  <img class="image" src="https://www.indianholiday.com/pictures/wildlife/parks/valley-of-flowers-215.jpeg" alt="Headshot photo" />
  <a href="Valley_Of_Flowers.php"><h3>Valley Of Flowers National Park</h3></a>
  Valley of Flowers was brought into light in 1931 by Frank S. Smythe, during his return from Kamet with other mountaineers. Kamet is a mountain peak with the height of 25,500 ft. 
  It was a cold day when they were passing by Bhyuandar Pass. On the way, they lost their trail and fortunately reached Valley of Flowers. 
Here, they were amazed to see different variety of flowers such as Androsaces, Saxifrages, Sedums, Asters , Potentillas, Geraniums, Gentians, Geums, 
and many more. Thereafter, Frank S. Smythe also wrote a book, named “THE VALLEY OF FLOWERS“.
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