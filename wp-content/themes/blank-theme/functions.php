<?php

define("theme_dir", get_stylesheet_directory());
define("theme_uri", get_template_directory_uri());

/* Add Stylesheets */
function teva_styles()
{
    wp_enqueue_style('maincss', theme_uri . '/css/main.css');
}

add_action('wp_enqueue_scripts', 'teva_styles');

/* Add Scripts */
function teva_scripts()
{
    wp_enqueue_script('jquery', theme_uri . '/js/jquery.js');
}

add_action('wp_enqueue_scripts', 'teva_scripts');


/* Register Menus */
function teva_register_menus()
{
    register_nav_menus(
        array(
            'primary' => __('Primary Menu'),
            'top' => __('Top Menu'),
            'footer' => __('Footer Menu'),
        )
    );
}

add_action('init', 'teva_register_menus');


/* CUSTOM LOGO */
function teva_custom_logo_setup()
{
    $defaults = array(
        'width'   => 467,
        'height'  => 90,
        'class'   => 'logo',
    );

    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'teva_custom_logo_setup');
