<?php
/**
 * Content partial: blog (fr). Auto-generated from the static export.
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
                Dernières Nouvelles et Perspectives            </h1>
            <p class="blog-hero-subtitle">
                Restez informé des dernières tendances et développements dans le commerce des métaux            </p>
            <div class="blog-search">
                <form action="<?php echo ferroxa_url('blog'); ?>" method="GET" class="search-form">
                    <input type="text" name="search" placeholder="Rechercher des articles..." class="search-input">
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
                Tous les Articles            </button>
            <button class="category-btn" data-category="market-analysis">
                Analyse de Marché            </button>
            <button class="category-btn" data-category="industry-news">
                Actualités de l'Industrie            </button>
            <button class="category-btn" data-category="trading-tips">
                Conseils de Trading            </button>
            <button class="category-btn" data-category="sustainability">
                Durabilité            </button>
            <button class="category-btn" data-category="technology">
                Technologie            </button>
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
                    <span class="blog-category">Analyse de Marché</span>
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
                            5 min de lecture                        </span>
                    </div>
                    <h2 class="blog-title">
                        <a href="<?php echo ferroxa_url('blog'); ?>">Tendances du Marché du Cuivre 2024</a>
                    </h2>
                    <p class="blog-excerpt">
                        Une analyse approfondie de la dynamique du marché mondial du cuivre, des perturbations de la chaîne d'approvisionnement et des prévisions de prix pour l'année à venir.                    </p>
                    <a href="<?php echo ferroxa_url('blog'); ?>" class="blog-read-more">
                        Lire l'Article Complet                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <!-- Regular Posts -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Blog Post">
                    <span class="blog-category">Actualités de l'Industrie</span>
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
                        <a href="<?php echo ferroxa_url('blog'); ?>">La Production d'Aluminium Atteint un Nouveau Jalon</a>
                    </h3>
                    <p class="blog-excerpt">
                        La production mondiale d'aluminium a atteint des records, stimulée par une demande accrue dans les secteurs automobile et aérospatial.                    </p>
                    <a href="<?php echo ferroxa_url('blog'); ?>" class="blog-read-more">
                        Lire Plus                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <article class="blog-card">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1624365168968-f281d12b8e93?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Blog Post">
                    <span class="blog-category">Durabilité</span>
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
                        <a href="<?php echo ferroxa_url('blog'); ?>">La Révolution des Métaux Verts</a>
                    </h3>
                    <p class="blog-excerpt">
                        Comment les pratiques minières durables remodèlent l'industrie des métaux et créent de nouvelles opportunités pour les traders.                    </p>
                    <a href="<?php echo ferroxa_url('blog'); ?>" class="blog-read-more">
                        Lire Plus                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <article class="blog-card">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1611080626919-7cf5a9dbab5b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Blog Post">
                    <span class="blog-category">Conseils de Trading</span>
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
                        <a href="<?php echo ferroxa_url('blog'); ?>">Guide d'Investissement en Métaux Précieux</a>
                    </h3>
                    <p class="blog-excerpt">
                        Aperçus stratégiques sur l'investissement en métaux précieux, la diversification de portefeuille et le timing de marché pour des rendements optimaux.                    </p>
                    <a href="<?php echo ferroxa_url('blog'); ?>" class="blog-read-more">
                        Lire Plus                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <article class="blog-card">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1563986768494-4dee2763ff3f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Blog Post">
                    <span class="blog-category">Technologie</span>
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
                        <a href="<?php echo ferroxa_url('blog'); ?>">Blockchain dans le Commerce des Métaux</a>
                    </h3>
                    <p class="blog-excerpt">
                        Exploration de la façon dont la technologie blockchain révolutionne la transparence et l'efficacité dans le commerce mondial des matières premières métalliques.                    </p>
                    <a href="<?php echo ferroxa_url('blog'); ?>" class="blog-read-more">
                        Lire Plus                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <article class="blog-card">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1518709268805-4e9042af9f23?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Blog Post">
                    <span class="blog-category">Analyse de Marché</span>
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
                        <a href="<?php echo ferroxa_url('blog'); ?>">Perspectives du Marché de l'Acier 2024</a>
                    </h3>
                    <p class="blog-excerpt">
                        Perspectives complètes sur les marchés mondiaux de l'acier, examinant la dynamique offre-demande et les tendances régionales affectant les prix.                    </p>
                    <a href="<?php echo ferroxa_url('blog'); ?>" class="blog-read-more">
                        Lire Plus                        <i class="fas fa-arrow-right"></i>
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
                <h2>Restez Informé</h2>
                <p>Abonnez-vous à notre newsletter pour les dernières informations sur le marché et les opportunités de trading.</p>
            </div>
            <form class="newsletter-form">
                <input type="email" placeholder="Entrez votre adresse e-mail" class="newsletter-input" required>
                <button type="submit" class="newsletter-btn">
                    S'abonner                    <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>
</section>
