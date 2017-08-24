<?php
	session_start();
	require_once('connection.php');
	$userYear = $_SESSION['userYear'];
	if($userYear == 'SEM-3')
	{
		header("Location:assets/css/year/se.php");
	}
	if($userYear == 'SEM-4')
	{
		header("Location:assets/css/year/se1.php");
	}
		if($userYear == 'SEM-5')
	{
		header("Location:assets/css/year/te.php");
	}
	if($userYear == 'SEM-6')
	{
		header("Location:assets/css/year/te.php");
	}
		if($userYear == 'SEM-7')
	{
		header("Location:assets/css/year/be.php");
	}
	if($userYear == 'SEM-8')
	{
		header("Location:assets/css/year/be.php");
	}
?>