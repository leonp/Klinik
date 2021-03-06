﻿<!doctype html>

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
						
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<?php wp_head(); ?>
		
	</head>
	
	<body <?php body_class(); ?>>
	
		<ul class="accessibility">
		
			<li><a href="#content">Skip to content</a></li>
			<li><a href="#nav">Skip to navigation</a></li>
			
		</ul>
		
		<div class="inner">
		
			<header class="site-header">
					
				<nav class="nav" id="nav" role="navigation">
				
					<div class="g-row">
					
						<div class="g-left g-c-small">
							
							<h1 class="site-title">
								
								<a href="<?php bloginfo('url'); ?>" rel="index">
									
									<?php if (get_header_image() != '') {?>
									
										<img class="dagger" src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>">
									
									<?php } else { ?>
									
										<?php bloginfo('name'); ?>
										
									<?php } ?>
									
								</a>
								
							</h1>
							
						</div>
					
					<?php if ( has_nav_menu( 'navigation' ) ) { ?>
					
						<div class="g-right g-align-right g-c-large g-last">
					
							<div id="reveal">
								
								<ul>
								
									<?php wp_nav_menu(array('theme_location' => 'navigation', 'container' => 'false', 'items_wrap' => '%3$s', 'depth' => '2')); ?>
									
									<li>
									
										<form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
											
											<label class="screen-reader-text accessibility" for="s">Search for:</label>
											
											<input type="search" value="" name="s" id="s">
											<input type="submit" id="searchsubmit" value="Search">
											
										</form>
										
									</li>
									
								</ul>
								
							</div> <!-- end #reveal -->
							
						</div>
						
					</div> <!-- end .g-row -->
						
				<?php } ?>
					
				</nav>
				
			</header>
		
			<div class="wrapper">