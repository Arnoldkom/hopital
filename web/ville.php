<?php
include 'config.php';


        
        $requette = $bdd->prepare('SELECT * FROM ville where id_region = ?');
        $requette->execute(array($_POST['id_region']));

        $result = '<option value="">selectionner la ville ...</option>';

        while($donnees = $requette->fetch())
        {
            $result .=' <option value="'.$donnees['id'].'">'. $donnees['nom'].'</option> ';
        
        }
        echo $result;
?>