<?php
add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('reboot-style-child', get_stylesheet_uri(), array('reboot-style'));
    

    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/style/reset.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/style/slick.css');
    wp_enqueue_style('jquery', get_template_directory_uri() . '/assets/style/jquery.fancybox.css');
    wp_enqueue_style('header', get_template_directory_uri() . '/assets/style/header.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/assets/style/footer.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/style/style.css');
<<<<<<< HEAD
    wp_enqueue_style('CliningOffice', get_template_directory_uri() . '/assets/style/CliningOffice.css');
=======



    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true );
>>>>>>> bec66e8786f50a300eed937fa4755138248e5e41
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
