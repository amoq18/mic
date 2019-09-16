<?php
	if (!empty($_POST['username']) && !empty($_POST['password']))
	{
		$username = htmlspecialchars(trim($_POST['username']));
		$password = htmlspecialchars($_POST['password']);

	 	include('../dbInfos.php');

		try
		{
			$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			$dbc = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME, DB_USER, DB_PASSWORD, $pdo_options);
			$encoding = $dbc->prepare("SET NAMES UTF8");
			$encoding->execute();
			$query = $dbc->prepare("SELECT username, password FROM " . DB_CLIENTS_TABLE . " HAVING username = '" .$username. "'");
			$query->execute();
			while($data = $query->fetch())
			{
				$id = $data['username'];
				$pass = $data['password'];
			}
			if($username == @$id && $password == @$pass)
				echo 'true';
			else
				echo 'false';
		}
	 	catch(Exception $err)
	 	{
	 		die('Erreur: ' . $err->getMessage());
	 	}
	}
	else
	{
		echo "false";
	}


?>
