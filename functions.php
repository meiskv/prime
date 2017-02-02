<?php


add_theme_support('menus');

register_nav_menu('primary', __('Primary Menu'));

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

function wpdocs_excerpt_more( $more ) {
    return ' <a href="'.get_the_permalink().'" rel="nofollow">Read More...</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
add_theme_support( 'post-thumbnails' ); 


function theme_enqueue_scripts() {
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
        wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css' );
        wp_enqueue_style( 'carousel', get_template_directory_uri() . '/css/carousel.css' );
        wp_enqueue_style( 'fsbanner', get_template_directory_uri() . '/css/fsbanner.css' );
        wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css' );

    
        wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '2.2.3', true );
        wp_enqueue_script( 'jqueryaccordion', get_template_directory_uri() . '/js/jquery.accordion.min.js', array('jquery'), '2.2.3', true );
        wp_enqueue_script( 'limit', get_template_directory_uri() . '/js/limit.js', array(), '2.2.3', true );
        wp_enqueue_script( 'za7n', get_template_directory_uri() . '/js/zA7n-min.js', array('jquery'), '2.2.3', true );
        wp_enqueue_script( 'fsbanner', get_template_directory_uri() . '/js/fsbanner.js', array('jquery'), '2.2.3', true );
        wp_enqueue_script( 'prime', get_template_directory_uri() . '/js/prime.js', array(), '2.2.3', true );

        }

        add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );



?>