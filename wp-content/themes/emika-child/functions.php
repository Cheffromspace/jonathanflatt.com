<?php

function example_enqueue_styles() {

	// enqueue parent styles
	wp_enqueue_style('parent-theme', get_template_directory_uri() .'/style.css');

}
add_action('wp_enqueue_scripts', 'example_enqueue_styles');

function add_my_script() {
    wp_enqueue_script(
        'custom.js', // name your script so that you can attach other scripts and de-register, etc.
        get_stylesheet_directory_uri(). '/js/custom.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
    wp_enqueue_script (
        'typed.min.js', // name your script so that you can attach other scripts and de-register, etc.
        get_stylesheet_directory_uri(). '/js/typed.js', // this is the location of your script file
          array('jquery')
      );