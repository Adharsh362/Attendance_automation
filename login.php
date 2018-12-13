<!DOCTYPE html>
<html>
<head>
	<title>Registration::Portal</title>
	<?php include "header.php" ?>
	<link rel="stylesheet" href="css/reg.css"/>
</head>
<body>

<!-- Side Navigation -->
<nav class="w3-sidebar w3-bar-block w3-animate-left w3-center" style="display:none; width:10%;" id="mySidebar">
	<i class="fa fa-remove"></i><button class="w3-bar-item w3-button" onclick="w3_close()">Back</button>
  <h1 class="w3-xxxlarge w3-text-theme">Menu</h1>
  <a href="main.php" class="w3-bar-item w3-button">Home</a>
  <a href="login.html" class="w3-bar-item w3-button">Sign in</a>
  <a href="register.html" class="w3-bar-item w3-button">Sign up</a>
</nav>

<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader">
  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i>
  <div class="w3-center">
	  <h3>Automation of</h3>
	  <h1 class="w3-xxxlarge w3-animate-bottom">Attendance System</h1>
  </div>
</header>

<!-- Modal -->
<!--Navigation Bar-->
<div class="w3-bar w3-theme">
  <a href="main.php" class="w3-bar-item w3-button w3-padding-16">Home</a>
  <a href="login.php" class="w3-bar-item w3-button w3-padding-16">Login</a>
  <a href="register.php" class="w3-bar-item w3-button w3-padding-16">Register</a>
  <a href="about.php" class="w3-bar-item w3-button w3-padding-16">About us</a>
  <a href="contact.php" class="w3-bar-item w3-button w3-padding-16">Contact</a>
  <div class="w3-dropdown-hover">
    <button class="w3-button w3-padding-16">
      Others <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="#" class="w3-bar-item w3-button">FAQs</a>
	  <a href="#" class="w3-bar-item w3-button">Feedback</a>
    </div>
  </div>
</div>

<div class="w3-padding">
			<script>
				function validate()
				{

					var sid=document.getElementById("sid").value;
					var pwd=document.getElementById("pwd").value;
					var sidreg=/^\d{4,5}$/;
					var pwdreg=/^[A-Z][a-z][1-9][\.\$\!\^\&\@\#\%\*]$/;// at least one number, one lowercase and one uppercase letter
			// at least six characters

					if(!sid.match(sidreg))
					{
						alert("Invalid Staff id!");

					}
					else
					{
						if(!pwd.match(pwdreg))
						{
							alert("Invalid password!");

						}
					}
				}
			</script>
				<div>
				  <form role="form" action="index.php" method="POST">
					<label for="staff_id">Staff Id: </label>
					<input type="text" id="sid" name="staff_id" placeholder="Staff Identification no..">

					<label for="pwd">Password: </label>
					<input type="password" id="pwd" name="password" placeholder="Password..">
					<br><center>
					<input type="submit" value="Submit" onclick="validate()"><center>
				  </form>
				  
				  <?php
					   if(isset($_GET['id']))
					     {
					       echo "<font color='red'>invalid userid or password <br></font>";
					     }					
					?>
				</div>


	  </div>
	  <!-- Footer -->
		<footer class="w3-container w3-theme-dark">
		  <h3>Footer</h3>
		  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
		  <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
			<span class="w3-text w3-theme w3-padding">Go To Top</span>&nbsp;
			<a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
			<i class="fa fa-chevron-circle-up"></i></span></a>
		  </div>
		  <p>Remember to check out our&nbsp;&nbsp;<a href="w3css_references.asp" class="w3-btn w3-theme" target="_blank">W3.CSS Reference</a></p>
		</footer>

</body>
</html>