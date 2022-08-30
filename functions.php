<?php
add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('reboot-style-child', get_stylesheet_uri(), array('reboot-style'));
    

    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/style/reset.css');
    wp_enqueue_style('header', get_template_directory_uri() . '/assets/style/header.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/assets/style/footer.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/style/style.css');
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?>