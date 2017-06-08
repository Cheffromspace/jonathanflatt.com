<?php
if ( ! function_exists( 'emika_core' ) ) :
function emika_core() {

	// Remove “Category:”, “Tag:”, “Author:” from the_archive_title.
	add_filter( 'get_the_archive_title', function ($title) {
		if ( is_archive() ) {
			$title = single_cat_title( '', false );
		} elseif ( is_tag() ) {
			$title = single_tag_title( '', false );
		} elseif ( is_author() ) {
			$title = '<span class="vcard">' . get_the_author() . '</span>' ;
		}

		return $title;
	});

	//Support shortcode in widget
	add_filter( 'widget_text', 'do_shortcode' );
}
endif;
add_action( 'after_setup_theme', 'emika_core' );

function emika_sanitize( $value ) {
	return strip_tags( stripslashes( $value ) );
}

function emika_relative_time( $a ) {
	$b = strtotime('now'); 
	$c = strtotime($a);
	$d = $b - $c;
	$minute = 60;
	$hour = $minute * 60;
	$day = $hour * 24;
	$week = $day * 7;
		
	if( is_numeric($d) && $d > 0 ) {
		if($d < 3) return esc_html__( 'Right now', 'emika' );
		if($d < $minute) return floor($d) . esc_html__( ' seconds ago', 'emika' );
		if($d < $minute * 2) return esc_html__( 'About 1 minute ago', 'emika' );
		if($d < $hour) return floor($d / $minute) . esc_html__( ' minutes ago', 'emika' );
		if($d < $hour * 2) return esc_html__( 'About 1 hour ago', 'emika' );
		if($d < $day) return floor($d / $hour) . esc_html__( ' hours ago', 'emika' );
		if($d > $day && $d < $day * 2) return esc_html__( 'Yesterday', 'emika' );
		if($d < $day * 365) return floor($d / $day) . esc_html__( ' days ago', 'emika' );
		return esc_html__(' Over a year ago', 'emika' );
	}
}

function emika_comments($comment, $args, $depth){
	
	$GLOBALS['comment'] = $comment; ?>

		<li id="li-comment-<?php comment_ID() ?>" <?php comment_class( array( 'comment clearfix' ) ); ?>>
			<div id="comment-<?php comment_ID(); ?>" class="comment-block">
				
				<div class="comment-author vcard avatar">
					<?php echo get_avatar( get_the_author_meta('user_email'), 96 ); ?>
					<div class="clearfix"></div>
				</div>

				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em><?php esc_html_e( 'Your comment is awaiting moderation.' , 'emika' ) ?></em>
				<?php endif; ?>

				<div class="comment-content">
					<div class="comment-meta">
						<div class="author"><h4><?php printf( '%s' , get_comment_author_link()) ?></h4> <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></div>
						<div class="date">
							<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__( '%1$s at %2$s' , 'emika' ), get_comment_date(), get_comment_time()) ?></a>
							<?php edit_comment_link(__( '(Edit)' , 'emika' ),'  ','') ?>
						</div>
						<?php comment_text() ?>
					</div>
				</div>

				<div class="reply">
					
				</div>
			</div>
<?php 
}