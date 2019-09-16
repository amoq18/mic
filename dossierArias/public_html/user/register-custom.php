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
<link rel="shortcut icon" href="images/ico/favicon.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<?php include("header.php")?>

        <section id="contact-page" style="background-color: #e9e4e1">
        	<div class="container">
        		<div class="center">
        			<h2>Remplissez le formulaire</h2>
        			<p class="lead">Créez votre compte.</p>
        			<div id="output"></div>
        		</div>
        		<div class="row contact-wrap">
        			<div class="status alert alert-success" style="display: none"></div>
        			<form method="post" action="" role="form" class="contactForm" enctype="multipart/form-data">
        				<div class="col-sm-5 col-sm-offset-1">
        					<div class="form-group">
        						<legend style="font-weight:Bold;">Informations personnelles</legend>
        						<input type="radio" name="civilite" id="civilite"  value="Madame." autofocus="" checked="checked" required=""/>Mme
        						<input type="radio" name="civilite" id="civilite"  value="Mademoiselle" autofocus="" required=""/>Mlle
        						<input type="radio" name="civilite" id="civilite"  value="Monsieur" autofocus="" required="" />M.
        						<div class="validation"></div>

        					</div>
        					<div class="form-group">
        						<label for="form_name">Nom </label>
        						<input type="text" name="name" class="form-control" id="name" placeholder="" required="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="border: solid;" />
        					</div>
        					<div class="form-group">
        						<label for="form_prenom">Pr&eacute;nom(s) </label>
        						<input type="text" name="prenom" class="form-control" id="prenom" placeholder="" required="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="border: solid;"/>
        					</div>
        					<div class="form-group">
        						<label for="form_birthday">Date de naissance </label>
        						<input type="text" name="birthday" class="form-control" id="birthday" placeholder="JJ/MM/AAAA" required="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="border: solid;"/>
        					</div>
        					<div class="form-group">
        						<label for="form_addresse">Adresse compl&egrave;te</label>
        						<input type="text" name="adresse" class="form-control" id="adresse" placeholder="" required="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="border: solid;"/>
        					</div>
        					<div class="form-group">
        						<label for="form_postal_code">Code postal </label>
        						<input type="text" name="postal_code" class="form-control" id="postal_code" placeholder="" required="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="border: solid;"/>
        					</div>
        					<div class="form-group">
        						<label for="form_city">Ville </label>
        						<input type="text" name="city" class="form-control" id="city" placeholder="" required="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="border: solid;"/>
        					</div>
        					<div class="form-group">
        						<label for="form_pays" class=" ">Pays</label>
        						<select size="1" name="pays" class="form-control" autofocus="" required="" style="border: solid;">
        							<option value="country">Pays</option>
        							<option>Afghanistan</option>
        							<option>Albania</option>
        							<option>Algeria</option>
        							<option>Angola</option>
        							<option>Anguilla</option>
        							<option>Antarctica</option>
        							<option>Antigua and Barbuda</option>
        							<option>Argentina</option>
        							<option>Armenia</option>
        							<option>Aruba</option>
        							<option>Australia</option>
        							<option>Austria</option>
        							<option>Azerbaijan</option>
        							<option>Bahamas</option>
        							<option>Bahrain</option>
        							<option>Bangladesh</option>
        							<option>Barbados</option>
        							<option>Belarus</option>
        							<option>Belgium</option>
        							<option>Belize</option>
        							<option>Benin</option>
        							<option>Bermuda</option>
        							<option>Bhutan</option>
        							<option>Bolivia</option>
        							<option>Bosnia and Herzegovina</option>
        							<option>Botswana</option>
        							<option>Bouvet Island</option>
        							<option>Brazil</option>
        							<option>British Indian Ocean Territory</option>
        							<option>Brunei Darussalam</option>
        							<option>Bulgaria</option>
        							<option>Burkina Faso</option>
        							<option>Burundi</option>
        							<option>Cambodia</option>
        							<option>Cameroon</option>
        							<option>Canada</option>
        							<option>Cape Verde</option>
        							<option>Cayman Islands</option>
        							<option>Central African Republic</option>
        							<option>Chad</option>
        							<option>Chile</option>
        							<option>China</option>
        							<option>Christmas Island</option>
        							<option>Cocos (Keeling) Islands</option>
        							<option>Colombia</option>
        							<option>Comoros</option>
        							<option>Congo</option>
        							<option>Cook Islands</option>
        							<option>Costa Rica</option>
        							<option>Cote d'Ivoire</option>
        							<option>Croatia</option>
        							<option>Cuba</option>
        							<option>Cyprus</option>
        							<option>Czech Republic</option>
        							<option>Denmark</option>
        							<option>Djibouti</option>
        							<option>Dominica</option>
        							<option>Dominican Republic</option>
        							<option>East Timor</option>
        							<option>Ecuador</option>
        							<option>Egypt</option>
        							<option>El Salvador</option>
        							<option>Equatorial Guinea</option>
        							<option>Eritrea</option>
        							<option>Estonia</option>
        							<option>Ethiopia</option>
        							<option>Falkland Islands</option>
        							<option>Faroe Islands</option>
        							<option>Fiji</option>
        							<option>Finland</option>
        							<option>France</option>
        							<option>Gabon</option>
        							<option>Gambia</option>
        							<option>Georgia</option>
        							<option>Germany</option>
        							<option>Ghana</option>
        							<option>Gibraltar</option>
        							<option>Greece</option>
        							<option>Greenland</option>
        							<option>Grenada</option>
        							<option>Guadeloupe</option>
        							<option>Guam</option>
        							<option>Guatemala</option>
        							<option>Guinea</option>
        							<option>Guinea-Bissau</option>
        							<option>Guyana</option>
        							<option>Haiti</option>
        							<option>Honduras</option>
        							<option>Hong Kong</option>
        							<option>Hungary</option>
        							<option>Iceland</option>
        							<option>India</option>
        							<option>Indonesia</option>
        							<option>Iran</option>
        							<option>Iraq</option>
        							<option>Israel</option>
        							<option>Italy</option>
        							<option>Jamaica</option>
        							<option>Japan</option>
        							<option>Jordan</option>
        							<option>Kazakstan</option>
        							<option>Kenya</option>
        							<option>Kiribati</option>
        							<option>Korea (Democratic People's Republic of)</option>
        							<option>Korea (Republic of)</option>
        							<option>Kuwait</option>
        							<option>Kyrgyzstan</option>
        							<option>Lao</option>
        							<option>Latvia</option>
        							<option>Lebanon</option>
        							<option>Lesotho</option>
        							<option>Liberia</option>
        							<option>Libyan Arab Jamahiriya</option>
        							<option>Liechtenstein</option>
        							<option>Lithuania</option>
        							<option>Luxembourg</option>
        							<option>Macau</option>
        							<option>Macedonia</option>
        							<option>Madagascar</option>
        							<option>Malawi</option>
        							<option>Malaysia</option>
        							<option>Maldives</option>
        							<option>Mali</option>
        							<option>Malta</option>
        							<option>Marshall Islands</option>
        							<option>Martinique</option>
        							<option>Mauritania</option>
        							<option>Mauritius</option>
        							<option>Mayotte</option>
        							<option>Mexico</option>
        							<option>Micronesia</option>
        							<option>Moldova</option>
        							<option>Monaco</option>
        							<option>Mongolia</option>
        							<option>Montserrat</option>
        							<option>Morocco</option>
        							<option>Mozambique</option>
        							<option>Myanmar</option>
        							<option>Namibia</option>
        							<option>Nauru</option>
        							<option>Nepal</option>
        							<option>Netherlands</option>
        							<option>New Caledonia</option>
        							<option>New Zealand</option>
        							<option>Nicaragua</option>
        							<option>Niger</option>
        							<option>Nigeria</option>
        							<option>Niue</option>
        							<option>Norfolk Island</option>
        							<option>Northern Mariana Islands</option>
        							<option>Norway</option>
        							<option>Oman</option>
        							<option>Pakistan</option>
        							<option>Palau</option>
        							<option>Panama</option>
        							<option>Papua New Guinea</option>
        							<option>Paraguay</option>
        							<option>Peru</option>
        							<option>Philippines</option>
        							<option>Pitcairn</option>
        							<option>Poland</option>
        							<option>Polynesia</option>
        							<option>Portugal</option>
        							<option>Puerto Rico</option>
        							<option>Qatar</option>
        							<option>Reunion</option>
        							<option>Romania</option>
        							<option>Russian Federation</option>
        							<option>Rwanda</option>
        							<option>Saint Kitts and Nevis</option>
        							<option>Saint Lucia</option>
        							<option>Saint Vincent and the Grenadines</option>
        							<option>Samoa</option>
        							<option>San Marino</option>
        							<option>Sao Tome and Principe</option>
        							<option>Saudi Arabia</option>
        							<option>Senegal</option>
        							<option>Seychelles</option>
        							<option>Sierra Leone</option>
        							<option>Singapore</option>
        							<option>Slovakia</option>
        							<option>Slovenia</option>
        							<option>Solomon Islands</option>
        							<option>Somalia</option>
        							<option>South Africa</option>
        							<option>South Georgia/South Sandwich Islands</option>
        							<option>Spain</option>
        							<option>Sri Lanka</option>
        							<option>St.Helena</option>
        							<option>St.Pierre and Miquelon</option>
        							<option>Sudan</option>
        							<option>Suriname</option>
        							<option>Svalbard and Jan Mayen Islands</option>
        							<option>Swaziland</option>
        							<option>Sweden</option>
        							<option>Switzerland</option>
        							<option>Syrian Arab Republic</option>
        							<option>Taiwan</option>
        							<option>Tajikistan</option>
        							<option>Tanzania</option>
        							<option>Thailand</option>
        							<option>Togo</option>
        							<option>Tokelau</option>
        							<option>Tonga</option>
        							<option>Trinidad and Tobago</option>
        							<option>Tunisia</option>
        							<option>Turkey</option>
        							<option>Turkmenistan</option>
        							<option>Turks and Caicos Islands</option>
        							<option>Tuvalu</option>
        							<option>Uganda</option>
        							<option>Ukraine</option>
        							<option>United Arab Emirates</option>
        							<option>United Kingdom</option>
        							<option>United Republic of Tanzania</option>
        							<option>United States of America</option>
        							<option>Uruguay</option>
        							<option>Uzbekistan</option>
        							<option>Vanuatu</option>
        							<option>Vatican City State</option>
        							<option>Venezuela</option>
        							<option>Viet Nam</option>
        							<option>Virgin Islands</option>
        							<option>Wallis and Futuna Islands</option>
        							<option>Western Sahara</option>
        							<option>Yemen</option>
        							<option>Zaire</option>
        							<option>Zambia</option>
        							<option>Zimbabwe</option>
        						</select>
        					</div>
        					<div class="form-group">
        						<label for="form_job">Profession </label>
        						<input type="text" name="job" class="form-control" id="job" placeholder="" required="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="border: solid;"/>
        					</div>
        					<div class="form-group">
        						<label for="form_appointement">Salaire annuel </label>
        						<input type="text" name="appointement" class="form-control" id="appointement" placeholder="" required="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="border: solid;"/>
        					</div>
        				</div>
        				<div class="col-sm-5 col-sm-offset-1">
        					<div class="form-group">
        						<legend style="font-weight:Bold;">Informations de contact</legend>
        						<label for="form_email">Email </label>
        						<input type="email" class="form-control" name="email" id="email" placeholder="" required="" data-rule="email" data-msg="Please enter a valid email"style="border: solid;" />
        					</div>
        					<div class="form-group">
        						<label for="form_email1">Confirmation Email </label>
        						<input type="email" class="form-control" name="email1" id="email1" placeholder="" required="" data-rule="email" data-msg="Please enter a valid email" style="border: solid;"/>
        					</div>
        					<div class="form-group">
        						<label for="form_numero">Telephone portable </label>
        						<input type="text" class="form-control" name="numero" id="numero" placeholder="" required="" data-rule="email" data-msg="Please enter a valid email" style="border: solid;"/>
        					</div>
        					<div class="form-group">
        						<label for="form_telephone">Telephone fixe </label>
        						<input type="text" class="form-control" name="telephone" id="telephone" placeholder="" required="" data-rule="email" data-msg="Please enter a valid email" style="border: solid;"/>
        					</div>
        				</div>
        				<div class="col-sm-5 col-sm-offset-1">

        					<div class="form-group">
        						<legend style="color:blue; font-weight:Bold;">Informations de connexion</legend>
                                <div class="form-group">
                                <label for="form_photo">Photo </label>
                                <input type="file" name="photo" class="form-control" id="photo" placeholder="" required="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="border: solid;"/>
                            </div>
        						<label for="form_username">Identifiant </label>
        						<input type="text" name="username" class="form-control" id="username" placeholder="" required="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="border: solid;"/>
        					</div>
        					
        					<div class="form-group">
        						<label for="form_password">Mot de passe </label>
        						<input type="password" name="password" class="form-control" id="password" placeholder="" required="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="border: solid;"/>
        					</div>
        					<div class="form-group">
        						<label for="form_Cpassword">R&eacute;p&eacute;tez mot de passe </label>
        						<input type="password" name="Cpassword" class="form-control" id="Cpassword" placeholder="" required="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="border: solid;"/>

        					</div>

        					<div class="form-group">
        						<select name="compte" id="compte" class="btn btn-primary btn-sm" required="">
        							<option value="compte courant" selected="selected">Compte Courant</option>
        							<option value="compte depot">Compte dépôt</option>
        							<option value="compte epargne">Compte épargne</option>
        						</select>
        					</div>
        					<br>
        					<div class="form-group">
        						<button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Créer votre compte</button>
        					</div>
        				</div>
        			</form>
        		</div><!--/.row-->
        	</div><!--/.container-->
        </section><!--/#contact-page-->

        <!--Traitement formumaire-->

        <?php

        if(!empty($_POST))
        {
    /*echo '<p> ' .$_POST["civilite"] . '</p>';
    echo '<p> ' . $_POST["name"] . '</p>';
    echo '<p> ' .$_POST["prenom"] . '</p>';
    echo '<p> ' . $_POST["birthday"]. '</p>';
    echo '<p> ' . $_POST["adresse"]. '</p>';
    echo '<p> ' . $_POST["postal_code"] . '</p>';
    echo '<p> ' . $_POST["city"]. '</p>';
    echo '<p> ' . $_POST["pays"]. '</p>';
    echo '<p> ' .$_POST["pays"] . '</p>';
    echo '<p> ' . $_POST["job"]. '</p>';
    echo '<p> ' . $_POST["appointement"] . '</p>';
    echo '<p> ' . $_POST["email"] . '</p>';
    echo '<p> ' . $_POST["email1"]. '</p>';
    echo '<p> ' . $_POST["numero"] . '</p>';
    echo '<p> ' . $_POST["telephone"] . '</p>';
    echo '<p> ' . $_POST["username"] . '</p>';
    echo '<p> ' . $_FILES["photo"] . '</p>';
    echo '<p> ' . $_POST["password"] . '</p>';
    echo '<p> ' . $_POST["Cpassword"] . '</p>';
    echo '<p> ' . $_POST["compte"] . '</p>';*/

    if(
    	isset($_POST["civilite"]) &&
    	isset($_POST["name"]) &&
    	isset($_POST["prenom"]) &&
    	isset($_POST["birthday"]) &&
    	isset($_POST["adresse"]) &&
    	isset($_POST["postal_code"]) &&
    	isset($_POST["city"]) &&
    	isset($_POST["pays"]) &&
    	isset($_POST["job"]) &&
    	isset($_POST["appointement"]) &&
    	isset($_POST["email"]) &&
    	isset($_POST["email1"]) &&
    	isset($_POST["numero"]) &&
    	isset($_POST["telephone"]) &&
    	isset($_POST["username"]) &&
    	isset($_FILES["photo"]) &&
    	isset($_POST["password"]) &&
    	isset($_POST["Cpassword"]) &&
    	isset($_POST["compte"]))
    {


    	$civilite = trim($_POST['civilite']);
    	$nom = trim($_POST['name']);
    	$prenom = trim($_POST['prenom']);
    	$birthday = trim($_POST['birthday']);
    	$adresse = trim($_POST['adresse']);
    	$postal_code = trim($_POST['postal_code']);
    	$city = trim($_POST['city']);
    	$pays = trim($_POST['pays']);
    	$job = trim($_POST['job']);
    	$appointement = trim($_POST['appointement']);
    	$email = trim($_POST['email']);
    	$email1 = trim($_POST['email1']);
    	$numero = trim($_POST['numero']);
    	$telephone = trim($_POST['telephone']);
    	$username = trim($_POST['username']);
    	$password = $_POST['password'];
    	$confPass = $_POST['Cpassword'];
    	$compte = trim($_POST['compte']);
    	$nbr = 0;

    	if(empty($civilite))
    	{
    		++$nbr;
    	}
    	if(empty($nom))
    	{
    		++$nbr;
    	}
    	if(empty($prenom))
    	{
    		++$nbr;
    	}
    	if(empty($birthday))
    	{
    		++$nbr;
    	}
    	if(empty($adresse))
    	{
    		++$nbr;
    	}
    	if(empty($postal_code))
    	{
    		++$nbr;
    	}
    	if(empty($city))
    	{
    		++$nbr;
    	}
    	if(empty($pays))
    	{
    		++$nbr;
    	}
    	if(empty($job))
    	{
    		++$nbr;
    	}
    	if(empty($appointement))
    	{
    		++$nbr;
    	}
    	if(empty($email))
    	{
    		++$nbr;
    	}
    	if(empty($email1))
    	{
    		++$nbr;
    	}
    	if(empty($numero))
    	{
    		++$nbr;
    	}
    	if(empty($telephone))
    	{
    		++$nbr;
    	}
    	if(empty($username))
    	{
    		++$nbr;
    	}
    	if(empty($password))
    	{
    		++$nbr;
    	}
    	if(empty($confPass))
    	{
    		++$nbr;
    	}
    	if(empty($compte))
    	{
    		++$nbr;
    	}

    	if($nbr == 0)
    	{
    		define('IBAN', 'FR76 3307 2611 1166 2244 7912');
    		define('BICSWIFT', 'NBBEBEBB216');
    		define('BANQUE','Fortex Banque');
    		define('MONTANT', 0);
    		define('DEVISE', 'euro');

    		if($email == $email1)
    		{
    			if($password == $confPass)
    			{
            /************************************************************
             * Vérification de la photo de profil
             *************************************************************/

            // Constantes
            define('PHOTOS', 'Photos/');    // Repertoire d'enrégistrement des images
            define('MAX_SIZE', 2500000000);    // Taille max en octets du photo
            define('WIDTH_MAX', 102400);    // Largeur max de l'image en pixels
            define('HEIGHT_MAX', 10240);    // Hauteur max de l'image en pixels

            // Tableaux de donnees
            $tabExt = array('jpg', 'png', 'jpeg');    // Extensions autorisees
            $infosImg = array();

            // Variables
            $extension = '';
            $nomImage = '';
            $message = '';

            /************************************************************
             * Script d'upload
             *************************************************************/
            if(!is_dir(PHOTOS))
            {
            	if( !mkdir(PHOTOS, 0777) )
            	{
            		exit('Erreur : le répertoire ne peut-être créé ! Vérifiez que vous diposiez des droits suffisants ou créez le manuellement !');
            	}
            }

            // On verifie si le champ est rempli
            if(!empty($_FILES['photo']['name']) )
            {

              // Recuperation de l'extension du photo
            	$extension  = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
              // On verifie l'extension du photo
            	if(in_array(strtolower($extension),$tabExt))
            	{
                // On recupere les dimensions de la photo
            		$infosImg = getimagesize($_FILES['photo']['tmp_name']);
                // On verifie les dimensions et taille de l'image
            		if(($infosImg[0] <= WIDTH_MAX) &&
            			($infosImg[1] <= HEIGHT_MAX) &&
            			(filesize($_FILES['photo']['tmp_name']) <= MAX_SIZE))
            		{
                  // Parcours du tableau d'erreurs --- UPLOAD_ERR_OK = 0 aucune erreur
            			if(isset($_FILES['photo']['error']) &&
            				UPLOAD_ERR_OK === $_FILES['photo']['error'])
            			{
                    // On renomme le photo
            				$nomImage = md5(uniqid()) . '.' . strtolower($extension);
                    // Si c'est OK, on teste l'upload
            				if(move_uploaded_file($_FILES['photo']['tmp_name'], PHOTOS.$nomImage))
            				{
                      /*******************************************
                       ** Envoie des infos dans la base de données
                       * *****************************************/
                      include('../dbInfos.php');
                      //ON CREE LA BASE DE DONNEES

                      try
                      {
                      	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                      	$db = new PDO('mysql:host=' . DB_HOST, DB_USER, DB_PASSWORD, $pdo_options);
                      	$query = $db->prepare( "CREATE DATABASE IF NOT EXISTS " . DB_NAME . " DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci" );
                      	$query->execute();
                      }
                      catch(Exception $e)
                      {
                      	die('Erreur: ' . $e->getMessage());
                      }

                      try
                      {
                      	$dbc = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME, DB_USER, DB_PASSWORD, $pdo_options);
                      	$encoding = $dbc->prepare("SET NAMES UTF8");
                      	$encoding->execute();
                      	$query = $dbc->prepare( "CREATE TABLE IF NOT EXISTS ".DB_NAME.".".DB_CLIENTS_TABLE."(
                      		clientId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                      		name VARCHAR(255) NOT NULL,
                      		prenom VARCHAR(255) NOT NULL,
                      		adresse VARCHAR(255) NOT NULL,
                      		city VARCHAR(255) NOT NULL,
                      		pays VARCHAR(255) NOT NULL,
                      		job VARCHAR(255) NOT NULL,
                      		salaire BIGINT NOT NULL,
                      		email VARCHAR(255),
                      		numero BIGINT NOT NULL,
                      		username VARCHAR(255) NOT NULL,
                      		password VARCHAR(225) NOT NULL,
                      		compte VARCHAR(255) NOT NULL,
                      		nameBanque VARCHAR(255) NOT NULL,
                      		iban VARCHAR(225) NOT NULL,
                      		bicswift VARCHAR(225) NOT NULL,
                      		montant BIGINT NOT NULL,
                      		devise VARCHAR(225) NOT NULL,
                      		image VARCHAR(225) NOT NULL
                      	)");
                      	$query->execute();

                      	$query = $dbc->prepare("SELECT username FROM " . DB_CLIENTS_TABLE . "");
                      	$query->execute();
                      	$exist = 0;
                      	while($data = $query->fetch())
                      	{
                      		$user = $data['username'];
                      		if($username == @$user)
                      		{
                      			$exist = 1;
                      			break;
                      		}
                      	}

                      	if(!$exist)
                      	{
                      		$query = $dbc->prepare("INSERT INTO " . DB_CLIENTS_TABLE . " (name, prenom, adresse, city, pays, job, salaire, email, numero, username, password, compte, nameBanque, iban, bicswift, montant, devise, image)
                      			VALUES(:name, :prenom, :adresse, :city, :pays, :job, :salaire, :email, :numero, :username, :password, :compte, :nameBanque, :iban, :bicswift, :montant, :devise, :image)");
                      		$response = $query->execute(array(
                      			'name' => $nom,
                      			'prenom' => $prenom,
                      			'adresse' => $adresse,
                      			'city' => $city,
                      			'pays' => $pays,
                      			'job' => $job,
                      			'salaire' => $appointement,
                      			'email' => $email,
                      			'numero' => $numero,
                      			'username' => $username,
                      			'password' => $password,
                      			'compte' => $compte,
                      			'nameBanque' => BANQUE,
                      			'iban' => IBAN,
                      			'bicswift' => BICSWIFT,
                      			'montant' => MONTANT,
                      			'devise' => DEVISE,
                      			'image' => $nomImage
                      		));
                          //$response->closeCursor();
                      		echo '<script type=text/javascript> var message = "<center><label>Votre compte a été créé avec succès à Fortex Institut</label></center></br>"; </script>';

                          // DEBUT PARTIE ENVOIE DE MAIL

                            /*$destinataire = 'contacte@bfeca-bank.com';
                            $objet = 'Inscription';

                          $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
                          $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
                          $headers .= 'To: '.$destinataire."\n"; // Mail de reponse
                          //$headers .= 'From: "Prêt"<'.$expediteur.'>'."\n"; // Expediteur
                          $headers .= "From: ".$nom." " . $prenom . " <".$email."> \r\n";

                          $message =  '<div style="width:100%; text-align: center; font-weight: bold"> Bonjour je suis '.$nom.' '.$prenom . ' resident en '.$pays.' je viens de posseder a l\'ouverture de mon compte bancaire.</div>';

                          mail($destinataire, $objet, $message, $headers);
                          */

                          // FIN PARTIE ENVOIE DE MAIL
                      }
                      else
                      {
                      	echo '<script type=text/javascript> var message = "<center><label><font color=\"red\">L\'identifiant que vous avez choisi existe déjà.</font></label></center>"; </script>';
                      }
                  }
                  catch(Exception $err)
                  {
                  	die('Erreur: ' . $err->getMessage());
                  }
              }
              else
              {
                      // Sinon on affiche une erreur systeme
              	echo '<script type=text/javascript> var message = "Problème lors du chargement de l\'image !"; </script>';
              }
          }
          else
          {
          	echo '<script type=text/javascript> var message = "Une erreur interne a empêché le chargement de l\'image"; </script>';
          }
      }
      else
      {
                  // Sinon erreur sur les dimensions et taille de l'image
      	echo '<script type=text/javascript> var message = "Les dimensions de l\'image sélectionnée sont trop grandes!"; </script>';
      }
  }
  else
  {
                // Sinon on affiche une erreur pour l'extension
  	echo '<script type=text/javascript> var message = "L\'extension du fichier est incorrecte !"; </script>';
  }
}
}
else
{
	echo '<script type=text/javascript> var message = "<center><label><font color=\"red\">Mot de passe incorrect.</font></label></center>"; </script>';
}
}
else
{
	echo '<script type=text/javascript> var message = "<center><label><font color=\"red\">E-mail incorrect.</font></label></center>"; </script>';
}
}
else
{
	echo '<script type=text/javascript> var message = "<center><font color=\"red\">Veuillez remplir tous les champs du formulaire</font></center></br>"; </script>';
}
echo '<script type=text/javascript> document.getElementById("output").innerHTML = message; </script>';
}
}
?>

<!--Fin traitement formumaire-->

<?php include("footer.php")?>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>

    <!--



    -->
</body>
</html>
