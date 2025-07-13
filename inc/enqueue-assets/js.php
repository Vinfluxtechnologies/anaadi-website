<?php
/* enqueue javascripts format 
wp_register_script( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $in_footer:boolean );
wp_enqueue_script( $handle:string );
*/
function load_javascripts()
{
    wp_register_script( 'script-bootstrap-min', get_template_directory_uri() . '/assets/javascripts/vendor/bootstrap.min.js', '', false, true );
    wp_enqueue_script( 'script-bootstrap-min' );

        wp_register_script( 'script-jquery-3.7.1.min', get_template_directory_uri() . '/assets/javascripts/vendor/jquery-3.7.1.min.js', '', false, true );
    wp_enqueue_script( 'script-jquery-3.7.1.min' );

   // wp_register_script( 'script-slick-min', get_template_directory_uri() . '/assets/javascripts/vendor/slick.min.js', '', false, true );
    //wp_enqueue_script( 'script-slick-min' );

    wp_register_script( 'script-head-core', get_template_directory_uri() . '/assets/javascripts/vendor/head.core.js', '', false, false );
    wp_enqueue_script( 'script-head-core' );

    wp_register_script( 'script-jquery-height', get_template_directory_uri() . '/assets/javascripts/vendor/jquery.matchHeight-min.js', '', false, true );
    wp_enqueue_script( 'script-jquery-height' );

    wp_register_script( 'script-jquery-nav', get_template_directory_uri() . '/assets/javascripts/vendor/jquery.nav.js', '', false, true );
    wp_enqueue_script( 'script-jquery-nav' );

    wp_register_script( 'script-ofi-browser', get_template_directory_uri() . '/assets/javascripts/vendor/ofi.browser.js', '', false,true );
    wp_enqueue_script( 'script-ofi-browser' );

    wp_register_script( 'script-popper', get_template_directory_uri() . '/assets/javascripts/vendor/popper.js', '', false, true);
    wp_enqueue_script( 'script-popper' );

    wp_register_script( 'script-pooper-min', get_template_directory_uri() . '/assets/javascripts/vendor/popper.min.js', '', false,true );
    wp_enqueue_script( 'script-popper-min' );

    wp_register_script( 'script-main', get_template_directory_uri() . '/assets/javascripts/main.js', '', false, true );
    wp_enqueue_script( 'script-main' );
		
}
add_action('wp_enqueue_scripts', 'load_javascripts');

?>