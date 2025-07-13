$(window).on("load", function () {
  $(".same-height").matchHeight();

  $("#menuToggle").on("click", function () {
    $("body").toggleClass("open-menu");
    $(this).toggleClass("active");
    $("#main-navigation").slideToggle();
  });

  $(window).scroll(function () {
    if ($(this).scrollTop() >= 100) {
      $('#scrollTopButton').fadeIn(200);
      $('#scrollTopButton').addClass("active");
      $('body').addClass("scrolled");
    } else {
      $('#scrollTopButton').fadeOut(200);
      $('#scrollTopButton').removeClass("active");
      $('body').removeClass("scrolled");
    }
  });
  $('#scrollTopButton').click(function (event) {
    event.preventDefault();
    $('body,html').animate({
      scrollTop: 0
    }, 200);
  });

  objectFitImages();
});
