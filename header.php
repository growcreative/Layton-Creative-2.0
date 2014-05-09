<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">		
		<!-- icons -->
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">		
		<!-- fonts -->
		

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<!-- svg code -->
		<?php include('img/svg/svg-file.inc'); ?>
	<!-- /svg code -->	
	<!-- page wrapper & footer padding-->
	<div class="container">
		<div class="wrap">
			<header>
				<nav id="main_navigation">
					<svg class="logo" viewBox="0 0 23 8">
					<use xlink:href="#logo"></use>
				</svg>
					<div class="menu-button"> 
						<img src="<?php bloginfo('template_directory'); ?>/img/mobile-menu-icon.png" alt="mobile-menu-icon" >MENU
					</div>
					<?php wp_nav_menu(); ?>
				</nav>
			</header>