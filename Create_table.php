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

// add a new user in db
if($result){
	echo "the record has been inserted succesfully";
}
else{
	echo "the record was not inserted successfully because of this error:".mysqli_error($conn);
}
?>