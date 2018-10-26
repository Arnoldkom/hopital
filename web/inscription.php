<?php

include 'config.php';

?>
<!DOCTYPE html>
<html>

<head>
    <title>S'incrire</title>
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="New Clinic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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

include 'banner_non_connecter.php';

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
    <div class="w3ls-banner">
        <div class="heading">

        </div>
        <div class="container_1">
            <div class="heading">
                <h2><span>Inscription</h2>

            </div>
            <div class="agile-form">
                <form action="inscrit.php" method="post">
                    <ul class="field-list">
                        <li>
                            <label class="form-label"> 
								Nom et Prénom
								<span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="nom" placeholder="Nom et Prénom" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label"> 
								Mot de passe 
								<span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="password" placeholder="Mot de passe" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
							   Genre
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <select class="form-dropdown" name="genre" required>
									<option value="">&nbsp;</option>
									<option value="Male"> Homme </option>
									<option value="Female"> Femme </option>
								</select>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
							   Téléphone
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="text" name="telephone" placeholder="237 690 362 808" required>
                            </div>
                        </li>
                        
                        <li>
                            <label class="form-label">
							   Address
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input add">
                                <span class="form-sub-label">
									<input type="text" name="address" placeholder="PK 14 Bassa 3001 " required>
									<label class="form-sub-label1"> Quartier </label>
								</span>

                                <span class="form-sub-label">
									<input type="text" name="ville" placeholder="Douala " required>
									<label class="form-sub-label1"> Ville </label>
								</span>

                            </div>
                        </li>
                        <li>
                            <label class="form-label">
							   E-Mail 
							   <span class="form-required"> * </span>
							</label>
                            <div class="form-input">
                                <input type="email" name="email" placeholder="myname@example.com" required>
                            </div>
                        </li>
                    </ul>
                    <input type="submit" value="S'incrire">
                </form>
                <p> déja un compte, se connecter <a href="connection.php"> ici </a> </p>
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
        $('ul.dropdown-menu li').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
        }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
        });
    </script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>