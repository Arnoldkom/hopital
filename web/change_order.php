<?php

    include 'config.php';


   

    function Get_Rdv($bdd){

        $requette = $bdd->query("SELECT * FROM rdv WHERE id = '".$_GET['id']."'");
                 
        if($donnees = $requette->fetch())
       {
        echo ' <li>
        <label class="form-label"> 
            Hôpital 
            
        </label>
        <div class="form-input">
            <p align="left">'.$donnees['hopital'].'</p>
        </div>
    </li>
    <li>
        <label class="form-label"> 
            Médecin 
            
        </label>
        <div class="form-input">
            <p align="left">'.$donnees['medecin'].'</p>
        </div>
    </li>';
       
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
    <title>selection des horaires du rendez-vous</title>
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
    </br></br>

<div class="container_1">
			
			<div class="agile-form" >
            <div class="col-md-12">
            <div class="grid1">
                <div class="agile-form">
                <ul class="field-list" >
                  
                            <?php Get_Rdv($bdd)  ?>
                   
                </ul>
                </div>
            </div>
        </div>
        <br>
            <form action="order.php" method="POST">
            <br><br>
					<ul class="field-list">
						<li>
							<label class="form-label"> 
								selectionner la date 
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
							<input type="hidden" name="patient" id="patient" value="<?php echo  $_SESSION['nom'];  ?>">
							<input type="hidden" name="region" id="region" value="<?php echo  $_GET['id'];  ?>">
							<input type="date" min="2018-05-30" name="select_horaire" placeholder="date " id="select_horaire" required >
							</div>
						</li>
            <select name="horaire4" class="horaire4" id="horaire4" >

            <option value="">selectionner l'horaire de renouvellement ...</option>

										</select><br>

                                        
					</ul><br><label for="motif"> motif de changement: </label>
                    <textarea name="motif" id="motif" cols="30" rows="10"></textarea>
						
					<input type="submit" value="Valider" id="save_order">
				</form>	

             
            
            
        
			</div>
		</div>

</br></br>

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