<?php
include 'config.php';

                $id = "";
                $requette = $bdd->prepare('SELECT * FROM hopital where nom = ?');
                $requette->execute(array($_POST['hopital']));

                if($d = $requette->fetch()){
                $id = $d['id'];
                }




       $req = $bdd->prepare('INSERT INTO specialite (nom, id_hopital, prix)
        VALUES(?, ?, ?)');
	$req->execute(array($_POST['nom'], $id, $_POST['prix']));

       // header('Location: profil_admin_medecin.php')	;
?>