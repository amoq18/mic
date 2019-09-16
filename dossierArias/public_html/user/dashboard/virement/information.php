<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from uniata-bank.com/register-custom.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Nov 2018 10:47:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Fortex Institut | Virement</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="text/styl.html">
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
<![endif]-->       
<link rel="shortcut icon" href="icon.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

<?php include("header.php")?>

    <section id="contact-page" style="background-color: #e9e4e1">
        <div class="container">
            <div class="center">        	<br>	<br>
                <h2>COORDONNEE BANCAIRE</h2>
            </div> 
            <div class="row contact-wrap"> 
                <div id="output" ></div>
                <div class="status alert alert-success" style="display: none"></div>
                <form method="post" action="codetransfer.php" role="form" class="contactForm">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">


                        </div>

                        <div class="form-group">
                            <label for="form_lastname">Nom et Pr&eacute;nom </label>
                            <input type="text" class="form-control" name="name" id="name" data-rule="email" value="<?php /*if(isset($_POST['name'])){echo $_POST['name']; } */?>" required="" style="border: solid;"/>
                            <div class="validation"></div>
                        </div>

                        <div class="form-group">
                         <label for="form_firstname">Nom de la banque </label>
                         <input type="text" class="form-control" name="banque" id="nameBanque" data-rule="email" rule="minlen:4" value="<?php /* if(isset($_POST['iban'])){echo $_POST['iban'];} */?>" required="" style="border: solid;"/>
                         <div class="validation"></div>
                     </div>
                     <div class="form-group">
                         <label for="form_birthday">BIC/SWIFT </label>
                         <input type="text" class="form-control" name="bicswift" id="bicswift" data-rule="email" rule="minlen:4" value="<?php /*if(isset($_POST['bicswift'])){echo $_POST['bicswift'];} */?>" required="" style="border: solid;"/>
                         <div class="validation"></div>
                     </div>  
                 </div>
                 <div class="col-sm-5 col-sm-offset-1" style="margin-top: 15px">
                    <div class="form-group">
                        <label for="form_mail">Montant</label>
                        <input type="text" name="umontant" class="form-control" id="umontant" data-rule="minlen:4" rule="minlen:4" value="<?php if(isset($_POST['montant'])){echo $_POST['montant'];}else if(isset($_POST['umontant'])){echo $_POST['umontant'];} ?>" required=""  style="border: solid;"/>
                        <div class="validation"></div>
                    </div>
                    <!--div class="form-group">
                        <label for="form_mail1">Code de transfert</label>
                        <input type="password" class="form-control" name="code" id="code" data-rule="email" required="" onKeyDown="if(event.keyCode==13) return false;" id="myInput" value="<?php if(isset($_POST['code'])){echo $_POST['code'];} ?>" style="border: solid;"/>
                        <div class="validation"></div>
                    </div-->
                    <div class="form-group">
                        <label for="form_celephone">IBAN</label>
                        <input type="text" name="iban" class="form-control" id="iban" data-rule="minlen:4"  required="" value="<?php /*if(isset($_POST['banque'])){echo $_POST['banque'];} */?>" style="border: solid;"/>
                        <div class="validation"></div>
                    </div>                        
                </div>
              <center>  <div class="form-group">
                 <br>
                 <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Demarrer le virement</button>
             </div></center>
         </form> 
     </div><!--/.row-->
 </div><!--/.container-->
</section><!--/#contact-page-->





<!--Traitement du formulaire-->
<?php
/*
if(!empty($_POST))
{
    if(
        NULL !== @$_POST['code'] &&
        NULL !== $_POST['umontant'] &&
        NULL !== $_POST['banque'])  
    {

        $code = $_POST['code'];
        $montant = $_POST['umontant'];
        $banque = $_POST['banque'];
        $err = 0;
        if(empty($code))
        {
            ++$err;
        }
        if(empty($montant))
        {
            ++$err;
        }
        if(empty($banque))
        {
            ++$err;
        }

        if($err == 0)
        {
            define('CODE','stra687');
            if($code != CODE)
            {


                echo '<script type=text/javascript> var message = "<center><label><font color=\"red\">Code de transfert incorrect</font></label></center>"; </script>';
            } 
            else
            {

                echo '<script language="Javascript">document.location.replace("assurance.php#pricing");</script>';
                    //echo '<script type="text/javascript> location.replace(\'code1.php\')</script>';
            }
        }
        else
        {
            echo '<script type=text/javascript> var message = "<center><label><font color=\"red\">Veuillez remplir tous les champs</font></label></center>"; </script>';
        }

        echo '<script type=text/javascript> document.getElementById("output").innerHTML = message; </script>';
    }
}*/
?>







<?php include("footer.php") ?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>
</body>
</html>