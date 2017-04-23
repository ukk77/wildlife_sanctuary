<html>
<head>
<style>
.image {
height: 450px;
}
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;margin:0}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

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
<title>Bandhavgadh National Park</title>
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
<form action="#" class ="login">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
    <label class="mdl-button mdl-js-button mdl-button--icon" for="sample6">
      <i class="material-icons">search</i>
    </label>
    <div class="mdl-textfield__expandable-holder">
      <input class="mdl-textfield__input" type="text" id="sample6">
      <label class="mdl-textfield__label" for="sample-expandable">Search</label>
    </div>
  </div>
</form>

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
    <div class="page-content"><CENTER><img src="data:image/jpeg;base64,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" class="image"></CENTER><br><br><br>
	<CENTER><button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
Timings
</button>
<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
Hotels Nearby
</button>
<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
Travel Guide
</button>
</CENTER>
</div>
</body>
</html>