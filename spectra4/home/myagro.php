<?php

session_start();
	if(!isset($_SESSION['username']))
	{
		header('location:index.php?error=401');
		exit;
	}
	$user=$_SESSION['username'];

include "myagro-header.php";
?>
<!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
 <!--     Fonts and icons     -->
    <link rel="stylesheet" href="../assets/css/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="../assets/css/material-design-icons/material-design-icons.css" type="text/css" />
<br><br>
<!--Accuweather Plugin-->
		<a href="https://www.accuweather.com/en/us/new-york-ny/10007/weather-forecast/349727" class="aw-widget-legal"></a>
<div id="awcc1500680740186" class="aw-widget-current" align="center"  data-locationkey="" data-unit="c" data-language="en-us" data-useip="true" data-uid="awcc1500680740186"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
<!--<img src="images/weather.png" style="width: 100%" />-->
<div class="about">



<?php

			include_once('../dbvar.php'); /// variables here
	$conn=mysqli_connect($server,$uname,$password,$dbname);
	if(!$conn)
	{
		die("Connection failed");
	}
	$temptable="md_".$user;

	$query="SELECT * FROM $temptable WHERE `cleared`!=1";
	
	$items=mysqli_query($conn,$query);
	$itemnos=mysqli_num_rows($items);
	
	
	?>
				<div class="container">
					<div class="about-top-grids">
					
						<div class="about-head text-center wow fadeIn" data-wow-delay="0.5s">
							<h3>My Agro Tracker</h3>
							<span>Tracks your products for you</span>
						</div>
						<div align="right">
					<button class="btn btn-success" data-toggle="modal" data-target="#myModal">Track New Product</button>
					</div>
					<hr>
					<?php
					If($itemnos==0)
	{
		echo "<center><b>Currently no Products to track...</b></center>";
	}
					?>
						<div class="about-top-gridn" data-wow-delay="0.5s">
							<div class="container">
		
										<div class="row">

										<div class="col-md-7">
										
							<?php
						while($row=mysqli_fetch_array($items))
						{
	
		
							
							?>
										
										<div >
											<div class="card">
												<div class="card-header" data-background-color="green">
												<h4 class="title"><?php echo $row['productname'];?></h4>
												</div>
												<div class="card-content">
													<div class="row">
													<div class="col-md-5">
													<div class="col-md-12">
														<div class="panel status panel-info">
											                <div class="panel-heading">
											                    <h1 class="panel-title text-center">Current Status</h1>
											                </div>
											                <div class="panel-body text-center">                        
											                    <strong><?php   $date1=strtotime($row['startdate']);
																				$date2=strtotime(date("Y-m-d")) ;	
																				$pdays=(($date2-$date1)/86400)+1;
																				echo $pdays." Days";
																					?></strong>
											                </div>
											            </div>
											            </div>
											           <div class="col-md-12">
														<div class="panel status panel-danger">
											                <div class="panel-heading">
											                    <h1 class="panel-title text-center">Today's Action</h1>
											                </div>
											                <div class="panel-body text-center">                        
											                    <strong><?php
																		$mid=$row['mid'];
																		
																		
																		$query1111="Select * FROM `$mid` WHERE `day`= $pdays ";
																		
																		$values1111=mysqli_query($conn,$query1111);
																			if(mysqli_error($conn)){
		echo mysqli_error($conn);
		exit;
	}
																		if((mysqli_num_rows($values1111))==0)
																		{
																			echo "NOTHING For Today, chill!!.";
																		}
																		else{
																		$values1111=mysqli_fetch_array($values1111);
																		echo $values1111['action'];
																		}
																
																?></strong>
											                </div>
											            </div>
											            </div>
													</div>
													<div class="col-md-7">
														<div class="col-md-12">
														<div class="panel status panel-success">
											                <div class="panel-heading">
											                    <h1 class="panel-title text-center">Previous Action</h1>
											                </div>
											                <div class="panel-body text-center">                        
											                    <strong>
																<?php
																		$mid=$row['mid'];
																		
																		
																		$query11="Select * FROM `$mid` WHERE `day`< $pdays ORDER BY day DESC";
																		
																		$values11=mysqli_query($conn,$query11);
																			if(mysqli_error($conn)){
		echo mysqli_error($conn);
		exit;
	}
																		if((mysqli_num_rows($values11))==0)
																		{
																			echo "NOTHING DONE TILL DATE.";
																		}
																		else{
																		$values11=mysqli_fetch_array($values11);
																		echo $values11['action']." before ".($pdays-$values11['day'])." days.";
																		}
																
																?>
																
																</strong>
											                </div>
											            </div>
													</div>
													<div class="col-md-12">
														<div class="panel status panel-warning">
											                <div class="panel-heading">
											                    <h1 class="panel-title text-center">Next Action</h1>
											                </div>
											                <div class="panel-body text-center">                        
											                    <strong>
																
																<?php
																		$mid=$row['mid'];
																		
																		$query111="Select * FROM `$mid` WHERE `day`> $pdays ORDER BY day LIMIT 1";
																		
																		$values111=mysqli_query($conn,$query111);
																		if(mysqli_num_rows($values111)==0)
																		{
																			echo "Its Harvest TIME!!!";
																		}
																		else{
																		$values111=mysqli_fetch_array($values111);
																		
																		echo $values111['action']." after ".($values111['day']-$pdays)." day/s.";
																		}
																?>
																
																</strong>
											                </div>
											            </div>
													</div>
													</div>
													</div>
												</div>
											</div>
										</div>
										
						<?php }


								?>				
										
										
										
										
										</div>
										<div class="col-md-5">
											<div class="col-md-10 col-md-offset-3">
    						<div class="card card-profile">
    							<div class="card-avatar">
    								<a href="#pablo">
    									<img class="img" src="../assets/img/faces/marc.jpg" />
    								</a>
    							</div>
<?php
					
	$query="SELECT * FROM `logdetail` WHERE `username`='$user'";
	$values=mysqli_query($conn,$query);
	$detail=mysqli_fetch_array($values);
								
			?>					
								
    							<div class="content">
    								<h6 class="category text-gray"><?php echo $user;?></h6><!--Username-->
    								<h4 class="card-title"><?php echo "Name: ".$detail['name'];?></h4><!--Name-->
    								<p class="card-content">
    									<?php echo "Email: ". $detail['email'];?><br><!--Email-->
    								</p>
    							</div>
    						</div>
		    			</div>
										</div>

<?php
	mysqli_close($conn);

?>

									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Track New Product</h4>
      </div>
      <form method="post" action="getagroproduct.php">
      <div class="modal-body">
        <div>
			<div class="form-group label-floating">
	            <label for="select_c" class="col-md-7 control-label">Select Product</label>

	            <div>
	              <select id="select_c" name="sproduct" class="form-control">
	                <option selected="" hidden=""></option>
					<?php
					include_once ('../dbvar.php');
$conn = mysqli_connect($server,$uname,$password,$dbname);
	if(!$conn)
	{
		die("Connection failed");
		exit;
	}									
	$query = "SELECT * FROM `maindata`";
	$valuess = mysqli_query($conn, $query);
	while($rows=mysqli_fetch_array($valuess))
	{

		
		echo "<option value='".$rows['pname']."''>".$rows['pname']."</option>";
	}
		
	                
					
					
					?>
					
	              </select>
	            </div>
	          </div>
	    <div class="row">
            <div class="col-md-12">
				<div class="form-group label-floating">
					<label class="control-label">Agro Product Name</label>
					<input type="text" class="form-control">
				</div>
            </div>
            <div class="col-md-12">
				<div class="form-group">
					<label class="control-label">Start Date</label>
					<input type="Date" name="sdate" class="form-control" >
				</div>
            </div>
           
        </div>

	    </div>
	   
      	<div class="modal-footer">
		
		<button  class="btn btn-primary" type="submit">Start Tracking</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> </form>
      
   </div>

 </div>
</div>
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