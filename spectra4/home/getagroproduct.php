<?php 
session_start();
if(!isset($_SESSION['username'])){
	header('location:frontendlogin.php?error=401');
	exit;
}
$user = $_SESSION['username'];

$sproduct = $_POST['sproduct'];
$sproduct=strip_tags($sproducts);






$date = $_POST['sdate'];
if(empty($sproduct) and empty($date)){
	header('location:getagroproduct.php?error=400');
	exit;
}
include_once ('../dbvar.php');
$conn = mysqli_connect($server,$uname,$password,$dbname);
	if(!$conn)
	{
		die("Connection failed");
		exit;
	}			
$query="SELECT `mid` FROM `maindata` WHERE `pname`='$sproduct'";


$values = mysqli_query($conn, $query);
$row=mysqli_fetch_array($values);
$mid=$row[0];

	$query = "INSERT INTO `md_".$user."` (`productname`,`startdate`,`mid`) VALUES ('$sproduct', '$date','$mid')";
	
	
	$values = mysqli_query($conn, $query);
	if(mysqli_error($conn)){
		echo mysqli_error($conn);
		exit;
	}
	mysqli_close($conn);
	header('location:myagro.php?error=100');
	exit;
?>