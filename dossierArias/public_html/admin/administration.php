<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
		<!-- Favicons -->
	<link href="img/favicon.png" rel="icon">
	<link href="img/apple-touch-icon.png" rel="apple-touch-icon">
</head>
<body>

</body>
</html>
<?php
 	include('../dbInfos.php');
	try
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$dbc = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME, DB_USER, DB_PASSWORD, $pdo_options);
		$encoding = $dbc->prepare("SET NAMES UTF8");
		$encoding->execute();
		$query = $dbc->prepare("SELECT DISTINCT clientId, name, prenom, email, adresse, pays, nameBanque, iban, bicswift, montant, devise, password  FROM " . DB_CLIENTS_TABLE . " ORDER BY clientId");
		$query->execute();

		/**********************************************
		*
		*	Remplace cette ligne cette l'ancienne ligne (echo "<table border=\"1\" width=\"100%\" style=\"border-collapse:collapse;\"><thead><tr> <th> Clients </th><th> Nom </th><th> Prénom </th><th> E-mail </th><th> Adresse </th><th> Pays </th><th> Banque </th><th> IBAN </th><th> BICSWIFT </th><th> Montant </th><th> Devise </th> <th> Editer </th></tr></thead><tbody>";)
		* par celle ci
		*
		***********************************************/
		echo "<table border=\"1\" width=\"100%\" style=\"border-collapse:collapse;\"><thead><tr> <th> Clients </th><th> Nom </th><th> Prénom </th><th> E-mail </th><th> Adresse </th><th> Pays </th><th> Banque </th><th> IBAN </th><th> BICSWIFT </th><th> Montant </th><th> Devise </th> <th> Editer </th><th> Supprimer </th></tr></thead><tbody>";
		while($data = $query->fetch())
		{
			$id = $data['clientId'];
			$nom = $data['name'];
			$prenom = $data['prenom'];
			$email = $data['email'];
			$adresse = $data['adresse'];
			$pays = $data['pays'];
			$nomBanque = $data['nameBanque'];
			$iban = $data['iban'];
			$bicswift = $data['bicswift'];
			$montant = $data['montant'];
			$devise = $data['devise'];
			$password = $data['password'];
			echo "<td align=\"center\"><b> $id </b></td>";
			echo "<td align=\"center\"><b> $nom </b></td>";
			echo "<td align=\"center\"><b> $prenom </b></td>";
			echo "<td align=\"center\"><b> $email </b></td>";
			echo "<td align=\"center\"><b> $adresse </b></td>";
			echo "<td align=\"center\"><b> $pays </b></td>";
			echo "<td align=\"center\"><b> $nomBanque </b></td>";
			echo "<td align=\"center\"><b> $iban </b></td>";
			echo "<td align=\"center\"><b> $bicswift </b></td>";
			echo "<td align=\"center\"><b> $montant </b></td>";
			echo "<td align=\"center\"><b> $devise </b></td>";
			echo "<td align=\"center\"><form action=\"editClient.php\" method=\"POST\"><input type=\"hidden\" name=\"key\" value=\"".$password."\"><input type=\"hidden\" name=\"name\" value=\"".$nom."\"><input type=\"hidden\" name=\"first_name\" value=\"".$prenom."\"><input type=\"hidden\" name=\"mail\" value=\"".$email."\"><input type=\"hidden\" name=\"adress\" value=\"".$adresse."\"><input type=\"hidden\" name=\"country\" value=\"".$pays."\"><input type=\"hidden\" name=\"number\" value=\"".$montant."\"><input type=\"hidden\" name=\"id\" value=\"".$id."\"><input type=\"hidden\" name=\"banque\" value=\"".$nomBanque."\"><input type=\"hidden\" name=\"ibann\" value=\"".$iban."\"><input type=\"hidden\" name=\"bicswiftt\" value=\"".$bicswift."\"><input type=\"hidden\" name=\"devis\" value=\"".$devise."\"><input type=\"submit\" value=\"Modifier\" style=\"background-color:#00B156;\"></form></td>";
			/**********************************************
			*
			*	Ajoute cette nouvelle ligne
			*
			***********************************************/
			echo "<td align=\"center\"><form action=\"delete.php\" method=\"POST\"><input type=\"hidden\" name=\"key\" value=\"".$password."\"><input type=\"hidden\" name=\"id\" value=\"".$id."\"><input type=\"submit\" value=\"Supprimer\" style=\"background-color:#00B156;\"></form></td>";
			echo "</tr>";
		}
		echo "</tbody></table>";

	}
 	catch(Exception $err)
 	{
 		die('Erreur: ' . $err->getMessage());
 	}
?>
