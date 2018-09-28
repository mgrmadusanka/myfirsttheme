<?php
//remove showing wordpress version in the header meta tag
function mgrRemoveGeneratorMetaTag() {
    return '';
}
add_filter('the_generator', 'mgrRemoveGeneratorMetaTag');


//include external styleseets and javascripts
function mgrScriptEnqueue() {
    //css
    wp_enqueue_style(
        'bs',
        get_template_directory_uri() . '/css/bootstrap.min.css',
        array(),
        '4.1.x',
        'all'
    );
    wp_enqueue_style(
        'google-fonts-playfair',
        'https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900',
        array(),
        '1.0.0',
        'all'
    );
    wp_enqueue_style(
        'custome-style',
        get_template_directory_uri() . '/css/custom-styles.css',
        array(),
        '1.0.0',
        'all'
    );

    //js
    wp_enqueue_script(
        'jq',
        get_template_directory_uri() . '/js/jquery-3.3.1.min.js',
        array(),
        '3.3.1',
        false
    );
    wp_enqueue_script(
        'bs-js',
        get_template_directory_uri() . '/js/bootstrap.min.js',
        array(),
        '4.1.x',
        true
    );
    wp_enqueue_script(
        'custom-js',
        get_template_directory_uri() . 'js/custom-js.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'mgrScriptEnqueue');


//include boostrap nav walker class file
require get_template_directory() . '/inc/bootstrap-navwalker.php';


//activate navigation menus
add_theme_support('menus');
//register header main navigation menu
register_nav_menu('primary', 'Primary Header Navigation');
//register footer navigation menu
register_nav_menu('secondary', 'Footer Navigation');


//active custome header(user can change header logo)
add_theme_support('custom-header', array(
    'flex-width' => true,
    'width' => 155,
    'flex-height' => true,
    'height' => 30,
    'default-image' => get_template_directory_uri() . '/img/nav_brand.png',
    'uploads' => true
));

//activate post thumbnail
add_theme_support('post-thumbnails');

//activate sidebar
function mgrWidgetSetup() {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar-1',
        'class' => 'custom',
        'description' => 'Standard Sidebar',
        'before_widget' => '<div id="%1$s" class="widget p-3 %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ));
}
add_action('widgets_init', 'mgrWidgetSetup');

//activate html5 forms
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

// //change post excerpt length
// function wpdocs_custom_excerpt_length( $length ) {
//     return 20;
// }
// add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length');

?>