<!DOCTYPE html>
<html>
<head>
	<title>Attendance</title>
	<?php include "header.php" ?>
	<?php include "access.php" ?>
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
  <a href="seccheck.php" class="w3-bar-item w3-button w3-padding-16">Attendance</a>
  <a href="timetable.php" class="w3-bar-item w3-button w3-padding-16">Time Table</a>
  <a href="contact.php" class="w3-bar-item w3-button w3-padding-16">Contact</a>
  <a href="logout.php" class="w3-bar-item w3-button w3-padding-16">Logout</a>
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


<!--Slidepics-->
<div class="w3-content" style="max-width:800px;position:relative">

<img class="mySlides w3-animate-opacity" src="3.png" style="width:100%">
<img class="mySlides w3-animate-opacity" src="1.jpg" style="width:100%">
<img class="mySlides w3-animate-opacity" src="2.jpg" style="width:100%">


<a class="w3-button w3-circle w3-hover-dark-grey" style="position:absolute;top:45%;left:0;" onclick="plusDivs(-1)">&#10094;</a>
<a class="w3-button w3-circle w3-hover-dark-grey" style="position:absolute;top:45%;right:0;" onclick="plusDivs(+1)">&#10095;</a>
</div>

<div class="w3-container">

<!--Tabs-->
<div class="w3-border">
<div class="w3-bar w3-theme">
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'About_Automation')">About Automation</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'College')">About College</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Rules_Regulations')">Rules and Regulations of College</button>
</div>

<div id="About_Automation" class="w3-container city w3-animate-opacity">
  <h2>Automation of this system</h2>
  <p><b>Introduction:-</b><br> 
  <mark>Attendance Automation` System</mark> is a software developed for daily student attendance in schools, collages and institutes. If facilitates to access the attendance information of a particular student in a particular class. The information is sorted by the operators, which will be provided by the teacher for a particular class. This system will also <mark>help in evaluating attendance eligibility criteria of a student.<mark> </p>
  <p><b>Purpose:-</b><br> 
  The purpose of developing attendance automation system is to <mark>computerized the tradition way of taking attendance.</mark> Another purpose for developing this software is to generate the report automatically at the end of the session or in the between of the session.</p>
</div>

<div id="College" class="w3-container city w3-animate-opacity">
  <h2>About College</h2>
  <p><b>SRKR Engineering College:</b><br>
  Sagi Ramakrishnam Raju Engineering College (SRKR Engineering College), is a co-educational, autonomous private Engineering college. It is one of the oldest seminaries formed in 1980's to provide a better quality technical education to students. The college is located in the country side with a scenic beauty in a 30 acres plot in Chinna-Amiram on Bhimavaram - Juvvalapalem state highway; just 2 miles from Bhimavaram town , that is well known as "Second Bardoli" and is famous for "Pancharamas" (Somaramam). It was founded in the year 1980 by donations from Sagi Rama Krishnam Raju.<br>
  <br><br>
  The College was registered under the section 2 (f) of the UGC Act and it is eligible to receive central assistance under section 12 (b) of UGC. The College is recognized by the AICTE (All India Council for Technical Education) and the Institution of Engineers (India).<br></p>
  <p>The college is presently affiliated to JNTU, Kakinada from 2017-18 admitted batch. The college Offers 6 UG Courses, 7 PG Courses and 5 Ph.D. Programmes.</p>
</div>

<div id="Rules_Regulations" class="w3-container city w3-animate-opacity">
  <h2>Rules & Regulations</h2>
  <p><b>SRKR Engineering College, Bhimavaram-4</b></p>
  <p>As the Principal of Sagi Ramakrishnam Raju Engineering College, I have the pleasure and privilege of leading this great institution on its journey to preeminence. "Initiation in 1980, Sagi Ramakrishnam Raju Engineering College (SRKR) has now grown into abundant Engineer’s foundation hub with Six Undergraduate, Postgraduate and Five Ph.D degree programs, our college propels research and innovation, develops transformative technologies and cultivates solutions to advance society. S.R.K.R. Engineering\'s journey to preeminence reflects remarkable progress, with one indicator being our No. 1 ranked private engineering college in the state of Andhra Pradesh and ranked as top 30 college in India.Trusted by our successes so far, and guided by an determined strategic plan, we are approaching forward with key precedence: to leverage our strength in undergraduate, post graduate and Ph.D programs, to further expand and strengthen our faculty, to increase our excellence in research, to complete the improvements to our facilities and environment, and to continue our deep dedication to increasing range among our students and faculty. Our college Staff members also form a highly visible sign of our vision and growth.Our college provides Special Centers of excellence in the area of Entrepreneur Development Cell - The different training programs which are provided by the department will certainly help the individuals who have an ambition to start their own enterprise and thereby follow their dreams.”,“Foreign Cell– The cell offers training in Spoken English Language and Personality Development programmes to acquire the ability for effective communication skills and guides students to go for abroad studies. "Industrial Interaction Cell - strengthen the relationship between the institute and industry resulting in a mutually beneficial partnership. Innovation Center has been established to undertake pioneering work in their respective areas.SRKREC collaborated with “Indo US Collaboration for Engineering Education (IUCEE)” which aims association with premier Engineering Institutes throughout the world. “Consultancy services” are provided to various kinds of organizations, spread across different sectors of the economy, for solving their problems and upgrading their management practices.Every student finds exhaustive opportunities to participate in Social welfare programs and contribute to a variety of co-curricular and extra-curricular activities.There are different programs “AVOID PLASTIC”, “SAVE TREES” “AKKANDA GNANA JYOTHI”, LARGEST HAND PRINT INDIAN NATIONAL FLAG” organized based on social responsibility to get awareness among society by challenge to break Guinness world record. These are recorded in Limca Book of Records, Unique Book of Records, Telugu Book of Records and World Book of records. This in turn motivates the students towards creating innovative things in the world. World class library, computing and other educational and recreational facilities aid and enrich the process of learning.Stood No.1 with 100% placements in Companies such as TCS, Infosys, Mahindra Satyam, Wipro, Accenture, HCL, L&T, Google, Dell, Microsoft, Reliance, Thought Works, Amazon, Face book and others proves that the intellectual capital produced at the S.R.K.R. Engineering College. Notable alumni around the world inspire prestige and pride of the SRKREC. Wish you a very happy and academically highly rewarding student life in SRKR and hope that you will be your good deeds enhance the pride and prestige of this prestigious institution.
  
  <br> <mark>For further details of college, Click here on >>> <a href="http://srkrec.ac.in/">SRKREC Website</a></p>
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
