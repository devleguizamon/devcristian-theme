<?php
// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
function add_normalize_CSS() {
   wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}
add_action('wp_enqueue_scripts', 'add_normalize_CSS');

// Register a new sidebar simply named 'sidebar'
function add_widget_support() {
               register_sidebar( array(
                               'name'          => 'Sidebar',
                               'id'            => 'sidebar',
                               'before_widget' => '<div>',
                               'after_widget'  => '</div>',
                               'before_title'  => '<h2>',
                               'after_title'   => '</h2>',
               ) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_widget_support' );

// Register a new navigation menu
function add_Main_Nav() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
// Hook to the init action hook, run our navigation menu function
add_action( 'init', 'add_Main_Nav' );

function devcristian_theme_support(){
    add_theme_support( 'post-thumbnails' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support(
                'html5',
                [
                        'search-form',
                        'comment-form',
                        'comment-list',
                        'gallery',
                        'caption',
                        'script',
                        'style',
                ]
        );
        add_theme_support(
                'custom-logo',
                [
                        'height'      => 100,
                        'width'       => 350,
                        'flex-height' => true,
                        'flex-width'  => true,
                ]
        );

        /*
         * Editor Style.
         */
        add_editor_style( 'classic-editor.css' );

        /*
         * Gutenberg wide images.
         */
        add_theme_support( 'align-wide' );

        /*
         * WooCommerce.
         */
        $hook_result = apply_filters_deprecated( 'elementor_hello_theme_add_woocommerce_support', [ true ], '2.0', 'hello_elementor_add_woocommerce_support' );
        if ( apply_filters( 'hello_elementor_add_woocommerce_support', $hook_result ) ) {
            // WooCommerce in general.
            add_theme_support( 'woocommerce' );
            // Enabling WooCommerce product gallery features (are off by default since WC 3.0.0).
            // zoom.
            add_theme_support( 'wc-product-gallery-zoom' );
            // lightbox.
            add_theme_support( 'wc-product-gallery-lightbox' );
            // swipe.
            add_theme_support( 'wc-product-gallery-slider' );
        }
}

add_action( 'after_setup_theme', 'devcristian_theme_support' );

//Theme config instance
require_once get_template_directory() . '/includes/theme-config.php';
TH_SETUP()->setup();