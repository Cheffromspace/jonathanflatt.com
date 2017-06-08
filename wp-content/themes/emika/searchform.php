<?php
/**
 * The template for displaying search form
 *
 * @package Emika
 */

?>

<form id="search-form" class="big-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search" method="get">
	<input name="s" id="s" class="big-search-input" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="<?php esc_html_e( 'Type text and press Enter' , 'emika' ); ?>" type="text">
</form>