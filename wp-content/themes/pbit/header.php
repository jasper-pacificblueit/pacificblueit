<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- Nav Section start -->
			<header id="masthead" class="clearfix pos-top">
				<div class="container">
					<div class="nav-container">
						<nav class="navbar navbar-expand-lg navbar-light">
							<a class="navbar-brand" href="<?php echo home_url(); ?>"><div class="nav-logo" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/pbit-logo.png);"></div></a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>

							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<?php html5blank_nav(); ?>
<!--								<ul class="navbar-nav ml-auto">-->
<!--									<li class="nav-item active">-->
<!--										<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
<!--									</li>-->
<!--									<li class="nav-item">-->
<!--										<a class="nav-link" href="#">Why Us</a>-->
<!--									</li>-->
<!--									<li class="nav-item">-->
<!--										<a class="nav-link" href="#">About</a>-->
<!--									</li>-->
<!--									<li class="nav-item">-->
<!--										<a class="nav-link" href="#">Services</a>-->
<!--									</li>-->
<!--									<li class="nav-item">-->
<!--										<a class="nav-link" href="#">Workplace</a>-->
<!--									</li>-->
<!--									<li class="nav-item">-->
<!--										<a class="nav-link" href="#">Contact Us</a>-->
<!--									</li>-->
<!--								</ul>-->
							</div>
						</nav>
					</div>
				</div>

			</header>

			<!-- Nav Section   end -->

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
<!--					<div class="logo">-->
<!--						<a href="--><?php //echo home_url(); ?><!--">-->
<!--							<img src="--><?php //echo get_template_directory_uri(); ?><!--/img/logo.svg" alt="Logo" class="logo-img">-->
<!--						</a>-->
<!--					</div>-->
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
