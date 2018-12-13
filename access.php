 <?php
	session_start();
	$url="localhost";
	$user="root";
	$pwd="";
	$db_name="spardha";
	$conn=mysqli_connect($url,$user,$pwd,$db_name);
		if(!$conn)
		{
			die("Connection Rejected".mysqli_connect_error()) ;
		}
	if(isset($_POST['staff_id']) && isset($_POST['password'])) //check if login data is present
	{
		$sid=$_POST['staff_id'];             //Fetch userid and password from login form
		$pwd=$_POST['password'];  
		echo $sid." ".$pwd;
		$query = "select * from profile where staff_id='$sid' and password='$pwd'";
		$result = mysqli_query($conn,$query);       //check for correct userid and password in database 
		$no=mysqli_num_rows($result);         //get the number of rows of the query - 0 indicates invalid userid & password
		 
		if($no==0)
		{
			session_destroy();
			header('Location: login.php?id=err');
		} 
		else
		{
			$_SESSION['sid']='$sid';  //store data in session variable that can be accessed in all pages
		}
	}
	else if(!isset($_SESSION['sid']))   //if the user tries to access a page directly      
	{
		header('Location: login.php'); //redirect to login page
	}
	mysqli_close($conn);
 ?>
