<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<?php wp_enqueue_style( 'style', get_stylesheet_uri() );?>
		<script src="script.js"></script>
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>
	
	<div class="container">
	
		<!-- site-header -->
		<header class="site-header">
			
			<!-- <div class="hd-search">
			<?php //get_search_form(); ?>
			</div> -->

			<nav class="site-nav">		
				<?php
				
				$args = array(
					'theme_location' => 'primary'
				);
				
				?>
				<div class="menu">
				<?php wp_nav_menu(  $args ); ?>
			</div>
			</nav>			
		</header><!-- /site-header -->