<?php
include 'config.php';

        $requette = $bdd->prepare('SELECT id, statut, medecin, HOUR(date_debut) as heure, MINUTE(date_debut) as min, SECOND(date_debut) as sec
        , HOUR(date_fin) as heure1, MINUTE(date_fin) as min1, SECOND(date_fin) as sec1 FROM horaire where medecin = ? and statut = ?');
        $requette->execute(array($_POST['medecin'], 1));
        $result = '';
        $result .= '<table class="table table-bordered table-striped table-condensed " id ="ert">
        <tbody>';

        while($donnees = $requette->fetch())
        {
            $result .=' <tr><td>'. $donnees['id'].'</td><td>'. $donnees['heure'].' : '.$donnees['min'].'</td>
            <td>'.$donnees['heure1'].' : '.$donnees['min1'].'</td></tr> ';
        
        }

        $result .= '</tbody>
        </table>';
        echo $result;
?>