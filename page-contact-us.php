<?php get_header(); ?>

<main>
        <div class="container">
            <!-- Page Title -->
            <div class="page-title">
                <h1>Get In Touch</h1>
                <p>We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
            </div>

            <!-- Contact Form -->
            <section class="contact-form-section">
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
                                <option value="support">Technical Support</option>
                                <option value="sales">Sales</option>
                                <option value="partnership">Partnership</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" placeholder="Tell us about your project or how we can help you..." required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </section>

            <!-- Map and Contact Info -->
            <section class="info-section">
                <div class="map-container">
                    <div class="map-placeholder">
                        <div>🗺️ Interactive Map Location</div>
                    </div>
                </div>

                <div class="contact-details">
                    <h3>Contact Information</h3>
                    
                    <div class="contact-item">
                        <div class="contact-icon">📍</div>
                        <div class="contact-info">
                            <h4>Address</h4>
                            <p>123 Business Avenue<br>
                            Suite 100<br>
                            New York, NY 10001</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">📞</div>
                        <div class="contact-info">
                            <h4>Phone</h4>
                            <p>+1 (555) 123-4567<br>
                            +1 (555) 987-6543</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">✉️</div>
                        <div class="contact-info">
                            <h4>Email</h4>
                            <p>info@yourbrand.com<br>
                            support@yourbrand.com</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">🕒</div>
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