<?php
 include "animals-header.php";
?>

<div class="products">
				<div class="container">
				<div class="about-latest-news">
				<div class="about-head text-center wow bounceIn" data-wow-delay="0.4s">
								<h3>पशुपालन सम्बंदी जानकारी</h3>
								<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</span>
							</div>
							<div class="about-latest-news-grids text-center">
				<?php
							
									include_once('../dbvar.php'); /// variables here
	$conn=mysqli_connect($server,$uname,$password,$dbname);
	if(!$conn)
	{
		die("Connection failed");
	}
	$query="SELECT * FROM `desk_info` WHERE `category`='animal'";
	
	$values=mysqli_query($conn,$query);
	
	while($row=mysqli_fetch_array($values))
	{
								?>
						
							
							
								<div class="col-md-4 about-latest-news-grid  wow fadeInLeft" data-wow-delay="0.4s">
									<img class="img-responsive name-in" src="images/animal/img1.jpg" title="name" />
									<a href="info.php?id=<?php  echo $row['did'];  ?>&cat=animal"><h4><?php echo $row['title'];?></h4></a>
									<p><?php  
									$var1=$row['binfo'];
									echo mb_strimwidth("$var1", 0, 25, "...");  ?></p>
								</div>
								
	<?php } 
	mysqli_close($conn);
	?>							
								<div class="col-md-4 about-latest-news-grid  wow bounceIn" data-wow-delay="0.4s">
									<img class="img-responsive name-in" src="images/animal/img2.jpg" title="name" />
									<a href="info.php"><h4>Poultry</h4></a>
									<p>Lorem ipsum dolor sit amet consectetur adiing elit. In volutpat luctus eros ac placerat. Quisque erat metus facilisis non feu,aliquam hendrerit quam. Donec ut lectus vel dolor adipiscing tincnt.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
				</div>
			</div>