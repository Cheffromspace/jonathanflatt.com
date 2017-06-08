<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Emika
 */

get_header(); ?>

	<div id="primary" class="container post-container">
		<div class="row">
			<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) :
					// 	comments_template();
					// endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div>
	</div><!-- #primary -->

<?php
$sidebar = Kirki::get_option( 'emika_customizer', 'emika_sidebar_enable' ); 

if ( $sidebar == 1 ) {
	get_sidebar();
}

get_footer();
