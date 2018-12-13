<?php
	$branch=$_POST['branch'];
	$section=$_POST['section'];
?>
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
			width:10%;
			height:5%;
 
		}

		#ck-button:hover {
			background:teal;
			width:10%;
		}

		#ck-button label {
			float:left;
			width:4.0em;
		}

		#ck-button label span {
			text-align:center;
			display:block;
		}

		#ck-button label input {
			position:absolute;
			top:-20px;
			display:none;
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
<!-- Selecting students who are absent or present based on radio button -->
<script>
	function pre(x){
		
		if(x==1){
			confirm('Please select rolls who are present');
			document.getElementById('a').innerHTML="<style>#ck-button input:checked + span {background-color:green;color:#0000FF ;}</style>";
		}
		else{
			confirm('Please select rolls who are absent');
			document.getElementById('a').innerHTML="<style>#ck-button input:checked + span {background-color:red;color:#0000FF ;} </style>";
		}
	}
</script>
<div class="container">
	<form class="form col-md-6" method="post" name="myform" action="next.php">
			<div class="form-group col-md-6">
				<label>Staff Id:</label>
				<input type="text" class="form-control" id="s_id" name="s_id"/>
			</div>
			<div class="form-group col-md-6">
				<label>Faculty Name:</label>
				<input type="text" class="form-control" name="fname" id="fname" />
			</div>
			<div class="form-group col-md-6">
				<label>Branch:</label>
				<input type="text" id="branc" name="branch" value="<?php echo $branch;?>" readonly="readonly"></p>
			</div>
			<div class="form-group col-md-6">
				<label>Section:</label>
				<input type="text" id="sec" name="section" value="<?php echo $section;?>" readonly="readonly"></p>
			</div>
 
			<div class="form-group col-md-6">
				<label>Start period</label>
				<select class="form-control" name="startp">
					
					<option value="p1">1</option>
					<option value="p2">2</option>
					<option value="p3">3</option>
					<option value="p4">4</option>
					<option value="p5">5</option>
					<option value="p6">6</option>
					<option value="p7">7</option>
					<option value="p8">8</option>
					</select>
			</div>
			<div class="form-group col-md-6">
				<label>End Period</label>
				<select class="form-control" name="endp">
					<option value="p1">1</option>
					<option value="p2">2</option>
					<option value="p3">3</option>
					<option value="p4">4</option>
					<option value="p5">5</option>
					<option value="p6">6</option>
					<option value="p7">7</option>
					<option value="p8">8</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label>Subject Dealing</label>
				<input type="text" class="form-control" id="subject" name="subject">
			</div>
			<div class="form-group col-md-6">
				<input type="radio" name="att"  value="1" onclick="pre(1)" id="a">Present</input>
				<input type="radio"  name="att"  value="0" onclick="pre(0)" id="a">Absent</input>
			</div>
			<div class="form-inline col-md-6">
			<?php
					$url="localhost";
					$user="root";
					$pwd="";
					$db_name="spardha";
			
					$conn=mysqli_connect($url,$user,$pwd,$db_name);
					if(!$conn)
					{
						die("Connection Rejected".mysqli_connect_error()) ;
					}
					$sql ="select * from student_profile where Branch='$branch' and Reg_no in(select reg_no from student_profile where section='$section')";
					$result = mysqli_query($conn,$sql);
					
					if(mysqli_num_rows($result)){
						while($value=mysqli_fetch_assoc($result)){
							 echo "<div id='ck-button'>
								   <label>
									  <input type='checkbox' value='".$value['Reg_no']."' class='form-control'  name='check[]'><span>".$value['Reg_no']."</span>
								   </label>
								</div>";
								
						}
					}
					else{
						echo "Records not found".mysqli_error($conn);
					}
					mysqli_close($conn);
			?>
			
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