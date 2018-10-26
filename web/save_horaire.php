<?php
include 'config.php';

         $medecin = $_GET['medecin'];
         $heure_debut = $_GET['heure_debut'];
         $minutedebut = $_GET['minutedebut'];
         $heure_fin = $_GET['heure_fin'];
         $minutefin = $_GET['minutefin'];
         
         $date = date('Y-m-d', strtotime(str_replace('/','-',$_GET['horaire_date'])));
         
         
         
                
      echo $date_debut = $_GET['horaire_date'].' '.$heure_debut.':'.$minutedebut.':00';
      echo $date_fin = $_GET['horaire_date'].' '.$heure_fin.':'.$minutefin.':00';

      $date1  = date('Y-m-d H:i:s', strtotime(str_replace('/','-',$date_debut)));
      $date2  = date('Y-m-d H:i:s', strtotime(str_replace('/','-',$date_fin)));
          
      $date1 = new DateTime($date_debut);
     $date2 = new DateTime($date_fin);

     $pa = $date1->format('Y-m-d H:i:s');
     $pa2 = $date2->format('Y-m-d H:i:s');

     $req = $bdd->prepare('INSERT INTO horaire (date_debut, date_fin, statut, medecin)
     VALUES(?, ?, ?, ?)');
     $req->execute(array($pa, $pa2, "1", $medecin));


       // header('Location: profil_admin_medecin.php')	;
?>