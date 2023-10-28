<?php
    session_start();
    error_reporting(0);
    include 'config.php';
    //$conn = new mysqli("localhost", "acs_de_gam", "acslab","acs_draft");
    //$conn = new mysqli("localhost", "root", "","acs_draft1");
    // $sqlsno = "SELECT scenario_id FROM param";
    // $result = mysqli_query($conn,$sqlsno);
    // $row = mysqli_fetch_array($result,MYSQLI_NUM);
    // $sno = max($row);
    // $sqlage = "SELECT age_restriction FROM param WHERE scenario_id='$sno'";
    // $resultc = mysqli_query($conn,$sqlage);
    // $sno_arr = mysqli_fetch_array($resultc,MYSQLI_NUM);
    // $_SESSION['age_restriction'] = $sno_arr[0];
    if (isset($_GET['id']) && !empty($_GET['id'])) { // User supplied an ID that is set AND not empty
        $no_validid = 0;
        $my_id      = $_SESSION["uid"];
        $my_cid     = $_SESSION["cid"];
        if (isset($_POST['formsent']) && $_POST['formsent']) { // User sent the form successfully
            $form_submitted = 1;
            if (!isset($_POST['cq2']) || !isset($_POST['cq3'])) {
                $is_incomplete = 1;
            } else { // all questions have been completed
                $is_incomplete = 0;
                $var_cq1 = $_POST['cq1'];
                $var_cq2 = $_POST['cq2'];
                $var_cq3 = $_POST['cq3'];
                
                if ($var_cq1 && $var_cq2 && $var_cq3) {
                    $user_consent = 1;
                } else {
                    $user_consent = 0;
                }
            }
        } else {
            $form_submitted=0; // default value
        }
    } else {
        $no_validid = 1; // default value
    }
    
?>
<?php if ($no_validid) : ?>
<!-- IF USER ID NOT ASSIGNED YET, redirect user to index page -->
    <!DOCTYPE html>
<html lang="en">
    <?php include 'head.php'; ?>
<body>
    <div class="container">
    <h1>OOPS!</h1><br> <h3>Please go <a href="index2.php">here</a> first</h3>
    </div>
</body>
</html>
<?php elseif (!$form_submitted || $is_incomplete) : ?>
<!--main consent page starts here  --> 
<!DOCTYPE html>
<html>
<head>
   <title>Phishing Email Detection Game</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1024" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
   <meta name="msvalidate.01" content="A715CCF7512E918C7F99005F066E26EC" />
		
    <meta property="og:image" content="http://manisha.acslab.org/og.JPG" />
<meta property="og:url" content="http://manisha.acslab.org/" />
<meta property="og:title" content="Phishng Email Game" />
<meta property="og:description" content="This game is part of a research study conducted by  Varun Dutt (Associate Professor at Indian Institute of Technology, Mandi) and Megha Sharma (M.S. Student under Dr. Varun Dutt).
Therefore, this game presents people the right information that must be known to them before they make a decision of how much can they should invest on landslide aversion." />
<meta property="keywords" content="Phishing Email Game, IIT Mandi" />
<meta property="og:type" content="game" />
<meta property="keywords" content="Megha Sharma" />
<script src="//use.typekit.net/jxd4bhn.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<meta property="og:site_name" content="Phishing Email Game"/>
<meta name="author" content="Megha Sharma and Varun Dutt" />
<meta name="description" content="Phishing email quiz game" />
<meta name="description" content="Phishing Email Game" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:regular,semibold,italic,italicsemibold|PT+Sans:400,700,400italic,700italic|PT+Serif:400,700,400italic,700italic" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="21.png" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    <!--<script src="http://code.highcharts.com/adapters/standalone-framework.js"></script> -->
    <link rel="stylesheet" type="text/css" href="css/demotool.css">
</head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65166348-1', 'auto');
  ga('send', 'pageview');

</script>

    <body onload="">
        <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <!-- Logo -->
            <div class="row"> <div class=col-md-1> <embed height="50" width="50" src="21.png"></div>
            <div class="col-md-11">
            <div class="navbar-header">
                <a class="navbar-brand kalam">Phishing Email Detection Game</a>
            </div>
            
                </div></div></div>
    </nav><br> <br> <br><br>
        <!--BODY -->
        <div class="container">
                <?php if ($is_incomplete) : ?>
                    <div class="alert alert-warning">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Sorry</strong>, you cannot continue until you answer all three questions below.
            </div> </div>
                <?php endif; ?>
            
        
<div class="jumbotron"><div class="container-fluid">
            <!-- consent text starts here -->
            <h1 class="text-center">Consent Form</h1><br>
            <p class="text-center">
                <p class="text-justify">
                        This game is part of a research study conducted by M.S. scholar Megha Sharma under the guidance of Dr. Varun Dutt at the Indian Institute of Technology Mandi, Himachal Pradesh, India - 175075.  
                </p>
                <p class="text-justify">
                       The purpose of the research is to find out how an individuals decision-making is influenced in the presence of various insurance models against climate change.
                </p>

                <h3><b>Procedures</b></h3>
                <p class="text-justify">
                        During the course of the game you will be shown series of email and you have to identify whether the email is genuine or phishing email. There are three rounds in the game, at the end of each round you will get to know your cumulative score. <br>In all, you will gain positive points if your answer is correct, whereas you will get negative points for a wrong answer.

          </p>

                <h3><b>Participant Requirements</b></h3>
                <p class="text-justify">Participation in this study is limited to individuals of age 18 and above, with at least basic computer proficiency, and the ability to read and understand English.</p>

                <h3><b>Risks</b></h3>
                <p class="text-justify">
                        The risks and discomfort associated with participation in this study are no greater than those ordinarily encountered in daily life or during other online activities.
                </p>

                <h3><b>Benefits</b></h3>
                <p class="text-justify">
                        There may be no personal benefit from your participation in the study. However, the knowledge received may be of value to society.
                </p>

                <h3><b>Compensation & Costs</b></h3>
                <p class="text-justify">
                       You will be compensated for completing the game at the rate initially advertised. You will only be eligible for compensation if you have completed the game in full and supplied the appropriate confirmation code. There is no partial payment if you do not complete the study. You will not be penalized if you choose to withdraw from the study without completing it, but you will not be compensated either.
                </p>

                <h3><b>Confidentiality</b></h3>
                <p class="text-justify">
                       The data collected for the research does not include any personally identifiable information about you.
                </p>
                <p class="text-justify">
                        By participating in this research, you understand and agree that IIT Mandi may be required to disclose your consent form, data and other personally identifiable information as required by law, regulation, subpoena or court order. Otherwise, your confidentiality will be maintained in the following manner:
                </p>
                <p class="text-justify">
                        Your data and consent form will be kept separate. Your consent form will be stored in a locked location on IIT Mandi property and will not be disclosed to any third party. <br>By participating, you understand and agree that the data and information gathered during this study may be used by IIT Mandi and published and/or disclosed by IIT Mandi to others outside of IIT Mandi.
                </p>

                <h3><b>Right to Ask Questions & Contact Information</b></h3>
                <p class="text-justify">
                       If you have any questions about this study, you should feel free to ask them by contacting the Principal Investigator:
                </p>
                <blockquote>
            Dr. Varun Dutt<br>
            Applied Cognitive Science Lab<br>
                    A-09 Academic Block, Kamand North Campus<br>
            Indian Institute of Technology, Mandi<br>
            Kamand, Himachal Pradesh, India - 175075<br>
                        +91 (1905) 267-150<br>
                        varun@iitmandi.ac.in
                </blockquote>
                
                <p class="text-justify">
                        If you have questions later, desire additional information, or wish to withdraw your participation please contact the Principal Investigator by mail, phone or e-mail in accordance with the contact information listed above. 
                </p>
                <h3><b>Voluntary Participation</b></h3>
<p class="text-justify">
            Your participation in this research is voluntary. You may discontinue participation at any time during the research activity.
</p></p>
            <!--form starts here -->
            <form id="consent" style="margin: 0 auto" role="form" class="nesttable" action="consent.php?id=<?= isset($_GET['id']) ? $_GET['id'] : '' ?>" method="post">
                <input type="hidden" name="formsent" value="1"/>
<!--<div class="form-group">
        <label>I am 18 < ?php //echo $sno_arr[0] ;?> years or older.</label>
   
        <label class="radio-inline"><input type="radio" name="cq1" value="1" required> Yes</label>
   
        <label class="radio-inline"><input type="radio" name="cq1" value="0"> No</label>
    
    </div>
<div class="form-group">
        <label>I have read and understood the information provided completely.</label>
   
        <label class="radio-inline"><input type="radio" name="cq2" value="1" required> Yes</label>
   
    
        <label class="radio-inline"><input type="radio" name="cq2" value="0"> No</label>
   
    </div>
<div class="form-group">
        <label>I want to participate in this research and continue with the study.</label>
    
        <label class="radio-inline"><input type="radio" name="cq3" value="1" required> Yes</label>
    
    
        <label class="radio-inline"><input type="radio" name="cq3" value="0"> No</label>
   
    </div>-->
   <h4> <table style="text-align: left;">
                <tr>
                    <td colspan="2">I am age 18 or older.</td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <input type="radio" name="cq1" value="1"> Yes
                    </td>
                    <td style="text-align:center;">
                        <input type="radio" name="cq1" value="0"> No
                    </td>
                </tr>
                <tr><td>&nbsp;</td><td></td></tr>
                <tr>
                    <td>I have read and understood the information above.</td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <input type="radio" name="cq2" value="1"> Yes
                    </td>
                    <td style="text-align:center;">
                        <input type="radio" name="cq2" value="0"> No
                    </td>
                </tr>
                <tr><td>&nbsp;</td><td></td></tr>
                <tr>
                    <td>I want to participate in this research and continue with the game.</td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <input type="radio" name="cq3" value="1"> Yes
                    </td>
                    <td style="text-align:center;">
                        <input type="radio" name="cq3" value="0"> No
                    </td>
                </tr>
                </table></h4>
            </form>
            
            <br>
            
            <div style="position:relative; left:50%">
                <button type="submit" class="btn btn-primary btn-lg" onclick="document.getElementById('consent').submit();">Submit</div>
            
            
            <br><br>
        </div>
        </div>
<?php include 'footer.php'; ?>        
    </body>
</html>

<?php elseif (!$user_consent): ?>
<!-- If user is not eligible to participate -->
    <!DOCTYPE html>
    <html>
    <?php include 'head.php'; ?>
    <body>
        <div class="alert alert-danger">
            <h2><strong>Sorry!</strong></h2><br><h3>You are not eligible for participation.</h3> Click <a href="index.php">Here</a> for home page.</h3>
</div>
    </body>
    </html>

<?php 
        elseif ($user_consent):
        $_SESSION['consent']='true';
        header('Location: ./connect.php?id='.$my_cid);
            die();
        endif;
?>