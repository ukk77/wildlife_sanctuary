<html>
<head>
<style>

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
<title>Login</title>
<script>
$().ready(function() { 
	  $("#form").validate({ 
	   rules:{
username:{required:true},
password:{
	required:true,
}

},  messages:{
username:window.alert("<br>please enter first name");,
	password:{
		required:window.alert("<br>please enter password");,
		minlength:window.alert("<br>Password must contain atleast 5 characters");
	}
    
	  }
	})});
	</script>
</head>
<body>
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
<div>
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
      <a class="mdl-navigation__link" href="">Home</a>
	  <a class="mdl-navigation__link" href="">North Zone</a>
	  <a class="mdl-navigation__link" href="">East Zone</a>
	  <a class="mdl-navigation__link" href="">West Zone</a>
	  <a class="mdl-navigation__link" href="">South Zone</a>
	  <a class="mdl-navigation__link" href="">Central Zone</a>
	  <a class="mdl-navigation__link" href="">Contact Us</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content"><!-- Your content goes here --><br><br><br>
	
	</div>
	<!-- Simple Textfield -->
	<CENTER>
<form action=login_test.php class ="form" method="POST">
<div>
  <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" id="sample1" name = "username" required>
    <label class="mdl-textfield__label" for="sample1" >Username</label>
	</div><br>
  <!-- Simple Textfield -->
  <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="password" id="sample1" name="password" required>
    <label class="mdl-textfield__label" for="sample1">Password</label>
  </div>
 
  <br><br><br><br><br>
 <!-- Colored raised button -->
<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" value="submit" type="submit">
Login 
</button>

  </div>
</form>
</CENTER>
	</div>
  </main>
</div>
<footer class="footer">
  <p>Posted by: GOVERNMENT OF INDIA</p>
  <p>Contact information: <a href="mailto:ayush@gmail.com">contact@gmail.com</a>.</p>
</footer>

</body>
</html>
