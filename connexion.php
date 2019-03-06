<?php
try
{
	$connexion = new PDO ('mysql host=serveur;dbnale=votre_base' , 'user', 'mdp');
	echo "connexion ok";
}
catch(PDOExeption $error)
{
	print "erreur " .$error->getMessage()."<br/>";
	die();
}
?>