<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Fortex Banque</title>
	<script src=''></script>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicons -->
	<link href="img/favicon.png" rel="icon">
	<link<!DOCTYPE html>
<html lang="en">
<head>

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
      			<h3>Redéfinir Nom d'utilisateur et Mot de passe</h3>
      		</div>
      		<div class="form">
      			<div id="sendmessage"></div>
      			<div id="errormessage"></div>
      			<form action="" method="post" role="form" class="contactForm" >
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
                <div class="form-group col-md-6">
                  <span>Confirmé mot de passe * </span>
                  <input type="password" class="form-control" name="Cpassword" required="" id="Cpassword" data-rule="numero"/>
                  <div class="validation"></div>
                </div>
<!--		<center> <div class="text-center"><button type="submit"></button></div></center>-->
                <input type="submit" id="submit" name="submit" value="Redéfinir" style="border: 1px solid #3EC1D5;
                color: #fff;
                background: green;
                height: 100%">
            </form>
          </div>
        </div>

    <?php
        	if(
              isset($_POST['username']) &&
              isset($_POST['password']) &&
              isset($_POST['Cpassword'])
            )
        	{
        		$username = htmlspecialchars(trim($_POST['username']));
        		$password = htmlspecialchars($_POST['password']);
            $Cpassword = htmlspecialchars($_POST['Cpassword']);
            $err = 0;

            if(empty($username))
      			{
      				++$err;
      			}
      			if(empty($password))
      			{
      				++$err;
      			}
      			if(empty($Cpassword))
      			{
      				++$err;
      			}

      			if($err == 0)
      			{
      				if($password == $Cpassword)
              {
                /*******************************************
        				 ** Envoie des infos dans la base de données
        				 * *****************************************/

        				include('../dbInfos.php');

                try
            		{
            			$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            			$dbc = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME, DB_USER, DB_PASSWORD, $pdo_options);
            			$encoding = $dbc->prepare("SET NAMES UTF8");
            			$encoding->execute();

                  $query = $dbc->prepare("SELECT username  FROM " . DB_ADMIN_TABLE . "");
                  $query->execute();
                  while($data = $query->fetch())
              		{
              			$key = $data['username'];
                  }

                  $query = $dbc->prepare("UPDATE " . DB_ADMIN_TABLE . " SET username = '" . $username . "', password = '" . $password . "' WHERE username = '" . $key ."'");
        					$response = $query->execute();
            			echo '<script type="text/javascript">location.href = "index.php";</script>';
            		}
            	 	catch(Exception $err)
            	 	{
            	 		die('Erreur: ' . $err->getMessage());
            	 	}
              }
              else
              {
                echo '<center><font color="red">Mot de passe incorrect</font></center>';
              }
      			}
      			else
      			{
      				echo '<center><font color="red">Veuillez remplir tout les champs du formulaire</font></center>';
      			}
        	}
    ?>

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
