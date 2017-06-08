<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Emika
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'col-md-8 post-content' ) ); ?>>

	<div class="post-text">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'emika' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'emika' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .post-text -->

	<?php
	$share_facebook = Kirki::get_option( 'emika_customizer', 'emika_single_page_facebook' );
	$share_twitter = Kirki::get_option( 'emika_customizer', 'emika_single_page_twitter' );
	$share_google = Kirki::get_option( 'emika_customizer', 'emika_single_page_google' );
	?>

	<div id="social-btn" class="share-buttons hidden-sb">
		<?php if ( $share_facebook == 1 or $share_twitter == 1 or $share_google == 1 ) { ?>
		<span>Share</span>
		<?php } ?>
		<?php if ( $share_facebook == 1 ) { ?>
			<a target="_blank" class="ht-facebook-share-button" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url( get_permalink() ) ?>" title="Share on Facebook"><i class="fa fa-facebook"></i></a>
		<?php } ?>
		<?php if ( $share_twitter == 1 ) { ?>
			<a target="_blank" class="ht-twitter-share-button" href="http://twitter.com/share?text=<?php echo esc_url( get_the_title() . "&url=" . get_permalink() . "&via=twitter" ); ?>" title="Share on Twitter"><i class="fa fa-twitter"></i></a>
		<?php } ?>
		<?php if ( $share_google == 1 ) { ?>
			<a target="_blank" class="ht-google-share-button" href="https://plus.google.com/share?url=<?php echo esc_url( get_permalink() ) ?>" title="Share on Google+"><i class="fa fa-google"></i></a>
		<?php } ?>
	</div>

	<footer class="entry-footer">
	<?php
	emika_entry_footer();
	
	$show_author_info = Kirki::get_option( 'emika_customizer', 'emika_single_page_show_author_info' );
	$author_name = Kirki::get_option( 'emika_customizer', 'emika_single_page_author_name' );
	$author_social = Kirki::get_option( 'emika_customizer', 'emika_single_page_author_social' );
	$author_desc = get_the_author_meta( 'description' );

	 if ( !empty($author_desc) && $show_author_info == 1 ) {
		?>
		<div class="post-author">
			<div class="author-photo">
				<?php echo get_avatar( get_the_author_meta('user_email'), 96 ); // 96 - size ?>
			</div>
			
			<div class="author-content">
				<?php
				echo '<h4>';
				if ( $author_name == 'full-name' ) {
				the_author_meta( 'display_name' );
				} else {
					if ( $author_name == 'f-name' ) {
					the_author_meta( 'user_firstname' );
					} else {
						if ( $author_name == 'l-name' ) {
						the_author_meta( 'user_lastname' );
						} 
					}
				}
				echo '</h4>';

				echo '<p>';
					the_author_meta( 'description' );
				echo '</p>';

				if ( $author_social == 1 ) {
					emika_social_buttons();
				}
				?>
		
				<div class="clearfix"></div>
			</div>

		</div>

		<?php } ?>

	</footer><!-- .entry-footer -->

	<?php 
	$enable_post_nav = Kirki::get_option( 'emika_customizer', 'emika_single_page_nav_enable' );

	if ( $enable_post_nav == 1 ) {
	?>
	<div class="post-nav-link">

		<div class="prev-post">
			<?php if ( !empty( get_previous_post_link() ) ) { ?>
				<span><?php esc_html_e( 'Previous post', 'emika' ); ?></span>
			<?php } ?>
				<h4><?php previous_post_link( '%link', '<i class="fa fa-arrow-left"></i> %title' ); ?></h4>
		</div>
		
		<div class="next-post">
			<?php if ( !empty( get_next_post_link() ) ) { ?>
				<span><?php esc_html_e( 'Next post', 'emika' ); ?></span>
			<?php } ?>
			<h4><?php next_post_link( '%link', '%title <i class="fa fa-arrow-right"></i>' ); ?></h4>
		</div>
						
		<div class="clearfix"></div>
	</div>
	<?php } ?>
	
</article><!-- #post-## -->
