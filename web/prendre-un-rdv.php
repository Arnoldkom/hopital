<?php

    include 'config.php';


    function Get_Region($bdd){

        $requette = $bdd->query('SELECT * FROM regions');
                 
        while($donnees = $requette->fetch())
       {
           echo ' <option value="'.$donnees['id'].'">'. $donnees['nom'].'</option> ';
       
       }
       
    }

    function Get_Ville($bdd){

        $requette = $bdd->query('SELECT * FROM ville');
                 
        while($donnees = $requette->fetch())
       {
           echo ' <option value="'.$donnees['id'].'">'. $donnees['nom'].'</option> ';
       
       }
       
    }

    function Get_Hopital($bdd){

        $requette = $bdd->query('SELECT * FROM hopital');
                 
        while($donnees = $requette->fetch())
       {
           echo ' <option value="'.$donnees['id'].'">'. $donnees['nom'].'</option> ';
       
       }
       
    }

    function Get_Specialite($bdd){

        $requette = $bdd->query('SELECT * FROM specialite');
                 
        while($donnees = $requette->fetch())
       {
           echo ' <option value="'.$$donnees['nom'].'">'. $donnees['nom'].'</option> ';
       
       }
       
    }
    function Get_Medecin($bdd){

        $requette = $bdd->query('SELECT * FROM medecin');
                 
        while($donnees = $requette->fetch())
       {
           echo ' <option value="'.$donnees['id_user'].'">'. $donnees['id_user'].'</option> ';
       
       }
       
    }


?>
<?php
session_start(); 
if(!isset($_SESSION['login'])) {
	header("Location: connection.php");
	die('Vous devez être connecté pour accéder à cette partie du site');}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Prendre un RDV</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Medicate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <!-- //custom-theme -->
    <script type="text/javascript" src="js3/jquery-1.11.1.min.js"></script>
    <!-- stylesheet -->
    <link href="css3/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css3/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
    <link href="css3/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //stylesheet -->
    <!-- online fonts 
<link href="//fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">-->
    <!-- //online fonts -->
    <!-- font-awesome-icons -->
    <link href="css3/font-awesome.css" type="text/css" rel="stylesheet">
    <link href="b.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //font-awesome-icons -->
    <!-- for smooth scrolling -->

    <script type="application/x-javascript">
        addEventListener("load", function() {
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
    <!-- //for bootstrap working 
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">-->
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
    <!-- about -->
    <div class="about">
        <div class="container">
            <h3 class="heading-agileinfo">Prennez rendez-vous<span>Juste quelques clicks pour obtenir votre rendez-vous.</span></h3>
           <form action="selection-horaire.php" method="POST">
           <label for="region">CHoisir sa regions : </label><ul><li id="test1" class="fa fa-refresh"></li></ul>
           

            <select name="region" class="region" id="region">
            <option value="">selectionner la région ...</option>
            <?php
            echo Get_Region($bdd);
            ?>
                                    </select></br></br>
                                        

            

             <label for="ville">Choisir sa ville : </label><ul><li id="test2" class="fa fa-refresh"></li></ul>
            <select name="ville" class="ville" id="ville">
            <option value="">selectionner la ville ...</option>

             

                                        </select></br></br>
                                        
                                        <div id="test" ></div>

            <label for="hopital">Choisir son hôpital : </label><ul><li id="test3" class="fa fa-refresh"></li></ul>
            <select name="hopital" class="hopital" id="hopital" >

            <option value="">selectionner l hopital ...</option>

										</select></br></br>

            <label for="specialite">Choisir sa spécialité : </label><ul><li id="test11" class="fa fa-refresh"></li></ul>
            <select name="specialite" class="specialite" id="specialite">
            <option value="">selectionner la spécialité ...</option>

                                        </select></br></br>
            <label for="medecin">Choisir le medecin : </label><ul><li id="test5" class="fa fa-refresh"></li></ul>
            <select name="medecins" class="medecins" id="medecins">
            <option value="">selectionner le médécin ...</option>

										</select></br></br>
            
           
            <div class="clearfix"> </div>
        </div>
    </div>

<div id="charge15"></div><br>
    <input type="submit" class="btn btn-primary" value="suiv">
   
    </form>
    <div class="banner-bottom">
        <div class="container">
            <div class="col-md-12 tittle_head_w3layouts">
                <img src="images/rt.jpg" alt=" " class="img-responsive" width="1000">
            </div>

        </div>
    </div>
    <?php

include 'footer.php';

?>
    <!-- //bootstrap-modal-pop-up -->
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  
      <script>
        $('ul.dropdown-menu li').
    </script>
    <script type="text/javascript" src="js/bootstrap.js"></script>


    <script src="js3/easy-responsive-tabs.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function() {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
            $('#verticalTab').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true
            });
           
        });
    </script>
    <!--//tabs-->
</body>

</html>