<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from uniata-bank.com/register-custom.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Nov 2018 10:47:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Fortex Institut</title>
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>

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
<link rel="shortcut icon" href="../img/fort.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

	<?php include("header.php")?>
  
        
            <section id="contact-page" style="margin-left:  auto; margin-right: auto; color: #000; background-color: #e9e4e1  " >
               <div class="container">
                  <div class="row contact-wrap">
                     <div class="status alert alert-success" style="display: none;" ></div>
                     <form method="post" action="dashboard/index.php" role="form" class="contactForm" onkeypress="if(event.keyCode == 13){return false;}">
                        <div class="col-sm-5 col-sm-offset-1">
                        </div>
                        <div class="col-sm-5 col-sm-offset-1">
                        </div>
                        <center>
                        <div class="col-sm-5">
                           <div class="form-group">
                              <legend style="color:blue; font-weight:Bold;">Informations de connexion</legend>
                              <p><div id="erreur"></div></p>
                              <label for="form_username">Identifiant </label>
                              <input type="text" name="username" class="form-control" id="username" placeholder="" required="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="background-color: #e9e4e1; border: solid;"/>
                          </div>
                          <div class="form-group">
                              <label for="form_password">Mot de passe </label>
                              <input type="password" name="password" class="form-control" id="password" placeholder="" required="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="background-color: #e9e4e1; border: solid;"/>
                          </div>
                          <br>
                          <div class="form-group">

                              <input type="button" id="submit" name="submit" value="Connexion" class="btn btn-primary btn-lg">
                              <input name="submit" id="submit1" value="" type="submit">
                          </div>
                      </div>
                      </center>
                  </form>
              </div><!--/.row-->
          </div><!--/.container-->
      </section><!--/#contact-page-->

      <script type="text/javascript">
          $(document).ready(function(){

            $('#submit1').css({
               display : "none"
           });


            $('#submit').click(function(){

               verif();
           });

            $('form').keyup(function(touche){

               var appui = touche.which || touche.keyCode;

               if (appui == 13) {

                  verif();
              }
          });


            function verif(){

              var username = $('#username').val();
              var password = $('#password').val();

              $.post(

                 'traitementAjax.php',
                 {
                    username:username,
                    password:password
                },
                function(donnees){

                 var retour = donnees;


                 if (retour == 'false') {
                   $('#erreur').html('<p style="color:red;">Identifiant ou mot de passe incorrect</p>');
               }else if(retour == 'true'){
                   $('#submit1').trigger('click');
               }else{
                   $('#erreur').html('<p style="color:red;">Un problème est survenue veuillez reesayer</p>');
               }
           }

           )
          }

      });
  </script>

<?php include("footer.php") ?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>
</body>
</html>
