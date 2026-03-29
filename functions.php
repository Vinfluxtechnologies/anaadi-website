<?php
/* enqueue stylesheets and scripts */
require_once(get_template_directory() . '/inc/enqueue-assets/css.php');
require_once(get_template_directory() . '/inc/enqueue-assets/js.php');
/* require_once(get_template_directory() . '/inc/enqueue-assets/ajax-script.php'); */
/* !enqueue stylesheets and scripts */
/* theme supports */
require_once(get_template_directory() . '/inc/theme-supports/theme-supports.php');
/* !theme supports */
/* register posttypes */
require_once(get_template_directory() . '/inc/register-posttype/example-posttype.php');
require_once(get_template_directory() . '/inc/register-posttype/form-submission.php');
/* !register posttypes */
/* register taxonomy */
require_once(get_template_directory() . '/inc/register-taxonomy/example-taxonomy.php');
/* !register taxonomy */
/* register theme blocks */
require_once(get_template_directory() . '/inc/register-blocks/example-block.php');
/* !register theme blocks */
/* acf functions */
require_once(get_template_directory() . '/inc/acf-functions/acf-functions.php');
/* !acf-functions */
function enqueue_cf7_otp_script() {
    wp_enqueue_script('otp', get_stylesheet_directory_uri() . '/includes/otp/otp.js', ['jquery'], null, true);
    wp_localize_script('otp', 'otp_vars', [
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('otp_nonce')
    ]);
}
add_action('wp_enqueue_scripts', 'enqueue_cf7_otp_script');
require_once(get_template_directory() . '/includes/otp/otp-ajax.php');


/**
 * Save CF7 form submission into CPT with ACF meta fields
 */
add_action('wpcf7_before_send_mail', 'save_cf7_to_cpt');
function save_cf7_to_cpt($contact_form) {
    // 🔹 Change this to your CPT slug
    $post_type = 'form-submission';  

    // Get submission instance
    $submission = WPCF7_Submission::get_instance();
    if (!$submission) return;

    $posted_data = $submission->get_posted_data();

    // Create new post in CPT
    $post_id = wp_insert_post([
        'post_type'   => $post_type,
        'post_title'  => sanitize_text_field($posted_data['client-name']),
        'post_status' => 'publish',
    ]);

    if ($post_id) {
        // Save meta fields via ACF (or update_post_meta if no ACF field exists)
        update_field('asin_code', $posted_data['asin-code'], $post_id);
        update_field('client_name', $posted_data['client-name'], $post_id);
        update_field('client_email', $posted_data['client-email'], $post_id);
        update_field('residential_address', $posted_data['residential-address'], $post_id);
        update_field('state', $posted_data['state'], $post_id);
        update_field('city', $posted_data['city'], $post_id);
        update_field('pincode', $posted_data['pincode'], $post_id);
        update_field('pan_number', $posted_data['pan-number'], $post_id);

        // Location Preference (checkbox array)
        if (!empty($posted_data['location-preference'])) {
            update_field('location_preference', (array) $posted_data['location-preference'], $post_id);
        }

        // Flat Configuration
        update_field('flat_configuration', $posted_data['flat-configuration'], $post_id);

        // Price Budgets
        update_field('price_2t', (array) $posted_data['price-2t'], $post_id);
        update_field('price_3t', (array) $posted_data['price-3t'], $post_id);
        update_field('price_3t_svt', (array) $posted_data['price-3t-svt'], $post_id);

        // Features
        update_field('features', (array) $posted_data['features'], $post_id);
        update_field('features_other', $posted_data['features-other'], $post_id);

        // Purchase Timeline
        update_field('purchase_timeline', $posted_data['purchase-timeline'], $post_id);

        // Marketing Consent (checkbox or true/false)
        $consent = isset($posted_data['marketing-consent']) ? 1 : 0;
        update_field('marketing_consent', $consent, $post_id);
    }
}


?>
