<?php
include 'config.php';


        
        $requette = $bdd->prepare('SELECT * FROM specialite where id_hopital = ?');
        $requette->execute(array($_POST['id_hopital']));

        $result = '<option value="">selectionner la spécialité ...</option>';

        while($donnees = $requette->fetch())
        {
            $result .=' <option value="'.$donnees['nom'].'">'. $donnees['nom'].'</option> ';
        
        }
        echo $result;
?>