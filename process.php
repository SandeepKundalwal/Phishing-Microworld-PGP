<?php
include 'config.php';
session_start();
error_reporting(0);

if(!isset($_SESSION['uid'])) {
	$_SESSION['process'] = 'false';
	//header('Location: http://pratik.acslab.org/index.php');

	header('Location: ./index.php');
		die();

} 

 else{
	//echo "I am in process.php uid is true";
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		#echo $data;
		return $data;
	}

//	if(!empty($_POST['reaction'])) {
//		$reaction = test_input($_POST['reaction']);
//		$_SESSION['reaction'] = $reaction;
//	} else {  
//		$reaction = test_input($_POST['reaction']);
//		$_SESSION['reaction'] = $reaction;
//	}
	if(!empty($_POST['reaction'])){
	    $reac = $_POST['reaction'];
        $box="";  
        foreach($reac as $box1){  
            $box .= $box1.",";}
            $reaction = $box;
	    $_SESSION['reaction'] = $box;
	} else {  
	    $reac = $_POST['reaction'];
        $box="";  
        foreach($reac as $box1){  
            $box .= $box1.",";}
            $reaction = $box;
		$_SESSION['reaction'] = $box;
	}
	
	
	
	if(!empty($POST['myRange'])){
		$confid = test_input($POST['myRange']);
		$_SESSION['myRange'] = $confid;
	} else {  
		$confid = test_input($_POST['myRange']);
		$_SESSION['myRange'] = $confid;}
//	if(!empty($POST['Reason1']||$POST['Reason2']||$POST['Reason3'])){
    if(!empty($_POST['reason'])){
	   // $_reason1 = test_input($_POST['Reason1']);
	    //$_reason2 = test_input($_POST['Reason2']);
	    //$_reason3 = test_input($_POST['Reason3']);
	    $reas = $_POST['reason'];
        $chk="";  
        foreach($reas as $chk1){  
            $chk .= $chk1.",";}
            $reason = $chk;
	    //$reason = $reason1 . ", " . $reason2. ", "."$reason3";
	    $_SESSION['reason'] = $chk;
	} else {  
	   // $_reason1 = test_input($_POST['Reason1']);
	    //$_reason2 = test_input($_POST['Reason2']);
	    //$_reason3 = test_input($_POST['Reason3']);
	    //$reason = $reason1 . ", " . $reason2. ", "."$reason3";
	    $reas = $_POST['reason'];
        $chk="";  
        foreach($reas as $chk1){  
            $chk .= $chk1.",";}
            $reason = $chk;
		$_SESSION['reason'] = $chk;
	    
	}
		//document.form2.Checkbox1.checked || document.form2.Checkbox2.checked || document.getElementById('myRange').checked || document.getElementById('reaction').checked || document.getElementById('reason').checked
//	$reason = $reason1 . ", " . $reason2. ", "."$reason3";
//	$_SESSION['reason'] = $reason;
	$chkque =  test_input($_POST['ques']);
	$chkOne = test_input($_POST['checkOne']);
	$chkTwo = test_input($_POST['checkTwo']);
	$q1time = test_input($_POST['q1time']);
	$q2time = test_input($_POST['q2time']);
	$q3time = test_input($_POST['q3time']);
	$q4time = test_input($_POST['q4time']);
	$click_ques = test_input($_POST['click_ques']);
	$click_id = test_input($_POST['click_id']);
	$_SESSION['atnck1'] = test_input($_POST['atnck1']);
	$_SESSION['atnck2'] = test_input($_POST['atnck2']);

	// remove it no matter what; I am just making it static
	$click_ques = 0;

	//$chkThree = test_input($_POST['checkThree']);
	//$tspan=$_SESSION['time_span'];
	// Insurance check button
	$_SESSION['checkOne'] = $chkOne;
	$_SESSION['checkTwo'] = $chkTwo;
	$_SESSION['q1time'] = $q1time;
	$_SESSION['q2time'] = $q2time;
	$_SESSION['q3time'] = $q3time;
	$_SESSION['q4time'] = $q4time;
	$_SESSION['click_ques'] = $click_ques;
	$_SESSION['click_id'] = $click_id;

	//$_SESSION['checkThree'] = $chkThree;

	$phish=$chkOne;
	$genu=$chkTwo;
//	if($_SESSION['checkOne'] == '0' && $_SESSION['checkTwo'] = 'genuine'){
//		$answer = 'genuine';
//		$_SESSION["answer"] = 'genuine';
//	}
//	else if($_SESSION['checkTwo'] == '0' && $_SESSION['checkOne'] == 'phishing'){
//		$answer = 'phishing';
//		$_SESSION["answer"] = 'phishing';
	
	if($chkque < 50){
		$answer = 'phishing';
		$_SESSION["answer"] = 'phishing';
	}
	elseif($chkque == 50){
	    		$answer = 'neutral';
		$_SESSION["answer"] = 'neutral';
	}
	else{
		$answer = 'genuine';
		$_SESSION["answer"] = 'genuine';
	}
	//if($_SESSION["answer"] == 'phishing'){
	//	$answer = 'phishing';
	//} else{
	//	$answer == 'genuine';
	//}
	//$pinsur=$chkThree;

	//$day = $_SESSION['day'];
	$unqid = $_SESSION['uid'];
	$consent = $_SESSION['consent'];
	$_SESSION['act'] = "";
	$_SESSION['detect'] = "not answered";

	if(($_SESSION['actual'] == '1' && $answer == 'phishing')||($_SESSION['actual'] == 1 && $answer == 'phishing')){
		$_SESSION['act'] == "Phishing";
		$dir = 1;
		$_SESSION['curr_reward'] =  0.02 * abs(50 - $chkque)*$dir;
		$_SESSION['reward'] +=  0.02 * abs(50 - $chkque)*$dir;
		$_SESSION['detect'] = "Correct";
	}
	else if(($_SESSION['actual'] == '1' && $answer == 'genuine')||($_SESSION['actual'] == 1 && $answer == 'genuine')){
		$_SESSION['act'] == "Phishing";
        $dir = -1;
        $_SESSION['curr_reward'] =  0.02 * abs(50 - $chkque)*$dir;
		$_SESSION['reward'] +=  0.02 * abs(50 - $chkque)*$dir;		
		$_SESSION['detect'] = "Wrong";
	}
	else if(($_SESSION['actual'] == '0' && $answer == 'phishing')||($_SESSION['actual'] == 0 && $answer == 'phishing')){
		$_SESSION['act'] == "Genuine";
		$dir = -1;
		$_SESSION['curr_reward'] =  0.02 * abs(50 - $chkque)*$dir;
		$_SESSION['reward'] +=  0.02 * abs(50 - $chkque)*$dir;
		$_SESSION['detect'] = "Wrong";
	}
	else if(($_SESSION['actual'] == '0' && $answer == 'genuine')||($_SESSION['actual'] == 0 && $answer == 'genuine')){
		$_SESSION['act'] == "Genuine";	
		$dir = 1;
		$_SESSION['curr_reward'] =  0.02 * abs(50 - $chkque)*$dir;
		$_SESSION['reward'] +=  0.02 * abs(50 - $chkque)*$dir;
		$_SESSION['detect'] = "Correct";
	}
	elseif(($_SESSION['actual'] == '0' && $answer == 'neutral')||($_SESSION['actual'] == 0 && $answer == 'neutral')){
	    $_SESSION['act'] == "Genuine";
	    $_SESSION['curr_reward'] =  0.02 * (50 - $chkque);
		$_SESSION['reward'] += 0.02 * (50 - $chkque);
		$_SESSION['detect'] = "Neutral";
	}
		elseif(($_SESSION['actual'] == '1' && $answer == 'neutral')||($_SESSION['actual'] == 1 && $answer == 'neutral')){
	    $_SESSION['act'] == "Phishing";	
	    $_SESSION['curr_reward'] =  0.02 * (50 - $chkque);
		$_SESSION['reward'] += 0.02 * (50 - $chkque);
		$_SESSION['detect'] = "Neutral";
	}
	//$conn = new mysqli("localhost", "root", "","acs_draft1");
    
	//Amount invested in mitigation 
	//$_SESSION['cumulative_invest'] = $_SESSION['cumulative_invest'] + $invest;
	//$cumulative_invest = $_SESSION['cumulative_invest'];
	// return mitigation is 0.84
	//$M = $_SESSION['return_mitigation'];
	//money ini is property wealth
	//$money_ini = $_SESSION['money_ini'];
	//dampening factor
	//$d_f_inv = $_SESSION['d_f_inv'];
	//wealth property is 0.5
	//$wealth_property = $_SESSION['wealth_property'];
	
	//income_unaffected_cumulative:total of income, daily_income: amount available to invest
	//$_SESSION['income_unaffected_cumulative'] = $_SESSION['income_unaffected_cumulative'] + $_SESSION['daily_income'];
	//$income_unaffected_cumulative = $_SESSION['income_unaffected_cumulative'];
	//$p_property = $_SESSION['p_property'];// P_property=0.3
	//$p_injury = $_SESSION['p_injury'];//p_injury=0.9
	//$p_fatality = $_SESSION['p_fatality'];//P_fatality=0.09
	//$daily_income = $_SESSION['daily_income'];//daily_income: amount available to invest
	//$w_i = $_SESSION['weight_invest'];//w_invest=0.7
	//$inj_loss = $_SESSION['injury_daily_inc_loss'];// loss due to injury is0.25
	//$fat_loss = $_SESSION['fatality_daily_inc_loss'];//loss due to fatality is 0.5
	//processing part
	//outputs

	//$rand_property = round(mt_rand() / mt_getrandmax(),5);//generate random number for Property
	//$rand_fatality = round(mt_rand() / mt_getrandmax(),5);//generate random number for fatality
	//$rand_injury = round(mt_rand() / mt_getrandmax(),5);//generate random number for injury
	
	//$p_temporal = $_SESSION['p_temporal'];
	//$p_spatial = $_SESSION['p_spatial'];
	//$p_rain = $p_temporal * $p_spatial;
	//$p_rain = $_SESSION['p_rain'];

	//$p_investment = $_SESSION['p_invest'];//p_invest: prob of climate change due to human investment factor
	//$p_investment = 1 - $M * (pow($cumulative_invest,3) / pow($income_unaffected_cumulative,3)); //Main Equation
	//$_SESSION['p_invest'] = $p_investment; 
	
	//$deciding_factor=rand(0,1);
	//$p_landslide = $p_investment; // deciding factor for climate change
	//$_SESSION['p_landslide'] = $p_landslide;
	
	//$landslide = 0; // 0 : ~ climate change, 1: climate change
	//$damage_property = 0;
	//$damage_fatality = 0;
	//$damage_injury = 0; 
	//$landslide_threshold = round(mt_rand() / mt_getrandmax(),5); 
    
    //if($p_landslide >= $landslide_threshold){ 
		//climate change occured
	//	$landslide = 1;
	//	if($p_property >= $rand_property) {
			//property damage
		//	$damage_property =1 ;
			//$_SESSION['dmg_property']=$_SESSION['daily_income'];
		//	if ($_SESSION['checkThree']==0){
				// ~ property insurance
		//		$damage = $wealth_property * $money_ini;
		//		$_SESSION['money_ini'] = ( 1 - $wealth_property) * $_SESSION['money_ini'];
		//	}else{ 
				//property insurance
		//		$_SESSION['NcheckThree'] = $_SESSION['NcheckThree']+1;
		//		$NcheckThree = $_SESSION['NcheckThree'];
		//		$damage = Round((1.0/(($tspan+1)-1)*($NcheckThree-1)),1) * $money_ini;
		//		$_SESSION['money_ini'] = $_SESSION['money_ini']-$damage;
				//$damage_property =0;
		//	}
	//	}
        
	//	if($p_fatality >= $rand_fatality) 
	//	{ 	//fatality
	//		$damage_fatality =1;
	//		$_SESSION['dmg_fatality']=$_SESSION['daily_income'];
	//		if ($_SESSION['checkTwo']==0){
				//~life insurance
	//			$_SESSION['daily_income'] = (1 - $fat_loss) * $_SESSION['daily_income'];
	//			$_SESSION['dmg_fatality']=$_SESSION['dmg_fatality'] - $_SESSION['daily_income'];
	//		}else { 
				//life insurance
	//			$_SESSION['NcheckTwo'] = $_SESSION['NcheckTwo']+1;
	//			$NcheckTwo = $_SESSION['NcheckTwo'];
	//			$_SESSION['daily_income'] = Round(1-(1.0/(($tspan+1)-1)*($NcheckTwo-1)),1) * $_SESSION['daily_income'];
	//			$_SESSION['dmg_fatality']=$_SESSION['dmg_fatality'] - $_SESSION['daily_income'];
				//$damage_fatality =0;
	//		}
	//	}
      
	//	if($p_injury >= $rand_injury) 
	//	{	//injury
	//		$damage_injury =1 ;
	//		$_SESSION['dmg_injury']=$_SESSION['daily_income'];
	//		if ($_SESSION['checkOne']==0){
				// ~ health insurance
	//			$_SESSION['daily_income'] = (1 - $inj_loss) * $_SESSION['daily_income'];
	//			$_SESSION['dmg_injury']=$_SESSION['dmg_injury'] - $_SESSION['daily_income'];
	//		}else{ 
				//health insurance
	//			$_SESSION['NcheckOne'] = $_SESSION['NcheckOne']+1;
	//			$NcheckOne = $_SESSION['NcheckOne'];
	//			$_SESSION['daily_income'] = Round(1-(1.0/(($tspan+1)-1)*($NcheckOne-1)),1) * $_SESSION['daily_income'];
	//			$_SESSION['dmg_injury']=$_SESSION['dmg_injury'] - $_SESSION['daily_income'];
				//$damage_injury =0;
	//		}
	//	}
	//}else{
		//climate change didn't occured		
	//	$landslide = 0;
	//	$damage_property = 0;
	//	$damage_fatality = 0;
	//	$damage_injury = 0;    
//	}

    
	//$hinsur=$chkOne;
	//$linsur=$chkTwo;
//	$pinsur=$chkThree;

	//$final_money = $_SESSION['final_money'];
	//$net_money = $_SESSION['daily_income'] - $invest - $hinsur - $linsur - $pinsur - $damage;
//	$final_money = $final_money + $net_money;
//	$_SESSION['final_money'] = $final_money;
//	$t_span = $_SESSION['time_span'];
//	$_SESSION['invest'] = $invest;

//	$_SESSION['final_money_array'][$_SESSION['day']] = round($_SESSION['money_ini'],2);
//	$_SESSION['damage_array'][$_SESSION['day']] = round($damage,2);
//	$_SESSION['p_landslide_array'][$_SESSION['day']] = round($p_landslide,2);
//	$_SESSION['daily_income_array'][$_SESSION['day']] = round($daily_income,1);
//	$d_i_t = $_SESSION['day_initial_temporal'];
//	$_SESSION['message_property']=$damage_property;
//	$_SESSION['message_fatality']=$damage_fatality;
//	$_SESSION['message_injury']=$damage_injury;

//	$_SESSION['dmg_property']=$damage;
	#echo "$con.$qus.$answer.$confid.$reaction.$reason";
	$factor1 = 2;
//	$qus = $_SESSION['ques'];
	$qus = $_SESSION['ques'];
	$qus_co = $_SESSION['counter'] + 1;

	//$con = $_SESSION['cond'];
	$f1 = $_SESSION['factor1'];
	$f2 = $_SESSION['factor2'];
	//$answ = $answer.": ".strval($chkque);$click_ques;
	$cog = $_SESSION['cogbias'];
	$gen = $_SESSION['generation'];
	
    $sqlin = "INSERT INTO gameph (consent, id, factor1, factor2, quesno, ques_counter, ans, ansval, conf, reac, reas, Cognitive_bias, Generation, Q1_time, Q2_time, Q3_time, Q4_time)
	VALUES('$consent','$unqid','$f1', '$f2', '$qus','$qus_co', '$answer','$chkque', '$confid', '$reaction', '$reason','$cog','$gen', '$q1time', '$q2time', '$q3time', '$q4time')";
	
	$resulto=mysqli_query($conn,$sqlin);

    $sqlinp = "INSERT INTO click_tracker (Mturk_id, Trial) VALUES ('$click_id', '$click_ques')";
	
	//$sqlo = "INSERT INTO game (consent, id, day, invest, hinsur, linsur, pinsur, cumulative_invest, weight_invest, daily_income, rand_property, rand_fatality, rand_injury, p_temporal, p_spatial, p_rain, p_investment, p_landslide, landslide_threshold, landslide, damage_property, damage_fatality, damage_injury, damage, net_money, final_money, return_mitigation, money_ini, time_span, dampening_factor_investment, wealth_property, p_property, p_fatality, p_injury, injury_daily_inc_loss, fatality_daily_inc_loss, day_initial_temporal)
	//VALUES('$consent','$unqid','$day','$invest', '$hinsur', '$linsur', '$pinsur','$cumulative_invest','$w_i','$daily_income','$rand_property','$rand_fatality','$rand_injury','$p_temporal','$p_spatial','$p_rain','$p_investment','$p_landslide','$landslide_threshold','$landslide','$damage_property','$damage_fatality','$damage_injury','$damage','$net_money','$final_money','$M','$money_ini','$t_span','$d_f_inv','$wealth_property','$p_property','$p_fatality','$p_injury','$inj_loss','$fat_loss','$d_i_t')";
	

	$resulto=mysqli_query($conn,$sqlinp);

	$_SESSION['process'] = 'true';
	
	#if(isset($_SESSION['nbr_pay'])) {
	#	$sqlnbr = "SELECT pay FROM nbr_pay WHERE day=" . $_SESSION['day'] . ";" ;
	//	$resultnbr = mysqli_query($conn,$sqlnbr);
	//	$rownbr=mysqli_fetch_array($resultnbr,MYSQLI_ASSOC);
	//	$_SESSION['nbr_pay'] = $rownbr["pay"];
	//}
  if($factor1 == 1){
  	if($qus<10|| ($qus>10 && $qus<33) || ($qus>33 && $qus<43)){
  	    $_SESSION['counter'] = $_SESSION['counter'] +1;
  	#	 $_SESSION['ques'] += 1;
		 header('Location: ./game.php');
			//echo $_SESSION['reaction'].$_SESSION['reason'].$_SESSION['myRange'].$_SESSION['answer'];

		die();
  	}
  		elseif($qus_co == 10 || $qus_co == 33 || $qus_co == 43){
  		    $_SESSION['counter'] = $_SESSION['counter'] +1;
	   	#	$_SESSION['ques'] += 1;
        header('Location: ./cumulative.php');
      // echo "<a href="feedback.php"></a>";
        die(); 
	}
  	else{
  		echo "<a href='end.php'><button class='btn btn-warning'>Submit</button></a>";
		die();
  	}

  }
  else{
  if($qus_co < 10){
     
 # 	$_SESSION['ques'] += 1;
  	$_SESSION['counter'] = $_SESSION['counter'] +1;
	 header('Location: ./game.php');
	//echo $_SESSION['reaction'].$_SESSION['reason'].$_SESSION['myRange'].$_SESSION['answer'];
	die();
	}
	elseif($qus_co > 10 && $qus_co < 33) {
#		$_SESSION['ques'] += 1;
		$_SESSION['counter'] = $_SESSION['counter'] +1;
        header('Location: ./feedback.php');
      // echo "<a href="feedback.php"></a>";
        die();
    }
	elseif($qus_co > 33 && $qus_co < 43){
	#	$_SESSION['ques'] += 1;
		$_SESSION['counter'] = $_SESSION['counter'] +1;
		 header('Location: ./game.php');
		die();
	}
	elseif($qus_co == 10 || $qus_co == 33){
#	   		$_SESSION['ques'] += 1;
	   		$_SESSION['counter'] = $_SESSION['counter'] +1;
        header('Location: ./cumulative.php');
      // echo "<a href="feedback.php"></a>";
        die(); 
	}
	elseif($qus_co == 43){
		header('Location: ./end.php');
		die();
	}
}

	mysqli_close($conn);
}

?>