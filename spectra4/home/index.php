<?php 
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>AgroTech</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"> </script>
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
		<style type="text/css">
			#imaginary_container{
    margin-top:10%; /* Don't copy this */
}
.stylish-input-group .input-group-addon{
    background: white !important; 
}
.stylish-input-group .form-control{
	border-right:0; 
	box-shadow:0 0 0; 
	border-color:#ccc;
}
.stylish-input-group button{
    border:0;
    background:transparent;
}
		</style>
	
	</head>
	<body>

	<!--Slider Starts-->
			<div class="slider">
				<div class="slider-caption">
					<h1>Agro<span>Tech</span></h1>
					<h2>An agriculture Portal</h2>
				</div>

				<div class="container">
					<div class="row">
					<form method="GET" action="search.php">
				        <div class="col-sm-6 col-sm-offset-3">
				            <div id="imaginary_container"> 

				                <div class="input-group stylish-input-group">   
				                    <input type="text" class="form-control" name="search" placeholder="Search" >
				                    <span class="input-group-addon">
				                        <button type="submit" value="Search" > </button>
				                    </span>
				                </div>
				            </div>
				           </div> 
				       </div>
					</form> 
				</div>	
			</div>	

       <!---Navbar-->

				<div class="header">
					<div class="sticky-navigation">
					<div class="fixed-header">
						<div class="container">
							<div class="top-menu">
								<span class="menu"> </span>
					            <ul>
					            	<li class="active"><a href="index.php">Home</a></li>
					                <li><a href="plants.php">Plants</a></li>
					                <li><a href="animals.php">Animals</a></li>
					                <li><a href="myagro.php">Track My Agro</a></li>
					                <li><a href="../forum.php">Forum</a></li>
					                <li>
					            <?php    if(isset($_SESSION['username']))
					                {
					                	echo "<font color='green'>You are logged as, <b>".$_SESSION['username']."</b></font>";
					                	echo '<a href="../logout.php"><button class="btn btn-danger">Logout</button></a>';


					                }

					                else{
					                echo '<a href="../frontendlogin.php"><button class="btn btn-success">Login</button></a>';
					                }
					                ?>

					                </li>
					            	<li>
					            		<a href="../nepali/home">View Nepali</a>
					            	</li>

					            </ul>
				            </div>



							

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
		<br><br><br><br>
		<!--Accuweather Plugin-->
		<a href="https://www.accuweather.com/en/us/new-york-ny/10007/weather-forecast/349727" class="aw-widget-legal"></a>
<div id="awcc1500680740186" class="aw-widget-current" align="center"  data-locationkey="" data-unit="c" data-language="en-us" data-useip="true" data-uid="awcc1500680740186"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
<!--<img src="images/weather.png" style="width: 100%" />-->
<br><br>
<div class="container">
		<div class="head-section text-center">
			<h3>Market Price</h3>
			<p>Here are the recent market price of agricultural products.</p>
			<br>
		</div>
			<div class="row">
			<div class="col-md-6">
			<div class="head-section text-center">
			<h3>Vegetables</h3>
		</div>
			    <table class="table table-hover">
			        <thead>
			            <tr>
			                <th>S.N.</th>
			                <th>Name of Product</th>
			                <th>Max Price</th>
			                <th>Min Price</th>
			            </tr>
			        </thead>
			        <tbody>
			            <tr>
			                <td>1</td>
			                <td>Potato</td>
			                <td>100</td>
			                <td>90</td>
			            </tr>
			            <tr>
			                <td>2</td>
			                <td>Tomato</td>
			                <td>50</td>
			                <td>40</td>
			            </tr>
			            <tr>
			                <td>3</td>
			                <td>Onion</td>
			                <td>80</td>
			                <td>60</td>
			            </tr>
			            <tr>
			                <td>4</td>
			                <td>Garlic</td>
			                <td>80</td>
			                <td>60</td>
			            </tr>
			            <tr>
			                <td>5</td>
			                <td>Radish</td>
			                <td>80</td>
			                <td>60</td>
			            </tr>
			            <tr>
			                <td>6</td>
			                <td>Carrot</td>
			                <td>80</td>
			                <td>60</td>
			            </tr>
			            <tr>
			                <td>7</td>
			                <td>Cucumber</td>
			                <td>80</td>
			                <td>60</td>
			            </tr>
			            <tr>
			                <td>8</td>
			                <td>Cauliflower</td>
			                <td>80</td>
			                <td>60</td>
			            </tr>
			            <tr>
			                <td>9</td>
			                <td>Broccoli</td>
			                <td>80</td>
			                <td>60</td>
			            </tr>
			        </tbody>
			    </table>
			</div>
			<div class="col-md-6">
			<div class="head-section text-center">
			<h3>Fruits</h3>
		</div>
			    <table class="table table-hover">
			        <thead>
			            <tr>
			                <th>S.N.</th>
			                <th>Name of Product</th>
			                <th>Max Price</th>
			           		<th>Min Price</th>
			            </tr>
			        </thead>
			        <tbody>
			            <tr>
			                <td>1</td>
			                <td>Orange</td>
			                <td>70</td>
			                <td>55</td>
			            </tr>
			            <tr>
			                <td>2</td>
			                <td>Apple</td>
			                <td>110</td>
			                <td>90</td>
			            </tr>
			            <tr>
			                <td>3</td>
			                <td>Banana</td>
			                <td>60</td>
			                <td>55</td>
			            </tr>
			            <tr>
			                <td>4</td>
			                <td>Mango</td>
			                <td>60</td>
			                <td>55</td>
			            </tr>
			            <tr>
			                <td>5</td>
			                <td>Papaya</td>
			                <td>60</td>
			                <td>55</td>
			            </tr>
			            <tr>
			                <td>6</td>
			                <td>Jackfruit</td>
			                <td>60</td>
			                <td>55</td>
			            </tr>
			            <tr>
			                <td>7</td>
			                <td>almond</td>
			                <td>60</td>
			                <td>55</td>
			            </tr>
			            <tr>
			                <td>8</td>
			                <td>pears</td>
			                <td>60</td>
			                <td>55</td>
			            </tr>
			            <tr>
			                <td>9</td>
			                <td>litchi</td>
			                <td>60</td>
			                <td>55</td>
			            </tr>
			        </tbody>
			    </table>
			</div>
		</div>
</div>



			<div class="footer">
				<div class="container">
					Copyright @ AgroTech
					
				</div>
			</div>
			
		
	</body>
</html>

