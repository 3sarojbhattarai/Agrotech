<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>AgroTech:Animals</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<script src="js/jquery.min.js"> </script>
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
		<!---//webfonts-->
	</head>
	<body>
		<div class="top-header products-header">
			<h1>व्यवसायिक पशु पालन एग्रो<span>टेक</span></h1>
		</div>	
		<div class="header">
					<div class="sticky-navigation">
					<div class="fixed-header">
						<div class="container">
							<div class="top-menu">
								<span class="menu"> </span>
					            <ul>
					            	<li><a href="index.php">गृहपृष्ठ</a></li>
					                <li><a href="plants.php">व्यवसायिक कृषि</a></li>
					                <li class="active"><a href="animals.php">व्यवसायिक पशु पालन</a></li>
					                <li><a href="myagro.php">मेरो कृषि</a></li>
					                <li><a href="../forum.php">मंच</a></li>
					                <li> <?php    if(isset($_SESSION['username']))
					                {
					                	echo "<font color='green'>You are logged as, <b>".$_SESSION['username']."</b></font>";
					                	echo '<a href="../logout.php"><button class="btn btn-danger">लग-आउट</button></a>';


					                }

					                else{
					                echo '<a href="../frontendlogin.php"><button class="btn btn-success">लग-इन</button></a>';
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
				            <div class="top-search">
				            	<form method="GET" action="search.php">
				            		<input type="text">
				            		<input type="submit" value="search" />
				            	</form>
				            </div>
				            <div class="clearfix"> </div>
				          </div>
						  </div>
			        </div>
				</div>
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
			
		</div>
	</body>
</html>

