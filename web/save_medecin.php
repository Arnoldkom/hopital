<?php
include 'config.php';


echo $_POST['hopital2'];
        

        $req = $bdd->prepare('INSERT INTO utilisateur (Nom, email, password, genre, address,ville, telephone, Satut, Autre, Type, date)
        VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())');
	$req->execute(array($_POST['nom'], $_POST['email'], $_POST['password'], $_POST['genre'], $_POST['address'], $_POST['ville'], $_POST['telephone'], "medecin", "user", "user"));

    $req = $bdd->prepare('INSERT INTO medecin (id_user, id_specialite, Experience, hopital)
        VALUES(?, ?, ?, ?)');
	$req->execute(array($_POST['nom'], $_POST['specialite'], $_POST['experience'], $_POST['hopital2']));

       // header('Location: profil_admin_medecin.php')	;
?>