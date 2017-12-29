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

<style type="text/css">
    body{
   background-repeat: no-repeat;
   background-size:cover;
   background-attachment: fixed;
}
</style>
<body style="background-image: url(images/bg2.jpg);">

	  <div class="col-md-4 col-md-offset-4" style="margin-top:10%">
                    <div class="jpt card card-signup">
                        <h2 class="card-title card-header text-center" data-background-color="green">Login</h2>
                        <br>
                        <br>
                        <div class="row">
                           
                            <div class="col-md-12">
                            
                                <form class="form" method="POST" action="loginn.php">
                                    <div class="card-content">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">face</i>
                                            </span>
                                            <div class="form-group is-empty label-floating">
                                            <label class="control-label">Username</label>
                                            <input class="form-control" placeholder="" type="text" name="uname"><span class="material-input"></span>
                                            </div>
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                            <div class="form-group is-empty label-floating">
                                            <label class="control-label">Password</label>
                                            <input class="form-control" placeholder="" type="password" name="password"><span class="material-input"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="error">
                                        <!--error username or login show here -->
                                    </div>
                                    <div class="footer text-center">
                                        <input type="submit" class="btn btn-success btn-round">
                                        <div>
                                        <label>
                                            
                                            Dont't have an account? <a href="frontendsignup.php">Signup</a>
                                        </label>
                                    </div>
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
