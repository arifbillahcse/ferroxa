/**
 * Metallura Website - Animations
 * Modern animations and transitions
 */

class AnimationManager {
    constructor() {
        this.observers = new Map();
        this.animatedElements = new Set();
        this.isReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        
        this.init();
    }
    
    init() {
        if (this.isReducedMotion) {
            document.body.classList.add('reduced-motion');
            return;
        }
        
        this.setupIntersectionObserver();
        this.setupScrollAnimations();
        this.setupHoverAnimations();
        this.setupCounterAnimations();
        this.setupParallaxEffects();
        this.setupLoadingAnimations();
    }
    
    setupIntersectionObserver() {
        const options = {
            threshold: 0.15,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const callback = (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !this.animatedElements.has(entry.target)) {
                    this.animateElement(entry.target);
                    this.animatedElements.add(entry.target);
                }
            });
        };
        
        const observer = new IntersectionObserver(callback, options);
        this.observers.set('main', observer);
        
        // Observe elements
        this.observeElements();
    }
    
    observeElements() {
        const observer = this.observers.get('main');
        
        const selectors = [
            '.service-card',
            '.product-card',
            '.contact-card',
            '.about-content',
            '.section-header',
            '.stat-item',
            '.contact-info'
        ];
        
        selectors.forEach(selector => {
            document.querySelectorAll(selector).forEach(el => {
                if (!el.classList.contains('no-animate')) {
                    el.classList.add('animate-element');
                    observer.observe(el);
                }
            });
        });
    }
    
    animateElement(element) {
        const animationType = element.dataset.animation || 'fadeInUp';
        
        // Add animation class
        element.classList.add('animate-in');
        element.classList.add(animationType);
        
        // Calculate delay for staggered animations
        const siblings = Array.from(element.parentElement.children).filter(el => 
            el.classList.contains('animate-element')
        );
        const index = siblings.indexOf(element);
        const delay = index * 100; // 100ms stagger
        
        element.style.animationDelay = `${delay}ms`;
    }
    
    setupScrollAnimations() {
        let ticking = false;
        
        const updateScrollAnimations = () => {
            this.updateParallax();
            this.updateHeaderVisibility();
            ticking = false;
        };
        
        const onScroll = () => {
            if (!ticking) {
                requestAnimationFrame(updateScrollAnimations);
                ticking = true;
            }
        };
        
        window.addEventListener('scroll', onScroll, { passive: true });
    }
    
    updateParallax() {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.parallax');
        
        parallaxElements.forEach(element => {
            const speed = element.dataset.speed || 0.5;
            const yPos = -(scrolled * speed);
            element.style.transform = `translateY(${yPos}px)`;
        });
    }
    
    updateHeaderVisibility() {
        const header = document.querySelector('.main-header');
        const scrolled = window.pageYOffset;
        
        if (scrolled > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }
    
    setupHoverAnimations() {
        // Service cards hover effect
        this.setupCardHoverEffects('.service-card');
        this.setupCardHoverEffects('.product-card');
        this.setupCardHoverEffects('.contact-card');
        
        // Button hover effects
        this.setupButtonHoverEffects();
        
        // Image hover effects
        this.setupImageHoverEffects();
    }
    
    setupCardHoverEffects(selector) {
        const cards = document.querySelectorAll(selector);
        
        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                if (!this.isReducedMotion) {
                    card.style.transform = 'translateY(-10px)';
                    card.style.boxShadow = 'var(--shadow-heavy)';
                }
            });
            
            card.addEventListener('mouseleave', () => {
                if (!this.isReducedMotion) {
                    card.style.transform = 'translateY(0)';
                    card.style.boxShadow = 'var(--shadow-light)';
                }
            });
        });
    }
    
    setupButtonHoverEffects() {
        const buttons = document.querySelectorAll('.hero-cta-btn, .form-submit, .back-to-top');
        
        buttons.forEach(button => {
            button.addEventListener('mouseenter', () => {
                if (!this.isReducedMotion) {
                    const icon = button.querySelector('i');
                    if (icon && !icon.classList.contains('fa-spinner')) {
                        icon.style.transform = 'translateX(5px)';
                    }
                }
            });
            
            button.addEventListener('mouseleave', () => {
                if (!this.isReducedMotion) {
                    const icon = button.querySelector('i');
                    if (icon && !icon.classList.contains('fa-spinner')) {
                        icon.style.transform = 'translateX(0)';
                    }
                }
            });
        });
    }
    
    setupImageHoverEffects() {
        const images = document.querySelectorAll('.product-img, .about-img');
        
        images.forEach(img => {
            const container = img.parentElement;
            
            container.addEventListener('mouseenter', () => {
                if (!this.isReducedMotion) {
                    img.style.transform = 'scale(1.1)';
                }
            });
            
            container.addEventListener('mouseleave', () => {
                if (!this.isReducedMotion) {
                    img.style.transform = 'scale(1)';
                }
            });
        });
    }
    
    setupCounterAnimations() {
        const counters = document.querySelectorAll('.stat-number');
        
        const animateCounter = (counter) => {
            const target = parseInt(counter.textContent.replace(/[^\d]/g, ''));
            const duration = 2000;
            const increment = target / (duration / 16);
            let current = 0;
            
            const updateCounter = () => {
                current += increment;
                
                if (current < target) {
                    counter.textContent = this.formatNumber(Math.floor(current)) + (counter.textContent.includes('+') ? '+' : '');
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = counter.textContent; // Reset to original
                }
            };
            
            updateCounter();
        };
        
        // Observe counters
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !this.animatedElements.has(entry.target)) {
                    animateCounter(entry.target);
                    this.animatedElements.add(entry.target);
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.7 });
        
        counters.forEach(counter => counterObserver.observe(counter));
    }
    
    formatNumber(num) {
        if (num >= 1000) {
            return (num / 1000).toFixed(1).replace('.0', '') + 'k';
        }
        return num.toString();
    }
    
    setupParallaxEffects() {
        // Hero video parallax
        const heroVideo = document.querySelector('.hero-video');
        
        if (heroVideo) {
            heroVideo.style.transform = 'scale(1.1)';
        }
        
        // Background parallax elements
        const parallaxElements = document.querySelectorAll('.parallax-bg');
        
        parallaxElements.forEach(element => {
            element.classList.add('parallax');
            element.dataset.speed = element.dataset.speed || '0.3';
        });
    }
    
    setupLoadingAnimations() {
        // Page load animation
        window.addEventListener('load', () => {
            this.animatePageLoad();
        });
        
        // Image loading animations
        this.setupImageLoadingAnimations();
    }
    
    animatePageLoad() {
        const header = document.querySelector('.main-header');
        const hero = document.querySelector('.hero-section');
        
        if (header) {
            header.style.transform = 'translateY(-100%)';
            header.style.opacity = '0';
            
            setTimeout(() => {
                header.style.transition = 'transform 0.6s ease, opacity 0.6s ease';
                header.style.transform = 'translateY(0)';
                header.style.opacity = '1';
            }, 100);
        }
        
        if (hero) {
            const heroContent = hero.querySelector('.hero-content');
            if (heroContent) {
                heroContent.style.opacity = '0';
                heroContent.style.transform = 'translateY(50px)';
                
                setTimeout(() => {
                    heroContent.style.transition = 'opacity 1s ease, transform 1s ease';
                    heroContent.style.opacity = '1';
                    heroContent.style.transform = 'translateY(0)';
                }, 300);
            }
        }
    }
    
    setupImageLoadingAnimations() {
        const images = document.querySelectorAll('img');
        
        images.forEach(img => {
            if (img.complete) {
                img.classList.add('loaded');
            } else {
                img.addEventListener('load', () => {
                    img.classList.add('loaded');
                });
            }
        });
    }
    
    // Public methods
    animateIn(element, animation = 'fadeInUp') {
        if (this.isReducedMotion) return;
        
        element.classList.add('animate-element', 'animate-in', animation);
    }
    
    animateOut(element, animation = 'fadeOut') {
        if (this.isReducedMotion) return;
        
        element.classList.add(animation);
        
        return new Promise(resolve => {
            element.addEventListener('animationend', () => {
                element.classList.remove(animation);
                resolve();
            }, { once: true });
        });
    }
    
    staggerChildren(parent, delay = 100) {
        if (this.isReducedMotion) return;
        
        const children = Array.from(parent.children);
        
        children.forEach((child, index) => {
            child.style.animationDelay = `${index * delay}ms`;
            this.animateIn(child);
        });
    }
    
    pulse(element, duration = 1000) {
        if (this.isReducedMotion) return;
        
        element.style.animation = `pulse ${duration}ms ease-in-out`;
        
        setTimeout(() => {
            element.style.animation = '';
        }, duration);
    }
    
    shake(element, duration = 500) {
        if (this.isReducedMotion) return;
        
        element.style.animation = `shake ${duration}ms ease-in-out`;
        
        setTimeout(() => {
            element.style.animation = '';
        }, duration);
    }
    
    // Cleanup
    destroy() {
        this.observers.forEach(observer => observer.disconnect());
        this.observers.clear();
        this.animatedElements.clear();
    }
}

// Animation CSS Classes
class AnimationStyles {
    constructor() {
        this.addAnimationStyles();
    }
    
    addAnimationStyles() {
        const style = document.createElement('style');
        style.id = 'animation-styles';
        style.textContent = `
            .animate-element {
                opacity: 0;
                transform: translateY(30px);
                transition: opacity 0.6s ease, transform 0.6s ease;
            }
            
            .animate-element.animate-in {
                opacity: 1;
                transform: translateY(0);
            }
            
            .fadeInUp {
                animation: fadeInUp 0.6s ease forwards;
            }
            
            .fadeInLeft {
                animation: fadeInLeft 0.6s ease forwards;
            }
            
            .fadeInRight {
                animation: fadeInRight 0.6s ease forwards;
            }
            
            .fadeIn {
                animation: fadeIn 0.6s ease forwards;
            }
            
            .slideInUp {
                animation: slideInUp 0.6s ease forwards;
            }
            
            .zoomIn {
                animation: zoomIn 0.6s ease forwards;
            }
            
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            @keyframes fadeInLeft {
                from {
                    opacity: 0;
                    transform: translateX(-30px);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }
            
            @keyframes fadeInRight {
                from {
                    opacity: 0;
                    transform: translateX(30px);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }
            
            @keyframes fadeIn {
                from {
                    opacity: 0;
                }
                to {
                    opacity: 1;
                }
            }
            
            @keyframes slideInUp {
                from {
                    transform: translateY(100%);
                }
                to {
                    transform: translateY(0);
                }
            }
            
            @keyframes zoomIn {
                from {
                    opacity: 0;
                    transform: scale(0.9);
                }
                to {
                    opacity: 1;
                    transform: scale(1);
                }
            }
            
            @keyframes pulse {
                0%, 100% {
                    transform: scale(1);
                }
                50% {
                    transform: scale(1.05);
                }
            }
            
            @keyframes shake {
                0%, 100% {
                    transform: translateX(0);
                }
                25% {
                    transform: translateX(-5px);
                }
                75% {
                    transform: translateX(5px);
                }
            }
            
            @keyframes bounce {
                0%, 20%, 50%, 80%, 100% {
                    transform: translateY(0);
                }
                40% {
                    transform: translateY(-10px);
                }
                60% {
                    transform: translateY(-5px);
                }
            }
            
            .loading-skeleton {
                background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
                background-size: 200% 100%;
                animation: loading 1.5s infinite;
            }
            
            @keyframes loading {
                0% {
                    background-position: 200% 0;
                }
                100% {
                    background-position: -200% 0;
                }
            }
            
            .img-fade {
                opacity: 0;
                transition: opacity 0.3s ease;
            }
            
            .img-fade.loaded {
                opacity: 1;
            }
            
            /* Reduced motion */
            @media (prefers-reduced-motion: reduce) {
                .animate-element,
                .animate-element.animate-in {
                    opacity: 1 !important;
                    transform: none !important;
                    animation: none !important;
                    transition: none !important;
                }
                
                .parallax {
                    transform: none !important;
                }
                
                .hero-video {
                    animation: none !important;
                }
            }
        `;
        
        document.head.appendChild(style);
    }
}

// Scroll-triggered animations utility
class ScrollTrigger {
    constructor(element, callback, options = {}) {
        this.element = element;
        this.callback = callback;
        this.options = {
            threshold: 0.1,
            rootMargin: '0px',
            once: true,
            ...options
        };
        
        this.observer = new IntersectionObserver(this.handleIntersection.bind(this), {
            threshold: this.options.threshold,
            rootMargin: this.options.rootMargin
        });
        
        this.observer.observe(this.element);
    }
    
    handleIntersection(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                this.callback(entry.target);
                
                if (this.options.once) {
                    this.observer.unobserve(entry.target);
                }
            }
        });
    }
    
    destroy() {
        this.observer.disconnect();
    }
}

// Initialize animations when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    // Add animation styles
    new AnimationStyles();
    
    // Initialize animation manager
    window.animationManager = new AnimationManager();
    
    // Initialize custom scroll triggers
    initializeCustomAnimations();
});

function initializeCustomAnimations() {
    // Hero section special animation
    const hero = document.querySelector('.hero-section');
    if (hero) {
        new ScrollTrigger(hero, (element) => {
            const video = element.querySelector('.hero-video');
            const content = element.querySelector('.hero-content');
            
            if (video && content) {
                content.style.animation = 'fadeInUp 1s ease forwards';
            }
        }, { threshold: 0.3 });
    }
    
    // Statistics counter animation
    const stats = document.querySelectorAll('.stat-number');
    stats.forEach(stat => {
        new ScrollTrigger(stat, (element) => {
            if (window.animationManager && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                window.animationManager.pulse(element, 2000);
            }
        }, { threshold: 0.8 });
    });
    
    // Contact form animation
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        new ScrollTrigger(contactForm, (element) => {
            if (window.animationManager) {
                window.animationManager.staggerChildren(element, 150);
            }
        });
    }
}

// Global utilities
window.AnimationManager = AnimationManager;
window.ScrollTrigger = ScrollTrigger;

// Export for ES6 modules (if needed)
if (typeof module !== 'undefined' && module.exports) {
    module.exports = { AnimationManager, AnimationStyles, ScrollTrigger };
}
