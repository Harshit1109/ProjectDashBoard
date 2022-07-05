<?php

$servername="localhost";
$username = "root";
$password="";
$database = "test";
$con = mysqli_connect($servername,$username,$password,$database);

if(!$con){
	die("Sorry we failed to connect: ". mysqli_connect_error());
}else
{
	echo "SuCCess!!";
}



	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$first = $_POST['fname'];
		$last = $_POST['lname'];
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$cont = $_POST['contact'];
		$sql = "INSERT INTO `profile` (`FirstName`, `LastName`, `Email`, `Password`, `Contact`) VALUES ('$first', '$last', '$email', '$pass', '$cont')";
		$result1 = mysqli_query($con,$sql);
		if($result1)
		{
			 echo"<h3 style='color:red; margin-left:33rem;'>Registration has completed Please Login</h3>";
			
			include 'E:\Backend\htdocs\ProjectManagementDash\index.php';
		}
		else
		{
			echo "Please Enter Correct Detail";
		}
	}

?>