<?php

function theme_enqueue_styles(){
    // Chargement du style.css du th�me parent tunderscore
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));

}

// Action qui permet de charger des scripts dans notre th�me
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

