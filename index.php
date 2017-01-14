<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pokedex</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="stylesheetpokedex.css" rel="stylesheet" type="text/css">
    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
        <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
    <!--<![endif]&ndash;&gt;-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll koplinks" href="#page-top">Pokemon</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#Zoek">Zoek pokemon</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#Help">Help</a>
                    </li>
                    <!--<li>-->
                        <!--<a class="page-scroll" href="#portfolio">Portfolio</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a class="page-scroll" href="#contact">Contact</a>-->
                    <!--</li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header id="decontent">
	<section id="deixd">
		
		<form method="post">
			<!--<div class="header-content">
				<!--<div class="header-content-inner"> -->
					<h1 id="homeHeading"></h1>
					<p></p>
					<div id="knopjes">
						<input class="textbox" type="text" id="txtInvoer" name="txtInvoer"/>
						<input class="debutton" type="submit" id="btnZoek" name="btnZoek" value="Search pokemon"/> 
					</div>
				</div>
			</div>
		</form>
		</div>
		
		<div id="echocontent">
		<?php
	
		if(isset($_POST['btnZoek']))
		{			
			$ingevoerdenaam = $_POST['txtInvoer'];
			
			$lowertekst = strtolower($ingevoerdenaam);
			
			$found = true;
			// max tot id = 721
			$data = file_get_contents("http://pokeapi.co/api/v2/pokemon/".$lowertekst);
			
			if($data != ""){
				$rData = json_decode($data, true);
				
				$image = $rData['sprites']['front_default'];
				echo("<table><tr><th></th><td><img class='deimage' src='".$image."'></img><br /></td></tr></table>");
				
				echo("<table id='dename'><tr><th>Found a pokemon named: </th><td> &nbsp;".$rData['name']."</td></tr></table>");
				echo("<table><tr><th></th><td> #".$rData['id']."<br /><br /></td></tr></table>");

				foreach($rData['types'] as $mytypes) {
					foreach($mytypes['type'] as $type) {		
					}
					echo("<table><tr><th>Type: </th><td> &nbsp;" . $type . "</td></tr></table>");	
				}
				
				echo("<br/>");
				
				foreach($rData['abilities'] as $myabi ) {
					foreach($myabi['ability'] as $abi) {
					}
					echo("<table><tr><th>Ability: </th><td> &nbsp;" . $abi . "</td></tr></table>");
				}
				
				echo("<br/>");
				
 				echo("<table><tr><th> Stats </th></tr>");
 				echo("<tr><th>Speed: </th><td> &nbsp;".$rData['stats'][0]['base_stat']."</td></tr>");
				echo("<tr><th>Special-defense: </th><td> &nbsp;".$rData['stats'][1]['base_stat']."</td></tr>");
				echo("<tr><th>Special-attack: </th><td> &nbsp;".$rData['stats'][2]['base_stat']."</td></tr>");
				echo("<tr><th>Defense: </th><td> &nbsp;".$rData['stats'][3]['base_stat']."</td></tr>");
				echo("<tr><th>Attack: </th><td> &nbsp;".$rData['stats'][4]['base_stat']."</td></tr>");
				echo("<tr><th>Hp: </th><td> &nbsp;".$rData['stats'][5]['base_stat']."</td></tr></table>");
			
			}else{
				echo("No pokemon found");
			}
		}
		?>
		</div>
		</section>
    </header>

    

    <section id="Help">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Help</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-lightbulb-o text-primary sr-icons"></i>
                        <h3>Step 1</h3>
                        <p class="text-muted">Think of a pokemon</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-keyboard-o text-primary sr-icons"></i>
                        <h3>Step 2</h3>
                        <p class="text-muted">Type this name in the searchfield</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-mouse-pointer text-primary sr-icons"></i>
                        <h3>Step 3</h3>
                        <p class="text-muted">Then click on the button</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-info text-primary sr-icons"></i>
                        <h3>Step 4</h3>
                        <p class="text-muted">You will now see all the information about the chosen pokemon</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<section class="no-padding" id="portfolio">-->
        <!--<div class="container-fluid">-->
            <!--<div class="row no-gutter popup-gallery">-->
                <!--<div class="col-lg-4 col-sm-6">-->
                    <!--<a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">-->
                        <!--<img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">-->
                        <!--<div class="portfolio-box-caption">-->
                            <!--<div class="portfolio-box-caption-content">-->
                                <!--<div class="project-category text-faded">-->
                                    <!--Category-->
                                <!--</div>-->
                                <!--<div class="project-name">-->
                                    <!--Project Name-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</div>-->
                <!--<div class="col-lg-4 col-sm-6">-->
                    <!--<a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">-->
                        <!--<img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">-->
                        <!--<div class="portfolio-box-caption">-->
                            <!--<div class="portfolio-box-caption-content">-->
                                <!--<div class="project-category text-faded">-->
                                    <!--Category-->
                                <!--</div>-->
                                <!--<div class="project-name">-->
                                    <!--Project Name-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</div>-->
                <!--<div class="col-lg-4 col-sm-6">-->
                    <!--<a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">-->
                        <!--<img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">-->
                        <!--<div class="portfolio-box-caption">-->
                            <!--<div class="portfolio-box-caption-content">-->
                                <!--<div class="project-category text-faded">-->
                                    <!--Category-->
                                <!--</div>-->
                                <!--<div class="project-name">-->
                                    <!--Project Name-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</div>-->
                <!--<div class="col-lg-4 col-sm-6">-->
                    <!--<a href="img/portfolio/fullsize/4.jpg" class="portfolio-box">-->
                        <!--<img src="img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">-->
                        <!--<div class="portfolio-box-caption">-->
                            <!--<div class="portfolio-box-caption-content">-->
                                <!--<div class="project-category text-faded">-->
                                    <!--Category-->
                                <!--</div>-->
                                <!--<div class="project-name">-->
                                    <!--Project Name-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</div>-->
                <!--<div class="col-lg-4 col-sm-6">-->
                    <!--<a href="img/portfolio/fullsize/5.jpg" class="portfolio-box">-->
                        <!--<img src="img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">-->
                        <!--<div class="portfolio-box-caption">-->
                            <!--<div class="portfolio-box-caption-content">-->
                                <!--<div class="project-category text-faded">-->
                                    <!--Category-->
                                <!--</div>-->
                                <!--<div class="project-name">-->
                                    <!--Project Name-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</div>-->
                <!--<div class="col-lg-4 col-sm-6">-->
                    <!--<a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">-->
                        <!--<img src="img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">-->
                        <!--<div class="portfolio-box-caption">-->
                            <!--<div class="portfolio-box-caption-content">-->
                                <!--<div class="project-category text-faded">-->
                                    <!--Category-->
                                <!--</div>-->
                                <!--<div class="project-name">-->
                                    <!--Project Name-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
    <!--</section>-->

    <!--<aside class="bg-dark">-->
        <!--<div class="container text-center">-->
            <!--<div class="call-to-action">-->
                <!--<h2>Free Download at Start Bootstrap!</h2>-->
                <!--<a href="http://startbootstrap.com/template-overviews/creative/" class="btn btn-default btn-xl sr-button">Download Now!</a>-->
            <!--</div>-->
        <!--</div>-->
    <!--</aside>-->

    <!--<section id="contact">-->
        <!--<div class="container">-->
            <!--<div class="row">-->
                <!--<div class="col-lg-8 col-lg-offset-2 text-center">-->
                    <!--<h2 class="section-heading">Let's Get In Touch!</h2>-->
                    <!--<hr class="primary">-->
                    <!--<p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>-->
                <!--</div>-->
                <!--<div class="col-lg-4 col-lg-offset-2 text-center">-->
                    <!--<i class="fa fa-phone fa-3x sr-contact"></i>-->
                    <!--<p>123-456-6789</p>-->
                <!--</div>-->
                <!--<div class="col-lg-4 text-center">-->
                    <!--<i class="fa fa-envelope-o fa-3x sr-contact"></i>-->
                    <!--<p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
    <!--</section>-->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>
