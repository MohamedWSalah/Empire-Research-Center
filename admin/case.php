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

if($_SERVER["REQUEST_METHOD"]=="POST"){
$title=$_POST["title"];
$description=$_POST["description"];
echo "here".'$title';
echo 'here','$description';

}
$sql="INSERT INTO `cases`(`id`,`title`, `description`) VALUES (1,'$title','$description')" ;
$result1=mysqli_query($conn,$sql);
if ($result1 === false ){
	echo mysqli_error($conn); //print the error
}
header("Location: allCases.php");
?>