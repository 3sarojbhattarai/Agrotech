<?php
$username = strip_tags($_POST['uname']);
$pass = strip_tags($_POST['pass']);
$re_pass = strip_tags($_POST['re_pass']);
$name = strip_tags($_POST['name']);
$email = $_POST['email'];
if(empty($username) or empty($pass) or empty($re_pass) or empty($name) or empty($email))
{
	header('location:frontendsignup.php?error=400');
   	exit;
}
if($pass != $re_pass)
{
	header('location:frontendsignup.php?error=401');
	exit;
}
require_once 'dbvar.php';
$conn=mysqli_connect($server,$uname,$password,$dbname);

if(!$conn){
	die("connection failed");
	exit;
}

$query="SELECT * FROM logdetail";//logdetail table name
$users=mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($users)) 
{
	if ($row['username'] == $username) 
	{
		mysqli_close($conn);
		header('location:frontendsignup.php?error=402');
		exit;
	}
}
$query="INSERT INTO logdetail (`username`,`password`,`created`,`email`,`name`) VALUES('$username','$pass',CURDATE(),'$email','$name')";
mysqli_query($conn,$query);
mysqli_close($conn);
header('location:frontendlogin.php?error=100');//error 100 successful 
exit;
?>