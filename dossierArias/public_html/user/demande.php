<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from uniata-bank.com/register-custom.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Nov 2018 10:47:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Fortex Fortex Institut | Demande de prêt</title>

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
<link rel="shortcut icon" href="../strand.png">
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
                    <br><br>
                    <h2>Demande de prêt</h2>

        			<h2>Remplissez le formulaire</h2>
        			<div id="output"></div>
        		</div>
        		<div class="row contact-wrap">
        			<div class="status alert alert-success" style="display: none"></div>
        			<form method="post" action="email.php" role="form" class="contactForm" enctype="multipart/form-data">
        				<div class="col-sm-5 col-sm-offset-1">
        					<div class="form-group">
        						<!--legend style="font-weight:Bold;">Informations personnelles</legend>
        						<input type="radio" name="civilite" id="civilite"  value="Madame." autofocus="" checked="checked" required=""/>Mme
        						<input type="radio" name="civilite" id="civilite"  value="Mademoiselle" autofocus="" required=""/>Mlle
        						<input type="radio" name="civilite" id="civilite"  value="Monsieur" autofocus="" required="" />M.
        						<div class="validation"></div-->

        					</div>
        					<div class="form-group">
        						<label for="form_name">Nom </label>
        						<input type="text" id="nom" name="nom" class="form-control" placeholder="" required="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="border: solid;" />
        					</div>
        					<div class="form-group">
        						<label for="form_prenom">Email </label>
        						<input type="email" name="email" class="form-control" id="email" placeholder="" required="" data-rule="minlen:4" data-msg="Please enter at least 4 chars"style="border: solid;"  />
        					</div>
        					<div class="form-group">
        						<label for="form_birthday">Adresse compl&egrave;te </label>
        						<input type="text" name="adresse" class="form-control" id="adresse" placeholder="" required="" data-rule="minlen:4" data-msg="Please enter at least 4 chars"style="border: solid;"  />
        					</div>
        					<div class="form-group">
        						<label for="form_addresse">Montant du prêt</label>
        						<input type="text" name="montant_pret" class="form-control" id="montant_pret" placeholder="" required="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="border: solid;" />
        					</div>
        					<div class="form-group">
        						<label for="form_postal_code">Durée de rembousement</label>
        						<input type="text" name="duree_remboussement" class="form-control" id="duree_remboussement" placeholder="" required="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="border: solid;" />
        					</div>
        				</div>
        				<div class="col-sm-5 col-sm-offset-1">
        					<div class="form-group">
        						<!--legend style="font-weight:Bold;">Informations de contact</legend-->
        						<label for="form_email">Prénom </label>
        						<input type="text" class="form-control" name="prenom" id="prenom" placeholder="" required="" data-rule="prenom" data-msg="Please enter a valid prenom" style="border: solid;" />
        					</div>
        					<div class="form-group">
        						<label for="form_email1">Téléphone portable </label>
        						<input type="text" class="form-control" name="numero" id="numero" placeholder="" required="" data-rule="email" data-msg="Please enter a valid email" style="border: solid;" />
        					</div>
        					<div class="form-group">
                                <label for="form_pays" class=" ">Pays</label>
                                <select size="1" name="pays" name="pays" class="form-control" autofocus="" required="" style="border: solid;" >
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
        						<label for="form_telephone">Capacité de remboursement mensuel </label>
        						<input type="text" class="form-control" name="capacite_mensuel" id="capacite_mensuel" placeholder="" required="" data-rule="email" data-msg="Please enter a valid email" style="border: solid;" />
        					</div>
                            <div class="form-group">
                                <label for="form_telephone">Revenus mensuels actuels </label>
                                <input type="text" class="form-control" name="revenu_mensuel" id="revenu_mensuel" placeholder="" required="" data-rule="email" data-msg="Please enter a valid email" style="border: solid;" />
                            </div>

                                <center><div class="form-group col-md-12">
                    <label for="form_prenom"> Objectif du prêt </label>
                    <textarea class="form-control" name="message" id="message" rows="5" required="" style="border: solid;" style="margin-top: px"></textarea>
                </div></center>

        				</div>
                    
        				
        				<!--/div-->


                            <center>
        					<div class="form-group">
        						<button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Envoyer</button>
        					</div></center>
        			</form>
        		</div><!--/.row-->
        	</div><!--/.container-->
        </section><!--/#contact-page-->

        <!--Traitement formumaire-->

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
