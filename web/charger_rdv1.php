<?php
include 'config.php';

        $requette = $bdd->prepare('SELECT * FROM rdv where hopital = ? and statut = ?');
        $requette->execute(array($_POST['hopital'], "valide"));
        $result = '';
        $result .= '<table class="table table-bordered table-striped table-condensed " id ="ert">

        <thead>
        <tr>
        <th>nom</th>
        <th>telephone</th>
        <th>email</th>
        <th>horaire</th>
        <th>etat</th>
        <th>specialite</th>
        <th>montant</th>
        <th>medecin</th>
        <th>statut</th>
        <th>date</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody>';

        while($donnees = $requette->fetch())
        {
            $result .=' <tr><td>'. $donnees['nom'].'</td><td>'. $donnees['telephone'].'</td><td>'. $donnees['email'].'</td>
            <td>'. $donnees['horaire'].'</td><td>'. $donnees['etat'].'</td><td>'. $donnees['specialite'].'</td>
            <td>'. $donnees['montant'].'</td><td>'. $donnees['medecin'].'</td><td>'. $donnees['statut'].'</td>
            <td>'. $donnees['date_save'].'</td> <td> <button class="btn btn-primary"> voir </button><button class="btn btn-danger" > Annuler </button></td></tr> ';
        
        }

        $result .= '</tbody>
        </table>';
        echo $result;
?>