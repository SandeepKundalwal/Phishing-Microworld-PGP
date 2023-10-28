
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
  .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  text-align:center;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;

}

.sidenav a:hover{
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}  
</style>

<!-- BODY STARTS HERE -->
<body>
    <!--HEADER -->
   <!--  <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Logo 
            <div class="row"> <div class=col-md-1> <a href="index.php"><embed height="50" width="50" src="21.png"></a></div>
            <div class="col-md-11">
            <div class="navbar-header">
           
                <a href="index.php" class="navbar-brand kalam">Phishing Email Detection Game</a>
            </div>
            <!-- Menu Items 
            <div class="collapse navbar-collapse" id="mainNavBar">
                <ul class="nav navbar-nav">
                    <li class="active"> <a href="index.php" class="kalam">Home</a> </li>
                    <li> <a href="instruction.php" class="kalam">Instructions</a> </li> 
                    <li> <a href="contact.php" class="kalam">Contact Us</a> </li> 
                </ul>
            </div>
            </div></div></div>
    </nav>-->
    <!-- BODY -->
   <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7">
                <iframe id=impress width=100% height="580px"    src ="impress2.html" frameborder="0"></iframe>
            </div>
            <div class="col-lg-5">
                <div class="jumbotron">-->
                <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php">Home</a>
  <a href="instruction.php">Instructions</a>
  <a href="contact.php">Contact Us</a>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

                <!-- TEXT STARTS  -->
                
                    <h2 class="text-center kalam">Phishing Email Detection Game</h2><br>
                    <p>Most of the people nowadays own mobile phones and this game is designed to help them understand the issue of Phishing better and<strong> develop a degree of resistance </strong>against any attempts in the future to steal their personal information.<br>  People tend to think that the risk is always much greater when dealing with financial, emergency, or social threats when in reality, <b>when dealing with a Phishing email, the risk is the same </b>as when the person is dealing with a physical threat.</p>
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
function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<?php
session_destroy();
?>