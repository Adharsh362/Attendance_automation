<!DOCTYPE html>
<html>
<head>
	<title>Attendance</title>
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
  <a href="#" class="w3-bar-item w3-button w3-padding-16">Contact</a>
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
	<form method="post" action="reg_entry.php">
		<center><h2><font style="italic">To Register, fill the form below...!<i class="fa fa-smile-o"></i></font></h2>
		<table class="table table-hover">
			<thead>
			  <tr>
				<th colspan="3"><center><h3>Registration</h3></center></th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<th>Staff Id:</th>
				<td colspan="2"><input type="text" class="form-control" id="s_id" name="s_id" onkeyup="matchstaff()" ><br><span id="s" style="color:red;"></span></td>
			  </tr>
			  <tr>
				<th>First Name:</th>
				<td colspan="2"><input type="text" class="form-control" name="fname" id="fname" onfocus="namenull()"/><br><span id="n" style="color:red;"></span></td>
			  </tr>
			  <tr>
				<th>Last Name:</th>
				<td colspan="2"><input type="text" class="form-control" id="lname" name="lname" onfocus="namenull()"/><br><span id="n1" style="color:red;"></span></td>
			  </tr>
			  <tr>
				<th>Phone no.:</th>
				<td colspan="2"><input type="number" class="form-control" id="phno" name="phno" onkeyup="matchphno()" ><br><span id="p" style="color:red;"></span></td>
			  </tr>
			  <tr>
				<th>Email:</th>
				<td colspan="2"><input type="email" class="form-control" id="email" name="email" onkeyup="matchemail()" ><br><span id="e" style="color:red;"></span></td>
			  </tr>
			  <tr>
				<th>Create Password:</th>
				<td colspan="2"><input type="text" class="form-control" id="pass1" name="crepass" onkeyup="matchpassword()" ><br><span id="pa" style="color:red;"></span></td>
			  </tr>
			  <tr>
				<th>Confirm Password:</th>
				<td colspan="2"><input type="text" class="form-control" id="pass2"  name="conpass" onkeyup="matchpass()" ><br><span id="o" style="color:red;"></span></td>
			  </tr>
			  <tr>
				<td colspan="2"><p><b>Password must contain only one uppercase,only one lower case, <br>only one number and one special character and in same order</b></p></td>
				</td>
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