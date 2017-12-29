<?php
session_start();
	if(!isset($_SESSION['username']))
	{
		include "forum.php";
	}
	
		$user=$_SESSION['username'];
include "header2-loggedin.php";
	

	if(empty($_GET['qid']) or empty($_GET['qid']))
	{
		header('location:forum.php'); 
		exit;
	}
	
$qid=$_GET['qid'];
$statuschange=$_GET['statuschange'];




include_once('dbvar.php'); /// variables here
	$conn=mysqli_connect($server,$uname,$password,$dbname);
	if(!$conn)
	{
		die("Connection failed");
	}
	
	
	if($statuschange==1)
{
	$query="UPDATE `fquest` SET `status`=0 WHERE `qid`='$qid' and `uname`='$user'";
	
	mysqli_query($conn,$query);
	if(mysqli_error($conn))
	{
		echo mysqli_error($conn);
	 	exit;
	}
}
	$query="SELECT * FROM `fquest` WHERE `qid`= '$qid'";
	$values=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($values))
	{
		
		
	
	
?>
<br><br>
<container>
<!--Question Starts Here-->
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="red" style="width: 400px">
                    <h4 class="title">
					
					<?php
					echo $row['uname'];
					
					
					?>
					</h4><!--Name Of User-->
                    <p class="category">Question</p>
                </div>
                <div class="card-content table-responsive" style="padding: 25px">
                   <h4><?php
					
					echo $row['question'];
					
	?></h4><!--Question Here-->
	
				   
				   
                  
				   
				   
				  
                   
	<div align="right"><?php
	
	echo "No of Answers: ".$row['answers'];
	
	if(isset($_SESSION['username']))
	{
		echo '
				 
                   <button class="btn btn-info" data-toggle="modal" data-target="#myModalok" style="padding-left:25px">Answer</button>
                       
                   ';
	}
	
	?>
	</div>
	  
	
	
                </div>
            </div>
        </div>
		
		<?php
		
		$noofanswers=$row['answers'];
		
	}
	
	$table="f_a_".$qid;
	$query="SELECT * FROM $table WHERE 1 ORDER BY `votes`";
	
	$values=mysqli_query($conn,$query);
	
	
	
	$noofvalues=mysqli_num_rows($values);
	
	if($noofvalues==0)
	{
		echo "<center>No Answers yet, be the first one to answer!!!!</center>";
	}
	
	while($row=mysqli_fetch_array($values))
	{
	
		
		
		
		
		
		?>
		
		
		
		
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="blue" style="width: 400px">
                    <h4 class="title">
					<?php
						echo $row['username'];
						
					
					?>
					
					</h4><!--Name Of User giving answer-->
                    <p class="category">Answer</p>
                </div>
                <div class="card-content table-responsive">
                   <h4>
				   
				   <?php
				   
				   echo $row['answer'];
				   
				   
				   ?></h4><!--Question Here-->

                   <div align="right">
                    <?php
				   
				   echo $row['votes'];
				   
				   
				   ?>
                    <a href="#" "><i  class="material-icons">thumb_up</i></a>
                   </div>
                </div>
            </div>
        </div>
		
		
		
		
		


<?php
	}

?>

</container>

<div id="myModalok" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Enter Your Answer:</h4>
      </div>
      <div class="modal-body">
        <div class="form-group label-floating is-empty">
		<form method="post" action="getanswer.php">
		<input type="hidden" name="qid" value="<?php echo $qid;?>">
        <textarea name="answer" class="form-control" rows="5"></textarea>
    <span class="material-input"></span></div>
      </div>
      <div class="modal-footer">
      <input type="submit" class="btn btn-info" value="POST"></form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>