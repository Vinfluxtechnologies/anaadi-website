<?php
function load_javascripts()
{
    wp_register_script( 'script-jquery-3.7.1.min', get_template_directory_uri() . '/assets/javascripts/vendor/jquery-3.7.1.min.js', '', false, true );
    wp_enqueue_script( 'script-jquery-3.7.1.min' );

    wp_register_script( 'script-popper-min', get_template_directory_uri() . '/assets/javascripts/vendor/popper.min.js', array('script-jquery-3.7.1.min'), false, true );
    wp_enqueue_script( 'script-popper-min' );

    wp_register_script( 'script-bootstrap-min', get_template_directory_uri() . '/assets/javascripts/vendor/bootstrap.min.js', array('script-popper-min'), false, true );
    wp_enqueue_script( 'script-bootstrap-min' );

    wp_register_script( 'script-jquery-height', get_template_directory_uri() . '/assets/javascripts/vendor/jquery.matchHeight-min.js', array('script-jquery-3.7.1.min'), false, true );
    wp_enqueue_script( 'script-jquery-height' );

    wp_register_script( 'script-ofi-browser', get_template_directory_uri() . '/assets/javascripts/vendor/ofi.browser.js', '', false, true );
    wp_enqueue_script( 'script-ofi-browser' );

    wp_enqueue_script( 'script-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', '', '2.3.1', true );

    wp_register_script( 'script-main', get_template_directory_uri() . '/assets/javascripts/main.js', array('script-jquery-3.7.1.min', 'script-aos'), false, true );
    wp_enqueue_script( 'script-main' );
}
add_action('wp_enqueue_scripts', 'load_javascripts');

?>