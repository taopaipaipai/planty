﻿<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TUnderScore
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body class="mainContainer">
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header >
		
	 <div class="ContenaireHeader">
	 	<div >	
			 <?php the_custom_logo();?>
		</div>
			
		<nav class="menuNavigation">

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'container'      => 'false',
					'menu_class'     => 'cssHeader',
				)
			);
			?>

			<div class="DivCommander">	
			   <a href="http://localhost/planty5/commander/" class="LienCommander"> Commander </a>
			</div>
	 </div>
	 
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
