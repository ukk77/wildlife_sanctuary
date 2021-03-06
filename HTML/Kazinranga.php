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
<title>Kaziranga National Park</title>
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