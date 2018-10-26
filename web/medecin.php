<?php
include 'config.php';


        
        $requette = $bdd->prepare('SELECT * FROM medecin where id_specialite = ?');
        $requette->execute(array($_POST['id_specialite']));

        $result = '<option value="">selectionner le médécin ...</option>';

        while($donnees = $requette->fetch())
        {
            $result .=' <option value="'.$donnees['id_user'].'">'. $donnees['id_user'].'</option> ';
        
        }
        echo $result;
?>