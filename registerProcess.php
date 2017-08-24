<?php
	session_start();
	if($_POST)
	{
		require_once("connection.php");
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$name = $fname.$lname;
		echo $name;
		$rollNo=$_POST['rollNo'];
		$rollNo = strtoupper($rollNo);
		$year=$_POST['year'];
		$password=$_POST['pass'];
		$sql="insert into student(name,roll_no,year,password,register_at) values('$name','$rollNo','$year','$password',current_timestamp())";
		mysqli_query($con,$sql) or die(mysqli_error($con));
		$_SESSION['userYear'] = $year;
		$_SESSION['userName'] = $name;
		header("Location:dashboard.php");
	}
	else
	{
		echo "Error inserting values"; 
	}
?>	