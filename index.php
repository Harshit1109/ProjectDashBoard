<?php 
//connecting to the database.
$servername = "localhost";
$username = "root";
$password = "";
$database = "user-pd";

//creating a connection.
$conn = mysqli_connect($servername, $username, $password, $database);


//die if connection not successfull
if(!$conn){
	die("Sorry we failed to connect: ". mysqli_connect_error());
}

//For Registeration.
session_start();
require_once('dbconnection.php');

//Registration 
if(isset($_POST['signup']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$contact=$_POST['contact'];
	$enc_password=md5($password);


$sql = "INSERT INTO `register_users` (`fname`, `lname`, `email`, `password`, `contact`) VALUES ('$fname', '$lname', '$email', '$password', '$contact')";
$result = mysqli_query($conn, $sql);

if($result){
	echo "Register successfull!!";
}
else{
	echo "Register unsuccessfull!!";
}
}

//For login users
if(isset($_POST['login']))
{
$userpass=$_POST['password'];
$useremail=$_POST['uemail'];
$ret= mysqli_query($conn,"SELECT * FROM register_users WHERE email='$useremail' and password ='$userpass'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="welcome.php";
$_SESSION['login']=$_POST['uemail'];
$_SESSION['name']=$num['fname'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}

//if($_SERVER['REQUEST_METHOD']=='POST')
//{
 // $username = $_POST['uemail'];
  //$password = $_POST['password'];
  
  
  
  //$sql = "SELECT * FROM `register_users` where email = '$username' and password = '$password'"; 
  //$result = mysqli_query($conn,$sql);
  //$count = mysqli_num_rows($result);
  //if($count==1)
  //{
    
  //   header('welcome.php');
  //}//Location:/corizo/welcome.html
  //else{
   // echo"<h3 style='color:red; margin-left:33rem;'>PLease Register first if You are  not created any account</h3>";
  //}
//}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css\style.css" rel='stylesheet' type='text/css'>
    <title>Project Management</title>
</head>
<body>
<div class="main">
		<h1>Project Management Dashboard</h1>
		<div class="login-page">
			<!--under login page 2 forms-->
			<div class="form">
				<form class="register-form" method="POST">
					<h2> Register Here!!</h2>
					<p class="form-label">First Name:</p>
						<input type="text" class="text" value=""  name="fname"   id="fname" required placeholder="Enter your First Name">

					<p class="form-label">Last Name:</p>
						<input type="text" class="text" value="" name="lname"   id="lname" required placeholder="Enter your Last Name">

					<p class="form-label">Email Address: </p>
						<input type="text" class="text" value="" name="email"  id="email" placeholder="Enter your Email">

					<p class="form-label">Password: </p>
						<input type="password" class="text" value="" name="password"  id="password" required placeholder="Enter your Password">

					<p class="form-label">Contact No: </p>
						<input type="text" class="text" value="" name="contact"  id="contact" required placeholder="Enter your Contact N.o">

						<div class="sign-up">
							<input type="reset" value="Reset">
							<button><input type="submit" name="signup"  value="Sign Up"></button>
							<div class="clear"> </div>
						</div>
						<p class="message">Already Registered? <a href="#">login</a>
						</p>

				</form>

				<form class="login-form" method= "POST" action="">
					<h1> login Here!!</h1>
					<p class="login-label">Email Address:</p>
					<input type="text" class="login-text" name="uemail" value="" placeholder="Enter your registered email"  ><a href="#"></a>
					<p class="login-label">Password: </p>
					<input type="password" class="login-text" value="" name="password" placeholder="Enter valid password"><a href="#"></a>

					<div class="sign-up">
						<button><input type="submit" name="login"  value="login" ></button>
						<div class="clear"> </div>
					</div>
					<p class="message">Not Registered? <a href="#">Register</a>
					</p>
			
				</form>
                </div>

		</div>

		<script src="https://code.jquery.com/jquery-3.6.0.min.js">
		</script>
		<script>
			$('.message a').click(function(){
				$('form').animate({height:'toggle',opacity:'toggle'},"slow");
			});
		</script>


</body>
</html>

	