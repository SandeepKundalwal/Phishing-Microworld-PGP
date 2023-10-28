
<?php include 'head.php'; 
session_start();?>

<style type="text/css">
        button{
    position:relative;
    left:50%;
}
        .containerx{
            width:100%;
        }
    
</style>

<!-- BODY STARTS HERE -->
<body>
    <!--HEADER -->
     <nav class="navbar navbar-inverse">
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
                    <li class="active"> <a href="index.php" class="kalam">Home</a> </li>
                    <li> <a href="instruction.php" class="kalam">Instructions</a> </li> 
                    <li> <a href="contact.php" class="kalam">Contact Us</a> </li> 
                </ul>
            </div>
            </div></div></div>
    </nav>
    <!-- BODY -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7">
                <iframe id=impress width=100% height="580px"    src ="impress2.html" frameborder="0"></iframe>
            </div>
            <div class="col-lg-5">
                <div class="jumbotron">
                <!-- TEXT STARTS  -->
                    <h2 class="text-center kalam">Phishing Email Detection Game</h2><br>
                    <p>The purpose of this study is to examine individual's understanding of phishing emails. You will be shown a series of emails and you will have to identify whether each email is genuine or a phishing email. <br><br><b>The study will take approximately 30 minutes.</b> If you are willing to participate, please click the button below.</p>
              <!--  <p>The motivation behind developing this game is to<b> improve the causal understanding of the people about Phishing.</b><br>Previous research shows that<b> public’s response</b> towords <b>Phishing emails </b> is very different</b> from what it ought to be. <br>
This game is designed to <b>increase public awareness</b> about Phishing Emails and <strong>balance risk perceptions</strong>.    -->                
                </p>
                    <!--BUTTON -->
<div class="container">
                <a href="index2.php"><button type="button" class="btn btn-primary btn-lg">PLAY</button></a>
</div>
                </div>
            </div>
        </div>  
    </div>
    <!--FOOTER -->
    <?php include 'footer.php'; ?>
</body>
</html>
<!-- JAVASCRIPT FOR AUTOMATIC REFRESHING OF frame embedded in the code page -->
<script type = "text/javascript">
    window.onload = function() {   
    setInterval(function refresh() {  
		document.getElementById('impress').contentDocument.location.reload(true);
    }, 5500);
} 
</script>

<?php
session_destroy();
?>