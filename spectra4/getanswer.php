<?php
session_start();
	if(!isset($_SESSION['username']))
	{
		header('location:index.php?error=401');
		exit;
	}
	$user=$_SESSION['username'];
	$answer= strip_tags($_POST['answer']);
	$answer=htmlspecialchars($answer);
	$qid=strip_tags($_POST['qid']);
	
	if ( empty($answer))
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

	$tablename="f_a_".$qid;
	$query="INSERT INTO `$tablename` (`answer`,`username`) VALUES ('$answer','$user')";
	mysqli_query($conn,$query);
	if(mysqli_error($conn))
	{
		echo mysqli_error($conn);
		exit;
	}
	$query="SELECT * FROM `fquest` WHERE `qid`='$qid'";
	$values=mysqli_query($conn,$query);
	 $row = mysqli_fetch_array($values);
	 $ansvalue=$row['answers'];
	 $upvalue=$ansvalue+1;
	$query="UPDATE `fquest` SET `answers`= $upvalue WHERE `qid`='$qid'";
	
	mysqli_query($conn,$query);
	if(mysqli_error($conn))
	{
		echo mysqli_error($conn);
		exit;
	}
	$query="UPDATE `fquest` SET `status`= 1 WHERE `qid`='$qid'";
	mysqli_query($conn,$query);
	if(mysqli_error($conn))
	{
		echo mysqli_error($conn);
		exit;
	}
	mysqli_close($conn);
	header('location:forum.php?error=100');   ///////////// see here.........
	exit;




   
	


?>