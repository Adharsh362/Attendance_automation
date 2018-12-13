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
  <h4>Automation of</h4>
  <h1 class="w3-xxxlarge w3-animate-bottom">Attendance System</h1>
    <div class="w3-padding-32">
      <button class="w3-btn w3-xlarge w3-theme-dark w3-hover-teal" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900; border-radius:10px;">Login</button>
	  <button class="w3-btn w3-xlarge w3-theme-dark w3-hover-teal" onclick="document.getElementById('id02').style.display='block'" style="font-weight:900; border-radius:10px;">Register</button>
    </div>
  </div>
</header>

<!-- Modal -->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
      <header class="w3-container w3-theme">
        <span onclick="document.getElementById('id01').style.display='none'"
        class="w3-button w3-display-topright">&times;</span>
        <h5> Hello.. !<i class="fa fa-smile-o"></i></h5>
      </header>
      <div class="w3-padding">
			<script>
				function validate()
				{

					var sid=document.getElementById("s_id").value;
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
				  <form action="index.php">
					<label for="staff_id">Staff Id: </label>
					<input type="text" id="sid" name="s_id" placeholder="Staff Identification no..">

					<label for="pwd">Password: </label>
					<input type="password" id="pwd" name="pwd" placeholder="Password..">
					<br><center>
					<input type="submit" value="Submit" onclick="validate()"><center>

				  </form>
				</div>


	  </div>

      <footer class="w3-container w3-theme">
        <p>Good day, monk..! Continue logging in..<i class="fa fa-smile-o"></i></p>
      </footer>
    </div>
</div>
<div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
      <header class="w3-container w3-theme">
        <span onclick="document.getElementById('id02').style.display='none'"
        class="w3-button w3-display-topright">&times;</span>
        <h4></h4>
        <h5>Welcome user!!<i class="fa fa-smile-o"></i></h5>
      </header>
      <div class="w3-padding">
		<form method="post" action="#">
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
				<td colspan="2"><input type="text" class="form-control" id="s_id" onkeyup="matchstaff()" ><br><span id="s" style="color:red;"></span></td>
			  </tr>
			  <tr>
				<th>First Name:</th>
				<td colspan="2"><input type="text" class="form-control" id="fname" onfocus="namenull()"/><br><span id="n" style="color:red;"></span></td>
			  </tr>
			  <tr>
				<th>Last Name:</th>
				<td colspan="2"><input type="text" class="form-control" id="lname" onfocus="namenull()"/><br><span id="n1" style="color:red;"></span></td>
			  </tr>
			  <tr>
				<th>Phone no.:</th>
				<td colspan="2"><input type="number" class="form-control" id="phno" onkeyup="matchphno()" ><br><span id="p" style="color:red;"></span></td>
			  </tr>
			  <tr>
				<th>Email:</th>
				<td colspan="2"><input type="email" class="form-control" id="email" onkeyup="matchemail()" ><br><span id="e" style="color:red;"></span></td>
			  </tr>
			  <tr>
				<th>Create Password:</th>
				<td colspan="2"><input type="text" class="form-control" id="pass1" onkeyup="matchpassword()" ><br><span id="pa" style="color:red;"></span></td>
			  </tr>
			  <tr>
				<th>Confirm Password:</th>
				<td colspan="2"><input type="text" class="form-control" id="pass2" onkeyup="matchpass()" ><br><span id="o" style="color:red;"></span></td>
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
</div>
<footer class="w3-container w3-theme">
        <p></p>
      </footer>
    </div>
</div>
<!--Navigation Bar-->
<div class="w3-bar w3-theme">
  <a href="main.php" class="w3-bar-item w3-button w3-padding-16">Home</a>
  <a href="about.php" class="w3-bar-item w3-button w3-padding-16">About us</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-16">Contact</a>
  <div class="w3-dropdown-hover">
    <button class="w3-button w3-padding-16">
      Others <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="faq.php" class="w3-bar-item w3-button">FAQs</a>
	  <a href="contact.php" class="w3-bar-item w3-button">Contact</a>
	  <a href="login.php" class="w3-bar-item w3-button">Login</a>
	  <a href="register.php" class="w3-bar-item w3-button">Register</a>
    </div>
  </div>
</div>



<hr>
<!--Slidepics-->
<div class="w3-content" style="max-width:800px;position:relative">

<img class="mySlides w3-animate-opacity" src="1.jpg" style="width:100%">
<img class="mySlides w3-animate-opacity" src="2.jpg" style="width:100%">
<img class="mySlides w3-animate-opacity" src="3.png" style="width:100%">

<a class="w3-button w3-circle w3-hover-dark-grey" style="position:absolute;top:45%;left:0;" onclick="plusDivs(-1)">&#10094;</a>
<a class="w3-button w3-circle w3-hover-dark-grey" style="position:absolute;top:45%;right:0;" onclick="plusDivs(+1)">&#10095;</a>
</div>

<div class="w3-container">

<hr>
<!--Tabs-->
<div class="w3-border">
<div class="w3-bar w3-theme">
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'London')">London</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Paris')">Paris</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Tokyo')">Tokyo</button>
</div>

<div id="London" class="w3-container city w3-animate-opacity">
  <h2>London</h2>
  <p>London is the capital city of England.</p>
  <p>It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
</div>

<div id="Paris" class="w3-container city w3-animate-opacity">
  <h2>Paris</h2>
  <p>Paris is the capital of France.</p>
  <p>The Paris area is one of the largest population centers in Europe, with more than 12 million inhabitants.</p>
</div>

<div id="Tokyo" class="w3-container city w3-animate-opacity">
  <h2>Tokyo</h2>
  <p>Tokyo is the capital of Japan.</p>
  <p>It is the center of the Greater Tokyo Area, and the most populous metropolitan area in the world.</p>
</div>
</div>

<hr>

</div>

<hr>



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

<!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->
<script>
// Side navigation
function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "100%";
    x.style.fontSize = "40px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

// Tabs
function openCity(evt, cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
      activebtn[i].className = activebtn[i].className.replace(" w3-theme-dark", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-theme-dark";
}

var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();

// Accordions
function myAccFunc(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// Slideshows
var slideIndex = 1;

function plusDivs(n) {
slideIndex = slideIndex + n;
showDivs(slideIndex);
}

function showDivs(n) {
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}

showDivs(1);

// Progress Bars
function move() {
  var elem = document.getElementById("myBar");
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width == 100) {
      clearInterval(id);
    } else {
      width++;
      elem.style.width = width + '%';
      elem.innerHTML = width * 1  + '%';
    }
  }
}
</script>

</body>
</html>
