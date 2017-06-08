<?php
/**
 * Social Buttons
 */

function emika_social_buttons() {

	echo '<ul>';

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_500px' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_500px' ) ) . '" title="500px"><i class="fa fa-500px" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_behance' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_behance' ) ) . '" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_codepen' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_codepen' ) ) . '" title="Codepen"><i class="fa fa-codepen" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_deviantart' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_deviantart' ) ) . '" title="Deviantart"><i class="fa fa-deviantart" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_dribbble' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_dribbble' ) ) . '" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_dropbox' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_dropbox' ) ) . '" title="Dropbox"><i class="fa fa-dropbox" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_facebook' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_facebook' ) ) . '" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_flickr' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_flickr' ) ) . '" title="Flickr"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_foursquare' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_foursquare' ) ) . '" title="Foursquare"><i class="fa fa-foursquare" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_github' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_github' ) ) . '" title="Github"><i class="fa fa-github" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_google_plus' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_google_plus' ) ) . '" title="Google+"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_houzz' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_houzz' ) ) . '" title="Houzz"><i class="fa fa-houzz" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_instagram' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_instagram' ) ) . '" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_itunes' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_itunes' ) ) . '" title="iTunes"><i class="fa fa-apple" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_linkedin' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_linkedin' ) ) . '" title="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_medium' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_medium' ) ) . '" title="Medium"><i class="fa fa-medium" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_pinterest' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_pinterest' ) ) . '" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_reddit' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_reddit' ) ) . '" title="Reddit"><i class="fa fa-reddit" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_slack' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_slack' ) ) . '" title="Slack"><i class="fa fa-slack" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_soundcloud' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_soundcloud' ) ) . '" title="Soundcloud"><i class="fa fa-soundcloud" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_spotify' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_spotify' ) ) . '" title="Spotify"><i class="fa fa-spotify" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_stack_overflow' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_stack_overflow' ) ) . '" title="Stack Overflow"><i class="fa fa-stack-overflow" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_steam' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_steam' ) ) . '" title="Steam"><i class="fa fa-steam" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_tumblr' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_tumblr' ) ) . '" title="Tumblr"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_twitch' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_twitch' ) ) . '" title="Twitch"><i class="fa fa-twitch" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_twitter' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_twitter' ) ) . '" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_vimeo' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_vimeo' ) ) . '" title="Vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_vine' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_vine' ) ) . '" title="Vine"><i class="fa fa-vine" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_vk' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_vk' ) ) . '" title="Vk"><i class="fa fa-vk" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_weibo' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_weibo' ) ) . '" title="Weibo"><i class="fa fa-weibo" aria-hidden="true"></i></a></li>';
	}

	if ( !empty( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_youtube' )) ) { 
		echo '<li><a href="' . esc_url( Kirki::get_option( 'emika_customizer', 'emika_social_buttons_youtube' ) ) . '" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>';
	}

	echo '</ul>';

}