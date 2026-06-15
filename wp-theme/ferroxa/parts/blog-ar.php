<?php
/**
 * Content partial: blog (ar). Auto-generated from the static export.
 *
 * @package Ferroxa
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- Blog Hero Section -->
<section class="blog-hero">
    <div class="container">
        <div class="blog-hero-content">
            <h1 class="blog-hero-title">
                آخر الأخبار والرؤى            </h1>
            <p class="blog-hero-subtitle">
                ابق على اطلاع بأحدث الاتجاهات والتطورات في تجارة المعادن            </p>
            <div class="blog-search">
                <form action="<?php echo ferroxa_url('blog'); ?>" method="GET" class="search-form">
                    <input type="text" name="search" placeholder="البحث في المقالات..." class="search-input">
                    <button type="submit" class="search-btn">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Blog Categories -->
<section class="blog-categories">
    <div class="container">
        <div class="categories-wrapper">
            <button class="category-btn active" data-category="all">
                جميع المشاركات            </button>
            <button class="category-btn" data-category="market-analysis">
                تحليل السوق            </button>
            <button class="category-btn" data-category="industry-news">
                أخبار الصناعة            </button>
            <button class="category-btn" data-category="trading-tips">
                نصائح التداول            </button>
            <button class="category-btn" data-category="sustainability">
                الاستدامة            </button>
            <button class="category-btn" data-category="technology">
                التكنولوجيا            </button>
        </div>
    </div>
</section>

<!-- Blog Grid -->
<section class="blog-grid-section">
    <div class="container">
        <div class="blog-grid">
            <!-- Featured Post -->
            <article class="blog-card featured">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1590073242678-70ee3fc28e8e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Featured Post">
                    <span class="blog-category">تحليل السوق</span>
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span class="blog-date">
                            <i class="far fa-calendar"></i>
                            June 15, 2026                        </span>
                        <span class="blog-author">
                            <i class="far fa-user"></i>
                            جون دو                        </span>
                        <span class="blog-read-time">
                            <i class="far fa-clock"></i>
                            5 دقائق قراءة                        </span>
                    </div>
                    <h2 class="blog-title">
                        <a href="<?php echo ferroxa_url('blog'); ?>">اتجاهات سوق النحاس 2024</a>
                    </h2>
                    <p class="blog-excerpt">
                        تحليل متعمق لديناميكيات السوق العالمية للنحاس واضطرابات سلسلة التوريد وتوقعات الأسعار للعام المقبل.                    </p>
                    <a href="<?php echo ferroxa_url('blog'); ?>" class="blog-read-more">
                        اقرأ المقال كاملاً                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <!-- Regular Posts -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Blog Post">
                    <span class="blog-category">أخبار الصناعة</span>
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span class="blog-date">
                            <i class="far fa-calendar"></i>
                            June 13, 2026                        </span>
                        <span class="blog-author">
                            <i class="far fa-user"></i>
                            سارة سميث                        </span>
                    </div>
                    <h3 class="blog-title">
                        <a href="<?php echo ferroxa_url('blog'); ?>">إنتاج الألومنيوم يصل إلى معلم جديد</a>
                    </h3>
                    <p class="blog-excerpt">
                        وصل الإنتاج العالمي للألومنيوم إلى أعلى مستوياته على الإطلاق، مدفوعاً بزيادة الطلب في قطاعي السيارات والطيران.                    </p>
                    <a href="<?php echo ferroxa_url('blog'); ?>" class="blog-read-more">
                        اقرأ المزيد                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <article class="blog-card">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1624365168968-f281d12b8e93?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Blog Post">
                    <span class="blog-category">الاستدامة</span>
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span class="blog-date">
                            <i class="far fa-calendar"></i>
                            June 10, 2026                        </span>
                        <span class="blog-author">
                            <i class="far fa-user"></i>
                            مايكل تشين                        </span>
                    </div>
                    <h3 class="blog-title">
                        <a href="<?php echo ferroxa_url('blog'); ?>">ثورة المعادن الخضراء</a>
                    </h3>
                    <p class="blog-excerpt">
                        كيف تعيد ممارسات التعدين المستدامة تشكيل صناعة المعادن وتخلق فرصاً جديدة للتجار.                    </p>
                    <a href="<?php echo ferroxa_url('blog'); ?>" class="blog-read-more">
                        اقرأ المزيد                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <article class="blog-card">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1611080626919-7cf5a9dbab5b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Blog Post">
                    <span class="blog-category">نصائح التداول</span>
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span class="blog-date">
                            <i class="far fa-calendar"></i>
                            June 08, 2026                        </span>
                        <span class="blog-author">
                            <i class="far fa-user"></i>
                            إيما ويلسون                        </span>
                    </div>
                    <h3 class="blog-title">
                        <a href="<?php echo ferroxa_url('blog'); ?>">دليل الاستثمار في المعادن الثمينة</a>
                    </h3>
                    <p class="blog-excerpt">
                        رؤى استراتيجية حول الاستثمار في المعادن الثمينة وتنويع المحافظ وتوقيت السوق للحصول على أفضل عوائد.                    </p>
                    <a href="<?php echo ferroxa_url('blog'); ?>" class="blog-read-more">
                        اقرأ المزيد                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <article class="blog-card">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1563986768494-4dee2763ff3f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Blog Post">
                    <span class="blog-category">التكنولوجيا</span>
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span class="blog-date">
                            <i class="far fa-calendar"></i>
                            June 05, 2026                        </span>
                        <span class="blog-author">
                            <i class="far fa-user"></i>
                            ديفيد لي                        </span>
                    </div>
                    <h3 class="blog-title">
                        <a href="<?php echo ferroxa_url('blog'); ?>">البلوك تشين في تجارة المعادن</a>
                    </h3>
                    <p class="blog-excerpt">
                        استكشاف كيف تحدث تقنية البلوك تشين ثورة في الشفافية والكفاءة في تجارة السلع المعدنية العالمية.                    </p>
                    <a href="<?php echo ferroxa_url('blog'); ?>" class="blog-read-more">
                        اقرأ المزيد                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <article class="blog-card">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1518709268805-4e9042af9f23?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Blog Post">
                    <span class="blog-category">تحليل السوق</span>
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span class="blog-date">
                            <i class="far fa-calendar"></i>
                            June 03, 2026                        </span>
                        <span class="blog-author">
                            <i class="far fa-user"></i>
                            آنا بتروف                        </span>
                    </div>
                    <h3 class="blog-title">
                        <a href="<?php echo ferroxa_url('blog'); ?>">توقعات سوق الصلب 2024</a>
                    </h3>
                    <p class="blog-excerpt">
                        نظرة شاملة على أسواق الصلب العالمية، مع فحص ديناميكيات العرض والطلب والاتجاهات الإقليمية التي تؤثر على التسعير.                    </p>
                    <a href="<?php echo ferroxa_url('blog'); ?>" class="blog-read-more">
                        اقرأ المزيد                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>
        </div>

        <!-- Pagination -->
        <div class="blog-pagination">
            <a href="<?php echo ferroxa_url('blog'); ?>" class="pagination-btn disabled">
                <i class="fas fa-chevron-left"></i>
            </a>
            <a href="<?php echo ferroxa_url('blog'); ?>" class="pagination-btn active">1</a>
            <a href="<?php echo ferroxa_url('blog'); ?>" class="pagination-btn">2</a>
            <a href="<?php echo ferroxa_url('blog'); ?>" class="pagination-btn">3</a>
            <span class="pagination-dots">...</span>
            <a href="<?php echo ferroxa_url('blog'); ?>" class="pagination-btn">8</a>
            <a href="<?php echo ferroxa_url('blog'); ?>" class="pagination-btn">
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- Newsletter CTA -->
<section class="blog-newsletter">
    <div class="container">
        <div class="newsletter-wrapper">
            <div class="newsletter-content">
                <i class="fas fa-envelope-open-text"></i>
                <h2>ابق محدثاً</h2>
                <p>اشترك في نشرتنا الإخبارية لأحدث رؤى السوق وفرص التداول.</p>
            </div>
            <form class="newsletter-form">
                <input type="email" placeholder="أدخل عنوان بريدك الإلكتروني" class="newsletter-input" required>
                <button type="submit" class="newsletter-btn">
                    اشترك                    <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>
</section>
