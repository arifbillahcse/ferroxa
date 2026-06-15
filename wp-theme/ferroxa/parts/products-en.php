<?php
/**
 * Content partial: products (en). Auto-generated from the static export.
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
                <a href="<?php echo ferroxa_url('home'); ?>">Home</a>
                <span>/</span>
                <span>Our Products</span>
            </nav>
            <h1 class="page-title">Our Products</h1>
            <p class="page-subtitle">Comprehensive range of metals meeting international standards.</p>
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
                <span>Ferrous Metals</span>
            </button>
            <button class="tab-btn" data-tab="non-ferrous">
                <i class="fas fa-atom"></i>
                <span>Non-Ferrous Metals</span>
            </button>
            <button class="tab-btn" data-tab="precious">
                <i class="fas fa-gem"></i>
                <span>Precious Metals</span>
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
                        <h2 class="category-title">Ferrous Metals</h2>
                        <p class="category-description">Iron-based metals with carbon content, known for strength and durability, used in construction, automotive, and industrial sectors.</p>
                        
                        <div class="products-list">
                            <div class="product-item" onclick="window.location.href='product-steel-billets.php'">
                                <div class="product-preview">
                                    <img src="<?php echo ferroxa_asset('assets/images/products/steel-billet.png'); ?>" alt="Steel Billets">
                                </div>
                                <div class="product-details">
                                    <h3>Steel Billets</h3>
                                    <p>High-grade steel billets for construction and manufacturing</p>
                                    <a href="<?php echo ferroxa_url('product-steel-billets'); ?>" class="view-product-btn">
                                        View Product <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="product-item" onclick="window.location.href='product-steel-slabs.php'">
                                <div class="product-preview">
                                    <img src="<?php echo ferroxa_asset('assets/images/products/steel-slabs.png'); ?>" alt="Steel Slabs">
                                </div>
                                <div class="product-details">
                                    <h3>Steel Slabs</h3>
                                    <p>Quality steel slabs for industrial processing</p>
                                    <a href="<?php echo ferroxa_url('product-steel-slabs'); ?>" class="view-product-btn">
                                        View Product <i class="fas fa-arrow-right"></i>
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
                        <h2 class="category-title">Non-Ferrous Metals</h2>
                        <p class="category-description">Mainly copper, zinc, and aluminum — valued for conductivity, corrosion resistance, and versatility across manufacturing and industrial sectors</p>
                        
                        <div class="products-list">
                            <div class="product-item" onclick="window.location.href='product-copper.php'">
                                <div class="product-preview">
                                    <img src="<?php echo ferroxa_asset('assets/images/products/cooper2.jpg'); ?>" alt="Copper">
                                </div>
                                <div class="product-details">
                                    <h3>Copper</h3>
                                    <p>Premium copper for electrical and industrial use</p>
                                    <a href="<?php echo ferroxa_url('product-copper'); ?>" class="view-product-btn">
                                        View Product <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="product-item" onclick="window.location.href='product-zinc.php'">
                                <div class="product-preview">
                                    <img src="<?php echo ferroxa_asset('assets/images/products/zink1.png'); ?>" alt="Zinc">
                                </div>
                                <div class="product-details">
                                    <h3>Zinc</h3>
                                    <p>Pure zinc for galvanizing and alloy production</p>
                                    <a href="<?php echo ferroxa_url('product-zinc'); ?>" class="view-product-btn">
                                        View Product <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="product-item" onclick="window.location.href='product-aluminum.php'">
                                <div class="product-preview">
                                    <img src="<?php echo ferroxa_asset('assets/images/products/aluminum2.webp'); ?>" alt="Aluminum">
                                </div>
                                <div class="product-details">
                                    <h3>Aluminum</h3>
                                    <p>Lightweight aluminum for aerospace and automotive</p>
                                    <a href="<?php echo ferroxa_url('product-aluminum'); ?>" class="view-product-btn">
                                        View Product <i class="fas fa-arrow-right"></i>
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
                        <h2 class="category-title">Precious Metals</h2>
                        <p class="category-description">Dore, bullion gold, and silver — valued for purity, liquidity, and trusted use in investment, jewelry, and industry</p>
                        
                        <div class="products-list">
                            <div class="product-item" onclick="window.location.href='product-gold.php'">
                                <div class="product-preview">
                                    <img src="<?php echo ferroxa_asset('assets/images/products/raw_gold1.jpg'); ?>" alt="Gold">
                                </div>
                                <div class="product-details">
                                    <h3>Non-Manufactured Gold</h3>
                                    <p>Certified raw gold for refineries and investment</p>
                                    <a href="<?php echo ferroxa_url('product-gold'); ?>" class="view-product-btn">
                                        View Product <i class="fas fa-arrow-right"></i>
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
            <h2 class="section-title">Complete Product Range</h2>
            <p class="section-subtitle">Explore our comprehensive selection of metals across all categories</p>
        </div>

        <!-- Ferrous Metals Detailed Section -->
        <div class="product-category-detailed">
            <h3 class="category-main-title">Ferrous Metals</h3>
            
            <!-- Semi-Finished Products -->
            <div class="product-subcategory">
                <h4 class="subcategory-title">Semi-Finished</h4>
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
                <h4 class="subcategory-title">Flat</h4>
                <div class="detailed-products-grid">
                    <div class="detailed-product-item">
                        <div class="detailed-product-image">
                            <img src="<?php echo ferroxa_asset('assets/images/products/slap2.png'); ?>" alt="Hot-Rolled Coil">
                        </div>
                        <div class="detailed-product-info">
                            <h5>Hot-Rolled Coil (HRC)</h5>
                            <p>High-quality hot-rolled steel coils for various applications</p>
                        </div>
                    </div>
                    
                    <div class="detailed-product-item">
                        <div class="detailed-product-image">
                            <img src="<?php echo ferroxa_asset('assets/images/products/slap1.jpg'); ?>" alt="Cold-Rolled Coil">
                        </div>
                        <div class="detailed-product-info">
                            <h5>Cold-Rolled Coil (CRC)</h5>
                            <p>Precision cold-rolled steel coils with superior finish</p>
                        </div>
                    </div>
                    
                    <div class="detailed-product-item">
                        <div class="detailed-product-image">
                            <img src="<?php echo ferroxa_asset('assets/images/products/galvanized-steel-trading-uae.png'); ?>" alt="Galvanized Steel">
                        </div>
                        <div class="detailed-product-info">
                            <h5>Galvanized Steel (GI/GL)</h5>
                            <p>Corrosion-resistant galvanized steel products</p>
                        </div>
                    </div>
                    
                    <div class="detailed-product-item">
                        <div class="detailed-product-image">
                            <img src="<?php echo ferroxa_asset('assets/images/products/heavy-duty-steel-plates-trading-uae.png'); ?>" alt="Plates">
                        </div>
                        <div class="detailed-product-info">
                            <h5>Plates</h5>
                            <p>Heavy-duty steel plates for structural applications</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Long Products -->
            <div class="product-subcategory">
                <h4 class="subcategory-title">Long</h4>
                <div class="detailed-products-grid">
                    <div class="detailed-product-item">
                        <div class="detailed-product-image">
                            <img src="<?php echo ferroxa_asset('assets/images/products/Reinforcement-steel-bars-trading-uae.png'); ?>" alt="Rebar">
                        </div>
                        <div class="detailed-product-info">
                            <h5>Rebar</h5>
                            <p>Reinforcement steel bars for concrete structures</p>
                        </div>
                    </div>
                    
                    <div class="detailed-product-item">
                        <div class="detailed-product-image">
                            <img src="<?php echo ferroxa_asset('assets/images/products/prime-wire-rods-trading-uae.png'); ?>" alt="Wire Rod">
                        </div>
                        <div class="detailed-product-info">
                            <h5>Wire Rod</h5>
                            <p>High-quality wire rods for wire drawing applications</p>
                        </div>
                    </div>
                    
                    <div class="detailed-product-item">
                        <div class="detailed-product-image">
                            <img src="<?php echo ferroxa_asset('assets/images/products/versatile-merchant-bards-steel-trading-uae.png'); ?>" alt="Merchant Bars">
                        </div>
                        <div class="detailed-product-info">
                            <h5>Merchant Bars</h5>
                            <p>Versatile merchant bars for general construction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Non-Ferrous Metals Section -->
        <div class="product-category-detailed">
            <h3 class="category-main-title">Non-Ferrous Metals</h3>
            <div class="detailed-products-grid">
                <div class="detailed-product-item">
                    <div class="detailed-product-image">
                        <img src="<?php echo ferroxa_asset('assets/images/products/cooper2.jpg'); ?>" alt="Copper">
                    </div>
                    <div class="detailed-product-info">
                        <h5>Copper</h5>
                        <p>Premium copper for electrical and industrial use</p>
                    </div>
                </div>
                
                <div class="detailed-product-item">
                    <div class="detailed-product-image">
                        <img src="<?php echo ferroxa_asset('assets/images/products/zink1.png'); ?>" alt="Zinc">
                    </div>
                    <div class="detailed-product-info">
                        <h5>Zinc</h5>
                        <p>Pure zinc for galvanizing and alloy production</p>
                    </div>
                </div>
                
                <div class="detailed-product-item">
                    <div class="detailed-product-image">
                        <img src="<?php echo ferroxa_asset('assets/images/products/aluminum2.webp'); ?>" alt="Aluminum">
                    </div>
                    <div class="detailed-product-info">
                        <h5>Aluminum</h5>
                        <p>Lightweight aluminum for aerospace and automotive</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Precious Metals Section -->
        <div class="product-category-detailed">
            <h3 class="category-main-title">Precious Metals</h3>
            <div class="detailed-products-grid">
                <div class="detailed-product-item">
                    <div class="detailed-product-image">
                        <img src="<?php echo ferroxa_asset('assets/images/products/raw_gold1.jpg'); ?>" alt="Gold">
                    </div>
                    <div class="detailed-product-info">
                        <h5>Gold</h5>
                        <p>Certified raw gold for refineries and investment</p>
                    </div>
                </div>
                
                <div class="detailed-product-item">
                    <div class="detailed-product-image">
                        <img src="<?php echo ferroxa_asset('assets/images/products/raw-silver-trading-uae.png'); ?>" alt="Silver">
                    </div>
                    <div class="detailed-product-info">
                        <h5>Silver</h5>
                        <p>Premium silver for industrial and investment applications</p>
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
            <h2 class="cta-title">Ready to Get Started?</h2>
            <p class="cta-description">Contact us today for competitive pricing and reliable metal trading solutions.</p>
            <a href="<?php echo ferroxa_url('contact'); ?>" class="cta-btn">
                Get Quote                <i class="fas fa-arrow-right"></i>
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
