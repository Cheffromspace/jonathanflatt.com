<?php
function ht_add_quote_metabox() {
	add_meta_box( 'ht-quote-metabox', 'Quote', 'ht_quote_metabox', 'post', 'normal', 'core' );
}
add_action( 'admin_menu', 'ht_add_quote_metabox' );

function ht_quote_metabox( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'quote_metabox_nonce' );
	?>
	<div id="ht-quote" class="inside">
		<div>
			<label for="ht_quote_author">Quote Source Title</label><br>
			<input type="text" name="ht_quote_author" value="<?php echo get_post_meta($post->ID, 'ht_quote_author_value', 1); ?>" style="width:50%;">
		</div><br>
		<div>
			<label for="ht_quote_url">Quote Source URL</label><br>
			<input type="text" name="ht_quote_url" value="<?php echo get_post_meta($post->ID, 'ht_quote_url_value', 1); ?>" style="width:50%;">
		</div>
	</div>
	<?php
}	

function ht_save_quote_metabox ( $post_id ) {

	if ( !isset( $_POST['quote_metabox_nonce'] ) || !wp_verify_nonce( $_POST['quote_metabox_nonce'], basename( __FILE__ ) ) )
	return $post_id;

	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
		return $post_id;

	if ( !current_user_can( 'edit_post', $post_id ) )
		return $post_id;

	$post = get_post( $post_id );
	if ( $post->post_type == 'post' ) {
		update_post_meta( $post_id, 'ht_quote_author_value', esc_attr($_POST['ht_quote_author']) );
		update_post_meta( $post_id, 'ht_quote_url_value', esc_attr($_POST['ht_quote_url']) );
	}
	return $post_id;

}
add_action('save_post', 'ht_save_quote_metabox');