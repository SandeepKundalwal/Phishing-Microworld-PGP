<?php include 'config.php';           

session_start();error_reporting(0);
if(!isset($_SESSION['uid'])) {

//header('Location: http://pratik.acslab.org/index.php');
header('Location: ./index.php');
session_destroy();
   die();
                   }
?>
<!-- End of game -->
<!DOCTYPE html>
<html lang="en">
    <?php include 'head.php'; ?>
    <style>
        .containerx{
            width:600px;
        }
    </style>
<body>
    <!-- HEADER -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <!-- Logo -->
            <div class="row"> <div class=col-md-1> <embed height="50" width="50" src="21.png"></div>
            <div class="col-md-11">
            <div class="navbar-header">
                <a class="navbar-brand">Phishing Email Detection Game</a>
            </div>
                </div></div></div>
    </nav><br> <br> <br><br>
    <!-- BODY -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
				<div class="jumbotron">
				    <?php 
				    $uid = $_SESSION['uid'];
				    $uqid = uniqid($uid."_");
				    $_SESSION["uqid"] = $uqid;
				    $reward = $_SESSION['reward'];
				    $mturk = $_SESSION['mturk'];
				    $time_stp = time();
				    ?>
					<h1>Congrats!</h1> <br><h3> You have completed the game successfully.</h3><br><br>
					<br>
                  <p>Your score is <strong><?php echo  $_SESSION['reward'];?></strong></p><br>
					<p>Thank you for your participation. Please enter the following ID on Amazon MTurk page: <strong><?php echo $_SESSION['uqid']; ?></strong>
					<!--Now, please click the button below to indicate to Academic Prolific that you have completed the study.-->
					</p>
					
					<!--<div class="containerx">          
					<?php    $sqlin = "INSERT INTO end (user_id, unique_id, Mturk_id, reward)
	VALUES('$uid', '$uqid','$mturk', '$reward')";
		$resulto=mysqli_query($conn,$sqlin);

					
					//echo "<a href='http://pratik.acslab.org/end_verif.php'><button class='btn btn-info btn-lg' style=\"position:'relative';left:'25%'\">Click here</button></a>";//?>
					</div>-->
					<br>				   
				</div>
			</div>
        </div>
    </div>
    <!-- FOOTER -->
    <?php include 'footer.php';?>
</body>
</html>