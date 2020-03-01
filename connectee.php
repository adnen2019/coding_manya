<?php session_start() ;
if(empty($_SESSION['nom'])){echo "<script>window.open('index.php#login','_self')</script>";}  ?>
<!DOCTYPE html>
<html>
 <head>
     <title>site</title>
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
            
     
           <div class="row abc">  site</div>
             <div class="row">  
           
            </div>
           
         <div class="container">


<div class="row">Vous êtes connecté ! <br>
  <?php
  echo "Bonjour! " ;
  echo  $_SESSION['nom']." ";
   echo   $_SESSION['prenom'].'<br>' ;
   echo "vous pouvez maintenant "
     //   echo $_SESSION['email'].'<br>';
          //  echo        $_SESSION['mdp'].'<br>' ;
        //        echo    $_SESSION['tel'].'<br>' ;
                      ?>
</div>




</div>
            
           <div class="row abc"> site</div>
         <footer id="foo" class="row">
             <div class="col-lg-12">
             <?php require 'footer.php' ; ?>
             </div>      
         </footer>
     </div>
     <script type="text/javascript">
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

