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
<title>Periyar National Park</title>
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