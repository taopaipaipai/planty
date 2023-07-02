<?php
/*
Template Name: Metiers
 */

get_header();
?>

<!--blavlavl bcp de bla bla-->
<h2> <?php  the_title()?> </h2>

	<main id="primary" class="site-main">
a supprimer misterrrr zzzz from page.php
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
	
<?php

get_footer();
?>