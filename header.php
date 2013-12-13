<!doctype html>

<html lang="en-gb">

	<head>
	
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		
		<title><?php wp_title('&ndash;',true,'right'); ?><?php bloginfo('name'); ?></title>

		<?php if ( is_home() ) {?>
			
			<meta name="description" content="<?php bloginfo('description'); ?>">
						
		<?php } ?>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!--[if lt IE 9]>
		
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			
		<![endif]-->

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
						
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<link rel="profile" href="http://gmpg.org/xfn/11">
		
		<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.jpg">
		
		<script src="//use.typekit.net/dom2ywz.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>

		<?php wp_head(); ?>
		
	</head>
	
	<body <?php body_class(); ?>>
	
		<ul class="accessibility">
		
			<li><a href="#content">Skip to content</a></li>
			<li><a href="#nav">Skip to navigation</a></li>
			
		</ul>
		
		<div class="wrapper">
				
		<?php if ( has_nav_menu( 'navigation' ) ) { ?>
				
			<nav class="nav" id="nav" role="navigation">
						
				<ul>
				
					<li><a href="<?php bloginfo('url'); ?>" rel="index"><img class="dagger" src="<?php bloginfo('stylesheet_directory'); ?>/images/little-beard.jpg" alt="Leon Paternoster"></a></li>		
					<?php wp_nav_menu(array('theme_location' => 'navigation', 'container' => 'false', 'items_wrap' => '%3$s', 'depth' => '2')); ?>
					
				</ul>
				
			</nav>
					
		<?php } ?>