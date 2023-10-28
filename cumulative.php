<!DOCTYPE html>
<html lang="en">
    <?php 
		include 'head.php';
		include 'config.php'; 
		session_start();
	?>
<body>
    <!--HEADER, no header needed -->
    
    <!-- BODY -->
    <div class="container-fluid">
        <div class="row">
            <div class="jumbotron">
                <h2 class="text-center">


				<?php
					$qus = $_SESSION['counter'];
				if($_SESSION['actual'] == '1'){
					$actualvalue = "Phishing";
				}
				elseif($_SESSION['actual'] == '0'){
					$actualvalue = "Genuine";
				}
				if($qus== 10){
				?>
				<h1><center><b>Cumulative Feedback</b></center></h1><br><br>
				<p>Your score after Phase 1 is: <strong><?php echo $_SESSION['reward'];?></strong> </p>

                </h2></div></div></div>  <?php 
						echo "<a href='game.php'><button class='btn btn-warning'>Return To Game</button></a>"; ?>
       
					<?php mysqli_close($conn);
                } 
                else if($_SESSION['counter']== 33){?>
				<h1><center><b>Cumulative Feedback</b></center></h1><br><br>
				<p>Your score after Phase 2 is: <strong><?php echo $_SESSION['reward'];?></strong> </p>

                </h2></div></div></div>  <?php 
						echo "<a href='game.php'><button class='btn btn-warning'>Return To Game</button></a>"; ?>
       
					<?php mysqli_close($conn);
                } 
                else{?>
                	<h1><center><b>Cumulative Feedback</b></center></h1><br><br>
				<p>Your score after Phase 3 is: <strong><?php echo  $_SESSION['reward'];?></strong> </p>

                </h2></div></div></div>  <?php 
						echo "<a href='end.php'><button class='btn btn-warning'>Submit</button></a>"; ?>
       
					<?php mysqli_close($conn);
                } ?>

  <!--  <FOOTER -->
    <?php include 'footer.php';?>
</body>
</html>