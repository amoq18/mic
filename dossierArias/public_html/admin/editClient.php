<!DOCTYPE html>
<html>

<head>
	<title>Strading Bank | Admin</title>
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
	<section id="inscrit" class="home-section bg-gray">
		<div class="container">
			<div class="pricing-area area-padding">
          <div class="container" >
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                  <h2 >Editer les informations du client</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <section class="wellcome-area" >
        <!--<div class="left_img">
          <img src="img/left-img.jpg" alt="">
        </div>-->
        <div id="output"></div>
        <div class="h_right_form">
          <div class="h_form_inner">

            <form class="row home_contact_form" action="" method="post" style="background-color: #00c1c1" enctype="multipart/form-data">


              <div class="form-group col-md-6" >
                <font color="white"><span>Nom <font color="red">*</font></span></font>
                <input type="text" name="nom" class="form-control" maxlength="60" id="nom" value="<?php if(NULL == @$_POST['nom']){echo @$_POST['name'];} ?>" required="" data-rule="minlen:4"/>
              </div>


              <div class="form-group col-md-6">
                <font color="white"><span>Prénom <font color="red">*</font></span></font>
                <input type="text" name="prenom" class="form-control" maxlength="60" value="<?php if(NULL == @$_POST['prenom']){echo @$_POST['first_name'];} ?>" required="" id="prenom" data-rule="minlen:4"/>
              </div>


              <div class="form-group col-md-6">
                <font color="white"><span>Email <font color="red">*</font></span></font>
                <input type="email" class="form-control" name="email" required="" id="email" maxlength="60" value="<?php if(NULL == @$_POST['email']){echo @$_POST['mail'];} ?>" data-rule="numero"/>
              </div>

              <div class="form-group col-md-6">
                <font color="white"><span>Adresse <font color="red">*</font></span></font>
                <input type="text" class="form-control" name="adresse" required="" id="adresse" maxlength="60" value="<?php if(NULL == @$_POST['adresse']){echo @$_POST['adress'];} ?>" data-rule="numero"/>
              </div>

              <div class="form-group col-md-6">
                <font color="white"><span>Pays de résidence <font color="red">*</font></span></font>
                <input type="text" class="form-control" name="pays" required="" id="pays" maxlength="60" value="<?php if(NULL == @$_POST['pays']){echo @$_POST['country'];} ?>" data-rule="numero"/>
              </div>

              <div class="form-group col-md-6">
                <font color="white"><span>Nom de la Banque <font color="red">*</font></span></font>
                <input type="text" class="form-control" name="nomBanque" required="" id="nomBanque" maxlength="60" value="<?php if(NULL == @$_POST['nomBanque']){echo @$_POST['banque'];} ?>" data-rule="numero"/>
              </div>

              <div class="form-group col-md-6">
                <font color="white"><span>IBAN <font color="red">*</font></span></font>
                <input type="text" class="form-control" name="iban" required="" id="iban" maxlength="60" value="<?php if(NULL == @$_POST['iban']){echo @$_POST['ibann'];} ?>" data-rule="numero"/>
              </div>

              <div class="form-group col-md-6">
                <center><font color="white""><span>BIC/SWIFT <font color="red">*</font></span></font></center>
                <input type="text" class="form-control" name="bicswift" required="" id="bicswift" maxlength="60" value="<?php if(NULL == @$_POST['bicswift']){echo @$_POST['bicswiftt'];} ?>" data-rule="numero"/>
              </div>

			  <div class="form-group col-md-6">
                <center><font color="white""><span>Montant <font color="red">*</font></span></font></center>
                <input type="text" class="form-control" name="montant" required="" id="montant" maxlength="60" value="<?php if(NULL == @$_POST['montant']){echo @$_POST['number'];} ?>" data-rule="numero"/>
            </div>

              <div class="form-group col-md-6">
                <center><font color="white""><span>Devise <font color="red">*</font></span></font></center>
                <input type="text" class="form-control" name="devise" required="" id="devise" maxlength="60" value="<?php if(NULL == @$_POST['devise']){echo @$_POST['devis'];} ?>" data-rule="numero"/>
              </div>
			<input type="hidden" name="key" value="<?php echo $_POST['key']; ?>">
		  <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
              <center><div class="form-group col-md-12">
                <button type="submit" value="submit" style="border: 1px solid #3EC1D5;
                color: #fff;
                background: #000;
                border-radius: 20px;
                padding: 15px">Enregistrer les modifications</button>
              </div></center>
            </form>


          </div>
        </div>
				</div>
			</div>

		</div>
	</section>
	
<?php
	if(!empty($_POST))
	{
		if(
			isset($_POST["nom"]) && 
			isset($_POST["prenom"]) &&
			isset($_POST["email"]) && 
			isset($_POST["adresse"]) &&
			isset($_POST["pays"]) &&
			isset($_POST["nomBanque"]) &&
			isset($_POST["iban"]) &&
			isset($_POST["bicswift"]) &&
			isset($_POST["devise"]) &&
			isset($_POST["montant"])
			
		)	
		{
			$nom = trim($_POST['nom']);
			$prenom = trim($_POST['prenom']);
			$email = trim($_POST['email']);
			$adresse = trim($_POST['adresse']);
			$pays = trim($_POST['pays']);
			$montant = trim($_POST['montant']);
			$nameBanque = $_POST["nomBanque"];
			$ibanCode = $_POST["iban"];
			$bicswiftCode = $_POST["bicswift"];
			$devise = $_POST["devise"];
			$password = $_POST['key']; 
			$id = $_POST['id'];
			$err = 0;
//echo $nom . '<br>' . $prenom . '<br>' . $email . '<br>' . '<br>' . $adresse . '<br>' . $pays . '<br>' . '<br>' . $montant . '<br>' . $nameBanque . '<br>' . $ibanCode . '<br>' . $bicswiftCode . '<br>' . $devise;
			if(empty($nom))
			{
				++$err;
			}
			if(empty($prenom))
			{
				++$err;
			}
			if(empty($email))
			{
				++$err;
			}
			if(empty($adresse))
			{
				++$err;
			}
			if(empty($pays))
			{
				++$err;
			}
			if(empty($montant))
			{
				++$err;
			}
			if(empty($nameBanque))
			{
				++$err;
			}
			if(empty($ibanCode))
			{
				++$err;
			}
			if(empty($bicswiftCode))
			{
				++$err;
			}
			if(empty($devise))
			{
				++$err;
			}
			
			if($err == 0)
			{
				/*******************************************
				 ** Envoie des infos dans la base de données
				 * *****************************************/

				include('../dbInfos.php');

				//ON CREE LA BASE DE DONNEES


				try
				{
					$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;	
					$dbc = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME, DB_USER, DB_PASSWORD, $pdo_options);
					$encoding = $dbc->prepare("SET NAMES UTF8");
					$encoding->execute();
					
					$query = $dbc->prepare("UPDATE " . DB_CLIENTS_TABLE . " SET name = '" . $nom . "', prenom = '" . $prenom . "' , email = '" . $email . "' , adresse = '" . $adresse . "' , pays = '" . $pays . "' , nameBanque = '" . $nameBanque ."', iban = '" . $ibanCode ."', bicswift = '" . $bicswiftCode ."', montant = '". $montant. "', devise = '" . $devise . "' WHERE clientId = '". $id ."' AND password = '" . $password . "'");
					$response = $query->execute();
					echo '<script type="text/javascript">alert(\'Les informations ont été modifiés avec succès\');</script>';
					echo '<script type="text/javascript">location.replace(\'administration.php\');</script>';
				}
				catch(Exception $err)
				{
					die('Erreur: ' . $err->getMessage());
				}
			}
			else
			{
				echo '<center><font color="red">Veuillez remplir tout les champs du formulaire</font></center>';
			}
		}
	}
?>

</body>
</html>
