<?php
/**
 * Register Widgets.
 */
function ht_register_widgets() {

	// About Me Widget
	register_widget('HT_About_Me_Widget');

	// Social Buttons Widget
	register_widget('HT_Social_Buttons_Widget');

	// Instagram Widget
	register_widget('HT_Instagram_Widget');

	// Twitter Widget
	register_widget('HT_Twitter_Widget');

	// Latest Posts Widget
	register_widget('HT_Latest_Posts_Widget');

	// Tags Widget
	register_widget('HT_Tags_Widget');

}
add_action('widgets_init', 'ht_register_widgets');