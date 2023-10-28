<!-- Game page when landslide occurs -->
<!DOCTYPE html>
<html lang="en">
    <?php 
		//header('Location: ./game.php');
		include 'head.php';
		include 'config.php'; 
		session_start();
		//unset($_SESSION['process']); 
	?>
<body>
    <!--HEADER, no header needed -->
    
    <!-- BODY -->
    <div class="container-fluid">
        <div class="row">
            <div class="jumbotron">
                <h2 class="text-center">
				<?php
				if($_SESSION['actual'] == '1' || $_SESSION['actual'] == 1){
					$actualvalue = "Phishing";
				}
				elseif($_SESSION['actual'] == '0' || $_SESSION['actual'] == 0){
					$actualvalue = "Genuine";
				}
				?>
				<?php if($_SESSION['ques'] == 16 ||  $_SESSION['ques'] == 22 ||  $_SESSION['ques'] == 28){
				    ?>
				<h1><center><b>Feedback</b></center></h1><br><br>
				<p>This was <strong>an attention check</strong> email.<br>
		Your score is <strong><?php echo  $_SESSION['reward'];?></strong></p>
		<?php }
		else{
		?>
						<h1><center><b>Feedback</b></center></h1><br><br>
				<p>This was <strong><?php echo $actualvalue;?></strong> email, and your detection was <strong><?php echo  $_SESSION['detect'];?></strong><br>
		Your current score is <strong><?php echo  $_SESSION['curr_reward'];?></strong>
		Your cumulative score is <strong><?php echo  $_SESSION['reward'];?></strong></p>
	<?php	}?>
		            </h2></div></div></div>  <?php echo "<a href='game.php'><button class='btn btn-warning'>Return To Game</button></a>"; 
						?>
			<!-- /*
					//code for images to be displayed
					
					$scenario_id = $_SESSION['scenario_id'];
					if($_SESSION['message_fatality']) {
						$sqldth = "SELECT image_source FROM death_images WHERE scenario_id='$fatality_img'";
						//echo $sqldth;
						if($resultdth = mysqli_query($conn,$sqldth)){
						   $i = 0;
						   $rowdth1=array();
							while($rowdth=mysqli_fetch_array($resultdth)){
								$rowdth1[$i] = $rowdth['image_source'];
								$i++;
							}
							$random_keys_dth = array_rand($rowdth1);
							
							$dth_img_src = $rowdth1[$random_keys_dth];
							
							echo "<div class='col-md-4'><embed height='400' width='100%' src='";echo $dth_img_src; echo "'></div>";
						}
					}
					if($_SESSION['message_injury']){
						$sqlinj = "SELECT image_source FROM injury_images WHERE scenario_id='$injury_img'";
						//echo $sqlinj;
						if($resultinj = mysqli_query($conn,$sqlinj)){
							$i =0 ;
							while($rowinj=mysqli_fetch_array($resultinj,MYSQLI_NUM)) {
								$rowinj1[$i] = $rowinj[0];$i++;
							}
							$random_keys_inj = array_rand($rowinj1);
							$inj_img_src = $rowinj1[$random_keys_inj];
							echo "<div class='col-md-4'><embed height='400' width='100%' src='";echo $inj_img_src; echo "'></div>";
						}
					}
					if($_SESSION['message_property']){
						//~drought
						$sqlprop = "SELECT image_source FROM property_images WHERE scenario_id='$property_img'";
						//echo $sqlprop;
						if($resultprop = mysqli_query($conn,$sqlprop)){
							$i=0;
							while($rowprop=mysqli_fetch_array($resultprop,MYSQLI_NUM)) {
								$rowprop1[$i] = $rowprop[0];$i++;
							}
							
							$random_keys_prop = array_rand($rowprop1);
							$prop_img_src = $rowprop1[$random_keys_prop];
							
							echo "<div class='col-md-4'><embed height='400' width='100%' src='";echo $prop_img_src; echo "'></div>";
						}
					}  */    -->         
					<?php mysqli_close($conn);
                ?>
  <!--  <FOOTER -->
    <?php include 'footer.php';?>
</body>
</html>