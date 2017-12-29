<?php 
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>AgroTech:Plants</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"> </script>
		 <!---- animated-css ---->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
		<!---- animated-css ---->
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
	</head>
	<body>
		<!----- conatiner ----->
		<!---- top-header ---->
		<div class="top-header services-header">
			<h1>Plants Agro<span>Tech</span></h1>
		</div>	
		<!---- top-header ---->
			<div class="header">
					<div class="sticky-navigation">
					<div class="fixed-header">
						<div class="container">
							<div class="top-menu">
								<span class="menu"> </span>
					            <ul>
					            	<li><a href="index.php">Home</a></li>
					                <li class="active"><a href="plants.php">Plants</a></li>
					                <li><a href="animals.php">Animals</a></li>
					                <li><a href="myagro.php">Track My Agro</a></li>
					                <li><a href="../forum.php">Forum</a></li>
					                <li><?php    if(isset($_SESSION['username']))
					                {
					                	echo "<font color='green'>You are logged as, <b>".$_SESSION['username']."</b></font>";
					                	echo '<a href="../logout.php"><button class="btn btn-danger">Logout</button></a>';


					                }

					                else{
					                echo '<a href="../frontendlogin.php"><button class="btn btn-success">Login</button></a>';
					                }
					                ?></li>
					            </ul>
				            </div>
							<script>
								$("span.menu").click(function(){
									$(".top-menu ul").slideToggle(500, function(){
									});
								});
							</script>
				            <!----- search ---->
				            <div class="top-search">
				            	<form method="GET" action="search.php">
				            		<input type="text" name="search">
				            		<input type="submit" value="search" />
				            	</form>
				            </div>
				            <div class="clearfix"> </div>
				            <!----- search ---->
				          </div>
						  </div>
			        </div>
				</div>
			<!------ header ----->
					<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header").addClass("fixed");
				}else{
					$(".header").removeClass("fixed");
				}
			 });
			 
		});
		</script>

			
			
			
			
			<!----- footer ---->
		</div>
		<!----- conatiner ---->
	</body>
</html>

