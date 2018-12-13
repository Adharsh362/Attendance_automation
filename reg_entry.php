  <?php
	$url="localhost";
	$user="root";
	$pwd="";
	$db="spardha";
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$phno=$_POST["phno"];
	$email=$_POST["email"];
	$crepass=$_POST["crepass"];
	$conpass=$_POST["conpass"];
	$s_id=$_POST["s_id"];
	$conn=mysqli_connect($url,$user,$pwd,$db);
	if(!$conn)
		die("Connection failed ".mysqli_connect_error());
	$sql="insert into profile values('$s_id','$fname','$lname','$phno','$email','$conpass',0)";
	$res=mysqli_query($conn,$sql);
	if($res)
	{
		include "reg_success.php";
	}
	else
		echo "Please enter proper details and try again<br>Register Failed..!".mysqli_error($conn);
	mysqli_close($conn);
?>