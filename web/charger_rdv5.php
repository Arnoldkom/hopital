<?php
include 'config.php';

$hopital = "";
$numero = "";
$id = "";

        $requette = $bdd->prepare('SELECT * FROM rdv where nom = ? and statut = ? and etat = ?');
        $requette->execute(array($_POST['patient'], "valide", "programme"));
        $result = '';

        while($donnees = $requette->fetch())
        {
			$hopital =  $donnees['hopital'];
			$id = $donnees['id'];
            $result .='  <div class="grid1">
					<p align="right">'. $donnees['date_save'].'</p>
					<div class="agile-form">
					<ul class="field-list" >
						<li>
							<label class="form-label"> 
								Hôpital 
								
							</label>
							<div class="form-input">
								<p align="left">'. $donnees['hopital'].'</p>
							</div>
						</li>
						<li>
							<label class="form-label"> 
								Médecin 
								
							</label>
							<div class="form-input">
								<p align="left">'. $donnees['medecin'].'</p>
							</div>
						</li>
						<li>
							<label class="form-label"> 
								Spécialité 
								
							</label>
							<div class="form-input">
								<p align="left">'. $donnees['specialite'].'</p>
							</div>
                        </li>
                        <li>
							<label class="form-label"> 
								Horaire 
								
							</label>
							<div class="form-input">
								<p align="left">'. $donnees['horaire'].'</p>
							</div>
                        </li>
                        <li>
							<label class="form-label"> 
								montant 
								
							</label>
							<div class="form-input">
								<p align="left">'. $donnees['montant'].'</p>
							</div>
						</li>
						<li>
							<label class="form-label"> 
								Motif du Rendez-Vous 
								
							</label>
							<div class="form-input">
								<p align="left">'. $donnees['motif'].'</p>
							</div>
						</li>
						';


		}
		


		$requette2 = $bdd->query("SELECT * FROM hopital WHERE nom = '".$hopital."'");
                 
       if($donnees = $requette2->fetch())
      {
		$numero =  $donnees['numero'];
      
	  }
	  
	  $result .= '<li>
	  <label class="form-label"> 
		  Payement : 
		  
	  </label>
	  <div class="form-input">
		  <p align="left">Orange / MTN money au : '. $numero.' </p>
	  </div>
  </li>
</ul>
<a href="change_order.php?id='.$id.'" class="btn btn-primary">Reporter le rendez-vous</a>
</div>
</div><br>';

        echo $result;
?>