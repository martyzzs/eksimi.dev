<?php
/**
 * Created by PhpStorm.
 * User: Mārtiņš Frīdenbergs
 * Date: 16/12/2017
 * Time: 15:13
 */

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://code.jquery.com/jquery-3.2.1.min.js", false, null);
	wp_enqueue_script('jquery');
}

require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

function eksimi_script_enqueue(){

    //wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(),'v7.0.0', 'all');
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Lato|Merriweather', array(),'', 'all');
    wp_enqueue_style('bootstrapcss', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(),'v3.3.7', 'all');
	wp_enqueue_style('material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(),'', 'all');
    wp_enqueue_style('eksimi', get_template_directory_uri() . '/css/eksimi.css', array(),'v1.0.0', 'all');

	//wp_enqueue_script('jQuery','https://code.jquery.com/jquery-3.2.1.min.js', array(),'', 'false');
    wp_enqueue_script('bootstrapjs','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(),'v3.3.7', 'true');
    wp_enqueue_script('eksimijs',get_template_directory_uri() . '/js/eksimi.js', array(),'v1.0.0', 'true');

}

add_action('wp_enqueue_scripts', 'eksimi_script_enqueue');

function eksimi_theme_setup(){

    add_theme_support('menus');

    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('language', 'Language Switcher');

}

add_action('init', 'eksimi_theme_setup');
