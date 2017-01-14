<?php

	$name=$_REQUEST['txtName'];
	$lastname= $_REQUEST['txtLastName'];
	$gender=$_REQUEST['txtGender'];
	$number= $_REQUEST['numPhone'];
	$dob= $_REQUEST['txtbday'];
	if(isset($_REQUEST['txtRegister']))
	{
		echo "Welcome ".$name." ".$lastname."<br>";
		echo "your name and phone no. ".$number." have been successfully registered in our database <br>";
		echo "You are ".$gender."<br>";
		echo "Your birthday is ".$dob."<br>";
	}
	
?>
