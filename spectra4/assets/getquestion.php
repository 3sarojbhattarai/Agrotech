<?php
	session_start();
	if(!isset($_SESSION['user']))
	{
		header('location:index.php?error=401');
		exit;
	}
	$user=$_SESSION['user'];
	$question= strip_tags($_POST['question']);
	
	if ( empty($question))
	{
		header('location:forum.php');
		exit;
	}
	include_once('dbvar.php'); /// variables here
	$conn=mysqli_connect($server,$uname,$password,$dbname);
	if(!$conn)
	{
		die("Connection failed");
	}
	$query="SELECT * FROM `fquest` WHERE `username`='$user'";
	$values=mysqli_query($conn,$query);
	$qid=mysqli_num_rows($values);
	
	
	if(mysqli_error($conn))
	{
		echo mysqli_error($conn);
		exit;
	}
	$qid=$user."_".$qid+1;
	
	$query="INSERT INTO `fquest` ( `qid`,`question`,`uname`) VALUES ('$qid','$question','$user')";
	mysqli_query($conn,$query);
	if(mysqli_error($conn))
	{
		echo mysqli_error($conn);
		exit;
	}
	
	
	$query="CREATE TABLE f_a_".$qid." (aid INT, answer VARCHAR(10000),votes INT, username VARCHAR(25))";
	mysqli_query($conn,$query);
	if(mysqli_error($conn))
	{
		echo mysqli_error($conn);
		exit;
	}
	mysqli_close($conn)
	header('location:forum.php?error=100');   //////100 for successful
	exit;
	

?>