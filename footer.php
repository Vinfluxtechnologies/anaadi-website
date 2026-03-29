    <!-- footer -->
    <footer id="footer">
      <div class="container">
        <div class="row justify-content-between gx-lg-5">
          <div class="col-auto col-md-4 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="0">
            <span class="title">About Us</span>
            <p>Anaadi Developers is India's leading real estate project management company with decades of expertise and
              a dedication to excellence.</p>
            <ul class="social-links">
              <li>
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li>
                <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              </li>
              <li>
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
              </li>
            </ul>
          </div>
          <div class="col-auto col-md-4 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <span class="title">Quick Links</span>
            <ul class="footer-menu">
              <li><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-chevron-right"></i> Home</a></li>
              <li><a href="<?php echo esc_url(home_url('/about')); ?>"><i class="fas fa-chevron-right"></i> About Us</a></li>
              <li><a href="<?php echo esc_url(home_url('/#services')); ?>"><i class="fas fa-chevron-right"></i> Services</a></li>
              <li><a href="<?php echo esc_url(home_url('/#projects')); ?>"><i class="fas fa-chevron-right"></i> Projects</a></li>
              <li><a href="<?php echo esc_url(home_url('/contact-us')); ?>"><i class="fas fa-chevron-right"></i> Contact</a></li>
            </ul>
          </div>
          <div class="col-auto col-md-4 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <span class="title">Our Services</span>
            <ul class="footer-menu">
              <li><a href="<?php echo esc_url(home_url('/#services')); ?>"><i class="fas fa-chevron-right"></i> Property Management</a></li>
              <li><a href="<?php echo esc_url(home_url('/#services')); ?>"><i class="fas fa-chevron-right"></i> Sales &amp; Marketing</a></li>
              <li><a href="<?php echo esc_url(home_url('/#services')); ?>"><i class="fas fa-chevron-right"></i> Market Research</a></li>
              <li><a href="<?php echo esc_url(home_url('/#services')); ?>"><i class="fas fa-chevron-right"></i> Project Development</a></li>
              <li><a href="<?php echo esc_url(home_url('/#services')); ?>"><i class="fas fa-chevron-right"></i> Investment Advisory</a></li>
            </ul>
          </div>
          <div class="col-auto col-md-4 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <span class="title">Contact Us</span>
            <ul class="unstyled-list">
              <li>
                <i class="fas fa-map-marker-alt footer-contact-icon"></i>
                <address>Corporate Office: Delhi-NCR, India</address>
              </li>
              <li>
                <a href="tel:+919876543210">
                  <i class="fas fa-phone-alt footer-contact-icon"></i>
                  <span>+91 9876543210</span>
                </a>
              </li>
              <li>
                <a href="mailto:info@anaadidevelopers.com">
                  <i class="fas fa-envelope footer-contact-icon"></i>
                  <span>info@anaadidevelopers.com</span>
                </a>
              </li>
              <li>
                <i class="fas fa-clock footer-contact-icon"></i>
                <span>Monday - Friday: 9:00 AM - 6:00 PM</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-bottom">
          <p>&copy; <?php echo date('Y'); ?> Anaadi Developers. All Rights Reserved.</p>
          <p>Website designed by <a href="#">VinFlux Technologies</a></p>
        </div>
      </div>
    </footer>
    <!-- /footer -->

    <!-- Scroll to Top -->
    <button id="scrollTopButton" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </button>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const configRadios = document.querySelectorAll('input[name="flat-configuration"]');
  const priceOptions = document.querySelectorAll('.price-option');

  function updatePriceOptions(selectedValue) {
    priceOptions.forEach(function (option) {
      const config = option.getAttribute('data-config');
      option.style.display = config === selectedValue ? 'block' : 'none';
    });
  }

  updatePriceOptions('');

  configRadios.forEach(function (radio) {
    radio.addEventListener('change', function () {
      updatePriceOptions(this.value);
    });
  });
});
</script>

  </div>

<?php wp_footer(); ?>
</body>
</html>
