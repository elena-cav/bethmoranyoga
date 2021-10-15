<?php

function bethsinging_features()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('testimonialLandscape', 400, 260, true);
    // add_image_size('professorPortrait', 480, 650, true);
    // add_image_size('pageBanner', 1500, 350, true);
}

add_action('after_setup_theme', 'bethsinging_features');


function bethsinging_files()
{
    wp_enqueue_script("main-bethmoran-js", get_theme_file_uri('/build/index.js'), array('jquery'), 1.0, true);
    wp_enqueue_style("custom-google-fonts", 'https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,700,700i|Montserrat:100,300,400,400i,700,700i');
    wp_enqueue_style("font-awesome", '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"');
    wp_enqueue_style("bethsinging_main_styles", get_theme_file_uri('/build/style.css'));
    wp_enqueue_style("bethsinging_extra_styles", get_theme_file_uri('/build/index.css'));

    // wp_localize_script("main-university-js", 'universityData', array(
    //     'root_url' => get_site_url()

    // ));
};
add_action('wp_enqueue_scripts', 'bethsinging_files');
