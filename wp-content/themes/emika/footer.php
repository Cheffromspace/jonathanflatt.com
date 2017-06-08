<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Emika
 */

?>

	</div><!-- #content -->

	<?php if ( is_active_sidebar( 'instagram-sidebar' ) ) { ?>
	<section id="instagram" class="instagram">
		<?php dynamic_sidebar( 'instagram-sidebar' ); ?>
	</section>
	<?php } ?>

	<footer id="colophon" class="footer site-footer" role="contentinfo">
		

		<?php 
		if ( is_active_sidebar( 'footer-1' ) or is_active_sidebar( 'footer-2' ) or is_active_sidebar( 'footer-3' ) or is_active_sidebar( 'footer-4' ) ) {
		?>
		<div class="container footer-top">
			<div class="row">
				
				<div class="col-md-3 footer-block">
					<?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
						<?php dynamic_sidebar( 'footer-1' ); ?>
					<?php } ?>
				</div>

				<div class="col-md-3 footer-block">
					<?php if ( is_active_sidebar( 'footer-2' ) ) { ?>
						<?php dynamic_sidebar( 'footer-2' ); ?>
					<?php } ?>
				</div>

				<div class="col-md-3 footer-block">
					<?php if ( is_active_sidebar( 'footer-3' ) ) { ?>
						<?php dynamic_sidebar( 'footer-3' ); ?>
					<?php } ?>
				</div>

				<div class="col-md-3 footer-block">
					<?php if ( is_active_sidebar( 'footer-4' ) ) { ?>
						<?php dynamic_sidebar( 'footer-4' ); ?>
					<?php } ?>
				</div>
			</div>
		</div>
		<?php 
		}
		?>

		<?php 
		$show_copyright_footer = Kirki::get_option( 'emika_customizer', 'emika_copyright_enable' );
		$show_social_footer = Kirki::get_option( 'emika_customizer', 'emika_social_links_enable' );
		$copyright_text = Kirki::get_option( 'emika_customizer', 'emika_copyright_text' );
		?>

		<?php 
		if ( $show_copyright_footer == 1 or $show_social_footer == 1 ) {
		?>
		<div class="container-fluid footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-6 footer-bottom-left">
					<?php 
					if ( $show_copyright_footer == 1 ) {
						echo esc_html( $copyright_text );
					} 
					?>
					</div>
					<div class="col-md-6 footer-bottom-right">
					<?php
					if ( $show_social_footer == 1 ) {
						emika_social_buttons();
					} ?>
					</div>
				</div>
			</div>
		</div>
		<?php
		}
		?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
