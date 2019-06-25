<?php 
require 'initialize_session.php';
//creating 4 variables with the neccessary connection data
$db_host="localhost";//the host(ip) which is in our case localhost as the db server running locally
$db_name="researchblog";//the db name
$db_user="root";//the user which we created when we created the database
$db_pass="";//the password which we generated automatically when we created the user
$conn=mysqli_connect($db_host, $db_user, $db_pass, $db_name);
//this method takes the variables and connects to the database and return a variable
//that represents the connection to the database server.
//---------------------------------------------------------------------------
if(mysqli_connect_error()){ //used to check if the connection had succeeded and it returns a string that contains an error message if it succeeeded and otherwise it returns null , so in this if statement the none empty string will be casted to true and null will be converted to the boolean value false
// if there is a connection error the code will go into this code block
	echo mysqli_connect_error();// prints more details about why the connection failed
	exit;//stopps the script right where it is bec as the conn failed we don't want to continue to excute the script
}
echo "Connected successfully"; //else lock prints connection successful 

if($_SERVER["REQUEST_METHOD"]=="POST"){ //checks if the request that is sent to the server is post
$password=$_POST["Current_password"];	
$newpass=$_POST["New_password"];
}

$sql1="SELECT password FROM users WHERE id=1";
$result1=mysqli_query($conn,$sql1);
$currentpass_db=mysqli_fetch_row($result1);
if ($currentpass_db[0] === $password){
	$sql2="UPDATE `users` SET `password`=$newpass WHERE 1 ";
	$result2=mysqli_query($conn,$sql2);
	header("Location: destroysession.php");
}
else{ echo 'the current password is incorrect'; 
header("Location: changepass.php");
}
if ($result1 === false || $result2 === false){
		echo mysqli_error($conn); //print the error
	}

?>