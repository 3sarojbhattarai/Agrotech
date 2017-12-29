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
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

	  <div class="col-md-4 col-md-offset-7" style="margin-top:4%">
                    <div class="jpt card card-signup">
                        <h2 class="card-title card-header text-center" data-background-color="green">Sign Up</h2>
                        <br>
                        <br>
                        <div class="row">
                           
                            <div class="col-md-12">
                            <div class="social text-center">
                                    <button class="btn btn-just-icon btn-round btn-twitter log-btn">
                                        <i class="fa fa-twitter"></i>
                                    </button>
                                    <button class="btn btn-just-icon btn-round btn-google-plus log-btn" style="background-color:#d34836">
                                        <i class="fa fa-google-plus"></i>
                                    </button>
                                    <button class="btn btn-just-icon btn-round btn-facebook log-btn">
                                        <i class="fa fa-facebook"> </i>
                                    </button>
                                    <h3 style="color:black;margin-bottom:0px;"> Or Be Classical </h3>
                                </div>

                                <div class="error">
                                <!--error message-->

                                </div>

                                <form class="form" method="post" action="signupp.php">
                                    <div class="card-content">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">face</i>
                                            </span>
                                            <div class="form-group is-empty label-floating">
                                            <label class="control-label">Username</label>
                                            <input class="form-control" placeholder="" type="text" name="uname"><span class="material-input" required></span>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                            <div class="form-group is-empty label-floating">
                                            <label class="control-label">Password</label>
                                            <input class="form-control" placeholder="" type="password" name="pass"><span class="material-input" required></span>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                            <div class="form-group is-empty label-floating">
                                            <label class="control-label">Confirm Password</label>
                                            <input class="form-control" placeholder="" type="password" name="re_pass"><span class="material-input" required></span>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">face</i>
                                            </span>
                                            <div class="form-group is-empty label-floating">
                                            <label class="control-label">Name</label>
                                            <input class="form-control" placeholder="" type="text" name="name"><span class="material-input" required></span>
                                            </div>
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <div class="form-group is-empty label-floating">
                                            <label class="control-label">Email</label>
                                            <input class="form-control" placeholder="" type="email" name="email"><span class="material-input" required></span>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                    </div>
                                    <div class="footer text-center">
                                        <input type="submit" class="btn btn-success btn-round">
                                    </div>
                                </form>
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

	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();

    	});
	</script>

</html>
