<?php get_header(); ?>


   <!--  banner -->
    <div id="banner">
      <div class="decorative-elements">
        <div class="deco-circle"></div>
        <div class="deco-circle"></div>
        <div class="deco-circle"></div>
      </div>
      <div class="icon-elements">
        <i class="fas fa-building icon-element"></i>
        <i class="fas fa-chart-line icon-element"></i>
        <i class="fas fa-handshake icon-element"></i>
        <i class="fas fa-trophy icon-element"></i>
      </div>
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-6">
            <div class="banner-content">
              <div class="banner-badge">
                <i class="fas fa-star"></i>
                India's Premier Real Estate Company
              </div>
              <h1>
                Transforming <span class="highlight">Real Estate Dreams</span> into Reality
              </h1>
              <p>
                With over 25+ years of expertise and 2000+ skilled professionals, Annadi Developers delivers exceptional
                real estate solutions across India's dynamic markets - From ever For ever.
              </p>
              <div class="banner-buttons">
                <a href="#services" class="btn btn-primary">
                  <i class="fas fa-rocket"></i>
                  Explore Solutions
                </a>
                <a href="#contact" class="btn btn-secondary">
                  <i class="fas fa-phone"></i>
                  Get In Touch
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <figure class="figure1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-img1.jpg" alt="img">
            </figure>
          </div>
        </div>
      </div>
      <div class="wave"></div>
    </div>
    <!--  /banner -->
    <!-- content -->
    <div id="content">
      <!-- section -->
      <section class="section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-9 text-center mb-4 mb-lg-5">
              <h2 class="underline1">Why Choose Us</h2>
              <p class="color1">Anaadi Developers brings unmatched expertise to real estate project management across
                India</p>
            </div>

          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 d-flex mb-4 mb-xl-0">
              <div class="card1">
                <div class="icon">
                  <i class="fas fa-award"></i>
                </div>
                <h3 class="h4">25+ Years of Experience</h3>
                <p class="highlight-text">Decades of expertise in real estate project management across India's diverse
                  markets.</p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 d-flex mb-4 mb-xl-0">
              <div class="card1">
                <div class="icon">
                  <i class="fas fa-users"></i>
                </div>
                <h3 class="h4">2000+ Sales Professionals</h3>
                <p class="highlight-text">A robust network of skilled sales professionals operating across Delhi-NCR
                  region.</p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 d-flex mb-4 mb-xl-0">
              <div class="card1">
                <div class="icon">
                  <i class="fas fa-building"></i>
                </div>
                <h3 class="h4">Residential &amp; Commercial Expertise</h3>
                <p class="highlight-text">Specialized knowledge in both residential and commercial property management.
                </p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 d-flex mb-4 mb-xl-0">
              <div class="card1">
                <div class="icon">
                  <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="h4">Data-Driven Research</h3>
                <p class="highlight-text">Strategic market research that ensures maximum ROI for your property
                  investments.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /section -->
      <!-- section -->
      <div class="section bg-color1">
        <div class="container">
          <div class="row gx-lg-5">
            <div class="col-lg-6">
              <figure class="figure1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-img1.jpg" alt="img">
              </figure>
            </div>
            <div class="col-lg-6">
              <h2>India's Premier Real Estate Project Management Company</h2>
              <p>Anaadi Developers stands at the forefront of real estate project management in
                India, bringing unmatched expertise and a data-driven approach to every project we undertake.</p>
              <ul class="list1">
                <li>
                  <i class="fas fa-check-circle"></i>
                  <div>Comprehensive property management solutions tailored to Indian markets</div>
                </li>
                <li>
                  <i class="fas fa-check-circle"></i>
                  <div>Expert team with extensive experience across metropolitan and emerging markets</div>
                </li>
                <li>
                  <i class="fas fa-check-circle"></i>
                  <div>Strategic partnerships with leading developers and financial institutions</div>
                </li>
                <li>
                  <i class="fas fa-check-circle"></i>
                  <div>Advanced technological solutions for property management and marketing</div>
                </li>
              </ul>
              <a href="#" class="btn btn-primary">OUR SERVICES</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /section -->

            <section class="section">
        <div class="container">
<?php echo do_shortcode('[contact-form-7 id="afdbc1e" title="Contact form"]'); ?>
</div>
</div>
    </div>
    <!-- /content -->


<?php get_footer(); ?>