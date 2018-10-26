<?php

include 'config.php';

?>
<!DOCTYPE html>
<html>

<head>
	<title>Prise de rendez vous en ligne</title>
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
session_start(); 
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
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>Pride rendez-vous dans les <span> hôpitaux du Cameroun </span></h3>
						<p>Trace numerique des rendez-vous</p>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>Integration du Module <span> USSD</span></h3>
						<p>Statistique et efficacité de chaque hôpital</p>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>Plusieurs spécialitésS</h3>
						<p>La performance et la satisfaction</p>
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">
						<h3>Consultation en ligne</h3>
						<p></p>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
	</div>
	<!--//banner -->
	<!-- about -->
	
<div class="services">
<div class="container">
		<h3 class="heading-agileinfo">Qu'est ce que DocApp?<span><strong>DocApp</strong> pour <em>Doctor Appointment</em>, est une solution médicale qui vous permettra de facilement prendre rendez-vous avec un docteur de votre choix et dans l'hôpital qui vous convient. </span></h3>
	
		<div class="services-top-grids">
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-globe" aria-hidden="true"></i>
					<h4>Ville</h4>
					<p>Vous avez la possibilité de choisir la ville dans laquelle vous souhaitez vous rendre </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-hospital-o" aria-hidden="true"></i>
					<h4>Hôpital</h4>
					<p>Une liste des hôpitaux de la ville vous sera proposée et vous pouvez sélectionner l'hôpital de votre choix</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-user-md" aria-hidden="true"></i>
					<h4>Docteur</h4>
					<p>Les spécialités de l'hôpitalsont affichées et vous visualisez les profiles de tous les médecins</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="services-bottom-grids">
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-calendar" aria-hidden="true"></i>
					<h4>Agenda</h4>
					<p>Vous pouvez visualisez l'agenda de chaque médecin et en fonction de ses disponibilités, prendre un rendez-vous </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-user" aria-hidden="true"></i>
					<h4>Patient</h4>
					<p>Dans votre compte, vous pourrez visualiser l'historique des différents rendez-vous et prescriptions </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-ambulance" aria-hidden="true"></i>
					<h4>Rendez-Vous</h4>
					<p>Les rendez-vous se paient à l'avance via Orange Money sans aucune possibilité d'annulation </p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //services -->
<!-- Clients -->
<div class="tesimonials">
<div class="tesimonials_tp">
		<div class="container">
			<div class="tittle_head_w3layouts">
				<h3 class="heading-agileinfo te">Avantages</h3>
			</div>
			<div class="inner_sec_info_agileits_w3">
				<div class="test_grid_sec">
					<div class="col-md-offset-2 col-md-8">
						<div class="carousel slide two" data-ride="carousel" id="quote-carousel">
							<!-- Bottom Carousel Indicators -->
							

							<!-- Carousel Slides / Quotes -->
							<div class="carousel-inner">

								<!-- Quote 1 -->
								<div class="item active">
									<blockquote>
										<div class="test_grid">
											
											<div class="col-sm-12 test_img_info" align=left>
												<p>Numerisation des rendez-vous</p>
												<p>gain en temps</p>
												<p>prise de rendez-vous 24h/24</p>
											</div>
										</div>
									</blockquote>
								</div>
								<!-- Quote 2 -->
								
								<!-- Quote 3 -->
								
							</div>

							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //Clients -->
<!--/icons-->
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-12 tittle_head_w3layouts">
				<img src="images/rt.jpg" alt=" " class="img-responsive" width="1000">
			</div>
			
		</div>
	</div>
	<!--//icons-->
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
</body>

</html>