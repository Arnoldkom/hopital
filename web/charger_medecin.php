<?php
include 'config.php';

        
        $requette = $bdd->prepare('SELECT * FROM medecin where hopital = ?');
        $requette->execute(array($_POST['hopital']));
        $result = '';
        $result .= '<table class="table table-bordered table-striped table-condensed " id ="ert">

        <thead>
        <tr>
        <th>nom</th>
        <th>Specialite</th>
        <th>experience</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody>';

        while($donnees = $requette->fetch())
        {
            $result .=' <tr><td>'. $donnees['id_user'].'</td><td>'. $donnees['id_specialite'].'</td><td>'. $donnees['Experience'].'</td><td> <a href="voir_profil.php?id='. $donnees['id'].'&nom='. $donnees['id_user'].'" class="btn btn-primary"> voir </a><button id="deleted" class="btn btn-danger" > Annuler </button></td></tr> ';
        
        }

        $result .= '</tbody>
        </table>';
        echo $result;
?>