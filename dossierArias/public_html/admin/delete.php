<?php
	if(!empty($_POST))
	{
    include('../dbInfos.php');

		$password = $_POST['key'];
		$id = $_POST['id'];

		try
		{
			$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			$dbc = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME, DB_USER, DB_PASSWORD, $pdo_options);
			$encoding = $dbc->prepare("SET NAMES UTF8");
			$encoding->execute();

			$query = $dbc->prepare("DELETE FROM " . DB_CLIENTS_TABLE . " WHERE clientId = '". $id ."' AND password = '" . $password . "'");
			$response = $query->execute();
			echo '<script type="text/javascript">alert(\'Le client a supprimé avec succès\');</script>';
			echo '<script type="text/javascript">location.replace(\'administration.php\');</script>';
		}
		catch(Exception $err)
		{
			die('Erreur: ' . $err->getMessage());
		}
	}
?>
