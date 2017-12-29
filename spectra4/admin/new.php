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
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
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
	                <li class="active">
	                    <a href="new.php">
	                        <i class="material-icons">web</i>
	                        <p>Create New Desk Info</p>
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
						<a class="navbar-brand" href="#">Create New Desk Info</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">person</i>
									<span class="notification">5</span>
									<p class="hidden-lg hidden-md">Notifications</p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Mike John responded to your email</a></li>
									<li><a href="#">You have 5 new tasks</a></li>
									<li><a href="#">You're now friend with Andrew</a></li>
									<li><a href="#">Another Notification</a></li>
									<li><a href="#">Another One</a></li>
									<hr>
									<li><a href="#">Logout</a></li>
								</ul>
							</li>
						</ul>

						<form class="navbar-form navbar-right" role="search">
							<div class="form-group  is-empty">
								<input type="text" class="form-control" placeholder="Search">
								<span class="material-input"></span>
							</div>
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i><div class="ripple-container"></div>
							</button>
						</form>
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
	                                <h4 class="title">Create New Desk Info</h4>
	                            </div>
	                            <div class="card-content">
	                                <form method="POST" action="../getdeskinfo.php">
	                                    <div class="row">
	                                        <div class="col-md-9">
												<div class="form-group label-floating">
													<label class="control-label">Title</label>
													<input type="text" class="form-control" name="title" required="">
												</div>
	                                        </div>
	                                        <br>
	                                        <div class="col-md-5">
												<div class="form-group label-floating">
									                <label for="select_c" class="col-md-7 control-label">Select Category.</label>

									                <div class="col-md-10">
									                  <select id="select_c" name="category" class="form-control">
									                    <option selected="" hidden=""></option>
									                    <option value="animal" >Animal</option>
									                    <option value="plant">Plant</option>
									                  </select>
									                </div>
									              </div>
	                                        </div>
	                                        <div class="col-md-5">
												<div class="form-group label-floating">
									                <label for="select_c" class="col-md-7 control-label">Select Sub Category.</label>

									                <div class="col-md-10">
									                  <select id="select_c" name="sub_category" class="form-control">
									                    <option selected="" hidden=""></option>
									                    <option value="floriculture">Floriculture</option>
									                    <option value="horticulture">Horticulture</option>
									                    <option value="foodcrop">Food Crop</option>
									                    <option value="cashcrop">Cash Crop</option>
									                  </select>
									                </div>
									              </div>
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-md-12">
	                                            <div class="form-group">
	                                                <label></label>
													<div class="form-group label-floating">
									    				<label class="control-label">Basic Information</label>
								    					<textarea name="binfo" class="form-control" rows="5" maxlength="1000" required=""></textarea>
		                        					</div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-md-12">
													<div class="form-group label-floating">
									    				<label class="control-label" >Taking Care</label>
								    					<textarea name="tcare" class="form-control" rows="5" maxlength="1000" required=""></textarea>
		                        					
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="form-group">
	                                                <label>Taking Care Difficulty Level</label>
	                                    <div class="radio">
											<label>
												<input type="radio" name="tcare_d" value="1">
												Easy
											</label>
											<label>
												<input type="radio" name="tcare_d" value="2">
												Medium
											</label>
											<label>
												<input type="radio" name="tcare_d" value="3">
												Hard
											</label>
										</div>
										</div>
										<div class="row">
	                                        <div class="col-md-12">
	                                            <div class="form-group">
	                                                <label></label>
													<div class="form-group label-floating">
									    				<label class="control-label">Harvesting</label>
								    					<textarea name="harvest" class="form-control" rows="5" maxlength="1000" required=""></textarea>
		                        					</div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Harvesting Time</label>
													<input type="text" name="harvest_d" class="form-control" >
												</div>
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-md-12">
	                                            <div class="form-group">
	                                                <label></label>
													<div class="form-group label-floating">
									    				<label class="control-label">Market Evaluation</label>
								    					<textarea name="market" class="form-control" rows="5" maxlength="1000"></textarea>
		                        					</div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="form-group">
	                                                <label>Market Value</label>
	                                    <div class="radio">
											<label>
												<input type="radio" name="market_d" value="1">
												Low
											</label>
											<label>
												<input type="radio" name="market_d" value="2">
												Medium
											</label>
											<label>
												<input type="radio" name="market_d" value="3">
												High
											</label>
										</div>
										</div>
	                                    <button type="submit" class="btn btn-primary pull-right">Upload</button>
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
