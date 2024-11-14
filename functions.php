<?php
function aeroshop_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'woocommerce' );

    register_nav_menus( array(
        'top_menu'   => __( 'Top Menu', 'ukishop' ),
        'primary_menu'   => __( 'Primary Menu', 'ukishop' ),
    ));
}
add_action( 'after_setup_theme', 'aeroshop_setup' );

function aeroshop_enqueue_styles() {
    wp_enqueue_style( 'ukishop-material-design-iconic-font', get_template_directory_uri() . '/assets/css/material-design-iconic-font.min.css' );
    wp_enqueue_style( 'ukishop-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
    wp_enqueue_style( 'ukishop-fontawesome-stars', get_template_directory_uri() . '/assets/css/fontawesome-stars.css' );
    wp_enqueue_style( 'ukishop-meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css' );
    wp_enqueue_style( 'ukishop-owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
    wp_enqueue_style( 'ukishop-slick', get_template_directory_uri() . '/assets/css/slick.css' );
    wp_enqueue_style( 'ukishop-animate', get_template_directory_uri() . '/assets/css/animate.css' );
    wp_enqueue_style( 'ukishop-jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.min.css' );
    wp_enqueue_style( 'ukishop-venobox', get_template_directory_uri() . '/assets/css/venobox.css' );
    wp_enqueue_style( 'ukishop-nice-select', get_template_directory_uri() . '/assets/css/nice-select.css' );
    wp_enqueue_style( 'ukishop-magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
    wp_enqueue_style( 'ukishop-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'ukishop-helper', get_template_directory_uri() . '/assets/css/helper.css' );
    wp_enqueue_style( 'ukishop-style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'ukishop-responsive', get_template_directory_uri() . '/assets/css/responsive.css' );

    wp_enqueue_style( 'ukishop-stylesheet', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'aeroshop_enqueue_styles' );

function aeroshop_enqueue_scripts() {
    wp_enqueue_script( 'aeroshop-jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-1.12.4.min.js', array(), '', true );
    wp_enqueue_script( 'aeroshop-modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.8.3.min.js', array('aeroshop-jquery'), '', true );
    wp_enqueue_script( 'aeroshop-popper', get_template_directory_uri() . '/assets/js/vendor/popper.min.js', array(''), 'aeroshop-jquery', true );
    wp_enqueue_script( 'aeroshop-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(''), 'aeroshop-jquery', true );
    wp_enqueue_script( 'aeroshop-ajax-mail', get_template_directory_uri() . '/assets/js/ajax-mail.js', array(''), 'aeroshop-jquery', true );
    wp_enqueue_script( 'aeroshop-meanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.min.js', array('aeroshop-jquery'), '', true );
    wp_enqueue_script( 'aeroshop-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('aeroshop-jquery'), '', true );
    wp_enqueue_script( 'aeroshop-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('aeroshop-jquery'), '', true );
    wp_enqueue_script( 'aeroshop-owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('aeroshop-jquery'), '', true );
    wp_enqueue_script( 'aeroshop-jquery-magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('aeroshop-jquery'), '', true );
    wp_enqueue_script( 'aeroshop-isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('aeroshop-jquery'), '', true );
    wp_enqueue_script( 'aeroshop-imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array('aeroshop-jquery'), '', true );
    wp_enqueue_script( 'aeroshop-jquery.mixitup', get_template_directory_uri() . '/assets/js/jquery.mixitup.min.js', array('aeroshop-jquery'), '', true );
    wp_enqueue_script( 'aeroshop-jquery-countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', array('aeroshop-jquery'), '', true );
    wp_enqueue_script( 'aeroshop-jquery-counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('aeroshop-jquery'), '', true );
    wp_enqueue_script( 'aeroshop-waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('aeroshop-jquery'), '', true );
    wp_enqueue_script( 'aeroshop-jquery-barrating', get_template_directory_uri() . '/assets/js/jquery.barrating.min.js', array('aeroshop-jquery'), '', true );
    wp_enqueue_script( 'aeroshop-jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array('aeroshop-jquery'), '', true );
    wp_enqueue_script( 'aeroshop-venobox', get_template_directory_uri() . '/assets/js/venobox.min.js', array('aeroshop-jquery'), '', true );
    wp_enqueue_script( 'aeroshop-jquery-nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array('aeroshop-jquery'), '', true );
    wp_enqueue_script( 'aeroshop-scrollUp', get_template_directory_uri() . '/assets/js/scrollUp.min.js', array('aeroshop-jquery'), '', true );
    wp_enqueue_script( 'aeroshop-main', get_template_directory_uri() . '/assets/js/main.js', array('aeroshop-jquery'), '', true );

}
add_action( 'wp_enqueue_scripts', 'aeroshop_enqueue_scripts' );