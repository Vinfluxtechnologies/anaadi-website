<?php
// ------------------- START SESSION -------------------
add_action('init', function() {
    if (!session_id()) {
        session_start();
    }
});

// ------------------- SEND OTP -------------------
add_action('wp_ajax_send_otp', 'send_otp_callback');
add_action('wp_ajax_nopriv_send_otp', 'send_otp_callback');

function send_otp_callback() {
    check_ajax_referer('otp_nonce', 'nonce');

    $mobile = sanitize_text_field($_POST['mobile']);
  
  	 // Check if number is already used
    $used_numbers = get_option('used_mobile_numbers', []);
    if (in_array($mobile, $used_numbers)) {
        wp_send_json_error(['message' => 'This mobile number has already been used.']);
        return;
    }
  
  
    $otp    = rand(100000, 999999);

    // Store OTP in session for verification
    $_SESSION['otp_for_' . $mobile] = $otp;

    // Prepare SMS text and encode it
    $text = urlencode("$otp is your One time password (OTP) to submit your inquiry. Please enter the OTP to proceed. ANAADI DEVELOPERS");

    // API URL
    $api_url = "http://hindit.co.in/API/pushsms.aspx?loginID=T1ADPL&password=547986&mobile={$mobile}&text={$text}&senderid=ANADPL&route_id=2&Unicode=0&IP=x.x.x.x&Template_id=1707175413886329546";

    // Hit the API
    $response = wp_remote_get($api_url);

    if (is_wp_error($response)) {
        wp_send_json_error(['message' => 'SMS sending failed']);
    } else {
        wp_send_json_success(['message' => 'OTP sent successfully']);
    }
}

// ------------------- VERIFY OTP -------------------
add_action('wp_ajax_verify_otp', 'verify_otp_callback');
add_action('wp_ajax_nopriv_verify_otp', 'verify_otp_callback');

function verify_otp_callback() {
    check_ajax_referer('otp_nonce', 'nonce');

    $mobile = sanitize_text_field($_POST['mobile']);
    $otp_entered = sanitize_text_field($_POST['otp']);

    $otp_stored = $_SESSION['otp_for_' . $mobile] ?? '';

    if ($otp_entered == $otp_stored) {
        unset($_SESSION['otp_for_' . $mobile]); // remove OTP after verification
        wp_send_json_success(['message' => 'OTP verified']);
    } else {
        wp_send_json_error(['message' => 'Invalid OTP']);
    }
}

// ------------------- CONTACT FORM 7 VALIDATION -------------------
add_filter('wpcf7_validate', function($result) {
    $submission = WPCF7_Submission::get_instance();
    if (!$submission) {
        return $result;
    }

    $data = $submission->get_posted_data();

    // Check if OTP was verified via hidden field
    if (isset($data['otp-status']) && $data['otp-status'] !== 'verified') {
        $result->invalidate('otp-verification', 'Please verify your OTP before submitting.');
    }

    return $result;
}, 10, 1);



/* Number storage in database */
add_action('wpcf7_mail_sent', function($contact_form) {
    $submission = WPCF7_Submission::get_instance();
    if (!$submission) return;

    $data = $submission->get_posted_data();
    if (isset($data['mobile'])) {
        $mobile = sanitize_text_field($data['mobile']);
        $used_numbers = get_option('used_mobile_numbers', []);
        if (!in_array($mobile, $used_numbers)) {
            $used_numbers[] = $mobile;
            update_option('used_mobile_numbers', $used_numbers);
        }
    }
});
