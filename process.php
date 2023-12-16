<?php
include 'config.php';
session_start();
error_reporting(0);

if(!isset($_SESSION['uid'])) {
	$_SESSION['process'] = 'false';
	header('Location: ./index.php');
	die();
} else{
	echo "I am in process.php uid is true";
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		echo $data;
		return $data;
	}

	if(!empty($_POST['reaction'])){
	    $reac = $_POST['reaction'];
        $box="";  
        foreach($reac as $box1){  
            $box .= $box1.",";
		}
        $reaction = $box;
	    $_SESSION['reaction'] = $box;
	} else {  
	    $reac = $_POST['reaction'];
        $box="";  
        foreach($reac as $box1){  
            $box .= $box1.",";
		}
        $reaction = $box;
		$_SESSION['reaction'] = $box;
	}
	
	if(!empty($_POST['myRange'])){
		$confid = test_input($_POST['myRange']);
		$_SESSION['myRange'] = $confid;
	} else {  
		$confid = test_input($_POST['myRange']);
		$_SESSION['myRange'] = $confid;
	}
	
    if(!empty($_POST['reason'])){
	    $reas = $_POST['reason'];
        $chk="";  
        foreach($reas as $chk1){  
            $chk .= $chk1.",";
		}
        $reason = $chk;
	    $_SESSION['reason'] = $chk;
	} else {
	    $reas = $_POST['reason'];
        $chk="";  
        foreach($reas as $chk1){  
            $chk .= $chk1.",";
		}
        $reason = $chk;
		$_SESSION['reason'] = $chk;
	}

	$chkque =  test_input($_POST['ques']);
	$chkOne = test_input($_POST['checkOne']);
	$chkTwo = test_input($_POST['checkTwo']);
	$q1time = test_input($_POST['q1time']);
	$q2time = test_input($_POST['q2time']);
	$q3time = test_input($_POST['q3time']);
	$q4time = test_input($_POST['q4time']);
	$hint_time = test_input($_POST['hint_time']);
	$hint_use = test_input($_POST['hint_use']);
	$prob = test_input($_POST['probability']);
	$click_ques = $_SESSION['ques'];
	$click_id = test_input($_POST['click_id']);

	$_SESSION['atnck1'] = test_input($_POST['atnck1']);
	$_SESSION['atnck2'] = test_input($_POST['atnck2']);
	$_SESSION['checkOne'] = $chkOne;
	$_SESSION['checkTwo'] = $chkTwo;
	$_SESSION['q1time'] = $q1time;
	$_SESSION['q2time'] = $q2time;
	$_SESSION['q3time'] = $q3time;
	$_SESSION['q4time'] = $q4time;
	$_SESSION['click_ques'] = $click_ques;
	$_SESSION['click_id'] = $click_id;
	$_SESSION['hint_time'] = $hint_time;
	$_SESSION['hint_use'] = $hint_use;
	$_SESSION['probability'] = $prob;

	$phish=$chkOne;
	$genu=$chkTwo;
	
	if($chkque < 50){
		$answer = 'phishing';
		$_SESSION["answer"] = 'phishing';
	} elseif($chkque == 50){
		$answer = 'neutral';
		$_SESSION["answer"] = 'neutral';
	} else{
		$answer = 'genuine';
		$_SESSION["answer"] = 'genuine';
	}

	$unqid = $_SESSION['uid'];
	$consent = $_SESSION['consent'];
	$_SESSION['act'] = "";
	$_SESSION['detect'] = "not answered";

	if(($_SESSION['actual'] == '1' && $answer == 'phishing')||($_SESSION['actual'] == 1 && $answer == 'phishing')){
		$_SESSION['act'] = "Phishing";
		$dir = 1;
		$_SESSION['curr_reward'] =  0.02 * abs(50 - $chkque)*$dir;
		$_SESSION['reward'] +=  0.02 * abs(50 - $chkque)*$dir;
		$_SESSION['detect'] = "Correct";
	} else if(($_SESSION['actual'] == '1' && $answer == 'genuine')||($_SESSION['actual'] == 1 && $answer == 'genuine')){
		$_SESSION['act'] = "Phishing";
        $dir = -1;
        $_SESSION['curr_reward'] =  0.02 * abs(50 - $chkque)*$dir;
		$_SESSION['reward'] +=  0.02 * abs(50 - $chkque)*$dir;		
		$_SESSION['detect'] = "Wrong";
	} else if(($_SESSION['actual'] == '0' && $answer == 'phishing')||($_SESSION['actual'] == 0 && $answer == 'phishing')){
		$_SESSION['act'] = "Genuine";
		$dir = -1;
		$_SESSION['curr_reward'] =  0.02 * abs(50 - $chkque)*$dir;
		$_SESSION['reward'] +=  0.02 * abs(50 - $chkque)*$dir;
		$_SESSION['detect'] = "Wrong";
	} else if(($_SESSION['actual'] == '0' && $answer == 'genuine')||($_SESSION['actual'] == 0 && $answer == 'genuine')){
		$_SESSION['act'] = "Genuine";	
		$dir = 1;
		$_SESSION['curr_reward'] =  0.02 * abs(50 - $chkque)*$dir;
		$_SESSION['reward'] +=  0.02 * abs(50 - $chkque)*$dir;
		$_SESSION['detect'] = "Correct";
	} elseif(($_SESSION['actual'] == '0' && $answer == 'neutral')||($_SESSION['actual'] == 0 && $answer == 'neutral')){
	    $_SESSION['act'] = "Genuine";
	    $_SESSION['curr_reward'] =  0.02 * (50 - $chkque);
		$_SESSION['reward'] += 0.02 * (50 - $chkque);
		$_SESSION['detect'] = "Neutral";
	} elseif(($_SESSION['actual'] == '1' && $answer == 'neutral')||($_SESSION['actual'] == 1 && $answer == 'neutral')){
	    $_SESSION['act'] = "Phishing";	
	    $_SESSION['curr_reward'] =  0.02 * (50 - $chkque);
		$_SESSION['reward'] += 0.02 * (50 - $chkque);
		$_SESSION['detect'] = "Neutral";
	}

	$factor1 = 2;
	$qus = $_SESSION['ques'];
	$qus_co = $_SESSION['counter'] + 1;

	$f1 = $_SESSION['factor1'];
	$f2 = $_SESSION['factor2'];
	$cog = $_SESSION['cogbias'];
	$gen = $_SESSION['generation'];
	
    $sqlin = "INSERT INTO gameph (consent, id, factor1, factor2, quesno, ques_counter, ans, ansval, conf, reac, reas, Cognitive_bias, Generation, Q1_time, Q2_time, Q3_time, Q4_time, hint, hint_time, hint_probability)
	VALUES('$consent', '$unqid', '$f1', '$f2', '$qus','$qus_co', '$answer','$chkque', '$confid', '$reaction', '$reason','$cog','$gen', '$q1time', '$q2time', '$q3time', '$q4time', '$hint_use', '$hint_time', '$prob')";
	
	$resulto=mysqli_query($conn,$sqlin);

    $sqlinp = "INSERT INTO click_tracker (Mturk_id, Trial) VALUES ('$click_id', '$click_ques')";
	
	$resulto=mysqli_query($conn,$sqlinp);

	// trackingData logic here
	if(!empty($_POST['trackingData'])){
		$trackingData = json_decode($_POST['trackingData'], true);

		foreach($trackingData as $data){
			// Check and set values if keys exist
			$xAxis = isset($data['x_axis']) ? $data['x_axis'] : null;
			$yAxis = isset($data['y_axis']) ? $data['y_axis'] : null;
			$timestamp = isset($data['timestamp']) ? $data['timestamp'] : null;
			$datetimestamp = isset($data['datetimestamp']) ? $data['datetimestamp'] : null;


			/* table structure of gaze_data
				user_id VARCHAR(24),
				time_stamp TIMESTAMP,
				ques_no INT,
				x_coordinate DECIMAL(27, 20),
				y_coordinate DECIMAL(27, 20)
			*/
			$sqlGazeData = "INSERT INTO gaze_data (user_id, time_stamp, ques_no, x_coordinate, y_coordinate) 
								VALUES ('$unqid', '$timestamp', 'qus', '$xAxis', '$yAxis')";
			$resultGazeData = mysqli_query($conn, $sqlGazeData);
		}
	}


	$_SESSION['process'] = 'true';

  	if($factor1 == 1){
		if($qus<10|| ($qus>10 && $qus<33) || ($qus>33 && $qus<43)){
			$_SESSION['counter'] = $_SESSION['counter'] +1;
			header('Location: ./game.php');
  		} elseif($qus_co == 10 || $qus_co == 33 || $qus_co == 43){
  		    $_SESSION['counter'] = $_SESSION['counter'] +1;
        	header('Location: ./cumulative.php');
		} else{
  			echo "<a href='end.php'><button class='btn btn-warning'>Submit</button></a>";
  		}
  	} else{
		if($qus_co < 10){
			$_SESSION['counter'] = $_SESSION['counter'] +1;
			header('Location: ./game.php');
			//echo $_SESSION['reaction'].$_SESSION['reason'].$_SESSION['myRange'].$_SESSION['answer'];
		} elseif($qus_co > 10 && $qus_co < 33) {
			$_SESSION['counter'] = $_SESSION['counter'] +1;
			header('Location: ./feedback.php');
		} elseif($qus_co > 33 && $qus_co < 43){
			$_SESSION['counter'] = $_SESSION['counter'] +1;
			header('Location: ./game.php');
		} elseif($qus_co == 10 || $qus_co == 33){
			$_SESSION['counter'] = $_SESSION['counter'] +1;
			header('Location: ./cumulative.php');
		} elseif($qus_co == 43){
			header('Location: ./end.php');
		}
	}
	die();
	mysqli_close($conn);
}

?>