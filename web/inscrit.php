<?php
// Connexion à la base de données
try
{
$bdd = new PDO('mysql:host=localhost;dbname=hopital', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}$r = 0;
$rq = $bdd->query('select * from utilisateur ');
while($donnees = $rq->fetch())
{
	if($donnees['email'] == $_POST['email'])
	{
		$r = $r + 1;
	}
}

if( $r == 0 )
{
 // Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO utilisateur (Nom, email, password, genre, address,ville, telephone, Satut, Autre, Type, date)
VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())');
	$req->execute(array($_POST['nom'], $_POST['email'], $_POST['password'], $_POST['genre'], $_POST['address'], $_POST['ville'], $_POST['telephone'], "patient", "user", "user"));

if (!session_id()) session_start();
$_SESSION['login'] = $_POST['email'];
$_SESSION['nom'] = $_POST['nom'];
$_SESSION['statut'] = "patient";
		  
 header('Location: prendre-un-rdv.php');

}else
{
	header('Location: inscription.php')	;

}
?>
