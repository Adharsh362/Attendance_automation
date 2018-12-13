<!DOCTYPE html>
<html>
<head>
	<title>Attendance</title>
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
	Successfully Registered..Check your mail!<br><br>
	Please <a href="login.php" >login</a>..!

<?php
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$phno=$_POST["phno"];
	$email=$_POST["email"];
	$crepass=$_POST["crepass"];
	$conpass=$_POST["conpass"];
	$s_id=$_POST["s_id"];
  require_once('email/class.phpmailer.php');
  include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded		
		
  $mail = new PHPMailer();
  $mail->IsSMTP(); // telling the class to use SMTP
  $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
  $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
  $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
  $mail->Username   = "spardha.attendance@gmail.com";  // GMAIL username
  $mail->Password   = "9492863910";            // GMAIL password

  $mail->SetFrom('anudeepdumapala@gmail.com', 'Srkrec Attendance'); // Change the name as you want
  $mail->Subject    = " $fname Successfully registered";
  $mail->Body = "You are successfully registered and You will get login access soon...
  \n You details are:\n Staff_id: $s_id\n  Password: $conpass \n Mobile: $phno";
  $mail->AddAddress($email);

  $mail->Send();

  echo "<br><br><font color='green' size='3'><b>Email has been Successfully Sent!</b></font></center>"; 	  

  ?>

	
	
	
	
	
	
	
	
	
	
	
	


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
	
