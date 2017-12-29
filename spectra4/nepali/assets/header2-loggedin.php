
<?php
///////////////////////////////////////////////////////////////
	 /*session_start();
	if(!isset($_SESSION['user']))
	{
		header('location:index.php?error=401');
		exit;
	}
	$user=$_SESSION['user'];*/
	$user="me";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>AgroTech</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
      <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/css/material-design-icons/material-design-icons.css" type="text/css" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

    <!--Custom-->
    <link href="assets/css/styles.css" rel="stylesheet" />
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top navbar-color-on-scroll container-fluid" >
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button id="menu-toggle" type="button" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar bar1"></span>
        <span class="icon-bar bar2"></span>
        <span class="icon-bar bar3"></span>
      </button>
      
           <div class="logo-container">
                <!--<div class="logo">
                    <img src="" alt="AgroTech">
                </div>-->
                <div class="navbar-brand">
                    AgroTech
                </div>
            </div>
      
    </div>
    <div class="collapse navbar-collapse">
        <ul  class="nav navbar-nav navbar-right">
            <li>
                <a href="#">Forum</a>
            </li>
            <li>
                <a href="#">Back To Home</a>
            </li>
        </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<container>
<div class="header-for">
    <div class="row">
        <div class="col-md-4 col-sm-6 col-md-offset-1" >
            <b><h2 class="header-head" style="padding-left:15px">
			<?php
			
			echo $user;
			
			
			?>
			</h2></b><!--Provide user full name-->
            <h4 class="header-head" Style="padding-left:15px">
			<?php
			
			////////////////////////////////
			/*
			include_once('dbvar.php'); /// variables here
	$conn=mysqli_connect($server,$uname,$password,$dbname);
	if(!$conn)
	{
		die("Connection failed");
	}
	
	$query="SELECT * FROM logdetail WHERE username='$user'";
	$values=mysqli_query($conn,$query);
	if(mysqli_error($conn))
	{
		echo mysqli_error($conn);
		exit;
	}
	
	while($row=mysqli_fetch_array($value))
	{
		$email=$row['email'];
	}
	echo $email;
	
	mysqli_close($conn)*/
	echo "sadfas@asd.com"
			
			
			?>
			</h4><!--Provide User Email-->
            <div style="padding-left:15px">
            <a href="#"><button class="btn btn-qa" data-toggle="modal" data-target="#myModal" style="padding-left:25px">Post a Question</button></a>
                <a href="#"><button class="btn btn-info" href="signup.php" style="padding-left:25px">Logout</button></a>
            </div>
        </div>
            <div class="col-md-3 col-md-offset-3" style="padding:30px; ">
           <div >
                            <div class="input-group col-md-12">
                                <input type="text" class="search-query form-control" placeholder="Search" style="color: white" />
                                <span class="input-group-btn" >
                                    <input class="btn btn-normal" type="submit" value=""></input>
                                        <i class="material-icons">search</i><!--Search here-->
                                    
                                </span>
                            </div>
                        </div>
            </div>
       
    </div>
</div>
</container>
<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Enter Your Question:</h4>
      </div>
      <div class="modal-body">
        <div class="form-group label-floating is-empty">
		<form method="post" action="getquestion.php">
        <textarea class="form-control" rows="5"></textarea>
    <span class="material-input"></span></div>
      </div>
      <div class="modal-footer">
      <input type="submit" class="btn btn-info" value="POST"></form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/material.min.js" type="text/javascript"></script>

    <!-- Material Dashboard javascript methods -->
    <script src="assets/js/material-dashboard.js"></script>

    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

    

</html>
