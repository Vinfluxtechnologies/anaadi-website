<?php get_header(); ?>

    <!--  banner -->
    <div id="banner">
      <div class="icon-elements">
        <i class="fas fa-envelope icon-element"></i>
        <i class="fas fa-phone icon-element"></i>
      </div>
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-8 banner-content">
            <h1>Get In <span class="highlight">Touch</span></h1>
            <p>We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
          </div>
        </div>
      </div>
    </div>
    <!--  /banner -->

<main>
    <div class="container">

        <!-- Contact Form -->
        <section class="contact-form-section" data-aos="fade-up">
            <h2 class="form-title">Send us a Message</h2>
            <form class="contact-form" onsubmit="handleSubmit(event)">
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <select id="subject" name="subject" required>
                            <option value="">Select a subject</option>
                            <option value="general">General Inquiry</option>
                            <option value="property">Property Management</option>
                            <option value="investment">Investment Advisory</option>
                            <option value="partnership">Partnership</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" placeholder="Tell us about your project or how we can help you..." required></textarea>
                </div>

                <button type="submit" class="submit-btn">
                    <i class="fas fa-paper-plane"></i> Send Message
                </button>
            </form>
        </section>

        <!-- Map and Contact Info -->
        <section class="info-section">
            <div class="map-container" data-aos="fade-right">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224345.83923192776!2d77.06889754725782!3d28.52758200617607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1690000000000!5m2!1sen!2sin"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <div class="contact-details" data-aos="fade-left">
                <h3>Contact Information</h3>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-info">
                        <h4>Address</h4>
                        <p>Corporate Office<br>
                        Delhi-NCR, India</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="contact-info">
                        <h4>Phone</h4>
                        <p><a href="tel:+919876543210">+91 9876543210</a></p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-info">
                        <h4>Email</h4>
                        <p><a href="mailto:info@anaadidevelopers.com">info@anaadidevelopers.com</a></p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="contact-info">
                        <h4>Business Hours</h4>
                        <p>Monday - Friday: 9:00 AM - 6:00 PM<br>
                        Saturday: 10:00 AM - 4:00 PM<br>
                        Sunday: Closed</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
