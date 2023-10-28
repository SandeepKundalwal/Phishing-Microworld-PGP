<?php session_start();
include 'config.php';
error_reporting(0);
if(!isset($_SESSION['uid']) || $_SESSION['consent'] != 'true') {

?>

<?php include 'head.php';?>
<body>
    <!--header -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <!-- Logo -->
            <div class="row"> <div class=col-md-1> <a href="index.php"><embed height="50" width="50" src="21.png"></a></div>
            <div class="col-md-11">
            <div class="navbar-header">
                
                <a href="index.php" class="navbar-brand kalam">Phishing Email Detection Game</a>
            </div>
            <!-- Menu Items -->
            <div class="collapse navbar-collapse" id="mainNavBar">
                <ul class="nav navbar-nav">
                    <li> <a href="index.php" class="kalam">Home</a> </li>
                    <li  class="active" class="kalam"> <a href="instruction.php">Instructions</a> </li> 
                    <li> <a href="contact.php" class="kalam">Contact Us</a> </li> 
                </ul>
            </div>
            </div></div></div>
    </nav><br><br><br><br>
    
    <!--body -->
    <div class="container-fluid">
<div class="jumbotron"><h1 class="text-center">INSTRUCTIONS</h1></div>
        
        <div class="jumbotron">
<!--<p class="text-justify">
instructions start
Imagine you are a resident of India and you with your family live on a property owned by you within the country. India as a country is prone to multiple adverse effects of climate change such as cyclones, floods, and droughts. These adverse effects of climate change can cause fatalities and injuries to you and your family. In addition, they may also damage your property and cause a loss to your property wealth. 
<br><br><strong>In this task, you will be repeatedly making annual investment decisions against climate change over a period of several years.</strong> For the purpose of these investments, a fictitious currency called “EC” has been proposed. Every year, you earn EC 8760. This money is your annual income and you may use a part or whole of it for making climate change insurance investments or investments for interventions that mitigate climate change. 
<br><br><strong>For example, you may buy different insurance plans against climate change from your annual income. </strong> There are three types of insurance plans namely, life, health, and property insurance. Life insurance compensates you if there is a death due to adverse effects of climate change. Health insurance compensates you if there is an injury due to adverse effects of climate change. Property insurance compensates you if there is property damage due to adverse effects of climate change.
<br><br><strong>In contrast, you may decide to invest your annual income into mitigation measures against climate change.</strong>. The money you invest in mitigation will be used for restoring forests, removing carbon-dioxide from the atmosphere, reducing carbon emissions, and developing a number of eco-friendly technologies. 
<br><br><strong>In any year, the chance of climate change is computed by the following equation:</strong>
<br><img src="ce.png" style="display: block;
  margin-left: auto;
  margin-right: auto;" alt="linear">
  Where, p is the chance of climate change; &Sigma;investment<sub>t</sub>  are the sum of investments made in mitigating climate change between the first year and the current <i>n<sup>th</sup></i> year; and,  &Sigma;income<sub>t</sub>  is the sum of income available to you for making investments between the first year and the current  <i>n<sup>th</sup></i> year. For example, if your investment was EC 0 and EC 4380 in mitigation in the first two years and your income in each year was EC 8760, then the chance of climate change would be 0.99 (= 1 – 0.85 * (0+4380)<sup>3</sup> / (8760+8760)<sup>3</sup>).

<br><br><strong>Your total wealth at any point in the task is the following: sum of your income that you did not put into mitigation or use for buying insurance + your property wealth - damages to you, your family, and to your property due to climate change.</strong> Your property wealth is assumed to be EC 50,00,000 at the start of the task. The income used for mitigating climate change or for buying insurance does not contribute to your total wealth. 
<br><br>If climate change occurs in a year, then there may be adverse effects (e.g., cyclones, floods, and droughts). These adverse effects may cause injuries, fatalities, or property damages (all these three could occur independently of the others). Injury and fatality to you or your family due to adverse effects may cause a decrease of your yearly income if health and life insurance are not bought by you for the respective year. Similarly, property damage due to adverse effects may cause a decrease of your property wealth if property insurance is not bought by you for the respective year. 
<br><br>If you did not buy life or health insurance and one of the adverse effects due to climate change took place, then your annual income may be reduced by 25% in case of fatality (no life insurance) and by 12.5% in case of injury (no health insurance) of its current value. Similarly, if you did not buy property insurance and cyclones or floods took place, then your property wealth may be reduced by 50% of its current value. The reduction in income and property wealth due to fatalities, injuries, and property damages are permanent and remain for the duration of the task.
<br><br><strong>Your goal is to decide how much to invest annually into mitigation and for buying insurance to maximize your total wealth</strong> (sum of your income that you did not put into mitigation or use for buying insurance + your property wealth - damages to you, your family, and to your property due to climate change). You will be compensated for completing the game at the rate initially advertised. You will only be eligible for compensation if you have completed the game in full and supplied the appropriate confirmation code. There is no partial payment if you do not complete the study. You will not be penalized if you choose to withdraw from the study without completing it, but you will not be compensated either.<br>
<br><br> <strong>BEST OF LUCK!</strong>-->        <p>Imagine yourself to be Miss Lily. You have an email account where you receive emails of different kinds related to your personal or professional life. <b>Your objective is to read emails in your inbox and suggest the likelihood of them being genuine (from senders with good intentions) or phishing (from senders with malicious intentions).</b> The task is shown in Figure 1 below.</p><br><br>
<center><div id="ing1" class="step" data-x="3500" data-y="-850" data-rotate="270" data-scale="6">
        <embed src="message_day/email.jpg" height="400" width="900">
    </div>
<h4><b>Figure 1.</b> Interface to read and decide on emails.</h4></center>

<br><br><p>To indicate the likelihood of an email being genuine or phishing, you need to move the slider in Q1 right or left, respectively (<b>the slider is placed in the middle and it shows an undecided response</b>). Next, in Q2, you need to indicate the confidence level of your response you made in Q1 (<b>the slider is placed in the middle and it shows a response that is intermediate confidence</b>). In Q3, you need to indicate what features of the email (sender, date, subject, or body) made you decide your response in Q1. Finally, Q4 asks you for your reaction to the email shown. 

<br><br><b>Once you are done responding to Q1 to Q4 for the email shown, you need to click the “Submit” button</b>, which may reveal feedback about the email’s genuinity (or maliciousness) or may present you with the next email. You may be shown several emails in this task and you need to follow the above procedure for every email displayed.
<br><br>
There are three phases in the game. After each phase the cumulative score will be shown to participants. However, in the second phase participants may or may not receive feedback after each email.
<br><br>

There might be attention checks in the experiment. Please stay attentive throughout the study.<br><br>

The score in this task is weighted. If you keep the slider at 50% (neutral) for an email then your score will be 0. If the likelihood marked by you for an email is more than 50% in the correct direction (genuine or phishing) or if the likelihood marked by you for an email is more than 50% in the incorrect direction (genuine or phishing), then you will gain or lose points, respectively. Thus, your score for each email you decide will be calculated based on the following formula:
<b><center><h3>Score = 0.02 * |50 - slider position| * direction</h3></center>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;where, direction = { 1, for the correct direction,
                    <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;-1, for the incorrect direction}

</b>

</p>
<br><p>You will be given the base payment as indicated in the job advertisement on MTurk. <b>In addition, your score will be totaled across all emails judged by you and top-10 scorers will enter a lucky draw for a INR 1000 Amazon gift card.</b> You will only be paid if you have fully completed the study and responded to attention check questions.

<br><br>Please note <b>your objective is to read emails in your inbox and suggest the likelihood of them being genuine or phishing.</b>
<br><br><br>
<strong>BEST OF LUCK!</strong></p>
<!-- instructions end-->        
</div>
        </div>
<?php include 'footer.php'; ?>
</body>
</html>

<?php
} else {
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
};
if(!empty($_POST['mturk']) && !empty($_POST['age']) && !empty($_POST['gender']) && !empty($_POST['ed']) && !empty($_POST['major']))
    {  
        $mturk = test_input($_POST['mturk']);
        $_SESSION['mturk'] = $mturk;
        $age = test_input($_POST['age']);
        $gender = test_input($_POST['gender']);
        $ed = test_input($_POST['ed']);
        $major = test_input($_POST['major']);
      //  $email = $_POST['email'];
    }
    $unqid = $_SESSION['uid'];
    $_SESSION['name'] = 'Guest';
    $conn = new mysqli("localhost", "root", "T22051@gmandi", "u978805288_PEDV2");
    $sql = "INSERT INTO demographic (id, mturk_id, Age, Gender, Education, Major) 
VALUES ('$unqid','$mturk','$age','$gender','$ed','$major')";

	 if ($conn->query($sql) === TRUE) 
	{    
	$_SESSION['question']=1;
		$_SESSION['conuter'] = 1;

	$_SESSION['reward']= 0;
//	$factor1 = "SELECT `factor1` FROM `condition` ORDER BY RAND() LIMIT 1";
	#$sqlnbr = "SELECT pay FROM nbr_pay WHERE day=" . $_SESSION['day'] . ";" ;
//	$resultfactor1 = mysqli_query($conn,$factor1);
//	$rowfactor1=mysqli_fetch_array($resultfactor1,MYSQLI_ASSOC);
	#$_SESSION['nbr_pay'] = $rownbr["pay"];
//	$_SESSION['factor1'] =$rowfactor1["factor1"];
//	if($_SESSION['factor1']==1 || $_SESSION['factor1']=='1'){
//		$f1 = 1;
//	}
//	else{
//		$f1 = 2;
//	}
//	$factor1 = "SELECT `factor1` FROM `gameph` order by `sno` DESC LIMIT 1";
	#$sqlnbr = "SELECT pay FROM nbr_pay WHERE day=" . $_SESSION['day'] . ";" ;
//	$resultfactor1 = mysqli_query($conn,$factor1);
//	$rowfactor1=mysqli_fetch_array($resultfactor1,MYSQLI_ASSOC);
	#$_SESSION['nbr_pay'] = $rownbr["pay"];
//	$_SESSION['factor1'] =$rowfactor1["factor1"];
//$_SESSION['factor1'] = ($_SESSION['factor1']+1)%2;

#	$factor2 = "SELECT `factor2` FROM `gameph` WHERE `quesno`= 43 ORDER BY `sno` DESC LIMIT 1";
#	$resultfactor2 = mysqli_query($conn,$factor2);
#	$rowfactor2=mysqli_fetch_array($resultfactor2,MYSQLI_ASSOC);
	#$_SESSION['nbr_pay'] = $rownbr["pay"];
#	$_SESSION['factor2'] =$rowfactor2["factor2"];
#	$_SESSION['factor2'] = ($_SESSION['factor2']+1)%2;
    $_SESSION['factor2'] = 0;
	
	$condi = "SELECT `condition_number` FROM `condition` ORDER BY RAND() LIMIT 1";
	#$sqlnbr = "SELECT pay FROM nbr_pay WHERE day=" . $_SESSION['day'] . ";" ;
	$resultcondi = mysqli_query($conn,$condi);
	$rowcondi=mysqli_fetch_array($resultcondi,MYSQLI_ASSOC);
	#$_SESSION['nbr_pay'] = $rownbr["pay"];
	$_SESSION['cond'] =$rowcondi["condition_number"];
	$_SESSION['ques'] = 1;
	//$_SESSION['reward'] = 0
?> 

<!DOCTYPE html>
<html lang="en">
    <?php include 'head.php'; ?>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <!-- Logo -->
            <div class="row"> <div class=col-md-1> <embed height="50" width="50" src="21.png"></div>
            <div class="col-md-11">
            <div class="navbar-header">
                <a class="navbar-brand kalam">Phishing Email Detection Game</a>
            </div>
                </div></div></div>
    </nav> <br><br><br><br>
    <div class="container">
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Good to go!</strong> Entry Submitted Successfully.
    </div>
        <div class="jumbotron">
    <h1 class="text-center">Welcome!</h1><br><br><br><br>
    <p class="text-justify">
       
<!-- instructions start
Imagine you are a resident of India and you with your family live on a property owned by you within the country. India as a country is prone to multiple adverse effects of climate change such as cyclones, floods, and droughts. These adverse effects of climate change can cause fatalities and injuries to you and your family. In addition, they may also damage your property and cause a loss to your property wealth. 
<br><br><strong>In this task, you will be repeatedly making annual investment decisions against climate change over a period of several years.</strong> For the purpose of these investments, a fictitious currency called “EC” has been proposed. Every year, you earn EC 8760. This money is your annual income and you may use a part or whole of it for making climate change insurance investments or investments for interventions that mitigate climate change. 
<br><br><strong>For example, you may buy different insurance plans against climate change from your annual income. </strong> There are three types of insurance plans namely, life, health, and property insurance. Life insurance compensates you if there is a death due to adverse effects of climate change. Health insurance compensates you if there is an injury due to adverse effects of climate change. Property insurance compensates you if there is property damage due to adverse effects of climate change.
<br><br><strong>In contrast, you may decide to invest your annual income into mitigation measures against climate change.</strong>. The money you invest in mitigation will be used for restoring forests, removing carbon-dioxide from the atmosphere, reducing carbon emissions, and developing a number of eco-friendly technologies. 
<br><br><strong>In any year, the chance of climate change is computed by the following equation:</strong>
<br><img src="ce.png" style="display: block;
  margin-left: auto;
  margin-right: auto;" alt="linear">
Where, p is the chance of climate change; &Sigma;investment<sub>t</sub>  are the sum of investments made in mitigating climate change between the first year and the current <i>n<sup>th</sup></i> year; and,  &Sigma;income<sub>t</sub>  is the sum of income available to you for making investments between the first year and the current  <i>n<sup>th</sup></i> year. For example, if your investment was EC 0 and EC 4380 in mitigation in the first two years and your income in each year was EC 8760, then the chance of climate change would be 0.99 (= 1 – 0.85 * (0+4380)<sup>3</sup> / (8760+8760)<sup>3</sup>).
<br><br><strong>Your total wealth at any point in the task is the following: sum of your income that you did not put into mitigation or use for buying insurance + your property wealth - damages to you, your family, and to your property due to climate change.</strong> Your property wealth is assumed to be EC 50,00,000 at the start of the task. The income used for mitigating climate change or for buying insurance does not contribute to your total wealth. 
<br><br>If climate change occurs in a year, then there may be adverse effects (e.g., cyclones, floods, and droughts). These adverse effects may cause injuries, fatalities, or property damages (all these three could occur independently of the others). Injury and fatality to you or your family due to adverse effects may cause a decrease of your yearly income if health and life insurance are not bought by you for the respective year. Similarly, property damage due to adverse effects may cause a decrease of your property wealth if property insurance is not bought by you for the respective year. 
<br><br>If you did not buy life or health insurance and one of the adverse effects due to climate change took place, then your annual income may be reduced by 25% in case of fatality (no life insurance) and by 12.5% in case of injury (no health insurance) of its current value. Similarly, if you did not buy property insurance and cyclones or floods took place, then your property wealth may be reduced by 50% of its current value. The reduction in income and property wealth due to fatalities, injuries, and property damages are permanent and remain for the duration of the task.
<br><br><strong>Your goal is to decide how much to invest annually into mitigation and for buying insurance to maximize your total wealth</strong> (sum of your income that you did not put into mitigation or use for buying insurance + your property wealth - damages to you, your family, and to your property due to climate change). You will be compensated for completing the game at the rate initially advertised. You will only be eligible for compensation if you have completed the game in full and supplied the appropriate confirmation code. There is no partial payment if you do not complete the study. You will not be penalized if you choose to withdraw from the study without completing it, but you will not be compensated either.<br>
<br><br> <strong>BEST OF LUCK!</strong>
instructions end-->        
<!-- instructions end

         </p>       -->
<p>Imagine yourself to be Miss Lily. You have an email account where you receive emails of different kinds related to your personal or professional life. <b>Your objective is to read emails in your inbox and suggest the likelihood of them being genuine (from senders with good intentions) or phishing (from senders with malicious intentions).</b> The task is shown in Figure 1 below.</p><br><br>
<center><div id="ing1" class="step" data-x="3500" data-y="-850" data-rotate="270" data-scale="6">
        <embed src="message_day/email.jpg" height="400" width="900">
    </div>
<h4><b>Figure 1.</b> Interface to read and decide on emails.</h4></center>

<br><br><p>To indicate the likelihood of an email being genuine or phishing, you need to move the slider in Q1 right or left, respectively (<b>the slider is placed in the middle and it shows an undecided response</b>). Next, in Q2, you need to indicate the confidence level of your response you made in Q1 (<b>the slider is placed in the middle and it shows a response that is intermediate confidence</b>). In Q3, you need to indicate what features of the email (sender, date, subject, or body) made you decide your response in Q1. Finally, Q4 asks you for your reaction to the email shown. 

<br><br><b>Once you are done responding to Q1 to Q4 for the email shown, you need to click the “Submit” button</b>, which may reveal feedback about the email’s genuinity (or maliciousness) or may present you with the next email. You may be shown several emails in this task and you need to follow the above procedure for every email displayed. <br><br>
There are three phases in the game. After each phase the cumulative score will be shown to participants. However, in the second phase participants may or may not receive feedback after each email.
<br><br>

There might be attention checks in the experiment. Please stay attentive throughout the study.<br><br>

The score in this task is weighted. If you keep the slider at 50% (neutral) for an email then your score will be 0. If the likelihood marked by you for an email is more than 50% in the correct direction (genuine or phishing) or if the likelihood marked by you for an email is more than 50% in the incorrect direction (genuine or phishing), then you will gain or lose points, respectively. Thus, your score for each email you decide will be calculated based on the following formula:
<b><center><h3>Score = 0.02 * |50 - slider position| * direction</h3></center>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;where, direction = { 1, for the correct direction,
                    <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;-1, for the incorrect direction}

</b>

</p>
<br><p>You will be given the base payment as indicated in the job advertisement on MTurk. <b>In addition, your score will be totaled across all emails judged by you and top-10 scorers will enter a lucky draw for a INR 1000 Amazon gift card.</b> You will only be paid if you have fully completed the study and responded to attention check questions.

<br><br>Please note <b>your objective is to read emails in your inbox and suggest the likelihood of them being genuine or phishing.</b>
<br><br><br>
<strong>BEST OF LUCK!</strong></p>
        
    
    <a href="game.php"><button type="button" class="btn btn-primary btn-lg" style="position:relative;left:50%">PLAY</button></a>
    </div></div>
    <?php include 'footer.php'; ?>
</body>
</html>

<?php

} else {
?>
<?php echo $_SESSION['uid'].$_SESSION['consent'].$sql.$_SESSION['factor1']; ?>

<!DOCTYPE html>
<html lang="en">
    <?php include 'head.php'; ?>
<body>
    <div class="container">
    <h1>Sorry!</h1><br><br><h3>Entry could not submitted. Please <a href="index.php">try again</a> after sometime.</h3>
    </div>

</body>
</html>

<?php
}
}
?>