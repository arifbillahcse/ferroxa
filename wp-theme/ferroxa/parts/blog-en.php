<?php
/**
 * Content partial: blog (en). Auto-generated from the static export.
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
                Latest News & Insights            </h1>
            <p class="blog-hero-subtitle">
                Stay updated with the latest trends and developments in metal trading            </p>
            <div class="blog-search">
                <form action="<?php echo ferroxa_url('blog'); ?>" method="GET" class="search-form">
                    <input type="text" name="search" placeholder="Search articles..." class="search-input">
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
                All Posts            </button>
            <button class="category-btn" data-category="market-analysis">
                Market Analysis            </button>
            <button class="category-btn" data-category="industry-news">
                Industry News            </button>
            <button class="category-btn" data-category="trading-tips">
                Trading Tips            </button>
            <button class="category-btn" data-category="sustainability">
                Sustainability            </button>
            <button class="category-btn" data-category="technology">
                Technology            </button>
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
                    <span class="blog-category">Market Analysis</span>
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span class="blog-date">
                            <i class="far fa-calendar"></i>
                            June 15, 2026                        </span>
                        <span class="blog-author">
                            <i class="far fa-user"></i>
                            John Doe                        </span>
                        <span class="blog-read-time">
                            <i class="far fa-clock"></i>
                            5 min read                        </span>
                    </div>
                    <h2 class="blog-title">
                        <a href="<?php echo ferroxa_url('blog'); ?>">Copper Market Trends 2024</a>
                    </h2>
                    <p class="blog-excerpt">
                        An in-depth analysis of global copper market dynamics, supply chain disruptions, and price forecasts for the coming year.                    </p>
                    <a href="<?php echo ferroxa_url('blog'); ?>" class="blog-read-more">
                        Read Full Article                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <!-- Regular Posts -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Blog Post">
                    <span class="blog-category">Industry News</span>
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span class="blog-date">
                            <i class="far fa-calendar"></i>
                            June 13, 2026                        </span>
                        <span class="blog-author">
                            <i class="far fa-user"></i>
                            Sarah Smith                        </span>
                    </div>
                    <h3 class="blog-title">
                        <a href="<?php echo ferroxa_url('blog'); ?>">Aluminum Production Reaches New Milestone</a>
                    </h3>
                    <p class="blog-excerpt">
                        Global aluminum production has reached record highs, driven by increased demand in automotive and aerospace sectors.                    </p>
                    <a href="<?php echo ferroxa_url('blog'); ?>" class="blog-read-more">
                        Read More                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <article class="blog-card">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1624365168968-f281d12b8e93?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Blog Post">
                    <span class="blog-category">Sustainability</span>
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span class="blog-date">
                            <i class="far fa-calendar"></i>
                            June 10, 2026                        </span>
                        <span class="blog-author">
                            <i class="far fa-user"></i>
                            Michael Chen                        </span>
                    </div>
                    <h3 class="blog-title">
                        <a href="<?php echo ferroxa_url('blog'); ?>">The Green Metals Revolution</a>
                    </h3>
                    <p class="blog-excerpt">
                        How sustainable mining practices are reshaping the metals industry and creating new opportunities for traders.                    </p>
                    <a href="<?php echo ferroxa_url('blog'); ?>" class="blog-read-more">
                        Read More                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <article class="blog-card">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1611080626919-7cf5a9dbab5b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Blog Post">
                    <span class="blog-category">Trading Tips</span>
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span class="blog-date">
                            <i class="far fa-calendar"></i>
                            June 08, 2026                        </span>
                        <span class="blog-author">
                            <i class="far fa-user"></i>
                            Emma Wilson                        </span>
                    </div>
                    <h3 class="blog-title">
                        <a href="<?php echo ferroxa_url('blog'); ?>">Precious Metals Investment Guide</a>
                    </h3>
                    <p class="blog-excerpt">
                        Strategic insights into precious metals investment, portfolio diversification, and market timing for optimal returns.                    </p>
                    <a href="<?php echo ferroxa_url('blog'); ?>" class="blog-read-more">
                        Read More                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <article class="blog-card">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1563986768494-4dee2763ff3f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Blog Post">
                    <span class="blog-category">Technology</span>
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span class="blog-date">
                            <i class="far fa-calendar"></i>
                            June 05, 2026                        </span>
                        <span class="blog-author">
                            <i class="far fa-user"></i>
                            David Lee                        </span>
                    </div>
                    <h3 class="blog-title">
                        <a href="<?php echo ferroxa_url('blog'); ?>">Blockchain in Metal Trading</a>
                    </h3>
                    <p class="blog-excerpt">
                        Exploring how blockchain technology is revolutionizing transparency and efficiency in global metal commodity trading.                    </p>
                    <a href="<?php echo ferroxa_url('blog'); ?>" class="blog-read-more">
                        Read More                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <article class="blog-card">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1518709268805-4e9042af9f23?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Blog Post">
                    <span class="blog-category">Market Analysis</span>
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span class="blog-date">
                            <i class="far fa-calendar"></i>
                            June 03, 2026                        </span>
                        <span class="blog-author">
                            <i class="far fa-user"></i>
                            Anna Petrov                        </span>
                    </div>
                    <h3 class="blog-title">
                        <a href="<?php echo ferroxa_url('blog'); ?>">Steel Market Outlook 2024</a>
                    </h3>
                    <p class="blog-excerpt">
                        Comprehensive outlook on global steel markets, examining supply-demand dynamics and regional trends affecting pricing.                    </p>
                    <a href="<?php echo ferroxa_url('blog'); ?>" class="blog-read-more">
                        Read More                        <i class="fas fa-arrow-right"></i>
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
                <h2>Stay Updated</h2>
                <p>Subscribe to our newsletter for the latest market insights and trading opportunities.</p>
            </div>
            <form class="newsletter-form">
                <input type="email" placeholder="Enter your email address" class="newsletter-input" required>
                <button type="submit" class="newsletter-btn">
                    Subscribe                    <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>
</section>
