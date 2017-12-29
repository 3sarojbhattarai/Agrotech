<?php
	include "plants-header.php";
	
	
	
	
	if(empty($_GET['subcat']) or ($_GET['subcat']!='horticulture' and $_GET['subcat']!='floriculture' and $_GET['subcat']!='foodcrop' and $_GET['subcat']!='cashcrop'))
	{
		header('location:plants.php');
		exit;
		
	}
	
	$subcat=$_GET['subcat'];
?>

<div class="services">
				<div class="container">
						<div class="about-latest-news">
							<div class="about-head text-center">
								<h3>
								<?php
								
								echo $subcat;
								
								?>
								
								
								</h3>
								<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</span>
							</div>
							<!----- about-latest-news-grids ---->
							
							<?php
							
							
							if($subcat=='floriculture')
							{
								$img="images/img2.jpg";
							}
							else if($subcat=='horticulture')
							{
								$img="images/img1.jpg";
							}
							else if($subcat=='foodcrop')
							{
								$img="images/img4.jpg";
							}
							else if($subcat=='cashcrop')
							{
								$img="images/img3.jpg";
							}
							
									include_once('../dbvar.php'); /// variables here
	$conn=mysqli_connect($server,$uname,$password,$dbname);
	if(!$conn)
	{
		die("Connection failed");
	}
	$query="SELECT * FROM `desk_info` WHERE `sub_category`='$subcat'";
	
	$values=mysqli_query($conn,$query);
	echo '<div class="about-latest-news-grids text-center">';
	while($row=mysqli_fetch_array($values))
	{
								
							?>
							
								<div class="col-md-4 about-latest-news-grid  wow fadeInLeft" data-wow-delay="0.4s">
									<img class="img-responsive name-in" src="<?php echo $img;?>" title="name" />
									<a href="info.php?id=<?php  echo $row['did'];  ?>&cat=plant"><h4><?php  echo $row['title'];  ?></h4></a>
									<p><?php  
									$var1=$row['binfo'];
									echo mb_strimwidth("$var1", 0, 10, "...");  ?></p><!--some part of description-->
								</div>
							
		<?php		


	}

		?>		
							
								<div class="clearfix"> </div>
							</div>
							<!----- Services-latest-news-grids ----->
						</div>
						<!----- Services-latest-news---->
							
							
							
				</div>
			</div>