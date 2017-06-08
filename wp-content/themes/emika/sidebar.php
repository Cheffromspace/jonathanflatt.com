<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Emika
 */

 if ( ! is_active_sidebar( 'sidebar' ) ) {
 	return;
 }
?>

<aside id="secondary" class="widget-area slide-panel nano" role="complementary">

	<div class="panel-close">
		<button id="close-button" class="close-button"><?php esc_html_e( 'Close', 'emika' ); ?></button>
	</div>

	<div class="panel-wrap nano-content">
		<?php if ( is_active_sidebar( 'sidebar' ) ) { ?>
			<div class="widgets-block">
				<?php dynamic_sidebar( 'sidebar' ); ?>
			</div>
		<?php } ?>
	</div>

</aside><!-- #secondary -->
