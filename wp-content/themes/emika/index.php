<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Emika
 */

get_header();

$layout_index = Kirki::get_option( 'emika_customizer', 'emika_index_layout' );

if ( $layout_index == 'grid-1' ) :
	$container_id = 'list-blog';
	$container_class = 'list-blog col-md-8 clearfix';
	$nav_class = 'col-md-8 pages-list-nav';
else :
	$container_id = 'grid';
	$container_class = 'grid';
	$nav_class = 'col-md-12';
endif;
?>

	<div id="primary" class="container main-content">
		<div class="row">
			<div id="<?php echo esc_attr( $container_id ); ?>" class="<?php echo esc_attr( $container_class ); ?>">
				<main id="main" class="site-main" role="main">

				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */

						get_template_part( 'template-parts/content', $layout_index );

					endwhile;

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

				</main><!-- #main -->
			</div>

			<section id="pages-navigation" class="<?php echo esc_attr( $nav_class ); ?> pages-nav">
				<?php 
				the_posts_navigation( array(
					'prev_text'          => '<i class="fa fa-arrow-left"></i> ' . esc_html__( 'Older posts', 'emika' ),
					'next_text'          => esc_html__( 'Newer posts', 'emika' ) . ' <i class="fa fa-arrow-right"></i>',
					'screen_reader_text' => '',
				) );
				?>
			</section>

		</div><!-- .row -->
	</div><!-- #primary -->

<?php

$sidebar = Kirki::get_option( 'emika_customizer', 'emika_sidebar_enable' ); 

if ( $sidebar == 1 ) {
	get_sidebar();
}

get_footer();
