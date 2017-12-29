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
                <a href="forum.php">Forum</a>
            </li>
            <li>
                <a href="home/">Back To Home</a>
            </li>
        </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<container>
<div class="header-for">
    <div class="row">
        <div class="col-md-4 col-sm-6 col-md-offset-1" >
            <b><h2 class="header-head" style="padding-left:15px">AgroTech Forum</h2></b>
            <h4 class="header-head" Style="padding-left:15px">This is the place to ask Questions about various Agriculture Related Queries.</h4>
            <div style="padding-left:15px">
                <a href="frontendlogin.php"><button class="btn btn-qa" style="padding-left:25px">Login to comment</button></a>
                <a href="#"><button class="btn btn-info" href="frontendsignup.php" style="padding-left:25px">Register</button></a>
            </div>
        </div>
            <div class="col-md-3 col-md-offset-3" style="padding:30px; ">
           <div >   <form method="GET" action="forumsearch.php">


                            <div class="input-group col-md-12">

                                <input type="text" name="search" class="search-query form-control" placeholder="Search" style="color: white" />
                                <span class="input-group-btn" >
                                    <button class="btn btn-normal" type="button">
                                        <i class="material-icons">search</i><!--Search here-->
                                    </button>
                                </span>
                            </div>
                        </div>
                    </form>
            </div>
       
    </div>
</div>
</container>


    <!--   Core JS Files   -->
    <script src="assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/material.min.js" type="text/javascript"></script>

    <!-- Material Dashboard javascript methods -->
    <script src="assets/js/material-dashboard.js"></script>

    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

    

</html>
