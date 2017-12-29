<?php 
session_start();
if (!isset($_SESSION['username'])) {
			header('location:../frontendlogin.php?error=401');//not loggedin
			exit;
		}
	$title = $_POST['title'];
	$title=strip_tags($title);
	$title=htmlspecialchars($title);

	$binfo = $_POST['binfo'];
	$binfo=strip_tags($binfo);
	$binfo=htmlspecialchars($binfo);

	$tcare = $_POST['tcare'];
	$tcare=strip_tags($tcare);
	$tcare=htmlspecialchars($tcare);

	$tcare_d = $_POST['tcare_d'];
	$tcare_d=strip_tags($tcare_d);
	$tcare_d=htmlspecialchars($tcare_d);

	$harvest = $_POST['harvest'];
	$harvest=strip_tags($harvest);
	$harvest=htmlspecialchars($harvest);

	$harvest_d = $_POST['harvest_d'];
	$harvest_d=strip_tags($harvest_d);
	$harvest_d=htmlspecialchars($harvest_d);

	$market =  $_POST['market'];
	$market=strip_tags($market);
	$market=htmlspecialchars($market);

	$market_d = $_POST['market_d'];
	$market_d=strip_tags($market_d);
	$market_d=htmlspecialchars($market_d);

	$category = $_POST['category'];
	$category=strip_tags($category);
	$category=htmlspecialchars($category);

	$sub_category = $_POST['sub_category'];
	$sub_category=strip_tags($sub_category);
	$sub_category=htmlspecialchars($sub_category);

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