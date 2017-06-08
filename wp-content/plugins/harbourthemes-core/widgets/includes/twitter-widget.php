<?php
class HT_Twitter_Widget extends WP_Widget {

	function __construct() {

		$widget_ops = array(
			'classname' => 'ht-twitter-widget', 
			'description' => __('Display recent tweets.', 'ht') 
		);

		$control_ops = array(
			'id_base'	=> 'ht_twitter_widget' 
		);

		parent::__construct(
			'ht_twitter_widget', 
			__('HT Twitter Widget', 'ht'),
			$widget_ops,
			$control_ops
		);

		require_once HT_CORE_DIR . '/widgets/assets/twitteroauth.php';

	}

	public function form( $instance ) {

		$instance = wp_parse_args( (array) $instance, 
			array( 
				'title' => __('Twitter','ht'),
				'consumerkey' => '',
				'consumersecret' => '',
				'accesstoken' => '',
				'accesstokensecret' => '',
				'username' => '',
				'number' => '1',
				'custom_class' => ''
			)
		);

		?>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title', 'ht' ); ?>:</label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>">
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'consumerkey' ) ); ?>"><?php esc_html_e( 'Consumer key', 'ht' ); ?>:</label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'consumerkey' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'consumerkey' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['consumerkey'] ); ?>">
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'consumersecret' ) ); ?>"><?php esc_html_e( 'Consumer secret', 'ht' ); ?>:</label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'consumersecret' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'consumersecret' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['consumersecret'] ); ?>">
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'accesstoken' ) ); ?>"><?php esc_html_e( 'Access token', 'ht' ); ?>:</label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'accesstoken' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'accesstoken' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['accesstoken'] ); ?>">
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'accesstokensecret' ) ); ?>"><?php esc_html_e( 'Access token secret', 'ht' ); ?>:</label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'accesstokensecret' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'accesstokensecret' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['accesstokensecret'] ); ?>">
		</p>

		<p>Get your API keys and tokens at: <a href="https://apps.twitter.com/" target="_blank">https://apps.twitter.com/</a></p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'username' ) ); ?>"><?php esc_html_e( 'Username', 'ht' ); ?>:</label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'username' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'username' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['username'] ); ?>">
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>"><?php esc_html_e( 'Number of twits', 'ht' ); ?>:</label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['number'] ); ?>">
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
		$instance['consumerkey'] = strip_tags( $new_instance['consumerkey'] );
		$instance['consumersecret'] = strip_tags( $new_instance['consumersecret'] );
		$instance['accesstoken'] = strip_tags( $new_instance['accesstoken'] );
		$instance['accesstokensecret'] = strip_tags( $new_instance['accesstokensecret'] );
		$instance['username'] = strip_tags( $new_instance['username'] );
		$instance['number'] = strip_tags( $new_instance['number'] );
		$instance['custom_class'] = strip_tags( $new_instance['custom_class'] );

		return $instance;

	}

	public function widget( $args, $instance ) {

		extract( $args );

		$title = empty( $instance['title'] ) ? '' : apply_filters( 'widget-title', $instance['title'] );
		$number = empty( $instance['number'] ) ? '1' : $instance['number'];
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

		if( empty( $instance['consumerkey'] ) || empty( $instance['consumersecret'] ) || empty( $instance['accesstoken'] ) || empty( $instance['accesstokensecret'] ) || empty( $instance['username'] ) ) {
			echo __('Please fill all widget settings.','ht') . ' ' . $after_widget;
			return;
		}

		function getConnectionWithAccessToken( $cons_key, $cons_secret, $oauth_token, $oauth_token_secret ) {
			$connection = new TwitterOAuth( $cons_key, $cons_secret, $oauth_token, $oauth_token_secret );
			return $connection;
		}

		$connection = getConnectionWithAccessToken( $instance['consumerkey'], $instance['consumersecret'], $instance['accesstoken'], $instance['accesstokensecret'] );
		$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$instance['username']."&count=10") or die('Couldn\'t retrieve tweets! Wrong username?');

		if( !empty( $tweets->errors ) ) {
			if( $tweets->errors[0]->message == 'Invalid or expired token' ) {
				echo $tweets->errors[0]->message. '<br>' . __('You\'ll need to regenerate it <a href="https://apps.twitter.com/" target="_blank">here</a>!','ht') . $after_widget;
			}else{
				echo $tweets->errors[0]->message . ' ' . $after_widget;
			}
			return;
		}

		$tweets_array = array();
			for( $i = 0; $i <= count($tweets); $i++ ) {
				if( !empty( $tweets[$i] ) ) {
					$tweets_array[$i]['created_at'] = $tweets[$i]->created_at;
					
						//clean tweet text
						$tweets_array[$i]['text'] = preg_replace('/[\x{10000}-\x{10FFFF}]/u', '', $tweets[$i]->text);
					
					if( !empty( $tweets[$i]->id_str ) ) {
						$tweets_array[$i]['status_id'] = $tweets[$i]->id_str;
					}
				}
			}

		?>

		<div class="ht_tweets">
			<ul>

			<?php
			$count = '1';
				foreach($tweets_array as $tweet){
					if( !empty( $tweet['text'] ) ) {

						if( empty( $tweet['status_id'] ) ) { $tweet['status_id'] = ''; }
						if( empty( $tweet['created_at'] ) ) { $tweet['created_at'] = ''; }
					
						echo '
							<li>
								<p class="tweet">' . ht_convert_links( $tweet['text'] ) . '</p>
								<p class="timePosted">
									<a class="twitter_time" target="_blank" href="http://twitter.com/' . $instance['username'] . '/statuses/' . $tweet['status_id'] . '">' . ht_relative_twit_time( $tweet['created_at'] ) . '</a>
								</p>
							</li>';
						
						if( $count == $instance['number'] ) { 
							break;
						}
						
						$count++;

					}
				}
			?>

			</ul>
		</div>

	<?php
		echo $after_widget;

	}

}

function ht_convert_links( $status, $targetBlank=true, $linkMaxLen=250 ){
	$target=$targetBlank ? " target=\"_blank\" " : "";
	$status = preg_replace('/\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[A-Z0-9+&@#\/%=~_|]/i', '<a href="\0" target="_blank">\0</a>', $status);
	$status = preg_replace("/(@([_a-z0-9\-]+))/i","<a href=\"http://twitter.com/$2\" title=\"Follow $2\" $target >$1</a>",$status);
	$status = preg_replace("/(#([_a-z0-9\-]+))/i","<a href=\"https://twitter.com/search?q=$2\" title=\"Search $1\" $target >$1</a>",$status);
	return $status;
}

function ht_relative_twit_time( $a ) {
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