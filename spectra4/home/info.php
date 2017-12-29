<?php

$cat=$_GET['cat'];
if($cat=="animal")
{
	include "animals-header.php";
}
else
{
	include "plants-header.php";
}
	
	
	
	if(empty($_GET['id']) )
	{
		header('location:index.php');
		exit;
		
	}
	
	$did=$_GET['id'];
	
	
	
	
?>
  <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

		<div class="products">
				<div class="container">
						<div class="about-latest-news">
							<div class="about-head text-center" data-wow-delay="0.4s">
							
							<?php
							include_once('../dbvar.php'); /// variables here
	$conn=mysqli_connect($server,$uname,$password,$dbname);
	if(!$conn)
	{
		die("Connection failed");
	}
	
	$query="SELECT * FROM `desk_info` WHERE `did`= '$did'";
	$values=mysqli_query($conn,$query);
							while($row=mysqli_fetch_array($values))
	{
							
							?>
								<h3><?php echo $row['title'];?></h3>
								<span><?php echo $row['category'];?></span>
				<div class="row">
					<div class="col-lg-12 col-md-12">
							<div class="card card-nav-tabs">
								<div class="card-header" data-background-color="grey">
									<div class="nav-tabs-navigation">
										<div class="nav-tabs-wrapper">
											<span class="nav-tabs-title"></span>
											<ul class="nav nav-tabs" data-tabs="tabs">
												<li class="active">
													<a href="#b_info" data-toggle="tab">
														<i class="material-icons">info</i>
														Basic Info
													<div class="ripple-container"></div></a>
												</li>
												<li class="">
													<a href="#t_care" data-toggle="tab">
														<i class="material-icons">favorite</i>
														Taking Care
													<div class="ripple-container"></div></a>
												</li>
												<li class="">
													<a href="#harvesting" data-toggle="tab">
														<i class="material-icons">rowing</i>
														Harvesting
													<div class="ripple-container"></div></a>
												</li>
												<li class="">
													<a href="#market" data-toggle="tab">
														<i class="material-icons">add_shopping_cart</i>
														Market Analysis
													<div class="ripple-container"></div></a>
												</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="card-content" align="text-center">
									<div class="tab-content">
										<div class="tab-pane active" id="b_info">
											<table class="table">
												<tbody>
													<tr>
														<td>
														</td>
														<td><?php echo $row['binfo'];?></td>
												</tbody>
											</table>
										</div>
										<div class="tab-pane active" id="t_care">
											<table class="table">
												<tbody>
													<tr>
														<td>
														</td>
														<td><?php echo $row['tcare'];?></td>
														
												</tbody>
											</table>
										</div>
										<div class="tab-pane active" id="harvesting">
											<table class="table">
												<tbody>
													<tr>
														<td>
														</td>
														<td><?php echo $row['harvest'];?></td>
														
												</tbody>
											</table>
										</div>
										<div class="tab-pane active" id="market">
											<table class="table">
												<tbody>
													<tr>
														<td>
														</td>
														<td><?php echo $row['market'];?></td>
														
												</tbody>
											</table>
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
			<?php
			
	}
			mysqli_close($conn);
			?>
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