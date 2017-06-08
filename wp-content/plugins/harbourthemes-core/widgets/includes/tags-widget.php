<?php
class HT_Tags_Widget extends WP_Widget {

	function __construct() {

		$widget_ops = array(
			'classname' => 'ht-tags-widget', 
			'description' => __('Adds tags list.', 'ht') 
		);

		$control_ops = array(
			'id_base'	=> 'ht_tags_widget' 
		);

		parent::__construct(
			'ht_tags_widget', 
			__('HT Tags', 'ht'),
			$widget_ops,
			$control_ops
		);

	}

	public function form( $instance ) {

		$instance = wp_parse_args( (array) $instance, array(
			'title'				 => __('Tags','ht'),

			'custom_class' => ''
		));

		?>

		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title', 'ht' ); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>">
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

		$args = array(
			'smallest'	=> 1,
			'largest'		=> 1,
			'unit'			=> 'em',
			'number'		=> 0,
			'separator'	=> ' ',
			'echo'			=> true,
		); 

		wp_tag_cloud( $args );

		echo $after_widget;

	}

}