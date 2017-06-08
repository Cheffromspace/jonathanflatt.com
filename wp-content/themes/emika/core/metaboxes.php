<?php
/**
 * Post style.
 */
function emika_add_post_style_metabox() {
	add_meta_box( 'ht-post-style', 'Post style', 'emika_post_style_metabox', 'post', 'side', 'core' );
}
add_action( 'admin_menu', 'emika_add_post_style_metabox' );

function emika_post_style_metabox( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'post_style_metabox_nonce' );
	
	$post_style_value = get_post_meta($post->ID, 'emika_post_style', true);

	if ( empty($post_style_value) ) {
		$post_style_value = 'standard';
	}

	?>
		<div>
			<label for="ht-post-style-1">
				<input type="radio" id="ht-post-style-1" name="emika_post_style" value="standard" <?php checked( $post_style_value, 'standard' ); ?>>
				<?php esc_html_e( 'Standard', 'emika' ) ?>
			</label>
		</div>
		
		<div>
			<label for="ht-post-style-2">
				<input type="radio" id="ht-post-style-2" name="emika_post_style" value="full_background" <?php checked( $post_style_value, 'full_background' ); ?>>
				<?php esc_html_e( 'Full Background Image', 'emika' ) ?>
			</label>
		</div>
	<?php
}

function emika_save_post_style_metabox ( $post_id ) {

	if ( !isset( $_POST['post_style_metabox_nonce'] ) || !wp_verify_nonce( $_POST['post_style_metabox_nonce'], basename( __FILE__ ) ) )
	return $post_id;

	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
		return $post_id;

	if ( !current_user_can( 'edit_post', $post_id ) )
		return $post_id;

	$post = get_post( $post_id );
	if ( $post->post_type == 'post' ) {
		update_post_meta( $post_id, 'emika_post_style', esc_attr($_POST['emika_post_style']) );
	}
	return $post_id;

}
add_action('save_post', 'emika_save_post_style_metabox');