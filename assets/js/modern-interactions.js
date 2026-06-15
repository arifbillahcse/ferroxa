/**
 * Ferroxa Website - Modern Interactions
 * Advanced JavaScript for modern UI interactions and animations
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all modern interaction systems
    initializeModernAnimations();
    initializeScrollAnimations();
    initializeMagneticEffects();
    initializeParallaxEffects();
    initializeAdvancedCarousel();
    initializeModernTabs();
    initializeRippleEffects();
    initializeIntersectionObserver();
    initializeProgressiveEnhancement();
    initializeModernTooltips();
    // initializeAdvancedCounters(); // Function not defined - disabled
    initializeTouchGestures();
    initializeMegaDropdown();
});

/**
 * Modern Animation System
 */
function initializeModernAnimations() {
    // Add stagger animation to grid items
    const staggerContainers = document.querySelectorAll('.stagger-children');
    
    staggerContainers.forEach(container => {
        const children = container.children;
        Array.from(children).forEach((child, index) => {
            child.style.animationDelay = `${index * 0.1}s`;
        });
    });
    
    // Initialize hero text animations
    const heroTitle = document.querySelector('.hero-title');
    const heroSubtitle = document.querySelector('.hero-subtitle');
    const heroActions = document.querySelector('.hero-actions');
    
    if (heroTitle) {
        heroTitle.style.opacity = '0';
        heroTitle.style.transform = 'translateY(50px)';
        
        setTimeout(() => {
            heroTitle.style.transition = 'all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
            heroTitle.style.opacity = '1';
            heroTitle.style.transform = 'translateY(0)';
        }, 100);
    }
    
    if (heroSubtitle) {
        heroSubtitle.style.opacity = '0';
        heroSubtitle.style.transform = 'translateY(30px)';
        
        setTimeout(() => {
            heroSubtitle.style.transition = 'all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
            heroSubtitle.style.opacity = '1';
            heroSubtitle.style.transform = 'translateY(0)';
        }, 300);
    }
    
    if (heroActions) {
        heroActions.style.opacity = '0';
        heroActions.style.transform = 'translateY(30px)';
        
        setTimeout(() => {
            heroActions.style.transition = 'all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
            heroActions.style.opacity = '1';
            heroActions.style.transform = 'translateY(0)';
        }, 500);
    }
}

/**
 * Advanced Scroll Animations
 */
function initializeScrollAnimations() {
    let ticking = false;
    
    function updateScrollAnimations() {
        const scrolled = window.pageYOffset;
        const rate = scrolled * -0.5;
        
        // Parallax backgrounds
        const parallaxElements = document.querySelectorAll('.parallax-bg');
        parallaxElements.forEach(element => {
            element.style.transform = `translateY(${rate}px)`;
        });
        
        // Header background on scroll
        const header = document.querySelector('.main-header');
        if (header) {
            if (scrolled > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }
        
        ticking = false;
    }
    
    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(updateScrollAnimations);
            ticking = true;
        }
    }
    
    window.addEventListener('scroll', requestTick);
}

/**
 * Magnetic Button Effects
 */
function initializeMagneticEffects() {
    const magneticElements = document.querySelectorAll('.magnetic-hover, .hero-cta-btn, .btn-primary');
    
    magneticElements.forEach(element => {
        element.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            
            const strength = 0.3;
            const moveX = x * strength;
            const moveY = y * strength;
            
            this.style.transform = `translate(${moveX}px, ${moveY}px)`;
        });
        
        element.addEventListener('mouseleave', function() {
            this.style.transform = 'translate(0, 0)';
        });
    });
}

/**
 * Advanced Parallax Effects
 */
function initializeParallaxEffects() {
    const parallaxElements = document.querySelectorAll('.parallax-element');
    
    function updateParallax() {
        const scrollTop = window.pageYOffset;
        
        parallaxElements.forEach((element, index) => {
            const speed = (index + 1) * 0.1;
            const yPos = -(scrollTop * speed);
            element.style.transform = `translateY(${yPos}px)`;
        });
    }
    
    let ticking = false;
    
    window.addEventListener('scroll', () => {
        if (!ticking) {
            requestAnimationFrame(updateParallax);
            ticking = true;
        }
        ticking = false;
    });
}

/**
 * Modern Tab System with Advanced Animations
 */
function initializeModernTabs() {
    const tabContainers = document.querySelectorAll('.services-tabs, .products-tabbed-section');
    
    tabContainers.forEach(container => {
        const tabButtons = container.querySelectorAll('.tab-btn');
        const tabPanels = container.querySelectorAll('.tab-panel');
        const tabIndicator = container.querySelector('.tab-indicator');
        
        // Create indicator if it doesn't exist
        if (!tabIndicator && tabButtons.length > 0) {
            const indicator = document.createElement('div');
            indicator.className = 'tab-indicator';
            tabButtons[0].parentNode.appendChild(indicator);
            updateTabIndicator(tabButtons[0], indicator);
        }
        
        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                const targetTab = button.getAttribute('data-tab');
                
                // Update active states
                tabButtons.forEach(btn => btn.classList.remove('active'));
                tabPanels.forEach(panel => panel.classList.remove('active'));
                
                button.classList.add('active');
                
                const targetPanel = document.getElementById(targetTab);
                if (targetPanel) {
                    targetPanel.classList.add('active');
                    
                    // Animate panel content
                    const animatedElements = targetPanel.querySelectorAll('.animate-element');
                    animatedElements.forEach((el, index) => {
                        el.style.opacity = '0';
                        el.style.transform = 'translateY(20px)';
                        
                        setTimeout(() => {
                            el.style.transition = 'all 0.6s ease';
                            el.style.opacity = '1';
                            el.style.transform = 'translateY(0)';
                        }, index * 100);
                    });
                }
                
                // Update indicator
                const indicator = container.querySelector('.tab-indicator');
                if (indicator) {
                    updateTabIndicator(button, indicator);
                }
            });
        });
    });
    
    function updateTabIndicator(activeButton, indicator) {
        const rect = activeButton.getBoundingClientRect();
        const parentRect = activeButton.parentNode.getBoundingClientRect();
        
        indicator.style.width = `${rect.width}px`;
        indicator.style.left = `${rect.left - parentRect.left}px`;
    }
}

/**
 * Ripple Effects for Buttons
 */
function initializeRippleEffects() {
    const rippleButtons = document.querySelectorAll('.btn, .ripple-button, .form-submit');
    
    rippleButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            const ripple = document.createElement('span');
            ripple.className = 'ripple-effect';
            ripple.style.cssText = `
                position: absolute;
                width: ${size}px;
                height: ${size}px;
                left: ${x}px;
                top: ${y}px;
                background: rgba(255, 255, 255, 0.3);
                border-radius: 50%;
                transform: scale(0);
                animation: ripple 0.6s ease-out;
                pointer-events: none;
            `;
            
            this.style.position = 'relative';
            this.style.overflow = 'hidden';
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });
}

/**
 * Enhanced Intersection Observer
 */
function initializeIntersectionObserver() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                
                // Add animation class
                element.classList.add('animate-in');
                
                // Trigger specific animations based on class
                // Removed network-stat animations
                
                if (element.classList.contains('feature-card')) {
                    setTimeout(() => {
                        element.style.transform = 'translateY(0)';
                        element.style.opacity = '1';
                    }, Math.random() * 300);
                }
                
                if (element.classList.contains('bento-card')) {
                    const delay = Array.from(element.parentNode.children).indexOf(element) * 100;
                    setTimeout(() => {
                        element.style.transform = 'translateY(0) scale(1)';
                        element.style.opacity = '1';
                    }, delay);
                }
                
                observer.unobserve(element);
            }
        });
    }, observerOptions);
    
            // Observe elements (excluding network section elements)
        const animatedElements = document.querySelectorAll(
            '.animate-element, .feature-card, .contact-card, .bento-card'
        );
        
        animatedElements.forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(30px)';
            element.style.transition = 'all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
            observer.observe(element);
        });
}

/**
 * Advanced Counter Animation
 */
function animateCounter(element) {
    const numberElement = element.querySelector('.stat-number');
    if (!numberElement) return;
    
    const targetNumber = parseInt(numberElement.getAttribute('data-count')) || 
                        parseInt(numberElement.textContent.replace(/\D/g, ''));
    
    if (!targetNumber) return;
    
    let currentNumber = 0;
    const increment = targetNumber / 60;
    const duration = 2000;
    const interval = duration / 60;
    
    const timer = setInterval(() => {
        currentNumber += increment;
        
        if (currentNumber >= targetNumber) {
            numberElement.textContent = targetNumber + '+';
            clearInterval(timer);
            
            // Add completion effect
            numberElement.style.transform = 'scale(1.1)';
            setTimeout(() => {
                numberElement.style.transform = 'scale(1)';
            }, 200);
        } else {
            numberElement.textContent = Math.floor(currentNumber);
        }
    }, interval);
}

/**
 * Progressive Enhancement
 */
function initializeProgressiveEnhancement() {
    // Lazy load images
    const images = document.querySelectorAll('img[data-src]');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('loading-skeleton');
                    imageObserver.unobserve(img);
                }
            });
        });
        
        images.forEach(img => {
            img.classList.add('loading-skeleton');
            imageObserver.observe(img);
        });
    }
    
    // Progressive blur removal
    const blurElements = document.querySelectorAll('.progressive-blur');
    const blurObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
                blurObserver.unobserve(entry.target);
            }
        });
    });
    
    blurElements.forEach(element => {
        blurObserver.observe(element);
    });
}

/**
 * Modern Tooltips
 */
function initializeModernTooltips() {
    const tooltipElements = document.querySelectorAll('[data-tooltip]');
    
    tooltipElements.forEach(element => {
        element.addEventListener('mouseenter', function(e) {
            const tooltipText = this.getAttribute('data-tooltip');
            const tooltip = document.createElement('div');
            
            tooltip.className = 'modern-tooltip';
            tooltip.textContent = tooltipText;
            tooltip.style.cssText = `
                position: absolute;
                background: rgba(15, 20, 25, 0.95);
                color: white;
                padding: 8px 12px;
                border-radius: 8px;
                font-size: 14px;
                font-weight: 500;
                white-space: nowrap;
                z-index: 10000;
                opacity: 0;
                transform: translateY(10px);
                transition: all 0.3s ease;
                backdrop-filter: blur(10px);
                border: 1px solid rgba(212, 130, 42, 0.3);
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            `;
            
            document.body.appendChild(tooltip);
            
            const rect = this.getBoundingClientRect();
            tooltip.style.left = `${rect.left + rect.width / 2 - tooltip.offsetWidth / 2}px`;
            tooltip.style.top = `${rect.top - tooltip.offsetHeight - 8}px`;
            
            setTimeout(() => {
                tooltip.style.opacity = '1';
                tooltip.style.transform = 'translateY(0)';
            }, 10);
            
            this._tooltip = tooltip;
        });
        
        element.addEventListener('mouseleave', function() {
            if (this._tooltip) {
                this._tooltip.style.opacity = '0';
                this._tooltip.style.transform = 'translateY(10px)';
                
                setTimeout(() => {
                    if (this._tooltip && this._tooltip.parentNode) {
                        this._tooltip.parentNode.removeChild(this._tooltip);
                    }
                    this._tooltip = null;
                }, 300);
            }
        });
    });
}

/**
 * Advanced Carousel for Modern Interactions
 */
function initializeAdvancedCarousel() {
    const carousels = document.querySelectorAll('.modern-carousel');
    
    carousels.forEach(carousel => {
        const items = carousel.querySelectorAll('.carousel-item');
        const prevBtn = carousel.querySelector('.carousel-prev');
        const nextBtn = carousel.querySelector('.carousel-next');
        const indicators = carousel.querySelector('.carousel-indicators');
        
        let currentIndex = 0;
        
        function updateCarousel() {
            items.forEach((item, index) => {
                item.style.transform = `translateX(${(index - currentIndex) * 100}%)`;
                item.style.opacity = index === currentIndex ? '1' : '0.5';
            });
            
            if (indicators) {
                const dots = indicators.querySelectorAll('.carousel-dot');
                dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === currentIndex);
                });
            }
        }
        
        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % items.length;
                updateCarousel();
            });
        }
        
        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                currentIndex = currentIndex === 0 ? items.length - 1 : currentIndex - 1;
                updateCarousel();
            });
        }
        
        // Auto-play
        setInterval(() => {
            currentIndex = (currentIndex + 1) % items.length;
            updateCarousel();
        }, 5000);
        
        updateCarousel();
    });
}

/**
 * Touch Gestures for Mobile
 */
function initializeTouchGestures() {
    let startX = 0;
    let startY = 0;
    let distX = 0;
    let distY = 0;
    
    const carousels = document.querySelectorAll('.bento-grid, .modern-carousel');
    
    carousels.forEach(element => {
        element.addEventListener('touchstart', function(e) {
            const touchObj = e.changedTouches[0];
            startX = touchObj.pageX;
            startY = touchObj.pageY;
        });
        
        element.addEventListener('touchmove', function(e) {
            e.preventDefault(); // Prevent scrolling
        });
        
        element.addEventListener('touchend', function(e) {
            const touchObj = e.changedTouches[0];
            distX = touchObj.pageX - startX;
            distY = touchObj.pageY - startY;
            
            const swipeThreshold = 100;
            const restraint = 100;
            
            if (Math.abs(distX) >= swipeThreshold && Math.abs(distY) <= restraint) {
                if (distX > 0) {
                    // Swipe right
                    this.dispatchEvent(new CustomEvent('swiperight'));
                } else {
                    // Swipe left
                    this.dispatchEvent(new CustomEvent('swipeleft'));
                }
            }
        });
    });
}

/**
 * Performance Optimizations
 */
function optimizePerformance() {
    // Debounce scroll events
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }
    
    // Throttle resize events
    function throttle(func, limit) {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    }
    
    // Optimize scroll performance
    window.addEventListener('scroll', debounce(function() {
        // Scroll-dependent operations
    }, 16)); // ~60fps
    
    // Optimize resize performance
    window.addEventListener('resize', throttle(function() {
        // Resize-dependent operations
    }, 250));
}

/**
 * Accessibility Enhancements
 */
function enhanceAccessibility() {
    // Keyboard navigation for interactive elements
    const interactiveElements = document.querySelectorAll('.bento-card, .feature-card, .contact-card');
    
    interactiveElements.forEach(element => {
        element.setAttribute('tabindex', '0');
        element.setAttribute('role', 'button');
        
        element.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                this.click();
            }
        });
    });
    
    // Reduce motion for users who prefer it
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        document.body.classList.add('reduce-motion');
        
        // Disable complex animations
        const style = document.createElement('style');
        style.textContent = `
            .reduce-motion *, 
            .reduce-motion *::before, 
            .reduce-motion *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        `;
        document.head.appendChild(style);
    }
}

// Initialize performance optimizations and accessibility
document.addEventListener('DOMContentLoaded', function() {
    optimizePerformance();
    enhanceAccessibility();
});

/**
 * Multi-Level Mega Dropdown
 */
function initializeMegaDropdown() {
    const megaDropdowns = document.querySelectorAll('.mega-dropdown');
    
    megaDropdowns.forEach(dropdown => {
        const categories = dropdown.querySelectorAll('.dropdown-category');
        
        categories.forEach(category => {
            const categoryLink = category.querySelector('.category-link');
            const submenu = category.querySelector('.submenu');
            
            if (!categoryLink || !submenu) return;
            
            let hoverTimeout;
            
            // Mouse enter category
            category.addEventListener('mouseenter', function() {
                clearTimeout(hoverTimeout);
                
                // Hide all other submenus in this dropdown
                categories.forEach(otherCategory => {
                    if (otherCategory !== category) {
                        const otherSubmenu = otherCategory.querySelector('.submenu');
                        if (otherSubmenu) {
                            otherSubmenu.style.opacity = '0';
                            otherSubmenu.style.visibility = 'hidden';
                            otherSubmenu.style.transform = 'translateX(-10px) scale(0.95)';
                        }
                    }
                });
                
                // Show current submenu
                submenu.style.opacity = '1';
                submenu.style.visibility = 'visible';
                submenu.style.transform = 'translateX(0) scale(1)';
            });
            
            // Mouse leave category
            category.addEventListener('mouseleave', function() {
                hoverTimeout = setTimeout(() => {
                    submenu.style.opacity = '0';
                    submenu.style.visibility = 'hidden';
                    submenu.style.transform = 'translateX(-10px) scale(0.95)';
                }, 100);
            });
            
            // Keep submenu open when hovering over it
            submenu.addEventListener('mouseenter', function() {
                clearTimeout(hoverTimeout);
            });
            
            submenu.addEventListener('mouseleave', function() {
                hoverTimeout = setTimeout(() => {
                    submenu.style.opacity = '0';
                    submenu.style.visibility = 'hidden';
                    submenu.style.transform = 'translateX(-10px) scale(0.95)';
                }, 100);
            });
        });
        
        // Close all submenus when leaving the main dropdown
        dropdown.addEventListener('mouseleave', function() {
            categories.forEach(category => {
                const submenu = category.querySelector('.submenu');
                if (submenu) {
                    submenu.style.opacity = '0';
                    submenu.style.visibility = 'hidden';
                    submenu.style.transform = 'translateX(-10px) scale(0.95)';
                }
            });
        });
    });
    
    // Keyboard navigation support
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            // Close all mega dropdowns
            megaDropdowns.forEach(dropdown => {
                const megaMenu = dropdown.querySelector('.mega-menu');
                const categories = dropdown.querySelectorAll('.dropdown-category');
                
                if (megaMenu) {
                    megaMenu.style.opacity = '0';
                    megaMenu.style.visibility = 'hidden';
                }
                
                categories.forEach(category => {
                    const submenu = category.querySelector('.submenu');
                    if (submenu) {
                        submenu.style.opacity = '0';
                        submenu.style.visibility = 'hidden';
                    }
                });
            });
        }
    });
}

// Export functions for global access
window.ModernInteractions = {
    animateCounter,
    initializeModernAnimations,
    initializeScrollAnimations,
    initializeMagneticEffects,
    initializeMegaDropdown
};
