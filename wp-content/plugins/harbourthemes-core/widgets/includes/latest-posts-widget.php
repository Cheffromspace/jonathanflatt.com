<?php
class HT_Latest_Posts_Widget extends WP_Widget {

	function __construct() {

		$widget_ops = array(
			'classname' => 'ht-latest-posts-widget', 
			'description' => __('Adds latest posts list.', 'ht') 
		);

		$control_ops = array(
			'id_base'	=> 'ht_latest_posts_widget' 
		);

		parent::__construct(
			'ht_latest_posts_widget', 
			__('HT Latest Posts', 'ht'),
			$widget_ops,
			$control_ops
		);

	}

	public function form( $instance ) {

		$instance = wp_parse_args( (array) $instance, array(
			'title'				 => __('Latest Posts','ht'),
			'number'			 => 3,
			'custom_class' => ''
		));

		?>

		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title', 'ht' ); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('number'); ?>"><?php _e( 'Number of posts', 'ht' ); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" value="<?php echo $instance['number']; ?>">
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
		$instance['number'] = strip_tags( $new_instance['number'] );
		$instance['custom_class'] = strip_tags( $new_instance['custom_class'] );

		return $instance;

	}

	public function widget( $args, $instance ) {

		extract($args);

		$custom_class	= empty( $instance['custom_class'] ) ? '' : $instance['custom_class'];
		$number = empty( $instance['number'] ) ? '' : $instance['number'];

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

		$args = array(
			'numberposts' => $instance['number'],
			'category' => 0,
			'post_status' => 'publish',
		); 

		$result = wp_get_recent_posts($args);

		foreach( $result as $p ){ 
		?>
			<li>
				<a href="<?php echo get_permalink($p['ID']) ?>"><?php echo $p['post_title'] ?></a>
				<span><?php echo ht_relative_post_time( $p['post_date'] ) ?></span>
			</li>    
		<?php 
		} 

		echo '</ul>';

		echo $after_widget;

	}

}

function ht_relative_post_time( $a ) {
	//get current timestampt
	$b = strtotime('now'); 
	//get timestamp when tweet created
	$c = strtotime($a);
	//get difference
	$d = $b - $c;
	//calculate different time values
	$minute = 60;
	$hour = $minute * 60;
	$day = $hour * 24;
	$week = $day * 7;
		
	if(is_numeric($d) && $d > 0) {
		//if less then 3 seconds
		if($d < 3) return __('Right now','ht');
		//if less then minute
		if($d < $minute) return floor($d) . __(' seconds ago','ht');
		//if less then 2 minutes
		if($d < $minute * 2) return __('About 1 minute ago','ht');
		//if less then hour
		if($d < $hour) return floor($d / $minute) . __(' minutes ago','ht');
		//if less then 2 hours
		if($d < $hour * 2) return __('About 1 hour ago','ht');
		//if less then day
		if($d < $day) return floor($d / $hour) . __(' hours ago','ht');
		//if more then day, but less then 2 days
		if($d > $day && $d < $day * 2) return __('Yesterday','ht');
		//if less then year
		if($d < $day * 365) return floor($d / $day) . __(' days ago','ht');
		//else return more than a year
		return __('Over a year ago','ht');
	}
}