<?php
	
	session_start();
	if(!isset($_SESSION['user']))
	{
		header('location:index.php?error=401');
		exit;
	}
	$user=$_SESSION['user'];
	$qid=$_GET['qui'];
	$aid=$_GET['aid'];
	
	
	
	include_once('dbvar.php'); /// variables here
	$conn=mysqli_connect($server,$uname,$password,$dbname);
	if(!$conn)
	{
		die("Connection failed");
	}
	
	$table="f_a_".$qid;
	
	$query="SELECT `votes` FROM `$table` WHERE `aid`=$aid";
   $values= mysqli_query($conn,$query);
	if(mysqli_error($conn))
	{
		echo mysqli_error($conn);
		exit;
	}
	
	while($row=mysqli_fetch_array($value))
	{
		$votes=$row[0];
	}
	
	
	$votes=votes+1;
	
	$query="UPDATE `$table` SET `votes`=$votes WHERE `aid`=$aid;";
	mysqli_query($conn,$query);
	if(mysqli_error($conn))
	{
		echo mysqli_error($conn);
		exit;
	}
	
	echo 1;
	mysqli_close($conn);
}

?>