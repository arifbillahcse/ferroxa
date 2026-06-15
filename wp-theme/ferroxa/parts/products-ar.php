<?php
/**
 * Content partial: products (ar). Auto-generated from the static export.
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
                <a href="<?php echo ferroxa_url('home'); ?>">الرئيسية</a>
                <span>/</span>
                <span>منتجاتنا</span>
            </nav>
            <h1 class="page-title">منتجاتنا</h1>
            <p class="page-subtitle">مجموعة شاملة من المعادن التي تلبي المعايير الدولية.</p>
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
                <span>المعادن الحديدية</span>
            </button>
            <button class="tab-btn" data-tab="non-ferrous">
                <i class="fas fa-atom"></i>
                <span>المعادن غير الحديدية</span>
            </button>
            <button class="tab-btn" data-tab="precious">
                <i class="fas fa-gem"></i>
                <span>المعادن الثمينة</span>
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
                        <h2 class="category-title">المعادن الحديدية</h2>
                        <p class="category-description">معادن أساسها الحديد تحتوي على الكربون، معروفة بقوتها ومتانتها، تستخدم في قطاعات البناء والسيارات والصناعة.</p>
                        
                        <div class="products-list">
                            <div class="product-item" onclick="window.location.href='product-steel-billets.php'">
                                <div class="product-preview">
                                    <img src="<?php echo ferroxa_asset('assets/images/products/steel-billet.png'); ?>" alt="Steel Billets">
                                </div>
                                <div class="product-details">
                                    <h3>سبائك الصلب</h3>
                                    <p>سبائك صلب عالية الجودة للبناء والتصنيع</p>
                                    <a href="<?php echo ferroxa_url('product-steel-billets'); ?>" class="view-product-btn">
                                        عرض المنتج <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="product-item" onclick="window.location.href='product-steel-slabs.php'">
                                <div class="product-preview">
                                    <img src="<?php echo ferroxa_asset('assets/images/products/steel-slabs.png'); ?>" alt="Steel Slabs">
                                </div>
                                <div class="product-details">
                                    <h3>ألواح الصلب</h3>
                                    <p>ألواح صلب عالية الجودة للمعالجة الصناعية</p>
                                    <a href="<?php echo ferroxa_url('product-steel-slabs'); ?>" class="view-product-btn">
                                        عرض المنتج <i class="fas fa-arrow-right"></i>
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
                        <h2 class="category-title">المعادن غير الحديدية</h2>
                        <p class="category-description">بشكل أساسي النحاس والزنك والألومنيوم - مقدرة للتوصيلية ومقاومة التآكل والتنوع عبر قطاعات التصنيع والصناعة</p>
                        
                        <div class="products-list">
                            <div class="product-item" onclick="window.location.href='product-copper.php'">
                                <div class="product-preview">
                                    <img src="<?php echo ferroxa_asset('assets/images/products/cooper2.jpg'); ?>" alt="Copper">
                                </div>
                                <div class="product-details">
                                    <h3>نحاس</h3>
                                    <p>نحاس ممتاز للاستخدام الكهربائي والصناعي</p>
                                    <a href="<?php echo ferroxa_url('product-copper'); ?>" class="view-product-btn">
                                        عرض المنتج <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="product-item" onclick="window.location.href='product-zinc.php'">
                                <div class="product-preview">
                                    <img src="<?php echo ferroxa_asset('assets/images/products/zink1.png'); ?>" alt="Zinc">
                                </div>
                                <div class="product-details">
                                    <h3>زنك</h3>
                                    <p>زنك نقي للجلفنة وإنتاج السبائك</p>
                                    <a href="<?php echo ferroxa_url('product-zinc'); ?>" class="view-product-btn">
                                        عرض المنتج <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="product-item" onclick="window.location.href='product-aluminum.php'">
                                <div class="product-preview">
                                    <img src="<?php echo ferroxa_asset('assets/images/products/aluminum2.webp'); ?>" alt="Aluminum">
                                </div>
                                <div class="product-details">
                                    <h3>ألومنيوم</h3>
                                    <p>ألومنيوم خفيف للطيران والسيارات</p>
                                    <a href="<?php echo ferroxa_url('product-aluminum'); ?>" class="view-product-btn">
                                        عرض المنتج <i class="fas fa-arrow-right"></i>
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
                        <h2 class="category-title">المعادن الثمينة</h2>
                        <p class="category-description">دوري وسبائك الذهب والفضة - مقدرة للنقاء والسيولة والاستخدام الموثوق في الاستثمار والمجوهرات والصناعة</p>
                        
                        <div class="products-list">
                            <div class="product-item" onclick="window.location.href='product-gold.php'">
                                <div class="product-preview">
                                    <img src="<?php echo ferroxa_asset('assets/images/products/raw_gold1.jpg'); ?>" alt="Gold">
                                </div>
                                <div class="product-details">
                                    <h3>ذهب غير مصنع</h3>
                                    <p>ذهب خام معتمد للمصافي والاستثمار</p>
                                    <a href="<?php echo ferroxa_url('product-gold'); ?>" class="view-product-btn">
                                        عرض المنتج <i class="fas fa-arrow-right"></i>
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
            <h2 class="section-title">مجموعة المنتجات الكاملة</h2>
            <p class="section-subtitle">اكتشف اختيارنا الشامل من المعادن عبر جميع الفئات</p>
        </div>

        <!-- Ferrous Metals Detailed Section -->
        <div class="product-category-detailed">
            <h3 class="category-main-title">المعادن الحديدية</h3>
            
            <!-- Semi-Finished Products -->
            <div class="product-subcategory">
                <h4 class="subcategory-title">شبه منتهية</h4>
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
                <h4 class="subcategory-title">مسطحة</h4>
                <div class="detailed-products-grid">
                    <div class="detailed-product-item">
                        <div class="detailed-product-image">
                            <img src="<?php echo ferroxa_asset('assets/images/products/slap2.png'); ?>" alt="Hot-Rolled Coil">
                        </div>
                        <div class="detailed-product-info">
                            <h5>لفائف مدرفلة على الساخن</h5>
                            <p>لفائف صلب مدرفلة على الساخن عالية الجودة لتطبيقات متنوعة</p>
                        </div>
                    </div>
                    
                    <div class="detailed-product-item">
                        <div class="detailed-product-image">
                            <img src="<?php echo ferroxa_asset('assets/images/products/slap1.jpg'); ?>" alt="Cold-Rolled Coil">
                        </div>
                        <div class="detailed-product-info">
                            <h5>لفائف مدرفلة على البارد</h5>
                            <p>لفائف صلب مدرفلة على البارد بدقة مع تشطيب متفوق</p>
                        </div>
                    </div>
                    
                    <div class="detailed-product-item">
                        <div class="detailed-product-image">
                            <img src="<?php echo ferroxa_asset('assets/images/products/galvanized-steel-trading-uae.png'); ?>" alt="Galvanized Steel">
                        </div>
                        <div class="detailed-product-info">
                            <h5>صلب مجلفن</h5>
                            <p>منتجات صلب مجلفن مقاومة للتآكل</p>
                        </div>
                    </div>
                    
                    <div class="detailed-product-item">
                        <div class="detailed-product-image">
                            <img src="<?php echo ferroxa_asset('assets/images/products/heavy-duty-steel-plates-trading-uae.png'); ?>" alt="Plates">
                        </div>
                        <div class="detailed-product-info">
                            <h5>ألواح</h5>
                            <p>ألواح صلب للخدمة الشاقة للتطبيقات الهيكلية</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Long Products -->
            <div class="product-subcategory">
                <h4 class="subcategory-title">طويلة</h4>
                <div class="detailed-products-grid">
                    <div class="detailed-product-item">
                        <div class="detailed-product-image">
                            <img src="<?php echo ferroxa_asset('assets/images/products/Reinforcement-steel-bars-trading-uae.png'); ?>" alt="Rebar">
                        </div>
                        <div class="detailed-product-info">
                            <h5>حديد التسليح</h5>
                            <p>قضبان صلب تسليح للهياكل الخرسانية</p>
                        </div>
                    </div>
                    
                    <div class="detailed-product-item">
                        <div class="detailed-product-image">
                            <img src="<?php echo ferroxa_asset('assets/images/products/prime-wire-rods-trading-uae.png'); ?>" alt="Wire Rod">
                        </div>
                        <div class="detailed-product-info">
                            <h5>قضيب سلكي</h5>
                            <p>قضبان سلكية عالية الجودة لتطبيقات سحب الأسلاك</p>
                        </div>
                    </div>
                    
                    <div class="detailed-product-item">
                        <div class="detailed-product-image">
                            <img src="<?php echo ferroxa_asset('assets/images/products/versatile-merchant-bards-steel-trading-uae.png'); ?>" alt="Merchant Bars">
                        </div>
                        <div class="detailed-product-info">
                            <h5>قضبان تجارية</h5>
                            <p>قضبان تجارية متعددة الاستخدامات للبناء العام</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Non-Ferrous Metals Section -->
        <div class="product-category-detailed">
            <h3 class="category-main-title">المعادن غير الحديدية</h3>
            <div class="detailed-products-grid">
                <div class="detailed-product-item">
                    <div class="detailed-product-image">
                        <img src="<?php echo ferroxa_asset('assets/images/products/cooper2.jpg'); ?>" alt="Copper">
                    </div>
                    <div class="detailed-product-info">
                        <h5>نحاس</h5>
                        <p>نحاس ممتاز للاستخدام الكهربائي والصناعي</p>
                    </div>
                </div>
                
                <div class="detailed-product-item">
                    <div class="detailed-product-image">
                        <img src="<?php echo ferroxa_asset('assets/images/products/zink1.png'); ?>" alt="Zinc">
                    </div>
                    <div class="detailed-product-info">
                        <h5>زنك</h5>
                        <p>زنك نقي للجلفنة وإنتاج السبائك</p>
                    </div>
                </div>
                
                <div class="detailed-product-item">
                    <div class="detailed-product-image">
                        <img src="<?php echo ferroxa_asset('assets/images/products/aluminum2.webp'); ?>" alt="Aluminum">
                    </div>
                    <div class="detailed-product-info">
                        <h5>ألومنيوم</h5>
                        <p>ألومنيوم خفيف للطيران والسيارات</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Precious Metals Section -->
        <div class="product-category-detailed">
            <h3 class="category-main-title">المعادن الثمينة</h3>
            <div class="detailed-products-grid">
                <div class="detailed-product-item">
                    <div class="detailed-product-image">
                        <img src="<?php echo ferroxa_asset('assets/images/products/raw_gold1.jpg'); ?>" alt="Gold">
                    </div>
                    <div class="detailed-product-info">
                        <h5>ذهب</h5>
                        <p>ذهب خام معتمد للمصافي والاستثمار</p>
                    </div>
                </div>
                
                <div class="detailed-product-item">
                    <div class="detailed-product-image">
                        <img src="<?php echo ferroxa_asset('assets/images/products/raw-silver-trading-uae.png'); ?>" alt="Silver">
                    </div>
                    <div class="detailed-product-info">
                        <h5>فضة</h5>
                        <p>فضة ممتازة للتطبيقات الصناعية والاستثمارية</p>
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
            <h2 class="cta-title">هل أنت مستعد للبدء؟</h2>
            <p class="cta-description">اتصل بنا اليوم للحصول على أسعار تنافسية وحلول موثوقة لتجارة المعادن.</p>
            <a href="<?php echo ferroxa_url('contact'); ?>" class="cta-btn">
                احصل على عرض أسعار                <i class="fas fa-arrow-right"></i>
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
