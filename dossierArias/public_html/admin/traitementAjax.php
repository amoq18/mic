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
			$query = $dbc->prepare("SELECT username, password FROM " . DB_ADMIN_TABLE . " HAVING username = '" .$username. "' AND password = '" .$password. "'");
			$query->execute();
			while($data = $query->fetch())
			{
				$adminNom = $data['username'];
				$adminPass = $data['password'];
			}
			if($username == @$adminNom && $password == @$adminPass)
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
