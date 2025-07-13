<?php
/* localize script to use admin ajax url */
function load_ajax_script(){
	wp_enqueue_script('ajax', get_template_directory_uri(  ).'/assets/javascript/ajax-scripts/ajax-script.js', array('jquery'), NULL, NULL);

	wp_localize_script( 'ajax', 'wp_ajax', array('ajax_url' => admin_url( 'admin-ajax.php' )) );
}
add_action('wp_enqueue_scripts','load_ajax_script');
/* localize script to use admin ajax url */
?>