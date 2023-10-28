<!-- capturing demographic information -->
<?php error_reporting(0);session_start();

if (!isset($_GET['id']) && empty($_GET['id'])) { ?>

<!DOCTYPE html>
<html lang="en">
    <?php include 'head.php'; ?>

<body>
    <div class="container">
    <h1>OOPS!</h1><br> <h3>Please go <a href="index2.php">here</a> first</h3>
    </div>
</body>
</html>

<?php   }
elseif (!isset($_GET['connect']) && empty($_GET['connect'])) {
?>

<!DOCTYPE html>
<html lang="en">
    <?php include 'head.php'; ?>
    
<body>
    <div class="container">
    <h1>OOPS!</h1><br> <h3>Please go <a href="connect.php">here</a> first</h3>
    </div>
</body>
</html>

<?php }
    elseif(empty($_SESSION['consent'])) {
?>

<!DOCTYPE html>
<html lang="en">
    <?php include 'head.php'; ?>
<body>
    <div class="alert alert-danger">
    <h1>OOPS!</h1><br> <h3>Session Destroyed!</h3><h3>Please click <a href="index.php">here</a></h3>.
    </div>
</body>
</html>

<?php                                               }
else { 

?>
<!-- head files included -->
<?php include 'head.php';
$_SESSION['age_restriction'] = 18;
?>
<style>
        .containerx{
            width:100px;
        }
    </style>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <!-- Logo --><div class="row"> <div class=col-md-1> <embed height="50" width="50" src="21.png"></div> <div class="col-md-11">
            <div class="navbar-header">
                <a class="navbar-brand kalam">Phishing Email Detection Game</a>
            </div>
        </div></div>
    </nav><br><br><br>
    <!--main body here -->
    <div class="container"> <div class="jumbotron">
        <h1 class="text-center">Demographic Profile<br></h1>
        <p class="text-justify">Please provide the following demographic information.  Your anonymity will be preserved throughout this study. The information you provide will be used for research purposes only. </p>
        
       <?php 	
           $conn = new mysqli("localhost", "root", "T22051@gmandi", "u978805288_PEDV2");
	#$factor1 = "SELECT `factor1` FROM `gameph` WHERE `quesno`= 30 ORDER BY `sno` DESC LIMIT 1";
	#$sqlnbr = "SELECT pay FROM nbr_pay WHERE day=" . $_SESSION['day'] . ";" ;
	#$resultfactor1 = mysqli_query($conn,$factor1);
	#$rowfactor1=mysqli_fetch_array($resultfactor1,MYSQLI_ASSOC);
	#$_SESSION['nbr_pay'] = $rownbr["pay"];
#	$_SESSION['factor1'] =$rowfactor1["factor1"];
  #  $_SESSION['factor1'] = ($_SESSION['factor1']+1)%2;
    $_SESSION['factor1'] = 0;
	if($_SESSION['factor1']==0 || $_SESSION['factor1']=='0'){
		$f1 = 0;
	}
	else{
		$f1 = 1;
	}
    if ($f1 == 0) { ?>
    <form role="form" method="POST" id="form1" name="form1"  action="instruction.php?id=<?= isset($_GET['id']) ? $_GET['id'] : '' ?>&connect=true&demo=true">
    <?php }
elseif($f1 == 1) { 
?>
    <form role="form" method="POST" id="form1" name="form1"  action="instructionn.php?id=<?= isset($_GET['id']) ? $_GET['id'] : '' ?>&connect=true&demo=true">
<?php } ?>     
        
    <?php $_SESSION['name'] = 'Guest';?>
    
    <div class="form-group">
        <label>Please enter your MTurk ID to participate in the experiment:</label>
        <input type="text" class="form-control" style="width:50%" id="mturk" name="mturk" required>
    </div>
    
    <div class="form-group containerx">
        <label>Age:</label>
        <input type="number" class="form-control" id="age" name="age" max=100 min=<?php echo $_SESSION['age_restriction'];?> required>
    </div>
    <div class="form-group">
        <label>Gender:</label>
    <div class="radio">
        <label><input type="radio" name="gender" value="M" required>Male</label>
    </div>
    <div class="radio">
        <label><input type="radio" name="gender" value="F">Female</label>
    </div>

    </div>
<script> console.log('<?php echo "a".$_SESSION['uid'];?>')</script>
    <div class="form-group">
        <label>Highest education level attained:</label>
    <div class="radio">
        <label><input type="radio" name="ed" value="High_School" required>High School</label>
    </div>
    <div class="radio">
        <label><input type="radio" name="ed" value="Intermediate">Intermediate</label>
    </div><div class="radio">
        <label><input type="radio" name="ed" value="Undergraduate">Undergraduate (B.A., B.Sc., B.Com., B.E., B.Tech.) or equivalent
        </label>
    </div>
        <div class="radio">
        <label><input type="radio" name="ed" value="Masters">Masters or equivalent</label>
    </div>
        <div class="radio">
        <label><input type="radio" name="ed" value="phd">Ph.D. or equivalent</label>
    </div>
        <div class="radio">
        <label><input type="radio" name="ed" value="Other">Other</label>
    </div>
    </div>

    <div class="form-group">
        <label>Major / Specialization:</label>
        <input type="text" class="form-control" id="major" name="major" required>
    </div>

  <!--  <div class="form-group">
        <label>Occupation (If retired, state Retired and specify former occupation):</label>
        <input type="text" class="form-control" id="occ" name="occ" required>
        </div>-->

    <!--<div class="form-group">
        <label>E-Mail ID (strictly for payment purposes):</label><br>
        <input id='email' type="email" class="form-control" name="email" required>
    </div>-->

        <button type='submit' id='validate' class="btn btn-primary btn-lg" name="Submit">Submit</button>

        
</form>
    </div>
    <script>
        //function validateEmail(email) { 
         //   var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
         //   return re.test(email);}
            
          //  function validate(){
          //  var email = $("#email").val();
         //   if (validateEmail(email)) {
        //    return true;
        //    } else {
        //    return false;
        //    }
        //    }
        function validate2() { 
        //    var t = validate();
            var r = document.forms["form1"]["gender"].value;
            var s = document.forms["form1"]["ed"].value;
           // var v = document.forms["form1"]["email"].value;
           // if( t == false) { alert("Please enter correct e-mail id!"); return false; }
            if (r == null || r == "" ||s == null || s == "") {
                alert("All the fields must be properly answered");
                return false;
            };
        }// return true;}
    </script>
        </div>
    <?php include 'footer.php' ?>
</body>
</html>
<?php };
    ?>