<?php
/**
 * Content partial: products (fr). Auto-generated from the static export.
 *
 * @package Ferroxa
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="hero-content">
            <nav class="breadcrumb">
                <a href="<?php echo ferroxa_url('home'); ?>">Accueil</a>
                <span>/</span>
                <span>Nos Produits</span>
            </nav>
            <h1 class="page-title">Nos Produits</h1>
            <p class="page-subtitle">Gamme complète de métaux répondant aux normes internationales.</p>
        </div>
    </div>
</section>

<!-- Products Tabbed Section -->
<section class="products-tabbed-section">
    <div class="container">
        <!-- Tab Navigation -->
        <div class="products-tabs-navigation">
            <button class="tab-btn active" data-tab="ferrous">
                <i class="fas fa-industry"></i>
                <span>Métaux Ferreux</span>
            </button>
            <button class="tab-btn" data-tab="non-ferrous">
                <i class="fas fa-atom"></i>
                <span>Métaux Non-Ferreux</span>
            </button>
            <button class="tab-btn" data-tab="precious">
                <i class="fas fa-gem"></i>
                <span>Métaux Précieux</span>
            </button>
        </div>
        
        <!-- Tab Content -->
        <div class="products-tabs-content">
            <!-- Ferrous Metals Tab -->
            <div class="tab-panel active" id="ferrous">
                <div class="tab-content-wrapper">
                    <div class="tab-image">
                        <img src="<?php echo ferroxa_asset('assets/images/products/steel-billet.png'); ?>" alt="Ferrous Metals">
                    </div>
                    <div class="tab-info">
                        <h2 class="category-title">Métaux Ferreux</h2>
                        <p class="category-description">Métaux à base de fer avec teneur en carbone, connus pour leur résistance et durabilité, utilisés dans les secteurs de la construction, automobile et industriel.</p>
                        
                        <div class="products-list">
                            <div class="product-item" onclick="window.location.href='product-steel-billets.php'">
                                <div class="product-preview">
                                    <img src="<?php echo ferroxa_asset('assets/images/products/steel-billet.png'); ?>" alt="Steel Billets">
                                </div>
                                <div class="product-details">
                                    <h3>Billettes d'Acier</h3>
                                    <p>Billettes d'acier de haute qualité pour la construction et la fabrication</p>
                                    <a href="<?php echo ferroxa_url('product-steel-billets'); ?>" class="view-product-btn">
                                        Voir le Produit <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="product-item" onclick="window.location.href='product-steel-slabs.php'">
                                <div class="product-preview">
                                    <img src="<?php echo ferroxa_asset('assets/images/products/steel-slabs.png'); ?>" alt="Steel Slabs">
                                </div>
                                <div class="product-details">
                                    <h3>Brammes d'Acier</h3>
                                    <p>Brammes d'acier de qualité pour le traitement industriel</p>
                                    <a href="<?php echo ferroxa_url('product-steel-slabs'); ?>" class="view-product-btn">
                                        Voir le Produit <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Non-Ferrous Metals Tab -->
            <div class="tab-panel" id="non-ferrous">
                <div class="tab-content-wrapper">
                    <div class="tab-image">
                        <img src="<?php echo ferroxa_asset('assets/images/products/cooper2.jpg'); ?>" alt="Non-Ferrous Metals">
                    </div>
                    <div class="tab-info">
                        <h2 class="category-title">Métaux Non-Ferreux</h2>
                        <p class="category-description">Principalement cuivre, zinc et aluminium — valorisés pour la conductivité, la résistance à la corrosion et la polyvalence dans les secteurs manufacturiers et industriels</p>
                        
                        <div class="products-list">
                            <div class="product-item" onclick="window.location.href='product-copper.php'">
                                <div class="product-preview">
                                    <img src="<?php echo ferroxa_asset('assets/images/products/cooper2.jpg'); ?>" alt="Copper">
                                </div>
                                <div class="product-details">
                                    <h3>Cuivre</h3>
                                    <p>Cuivre de première qualité pour usage électrique et industriel</p>
                                    <a href="<?php echo ferroxa_url('product-copper'); ?>" class="view-product-btn">
                                        Voir le Produit <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="product-item" onclick="window.location.href='product-zinc.php'">
                                <div class="product-preview">
                                    <img src="<?php echo ferroxa_asset('assets/images/products/zink1.png'); ?>" alt="Zinc">
                                </div>
                                <div class="product-details">
                                    <h3>Zinc</h3>
                                    <p>Zinc pur pour galvanisation et production d'alliages</p>
                                    <a href="<?php echo ferroxa_url('product-zinc'); ?>" class="view-product-btn">
                                        Voir le Produit <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="product-item" onclick="window.location.href='product-aluminum.php'">
                                <div class="product-preview">
                                    <img src="<?php echo ferroxa_asset('assets/images/products/aluminum2.webp'); ?>" alt="Aluminum">
                                </div>
                                <div class="product-details">
                                    <h3>Aluminium</h3>
                                    <p>Aluminium léger pour l'aérospatiale et l'automobile</p>
                                    <a href="<?php echo ferroxa_url('product-aluminum'); ?>" class="view-product-btn">
                                        Voir le Produit <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Precious Metals Tab -->
            <div class="tab-panel" id="precious">
                <div class="tab-content-wrapper">
                    <div class="tab-image">
                        <img src="<?php echo ferroxa_asset('assets/images/products/raw_gold1.jpg'); ?>" alt="Precious Metals">
                    </div>
                    <div class="tab-info">
                        <h2 class="category-title">Métaux Précieux</h2>
                        <p class="category-description">Doré, lingots d'or et argent — valorisés pour la pureté, la liquidité et l'utilisation fiable dans l'investissement, la bijouterie et l'industrie</p>
                        
                        <div class="products-list">
                            <div class="product-item" onclick="window.location.href='product-gold.php'">
                                <div class="product-preview">
                                    <img src="<?php echo ferroxa_asset('assets/images/products/raw_gold1.jpg'); ?>" alt="Gold">
                                </div>
                                <div class="product-details">
                                    <h3>Or Non-Manufacturé</h3>
                                    <p>Or brut certifié pour les raffineries et l'investissement</p>
                                    <a href="<?php echo ferroxa_url('product-gold'); ?>" class="view-product-btn">
                                        Voir le Produit <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detailed Product Categories Section -->
<section class="detailed-products-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Gamme Complète de Produits</h2>
            <p class="section-subtitle">Explorez notre sélection complète de métaux dans toutes les catégories</p>
        </div>

        <!-- Ferrous Metals Detailed Section -->
        <div class="product-category-detailed">
            <h3 class="category-main-title">Métaux Ferreux</h3>
            
            <!-- Semi-Finished Products -->
            <div class="product-subcategory">
                <h4 class="subcategory-title">Semi-Finis</h4>
                <div class="detailed-products-grid">
                    <div class="detailed-product-item">
                        <div class="detailed-product-image">
                            <img src="<?php echo ferroxa_asset('assets/images/products/steel-billet.png'); ?>" alt="Steel Billets">
                        </div>
                        <div class="detailed-product-info">
                            <h5>Steel Billets</h5>
                            <p>High-grade steel billets for construction and manufacturing</p>
                        </div>
                    </div>
                    
                    <div class="detailed-product-item">
                        <div class="detailed-product-image">
                            <img src="<?php echo ferroxa_asset('assets/images/products/steel-slabs.png'); ?>" alt="Steel Slabs">
                        </div>
                        <div class="detailed-product-info">
                            <h5>Steel Slabs</h5>
                            <p>Quality steel slabs for industrial processing</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Flat Products -->
            <div class="product-subcategory">
                <h4 class="subcategory-title">Plats</h4>
                <div class="detailed-products-grid">
                    <div class="detailed-product-item">
                        <div class="detailed-product-image">
                            <img src="<?php echo ferroxa_asset('assets/images/products/slap2.png'); ?>" alt="Hot-Rolled Coil">
                        </div>
                        <div class="detailed-product-info">
                            <h5>Bobines Laminées à Chaud (HRC)</h5>
                            <p>Bobines d'acier laminées à chaud de haute qualité pour diverses applications</p>
                        </div>
                    </div>
                    
                    <div class="detailed-product-item">
                        <div class="detailed-product-image">
                            <img src="<?php echo ferroxa_asset('assets/images/products/slap1.jpg'); ?>" alt="Cold-Rolled Coil">
                        </div>
                        <div class="detailed-product-info">
                            <h5>Bobines Laminées à Froid (CRC)</h5>
                            <p>Bobines d'acier laminées à froid de précision avec finition supérieure</p>
                        </div>
                    </div>
                    
                    <div class="detailed-product-item">
                        <div class="detailed-product-image">
                            <img src="<?php echo ferroxa_asset('assets/images/products/galvanized-steel-trading-uae.png'); ?>" alt="Galvanized Steel">
                        </div>
                        <div class="detailed-product-info">
                            <h5>Acier Galvanisé (GI/GL)</h5>
                            <p>Produits en acier galvanisé résistant à la corrosion</p>
                        </div>
                    </div>
                    
                    <div class="detailed-product-item">
                        <div class="detailed-product-image">
                            <img src="<?php echo ferroxa_asset('assets/images/products/heavy-duty-steel-plates-trading-uae.png'); ?>" alt="Plates">
                        </div>
                        <div class="detailed-product-info">
                            <h5>Plaques</h5>
                            <p>Plaques d'acier robustes pour applications structurelles</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Long Products -->
            <div class="product-subcategory">
                <h4 class="subcategory-title">Longs</h4>
                <div class="detailed-products-grid">
                    <div class="detailed-product-item">
                        <div class="detailed-product-image">
                            <img src="<?php echo ferroxa_asset('assets/images/products/Reinforcement-steel-bars-trading-uae.png'); ?>" alt="Rebar">
                        </div>
                        <div class="detailed-product-info">
                            <h5>Barres d'Armature</h5>
                            <p>Barres d'acier d'armature pour structures en béton</p>
                        </div>
                    </div>
                    
                    <div class="detailed-product-item">
                        <div class="detailed-product-image">
                            <img src="<?php echo ferroxa_asset('assets/images/products/prime-wire-rods-trading-uae.png'); ?>" alt="Wire Rod">
                        </div>
                        <div class="detailed-product-info">
                            <h5>Fil Machine</h5>
                            <p>Fils machine de haute qualité pour applications de tréfilage</p>
                        </div>
                    </div>
                    
                    <div class="detailed-product-item">
                        <div class="detailed-product-image">
                            <img src="<?php echo ferroxa_asset('assets/images/products/versatile-merchant-bards-steel-trading-uae.png'); ?>" alt="Merchant Bars">
                        </div>
                        <div class="detailed-product-info">
                            <h5>Barres Marchandes</h5>
                            <p>Barres marchandes polyvalentes pour construction générale</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Non-Ferrous Metals Section -->
        <div class="product-category-detailed">
            <h3 class="category-main-title">Métaux Non-Ferreux</h3>
            <div class="detailed-products-grid">
                <div class="detailed-product-item">
                    <div class="detailed-product-image">
                        <img src="<?php echo ferroxa_asset('assets/images/products/cooper2.jpg'); ?>" alt="Copper">
                    </div>
                    <div class="detailed-product-info">
                        <h5>Cuivre</h5>
                        <p>Cuivre de première qualité pour usage électrique et industriel</p>
                    </div>
                </div>
                
                <div class="detailed-product-item">
                    <div class="detailed-product-image">
                        <img src="<?php echo ferroxa_asset('assets/images/products/zink1.png'); ?>" alt="Zinc">
                    </div>
                    <div class="detailed-product-info">
                        <h5>Zinc</h5>
                        <p>Zinc pur pour galvanisation et production d'alliages</p>
                    </div>
                </div>
                
                <div class="detailed-product-item">
                    <div class="detailed-product-image">
                        <img src="<?php echo ferroxa_asset('assets/images/products/aluminum2.webp'); ?>" alt="Aluminum">
                    </div>
                    <div class="detailed-product-info">
                        <h5>Aluminium</h5>
                        <p>Aluminium léger pour l'aérospatiale et l'automobile</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Precious Metals Section -->
        <div class="product-category-detailed">
            <h3 class="category-main-title">Métaux Précieux</h3>
            <div class="detailed-products-grid">
                <div class="detailed-product-item">
                    <div class="detailed-product-image">
                        <img src="<?php echo ferroxa_asset('assets/images/products/raw_gold1.jpg'); ?>" alt="Gold">
                    </div>
                    <div class="detailed-product-info">
                        <h5>Or</h5>
                        <p>Or brut certifié pour les raffineries et l'investissement</p>
                    </div>
                </div>
                
                <div class="detailed-product-item">
                    <div class="detailed-product-image">
                        <img src="<?php echo ferroxa_asset('assets/images/products/raw-silver-trading-uae.png'); ?>" alt="Silver">
                    </div>
                    <div class="detailed-product-info">
                        <h5>Argent</h5>
                        <p>Argent de première qualité pour applications industrielles et d'investissement</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Prêt à Commencer?</h2>
            <p class="cta-description">Contactez-nous aujourd'hui pour des prix compétitifs et des solutions fiables de commerce de métaux.</p>
            <a href="<?php echo ferroxa_url('contact'); ?>" class="cta-btn">
                Obtenir un Devis                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<script>
// Products Tabs Functionality
document.addEventListener('DOMContentLoaded', function() {
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabPanels = document.querySelectorAll('.tab-panel');
    
    function switchTab(targetTab) {
        // Remove active class from all buttons and panels
        tabButtons.forEach(btn => btn.classList.remove('active'));
        tabPanels.forEach(panel => panel.classList.remove('active'));
        
        // Add active class to clicked button
        const activeButton = document.querySelector(`[data-tab="${targetTab}"]`);
        const activePanel = document.getElementById(targetTab);
        
        if (activeButton && activePanel) {
            activeButton.classList.add('active');
            activePanel.classList.add('active');
        }
    }
    
    // Add click event listeners to tab buttons
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');
            switchTab(targetTab);
        });
    });
    
    // Keyboard navigation
    tabButtons.forEach((button, index) => {
        button.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowLeft' || e.key === 'ArrowRight') {
                e.preventDefault();
                const nextIndex = e.key === 'ArrowRight' 
                    ? (index + 1) % tabButtons.length 
                    : (index - 1 + tabButtons.length) % tabButtons.length;
                
                tabButtons[nextIndex].focus();
                const targetTab = tabButtons[nextIndex].getAttribute('data-tab');
                switchTab(targetTab);
            }
        });
    });
});
</script>
