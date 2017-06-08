<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Emika
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="post-comments">
	<div class="container">
		<div class="row">
			<div class="col-md-8 comments-block">

				<?php
				// You can start editing here -- including this comment!
				if ( have_comments() ) : ?>
					<h3 class="comments-title">
						<?php
							printf( // WPCS: XSS OK.
								esc_html( _nx( 'Comments (1)', 'Comments (%1$s)', get_comments_number(), 'comments title', 'emika' ) ),
								number_format_i18n( get_comments_number() ),
								'<span>' . get_the_title() . '</span>'
							);
						?>
					</h3><!-- .comments-title -->

					<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
					<nav id="comment-nav-above" class="navigation comment-navigation clearfix" role="navigation">
						<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'emika' ); ?></h2>
						<div class="nav-links">

							<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'emika' ) ); ?></div>
							<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'emika' ) ); ?></div>

						</div><!-- .nav-links -->
					</nav><!-- #comment-nav-above -->
					<?php endif; // Check for comment navigation. ?>

					<ul class="comment-list">
						<?php
							wp_list_comments( array(
								'max_depth'		=> '2',
								'callback'		=> 'emika_comments',
								'style'				=> 'ul',
								'type'				=> 'all',
								'reply_text'	=> esc_html__( 'Reply', 'emika' ),
								'avatar_size'	=> 96,
							) );
						?>
					</ul><!-- .comment-list -->

					<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
					<nav id="comment-nav-below" class="navigation comment-navigation clearfix" role="navigation">
						<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'emika' ); ?></h2>
						<div class="nav-links">

							<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'emika' ) ); ?></div>
							<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'emika' ) ); ?></div>

						</div><!-- .nav-links -->
					</nav><!-- #comment-nav-below -->
					<?php
					endif; // Check for comment navigation.

				endif; // Check for have_comments().


				// If comments are closed and there are comments, let's leave a little note, shall we?
				if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
					<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'emika' ); ?></p>
				<?php
				endif;
				?>

				<?php
				$args = array(
					'comment_field' => '<div class="row field-group"><div class="col-md-12 field"><label for="comment">' . esc_html__( 'Comment', 'emika' ) . '</label> <textarea id="comment" name="comment" class="field-message" aria-required="true"></textarea></div></div>',
					'fields' => array(
						'author'	=> '<div class="row field-group"><div class="col-md-4 field"><label for="author">' . esc_html__( 'Name', 'emika' ) . '<span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30"></div>',
						'email'		=> '<div class="col-md-4 field"><label for="email">' . esc_html__( 'Email', 'emika' ) . '<span class="required">*</span></label> <input id="email" name="email" type="text" value="" size="30"></div>',
						'url' 		=> '<div class="col-md-4 field"><label for="url">' . esc_html__( 'Website', 'emika' ) . '</label> <input id="url" name="url" type="text" value="" size="30"></div></div>',
					),
					'comment_notes_before' => '<p class="comment-notes">' . esc_html__( 'Your email address will not be published. Required fields are marked*', 'emika' ) . '</p>',
					'id_submit'	=> esc_attr( 'submit' ),
					'label_submit' => esc_html__( 'Submit', 'emika' ),
					'title_reply' => esc_html__( 'Leave a Comment', 'emika' ),
				);

				comment_form( $args );
				?>

			</div>
		</div>
	</div>
</div><!-- #comments -->