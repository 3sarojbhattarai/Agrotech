<?php
$user = strip_tags($_POST['uname']);
$pass = strip_tags($_POST['password']);
if(empty($user) or empty($pass))
{
	header('location:index.php?error=403');//directly open index.php,form empty
	exit;
}
require_once 'dbvar.php';
$conn = mysqli_connect($server,$uname,$password,$dbname);
if(!$conn){
	die("connection failed");
	exit;
}
$query = "SELECT * FROM logdetail WHERE username='$user'";//"logdetail" is the table name

$value = mysqli_query($conn,$query);

if(mysqli_error($conn))
{
	echo mysqli_error($conn);
	exit;
}

while($row = mysqli_fetch_array($value))
{
	if( $user == $row['username'] and $pass == $row['password'])
	{ 
		
		session_start();
		$_SESSION['username'] = $user;
		header('location:home/');
		exit;
	}
}
header('location:home/index.php?error=400');//username not found
exit;
?>