<?php
	include "access.php";
	$url="localhost";
	$user="root";
	$pwd="";
	$db_name="spardha";
	$branch=$_POST['branch'];
	$date=date('Y-m-d');
	$section=$_POST['section'];
	$strength=array();
	$startp=$_POST['startp'];
		$endp=$_POST['endp'];
	$conn=mysqli_connect($url,$user,$pwd,$db_name);
	if(!$conn)
	{
		die("Connection Rejected".mysqli_connect_error()) ;
	}
	
	$parray=array();
	for($i=$startp;$i<=$endp;$i++)
	{
		array_push($parray,$i);
	}
	
	$sql ="select * from student_profile where Branch='$branch' and Reg_no in(select reg_no from student_profile where section='$section')";
	$result = mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)){
		while($value=mysqli_fetch_assoc($result)){
			array_push($strength,$value['Reg_no']);
		}
	}
	if (isset($_POST['check']))
	{
			$present=(int)$_POST['att'];
			$checkabsent=array();
			$check=$_POST['check'];
			
			$check= array_map(create_function('$value', 'return (int)$value;'),$check);
			 
			if($present==1)
			{
				foreach($strength as $i)
				{
					if(in_array($i,$check))
					{
						continue;
					}
					else
					{
						array_push($checkabsent,$i);
					}
				}
			}
			
			else
			{
				$checkabsent=$check;
			}
			print_r($checkabsent);
			foreach($strength as $i)
			{
				foreach($parray as $j){
					print($j);
					$sql_check="select * from sample_att where roll='$i' and date='$date';";
					$record=mysqli_query($conn,$sql_check);
	
					if(in_array($i,$checkabsent))
					{
						if(mysqli_fetch_row($record))
						{
							echo "sdgcjfc";
							$sql="update sample_att set $j='absent'  where roll='$i' and date='$date';";
							mysqli_query($conn,$sql);
						}
						else
						{
							$sql = "insert into sample_att(roll,date,".$j.") values('$i','$date','absent');";
							mysqli_query($conn,$sql);
						}
					}
					else
					{
						if(mysqli_num_rows($record))
						{
							$sql="update sample_att set $j='present'  where roll='$i' and date='$date';";
							mysqli_query($conn,$sql);
						}
						else
						{
							$sql = "insert into sample_att(roll,date,".$j.") values('$i','$date','present');";
							mysqli_query($conn,$sql);
						}
					}
				}
			}
	}
	mysqli_close($conn);
?>