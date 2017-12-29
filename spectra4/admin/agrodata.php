<?php

session_start();
if (!isset($_SESSION['username'])) {
			header('location:../frontendlogin.php?error=401');//not loggedin
			exit;
		}
	
	$user=$_SESSION['username'];
	?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin:AgroTech</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

   <!--     Fonts and icons     -->
    <link rel="stylesheet" href="../assets/css/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="../assets/css/material-design-icons/material-design-icons.css" type="text/css" />
</head>

<body>

	<div class="wrapper">

	    <div class="sidebar" data-color="green" data-image="#">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="#" class="simple-text">
					AgroTech
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li>
	                    <a href="dash.php">
	                        <i class="material-icons">note</i>
	                        <p>Posts</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="new.php">
	                        <i class="material-icons">web</i>
	                        <p>Create New Desk Info</p>
	                    </a>
	                </li>
	                <li class="active">
	                    <a href="agrodata.php">
	                        <i class="material-icons">web</i>
	                        <p>Add Agro Info</p>
	                    </a>
	                </li>
					
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Dashboard</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">person</i>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Logout</a></li>
								</ul>
							</li>
						</ul>

					</div>
				</div>
			</nav>

			<div class="content">
				<div class="container-fluid">
					<div class="content">
	<div class="container-fluid">
		<div class="row" style="color: black">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="green">
	                                <h4 class="title">Add Agro data</h4>
	                            </div>
	                            <div class="card-content">
	                                <form method="post" action="getmaindata.php">
	                                    <div class="row">
	                                        <div class="col-md-9">
												<div class="form-group label-floating">
													<label class="control-label">Name of Agro Product</label>
													<input type="text" name="productname" class="form-control" required="">
												</div>
	                                        </div>
	                                        <br>
	                                        <div class="col-md-5">
												<div class="form-group label-floating">
									                <label for="select_c" class="col-md-7 control-label">Select Category.</label>

									                <div class="col-md-10">
									                  <select name="catagory" id="select_c" class="form-control">
									                    <option selected="" hidden=""></option>
									                    <option value="floriculture">Floriculture</option>
									                    <option value="horticulture">Horticulture</option>
									                    <option value="foodcrop">Food Crop</option>
									                    <option value="cashcrop">Cash Crop</option>
														<option value="animal">Animal</option>
									                  </select>
									                </div>
									              </div>
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-md-12">
	                                            <div class="form-group">
	                                            	<label>Enter Day and Activity.</label>
													<div class="form-group label-floating">
									    				<label class="control-label"></label>
								    					<textarea class="form-control" name="maindata" rows="5" maxlength="1000" required="" placeholder="eg: day-1:plantseed;day2:water;"></textarea>
		                        					</div>
	                                            </div>
	                                        </div>
	                                    </div>

										
	                                    <button type="submit" class="btn btn-success pull-right">Upload</button>
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
	            </div>
		
	</div>
	
</div>
					
				</div>
			</div>
		</div>
	</div>

</body>
	<!--   Core JS Files   -->
	<script src="../assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="../assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="../assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();

    	});
	</script>

</html>
