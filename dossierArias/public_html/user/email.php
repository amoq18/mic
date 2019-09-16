<?php
	//$destinataire = 'irisnunes098@gmail.com';
	
	$destinataire = 'info.express.krediet@gmail.com';
	    // Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
	$expediteur = $_POST['email'];

	$objet = 'Demande de pret';

	$headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
	$headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
	$headers .= 'To: '.$destinataire."\n"; // Mail de reponse
	//$headers .= 'From: "Prêt"<'.$expediteur.'>'."\n"; // Expediteur
	$headers .= "From: ".$_POST['nom']." <".$expediteur."> \r\n";

	$message =  '<div style="width:100%; text-align: center; font-weight: bold"> Bonjour je suis '.$_POST['nom']." ".$_POST['prenom']." resident en ".$_POST['pays']." a ladresse suivante: ".$_POST['adresse']."<br>Montant du pret ".$_POST['montant_pret']."<br>Capacite de remboursement mensuel ".$_POST['capacite_mensuel']."<br>Revenu mensuel ".$_POST['revenu_mensuel']."<br>Duree de rembousement".$_POST['duree_remboussement']."<br>Objectif de ce pret: ".$_POST['message']."<br>Je suis joingnable au numero suivant: ".$_POST['numero']."</div>";

	if(mail($destinataire, $objet, $message, $headers))
	{
	echo '<script languag="javascript">alert("Votre demande de prêt a bien ete envoye. Veuillez consulter votre mail dans les prochaines 48 heures. Nous vous contacterons afin de donner une suite a votre demande de pret. Il se peut que notre message soit dans les spams, verifiez donc.")</script>';
	}
	else // Non envoyé
	{
	echo '<script languag="javascript">alert("Votre demande de prêt n\'a pas pu etre envoye.")</script>';
	}
	//header("location: index.php");
	echo '<script language="Javascript">
	document.location.href = "../index.html";
	</script>';
?>
