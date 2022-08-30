<?php
add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('reboot-style-child', get_stylesheet_uri(), array('reboot-style'));
    

    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('header', get_template_directory_uri() . '/assets/css/header.scss');
    wp_enqueue_style('footer', get_template_directory_uri() . '/assets/css/footer.scss');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.scss');
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?>