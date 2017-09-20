<?php
/*
Template name: Landing Page
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
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,800,800i" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/landing_page.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/skins/default/style.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	</head>
	<body>
		<div class="landing_page_wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
						<div class="wholesale_wrap text-center">
							<div class="logo">
								<a href="#">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo1.png" class="img-responsive" alt="Logo for wholesale" />
								</a>
							</div>
							<div class="phone_number">
								<h2>02 6772 4506</h2>
							</div>
							<div class="description">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="foodie_bilss_wrap text-center">
							<div class="logo">
								<a href="#">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo2.png" class="img-responsive" alt="Logo for wholesale" />
								</a>
								<a class="button shop_now" href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>"><span>Shop Now</span></a>
							</div>
							<div class="promoted_product">
								<?php echo magikBrezza_promoted_products();?>
							</div>
							<div class="phone_number">
								<h2>0407 123 904</h2>
							</div>
							<div class="description">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
							</div>
						</div>
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