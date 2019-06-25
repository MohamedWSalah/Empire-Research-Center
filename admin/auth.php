<?php 
//creating 4 variables with the neccessary connection data
$db_host="localhost";//the host(ip) which is in our case localhost as the db server running locally
$db_name="researchblog";//the db name
$db_user="root";//the user which we created when we created the database
$db_pass="";//the password which we generated automatically when we created the user
$conn=mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$name = "";
$password= "";
//this method takes the variables and connects to the database and return a variable
//that represents the connection to the database server.
//---------------------------------------------------------------------------
if(mysqli_connect_error()){ //used to check if the connection had succeeded and it returns a string that contains an error message if it succeeeded and otherwise it returns null , so in this if statement the none empty string will be casted to true and null will be converted to the boolean value false
// if there is a connection error the code will go into this code block
	echo mysqli_connect_error();// prints more details about why the connection failed
	exit;//stopps the script right where it is bec as the conn failed we don't want to continue to excute the script
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
	if (isset($name) && isset($password)){
$name=$_POST["username"];
$password=$_POST["password"];	
}}

$query1="SELECT username FROM users WHERE id=1"; //variable that holds sql statements that we want to use
$query2="SELECT password FROM users WHERE id=1";
$result1=mysqli_query($conn,$query1); //variable that holds the function which sends the data to the db and takes the connection & the query as arguments.
//the results from mysqli_query func and these res can be bool val FALSE if there is an error .
$result2=mysqli_query($conn,$query2);
if ($result1 === false || $result2 === false ){
	echo mysqli_error($conn); //print the error
}
else 
{
	$username_db=mysqli_fetch_row($result1); //gets the entire row in the db then used later to get the username from db
	$password_db=mysqli_fetch_row($result2) ;//gets the entire row in the db then used later to get the pass from db
}

if ($name === $username_db[0] && $password === $password_db[0])
{
	
	session_start();
	header("Location: profile.php");// redirect the user to the admin dashboard 
	require 'initialize_session.php';
	require 'user.php';
}
else 
{
	header("Location: admin.php");// if the username or password are not correct then redirect the user to the login
	
}
?>
