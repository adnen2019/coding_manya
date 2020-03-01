
<!DOCTYPE html>
<html>
 <head>
     <title>s'inscrire</title>
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
 <body onload="First()">
     <div class="fluid-container">
         <header class="row">
             <?php require 'header.php' ; ?>    
         </header>
           
          <?php require 'slideshow.php' ; ?>   
            
           
         <div class="container">
            <div class="row">
            <div class="col-6"style="font-size:24px ;"><strong>What is the problem we're trying to solve?</strong><br>Treatment of psychological problems is no longer easy these days when the daily commitments of the individual increase, the free time is reduced and openness to others has become a complex uncomfortable process. In addition, the application of the educational capabilities of the students of psychology is not easy due to the lack of opportunities for application..</div>   
            <div class="col-6"style="font-size:24px ;"><strong>How we plan to solve it?</strong><br>Digitalisation of the psychiatry field by creating a confidential and secured website that provides non-judgemental emotional support either threw professional sessions by doctors or by interacting with psychology students who -as a result- can build a solid e-reputation as future psychiatrist.</div>   

            </div>
         </div>
           
         <div class="container">
               <div class="row">
 <?php
 // Create connection
//$bdd= new PDO('mysql:host=sql210.hebergratuit.net;dbname=heber_24275120_mydb','heber_24275120','adnen1997',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)) ;
 $bdd= new PDO('mysql:host=localhost;dbname=mydb','root','') ;
 // Check connection
 //if ($bdd->connect_error) {
   // die("Connection failed: " . $bdd->connect_error);  }   
        // if (isset($_POST['signup']))
          if(isset($_POST["signup"])){$numrow=0;
           if( empty($_POST["nom"])|| empty($_POST["prenom"])|| empty($_POST["email"])|| empty($_POST["mdp"])){ 
             echo "<script>alert('ERREUR : tous les champs obligatoires n ont pas ete renseignes');</script>";
             }
             else if(empty($_POST["tel"]))
                { $reponse= $bdd->prepare('SELECT * FROM logins  where email=?  ') ;
                     $reponse->execute(array($_POST['email'])) ;
                   // $donnees=$reponse->fetch() ;
                      while($donnees=$reponse->fetch())
                 {$numrow+=1;
                  echo "<script>alert('ERREUR :email déja utilisée');</script>";}
                     if($numrow==0){       $requete = $bdd->prepare('INSERT INTO logins(nom,prenom,email,mdp) VALUES(?,?,?,?)') ;
            $requete->execute(array($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['mdp'])) ;
        echo 'votre compte a éte crée avec succee' ;}
             }
              else 
                { $reponse= $bdd->prepare('SELECT * FROM logins  where email=?  ') ;
                     $reponse->execute(array($_POST['email'])) ;
                   // $donnees=$reponse->fetch() ;
                      while($donnees=$reponse->fetch())
                 {$numrow+=1;
                  echo "<script>alert('ERREUR :email déja utilisée');</script>";}
                     if($numrow==0){       $requete = $bdd->prepare('INSERT INTO logins(nom,prenom,email,mdp,tel) VALUES(?,?,?,?,?)') ;
            $requete->execute(array($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['mdp'],$_POST['tel'])) ;
            echo "<script>window.open('index.php#login','_self')</script>" ;
            echo "<script>alert('votre compte a été crée avec succée');</script>";}
             }
         } 
        ?>

  

   </div>     

<div id="inscri" class="row inscription">
 <div class="col-lg-2 col-md-1 "></div>
 <div class="col-lg-8 col-md-10 col-sm-12">
 <!-- Default form register -->
 <form  class="text-center border border-light p-5" method="POST">

    <p class="h4 mb-4">inscription</p>

    <div class="form-row mb-4">
        <div class="col-sm-12 col-md-6 mb-4">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="nom" name="nom">
        </div>
        <div class="col-sm-12 col-md-6">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="prenom" name="prenom">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">

    <!-- Password -->
    <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="mot de passe" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="mdp">
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        Au moins 8 characteres 
    </small>

    <!-- Phone number -->
    <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="numero de telephone" aria-describedby="defaultRegisterFormPhoneHelpBlock" name="tel">
    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
        Optionel 
    </small>
    



    <!-- Newsletter -->
    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
        <label class="custom-control-label" for="defaultRegisterFormNewsletter">s'inscrire a nos newsletter</label>
    </div>
    <div id="alerte"></div>
    <!-- Sign up button -->
        
    <button id="signup" onclick="formVerif()"  class="btn btn-info my-4 btn-block" type="button" name="signup">inscription</button>

    <!-- Social register -->
   

    <hr>

    <!-- Terms of service -->

  </form>
 <!-- Default form register -->
 <div class="col-lg-2 col-md-1 "></div>
 </div>
 
</div>


</div>

            <div class="row">  
            
            </div>
            
         <footer id="foo" class="row">
             <div class="col-lg-12">
             <?php require 'footer.php' ; ?>
             </div>      
         </footer>
     </div>
    <script type="text/javascript">
        first_name=document.getElementById("defaultRegisterFormFirstName") ;
        last_name=document.getElementById("defaultRegisterFormLastName") ;
        email=document.getElementById("defaultRegisterFormEmail") ;
        mdp=document.getElementById("defaultRegisterFormPassword") ;
        signup=document.getElementById("signup") ;  
         alerte=document.getElementById("alerte") ;
             //Pour masquer la division :
         // document.getElementById("patient").style.display ="none" ;
         // document.getElementById("psycho").style.display ="none" ;
        //  document.getElementById("Student").style.display ="none" ;

            ///Pour afficher la division :
         function patient() {
             document.getElementById("patient").style.display ="block"; 
             document.getElementById("psycho").style.display ="none"; 
             document.getElementById("student").style.display ="none"; 
             }
               function psycho() {
             document.getElementById("patient").style.display ="block"; 
             document.getElementById("psycho").style.display ="none"; 
             document.getElementById("student").style.display ="none"; 
             }
               function student() {
             document.getElementById("patient").style.display ="block"; 
             document.getElementById("psycho").style.display ="none"; 
             document.getElementById("student").style.display ="none"; 
             }

        function formVerif(){
            if(first_name.value==""){ 
                signup.type="button" ;
                first_name.focus() ;
            }
               else if (last_name.value==""){ 
                signup.type="button" ;
                last_name.focus() ;                
               }
               else if (email.value==""){
                signup.type="button" ;
                email.focus() ;              
               }
                  else if     (mdp.value==""){
                signup.type="button" ;
                mdp.focus() ;
                
               }
               else if     (mdp.value.length<8){
                signup.type="button" ;
                mdp.focus() ;
                alert("At least 8 characters");
               }
                else {signup.type="submit" ;
                
                }
         }
        // When the user clicks on the password field, show the message box
              function First() { first_name.focus() ;
              }

          //mdp.onfocus = function() { document.getElementById("message").style.display = "block";}

                // When the user clicks outside of the password field, hide the message box
                /*mdp.onblur = function() {
                  document.getElementById("message").style.display = "none";
                }
                // When the user starts to type something inside the password field
                mdp.onkeyup = function() { 
                // Validate length
                  if(myInput.value.length >= 8) {
                    length.classList.remove("invalid");
                    length.classList.add("valid");
                  } else {
                    length.classList.remove("valid");
                    length.classList.add("invalid");
                  }
                }*/

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
<?php //$bdd->close(); ?>