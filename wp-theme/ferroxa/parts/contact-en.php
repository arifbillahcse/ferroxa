<?php
/**
 * Content partial: contact (en). Auto-generated from the static export.
 *
 * @package Ferroxa
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- Page Hero Section -->
<section class="page-hero">
    <div class="page-hero-bg">
        <img src="<?php echo ferroxa_asset('assets/images/metal-trading-middle-east.png'); ?>" alt="Contact Ferroxa" class="hero-bg-img">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container">
        <div class="page-hero-content animate-element" data-animation="fadeInUp">
            <nav class="breadcrumb">
                <a href="<?php echo ferroxa_url('home'); ?>">Home</a>
                <span class="breadcrumb-separator">/</span>
                <span class="breadcrumb-current">Contact</span>
            </nav>
            <h1 class="page-hero-title">
                Get in Touch            </h1>
            <p class="page-hero-subtitle">
                Get in touch for any product requirements—our team will provide customized solutions tailored to your needs.            </p>
        </div>
    </div>
</section>

<!-- Contact Information Section -->
<section class="contact-info-section">
    <div class="container">
        <div class="contact-info-grid">

            <div class="contact-card animate-element" data-animation="fadeInUp">
                <div class="contact-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <h3 class="contact-title">
                    Call Us                </h3>
                <div class="contact-details">
                    <a href="tel:+6568906800" class="contact-link">
                        +65 6890 6800                    </a>
                </div>
            </div>
            
            <div class="contact-card animate-element" data-animation="fadeInUp">
                <div class="contact-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3 class="contact-title">
                    Email Us                </h3>
                <div class="contact-details">
                    <a href="mailto:sales@ferroxa.com" class="contact-link">
                        sales@ferroxa.com                    </a>
                    <a href="mailto:director@ferroxa.com" class="contact-link">
                        director@ferroxa.com                    </a>
                </div>
            </div>

            <div class="contact-card animate-element" data-animation="fadeInUp">
                <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3 class="contact-title">
                    Our Office                </h3>
                <div class="contact-details">
                    <span>38 Robinson Road, #26-01, Oxley Tower, Singapore 068906</span>
                </div>
            </div>

            <div class="contact-card animate-element" data-animation="fadeInUp">
                <div class="contact-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 class="contact-title">
                    Business Hours                </h3>
                <div class="contact-details">
                    <p style="color: black;">Monday - Friday: 9:00 AM - 6:00 PM (SGT)</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form & Map Section -->
<section class="contact-form-section">
    <div class="container">
        <div class="contact-form-grid">
            <div class="contact-form-wrapper animate-element" data-animation="fadeInLeft">
                <div class="form-header">
                    <h2 class="form-title">
                        Send us a Message                    </h2>
                    <p class="form-subtitle">
                        Fill out the form and we'll get back to you soon to discuss your needs.                    </p>
                </div>
                
                <form class="enhanced-contact-form" id="contact-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name" class="form-label">
                                Full Name *                            </label>
                            <input type="text" id="name" name="name" class="form-input" required 
                                   placeholder="Enter your full name">
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">
                                Email Address *                            </label>
                            <input type="email" id="email" name="email" class="form-input" required
                                   placeholder="example@company.com">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone" class="form-label">
                                Phone Number                            </label>
                            <input type="tel" id="phone" name="phone" class="form-input"
                                   placeholder="+65 XXXX XXXX">
                        </div>
                        <div class="form-group">
                            <label for="company" class="form-label">
                                Company                            </label>
                            <input type="text" id="company" name="company" class="form-input"
                                   placeholder="Company name">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="interest" class="form-label">
                            Product Interest                        </label>
                        <select id="interest" name="interest" class="form-select">
                            <option value="">Select a product</option>
                            <option value="steel_billets">Steel Billets</option>
                            <option value="steel_slabs">Steel Slabs</option>
                            <option value="copper">Copper</option>
                            <option value="zinc">Zinc</option>
                            <option value="aluminum">Aluminum</option>
                            <option value="gold">Gold</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject" class="form-label">
                            Subject *                        </label>
                        <input type="text" id="subject" name="subject" class="form-input" required
                               placeholder="Subject of your message">
                    </div>
                    
                    <div class="form-group">
                        <label for="message" class="form-label">
                            Message *                        </label>
                        <textarea id="message" name="message" class="form-textarea" rows="6" required
                                  placeholder="Tell us about your requirements, quantities needed..."></textarea>
                    </div>
                    
                    <button type="submit" class="enhanced-form-submit">
                        <span>
                            Send Message                        </span>
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
            
            <div class="contact-map-wrapper animate-element" data-animation="fadeInRight">
                <div class="map-header">
                    <h3 class="map-title">
                        Our Singapore Office                    </h3>
                    <p class="map-description">
                        Visit us at our Office in Singapore                    </p>
                </div>

                <div class="contact-map">
                    <iframe src="https://www.google.com/maps?q=38+Robinson+Road,+%2326-01+Oxley+Tower,+Singapore+068906&output=embed"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                
                <div class="location-details">
                    <div class="detail-item">
                        <i class="fas fa-building"></i>
                        <span>38 Robinson Road, #26-01, Oxley Tower, Singapore 068906</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
