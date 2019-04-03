<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">

	<!-- Always force latest IE rendering engine (even in intranet) -->
	<!--[if IE ]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->

	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" />
	<?php } ?>

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta name="description" content="Fu's Custom Tattoo is the Premier and only Full Custom Tattoo Studio located in the heart of Charlotte's NoDa Arts District! Staffed by 8 friendly and professional industry veterans more than capable of making your ideas become reality!">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="apple-touch-icon" href="/images/apple-touch-icon.png">

	<!-- Typekit Kit -->
	<script src="//use.typekit.net/jke8ssu.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<!--[if lt IE 9 ]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->	

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="contact-header">
		<p id="address">
			<a href="https://www.google.com/maps/place/Fu's+Custom+Tattoos/@35.246927,-80.805572,17z/data=!3m1!4b1!4m2!3m1!1s0x88541fd993d49fa7:0x983fbc4e5005ebdd" title="Map It!">3200 N Davidson St, Charlotte, North Carolina</a> - <a href="tel:+17043764556" title="Call Us!">704-376-4556</a>
		</p>

		<ul id="social">
			<li><a href="https://instagram.com/fuscustomtattoo/" id="instagram" title="instagram">Instagram</a></li>
			<li><a href="https://www.facebook.com/pages/Fus-Custom-Tattoo/161232370554312" id="facebook" title="Facebook">Facebook</a></li>
		</ul>
	</div><!-- /#contact header -->

	<header id="main-header" role="banner">

		<a href="<?php echo get_option('home'); ?>/" id="logo" title="Fu's Custom Tattoos"><?php bloginfo('name'); ?></a>

		<button type="button">Menu</button>

		<nav id="nav" role="navigation">
			<?php
				$defaults = array(
					'menu' => 'Main Navigation Menu',
					'container' => false
				);
				wp_nav_menu( $defaults );
			?>
		</nav>

	</header>