/**
 * Mobile-Only JavaScript - Following todo2.md requirements
 * Only affects mobile/tablet, not desktop
 */

document.addEventListener('DOMContentLoaded', function() {
    // Only run on mobile/tablet devices
    if (window.innerWidth >= 1024) return;
    
    initializeMobileNavigation();
    initializeMobilePageLayout();
    initializeMobileTouchInteractions();
    initializeMobileAnimations();
    initializeMobileTabNavigation();
    initializeMobileFormEnhancements();
});

/**
 * Mobile Navigation - Enhanced for All Pages
 *
 * The hamburger toggle (#mobile-menu-toggle) and the language dropdown
 * (#lang-toggle) are already wired up unconditionally in main.js and
 * wp-language.js respectively. Attaching a second set of click handlers
 * here used to fight with those for the same elements/classes (each click
 * could open and then immediately re-close the menu), so this function no
 * longer duplicates that logic.
 */
function initializeMobileNavigation() {}

/**
 * Mobile Page Layout Initialization - For All Pages
 */
function initializeMobilePageLayout() {
    // Ensure all containers are properly sized
    const containers = document.querySelectorAll('.container, .header-container, .footer-container');
    containers.forEach(container => {
        container.style.maxWidth = '100%';
        container.style.overflow = 'hidden';
    });
    
    // Fix any wide elements
    const wideElements = document.querySelectorAll('img, video, iframe, table');
    wideElements.forEach(element => {
        element.style.maxWidth = '100%';
        element.style.height = 'auto';
    });
    
    // Initialize back to top button
    initializeMobileBackToTop();
    
    // Fix page hero sections
    const pageHeros = document.querySelectorAll('.page-hero, .hero-section');
    pageHeros.forEach(hero => {
        hero.style.padding = '120px 20px 80px';
        hero.style.textAlign = 'center';
    });
    
    // Fix grids on mobile
    const grids = document.querySelectorAll('.bento-grid, .features-grid, .products-grid');
    grids.forEach(grid => {
        if (window.innerWidth <= 768) {
            grid.style.display = 'grid';
            grid.style.gridTemplateColumns = '1fr';
            grid.style.gap = '20px';
        }
    });
    
    // Fix mission/vision cards layout for about page
    const missionVisionCards = document.querySelectorAll('.mission-card, .vision-card, .values-card');
    missionVisionCards.forEach(card => {
        card.style.marginBottom = '20px';
        card.style.padding = '30px 20px';
    });
}

/**
 * Mobile Back to Top Button
 */
function initializeMobileBackToTop() {
    let backToTop = document.querySelector('.back-to-top');
    
    if (!backToTop) {
        // Create back to top button if it doesn't exist
        backToTop = document.createElement('button');
        backToTop.className = 'back-to-top mobile-back-to-top';
        backToTop.innerHTML = '<i class="fas fa-chevron-up"></i>';
        backToTop.setAttribute('title', 'Back to top');
        backToTop.setAttribute('aria-label', 'Back to top');
        document.body.appendChild(backToTop);
    }
    
    // Show/hide based on scroll position
    let isVisible = false;
    let scrollTimer = null;
    
    function toggleBackToTop() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const shouldShow = scrollTop > 300;
        
        if (shouldShow && !isVisible) {
            backToTop.style.display = 'flex';
            backToTop.style.opacity = '1';
            backToTop.style.visibility = 'visible';
            backToTop.style.transform = 'translateY(0)';
            isVisible = true;
        } else if (!shouldShow && isVisible) {
            backToTop.style.opacity = '0';
            backToTop.style.visibility = 'hidden';
            backToTop.style.transform = 'translateY(20px)';
            isVisible = false;
        }
    }
    
    // Throttled scroll event
    window.addEventListener('scroll', function() {
        if (scrollTimer) clearTimeout(scrollTimer);
        scrollTimer = setTimeout(toggleBackToTop, 50);
    }, { passive: true });
    
    // Click handler
    backToTop.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
        
        // Haptic feedback if available
        if (navigator.vibrate) {
            navigator.vibrate(100);
        }
    });
}

/**
 * Create Mobile Navigation Structure
 */
function createMobileNavStructure() {
    // Check if mobile elements already exist
    if (document.querySelector('.mobile-nav-overlay')) return;
    
    // Create hamburger button if it doesn't exist
    const mobileToggle = document.querySelector('.mobile-nav-toggle');
    if (mobileToggle && !mobileToggle.querySelector('span')) {
        mobileToggle.innerHTML = '<span></span><span></span><span></span>';
    }
    
    // Create overlay
    const overlay = document.createElement('div');
    overlay.className = 'mobile-nav-overlay';
    document.body.appendChild(overlay);
    
    // Create mobile menu
    const mobileMenu = document.createElement('div');
    mobileMenu.className = 'mobile-nav-menu';
    
    // Copy navigation links from desktop menu
    const desktopNav = document.querySelector('.nav-menu');
    if (desktopNav) {
        const links = desktopNav.cloneNode(true);
        mobileMenu.appendChild(links);
    }
    
    document.body.appendChild(mobileMenu);
}

/**
 * Mobile Touch Interactions
 */
function initializeMobileTouchInteractions() {
    // Add tap feedback to buttons
    const touchElements = document.querySelectorAll('.tab-btn, .btn, .cta-btn, .contact-btn');
    
    touchElements.forEach(element => {
        element.addEventListener('touchstart', function() {
            this.style.transform = 'scale(0.98)';
            this.style.transition = 'transform 0.1s ease';
        });
        
        element.addEventListener('touchend', function() {
            setTimeout(() => {
                this.style.transform = '';
                this.style.transition = '';
            }, 100);
        });
    });
    
    // Improve form interactions
    const formInputs = document.querySelectorAll('input, textarea, select');
    formInputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.style.borderColor = 'var(--copper)';
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.style.borderColor = '';
        });
    });
}

/**
 * Mobile Animations - Lightweight and Performance-Focused
 */
function initializeMobileAnimations() {
    // Respect reduced motion preference
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }
    
    // Staggered reveal animation for product items
    const productItems = document.querySelectorAll('.product-item');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 100);
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '50px'
    });
    
    productItems.forEach(item => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(20px)';
        item.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
        observer.observe(item);
    });
    
    // Parallax effect for hero sections (lightweight)
    const heroSections = document.querySelectorAll('.page-hero, .hero-section');
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const rate = scrolled * -0.3;
        
        heroSections.forEach(section => {
            const bg = section.querySelector('.hero-video, .page-hero-bg');
            if (bg) {
                bg.style.transform = `translate3d(0, ${rate}px, 0)`;
            }
        });
    }, { passive: true });
}

/**
 * Mobile-Specific Tab Navigation
 */
function initializeMobileTabNavigation() {
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabPanels = document.querySelectorAll('.tab-panel');
    
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active from all
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabPanels.forEach(panel => panel.classList.remove('active'));
            
            // Add active to current
            this.classList.add('active');
            const targetTab = this.getAttribute('data-tab');
            const targetPanel = document.getElementById(targetTab);
            
            if (targetPanel) {
                targetPanel.classList.add('active');
                
                // Smooth scroll to content on mobile
                targetPanel.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// Initialize mobile tab navigation
document.addEventListener('DOMContentLoaded', function() {
    if (window.innerWidth <= 768) {
        initializeMobileTabNavigation();
    }
});

/**
 * Mobile Form Enhancements
 */
function initializeMobileFormEnhancements() {
    // Auto-resize textareas
    const textareas = document.querySelectorAll('textarea');
    textareas.forEach(textarea => {
        textarea.addEventListener('input', function() {
            this.style.height = 'auto';
            this.style.height = this.scrollHeight + 'px';
        });
    });
    
    // Better mobile keyboard handling
    const emailInputs = document.querySelectorAll('input[type="email"]');
    emailInputs.forEach(input => {
        input.setAttribute('autocomplete', 'email');
        input.setAttribute('inputmode', 'email');
    });
    
    const phoneInputs = document.querySelectorAll('input[type="tel"]');
    phoneInputs.forEach(input => {
        input.setAttribute('autocomplete', 'tel');
        input.setAttribute('inputmode', 'tel');
    });
}

// Window resize handler - rerun mobile logic if needed
window.addEventListener('resize', function() {
    if (window.innerWidth >= 1024) {
        // Close mobile menu if desktop
        const mobileOverlay = document.querySelector('.mobile-nav-overlay');
        const mobileMenu = document.querySelector('.mobile-nav-menu');
        if (mobileOverlay && mobileMenu) {
            mobileOverlay.classList.remove('active');
            mobileMenu.classList.remove('active');
            document.body.style.overflow = '';
        }
    }
});
