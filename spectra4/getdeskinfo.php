<?php 
session_start();
if (!isset($_SESSION['username'])) {
			header('location:../frontendlogin.php?error=401');//not loggedin
			exit;
		}
	$title = $_POST['title'];
	$binfo = $_POST['binfo'];
	$tcare = $_POST['tcare'];
	$tcare_d = $_POST['tcare_d'];
	$harvest = $_POST['harvest'];
	$harvest_d = $_POST['harvest_d'];
	$market =  $_POST['market'];
	$market_d = $_POST['market_d'];
	$category = $_POST['category'];
	$sub_category = $_POST['sub_category'];
	$author=$_SESSION['username'];
if(empty($title) and empty($binfo) and empty($tcare) and empty($tcare_d) and empty($harvest) and empty($harvest_d) and empty($market) and empty($market_d) and empty($category) and empty($sub_category) and empty($author) ){
	header('location:getdeskinfo.php');
	exit;
}
include_once('../dbvar.php'); /// variables here
	$conn = mysqli_connect($server,$uname,$password,$dbname);
	if(!$conn)
	{
		die("Connection failed");
		exit;
	}
$query = "INSERT INTO desk_info (`title`,`binfo`,`tcare`,`tcare_d`,`harvest`,`harvest_d`,`market`, `market_d`, `category`, `sub_category`, `author`) VALUES ('$title', '$binfo', '$tcare', '$tcare_d','$harvest','$harvest_d', '$market', '$market_d', '$category', '$sub_category', '$author')";


mysqli_query($conn,$query);
if( mysqli_error($conn)){
	echo mysqli_error($conn);
	exit;
}
mysqli_close($conn);
header('location:admin/new.php?error=100');
exit;

?>