<?php
require 'initialize_session.php';

class user {
    public $id;
    Public $name ;
    Public $Email;
    Public $password;	
    Public $profession;
    Public $nationality;
    Public $phone;
    Public $DateOfBirth;
    Public $gender;

    function __construct($id,$name,$Email,$password,$profession,$nationality,$phone,$DateOfBirth,$gender){
        $this->id=$id;
        $this->name=$name;
		$this->email=$Email;
		$this->password=$password;
		$this->profession=$profession;
		$this->nationality=$nationality;
		$this->phone=$phone;
		$this->DateOfBirth=$DateOfBirth;
		$this->gender=$gender;
    }
}


?>