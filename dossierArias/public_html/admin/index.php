<!DOCTYPE html>
<html>

<head>
	<title>Fortex Banque | Admin</title>
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<meta charset="utf-8" />
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- css -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">

	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/style.css" rel="stylesheet" media="screen">
	<link href="color/default.css" rel="stylesheet" media="screen">
	<link href="../strand.png" rel="icon">


</head>

<body>

	<!-- Contact -->
	<section id="demande" class="home-section bg-gray">
		<div class="container">
			<div class="pricing-area area-padding">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="section-headline text-center">
								<h2 id="demande" >Connexion</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<section class="wellcome-area" >
        <!--<div class="left_img">
          <img src="img/left-img.jpg" alt="">
      </div>-->
      <div id="erreur"></div>
      <div class="h_right_form">
      	<div class="h_form_inner">

      		<form class="row home_contact_form" action="administration.php" method="post" style="background-color: #00c1c1" >


      			<div class="form-group col-md-6" >
      				<font color="white"><span>Nom d'utiliateur <font color="red">*</font></span></font>
      				<input type="text" class="form-control" id="username" name="username" required="">
      			</div>


      			<div class="form-group col-md-6">
      				<font color="white"><span>Mot de passe <font color="red">*</font></span></font>
      				<input type="password" class="form-control" id="password" name="password" required="">
      			</div>

      			<center><div class="form-group col-md-12">
      				<input type="button" id="submit" name="submit" value="connecter" style="border: 1px solid #3EC1D5;
      				color: #fff;
      				background: #000;
      				border-radius: 20px;
      				padding: 15px"></button>
      				<input name="submit" id="submit1" value="" type="submit">
      			</div></center>
      		</form>
      		<p><center><a href="recovery.php">Nom d'utilisateur ou mot de passe oublié<a/></center></p>
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
      	</div>
      </div>
  </div>
</div>

</div>
</section>



<!-- js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/mb.bgndGallery.js"></script>
<script src="js/mb.bgndGallery.effects.js"></script>
<script src="js/jquery.simple-text-rotator.min.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/grid.js"></script>
<script src="js/stellar.js"></script>
<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Custom Javascript File -->
<script src="js/custom.js"></script>

</body>
</html>
