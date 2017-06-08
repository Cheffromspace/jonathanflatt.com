<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Emika
 */

get_header(); ?>

	<div id="primary" class="container post-container">
		<div class="row">
			<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'single' );
				?>

			</main><!-- #main -->
		</div>
	</div><!-- #primary -->
		<?php
		$layout_single_post_comments = Kirki::get_option( 'emika_customizer', 'emika_single_page_comments_enable' );
		$enable_standard_comments = Kirki::get_option( 'emika_customizer', 'emika_enable_standard_comments' );
		$enable_disqus_comments = Kirki::get_option( 'emika_customizer', 'emika_enable_disqus_comments' );
		$disqus_shortname = Kirki::get_option( 'emika_customizer', 'emika_disqus_shortname' );

		if ( $layout_single_post_comments == 1 ) { 

			if ( $enable_standard_comments == 1 ) :
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			elseif ( $enable_disqus_comments == 1 ) :
			?>
				<div id="comments" class="post-comments">
					<div class="container">
						<div class="row">
							<div class="col-md-8 comments-block">

								<?php
									if ( empty( $disqus_shortname ) ) :
										echo '<p>';
										esc_html_e( 'Please enter Disqus shortname', 'emika' );
										echo '</p>';
									else :
										emika_disqus_embed( esc_html( $disqus_shortname ) );
									endif;
								?>
							</div>
						</div>
					</div>
				</div>
			<?php
			endif;
		} else { }

	endwhile; // End of the loop.
	?>

<?php
$sidebar = Kirki::get_option( 'emika_customizer', 'emika_sidebar_enable' ); 

if ( $sidebar == 1 ) {
	get_sidebar();
}

get_footer();
