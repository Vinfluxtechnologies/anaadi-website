<?php get_header(); ?>

    <div id="banner">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-8 banner-content">
            <h1>Page <span class="highlight">Not Found</span></h1>
            <p>The page you're looking for doesn't exist or has been moved.</p>
          </div>
        </div>
      </div>
    </div>

    <div id="content">
      <section class="section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center" data-aos="fade-up">
              <div style="font-size: 120px; font-weight: 900; line-height: 1;" class="highlight">404</div>
              <h2>Oops! Page not found</h2>
              <p class="color1 mb-4">It seems like you've taken a wrong turn. Let us guide you back to familiar ground.</p>
              <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                <i class="fas fa-home"></i>
                Back to Home
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>

<?php get_footer(); ?>
