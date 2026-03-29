$(window).on("load", function () {
  // Initialize AOS animations
  if (typeof AOS !== 'undefined') {
    AOS.init({
      duration: 800,
      easing: 'ease-out-cubic',
      once: true,
      offset: 80,
      disable: 'mobile'
    });
  }

  // Match height
  $(".same-height").matchHeight();

  // Mobile menu toggle
  $("#menuToggle").on("click", function () {
    $("body").toggleClass("open-menu");
    $(this).toggleClass("active");
    $("#main-navigation").slideToggle();
  });

  // Sticky header + scroll to top
  $(window).scroll(function () {
    var scrollTop = $(this).scrollTop();

    if (scrollTop >= 80) {
      $('body').addClass("scrolled");
      $('#scrollTopButton').addClass("active");
    } else {
      $('body').removeClass("scrolled");
      $('#scrollTopButton').removeClass("active");
    }
  });

  $('#scrollTopButton').click(function (event) {
    event.preventDefault();
    $('body, html').animate({ scrollTop: 0 }, 600, 'swing');
  });

  // Smooth scroll for anchor links
  $('a[href*="#"]:not([href="#"])').on('click', function (e) {
    var target = $(this.hash);
    if (target.length) {
      e.preventDefault();

      // Close mobile menu if open
      if ($('body').hasClass('open-menu')) {
        $('body').removeClass('open-menu');
        $('#menuToggle').removeClass('active');
        $('#main-navigation').slideUp();
      }

      $('html, body').animate({
        scrollTop: target.offset().top - 80
      }, 800, 'swing');
    }
  });

  // Counter animation
  var countersAnimated = false;

  function animateCounters() {
    if (countersAnimated) return;

    var $counters = $('.counter');
    if (!$counters.length) return;

    var firstCounter = $counters.first();
    var counterTop = firstCounter.offset().top;
    var windowBottom = $(window).scrollTop() + $(window).height();

    if (windowBottom > counterTop + 50) {
      countersAnimated = true;
      $counters.each(function () {
        var $this = $(this);
        var target = parseInt($this.data('target'));
        var duration = 2000;
        var start = 0;
        var startTime = null;

        function step(timestamp) {
          if (!startTime) startTime = timestamp;
          var progress = Math.min((timestamp - startTime) / duration, 1);
          var eased = 1 - Math.pow(1 - progress, 3);
          var current = Math.floor(eased * target);
          $this.text(current);
          if (progress < 1) {
            requestAnimationFrame(step);
          } else {
            $this.text(target);
          }
        }

        requestAnimationFrame(step);
      });
    }
  }

  $(window).on('scroll', animateCounters);
  animateCounters();

  // Object fit polyfill
  if (typeof objectFitImages === 'function') {
    objectFitImages();
  }
});
