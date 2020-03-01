
<?php/*
header('Location: index.php');
exit;*/
?>
<?php
session_start() ;
 session_destroy();
session_start() ;  ?>

<?php
// Create connection
//$bdd= new PDO('mysql:host=sql210.hebergratuit.net;dbname=heber_24275120_mydb','heber_24275120','adnen1997',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)) ;
$bdd= new PDO('mysql:host=localhost;dbname=mydb','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)) ;
// Check connection
//if ($bdd->connect_error) {
  //  die("Connection failed: " . $bdd->connect_error);  }

 
/* $servername = "localhost";
$username = "root";
$password = "";
$dbname = "logins";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);  }*/
   
 ?>
<!DOCTYPE html>
<html>
 <head>
     <title>psynet</title>

     <link rel="icon" type="image/png" href="bs.ico" /> 
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1"/>
     <meta name="keywords" content="Grade Responsive web template, Bootstrap Web Templates, Flat Web Templates,   Android Compatible web template, 
     Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
     <!-- Style-CSS -->
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> 
     <link href="css/style1.css" rel='stylesheet' type='text/css' media="all">
     <link rel="stylesheet" type="text/css" href="site.css">
     <link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
     <!-- //css files -->
    
     <!--web font-->
     <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
     <!--//web font-->
 </head>
 <body>
 	 <div class="fluid-container">
         <header class="row">
             <?php require 'header.php' ; ?>    
	     </header>

 <?php require 'slideshow.php' ; ?>   
            
           
         <div class="container">
            
            <div>
                <a href="quiz.php">Depression Test</a><br>
                <a href="quiz.php">Autism Test</a><br>

                <a href="quiz.php">Addiction Test</a><br>
                <a href="quiz.php">Stress Test</a><br>

            </div>
              
		 </div>
		
 <?php require 'dr.php' ; ?>
          
         <footer id="foo" class="row">
             <div class="col-lg-12">
             <?php require 'footer.php' ; ?>
             </div>	     
         </footer>
     </div>
     <script type="text/javascript">
          email=document.getElementById("defaultLoginFormEmail") ;
        mdp=document.getElementById("defaultLoginFormPassword") ;
        signin=document.getElementById("signin") ; 
         function connVerif(){
            if(email.value==""){ 
                signin.type="button" ;
                email.focus() ;
            }
               else if (mdp.value==""){ 
                signin.type="button" ;
                mdp.focus() ;    }
                else{signin.type="submit" ;}}
           //Pour masquer la division :
         /*  document.getElementById("inscri").style.display ="none" ;
            ///Pour afficher la division :
         function register() {
             document.getElementById("inscri").style.display ="block"; 
             document.getElementById("login").style.display ="none"; 
             }
         function signin() {
             document.getElementById("inscri").style.display ="none"; 
             document.getElementById("login").style.display ="block"; 
             }*/
     </script>
     <script src="js/jquery-2.2.4.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
 </body>
</html>
