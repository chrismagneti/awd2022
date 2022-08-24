<!DOCTYPE html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8">
	
	<title><?php wp_title('', true, 'right'); ?></title>
	
	<?php //mobile meta (hooray!) ?>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
	
	<?php //hide iOS browser bar ?>
	<meta name="apple-mobile-web-app-capable" content="yes" />

	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/library/images/favicon.png">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php /* Fonts */ ?>
	<link rel="stylesheet" href="https://use.typekit.net/vxg8qxs.css">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700;800&display=swap" rel="stylesheet">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrap">

	<header id="header">
		<div class="center wide">

			<div class="top-bar">
				<a class="nav-text" href="#">All Design Partner Services</a>
			</div>	

			<div class="bottom-bar">

				<div class="left">
					<a href="<?php echo get_option('siteurl'); ?>" id="main-logo">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/main-logo.png" alt="Accelerated Wealth Denver" />
					</a>
				</div>
	
				<div id="primary-navigation-wrap">
					<?php wp_nav_menu(array(
						'theme_location' => 'main-nav',
						'container' => ''
					)); ?>
				</div>
	
				<div id="nav-trigger">
					<span class="line line1"></span>
					<span class="line line2"></span>
					<span class="line line3"></span>
				</div>

			</div>


		</div>
	</header>