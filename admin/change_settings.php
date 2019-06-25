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
$name=$_POST["user"];
$Email=$_POST["email"];
$profession=$_POST["profession"];
$nationality=$_POST["nationality"];
$phone=$_POST["phone"];
$DateOfBirth=$_POST["DateOfBirth"];
$gender=$_POST["gender"];
}
if (!is_numeric($phone))
{
	echo'phone number must be numeric value';

}
$query1="SELECT username FROM users WHERE id=1"; //variable that holds sql statements that we want to use
$query2="SELECT email FROM users WHERE id=1";
$query3="SELECT profession FROM users WHERE id=1";
$query4="SELECT nationality FROM users WHERE id=1";
$query5="SELECT phone FROM users WHERE id=1";
$query6="SELECT DateOfBirth FROM users WHERE id=1";
$query7="SELECT gender FROM users WHERE id=1";
$result1=mysqli_query($conn,$query1); //variable that holds the function which sends the data to the db and takes the connection & the query as arguments.
//the results from mysqli_query func and these res can be bool val FALSE if there is an error .
$result2=mysqli_query($conn,$query2);
$result3=mysqli_query($conn,$query3);
$result4=mysqli_query($conn,$query4);
$result5=mysqli_query($conn,$query5);
$result6=mysqli_query($conn,$query6);
$result7=mysqli_query($conn,$query7);
if ($result1 === false || $result2 === false || $result3 === false || $result4 === false || $result5 === false || $result6 === false || $result7 === false){
	echo mysqli_error($conn); //print the error
}
else 
{
	$username_db=mysqli_fetch_row($result1); //gets the entire row in the db then used later to get the username from db
	$email_db=mysqli_fetch_row($result2) ;//gets the entire row in the db then used later to get the pass from db
	$profession_db=mysqli_fetch_row($result3) ;
	$nationality_db=mysqli_fetch_row($result4) ;
	$phone_db=mysqli_fetch_row($result5) ;
	$DateOfBirth_db=mysqli_fetch_row($result6) ;
	$gender_db=mysqli_fetch_row($result7) ;
}
if (!isset($email_db[0] || $profession_db[0] || $nationality_db[0] || $phone_db[0] || $DateOfBirth_db[0] || $gender_db[0])){
	$sql="INSERT INTO `users`(`id`, `email`, `profession`, `nationality`, `phone_number`, `date_of_birth`, `gender`) VALUES (1,'$Email','$profession','$nationality','$phone','$DateOfBirth','$gender')" ;
	$result1=mysqli_query($conn,$sql);
	header("Location: settings.php");
	if ($result1 === false || $result2 === false || $result3 === false || $result4 === false || $result5 === false || $result6 === false || $result7 === false){
		echo mysqli_error($conn); //print the error
	}
}
else {
	$sql2="UPDATE `users` SET `id`='1',`username`='$name',`email`='$Email',`profession`='$profession',`nationality`='$nationality',`phone_number`='$phone',`date_of_birth`='$DateOfBirth',`gender`='$gender' WHERE id=1 ";
	$result1=mysqli_query($conn,$sql2);
	echo '$result1';
	header("Location: settings.php");
}


?>