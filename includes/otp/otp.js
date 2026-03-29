jQuery(document).ready(function ($) {

  // ✅ SEND OTP button
  $("#send-otp").on("click", function () {
    var mobile = $("#client-mobile").val();

    if (!mobile || mobile.length !== 10) {
      alert("Please enter a valid 10-digit mobile number");
      return;
    }

    $("#otp-status").val("unverified");
    $("#otp-verification").val("");

    $(this).prop("disabled", true).text("Sending...");

    $.ajax({
      url: otp_vars.ajax_url,
      method: "POST",
      data: {
        action: "send_otp",
        nonce: otp_vars.nonce,
        mobile: mobile,
      },
      success: function (response) {
        if (response.success) {
          alert("OTP sent successfully!");
        } else {
          alert("Failed to send OTP: " + response.data.message);
        }
        $("#send-otp").prop("disabled", false).text("Send OTP");
      },
      error: function () {
        alert("Error sending OTP.");
        $("#send-otp").prop("disabled", false).text("Send OTP");
      },
    });
  });

  // ✅ VERIFY OTP on blur
  $("#otp-verification").on("blur", function () {
    var otp = $(this).val();
    var mobile = $("#client-mobile").val();

    if (otp.length === 0) return;

    $.ajax({
      url: otp_vars.ajax_url,
      method: "POST",
      data: {
        action: "verify_otp",
        nonce: otp_vars.nonce,
        mobile: mobile,
        otp: otp,
      },
      success: function (response) {
        if (response.success) {
          alert("OTP verified!");
          $("#otp-status").val("verified");
        } else {
          alert("Invalid OTP, please try again.");
          $("#otp-status").val("unverified");
          $("#otp-verification").val("");
        }
      },
      error: function () {
        alert("Error verifying OTP.");
      },
    });
  });

$(document).on("click", ".wpcf7cf_step_next", function (e) {
  const currentStep = $(this).closest(".wpcf7cf_step");

  if (currentStep.find("#otp-status").length > 0) {
    var status = $("#otp-status").val();

    if (status !== "verified") {
      alert("⚠️ Please verify your OTP before proceeding.");
      e.preventDefault();
      e.stopPropagation();
      return false;
    }
  }
});
  
  $('form.wpcf7-form').on('submit', function (e) {
  if ($("#otp-status").length > 0 && $("#otp-status").val() !== "verified") {
    alert("OTP is not verified. Please verify before submitting.");
    e.preventDefault();
    return false;
  }
});


});
