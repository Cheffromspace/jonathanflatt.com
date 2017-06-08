<?php
class HT_Social_Buttons_Widget extends WP_Widget {

	function __construct() {

		$widget_ops = array(
			'classname' => 'ht-social-buttons-widget', 
			'description' => __('Displays Social Buttons.', 'ht') 
		);

		$control_ops = array(
			'id_base'	=> 'ht_social_buttons_widget' 
		);

		parent::__construct(
			'ht_social_buttons_widget', 
			__('HT Social Buttons', 'ht'),
			$widget_ops,
			$control_ops
		);

	}

	public function form( $instance ) {

		$instance = wp_parse_args( (array) $instance, array(
			'title'						=> __('Follow Me','ht'),
			'500px'						=> '',
			'behance'					=> '',
			'codepen'					=> '',
			'deviantart'			=> '',
			'dribbble'				=> '',
			'dropbox'					=> '',
			'facebook'				=> '',
			'flickr'					=> '',
			'foursquare'			=> '',
			'github'					=> '',
			'google'					=> '',
			'houzz'						=> '',
			'instagram'				=> '',
			'itunes'					=> '',
			'linkedin'				=> '',
			'medium'					=> '',
			'pinterest'				=> '',
			'reddit'					=> '',
			'slack'						=> '',
			'soundcloud'			=> '',
			'spotify' 				=> '',
			'stack_overflow'	=> '',
			'steam'						=> '',
			'tumblr'					=> '',
			'twitch'					=> '',
			'twitter'					=> '',
			'vimeo'						=> '',
			'vine'						=> '',
			'vk'							=> '',
			'weibo'						=> '',
			'youtube'					=> '',
			'custom_class'		=> '',
		));

		?>

		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('500px'); ?>"><?php _e('500px:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('500px'); ?>" name="<?php echo $this->get_field_name('500px'); ?>" value="<?php echo $instance['500px']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('behance'); ?>"><?php _e('Behance:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('behance'); ?>" name="<?php echo $this->get_field_name('behance'); ?>" value="<?php echo $instance['behance']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('codepen'); ?>"><?php _e('Codepen:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('codepen'); ?>" name="<?php echo $this->get_field_name('codepen'); ?>" value="<?php echo $instance['codepen']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('deviantart'); ?>"><?php _e('Deviantart:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('deviantart'); ?>" name="<?php echo $this->get_field_name('deviantart'); ?>" value="<?php echo $instance['deviantart']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('dribbble'); ?>"><?php _e('Dribbble:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('dribbble'); ?>" name="<?php echo $this->get_field_name('dribbble'); ?>" value="<?php echo $instance['dribbble']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('dropbox'); ?>"><?php _e('Dropbox:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('dropbox'); ?>" name="<?php echo $this->get_field_name('dropbox'); ?>" value="<?php echo $instance['dropbox']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" value="<?php echo $instance['facebook']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('flickr'); ?>"><?php _e('Flickr:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('flickr'); ?>" name="<?php echo $this->get_field_name('flickr'); ?>" value="<?php echo $instance['flickr']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('foursquare'); ?>"><?php _e('Foursquare:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('foursquare'); ?>" name="<?php echo $this->get_field_name('foursquare'); ?>" value="<?php echo $instance['foursquare']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('github'); ?>"><?php _e('Github:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('github'); ?>" name="<?php echo $this->get_field_name('github'); ?>" value="<?php echo $instance['github']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('google'); ?>"><?php _e('Google+:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('google'); ?>" name="<?php echo $this->get_field_name('google'); ?>" value="<?php echo $instance['google']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('houzz'); ?>"><?php _e('Houzz:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('houzz'); ?>" name="<?php echo $this->get_field_name('houzz'); ?>" value="<?php echo $instance['houzz']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('instagram'); ?>"><?php _e('Instagram:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('instagram'); ?>" name="<?php echo $this->get_field_name('instagram'); ?>" value="<?php echo $instance['instagram']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('itunes'); ?>"><?php _e('iTunes:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('itunes'); ?>" name="<?php echo $this->get_field_name('itunes'); ?>" value="<?php echo $instance['itunes']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e('LinkedIn:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" value="<?php echo $instance['linkedin']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('medium'); ?>"><?php _e('Medium:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('medium'); ?>" name="<?php echo $this->get_field_name('medium'); ?>" value="<?php echo $instance['medium']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('pinterest'); ?>"><?php _e('Pinterest:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('pinterest'); ?>" name="<?php echo $this->get_field_name('pinterest'); ?>" value="<?php echo $instance['pinterest']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('reddit'); ?>"><?php _e('Reddit:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('reddit'); ?>" name="<?php echo $this->get_field_name('reddit'); ?>" value="<?php echo $instance['reddit']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('slack'); ?>"><?php _e('Slack:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('slack'); ?>" name="<?php echo $this->get_field_name('slack'); ?>" value="<?php echo $instance['slack']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('soundcloud'); ?>"><?php _e('Soundcloud:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('soundcloud'); ?>" name="<?php echo $this->get_field_name('soundcloud'); ?>" value="<?php echo $instance['soundcloud']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('spotify'); ?>"><?php _e('Spotify:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('spotify'); ?>" name="<?php echo $this->get_field_name('spotify'); ?>" value="<?php echo $instance['spotify']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('stack_overflow'); ?>"><?php _e('Stack Overflow:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('stack_overflow'); ?>" name="<?php echo $this->get_field_name('stack_overflow'); ?>" value="<?php echo $instance['stack_overflow']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('steam'); ?>"><?php _e('Steam:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('steam'); ?>" name="<?php echo $this->get_field_name('steam'); ?>" value="<?php echo $instance['steam']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('tumblr'); ?>"><?php _e('Tumblr:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('tumblr'); ?>" name="<?php echo $this->get_field_name('tumblr'); ?>" value="<?php echo $instance['tumblr']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('twitch'); ?>"><?php _e('Twitch:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('twitch'); ?>" name="<?php echo $this->get_field_name('twitch'); ?>" value="<?php echo $instance['twitch']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" value="<?php echo $instance['twitter']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('vimeo'); ?>"><?php _e('Vimeo:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('vimeo'); ?>" name="<?php echo $this->get_field_name('vimeo'); ?>" value="<?php echo $instance['vimeo']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('vine'); ?>"><?php _e('Vine:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('vine'); ?>" name="<?php echo $this->get_field_name('vine'); ?>" value="<?php echo $instance['vine']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('vk'); ?>"><?php _e('Vk:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('vk'); ?>" name="<?php echo $this->get_field_name('vk'); ?>" value="<?php echo $instance['vk']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('weibo'); ?>"><?php _e('Weibo:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('weibo'); ?>" name="<?php echo $this->get_field_name('weibo'); ?>" value="<?php echo $instance['weibo']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('youtube'); ?>"><?php _e('Youtube:', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('youtube'); ?>" name="<?php echo $this->get_field_name('youtube'); ?>" value="<?php echo $instance['youtube']; ?>">
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'custom_class' ) ); ?>"><?php esc_html_e( 'Custom widget class', 'ht' ); ?>:</label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'custom_class' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'custom_class' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['custom_class'] ); ?>">
		</p>

	<?php
	}

	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['title'] = strip_tags( $new_instance['title'] );

		$instance['500px'] = strip_tags( $new_instance['500px'] );
		$instance['behance'] = strip_tags( $new_instance['behance'] );
		$instance['codepen'] = strip_tags( $new_instance['codepen'] );
		$instance['deviantart'] = strip_tags( $new_instance['deviantart'] );
		$instance['dribbble'] = strip_tags( $new_instance['dribbble'] );
		$instance['dropbox'] = strip_tags( $new_instance['dropbox'] );
		$instance['facebook'] = strip_tags( $new_instance['facebook'] );
		$instance['flickr'] = strip_tags( $new_instance['flickr'] );
		$instance['foursquare'] = strip_tags( $new_instance['foursquare'] );
		$instance['github'] = strip_tags( $new_instance['github'] );
		$instance['google'] = strip_tags( $new_instance['google'] );
		$instance['houzz'] = strip_tags( $new_instance['houzz'] );
		$instance['instagram'] = strip_tags( $new_instance['instagram'] );
		$instance['itunes'] = strip_tags( $new_instance['itunes'] );
		$instance['linkedin'] = strip_tags( $new_instance['linkedin'] );
		$instance['medium'] = strip_tags( $new_instance['medium'] );
		$instance['pinterest'] = strip_tags( $new_instance['pinterest'] );
		$instance['reddit'] = strip_tags( $new_instance['reddit'] );
		$instance['slack'] = strip_tags( $new_instance['slack'] );
		$instance['soundcloud'] = strip_tags( $new_instance['soundcloud'] );
		$instance['spotify'] = strip_tags( $new_instance['spotify'] );
		$instance['stack_overflow'] = strip_tags( $new_instance['stack_overflow'] );
		$instance['steam'] = strip_tags( $new_instance['steam'] );
		$instance['tumblr'] = strip_tags( $new_instance['tumblr'] );
		$instance['twitch'] = strip_tags( $new_instance['twitch'] );
		$instance['twitter'] = strip_tags( $new_instance['twitter'] );
		$instance['vimeo'] = strip_tags( $new_instance['vimeo'] );
		$instance['vine'] = strip_tags( $new_instance['vine'] );
		$instance['vk'] = strip_tags( $new_instance['vk'] );
		$instance['weibo'] = strip_tags( $new_instance['weibo'] );
		$instance['youtube'] = strip_tags( $new_instance['youtube'] );

		$instance['custom_class'] = strip_tags( $new_instance['custom_class'] );

		return $instance;

	}

	public function widget( $args, $instance ) {

		extract($args);

		$custom_class	= empty( $instance['custom_class'] ) ? '' : $instance['custom_class'];

		if ( $custom_class != '' ) {
			$class_widget = $custom_class;
		} else {
			$class_widget = 'widgets-style';
		}

		$before_widget = str_replace('class="', 'class="'. $class_widget . ' ', $before_widget);

		echo $before_widget;

		$title = apply_filters( 'widget_title', $instance['title'] );

		if ( !empty( 'title' ) ) { 
			echo $before_title . esc_html( $title ) . $after_title;
		};

		echo '<ul>';

		if ( !empty( $instance['500px'] ) ) {
			echo '<li><a href="' . $instance['500px'] . '" title="500px"><i class="fa fa-500px" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['behance'] ) ) {
			echo '<li><a href="' . $instance['behance'] . '" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['codepen'] ) ) {
			echo '<li><a href="' . $instance['codepen'] . '" title="Codepen"><i class="fa fa-codepen" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['deviantart'] ) ) {
			echo '<li><a href="' . $instance['deviantart'] . '" title="Deviantart"><i class="fa fa-deviantart" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['dribbble'] ) ) {
			echo '<li><a href="' . $instance['dribbble'] . '" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['dropbox'] ) ) {
			echo '<li><a href="' . $instance['dropbox'] . '" title="Dropbox"><i class="fa fa-dropbox" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['facebook'] ) ) {
			echo '<li><a href="' . $instance['facebook'] . '" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['flickr'] ) ) {
			echo '<li><a href="' . $instance['flickr'] . '" title="Flickr"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['foursquare'] ) ) {
			echo '<li><a href="' . $instance['foursquare'] . '" title="Foursquare"><i class="fa fa-foursquare" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['github'] ) ) {
			echo '<li><a href="' . $instance['github'] . '" title="Github"><i class="fa fa-github" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['google'] ) ) {
			echo '<li><a href="' . $instance['google'] . '" title="Google+"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['houzz'] ) ) {
			echo '<li><a href="' . $instance['houzz'] . '" title="Houzz"><i class="fa fa-houzz" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['instagram'] ) ) {
			echo '<li><a href="' . $instance['instagram'] . '" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['itunes'] ) ) {
			echo '<li><a href="' . $instance['itunes'] . '" title="iTunes"><i class="fa fa-apple" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['linkedin'] ) ) {
			echo '<li><a href="' . $instance['linkedin'] . '" title="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['medium'] ) ) {
			echo '<li><a href="' . $instance['medium'] . '" title="Medium"><i class="fa fa-medium" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['pinterest'] ) ) {
			echo '<li><a href="' . $instance['pinterest'] . '" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['reddit'] ) ) {
			echo '<li><a href="' . $instance['reddit'] . '" title="Reddit"><i class="fa fa-reddit" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['slack'] ) ) {
			echo '<li><a href="' . $instance['slack'] . '" title="Slack"><i class="fa fa-slack" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['soundcloud'] ) ) {
			echo '<li><a href="' . $instance['soundcloud'] . '" title="Soundcloud"><i class="fa fa-soundcloud" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['spotify'] ) ) {
			echo '<li><a href="' . $instance['spotify'] . '" title="Spotify"><i class="fa fa-spotify" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['stack_overflow'] ) ) {
			echo '<li><a href="' . $instance['stack_overflow'] . '" title="Stack Overflow"><i class="fa fa-stack-overflow" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['steam'] ) ) {
			echo '<li><a href="' . $instance['steam'] . '" title="Steam"><i class="fa fa-steam" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['tumblr'] ) ) {
			echo '<li><a href="' . $instance['tumblr'] . '" title="Tumblr"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['twitch'] ) ) {
			echo '<li><a href="' . $instance['twitch'] . '" title="Twitch"><i class="fa fa-twitch" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['twitter'] ) ) {
			echo '<li><a href="' . $instance['twitter'] . '" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['vimeo'] ) ) {
			echo '<li><a href="' . $instance['vimeo'] . '" title="Vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['vine'] ) ) {
			echo '<li><a href="' . $instance['vine'] . '" title="Vine"><i class="fa fa-vine" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['vk'] ) ) {
			echo '<li><a href="' . $instance['vk'] . '" title="Vk"><i class="fa fa-vk" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['weibo'] ) ) {
			echo '<li><a href="' . $instance['weibo'] . '" title="Weibo"><i class="fa fa-weibo" aria-hidden="true"></i></a></li>';
		}

		if ( !empty( $instance['youtube'] ) ) {
			echo '<li><a href="' . $instance['youtube'] . '" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>';
		}

		echo '</ul>';

		echo $after_widget;

	}

}