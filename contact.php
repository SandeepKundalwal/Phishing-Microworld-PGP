<!-- contact page -->
     <?php include 'head.php';error_reporting(0); ?>
<body>
    <!--HEADER -->
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
                    <li> <a href="instruction.php" class="kalam">Instructions</a> </li> 
                    <li class="active"> <a href="contact.php" class="kalam">Contact Us</a> </li> 
                </ul>
            </div>
            </div></div></div>
    </nav><br><br><br><br>
    <?php session_start();
if(!empty($_SESSION['megha']) && $_SESSION['mail'] == true) {
echo "
<div class=\"container-fluid\">
    <div class=\"alert alert-success\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><h2><i class='fa fa-paper-plane'></i>
    <strong>Thanks ";echo $_SESSION['megha'] ;echo "!</strong></h2>. <p>Your message has been delivered.</p>
    </div></div>
";
}
session_destroy();
    ?>
    <div class="container-fluid">
        <div class="jumbotron"><h1 class="text-center"><i class="fa fa-users"></i> The Team</h1></div>
    <div class="row">
        <div class="col-md-4">
    <blockquote>
        <h4 class="kalam">Faculty Advisor:</h4><br>
        <embed src="varun.jpg" height="150" width="150">
        
        <a href="http://faculty.iitmandi.ac.in/~varun/"><h3><b>Dr. Varun Dutt</b></h3></a><br>
    <i class="fa fa-user"></i> Associate Professor<br>
    <a href="http://www.acslab.org/"><i class="fa fa-plus-square"></i> ACS Lab</a><br>
    <a href="http://www.iitmandi.ac.in"><i class="fa fa-external-link"></i>Indian Institute of Technology, Mandi</a><br>
    <i class="fa fa-map-marker"></i> Himachal Pradesh, India - 175075<br>
    <i class="fa fa-phone"></i> +91 (1905) 267-150<br>
    <i class="fa fa-envelope-o"></i> varun@iitmandi.ac.in<br>
    </blockquote>
        </div><div class="col-md-4">
    <blockquote>
        <h4 class="kalam">Project Associate:</h4><br>
        <embed src= "" height="150" width="150">
        
        <a href="https://in.linkedin.com/in/megha-sharma-814153141?trk=pub-pbmap"><h3><b>Ms. Megha Sharma</b></h3></a><br>
    <i class="fa fa-user"></i> M.S. Student<br>
    <a href="http://www.acslab.org/"><i class="fa fa-plus-square"></i> ACS Lab</a><br>
        <a href="http://www.iitmandi.ac.in"><i class="fa fa-external-link"></i>Indian Institute of Technology, Mandi</a><br>
    <i class="fa fa-map-marker"></i> Himachal Pradesh, India - 175075<br>
    <i class="fa fa-phone"></i> +91 7014970567<br>
    <i class="fa fa-envelope-o"></i> s21011@students.iitmandi.ac.in<br>
    </blockquote>
        </div><div class="col-md-4">
    <blockquote>
    </blockquote>
        </div>
    </div></div>

    <div class="container-fluid">
    <!-- BODY --><div class="jumbotron">
        <h1 class="text-center"><i class="fa fa-paper-plane-o"></i>Contact</h1><br> 
        <form role="form" method="post" action="contact_process.php" id = form1 name="form1">
            <div class="form-group">
        <label>Name:</label>
                <input type="text" class="form-control" id="usr" name="name" required> </div>
            <div class="form-group">
        <label>Email ID:</label>
                <input id='email' type="email" class="form-control" name="email" required> </div>
        <div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment" name = body required></textarea>
</div>
            <input type='submit' class="btn btn-primary btn-lg" style="position:relative; left:50%" name="Send" value="Send">
        </form>
    </div></div>
    <!-- FOOTER -->
    
    <?php include 'footer.php';?>
</body>
</html>