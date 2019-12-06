
<?php

// links
function load_stylesheets()
{
wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), 1, 'all');
wp_enqueue_style('main');

wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), 1, 'all');
wp_enqueue_style('responsive');

wp_register_script('jsmain', get_template_directory_uri(). '/js/main.js', array() , 1,1,1);
wp_enqueue_script('jsmain');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


// scripts
// function addjs()
// {
//  wp_register_script('jsmain', get_template_directory_uri(). '/js/main.js', array() , 1,1,1);
//  wp_enqueue_script('jsmain');
// }
// add_action('wp_enqueue_scripts', 'addjs');
