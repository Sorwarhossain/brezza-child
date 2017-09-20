<?php
/*
Template name: Landing Page wholesale
*/
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>DJS Fruit Market Landing Page</title>

	<!-- Bootstrap -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/FoundrySterling_Fonts.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/landing_page.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/skins/default/style.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	</head>
	<body class="wholesale_landing">
		<div class="wholesale_header">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-4">
						<div class="wholesale_logo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo2.png" class="img-responsive" alt="Wholesale logo" />
						</div>
					</div>
					<div class="col-md-offset-4 col-md-4 col-sm-8 col-xs-8">
						<div class="wholesale_phone">
							<a href="tel:+02 6772 4506<"><h2><span class="fa fa-phone-square"></span>02 6772 4506</h2></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wholesale_banner">
			<div id="main-slider" class="slider carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#main-slider" data-slide-to="0" class="active"></li>
					<li data-target="#main-slider" data-slide-to="1"></li>
				</ol>
				<div class="carousel-inner">
					<!--=== Slider Item 1 ===-->
					<div class="item active" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/fruit-2.png'); background-position: left center; background-size: 50%;">
						<div class="container">
							<div class="row">
								<div class="col-md-offset-6 col-md-6 col-sm-6 col-xs-12">
									<div class="carousel-intro text-right">
										<h1 class="animated fadeInDown animation-delay-6 carousel-title">Welcome to <span style="color: #F7746D;">DJSFRUITMARKET<span></h1>
										<h2 class="crousel-subtitle animated fadeInDown animation-delay-4">Multipurpose Template</h2>
										<p class="animated fadeInUp animation-delay-10">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
										<a href="#" class="btn bwbg sbtn animated fadeInUp animation-delay-10">Get srarted now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--=== Slider Item 2 ===-->
					<div class="item" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/fruit-1.png'); background-position: right center; background-size: 40%;">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-sm-8 col-xs-12">
									<div class="carousel-intro text-left">
										<h1 class="carousel-title animated fadeInDown animation-delay-6">Responsive & Clean Templete</h1>
										<h2 class="crousel-subtitle animated fadeInDown animation-delay-4">Bootstrap Based</h2>
										<p class="animated fadeInUp animation-delay-10">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
										<div class="clearfix"></div>
										<a href="#" class="btn bwbg animated fadeInUp animation-delay-10">Get srarted now</a>
										<a href="#" class="btn bc animated fadeInUp animation-delay-6">PURCHASE NOW!</a> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--=== Left and right controls ===-->
					<a class="left carousel-control" href="#main-slider" role="button" data-slide="prev">
						<span class="fa fa-angle-left" aria-hidden="true"></span>
					</a>
					<a class="right carousel-control" href="#main-slider" role="button" data-slide="next">
						<span class="fa fa-angle-right" aria-hidden="true"></span>
					</a>
				</div>
			</div>
		</div>
		
		<div class="wholesale_content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="carousel-title">DJ's Wholesale Fruit Market</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="wholesale_about_us">
							<h3 class="separator">About Us</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							
						</div>
					</div>
					<div class="col-md-6">
						<div class="wholesale_contact_us">
							<h3 class="separator">Contact Us</h3>
							<?php echo do_shortcode('[contact-form-7 id="2650" title="Contact form 1"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="wholesale_footer_top">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="location">
							<span class="fa fa-map-marker"></span>
							<p>DJ's Wholesale Fruit Market<br>Southern Cross Drive<br>Armidale NSW 2350</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="mobile">
							<span class="fa fa-mobile"></span>
							<p><a href="tel:+02 6772 4506">02 6772 4506</a></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="email">
							<span class="fa fa fa-envelope-o"></span>
							<p><a href="mailto:contact@djsfruitmarket.com.au">contact@djsfruitmarket.com.au</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="wholesale_footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="copyright">2016 TickDone Pty Ltd. All Right Reserved.</p>
					</div>
				</div>
			</div>
		</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
	</body>
</html>