<!DOCTYPE html>
<html>
<head>
	<title>Attendance</title>
	<?php include "header.php" ?>
	<?php include "access.php" ?>
	<style>

		#ck-button {
			margin:4px;
			background-color:#ffff;
			border-radius:5px;
			border:1px solid #D0D0D0;
			overflow:hidden;
			float:left;
		}

		#ck-button:hover {
			background:teal;
		}

		#ck-button label {
			float:left;
			width:4.0em;
		}

		#ck-button label span {
			text-align:center;
			padding:5px 0px;
			display:block;
		}

		#ck-button label input {
			position:absolute;
			top:-20px;
		}
		
	</style>
	
</head> 
<body>


<!-- Side Navigation -->
<nav class="w3-sidebar w3-bar-block w3-animate-left w3-center" style="display:none; width:10%;" id="mySidebar">
	<i class="fa fa-remove"></i><button class="w3-bar-item w3-button" onclick="w3_close()">Back</button>
  <h1 class="w3-xxxlarge w3-text-theme">Menu</h1>
  <a href="Home.php" class="w3-bar-item w3-button">Home</a>
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
  <a href="index.php" class="w3-bar-item w3-button w3-padding-16">Home</a>
  <a href="attendance.php" class="w3-bar-item w3-button w3-padding-16">Attendance</a>
  <a href="timetable.php" class="w3-bar-item w3-button w3-padding-16">Time Table</a>
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
<div class="container">
	<form name="form1" method="post" action="attendance.php">
				<div class="form-group col-md-6">
					<label>Branch:</label>
					<select class="form-control" name="branch">
						<option value="1">ECE</option>
						<option value="2">CSE</option>
						<option value="3">IT</option>
						<option value="4">CIVIL</option>
						<option value="5">MECH</option>
						<option value="6">EEE</option>
					</select>
					
					<div class="form-group col-md-6">
						<label>Section:</label>
						<select class="form-control" name="section">
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
						</select>
					</div>
				</div>
				<div class="form-group col-md-6">
					<input type="submit" class="btn btn-primary form-control" value="Submit" ></input>
					<input type="reset" class="btn btn-danger form-control" value="Reset" ></input>
				</div>
	</form>
</div>


<!-- Footer -->
<footer class="w3-container w3-theme-dark">
  <h3>Footer</h3>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  <!--<div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
    <span class="w3-text w3-theme w3-padding">Go To Top</span>&nbsp;
    <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>-->
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
