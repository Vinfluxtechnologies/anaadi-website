<?php /**
 * Template Name: Test Page
 * Description: A custom page template for testing purposes.
 */
get_header(); ?>

<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .form-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .form-header {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }

        .form-header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            font-weight: 300;
        }

        .form-header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .form-content {
            padding: 40px;
        }

        .section {
            margin-bottom: 40px;
            padding: 30px;
            background: #f8f9fa;
            border-radius: 15px;
            border-left: 5px solid #3498db;
        }

        .section-title {
            font-size: 1.5rem;
            color: #2c3e50;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #34495e;
            font-size: 1rem;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: white;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        textarea:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        }

        input[required] {
            border-left: 4px solid #e74c3c;
        }

        input[readonly] {
            background: #f8f9fa;
            cursor: not-allowed;
        }

        .checkbox-group,
        .radio-group {
            max-height: 200px;
            overflow-y: auto;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 15px;
            background: white;
        }

        .checkbox-group::-webkit-scrollbar,
        .radio-group::-webkit-scrollbar {
            width: 8px;
        }

        .checkbox-group::-webkit-scrollbar-track,
        .radio-group::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }

        .checkbox-group::-webkit-scrollbar-thumb,
        .radio-group::-webkit-scrollbar-thumb {
            background: #3498db;
            border-radius: 4px;
        }

        .checkbox-item,
        .radio-item {
            margin-bottom: 12px;
            padding: 10px;
            border-radius: 6px;
            transition: background 0.2s ease;
        }

        .checkbox-item:hover,
        .radio-item:hover {
            background: #f8f9fa;
        }

        .checkbox-item label,
        .radio-item label {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            font-weight: 500;
            margin-bottom: 0;
        }

        input[type="checkbox"],
        input[type="radio"] {
            width: 18px;
            height: 18px;
            accent-color: #3498db;
        }

        .price-section {
            background: #fff3cd;
            border-left-color: #ffc107;
            padding: 20px;
            border-radius: 10px;
            margin-top: 15px;
        }

        .price-section h4 {
            color: #856404;
            margin-bottom: 15px;
            font-size: 1.1rem;
        }

        .consent-section {
            background: #d1ecf1;
            border-left-color: #17a2b8;
            padding: 20px;
            border-radius: 10px;
        }

        .consent-section label {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            cursor: pointer;
            font-weight: 500;
        }

        .consent-section input[type="checkbox"] {
            margin-top: 2px;
        }

        .submit-btn {
            background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
            color: white;
            padding: 15px 40px;
            border: none;
            border-radius: 50px;
            font-size: 1.2rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: block;
            margin: 30px auto 0;
            min-width: 200px;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(46, 204, 113, 0.3);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .required-indicator {
            color: #e74c3c;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .form-content {
                padding: 20px;
            }
            
            .section {
                padding: 20px;
            }
            
            .form-header h1 {
                font-size: 2rem;
            }
        }
    </style>
<div class="form-container">
    <div class="form-header">
        <h1>🏡 Real Estate Inquiry</h1>
        <p>Find your perfect home with us</p>
    </div>
    
    <div class="form-content">
        <form id="realEstateForm">
            <!-- User Verification Section -->
            <div class="section">
                <h2 class="section-title">🔐 User Verification</h2>
                
                <div class="form-group">
                    <label for="client-mobile">Client Mobile Number <span class="required-indicator">*</span></label>
                    <input type="tel" id="client-mobile" name="client-mobile" required>
                </div>
                
                <div class="form-group">
                    <label for="otp-verification">2-Step Verification – OTP to verify contact number</label>
                    <input type="text" id="otp-verification" name="otp-verification" placeholder="Enter OTP">
                </div>
                
                <div class="form-group">
                    <label for="reference-number">Reference Number (Auto-generated)</label>
                    <input type="text" id="reference-number" name="reference-number" value="REF-2025-001" readonly>
                </div>
            </div>

            <!-- Client Information Section -->
            <div class="section">
                <h2 class="section-title">👤 Client Information</h2>
                
                <div class="form-group">
                    <label for="client-name">Client Name <span class="required-indicator">*</span></label>
                    <input type="text" id="client-name" name="client-name" required>
                </div>
                
                <div class="form-group">
                    <label for="client-email">Client Email <span class="required-indicator">*</span></label>
                    <input type="email" id="client-email" name="client-email" required>
                </div>
                
                <div class="form-group">
                    <label for="pan-number">PAN Number</label>
                    <input type="text" id="pan-number" name="pan-number" placeholder="e.g., ABCDE1234F">
                </div>
            </div>

            <!-- Location Preference Section -->
            <div class="section">
                <h2 class="section-title">📍 Location Preference</h2>
                <p style="margin-bottom: 15px; color: #6c757d;">Select one or multiple locations:</p>
                
                <div class="checkbox-group">
                    <div class="checkbox-item">
                        <label>
                            <input type="checkbox" name="location-preference" value="Ghaziabad">
                            Ghaziabad
                        </label>
                    </div>
                    <div class="checkbox-item">
                        <label>
                            <input type="checkbox" name="location-preference" value="NH 24">
                            NH 24
                        </label>
                    </div>
                    <div class="checkbox-item">
                        <label>
                            <input type="checkbox" name="location-preference" value="Raj Nagar Extension">
                            Raj Nagar Extension
                        </label>
                    </div>
                    <div class="checkbox-item">
                        <label>
                            <input type="checkbox" name="location-preference" value="Siddharth Vihar">
                            Siddharth Vihar
                        </label>
                    </div>
                </div>
            </div>

            <!-- Flat Preference Section -->
            <div class="section">
                <h2 class="section-title">🏠 Flat Preference</h2>
                
                <div class="form-group">
                    <label><strong>Preferred Flat Configuration + Super Area (Select One):</strong></label>
                    <div class="radio-group">
                        <div class="radio-item">
                            <label>
                                <input type="radio" name="flat-configuration" value="3BHK + 2 Toilets (1450 – 1500 SqFt)">
                                3BHK + 2 Toilets (1450 – 1500 SqFt)
                            </label>
                        </div>
                        <div class="radio-item">
                            <label>
                                <input type="radio" name="flat-configuration" value="3BHK + 3 Toilets (1600 – 1650 SqFt)">
                                3BHK + 3 Toilets (1600 – 1650 SqFt)
                            </label>
                        </div>
                        <div class="radio-item">
                            <label>
                                <input type="radio" name="flat-configuration" value="3BHK + 3 Toilets + SVT (1800 – 1850 SqFt)">
                                3BHK + 3 Toilets + SVT (Servant Toilet) (1800 – 1850 SqFt)
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Price Budget Sections -->
                <div class="price-section">
                    <h4>If 3BHK + 2T (1450–1500 SqFt):</h4>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <label>
                                <input type="checkbox" name="price-2t" value="₹85 – 90 Lakh">
                                ₹85 – 90 Lakh
                            </label>
                        </div>
                        <div class="checkbox-item">
                            <label>
                                <input type="checkbox" name="price-2t" value="₹115 – 120 Lakh">
                                ₹115 – 120 Lakh
                            </label>
                        </div>
                        <div class="checkbox-item">
                            <label>
                                <input type="checkbox" name="price-2t" value="₹145 – 150 Lakh">
                                ₹145 – 150 Lakh
                            </label>
                        </div>
                    </div>
                </div>

                <div class="price-section">
                    <h4>If 3BHK + 3T (1600–1650 SqFt):</h4>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <label>
                                <input type="checkbox" name="price-3t" value="₹120 – 125 Lakh">
                                ₹120 – 125 Lakh
                            </label>
                        </div>
                        <div class="checkbox-item">
                            <label>
                                <input type="checkbox" name="price-3t" value="₹130 – 135 Lakh">
                                ₹130 – 135 Lakh
                            </label>
                        </div>
                        <div class="checkbox-item">
                            <label>
                                <input type="checkbox" name="price-3t" value="₹140 – 145 Lakh">
                                ₹140 – 145 Lakh
                            </label>
                        </div>
                    </div>
                </div>

                <div class="price-section">
                    <h4>If 3BHK + 3T + SVT (1800–1850 SqFt):</h4>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <label>
                                <input type="checkbox" name="price-3t-svt" value="₹135 – 140 Lakh">
                                ₹135 – 140 Lakh
                            </label>
                        </div>
                        <div class="checkbox-item">
                            <label>
                                <input type="checkbox" name="price-3t-svt" value="₹145 – 150 Lakh">
                                ₹145 – 150 Lakh
                            </label>
                        </div>
                        <div class="checkbox-item">
                            <label>
                                <input type="checkbox" name="price-3t-svt" value="₹155 – 160 Lakh">
                                ₹155 – 160 Lakh
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Requirements Section -->
            <div class="section">
                <h2 class="section-title">🧩 Project Requirements</h2>
                
                <div class="form-group">
                    <label>Main Features You're Looking For in the Project:</label>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <label>
                                <input type="checkbox" name="features" value="Clubhouse">
                                Clubhouse
                            </label>
                        </div>
                        <div class="checkbox-item">
                            <label>
                                <input type="checkbox" name="features" value="Power Backup">
                                Power Backup
                            </label>
                        </div>
                        <div class="checkbox-item">
                            <label>
                                <input type="checkbox" name="features" value="Green Area">
                                Green Area
                            </label>
                        </div>
                        <div class="checkbox-item">
                            <label>
                                <input type="checkbox" name="features" value="Security">
                                Security
                            </label>
                        </div>
                        <div class="checkbox-item">
                            <label>
                                <input type="checkbox" name="features" value="Sports Facilities">
                                Sports Facilities
                            </label>
                        </div>
                        <div class="checkbox-item">
                            <label>
                                <input type="checkbox" name="features" value="Swimming Pool">
                                Swimming Pool
                            </label>
                        </div>
                        <div class="checkbox-item">
                            <label>
                                <input type="checkbox" name="features" value="Parking">
                                Parking
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="features-other">Or enter your own features:</label>
                    <input type="text" id="features-other" name="features-other" placeholder="Custom features you're looking for...">
                </div>
                
                <div class="form-group">
                    <label><strong>Expected Purchase Timeline:</strong></label>
                    <div class="radio-group">
                        <div class="radio-item">
                            <label>
                                <input type="radio" name="purchase-timeline" value="Immediate (0–3 months)">
                                Immediate (0–3 months)
                            </label>
                        </div>
                        <div class="radio-item">
                            <label>
                                <input type="radio" name="purchase-timeline" value="Short-Term (3–6 months)">
                                Short-Term (3–6 months)
                            </label>
                        </div>
                        <div class="radio-item">
                            <label>
                                <input type="radio" name="purchase-timeline" value="Medium-Term (6–12 months)">
                                Medium-Term (6–12 months)
                            </label>
                        </div>
                        <div class="radio-item">
                            <label>
                                <input type="radio" name="purchase-timeline" value="Just Exploring">
                                Just Exploring
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Subscription Consent Section -->
            <div class="section consent-section">
                <h2 class="section-title">📬 Subscription Consent</h2>
                
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="marketing-consent" required>
                        <span>I agree to receive updates, new project alerts, and offers related to upcoming launches via WhatsApp, SMS, or Email. <span class="required-indicator">*</span></span>
                    </label>
                </div>
            </div>

            <button type="submit" class="submit-btn">Submit Application</button>
        </form>
    </div>
</div>

    <script>
        // Auto-generate reference number
        document.getElementById('reference-number').value = 'REF-' + new Date().getFullYear() + '-' + Math.floor(Math.random() * 10000).toString().padStart(4, '0');
        
        // Form submission handler
        document.getElementById('realEstateForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic validation
            const requiredFields = this.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.style.borderColor = '#e74c3c';
                    isValid = false;
                } else {
                    field.style.borderColor = '#e9ecef';
                }
            });
            
            if (isValid) {
                alert('Form submitted successfully! We will contact you soon.');
                // Here you would typically send the data to your server
            } else {
                alert('Please fill in all required fields.');
            }
        });
        
        // Phone number formatting
        document.getElementById('client-mobile').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 10) {
                value = value.substring(0, 10);
            }
            e.target.value = value;
        });
        
        // PAN number formatting
        document.getElementById('pan-number').addEventListener('input', function(e) {
            let value = e.target.value.toUpperCase();
            e.target.value = value;
        });
    </script>

    <?php get_footer(); ?>