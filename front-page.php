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
        <div class="row justify-content-between align-items-center">
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
                With over 25+ years of expertise and 2000+ skilled professionals, Anaadi Developers delivers exceptional
                real estate solutions across India's dynamic markets - From ever For ever.
              </p>
              <div class="banner-buttons">
                <a href="#services" class="btn btn-primary">
                  <i class="fas fa-rocket"></i>
                  Explore Solutions
                </a>
                <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="btn btn-secondary">
                  <i class="fas fa-phone"></i>
                  Get In Touch
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <figure class="figure1">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner-img1.jpg" alt="Anaadi Developers - Real Estate Excellence">
            </figure>
          </div>
        </div>
      </div>
      <div class="wave"></div>
    </div>
    <!--  /banner -->

    <!-- content -->
    <div id="content">

      <!-- Why Choose Us -->
      <section class="section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-9 text-center mb-4 mb-lg-5" data-aos="fade-up">
              <h2 class="underline1">Why Choose Us</h2>
              <p class="color1">Anaadi Developers brings unmatched expertise to real estate project management across India</p>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 d-flex mb-4 mb-xl-0" data-aos="fade-up" data-aos-delay="0">
              <div class="card1">
                <div class="icon">
                  <i class="fas fa-award"></i>
                </div>
                <h3 class="h4">25+ Years of Experience</h3>
                <p class="highlight-text">Decades of expertise in real estate project management across India's diverse markets.</p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 d-flex mb-4 mb-xl-0" data-aos="fade-up" data-aos-delay="100">
              <div class="card1">
                <div class="icon">
                  <i class="fas fa-users"></i>
                </div>
                <h3 class="h4">2000+ Sales Professionals</h3>
                <p class="highlight-text">A robust network of skilled sales professionals operating across Delhi-NCR region.</p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 d-flex mb-4 mb-xl-0" data-aos="fade-up" data-aos-delay="200">
              <div class="card1">
                <div class="icon">
                  <i class="fas fa-building"></i>
                </div>
                <h3 class="h4">Residential &amp; Commercial Expertise</h3>
                <p class="highlight-text">Specialized knowledge in both residential and commercial property management.</p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 d-flex mb-4 mb-xl-0" data-aos="fade-up" data-aos-delay="300">
              <div class="card1">
                <div class="icon">
                  <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="h4">Data-Driven Research</h3>
                <p class="highlight-text">Strategic market research that ensures maximum ROI for your property investments.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Why Choose Us -->

      <!-- Stats Counter -->
      <div class="stats-section">
        <div class="container">
          <div class="row">
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
              <div class="stat-item">
                <div class="stat-number"><span class="counter" data-target="25">0</span>+</div>
                <div class="stat-label">Years Experience</div>
              </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
              <div class="stat-item">
                <div class="stat-number"><span class="counter" data-target="2000">0</span>+</div>
                <div class="stat-label">Professionals</div>
              </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
              <div class="stat-item">
                <div class="stat-number"><span class="counter" data-target="500">0</span>+</div>
                <div class="stat-label">Projects Delivered</div>
              </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="stat-item">
                <div class="stat-number"><span class="counter" data-target="50">0</span>+</div>
                <div class="stat-label">Cities Covered</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Stats Counter -->

      <!-- Services -->
      <section class="section bg-color1" id="services">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-9 text-center mb-4 mb-lg-5" data-aos="fade-up">
              <h2 class="underline1">Our Services</h2>
              <p class="color1">Comprehensive real estate solutions tailored to deliver excellence at every stage of your project</p>
            </div>
          </div>
          <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
              <div class="service-card">
                <div class="service-icon">
                  <i class="fas fa-project-diagram"></i>
                </div>
                <h3>Project Management</h3>
                <p>End-to-end project management from blueprint to possession, ensuring timely delivery and quality execution.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-card">
                <div class="service-icon">
                  <i class="fas fa-bullhorn"></i>
                </div>
                <h3>Sales &amp; Marketing</h3>
                <p>Strategic sales enablement and marketing campaigns powered by 2000+ professionals across Delhi-NCR.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-card">
                <div class="service-icon">
                  <i class="fas fa-search-dollar"></i>
                </div>
                <h3>Market Research</h3>
                <p>Data-driven market intelligence and feasibility studies to guide investment decisions with clarity.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
              <div class="service-card">
                <div class="service-icon">
                  <i class="fas fa-home"></i>
                </div>
                <h3>Property Management</h3>
                <p>Comprehensive property management solutions for residential and commercial assets across Indian markets.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-card">
                <div class="service-icon">
                  <i class="fas fa-hand-holding-usd"></i>
                </div>
                <h3>Investment Advisory</h3>
                <p>Expert investment guidance backed by real-time analytics ensuring maximum ROI for property investors.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-card">
                <div class="service-icon">
                  <i class="fas fa-drafting-compass"></i>
                </div>
                <h3>Project Development</h3>
                <p>Strategic planning and execution frameworks for sustainable, market-aligned real estate developments.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Services -->

      <!-- About Feature -->
      <div class="section">
        <div class="container">
          <div class="row gx-lg-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
              <figure class="figure1">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner-img1.jpg" alt="Anaadi Developers Office">
              </figure>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
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
              <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /About Feature -->

      <!-- Projects -->
      <section class="section bg-color2" id="projects">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-9 text-center mb-4 mb-lg-5" data-aos="fade-up">
              <h2 class="underline1">Our Projects</h2>
              <p class="color1">Delivering landmark developments across India's most dynamic real estate markets</p>
            </div>
          </div>
          <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
              <div class="project-card" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner-img1.jpg');">
                <div class="project-info">
                  <h3>Luxury Residences</h3>
                  <p>Delhi-NCR | Residential</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="project-card" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner-img1.jpg');">
                <div class="project-info">
                  <h3>Commercial Complex</h3>
                  <p>Gurugram | Commercial</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="project-card" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner-img1.jpg');">
                <div class="project-info">
                  <h3>Smart Township</h3>
                  <p>Noida | Mixed Use</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Projects -->

      <!-- CTA -->
      <div class="cta-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="zoom-in">
              <h2>Ready to Start Your Next Project?</h2>
              <p>Partner with Anaadi Developers and transform your real estate vision into reality with India's most trusted project management team.</p>
              <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="btn">
                <i class="fas fa-arrow-right"></i>
                Get Started Today
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- /CTA -->

    </div>
    <!-- /content -->

<?php get_footer(); ?>
