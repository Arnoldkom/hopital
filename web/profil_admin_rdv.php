<?php

include 'config.php';

session_start(); 

echo 

$nom_hopital = "";

$req = $bdd->prepare('SELECT * FROM hopital where id_gestion = ?');
$req->execute(array($_SESSION['id_admin']));
		 
	if($donnees = $req->fetch())
   {
	$nom_hopital = $donnees['nom'];
   }

?>

<?php
if(!isset($_SESSION['login'])  && !isset($_SESSION['statut'])) {
	header("Location: index.php");
	die('Vous devez être connecté pour accéder à cette partie du site');}?>
<!DOCTYPE html>
<html>

<head>
	<title>Profil Gestion  </title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="New Clinic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/appointment_style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="b.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>

<body>
<!-- header -->
<div class="header" id="home">
		<div class="top_menu_w3layouts">
<div class="container">
			<div class="header_left">
				<ul>
					<li><i class="fa fa-flag" aria-hidden="true"></i> 3358 Douala, CAMEROUN</li>
					<li><i class="fa fa-phone" aria-hidden="true"></i> +(237) 693 764 263</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">contact@tutore.com</a></li>
				</ul>
			</div>
			<div class="header_right">
			<?php

if(!isset($_SESSION['login'])) {
	include 'banner_non_connecter.php';
}else {
	include 'banner_connecter.php';;}


?>

			</div>
			<div class="clearfix"> </div>
			</div>
		</div>

        <div class="content white">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                        <a class="navbar-brand" href="index.html">
                            <h1><span class="fa fa-stethoscope" aria-hidden="true"></span>DocApp </h1>
                        </a>
                    </div>
                    <!--/.navbar-header-->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php

include 'menu.php';

?>
                    </div>
                    <!--/.navbar-collapse-->
                    <!--/.navbar-->
                </div>
            </nav>
        </div>
    </div>
	<!-- banner -->
<div class="banner_inner_content_agile_w3l">
	
</div>
	<!--//banner -->
	<!-- departments -->
	<div class="services">
<div class="container">
		<div class="header_left">
		<h2><img src="images/rv.jpg" width="100" height="100" style="border-radius:50px"/> &nbsp;<?php echo	  $nom_hopital;  ?></h2>
		
		</div><br><br>
		
		<div class="header_right">
    <ul class="forms_right">
          <li><a href="profil_admin.php">Accueil</a> </li>&nbsp;
					<li><a href="profil_admin_medecin.php">Medecin</a> </li>&nbsp;
					<li><a href="profil_admin_info.php"> info</a> </li>&nbsp;
					<li><a href="profil_admin_specialite.php">Specialite</a> </li>&nbsp;
				</ul>

			</div>
			
		<br><br><br><br><br><br>
	
</div>
</div>


<div class="container">
		
	
		
<div class="container">
		<div class="heading">
        <h2>Rendez-vous </h2>
        
        <form action="" method="POST">
		<input type="hidden" name="hopital5" id="hopital5" value="<?php echo	  $nom_hopital;  ?>">
          <label for="rechercher">rechercher :</label> <input type="text" placeholder="rechercher" name="recherche" id="recherche">
        </form>
				
			</div>
		</br>
		<ul><h4><li id="refresh4" class="fa fa-refresh"></li></h4></ul>
		</br>
		
				<div class="col-md-12">
        <div class="tab1">
		<div id="charge3"></div> </br></div>
			</div>
			
			<div class="clearfix"></div>
		
			</div>
	</div>
	
	<?php

include 'footer.php';

?>
<!-- //bootstrap-modal-pop-up --> 
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>

</html>