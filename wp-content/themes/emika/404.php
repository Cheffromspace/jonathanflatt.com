<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Emika
 */

get_header(); ?>

	<div id="primary" class="container post-container">
		<div class="row">
			<main id="main" class="site-main" role="main">

				<section class="col-md-8 post-content error-404 not-found">
					<div class="error-page">
						<h2 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'emika' ); ?></h2>

						<div class="page-content page-search-form">
							<p>
								<?php echo esc_html( get_theme_mod('emika_page_404_message') ); ?>
							</p>

							<?php 
								$enable_search_form = Kirki::get_option( 'emika_customizer', 'emika_page_404_search_form' );
								if ( $enable_search_form == 1 ) { 
									get_search_form();
								}
							?>

						</div><!-- .page-content -->
					</div><!-- .error-page -->
				</section><!-- .error-404 -->

			</main><!-- #main -->
		</div>
	</div><!-- #primary -->

<?php
$sidebar = Kirki::get_option( 'emika_customizer', 'emika_sidebar_enable' ); 

if ( $sidebar == 1 ) {
	get_sidebar();
}

get_footer();
