<?php
										$nam = $_GET['search'];
										$nam=strip_tags($nam);
										$nam=htmlspecialchars($nam);
										include_once('../dbvar.php'); /// variables here
											$conn=mysqli_connect($server,$uname,$password,$dbname);
											if(!$conn)
											{
												die("Connection failed");
											}
											$query="SELECT * FROM desk_info
										    WHERE title LIKE '%{$nam}%' or binfo LIKE '%{$nam}%' or tcare LIKE '%{$nam}%' or harvest LIKE '%{$nam}%' or market LIKE '%{$nam}%' or category LIKE '%{$nam}%' or sub_category LIKE '%{$nam}%'";
										    
											$result = mysqli_query($conn, $query);
											$noofvaluesss=mysqli_num_rows($result);

										


						
							

					?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>AgroTech:Search Results</title>
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
	</head>
	<body>
		<div class="top-header about-header">
			<h1>Search Agro<span>Tech</span></h1>
		</div>	
			<div class="header">
					<div class="sticky-navigation">
					<div class="fixed-header">
						<div class="container">
							<div class="top-menu">
								<span class="menu"> </span>
					            <ul>
					            	<li><a href="index.php">Home</a></li>
					                <li><a href="plants.php">Plants</a></li>
					                <li><a href="animals.php">Animals</a></li>
					                <li class="active"><a href="myagro.php">Track My Agro</a></li>
					                <li><a href="../forum.php">Forum</a></li>
					                <li>  <?php    if(isset($_SESSION['username']))
					                {
					                	echo "<font color='green'>You are logged as, <b>".$_SESSION['username']."</b></font>";
					                	echo '<a href="../logout.php"><button class="btn btn-danger">Logout</button></a>';


					                }

					                else{
					                echo '<a href="../frontendlogin.php"><button class="btn btn-success">Login</button></a>';
					                }
					                ?>
</li>
					            </ul>
				            </div>
							<script>
								$("span.menu").click(function(){
									$(".top-menu ul").slideToggle(500, function(){
									});
								});
							</script>
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
		<div class="container">
		<div class="about-top-grids">
					<br>
					
						<div class="about-head text-center fadeIn">
							<h3>!!! Search Results !!!</h3>
						</div>
					<div class="about-latest-news-grids text-center">
								<?php 
								if($noofvaluesss==0)
										{
											echo "<strong style='color:black'>NO RESULTS FOUND!!!</strong>";
										}
								while($row = mysqli_fetch_array($result)){

									?>
									<div class="col-md-4 about-latest-news-grid  wow fadeInLeft" data-wow-delay="0.4s">
									<img class="img-responsive name-in" src="images/img1.jpg" title="name" />
									<a href="info.php?id=<?php  echo $row['did'];  ?>&cat=<?php echo $row['catagory'];?>"><h4>
									<?php 
										echo $row['title'];
									?>
									</h4></a>
									<p>Lorem ipsum dolor sit amet consectetur adiing elit. In volutpat luctus eros ac placerat. Quisque erat metus facilisis non feu,aliquam hendrerit quam. Donec ut lectus vel dolor adipiscing tincnt.</p>
								</div>
							<?php
								
								}
							
							?>
						</div>
			
		</div>
		</div>
		
	</body>
</html>

