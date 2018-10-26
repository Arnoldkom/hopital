
				<ul class="forms_right">
				<?php
if (isset($_SESSION['statut']) && $_SESSION['statut'] == "patient"){
	?><li><a href="profil_patient.php">patient</a> </li><?php
}
?>
		<?php
if (isset($_SESSION['statut']) && $_SESSION['statut'] == "medecin"){
	?><li><a href="profil_medecin.php">medecin</a> </li><?php
}
?>

<?php
if (isset($_SESSION['statut']) && $_SESSION['statut'] == "gestion"){
	?><li><a href="profil_admin.php">gestion</a> </li><?php
}
?>

<?php
if (isset($_SESSION['statut']) && $_SESSION['statut'] == "admin"){
	?>
	<li><a href="profil_admin2.php">admin</a> </li>
	<li><a href="new_hopital.php">Hopital</a> </li><?php
}
?>
				

					
					<li><a href="deconnection.php">sortir</a> </li>
				</ul>

