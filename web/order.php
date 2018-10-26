<?php
include 'config.php';

$prix = "";
$hopital = "";
$telephone = "";
$email = "";

        $requette1 = $bdd->query("SELECT * FROM specialite WHERE id_hopital =  '".$_POST['hopital']."' and nom =  '".$_POST['specialite']."'");
                 
        while($donnees = $requette1->fetch())
       {
        $prix = $donnees['prix'];
       
       }   
       
       $requette2 = $bdd->query("SELECT * FROM hopital WHERE id = '".$_POST['hopital']."'");
                 
       if($donnees = $requette2->fetch())
      {
        $hopital =  $donnees['nom'];
      
      }

      $requette3 = $bdd->query("SELECT * FROM utilisateur WHERE Nom = '".$_POST['patient']."'");
                 
       if($donnees = $requette3->fetch())
      {
        $telephone = $donnees['telephone'];
        $email = $donnees['email'];
      }

      $nb_min = 100000;
        $nb_max = 10000000;
        $nombre = mt_rand($nb_min,$nb_max);


    $req = $bdd->prepare('INSERT INTO rdv (ville, hopital, specialite, medecin, motif,statut, montant, nom, telephone, email, horaire, etat, nombre_paye, date_save)
    VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())');
	$req->execute(array($_POST['ville'], $hopital, $_POST['specialite'], $_POST['medecins1'], $_POST['motif'], "en cours", $prix, $_POST['patient'], $telephone, $email, $_POST['horaire4'], "programme", $nombre));


 header('Location: index.php')	;
?>