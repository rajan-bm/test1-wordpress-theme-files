<?php /**
 * 
 * Add css and js
 * 
 */
    function enqueue_custom_styles_and_scripts() {
        wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap' );
        wp_enqueue_style( 'cdn-fonts', 'https://fonts.cdnfonts.com/css/john-hancock-cp' );
        $app_css_path = get_template_directory() . '/assets/css/app.css';
        wp_enqueue_style( 'app-css', get_template_directory_uri() . '/assets/css/app.css', array(), filemtime( $app_css_path ), 'all' );
        $support_css_path = get_template_directory() . '/assets/support.css';
        wp_enqueue_style( 'support-css', get_template_directory_uri() . '/assets/support.css', array(), filemtime( $support_css_path ), 'all' );

        $app_js_path = get_template_directory() . '/assets/js/app.js';
        wp_enqueue_script( 'app-js', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), filemtime( $app_js_path ), true );
    }
    add_action( 'wp_enqueue_scripts', 'enqueue_custom_styles_and_scripts' );
    