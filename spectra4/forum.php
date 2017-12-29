<?php

session_start();
	if(!isset($_SESSION['username']))
	{
		include "header1-notloggedin.php";
	}
	else
	{
		$user=$_SESSION['username'];
include "header2-loggedin.php";
		
	}
	
?>
<br><br>
<container>

<?php
include_once('dbvar.php'); /// variables here
	$conn=mysqli_connect($server,$uname,$password,$dbname);
	if(!$conn)
	{
		die("Connection failed");
	}
	$query="SELECT * FROM `fquest` ORDER BY `qid` DESC";
	$values=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($values))
	{
		
		
		?>

<!--Question Starts Here-->
        <div class="col-lg-10 col-md-10 col-md-offset-1">
            <div class="card">
                <div class="card-header" data-background-color="black" style="width: 400px">
                    <h4 class="title">
					<?php
					echo $row['uname'];
					
					?>
					</h4><!--Name Of User-->
                    <p class="category">
					<?php
					
					echo $row['date'];
					?>
					
					</p><!--Other Info-->
                </div>
                <div class="card-content table-responsive">
                   <h4>
				   <?php
				   $var1=$row['question'];
							echo mb_strimwidth("$var1", 0, 250, "...");
							// output: "Hello W..."
					?>
				   
				   
				   </h4><!--Question Here-->

                   <div align="right">
				   No of Answers: <?php
				   
                  echo $row['answers'];
				   
				   
				   $link="?qid=".$row['qid'];
				   ?>
                   <a href="forumanswer.php<?php echo $link;?>"><button class="btn btn-info">View in Details</button>
                       </a>
                   </div>
                </div>
            </div>
        </div>
<!--Question Ends Here-->

<?php

	}
	
	
	


?>



</container>