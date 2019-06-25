<?php
    $db_host="localhost";
    $db_name="researchblog";
    $db_user="root";
    $db_pass="";
    $link=mysqli_connect($db_host, $db_user, $db_pass);
    mysqli_select_db($link,$db_name);
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$name=$_POST['username'];

$mob=$_POST['phone_number'];

$gender=$_POST['gender'];

$dob=$_POST['date_of_birth'];

$prof=$_POST['profession'];

$nation=$_POST['nationality'];

$email=$_POST['email'];

$pass=$_POST['password'];


$sql="insert into users (username,phone_number,gender,date_of_birth,profession,nationality,email,password) values('$name','$mob','$gender','$dob','$prof','$nation','$email','$pass')";

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
      header("Location: RegSuccess.php");
} 
else{
    
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);



?>