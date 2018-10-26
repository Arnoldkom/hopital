<?php
include 'config.php';


        
        $requette = $bdd->prepare('SELECT * FROM hopital where id_ville = ?');
        $requette->execute(array($_POST['id_ville']));

        $result = '<option value="">selectionner l hopital ...</option>';

        while($donnees = $requette->fetch())
        {
            $result .=' <option value="'.$donnees['id'].'">'. $donnees['nom'].'</option> ';
        
        }
        echo $result;
?>