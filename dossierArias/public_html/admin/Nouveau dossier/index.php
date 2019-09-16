<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>BNP FORTIS</title>
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<script src=''></script>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicons -->
	<link href="img/favicon.png" rel="icon">
	<link<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>BNP FORTIS</title>
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<script src=''></script>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicons -->
	<link href="img/favicon.png" rel="icon">
	<link href="img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

	<!-- Bootstrap CSS File -->
	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Libraries CSS Files -->
	<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="lib/animate/animate.min.css" rel="stylesheet">
	<link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

	<!-- Main Stylesheet File -->
	<link href="css/style.css" rel="stylesheet">
  </head>

  <bod<!y>

      <section id="contact" class="section-bg wow fadeInUp">
      	<div class="container">

      		<div class="section-header">
      			<h3>Connexion</h3>
      		</div>
		<div id="erreur"></div>
      		<div class="form">
      			<div id="sendmessage"></div>
      			<div id="errormessage"></div>
      			<form action="administration.php" method="post" role="form" class="contactForm" onkeypress="if(event.keyCode == 13){return false;}">
      				<div class="form-row">
      					<div class="form-group col-md-6">
                  <span>Nom d'utilisateur * </span>
                  <input type="text" name="username" class="form-control" required="" id="username" data-rule="minlen:4"/>
                  <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                  <span>Mot de passe * </span>
                  <input type="password" class="form-control" name="password" required="" id="password" data-rule="numero"/>
                  <div class="validation"></div>
                </div>
<!--		<center> <div class="text-center"><button type="submit"></button></div></center>-->
		<center> <div class="text-center"><input type="button" id="submit" name="submit" value="Se Connecter"></div>
		<input name="submit" id="submit1" value="" type="submit"></center>
            </form>
          </div>
					<p><center><a href="recovery.php">Nom d'utilisateur ou mot de passe oublié<a/></center></p>

        </div>

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
									$('#erreur').html('<p style="color:red;">Nom d\'utilisateur ou mot de passe incorrect</p>');
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
   <!-- JavaScript Libraries -->
   <script src="lib/jquery/jquery.min.js"></script>
   <script src="lib/jquery/jquery-migrate.min.js"></script>
   <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="lib/easing/easing.min.js"></script>
   <script src="lib/superfish/hoverIntent.js"></script>
   <script src="lib/superfish/superfish.min.js"></script>
   <script src="lib/wow/wow.min.js"></script>
   <script src="lib/waypoints/waypoints.min.js"></script>
   <script src="lib/counterup/counterup.min.js"></script>
   <script src="lib/owlcarousel/owl.carousel.min.js"></script>
   <script src="lib/isotope/isotope.pkgd.min.js"></script>
   <script src="lib/lightbox/js/lightbox.min.js"></script>
   <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
   <!-- Contact Form JavaScript File -->
   <script src="contactform/contactform.js"></script>

   <!-- Template Main Javascript File -->
   <script src="js/main.js"></script>


 </body>
 </html>
