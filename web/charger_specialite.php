<?php
include 'config.php';

$id = "";
       $requette = $bdd->prepare('SELECT * FROM hopital where nom = ?');
       $requette->execute(array($_POST['hopital']));

        if($d = $requette->fetch()){
            $id = $d['id'];
        }


        $requette = $bdd->prepare('SELECT * FROM specialite where id_hopital = ?');
        $requette->execute(array($id));
        $result = '';
        $result .= '<table class="table table-bordered table-striped table-condensed " id ="ert">

        <thead>
        <tr>
        <th>nom</th>
        <th>prix</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody>';

        while($donnees = $requette->fetch())
        {
            $result .=' <tr><td>'. $donnees['nom'].'</td><td>'. $donnees['prix'].'</td><td> <button class="btn btn-primary"> voir </button><button class="btn btn-danger" > Annuler </button></td></tr> ';
        
        }

        $result .= '</tbody>
        </table>';
        echo $result;
?>