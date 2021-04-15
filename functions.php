<?php

// Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-backgroud' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );

//Load in our CSS
function kevvy_k_enqueue_styles() {

    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' );

};
add_action( 'wp_enqueue_scripts', 'kevvy_k_enqueue_styles' );

// Register Menu Locations
register_nav_menus( [
    'main-menu' => esc_html__( 'Main Menu', 'kevvy_k' )
]);

// Add back button for single-portfolio pages.
add_action( 'back_button', 'wpse221640_back_button' );
function wpse221640_back_button()
{
    if ( wp_get_referer() )
    {
        $back_text = __( '&laquo; Back to Porfolio' );
        $button    = "\n<button id='my-back-button' class='button' onclick='javascript:history.back()'>$back_text</button>";
        echo ( $button );
    }
}

// Setup Widget Areas
function kevvy_k_widgets_init() {
    register_sidebar([
        'name'          => esc_html__( 'Main Sidebar', 'kevvy_k' ),
        'id'            => 'main-sidebar',
        'description'   => esc_html__( 'Add widgets for main sidebar here', 'kevvy_k' ),
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ]);
    register_sidebar([
        'name'          => esc_html__( 'Page Sidebar', 'kevvy_k' ),
        'id'            => 'page-sidebar',
        'description'   => esc_html__( 'Add widgets for page sidebar here', 'kevvy_k' ),
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ]);
    register_sidebar([
        'name'          => esc_html__( 'Front Page Widgets', 'kevvy_k' ),
        'id'            => 'front-page',
        'description'   => esc_html__( 'Add widgets for the front page here', 'kevvy_k' ),
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ]);
}
add_action( 'widgets_init', 'kevvy_k_widgets_init' );


?>