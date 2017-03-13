<?php
define('THEME_URL', get_stylesheet_directory_uri().'/');
function theme_styles () {
    wp_enqueue_style('bootstrap', THEME_URL."css/bootstrap.min.css", array(), null);
    wp_enqueue_style('theme', THEME_URL."css/theme.css", array(), null);
    wp_enqueue_style('bootstrap-reset', THEME_URL."css/bootstrap-reset.css", array(), null);
    wp_enqueue_style('font-awesome', THEME_URL."assets/font-awesome/css/font-awesome.css", array(), null);
    wp_enqueue_style('flexslider', THEME_URL."css/flexslider.css", array(), null);
    wp_enqueue_style('bxslider', THEME_URL."assets/bxslider/jquery.bxslider.css", array(), null);
    wp_enqueue_style('fancybox', THEME_URL."assets/fancybox/source/jquery.fancybox.css", array(), null);
    wp_enqueue_style('revolution_slider', THEME_URL."assets/revolution_slider/css/rs-style.css", array(), null);
    wp_enqueue_style('revolution', THEME_URL."assets/revolution_slider/rs-plugin/css/settings.css", array(), null);
    wp_enqueue_style('style', THEME_URL."css/style.css", array(), null);
    wp_enqueue_style('style-responsive', THEME_URL."css/style-responsive.css", array(), null);
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', THEME_URL.'js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('javascript', THEME_URL.'js/hover-dropdown.js', array('jquery'), null, true);
    wp_enqueue_script('defer', THEME_URL.'js/jquery.flexslider.js', array('jquery'), null, true);
    wp_enqueue_script('bxslider', THEME_URL.'assets/bxslider/jquery.bxslider.js', array('jquery'), null, true);
    wp_enqueue_script('parallax', THEME_URL.'js/jquery.parallax-1.1.3.js', array('jquery'), null, true);
    wp_enqueue_script('easing', THEME_URL.'js/jquery.easing.min.js', array('jquery'), null, true);
    wp_enqueue_script('hover', THEME_URL.'js/link-hover.js', array('jquery'), null, true);
    wp_enqueue_script('fancybox', THEME_URL.'assets/fancybox/source/jquery.fancybox.pack.js', array('jquery'), null, true);
    wp_enqueue_script('revolution_slider', THEME_URL.'assets/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js', array('jquery'), null, true);
    wp_enqueue_script('common', THEME_URL.'js/common-scripts.js', array('jquery'), null, true);
    wp_enqueue_script('revulation', THEME_URL.'js/revulation-slide.js', array('jquery'), null, true);
    }

add_action( 'init', 'theme_setup' );
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

    register_nav_menus(
        array(
            'head_menu' => 'Шапка сайта',
            '404_menu' => 'Меню 404'
        )
    );

    register_sidebar( [
        'id'          => 'sidebar_blog',
        'name'        => 'Blog sidebar',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ] );
}

function the_placeholder () {
    echo "<img src='".THEME_URL."img/placeholder.png'>" ;
}

function the_404_img () {
    echo "<img src='".THEME_URL."img/404.jpg'>" ;
}


