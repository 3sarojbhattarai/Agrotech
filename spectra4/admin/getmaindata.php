<?php

session_start();
if (!isset($_SESSION['username'])) {
			header('location:../frontendlogin.php?error=401');//not loggedin
			exit;
		}
	$user=$_SESSION['username'];

	if(empty($_POST['maindata']) or empty($_POST['catagory']) or empty($_POST['productname']))
	{
		header('location:agrodata.php?error=400');
		exit;
		
	}
	
	$maindata=$_POST['maindata'];
	$catagory=$_POST['catagory'];
	$productname=$_POST['productname'];
	
	
	
	
	include_once('../dbvar.php'); /// variables here
	$conn=mysqli_connect($server,$uname,$password,$dbname);
	if(!$conn)
	{
		die("Connection failed");
	}
	
	$query="SELECT * FROM `maindata` WHERE `author`= '$user'";
	$values=mysqli_query($conn,$query);
	$nosof=mysqli_num_rows($values);
	$nosof=$nosof+1;
	$mid=$user."_".$nosof;
	
	$query="INSERT INTO `maindata`(`mid`, `pname`, `catagory`, `author`) VALUES ('$mid','$productname','$catagory','$user')";
	mysqli_query($conn,$query);
	if(mysqli_error($conn))
	{
		echo mysqli_error($conn);
	 	exit;
	}
	
	
	$query="CREATE TABLE $mid (day INT , action VARCHAR(100))";
	mysqli_query($conn,$query);
	if(mysqli_error($conn))
	{
		echo mysqli_error($conn);
	 	exit;
	}
	
	$maindata=trim($maindata," ");

$arr1=explode(";",$maindata);
//echo count($arr1)."<br>";
for($i=0;$i<(count($arr1)-1);$i++)
{
	//echo $arr1[$i];
	
	$arr2=explode(":",$arr1[$i]);
	for($j=0;$j<(count($arr2)-1);$j++)
	{
		//echo "action= ".$arr2[1];
		$arr3=explode("-",$arr2[0]);
		//echo "day= ".$arr3[1];

		$query="INSERT INTO `$mid`(`day`, `action`) VALUES ('$arr3[1]','$arr2[1]')";
	mysqli_query($conn,$query);
if(mysqli_error($conn))
	{
		echo mysqli_error($conn);
	 	exit;
	}

		
	}
	
	
	
}

mysqli_close($conn);
	
	
	header('location:dash.php?error=100');   //////100 for successful
	exit;
	
	
	

?>