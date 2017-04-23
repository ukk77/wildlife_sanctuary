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
<title>Koyna National Park</title>
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