<?php
/*
Template name: New Wholesale Landing Page
*/
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>New Wholesale Landing Page</title>

		<!-- Bootstrap -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,700,900" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

		<link href="<?php echo get_stylesheet_directory_uri() ?>/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo get_stylesheet_directory_uri() ?>/css/new_landingpage.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="banner_area">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 col-sm-12">
						<div class="col-md-6 col-sm-12 col-xs-12">
							<div class="banner_logo">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/img/wholesalelogo.png" class="img-responsive" alt="">
							</div>
							<h2>HACCP Certified</h2>
						</div>
						<div class="col-md-6 hidden-sm hidden-xs">
							<div class="contact_form">
								<?php echo do_shortcode('[contact-form-7 id="2654" title="New Wholesale Landing Page"]')?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="call_to_action_area">
			<div class="container">
				<div class="row border_bottom">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="single_col">
							<span class="fa fa-map-marker"></span>
							<p>DJ's Wholesale Fruit Market<br> Southern Cross Drive<br> Armidale NSW 2350</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="single_col">
							<span class="fa fa-envelope"></span>
							<a href="mailto:contact@djsfruitmarket.com.au"><p>contact@djsfruitmarket.com.au</p></a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="single_col phone_number">
							<span class="fa fa-mobile"></span>
							<a href=""><p>67724506</p></a>
							<a href=""><p>0427060865</p></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="hidden-lg hidden-md" style="padding-top: 50px">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="contact_form">
							<?php echo do_shortcode('[contact-form-7 id="2654" title="New Wholesale Landing Page"]')?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="about_us_area">
			<div class="container">
				<div class="row border_bottom">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="area_title">
							<h1>About us</h1>
						</div>
						<div class="area_content">
							<p>14 Years of delivering quality fresh fruit and vegetables. HACCP certified for both the fresh fruit and vegetables and the peeled vegetables. Produce is temperature controlled from arrival at our warehouse to delivery to your premises in our accredited delivery vehicles.</p>
						</div>
					</div>
				</div>
			</div>
		</div>	
		
		<div class="footer_area">
			<div class="container">
				<div class="row border_bottom">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="footer_area_content_wrap border_right">
							<div class="footer_area_logo col-md-6">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/img/bliss.png" class="img-responsive" alt="">
							</div>
							<div class="footer_area_content col-md-6">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure perspiciatis facilis necessitatibus at molestiae id nulla, voluptas inventore quibusdam aliquid ducimus saepe eligendi doloremque, omnis expedita excepturi itaque ea culpa.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="footer_area_content_wrap">
							<div class="footer_area_logo col-md-6">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/img/BSI Assurance-Black-HACCP.png" class="img-responsive" alt="">
							</div>
							<div class="footer_area_content col-md-6">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure perspiciatis facilis necessitatibus at molestiae id nulla, voluptas inventore quibusdam aliquid ducimus saepe eligendi doloremque, omnis expedita excepturi itaque ea culpa.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="copyright">
							<p>© 2016 DJ's wholeale fruit market | Design by TickDone Pty Ltd.</p>
						</div>
					</div>
				</div>
			</div>
		</footer>



		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri() ?>/js/bootstrap.min.js"></script>
	</body>
</html>