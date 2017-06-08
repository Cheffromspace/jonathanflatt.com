<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Emika
 */

if( has_post_format( 'quote' ) ){

	$author = get_post_meta($post->ID, 'emika_quote_author_value', 1);
	$url = get_post_meta($post->ID, 'emika_quote_url_value', 1);
	$thumb_id = get_post_thumbnail_id();
	$thumb_url = wp_get_attachment_image_src( $thumb_id, '', false );

	?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'col-md-4 col-sm-6 item' )); ?>>
		<div class="blog-post">
			<div class="post-background-thumbnail" style="background: url(<?php echo esc_url( $thumb_url[0] ); ?>) center no-repeat;">
				<div class="post-info">
					<blockquote>
						<span class="quote-icon"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
							<?php the_content(); ?>
							<span><a href="<?php echo esc_url( $url ); ?>" title="<?php echo esc_attr( $author ); ?>"><?php echo esc_html( $author ); ?></a></span>
					</blockquote>
				</div>
			</div>
		</div>
	</article>
	<?php

} else {

		if ( !empty( get_post_meta($post->ID, 'emika_post_style', true) ) ) {
			$post_style = get_post_meta($post->ID, 'emika_post_style', true);
		} else {
			$post_style = 'standard';
		}

	if ( $post_style == 'standard' ) {
	?>

		<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'col-md-4 col-sm-6 item' ) ); ?>>
			<div class="blog-post">
				<div class="post-simple-thumbnail">

					<header class="post-thumb">
						<a href="<?php echo esc_url( get_permalink() ) ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail(''); ?>
						</a>

						<?php
						if( has_post_format( 'audio' ) ){ ?>
							<div class="post-badge">
								<img src="<?php echo esc_url( EMIKA_THEME_ROOT ); ?>/assets/images/music.svg" alt="audio">
							</div>
						<?php
						}
						if( has_post_format( 'video' ) ){ ?>
							<div class="post-badge">
								<img src="<?php echo esc_url( EMIKA_THEME_ROOT ); ?>/assets/images/video.svg" alt="video">
							</div>
						<?php
						}
						if( has_post_format( 'gallery' ) ){ ?>
							<div class="post-badge">
								<img src="<?php echo esc_url( EMIKA_THEME_ROOT ); ?>/assets/images/gallery.svg" alt="gallery">
							</div>
						<?php
						}
						?>
					</header>

					<div class="post-info">

						<?php the_category(); ?>

						<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

						<?php the_excerpt(); ?>

						<div class="post-meta">
							<span class="date"><?php 
							esc_html_e( 'Posted on ', 'emika' );
							the_time( 'j F Y' );
							?></span>
							<span class="comments">
								<a href="<?php echo esc_url( get_permalink() . '#comments'); ?>" title="<?php the_title_attribute(); ?> <?php esc_attr__( 'comments', 'emika' ); ?>">
									<i class="fa fa-comments-o"></i> <?php comments_number( '0', '1', '%' ); ?>
								</a>
							</span>
						</div>

					</div>

				</div>
			</div>
		</article><!-- #post -->

	<?php
	} else {
	?>

		<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'col-md-4 col-sm-6 item' ) ); ?>>
			<div class="blog-post">
				<?php
					$thumb_id = get_post_thumbnail_id();
					$thumb_url = wp_get_attachment_image_src( $thumb_id, '', false );
				?>
				<div class="post-background-thumbnail" style="background: url(<?php echo esc_url( $thumb_url[0] ); ?>) center no-repeat;">

					<div class="post-info">

						<?php the_category(); ?>

						<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

						<?php the_excerpt(); ?>

						<div class="post-meta">
							<span class="date"><?php 
							echo esc_html__( 'Posted on ', 'emika' );
							the_time( 'j F Y' );
							?></span>
							<span class="comments">
								<a href="<?php echo esc_url( get_permalink() . '#comments'); ?>" title="<?php the_title_attribute(); ?> <?php esc_attr__( 'comments', 'emika' ); ?>">
									<i class="fa fa-comments-o"></i> <?php comments_number( '0', '1', '%' ); ?>
								</a>
							</span>
						</div>

					</div>

				</div>
			</div>
		</article><!-- #post -->

	<?php
	}
}