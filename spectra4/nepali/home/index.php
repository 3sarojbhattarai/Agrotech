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
			<div class="slider">
				<div class="slider-caption">
					<h1>एग्रो<span>टेक</span></h1>
					<h2>एन अग्रिचल्चर पोर्टल</h2>
				</div>
				<div class="container">
					<div class="row">
					<form method="GET" action="search.php">
				        <div class="col-sm-6 col-sm-offset-3">
				            <div id="imaginary_container"> 
				                <div class="input-group stylish-input-group">
				                    
				                    <input type="text" class="form-control" name="search" placeholder="Search" >
				                    <span class="input-group-addon">
				                        <button type="submit" value="Search" >
				                        </button> 

				                    </span>
				                
				                </div>

				            </div>
				           </div> 
				       </div>
					</form> 
				</div>	
			</div>			
				<div class="header">
					<div class="sticky-navigation">
					<div class="fixed-header">
						<div class="container">
							<div class="top-menu">
								<span class="menu"> </span>
					            <ul>
					            	<li class="active"><a href="index.php">गृहपृष्ठ</a></li>
					                <li><a href="plants.php">व्यवसायिक कृषि</a></li>
					                <li><a href="animals.php">व्यवसायिक पशु पालन</a></li>
					                <li><a href="myagro.php">मेरो कृषि</a></li>
					                <li><a href="../forum.php">मंच</a></li>
					                <li>
					            <?php    if(isset($_SESSION['username']))
					                {
					                	echo "<font color='green'>You are logged as, <b>".$_SESSION['username']."</b></font>";
					                	echo '<a href="../logout.php"><button class="btn btn-danger">Logout</button></a>';


					                }

					                else{
					                echo '<a href="../frontendlogin.php"><button class="btn btn-success">लग-इन</button></a>';
					                }
					                ?>

					                </li>
					            	<li>
					            		<a href="/../spectra/home">View English</a>
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
		<br><br><br><br>
		<!--Accuweather Plugin-->
		<a href="https://www.accuweather.com/en/us/new-york-ny/10007/weather-forecast/349727" class="aw-widget-legal"></a>
<div id="awcc1500680740186" class="aw-widget-current" align="center"  data-locationkey="" data-unit="c" data-language="en-us" data-useip="true" data-uid="awcc1500680740186"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
<!--<img src="images/weather.png" style="width: 100%" />-->
<br><br>
<div class="container">
		<div class="head-section text-center">
			<h3>बजार भाउ</h3>
			<p> कृषि उत्पादन को हाल बजार मूल्य</p>
			<br>
		</div>
			<div class="row">
			<div class="col-md-6">
			<div class="head-section text-center">
			<h3>साग-सब्जी</h3>
		</div>
			    <table class="table table-hover">
			        <thead>
			            <tr>
			                <th>स.न.</th>
			                <th>नाम</th>
			                <th>अधिकतम मूल्य</th>
			                <th>न्यूनतम मूल्य</th>
			            </tr>
			        </thead>
			        <tbody>
			            <tr>
			                <td>१</td>
			                <td>आलु</td>
			                <td>१००</td>
			                <td>9९०</td>
			            </tr>
			            <tr>
			                <td>२</td>
			                <td>टमाटर</td>
			                <td>५०</td>
			                <td>40</td>
			            </tr>
			            <tr>
			                <td>३</td>
			                <td>प्याज</td>
			                <td>80</td>
			                <td>60</td>
			            </tr>
			            <tr>
			                <td>४</td>
			                <td>बन्दा</td>
			                <td>80</td>
			                <td>60</td>
			            </tr>
			            <tr>
			                <td>५</td>
			                <td>फुल कोपि</td>
			                <td>80</td>
			                <td>60</td>
			            </tr>
			            <tr>
			                <td>६</td>
			                <td>भिंडी</td>
			                <td>80</td>
			                <td>60</td>
			            </tr>
			            <tr>
			                <td>७</td>
			                <td>ब्रोकौली</td>
			                <td>80</td>
			                <td>60</td>
			            </tr>
			            <tr>
			                <td>८</td>
			                <td>पर्बल</td>
			                <td>80</td>
			                <td>60</td>
			            </tr>
			        </tbody>
			    </table>
			</div>
			<div class="col-md-6">
			<div class="head-section text-center">
			<h3>फलफुल</h3>
		</div>
			    <table class="table table-hover">
			        <thead>
			            <tr>
			                <th>स.न.</th>
			                 <th>नाम</th>
			                <th>अधिकतम मूल्य</th>
			                <th>न्यूनतम मूल्य</th>
			            </tr>
			        </thead>
			        <tbody>
			            <tr>
			                <td>१</td>
			                <td>सुन्तला</td>
			                <td>70</td>
			                <td>55</td>
			            </tr>
			            <tr>
			                <td>२</td>
			                <td>स्याउ</td>
			                <td>110</td>
			                <td>90</td>
			            </tr>
			            <tr>
			                <td>३</td>
			                <td>केरा</td>
			                <td>60</td>
			                <td>55</td>
			            </tr>
			            <tr>
			                <td>४</td>
			                <td>अनार</td>
			                <td>80</td>
			                <td>60</td>
			            </tr>
			            <tr>
			                <td>५</td>
			                <td>अंगुर</td>
			                <td>80</td>
			                <td>60</td>
			            </tr>
			            <tr>
			                <td>६</td>
			                <td>नासपाती</td>
			                <td>80</td>
			                <td>60</td>
			            </tr>
			            <tr>
			                <td>७</td>
			                <td>आप</td>
			                <td>80</td>
			                <td>60</td>
			            </tr>
			            <tr>
			                <td>८</td>
			                <td>मेवा</td>
			                <td>80</td>
			                <td>60</td>
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

