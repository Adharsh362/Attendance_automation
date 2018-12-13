<?php
 $url="localhost";
 $user="root";
 $password="";
 $db="spardha";
 $name1=$_POST['name1'];
 $email=$_POST['email'];
 $question=$_POST['question'];
 $answer=$_POST['answer'];
 $con=mysqli_connect($url,$user,$password,$db);
 if(!$con)
 {
   die("connection failed".mysqli_connect_error());
 }
 $sql="insert into faq(name1,email,question,answer)values('$name1',$email,'$question',$answer)";
 $result=mysqli_query($con,$sql);
 if($result)
 {
 echo "row created successfully";
 }
 else
 {
   echo "not created".mysqli_error($con);
 }
 mysqli_close($con);
 ?>