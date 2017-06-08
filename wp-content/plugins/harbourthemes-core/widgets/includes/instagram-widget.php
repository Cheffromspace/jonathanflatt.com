<?php
class HT_Instagram_Widget extends WP_Widget {

	function __construct() {

		$widget_ops = array(
			'classname' => 'ht-instagram-widget', 
			'description' => __('Displays Instagram photos.', 'ht') 
		);

		$control_ops = array(
			'id_base'	=> 'ht_instagram_widget' 
		);

		parent::__construct(
			'ht_instagram_widget', 
			__('HT Instagram Widget', 'ht'),
			$widget_ops,
			$control_ops
		);

		wp_enqueue_style( 'ht_instagram_widget_style', HT_CORE_URL . 'widgets/css/instagram.css', array(), HT_CORE_VERSION );

	}

	public function form( $instance ) {

		$instance = wp_parse_args( (array) $instance, 
			array( 
				'title'					=> __( 'Instagram', 'ht' ), 
				'username'			=> '',
				'number'				=> 9,
				'columns'				=> '',
				'margin'				=> '',
				'target'				=> '_blank',
				'follow'				=> __( 'Follow Me', 'ht' ),
				'custom_class'	=> '' 
			)
		);

		$title = $instance['title'];
		$username = $instance['username'];
		$number = absint( $instance['number'] );
		$columns = $instance['columns'];
		$margin = $instance['margin'];
		$target = $instance['target'];
		$follow = $instance['follow'];
		$custom_class	= $instance['custom_class'];

		?>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title', 'ht' ); ?>:</label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'username' ) ); ?>"><?php esc_html_e( 'Username', 'ht' ); ?>:</label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'username' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'username' ) ); ?>" type="text" value="<?php echo esc_attr( $username ); ?>">
		</p>
		
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>"><?php esc_html_e( 'Number of photos', 'ht' ); ?>:</label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number' ) ); ?>" type="text" value="<?php echo esc_attr( $number ); ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('columns'); ?>"><?php _e('Widget Style:', 'ht'); ?></label>
			<select class='widefat' name="<?php echo $this->get_field_name('columns'); ?>" id="<?php echo $this->get_field_id('columns'); ?>">
				<option value="one-columns" <?php if($instance['columns'] == 'one-columns') { ?>selected="selected"<?php } ?>><?php _e( '1 Column', 'ht' ); ?></option>
				<option value="two-columns" <?php if($instance['columns'] == 'two-columns') { ?>selected="selected"<?php } ?>><?php _e( '2 Columns', 'ht' ); ?></option>
				<option value="three-columns" <?php if($instance['columns'] == 'three-columns') { ?>selected="selected"<?php } ?>><?php _e( '3 Columns', 'ht' ); ?></option>
				<option value="four-columns" <?php if($instance['columns'] == 'four-columns') { ?>selected="selected"<?php } ?>><?php _e( '4 Columns', 'ht' ); ?></option>
				<option value="five-columns" <?php if($instance['columns'] == 'five-columns') { ?>selected="selected"<?php } ?>><?php _e( '5 Columns', 'ht' ); ?></option>
				<option value="six-columns" <?php if($instance['columns'] == 'six-columns') { ?>selected="selected"<?php } ?>><?php _e( '6 Columns', 'ht' ); ?></option>
				<option value="seven-columns" <?php if($instance['columns'] == 'seven-columns') { ?>selected="selected"<?php } ?>><?php _e( '7 Columns', 'ht' ); ?></option>
				<option value="eight-columns" <?php if($instance['columns'] == 'eight-columns') { ?>selected="selected"<?php } ?>><?php _e( '8 Columns', 'ht' ); ?></option>
				<option value="nine-columns" <?php if($instance['columns'] == 'nine-columns') { ?>selected="selected"<?php } ?>><?php _e( '9 Columns', 'ht' ); ?></option>
				<option value="ten-columns" <?php if($instance['columns'] == 'ten-columns') { ?>selected="selected"<?php } ?>><?php _e( '10 Columns', 'ht' ); ?></option>
			</select>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('margin'); ?>"><?php _e('Margin:', 'ht'); ?></label>
			<select class='widefat' name="<?php echo $this->get_field_name('margin'); ?>" id="<?php echo $this->get_field_id('margin'); ?>">
				<option value="inst-margin" <?php if($instance['margin'] == 'inst-margin') { ?>selected="selected"<?php } ?>><?php _e( 'Margin', 'ht' ); ?></option>
				<option value="inst-no-margin" <?php if($instance['margin'] == 'inst-no-margin') { ?>selected="selected"<?php } ?>><?php _e( 'No Margin', 'ht' ); ?></option>
			</select>
		</p>
		
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'target' ) ); ?>"><?php esc_html_e( 'Open links', 'ht' ); ?>:</label>
			<select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'target' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'target' ) ); ?>">
				<option value="_self" <?php selected( '_self', $target ) ?>><?php esc_html_e( 'In current window', 'ht' ); ?></option>
				<option value="_blank" <?php selected( '_blank', $target ) ?>><?php esc_html_e( 'In new window', 'ht' ); ?></option>
			</select>
		</p>
		
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'follow' ) ); ?>"><?php esc_html_e( 'Follow button text', 'ht' ); ?>:</label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'follow' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'follow' ) ); ?>" type="text" value="<?php echo esc_attr( $follow ); ?>">
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'custom_class' ) ); ?>"><?php esc_html_e( 'Custom widget class', 'ht' ); ?>:</label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'custom_class' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'custom_class' ) ); ?>" type="text" value="<?php echo esc_attr( $custom_class ); ?>">
		</p>
		
	<?php
	}

	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['title']	= strip_tags( $new_instance['title'] );
		$instance['username']	= trim( strip_tags( $new_instance['username'] ) );
		$instance['number']	= !absint( $new_instance['number'] ) ? 9 : $new_instance['number'];
		$instance['columns'] = strip_tags($new_instance['columns']);
		$instance['margin'] = strip_tags($new_instance['margin']);
		$instance['target']	= ( ( $new_instance['target'] == '_blank' || $new_instance['target'] == '_self' ) ? $new_instance['target'] : '_blank' );
		$instance['follow']	= strip_tags( $new_instance['follow'] );
		$instance['custom_class'] = strip_tags( $new_instance['custom_class'] );

		return $instance;

	}

	public function widget( $args, $instance ) {

		extract( $args );

		$title 				= empty( $instance['title'] ) ? '' : apply_filters( 'widget-title', $instance['title'] );
		$username 		= empty( $instance['username'] ) ? '' : $instance['username'];
		$number 			= empty( $instance['number'] ) ? 9 : $instance['number'];
		$columns 			= empty( $instance['columns'] ) ? '' : $instance['columns'];
		$margin 			= empty( $instance['margin'] ) ? '' : $instance['margin'];
		$target 			= empty( $instance['target'] ) ? '_blank' : $instance['target'];
		$follow 			= empty( $instance['follow'] ) ? '' : $instance['follow'];
		$custom_class	= empty( $instance['custom_class'] ) ? '' : $instance['custom_class'];

		if ( $custom_class != '' ) {
			$class_widget = $custom_class;
		} else {
			$class_widget = 'widgets-style';
		}

		$before_widget = str_replace('class="', 'class="'. $class_widget . ' ', $before_widget);

		echo $before_widget;

		if ( !empty( $title ) ) {
			echo $before_title . wp_kses_post( $title ) . $after_title;
		};

		if ( $username != '' ) {

			$media_array = $this->scrape_instagram( $username );

			if ( is_wp_error( $media_array ) ) {

				echo wp_kses_post( $media_array->get_error_message() );

			} else {

				if ( $images_only = apply_filters( 'ht_images_only', FALSE ) ) {
					$media_array = array_filter( $media_array, array( $this, 'images_only' ) );
				}

				$media_array = array_slice( $media_array, 0, $number );

				?>
				
				<ul class="<?php echo esc_attr( 'instagram-ul' ); ?> inst-list-clear"><?php
					foreach ( $media_array as $item ) {
						echo '<li class="'. esc_attr( 'instagram-li' ) . ' ' . esc_attr( $columns ) . ' ' . esc_attr( $margin ) . '"><a href="'. esc_url( $item['link'] ) .'" target="'. esc_attr( $target ) .'"  class="'. esc_attr( 'instagram-link' ) .'"><img src="'. esc_url( $item['large'] ) .'"  alt="'. esc_attr( $item['description'] ) .'" title="'. esc_attr( $item['description'] ).'"  class="'. esc_attr( 'instagram-img' ) .'"/></a></li>';
					}
				?>
				</ul>

				<?php
			}
		}

		if ( $follow != '' ) {
			?><p class="<?php echo esc_attr( 'instagram-follow-block' ); ?>"><a class="<?php echo esc_attr( 'instagram-follow-btn' ); ?>" href="<?php echo trailingslashit( '//instagram.com/' . esc_attr( trim( $username ) ) ); ?>" rel="me" target="<?php echo esc_attr( $target ); ?>"><?php echo wp_kses_post( $follow ); ?></a></p><?php
		}

		echo $after_widget;

	}

	// based on https://gist.github.com/cosmocatalano/4544576
	function scrape_instagram( $username ) {

		$username = strtolower( $username );
		$username = str_replace( '@', '', $username );

		if ( false === ( $instagram = get_transient( 'instagram-a5-'.sanitize_title_with_dashes( $username ) ) ) ) {

			$remote = wp_remote_get( 'http://instagram.com/'.trim( $username ) );

			if ( is_wp_error( $remote ) )
				return new WP_Error( 'site_down', esc_html__( 'Unable to communicate with Instagram.', 'ht' ) );

			if ( 200 != wp_remote_retrieve_response_code( $remote ) )
				return new WP_Error( 'invalid_response', esc_html__( 'Instagram did not return a 200.', 'ht' ) );

			$shards = explode( 'window._sharedData = ', $remote['body'] );
			$insta_json = explode( ';</script>', $shards[1] );
			$insta_array = json_decode( $insta_json[0], TRUE );

			if ( ! $insta_array )
				return new WP_Error( 'bad_json', esc_html__( 'Instagram has returned invalid data.', 'ht' ) );

			if ( isset( $insta_array['entry_data']['ProfilePage'][0]['user']['media']['nodes'] ) ) {
				$images = $insta_array['entry_data']['ProfilePage'][0]['user']['media']['nodes'];
			} else {
				return new WP_Error( 'bad_json_2', esc_html__( 'Instagram has returned invalid data.', 'ht' ) );
			}

			if ( ! is_array( $images ) )
				return new WP_Error( 'bad_array', esc_html__( 'Instagram has returned invalid data.', 'ht' ) );

			$instagram = array();

			foreach ( $images as $image ) {

				$image['thumbnail_src'] = preg_replace( '/^https?\:/i', '', $image['thumbnail_src'] );
				$image['display_src'] = preg_replace( '/^https?\:/i', '', $image['display_src'] );

				// handle both types of CDN url
				if ( ( strpos( $image['thumbnail_src'], 's640x640' ) !== false ) ) {
					$image['thumbnail'] = str_replace( 's640x640', 's160x160', $image['thumbnail_src'] );
					$image['small'] = str_replace( 's640x640', 's320x320', $image['thumbnail_src'] );
				} else {
					$urlparts = wp_parse_url( $image['thumbnail_src'] );
					$pathparts = explode( '/', $urlparts['path'] );
					array_splice( $pathparts, 3, 0, array( 's160x160' ) );
					$image['thumbnail'] = '//' . $urlparts['host'] . implode( '/', $pathparts );
					$pathparts[3] = 's320x320';
					$image['small'] = '//' . $urlparts['host'] . implode( '/', $pathparts );
				}

				$image['large'] = $image['thumbnail_src'];

				if ( $image['is_video'] == true ) {
					$type = 'video';
				} else {
					$type = 'image';
				}

				$caption = __( 'Instagram Image', 'ht' );
				if ( ! empty( $image['caption'] ) ) {
					$caption = $image['caption'];
				}

				$instagram[] = array(
					'description'	=> $caption,
					'link'				=> trailingslashit( '//instagram.com/p/' . $image['code'] ),
					'time'				=> $image['date'],
					'comments'		=> $image['comments']['count'],
					'likes'				=> $image['likes']['count'],
					'thumbnail'		=> $image['thumbnail'],
					'small'				=> $image['small'],
					'large'				=> $image['large'],
					'original'		=> $image['display_src'],
					'type'				=> $type
				);
			}

			// do not set an empty transient - should help catch private or empty accounts
			if ( ! empty( $instagram ) ) {
				$instagram = base64_encode( serialize( $instagram ) );
				set_transient( 'instagram-a5-'.sanitize_title_with_dashes( $username ), $instagram, apply_filters( 'null_instagram_cache_time', HOUR_IN_SECONDS*2 ) );
			}
		}

		if ( ! empty( $instagram ) ) {

			return unserialize( base64_decode( $instagram ) );

		} else {

			return new WP_Error( 'no_images', esc_html__( 'Instagram did not return any images.', 'ht' ) );

		}
	}

	function images_only( $media_item ) {

		if ( $media_item['type'] == 'image' )
			return true;
		
		return false;

	}

}