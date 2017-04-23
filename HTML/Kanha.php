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
<title>Kanha National Park</title>
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