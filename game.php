<?php include 'config.php';
session_start();error_reporting(0);
if(!isset($_SESSION["uid"])) {
?>
<?php include 'head.php';?>
<!-- if user id is not assigned -->

<body>
    <div class="container">
    <h1>OOPS!</h1><br> <h3>Please go <a href="index.php">here</a> first</h3>
    </div>
</body>
</html>

<?php
} 
elseif(!isset($_SESSION["connect"])) {
?>
<?php include_once 'head.php';?>
<!-- if no connection to database -->
<body>
    <div class="container">
    <h1>OOPS!</h1><br> <h3>Please go <a href="connect.php">here</a> first</h3>
    </div>
</body>
</html>

<?php   }
else {
    if($_SESSION['counter'] <1){
        $coun = 0;
    }
    else{
        $coun = $_SESSION['counter'];
    }
  $factor2 = $_SESSION['factor2'];
 $q = $coun +1; 

    if($factor2 == '0' || $factor2 == 0){
      $_SESSION['ques'] = $_SESSION['a'][$coun];
      $ques = $_SESSION['a'][$coun];

      $sender_a = "SELECT `sender_address` FROM `humang_new` WHERE `S.No.` = $ques";
    $resultsa=mysqli_query($conn, $sender_a);
      $rowsa=mysqli_fetch_array($resultsa,MYSQLI_ASSOC);
    $_SESSION['sen_add'] = $rowsa["sender_address"];

    $subj = "SELECT `Subject` FROM `humang_new` WHERE `S.No.` = '$ques'";
    $resultsub=mysqli_query($conn, $subj);
      $rowsub=mysqli_fetch_array($resultsub,MYSQLI_ASSOC);
    $_SESSION['subj'] = $rowsub["Subject"];

      $bod = "SELECT `Body` FROM `humang_new` WHERE `S.No.` = '$ques'";
    $resultbody=mysqli_query($conn, $bod);
      $rowbody=mysqli_fetch_array($resultbody,MYSQLI_ASSOC);
    $_SESSION['body'] = $rowbody["Body"];
    #$_SESSION['body'] = $bod;
      $phs = "SELECT `Phishing` FROM `humang_new` WHERE `S.No.` = '$ques'";
    $resultphs=mysqli_query($conn, $phs);
      $rowphs=mysqli_fetch_array($resultphs,MYSQLI_ASSOC);
    $_SESSION['actual'] = $rowphs["Phishing"];
    
        $date = "SELECT `Date` FROM `humang_new` WHERE `S.No.` = '$ques'";
    $resultdate=mysqli_query($conn, $date);
      $rowdate=mysqli_fetch_array($resultdate,MYSQLI_ASSOC);
    $_SESSION['date'] = $rowdate["Date"];
    
    $cognibia = "SELECT `Cognitive Bias` FROM `humang_new` WHERE `S.No.` = '$ques'";
    $resultcb=mysqli_query($conn, $cognibia);
      $rowcb=mysqli_fetch_array($resultcb,MYSQLI_ASSOC);
    $_SESSION['cogbias'] = $rowcb["Cognitive Bias"];
    
    $gen = "SELECT `Generation` FROM `humang_new` WHERE `S.No.` = '$ques'";
    $resultgen=mysqli_query($conn, $gen);
      $rowgen=mysqli_fetch_array($resultgen,MYSQLI_ASSOC);
    $_SESSION['generation'] = $rowgen["Generation"];
    
    
    
  }
  
  
  else if($factor2 == '1' || $factor2 == 1){
$_SESSION['ques'] = $_SESSION['a'][$coun];
      $ques = $_SESSION['ques'];
      $sender_a = "SELECT `sender_address` FROM `gpt0308g_new` WHERE `S.No.` = '$ques'";
    $resultsa=mysqli_query($conn, $sender_a);
      $rowsa=mysqli_fetch_array($resultsa,MYSQLI_ASSOC);
    $_SESSION['sen_add'] = $rowsa["sender_address"];

    $subj = "SELECT `Subject` FROM `gpt0308g_new` WHERE `S.No.` = '$ques'";
    $resultsub=mysqli_query($conn, $subj);
      $rowsub=mysqli_fetch_array($resultsub,MYSQLI_ASSOC);
    $_SESSION['subj'] = $rowsub["Subject"];

      $bod = "SELECT `Body` FROM `gpt0308g_new` WHERE `S.No.` = '$ques'";
    $resultbody=mysqli_query($conn, $bod);
      $rowbody=mysqli_fetch_array($resultbody,MYSQLI_ASSOC);
    $_SESSION['body'] = $rowbody["Body"];

      $phs = "SELECT `Phishing` FROM `gpt0308g_new` WHERE `S.No.` = '$ques'";
    $resultphs=mysqli_query($conn, $phs);
      $rowphs=mysqli_fetch_array($resultphs,MYSQLI_ASSOC);
    $_SESSION['actual'] = $rowphs["Phishing"];
    
    $date = "SELECT `Date` FROM `gpt0308g_new` WHERE `S.No.` = '$ques'";
    $resultdate=mysqli_query($conn, $date);
      $rowdate=mysqli_fetch_array($resultdate,MYSQLI_ASSOC);
    $_SESSION['date'] = $rowdate["Date"];
    
    $cognibia = "SELECT `Cognitive Bias` FROM `gpt0308g_new` WHERE `S.No.` = '$ques'";
    $resultcb=mysqli_query($conn, $cognibia);
      $rowcb=mysqli_fetch_array($resultcb,MYSQLI_ASSOC);
    $_SESSION['cogbias'] = $rowcb["Cognitive Bias"];
    
    $gen = "SELECT `Generation` FROM `gpt0308g_new` WHERE `S.No.` = '$ques'";
    $resultgen=mysqli_query($conn, $gen);
      $rowgen=mysqli_fetch_array($resultgen,MYSQLI_ASSOC);
    $_SESSION['generation'] = $rowgen["Generation"];
    }
  else if($factor2 == '2' || $factor2 == 2){
      $ques = $_SESSION['ques'];


      $sender_a = "SELECT `sender_address` FROM `gpt0308g_1` WHERE `S.No.` = '$ques'";
    $resultsa=mysqli_query($conn, $sender_a);
      $rowsa=mysqli_fetch_array($resultsa,MYSQLI_ASSOC);
    $_SESSION['sen_add'] = $rowsa["sender_address"];

    $subj = "SELECT `Subject` FROM `gpt0308g_1` WHERE `S.No.` = '$ques'";
    $resultsub=mysqli_query($conn, $subj);
      $rowsub=mysqli_fetch_array($resultsub,MYSQLI_ASSOC);
    $_SESSION['subj'] = $rowsub["Subject"];

      $bod = "SELECT `Body` FROM `gpt0308g_1` WHERE `S.No.` = '$ques'";
    $resultbody=mysqli_query($conn, $bod);
      $rowbody=mysqli_fetch_array($resultbody,MYSQLI_ASSOC);
    $_SESSION['body'] = $rowbody["Body"];

      $phs = "SELECT `Phishing` FROM `gpt0308g_1` WHERE `S.No.` = '$ques'";
    $resultphs=mysqli_query($conn, $phs);
      $rowphs=mysqli_fetch_array($resultphs,MYSQLI_ASSOC);
    $_SESSION['actual'] = $rowphs["Phishing"];
    }
   // echo $ques.$sender_a.$subj.$bod.$phs.$cond;
 if($_SESSION['actual'] = 0){
     $actual = 'Genuine';
 }
 else{
     $actual = 'Phishing';
 }
?>
<!-- main game page starts here -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Phishing Email Detection Game</title>
      
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:regular,semibold,italic,italicsemibold|PT+Sans:400,700,400italic,700italic|PT+Serif:400,700,400italic,700italic" rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/highcharts.js"></script>

    <!-- Eye Tracking Script -->
    <script type="text/javascript" src="./js/TobiiWeb_Client.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="21.png" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    
    <style>
      .container1{
        width:400px;
        .slidecontainer {
        width: 90%;
        }

      .slider {
        -webkit-appearance: none;
        width: 90%;
        height: 25px;
        background: bisque;
        outline: none;
        opacity: 0.7;
        -webkit-transition: .2s;
        transition: opacity .2s;
      }

      .slider:hover {
        opacity: 1;
      }

      .slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 25px;
        height: 25px;
        background: burlywood;
        cursor: pointer;
      }

      .slider::-moz-range-thumb {
        width: 20px;
        height: 25px;
        background: burlywood;
        cursor: pointer;
      }

      body {
        font-family: Arial;
        color: white;
      }
      .text-center {
        text-align: center;
      }
      textarea {
        width: 100%;
        height: 150px;
        padding: 12px 20px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        font-size: 16px;
        resize: none;
      }
      .splitl {
        height: 100%;
        width: 60%;
        position: fixed;
        z-index: 1;
        top: 0;
        overflow-x: hidden;
        padding-top: 20px;
      }
      div.bo {
        border-style: solid;
        border-color: burlywood;
      }
      .split {
        height: 100%;
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        overflow-x: hidden;
        padding-top: 20px;
      }
      .button {
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
      }
      .button1 {
        background-color: floralwhite; 
        color: black; 
        border: 2px solid lightgreen;
      }

      .button1:hover {
        background-color: lightgreen;
        color: white;
      }

      .button2 {
        background-color: floralwhite; 
        color: black; 
        border: 2px solid lightcoral;
      }

      .button2:hover {
        background-color: lightcoral;
        color: white;
      }
      .sub {
        background-color: blanchedalmond; 
        color: black; 
        border: 2px solid burlywood;
      }

      .sub:hover {
        background-color: burlywood;
        color: black ;
      }
      .left {
        left: 0;
        background-color: white;
      }

      .right {
        right: 0;
        background-color: floralwhite;
      }

      .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        overflow: scroll;
      }
      .btn-group .co {
        background-color: burlywood; 
        border: 1px solid ;
        color: white;
        padding: 5px 18px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
        cursor: pointer;
        float: left;
      }

      .btn-group .co:not(:last-child) {
        border-right: none; /* Prevent double borders */
      }

      .btn-group .co:hover {
        background-color: bisque;
      }
      .ema {
        position: fixed;
        top: 40%;
        left: 35%;
        transform: translate(-50%, -50%);
        text-align: left;
        overflow: scroll;
      }
      p {
        font-size: 14px;
        color:black;
      }
      h2 {
          color:black;
          }
      #sa {
          height: 20px;
          border: solid 1px lightgray;
          color:black;
          width: 80%;
          padding: 5px;
          font-size: 14px;
          }
      #body {
          height: 350px;
          border: solid 1px lightgray;
          color:black;
          width: 80%;
          padding: 5px;
          font-size: 14px;
          }

      .centered img {
        width: 150px;
        border-radius: 50%;
      }
      .tab {
      margin-left: 50px;
      margin-right: 50px;
          }
      .tab2 {
      margin-left: 80px;
      margin-right: 50px;
      }
    }
    </style>
        
  </head>
  <body>
    <!-- BODY -->

    
    <div class="container-fluid">
        <!--    messages--><div class="row">
        <div class="col-md-12"><div class="jumbotron">
          <div class="row">
<div class = "row">     

<div class="splitl left bo col-lg-7">
    <div class="hint-container">
       <h3> <b><button id="hintButton" style=" color: white; border: none; cursor: pointer;width:130px;height:50px;font-size:100%;" class="btn btn-md btn-primary">Hint</button></b></h3>
       <h3 id="hintText" style="display: none; color: black; margin-top: -6px; position: absolute;"> This seems to be <?php echo $actual;?> email.</h3>
    </div><br>
<h3><b>Email <?php echo $q; ?>:</b></h3>
<!--<<h3><b>counter <?php echo $coun;?>:</b></h3>

div id="co" style="width:700px;height:70px;">
<h4>< ?php echo $_SESSION['cover']; ?></h4></div>-->
  <div class="ema">
  <!--  <h2>< ?php// echo $_SESSION['subj']; ?> </h2>-->
      <div id="sa" style="width:700px;height:70px;padding:2px;border:1px solid #cccbcb;font-size:130%;"><b>From:</b> <?php echo $_SESSION['sen_add']; ?></div>
      <div id="da" style="width:700px;height:70px;padding:2px;border:1px solid #cccbcb;font-size:130%;"><b>Date:</b> <?php echo $_SESSION['date']; ?> </div>
      <div id="sub" style="width:700px;height:70px;padding:2px;border:1px solid #cccbcb;font-size:130%;"><b>Subject:</b> <?php echo $_SESSION['subj']; ?></div>
     <!-- <div id="to" style="width:850px;height:35px;padding:2px;border:1px solid #cccbcb;font-size:130%;"><b>To:</b> You &lt;demo@email.com&gt;</div>-->
      <div id ="body" style="width:700px;height:1000px;padding:8px;border:1px solid #cccbcb;font-size:130%;"><?php echo $_SESSION['body'] ?></div>  </div>
</div>

<div class="split right bo col-lg-auto">
  <div style="color:black; margin-left: 10px;">
      <div  class="ema2">
      <h3><b>Answer the following questions:</b></h3>
     <h4> <form role="form" id="form2" name="form2" method="post" onsubmit='return valthisform()' action="./process.php?id=<?php  ?>&decision=true">
      <!--<form method="POST">
        <? php// echo $_SESSION['reaction'].$_SESSION['reason'].$_SESSION['myRange']; ?> -->
        <label for="ques">Q1. How likely do you think this email is genuine or phishing?</label><br><br>
        <input type="range" isChanged="false" min="0" max="100" value="50" style="width:550px;" class="slider" id="ques" name = "ques" oninput="javascript:checkphish()" required = "true"/><label for="slider">Phishing</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<label for="slider">Neutral</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<label for="slider">Genuine</label>
        <br><br><br>
        <!--<label for="choice1">Phishing</label>
        <input type="radio" id="phish" name="ques" value="phishing" onclick="javascript:Check1()" required/>
         &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <label for="choice2">Genuine</label>
        <input type="radio" id="genuine" name="ques" value="genuine" onclick="javascript:Check2()"/>
       <!-- <input type="radio" id="phish" onclick="javascript:Check1();" name="phish" value="phish"/>Phishing &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <input type="radio" id="genuine" onclick="javascript:Check2();" name="genuine" value="genuine"/>Genuine
        <br><br><br>-->
        <label for="confidence">Q2. How confident are you on your answer in above question?<br>(1 = Not Confident at all; 100: Fully Confident)</label>
        <br><br>
        <input type="range" min="0" max="100" isChanged="false" value="" style="width:550px;" class="slider" id="myRange" name = "myRange" oninput="javascript:checkconfidence()" required="true"/><label for="range">1</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<label for="range">100</label>
        <br><br><br>
        <label for="reason">Q3. How did you make your decision in Q1 above?</label><br>
             <!--   <input type="hidden" id = rea name="reason[]" value="" required/>-->
        <div><input type="checkbox" id = rea1 name="reason[]" value="Based upon senders email address" onclick="javascript:checkreason()">
        <label for="Reason1">Based upon sender's email address</label><br>
       </div>
    <div> <input type="checkbox" id = rea3 name="reason[]" value="Based upon the subject line in the email" onclick="javascript:checkreason()">
        <label for="Reason3">Based upon the subject line in the email</label>
    </div>
    
    <div> <input type="checkbox" id = rea4 name="reason[]" value="Based upon the date in the email" onclick="javascript:checkreason()">
        <label for="Reason4">Based upon the date in the email</label>
    </div>
       
       <div> <input type="checkbox" id = rea2 name="reason[]" value="Based upon body of the email" onclick="javascript:checkreason()">
        <label for="Reason2">Based upon body of the email</label><br>
       </div>
    
    <div> <input type="checkbox" id = rea5 name="reason[]" value="Based upon the link/attachment in the email" onclick="javascript:checkreason()">
        <label for="Reason5">Based upon the link/attachment in the email</label>
    </div>
    
    <div>
      <input type="checkbox" id="other" name="reason[]" value="Based upon some other reason" onclick="javascript:openother()">
      <label for="other">Based upon some other reason</label>
      <input type="textarea" id="other1" name="reason[]" style="visibility:hidden" onclick="javascript:checkreason()">
    </div><br><br><br> 
        <label for="reaction">Q4. If you recieve this email, what will be your reaction?</label><br>
      <!--  <input type="hidden" id = reac name="reaction[]" value="" required/>-->
               <div><input type="checkbox" id = reac6 name="reaction[]" value="Read the email and do nothing" onclick="javascript:checkreaction()">
        <label for="Reaction6">Read the email and do nothing</label><br>
         <div><input type="checkbox" id = reac1 name="reaction[]" value="Respond to this email" onclick="javascript:checkreaction()">
        <label for="Reaction1">Respond to this email</label><br>
        
       </div><div> <input type="checkbox" id = reac2 name="reaction[]" value="Click link/ Open attachment" onclick="javascript:checkreaction()">
        <label for="Reaction2">Click link/ Open attachment</label><br>
       </div><div> <input type="checkbox" id = reac3 name="reaction[]" value="Move to spam" onclick="javascript:checkreaction()">
        <label for="Reason3">Move to spam</label>
    </div><div>
      <input type="checkbox"  id = reac4 name="reaction[]" value="Delete this email"  onclick="javascript:checkreaction()">
      <label for="Reason4">Delete this email</label>
    </div><div>
      <input type="checkbox"  id = reac5 name="reaction[]" value="Report this email" onclick="javascript:checkreaction()">
      <label for="Reason5">Report this email</label>
    </div>
      <!--  <select id="reaction" name = "reaction" onclick="javascript:Checkreaction()" style="width:550px;" required>
        <option value= "">--Select an Option--</option>
        <option value="Respond to this email">Respond to this email</option>
        <option value="Click link open attachment">Click link/ Open attachment</option>
        <option value="Check sender">Check sender</option>
        <option value="Move to spam">Move to spam</option>
        <option value="Delete email">Delete this email</option>
        <option value="Report this email">Report this email</option>
        </select>-->
        
        <!--<textarea placeholder="Write your answer here" onclick="javascript:Checkreason()" id = "reason" name = "reason" style="width:550px;height:150px" required></textarea>
        <p id="demo"></p>
        <input type="hidden" name="checkOne" id="checkOne" value=0 />
      <input type="hidden" name="checkTwo" id="checkTwo" value=0 />-->
        <input type="hidden" name="q1time" id="q1time" value='' />
        <input type="hidden" name="q2time" id="q2time" value='' />
        <input type="hidden" name="q3time" id="q3time" value='' />
        <input type="hidden" name="q4time" id="q4time" value='' />
        <input type="hidden" name="click_ques" id="click_ques" value='' />
        <input type="hidden" name="click_id" id="click_id" value='' />
        <input type="hidden" name="atnck2" id="atnck2" value='' />
        <input type="hidden" name="atnck1" id="atnck1" value='' />

    <!--<input type="hidden" name="checkThree" id="checkThree" value=0 />-->
        </h4><div class="text-center">
        <!--<input type="submit" class="button tab sub" value="Submit">-->
        <h4><input type="submit" value="Submit" style="width:130px;height:50px;font-size:100%;" class="btn btn-md btn-primary" onclick = "javascript:valthisform()"></h4>
        </div>
    </form>
    </div>
  </div>
</div>
</div>
<!--   
          <div class="form-group">
            <div class=container2 id="ifYesPlan" style="visibility:hidden">    
              <input type="checkbox" onclick="javascript:Check1();" name="chk1" id="Checkbox1" > Yes, I would like to enroll into a health insurance plan for the next year (1173 EC/year).
              <br>

              <input type="checkbox" onclick="javascript:Check2();" name="chk2" id="Checkbox2" > Yes, I would like to enroll into a life insurance plan for the next year (488 EC/year).
              <br>

              <input type="checkbox" onclick="javascript:Check3();" name="chk3" id="Checkbox3" > Yes, I would like to enroll into a property insurance plan for the next year (1884 EC/year).
              <br>
            </div>
          </div>
                
          <input type="hidden" name="checkOne" id="checkOne" value=0 />
          <input type="hidden" name="checkTwo" id="checkTwo" value=0 />
          <input type="hidden" name="checkThree" id="checkThree" value=0 />
             
          <input type="checkbox" onclick="javascript:mitigationChecked();" name="mitigation" id="mitigationCheck" > I would like to decide the investment for mitigating climate change myself for the next year.
          
          <div class="form-group">
            <div class=container1 id="ifNoPlan" style="visibility:hidden">    
              <label>
              HELP MODAL BUTTON 
              
          </div>
                </form> -->

                
                <!-- Modal -->
                    </div>
                </div>
                </div>
        <!-- Game Parameters -->        
        </div>
                    
      </div>
      
      <script type="text/javascript">
          function preventBack() {
              window.history.forward(); 
          }
            
          setTimeout("preventBack()", 0);
            
          window.onunload = function () { null };
          var a = 'false';
          var b = 'false';
          function openother() {
              if (document.getElementById('other').checked) {
                  document.getElementById('other1').style.visibility = 'visible';
              } else{
                  document.getElementById('other1').style.visibility = 'hidden';
              }
          }

          function func(k){
              var qus = '<?php echo $_SESSION['ques'] ?>';
              var mt_id = '<?php echo $_SESSION['mturk'] ?>';
              document.getElementById('click_id').value = mt_id;
              document.getElementById('click_ques').value = qus;
              return false;
          }  

          function checkphish(){
              document.getElementById('q1time').value = Date();

              document.getElementById("ques").setAttribute("ischanged", "true");
          }
  
          document.addEventListener("DOMContentLoaded", function () {
              const hintButton = document.getElementById("hintButton");
              const hintText = document.getElementById("hintText");

              hintButton.addEventListener("click", function () {
                  // Show the hint
                  hintText.style.display = "block";
                  // Disable the button
                  hintButton.disabled = true;
                  // Hide the hint after 5 seconds
                  setTimeout(function () {
                      hintText.style.display = "none";
                      hintButton.disabled = true; // Re-enable the button
                  }, 5000); // 5000 milliseconds (5 seconds)
              });
          });

          function checkreaction(){
              document.getElementById('q4time').value = Date();
              var reacti = document.forms["form2"]["reaction"];
              if (!empty(reacti)) {
                  return true;
              }
          }

          function attentionCheck() {
              var trial = '<?php echo $_SESSION['ques'] ?>';
              var n1 = '<?php echo $my_id."_a1" ?>';
              var n2 = '<?php echo $my_id."_a2" ?>';
              
              console.log(n1);
              
              if(!localStorage.getItem(n1) && !localStorage.getItem(n2)) {
                  localStorage.setItem(n1, "false");
                  localStorage.setItem(n2, "false");
              }
              
              if(trial == 2 && localStorage.getItem(n1)==="false"){
                  localStorage.setItem(n1, "true");
                  var question = "Which day is today?";
                  var response = prompt(question);
                  document.getElementById('atnck1').value = response;
              }
              
              if(trial == 20 && localStorage.getItem(n2)==="false"){
                  localStorage.setItem(n2, "true");
                  var question = "What was your response to Q1 in previous question";
                  document.getElementById('atnck2').value = response;
              }
          }
          
          function checkconfidence(){
              document.getElementById('q2time').value = Date();
              document.getElementById("myRange").setAttribute("ischanged", "true");   
          }

          function checkreason(){
              document.getElementById('q3time').value = Date();
              var reas =  document.getElementById("rea");

              if (reas == '') {
                  return false;
              }
          }
            
          function valthisform() {
              var quesChanged = document.getElementById("ques").getAttribute("ischanged");
              var rangeChanged = document.getElementById("myRange").getAttribute("ischanged");
              var reasonChecked = document.getElementsByName('reason[]');
                
              if (quesChanged == "false"){
                  alert ("Please answer Question 1");
                  return false; 
              } else if (rangeChanged == "false"){
                  alert ("Please answer Question 2");
                  return false; 
              } else if(!(form2.rea1.checked || form2.rea2.checked || form2.rea3.checked || form2.rea4.checked || form2.rea5.checked || form2.other.checked)){
                  alert("Please answer Question 3");
                  return false;
              } else if(!(form2.reac1.checked || form2.reac2.checked || form2.reac3.checked || form2.reac4.checked || form2.reac5.checked || form2.reac6.checked)){
                  alert("Please answer Question 4");
                  return false;
              } else{
                  saveTrackingData();
                  saveEyeTrackingDataToSQL(trackingData);
                  return true;
              }
          }

          // Eye Tracking Service Start
          let trackingData = [];
          function startTracking(){
              TobiiWeb_Client.start({
                  enable_state_machine_logs : true, 
                  use_filter : "mean", 
                  services : [
                    {name : "GazeTracking_Service", page_url : window.location.href}
                  ],
                  onMessage : {
                      "GazeTracking_Service" : GazeCoordinatesReceiver({
                          filter: "mean",
                          filter_size: 5,
                          onGazeCoordinates: function(x,y){
                            trackingData.push({ x_axis: x, y_axis: y, timestamp: new Date().getTime(), datetimestamp : new Date().toISOString() });
                          }
                      })
                  }
              });
          }
          
          window.onload = startTracking;
          
          function saveEyeTrackingDataToSQL(data) {
            /*
              On the basis of userId, I will have to save the eye data.
              Fields:
                UserId,
                QuestionNo,
                HintUsed -> Yes or No; on the basis of which we will choose the screenshot with/without hint,
                Date,
                Eye X_Data,
                Eye Y_Data
            */
            const xhr = new XMLHttpRequest();
            xhr.open('POST', '', true); // Send data to the same PHP page
            xhr.setRequestHeader('Content-Type', 'application/json');

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Handle the response from the server if needed
                    console.log(xhr.responseText);
                }
            };

            xhr.send(JSON.stringify(data));
          }


          function saveTrackingData() {
                const trackingDataStr = trackingData.map(data => 
                    `${data.timestamp}, ${data.datetimestamp}, ${data.x_axis}, ${data.y_axis}`
                    ).join('\n');

                const blob = new Blob([trackingDataStr], { type: 'text/plain' });

                const a = document.createElement('a');

                var UID = '<?php echo $_SESSION["uid"]; ?>';
                var questionNo = '<?php echo $ques; ?>';
                
                a.download = UID + '_' + questionNo +'.txt';

                // Create a URL for the blob and set it as the href attribute
                a.href = window.URL.createObjectURL(blob);
                
                document.body.appendChild(a);                
                a.click();
                document.body.removeChild(a);
          }

          // Eye Tracking Service Stop
          function stopTracking() {
              TobiiWeb_Client.stop()
          }

        </script> 
        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Get the JSON data sent from the client
                $data = json_decode(file_get_contents('php://input'));
            
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                
                $id = $_SESSION["uid"];
                $quesno = $ques;
                $hintused = null;
                // Loop through the received data and insert it into the MySQL database
                foreach ($data as $item) {
                    $x_axis = $item->x_axis;
                    $y_axis = $item->y_axis;
                    $datetimestamp = $item->datetimestamp;
            
                    $sql = "INSERT INTO eyedata (id, quesno, hintused, x_axis, y_axis, datetimestamp) VALUES ('$id','$quesno','$hintused', '$x_axis', '$y_axis', '$datetimestamp')";
            
                    if ($conn->query($sql) === TRUE) {
                        echo "Data inserted successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }
            
                $conn->close();
            }
        ?>
    <!-- FOOTER without any links -->
    <?php include 'footer.php';?>
    
  </body>
</html>

<?php   }
    ?>
<!-- scripts for charts -->