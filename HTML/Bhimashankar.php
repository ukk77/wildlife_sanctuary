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
<title>Bhimashankar National Park</title>
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