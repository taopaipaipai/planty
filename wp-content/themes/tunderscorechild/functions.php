<?php

function theme_enqueue_styles(){
    // Chargement du style.css du th�me parent tunderscore
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

}

// Action qui permet de charger des scripts dans notre th�me
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
