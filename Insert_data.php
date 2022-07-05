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
else{
	echo "connection was successfull";
}


$sql= "INSERT INTO `register_users` (`id`, `fname`, `lname`, `email`, `password`, `contact`) VALUES ('2', 'yash', 'vishwakarma', 'prathamvish@gmail.com', '123', '1111111')";
$result = mysqli_query($conn, $sql);

// add a new user in db
if($result){
	echo "the record has been inserted succesfully";
}
else{
	echo "the record was not inserted successfully because of this error:".mysqli_error($conn);
}
?>