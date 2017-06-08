<?php
class HT_About_Me_Widget extends WP_Widget {

	function __construct() {

		$widget_ops = array(
			'classname' => 'ht-about-me-widget', 
			'description' => __('Adds About Me widget.', 'ht') 
		);

		$control_ops = array(
			'id_base'	=> 'ht_about_me_widget' 
		);

		parent::__construct(
			'ht_about_me_widget', 
			__('HT About Me', 'ht'),
			$widget_ops,
			$control_ops
		);

		add_action( 'admin_enqueue_scripts', array( $this, 'ht_about_me_widget_script' ) );

	}

	public function ht_about_me_widget_script() {

		if ( !did_action( 'wp_enqueue_media' ) ) {
			wp_enqueue_media();
		}

		wp_enqueue_script( 'ht_about_me_widget_script', HT_CORE_URL . 'widgets/js/media-upload.js', array('jquery'), null, false );

	}

	public function form( $instance ) {

		$instance = wp_parse_args( (array) $instance, array(
			'title'				 => __('About Me','ht'),
			'image'				 => '',
			'style'				 => 'circle',
			'name'				 => '',
			'text'				 => '',
			'custom_class' => ''
		));

		?>

		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title', 'ht' ); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>">
		</p>

		<div>
			<p>
				<label><?php _e( 'Avatar', 'ht' ); ?></label>
				<img class="ht-widget-media-img" src="<?php if ( !empty($instance['image']) ) { echo esc_url( $instance['image'] ); } ?>" style="max-width:100%;display:block;margin:0;padding:0;">
			</p>
			<p>
				<input type="text" class="widefat hidden ht-widget-media-url" name="<?php echo esc_attr( $this->get_field_name('image') ); ?>" id="<?php echo esc_attr( $this->get_field_id('image') ); ?>" value="<?php echo esc_attr( $instance['image'] ); ?>">
				<?php 
				if ( !$instance['image'] ) { ?>
					<a href="#" class="button ht-widget-media-upload"><?php esc_html_e('Upload avatar', 'ht'); ?></a>
				<?php
				} else { ?>
					<a href="#" class="button ht-widget-media-upload"><?php esc_html_e('Upload avatar', 'ht'); ?></a>
					<a href="#" class="button ht-widget-media-remove"><?php esc_html_e('Remove avatar', 'ht'); ?></a>
				<?php
				}; ?>
			</p>
		</div>

		<p>
			<label for="<?php echo $this->get_field_id('style'); ?>"><?php _e('Avatar style', 'ht'); ?></label><br>
			<select class='widefat' name="<?php echo $this->get_field_name('style'); ?>" id="<?php echo $this->get_field_id('style'); ?>">
				<option value="square" <?php if($instance['style'] == 'square') { ?>selected="selected"<?php } ?>><?php _e( 'Square', 'ht' ); ?></option>				
				<option value="circle" <?php if($instance['style'] == 'circle') { ?>selected="selected"<?php } ?>><?php _e( 'Circle', 'ht' ); ?></option>
			</select>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('name'); ?>"><?php _e('Name', 'ht'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('name'); ?>" name="<?php echo $this->get_field_name('name'); ?>" value="<?php echo $instance['name']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('text'); ?>"><?php _e('Text', 'ht'); ?></label>
			<textarea class="widefat" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>" style="height: 120px;"><?php if( !empty( $instance['text'] ) ) { echo $instance['text']; } ?></textarea>
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
		$instance['image'] = strip_tags($new_instance['image']);
		$instance['style'] = strip_tags( $new_instance['style'] );
		$instance['name'] = strip_tags( $new_instance['name'] );
		$instance['text'] = strip_tags( $new_instance['text'] );
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
		$name = ( empty( $instance['name'] ) ) ? '&nbsp;' : $instance['name'];
		$text = ( empty( $instance['text'] ) ) ? '&nbsp;' : $instance['text'];

		if ( !empty( 'title' ) ) { 
			echo $before_title . esc_html( $title ) . $after_title;
		};

		$style = $instance['style'];
		$image = esc_attr( $instance['image'] );
		$img_style = '';

		if ( $style == 'circle' ) {
			$img_style = 'border-radius: 50%';
		} else { }

		if ( !empty( $image ) ) {
		 	echo '<img class="avatar-img-' . $style . '" src="' . $image . '" alt="avatar" style="' . $img_style . '">';
		}

		echo '<p class="widget-author-name">' . esc_html( $name ) . '</p>';
		echo '<p class="widget-author-bio">' . esc_html( $text ) . '</p>';

		echo $after_widget;

	}

}