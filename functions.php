<?php
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('reboot-style-child', get_stylesheet_uri(), array('reboot-style'));


    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/style/reset.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/style/slick.css');
    wp_enqueue_style('jquery', get_template_directory_uri() . '/assets/style/jquery.fancybox.css');
    wp_enqueue_style('header', get_template_directory_uri() . '/assets/style/header.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/assets/style/footer.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/style/style.css');
    wp_enqueue_style('outAbout', get_template_directory_uri() . '/assets/style/outAbout.css');
    wp_enqueue_style('cleaningApartmentsKazan', get_template_directory_uri() . '/assets/style/cleaningApartmentsKazan.css');
    wp_enqueue_style('cliningOffice', get_template_directory_uri() . '/assets/style/CliningOffice.css');
    wp_enqueue_style('cottageСleaning', get_template_directory_uri() . '/assets/style/CottageClining.css');
    wp_enqueue_style('maintenanceCleaning', get_template_directory_uri() . '/assets/style/MaintenanceCleaning.css');
    wp_enqueue_style('GeneralCleaningKazan', get_template_directory_uri() . '/assets/style/GeneralCleaningKazan.css');
    wp_enqueue_style('CliningOfficeReal', get_template_directory_uri() . '/assets/style/CliningOfficeReal.css');
    wp_enqueue_style('WashingWindowsLoggiasKazan', get_template_directory_uri() . '/assets/style/WashingWindowsLoggiasKazan.css');
    wp_enqueue_style('contacts', get_template_directory_uri() . '/assets/style/contacts.css');



    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
    wp_enqueue_script('jquery');

    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 'null', true);
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array('jquery'), 'null', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true);
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
