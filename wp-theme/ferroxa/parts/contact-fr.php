<?php
/**
 * Content partial: contact (fr). Auto-generated from the static export.
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
                <a href="<?php echo ferroxa_url('home'); ?>">Accueil</a>
                <span class="breadcrumb-separator">/</span>
                <span class="breadcrumb-current">Contact</span>
            </nav>
            <h1 class="page-hero-title">
                Contactez-nous            </h1>
            <p class="page-hero-subtitle">
                Contactez-nous pour tous besoins de produits—notre équipe fournira des solutions personnalisées adaptées à vos besoins.            </p>
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
                    Appelez-Nous                </h3>
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
                    Écrivez-Nous                </h3>
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
                    Notre Bureau                </h3>
                <div class="contact-details">
                    <span>38 Robinson Road, #26-01, Oxley Tower, Singapore 068906</span>
                </div>
            </div>

            <div class="contact-card animate-element" data-animation="fadeInUp">
                <div class="contact-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 class="contact-title">
                    Heures d'Ouverture                </h3>
                <div class="contact-details">
                    <p style="color: black;">Lundi - Vendredi: 9h00 - 18h00 (SGT)</p>
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
                        Envoyez-nous un Message                    </h2>
                    <p class="form-subtitle">
                        Remplissez le formulaire et nous vous contacterons bientôt pour discuter de vos besoins.                    </p>
                </div>
                
                <form class="enhanced-contact-form" id="contact-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name" class="form-label">
                                Nom Complet *                            </label>
                            <input type="text" id="name" name="name" class="form-input" required 
                                   placeholder="Entrez votre nom complet">
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">
                                E-mail *                            </label>
                            <input type="email" id="email" name="email" class="form-input" required
                                   placeholder="example@company.com">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone" class="form-label">
                                Téléphone                            </label>
                            <input type="tel" id="phone" name="phone" class="form-input"
                                   placeholder="+971 XX XXX XXXX">
                        </div>
                        <div class="form-group">
                            <label for="company" class="form-label">
                                Entreprise                            </label>
                            <input type="text" id="company" name="company" class="form-input"
                                   placeholder="Nom de l'entreprise">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="interest" class="form-label">
                            Produit d'Intérêt                        </label>
                        <select id="interest" name="interest" class="form-select">
                            <option value="">Sélectionner un produit</option>
                            <option value="steel_billets">Billettes d'Acier</option>
                            <option value="steel_slabs">Tôles d'Acier</option>
                            <option value="copper">Cuivre</option>
                            <option value="zinc">Zinc</option>
                            <option value="aluminum">Aluminium</option>
                            <option value="gold">Or</option>
                            <option value="other">Autre</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject" class="form-label">
                            Sujet *                        </label>
                        <input type="text" id="subject" name="subject" class="form-input" required
                               placeholder="Sujet de votre message">
                    </div>
                    
                    <div class="form-group">
                        <label for="message" class="form-label">
                            Message *                        </label>
                        <textarea id="message" name="message" class="form-textarea" rows="6" required
                                  placeholder="Dites-nous vos exigences et les quantités nécessaires..."></textarea>
                    </div>
                    
                    <button type="submit" class="enhanced-form-submit">
                        <span>
                            Envoyer le Message                        </span>
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
            
            <div class="contact-map-wrapper animate-element" data-animation="fadeInRight">
                <div class="map-header">
                    <h3 class="map-title">
                        Notre Emplacement à Dubaï                    </h3>
                    <p class="map-description">
                        Visitez-nous à notre Bureau social à Dubaï                    </p>
                </div>
                
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.7142627217437!2d55.14127031501157!3d25.230884783851468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f15c38a1e0101%3A0x1d1d2a1b3d4e5f6a!2sJumeirah%20Lakes%20Towers%2C%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sus!4v1234567890124!5m2!1sen!2sus" 
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
