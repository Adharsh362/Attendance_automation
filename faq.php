<!DOCTYPE html>
<html>
<head>
	<title>Registration::Portal</title>
	<?php include "header.php" ?>
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
      <a href="faq.php" class="w3-bar-item w3-button">FAQs</a>
	  <a href="#" class="w3-bar-item w3-button">Feedback</a>
    </div>
  </div>
</div>

<div class="w3-padding">
	<form action="#" method="post">
		<table class="table table-hover">
			<thead>
			  <tr>
				<th colspan="3"><center><h3>FAQ's</h3></center></th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<th>Name:</th>
				<td colspan="2"><input type="text" class="form-control" id="name" name="name"/></td>
			  </tr>
			  <tr>
				<th>Email:</th>
				<td colspan="2"><input type="text" class="form-control" id="email" name="email"/></td>
			  </tr>
			  <tr>
				<th>Post your question:</th>
				<td colspan="2"><form>
								  <textarea placeholder="Leave your question" name="question"></textarea>
								</form></td>
			  </tr>
			  <tr>
				<td colspan="3"><center><input type="submit" value="Submit"></center></td>
			  </tr>
			  </tbody>
		  </table>
	</form>

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