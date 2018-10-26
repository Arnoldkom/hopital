<?php
include 'config.php';

        $requette = $bdd->prepare('SELECT id, statut, medecin, HOUR(date_debut) as heure, MINUTE(date_debut) as min, SECOND(date_debut) as sec
        , HOUR(date_fin) as heure1, MINUTE(date_fin) as min1, SECOND(date_fin) as sec1, DATE_FORMAT(date_debut, \'%Y-%m-%d\') as
        datefr FROM horaire where medecin = ? and statut = ?');
        $requette->execute(array($_POST['medecin'], "1"));
        $result = '';
        $result = '<option value="">selectionner horaire ...</option>';

       
        while($donnees = $requette->fetch())
        {
            if($donnees['datefr'] == $_POST['date']){
            $result .=' <option value="'. $donnees['heure'].':'.$donnees['min'].' - '.$donnees['heure1'].':'.$donnees['min'].'"> * '. $donnees['heure'].':'.$donnees['min'].' - '.$donnees['heure1'].':'.$donnees['min'].'</option> ';
            }
        }
        echo $result;
?>