<?php
	session_start();
	require_once("connection.php");
	$rollNo = $_POST['rollNo'];
	$password = $_POST['pass'];
	$sql = "select * from student where roll_no='$rollNo' and password='$password'";
	$row = mysqli_query($con,$sql) or die("Enter correct username and password");
	if(mysqli_num_rows($row)>0)
	{
		/*$_SESSION['rollNo']=$rollNo;*/
		$sql = "select name,year from student where roll_no='$rollNo'";
		$results = mysqli_query($con,$sql);
		$rows = mysqli_fetch_array($results);
		$_SESSION['userYear']= $rows['year']; 
		$_SESSION['userName']= $rows['name']; 
		header("Location:dashboard.php");
	}
	else
	{
		header("Location:hshsh.php");
	}
?>