/**
 * Ferroxa Website - Main JavaScript
 * Core functionality and interactions
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initializeNavigation();
    initializeMobileMenu();
    initializeBackToTop();
    initializeContactForm();
    initializeSmoothScrolling();
    initializeScrollEffects();
    initializeVideoControls();
    initializeTabsSystem();
    initializeProductTabs();
    initializeFAQ();
    initializeCounters();
    // initializeNetworkAnimations(); // Disabled per user request
    initializeAccessibility();
});

/**
 * Navigation functionality
 */
function initializeNavigation() {
    const navLinks = document.querySelectorAll('.nav-link[data-section]');
    const sections = document.querySelectorAll('section[id]');
    const header = document.querySelector('.main-header');
    
    // Update active navigation based on scroll position
    function updateActiveNav() {
        let current = '';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            
            if (window.pageYOffset >= sectionTop - 100) {
                current = section.getAttribute('id');
            }
        });
        
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('data-section') === current) {
                link.classList.add('active');
            }
        });
    }
    
    // Handle header visibility on scroll (desktop only)
    let scrollTimeout;
    let isHeaderHovered = false;
    
    function handleHeaderScroll() {
        // Only apply to desktop screens
        if (window.innerWidth > 768) {
            // If at very top of page, keep header hidden
            if (window.pageYOffset <= 50) {
                if (header && !isHeaderHovered) {
                    header.classList.remove('scrolled');
                }
                clearTimeout(scrollTimeout);
                return;
            }
            
            // Show header immediately while scrolling
            if (header) {
                header.classList.add('scrolled');
                // Clear inline styles to let CSS take over
                header.style.transform = '';
                header.style.opacity = '';
                header.style.visibility = '';
            }
            
            // Clear any existing timeout
            clearTimeout(scrollTimeout);
            
            // Hide header after scrolling stops (1 second delay) - but only if not hovered
            scrollTimeout = setTimeout(() => {
                if (header && !isHeaderHovered) {
                    header.classList.remove('scrolled');
                }
            }, 1000);
        }
    }
    
    // Add hover event listeners to header
    if (header && window.innerWidth > 768) {
        header.addEventListener('mouseenter', function() {
            isHeaderHovered = true;
            clearTimeout(scrollTimeout); // Cancel any pending hide
        });
        
        header.addEventListener('mouseleave', function() {
            isHeaderHovered = false;
            // Start hide timer again after mouse leaves
            if (window.pageYOffset > 50) {
                clearTimeout(scrollTimeout);
                scrollTimeout = setTimeout(() => {
                    if (header && !isHeaderHovered) {
                        header.classList.remove('scrolled');
                    }
                }, 1000);
            }
        });
    }
    
    // Force header to start hidden on desktop
    if (window.innerWidth > 768 && header) {
        header.classList.remove('scrolled');
        // Force hide with inline styles as backup
        header.style.transform = 'translateY(-100%)';
        header.style.opacity = '0';
        header.style.visibility = 'hidden';
    }
    
    // Smooth scroll to sections
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('data-section');
            const targetSection = document.getElementById(targetId);
            
            if (targetSection) {
                const headerHeight = document.querySelector('.main-header').offsetHeight;
                const targetPosition = targetSection.offsetTop - headerHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
            
            // Close mobile menu if open
            closeMobileMenu();
        });
    });
    
    // Update active nav and header visibility on scroll
    window.addEventListener('scroll', function() {
        updateActiveNav();
        handleHeaderScroll();
    });
    
    // Handle window resize to update header behavior
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768 && header) {
            // Desktop: ensure header starts hidden
            if (window.pageYOffset <= 50 && !isHeaderHovered) {
                header.classList.remove('scrolled');
            }
        } else if (header) {
            // Mobile: ensure header is always visible
            header.classList.remove('scrolled');
            isHeaderHovered = false; // Reset hover state on mobile
        }
    });
    
    updateActiveNav(); // Initial call
    handleHeaderScroll(); // Initial call
}

/**
 * Mobile menu functionality
 */
function initializeMobileMenu() {
    const mobileToggle = document.getElementById('mobile-menu-toggle');
    const mobileOverlay = document.getElementById('mobile-nav-overlay');
    const mobileClose = document.getElementById('mobile-nav-close');
    const mobileLinks = document.querySelectorAll('.mobile-nav-link');
    
    if (!mobileToggle || !mobileOverlay) return;
    
    // Open mobile menu
    mobileToggle.addEventListener('click', function() {
        mobileOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
        
        // Animate hamburger
        this.classList.add('active');
    });
    
    // Close mobile menu
    function closeMobileMenu() {
        if (mobileOverlay) {
            mobileOverlay.classList.remove('active');
            document.body.style.overflow = '';
            mobileToggle.classList.remove('active');
        }
    }
    
    // Close button
    if (mobileClose) {
        mobileClose.addEventListener('click', closeMobileMenu);
    }
    
    // Close on overlay click
    mobileOverlay.addEventListener('click', function(e) {
        if (e.target === this) {
            closeMobileMenu();
        }
    });
    
    // Close on mobile link click
    mobileLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (!href) return;

            if (href.startsWith('#')) {
                e.preventDefault();
                const targetSection = document.querySelector(href);
                if (targetSection) {
                    closeMobileMenu();

                    setTimeout(() => {
                        const headerHeight = document.querySelector('.main-header').offsetHeight;
                        const targetPosition = targetSection.offsetTop - headerHeight;

                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }, 300);
                }
            } else {
                closeMobileMenu();
            }
        });
    });
    
    // Products dropdown accordion toggle
    const dropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            const parentLi = this.closest('.mobile-dropdown');
            if (parentLi) {
                parentLi.classList.toggle('active');
            }
        });
    });

    // Close on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && mobileOverlay.classList.contains('active')) {
            closeMobileMenu();
        }
    });

    // Make closeMobileMenu globally available
    window.closeMobileMenu = closeMobileMenu;
}

/**
 * Back to top button
 */
function initializeBackToTop() {
    const backToTopBtn = document.getElementById('back-to-top');
    
    if (!backToTopBtn) return;
    
    // Show/hide based on scroll position
    function toggleBackToTop() {
        if (window.pageYOffset > 300) {
            backToTopBtn.classList.add('visible');
        } else {
            backToTopBtn.classList.remove('visible');
        }
    }
    
    // Scroll to top
    backToTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    window.addEventListener('scroll', toggleBackToTop);
    toggleBackToTop(); // Initial call
}

/**
 * Contact form functionality
 */
function initializeContactForm() {
    const contactForm = document.getElementById('contact-form');
    
    if (!contactForm) return;
    
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(this);
        const submitBtn = this.querySelector('.form-submit');
        const originalText = submitBtn.innerHTML;
        
        // Show loading state
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
        submitBtn.disabled = true;
        
        // Send AJAX request
        fetch('api/contact.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Reset form
                this.reset();
                
                // Show success message
                showNotification(data.message, 'success');
            } else {
                // Show error message
                if (data.errors && Array.isArray(data.errors)) {
                    data.errors.forEach(error => {
                        showNotification(error, 'error');
                    });
                } else {
                    showNotification(data.message || 'An error occurred', 'error');
                }
            }
        })
        .catch(error => {
            console.error('Contact form error:', error);
            showNotification('Network error. Please try again.', 'error');
        })
        .finally(() => {
            // Reset button
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        });
    });
    
    // Form validation
    const requiredFields = contactForm.querySelectorAll('[required]');
    
    requiredFields.forEach(field => {
        field.addEventListener('blur', function() {
            validateField(this);
        });
        
        field.addEventListener('input', function() {
            if (this.classList.contains('error')) {
                validateField(this);
            }
        });
    });
    
    function validateField(field) {
        const value = field.value.trim();
        const isValid = value !== '' && field.checkValidity();
        
        field.classList.toggle('error', !isValid);
        
        // Remove existing error message
        const existingError = field.parentNode.querySelector('.error-message');
        if (existingError) {
            existingError.remove();
        }
        
        // Add error message if invalid
        if (!isValid && value !== '') {
            const errorMsg = document.createElement('div');
            errorMsg.className = 'error-message';
            errorMsg.textContent = getErrorMessage(field);
            field.parentNode.appendChild(errorMsg);
        }
    }
    
    function getErrorMessage(field) {
        if (field.type === 'email') {
            return 'Please enter a valid email address';
        }
        return 'This field is required';
    }
}

/**
 * Smooth scrolling for anchor links
 */
function initializeSmoothScrolling() {
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            if (href === '#') {
                e.preventDefault();
                return;
            }
            
            const targetElement = document.querySelector(href);
            
            if (targetElement) {
                e.preventDefault();
                
                const headerHeight = document.querySelector('.main-header').offsetHeight;
                const targetPosition = targetElement.offsetTop - headerHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

/**
 * Scroll effects and animations
 */
function initializeScrollEffects() {
    // Header background on scroll
    const header = document.querySelector('.main-header');
    
    function updateHeaderOnScroll() {
        if (window.pageYOffset > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }
    
    window.addEventListener('scroll', updateHeaderOnScroll);
    
    // Intersection Observer for fade-in animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // Observe elements for animation
    const animateElements = document.querySelectorAll(
        '.service-card, .product-card, .contact-card, .about-content, .section-header'
    );
    
    animateElements.forEach(el => {
        el.classList.add('animate-element');
        observer.observe(el);
    });
}

/**
 * Video controls
 */
function initializeVideoControls() {
    const heroVideo = document.querySelector('.hero-video');
    
    if (!heroVideo) return;

    // Play button functionality (if exists)
    const playButtons = document.querySelectorAll('.play-button');
    
    playButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Handle video play functionality
            console.log('Play button clicked');
        });
    });
    
    // Video fallback handling
    heroVideo.addEventListener('error', function() {
        const videoContainer = this.parentElement;
        videoContainer.style.background = 'linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-blue-light) 100%)';
    });
}

/**
 * Tabs system functionality
 */
function initializeTabsSystem() {
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabPanels = document.querySelectorAll('.tab-panel');
    
    if (tabButtons.length === 0) return;
    
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');
            
            // Remove active class from all buttons and panels
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabPanels.forEach(panel => panel.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            // Show corresponding panel
            const targetPanel = document.getElementById(targetTab);
            if (targetPanel) {
                targetPanel.classList.add('active');
            }
        });
    });
    
    // Keyboard navigation for tabs
    tabButtons.forEach((button, index) => {
        button.addEventListener('keydown', function(e) {
            let newIndex = index;
            
            if (e.key === 'ArrowRight' || e.key === 'ArrowDown') {
                e.preventDefault();
                newIndex = (index + 1) % tabButtons.length;
            } else if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') {
                e.preventDefault();
                newIndex = index === 0 ? tabButtons.length - 1 : index - 1;
            }
            
            if (newIndex !== index) {
                tabButtons[newIndex].focus();
                tabButtons[newIndex].click();
            }
        });
    });
}

/**
 * FAQ functionality
 */
function initializeFAQ() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', function() {
            // Close all other FAQ items
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });
            
            // Toggle current item
            item.classList.toggle('active');
        });
    });
}

/**
 * Animated counter functionality
 */
function initializeCounters() {
    const counters = document.querySelectorAll('.stat-number[data-target]');
    const options = {
        threshold: 0.7,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, options);

    counters.forEach(counter => {
        observer.observe(counter);
    });
}

function animateCounter(element) {
    const target = parseInt(element.getAttribute('data-target'));
    const duration = 2000; // 2 seconds
    const step = target / (duration / 16); // 60 FPS
    let current = 0;

    const timer = setInterval(() => {
        current += step;
        if (current >= target) {
            element.textContent = target;
            clearInterval(timer);
        } else {
            element.textContent = Math.floor(current);
        }
    }, 16);
}

/**
 * Accessibility improvements
 */
function initializeAccessibility() {
    // Skip to main content link removed
    
    // Add main content id
    const mainContent = document.querySelector('main') || document.querySelector('.hero-section');
    if (mainContent && !mainContent.id) {
        mainContent.id = 'main-content';
    }
    
    // Keyboard navigation for dropdowns
    const dropdowns = document.querySelectorAll('.dropdown');
    
    dropdowns.forEach(dropdown => {
        const trigger = dropdown.querySelector('.nav-link');
        const menu = dropdown.querySelector('.dropdown-menu');
        
        if (!trigger || !menu) return;
        
        trigger.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                menu.classList.toggle('show');
            }
        });
    });
    
    // Focus management for mobile menu
    const mobileOverlay = document.getElementById('mobile-nav-overlay');
    const mobileClose = document.getElementById('mobile-nav-close');
    
    if (mobileOverlay && mobileClose) {
        mobileOverlay.addEventListener('transitionend', function() {
            if (this.classList.contains('active')) {
                mobileClose.focus();
            }
        });
    }
    
    // Theme toggle functionality
    const themeToggle = document.getElementById('theme-toggle');
    if (themeToggle) {
        // Initialize theme from localStorage or default to light
        const savedTheme = localStorage.getItem('theme') || 'light';
        setTheme(savedTheme);
        
        themeToggle.addEventListener('click', function() {
            const currentTheme = document.body.getAttribute('data-theme') || 'light';
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            
            setTheme(newTheme);
            localStorage.setItem('theme', newTheme);
            
            // Update aria-label
            this.setAttribute('aria-label', `Switch to ${currentTheme} mode`);
            
            // Announce to screen readers
            const announcement = document.createElement('div');
            announcement.setAttribute('aria-live', 'polite');
            announcement.setAttribute('aria-atomic', 'true');
            announcement.className = 'sr-only';
            announcement.textContent = `Switched to ${newTheme} mode`;
            
            document.body.appendChild(announcement);
            
            setTimeout(() => {
                document.body.removeChild(announcement);
            }, 1000);
        });
    }
    
    // Theme setting function
    function setTheme(theme) {
        document.body.setAttribute('data-theme', theme);
        document.body.className = theme + '-theme';
        document.documentElement.setAttribute('data-theme', theme);
        
        // Update theme toggle icons
        const darkIcon = document.querySelector('.theme-toggle .dark-icon');
        const lightIcon = document.querySelector('.theme-toggle .light-icon');
        
        if (darkIcon && lightIcon) {
            if (theme === 'dark') {
                darkIcon.style.opacity = '0';
                lightIcon.style.opacity = '1';
            } else {
                darkIcon.style.opacity = '1';
                lightIcon.style.opacity = '0';
            }
        }
    }
}

/**
 * Utility function to show notifications
 */
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
        <div class="notification-content">
            <span class="notification-message">${message}</span>
            <button class="notification-close" aria-label="Close notification">
                <i class="fas fa-times"></i>
            </button>
        </div>
    `;
    
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: ${type === 'success' ? 'var(--copper)' : type === 'error' ? '#dc3545' : 'var(--primary-blue)'};
        color: white;
        padding: 1rem 1.5rem;
        border-radius: var(--radius-medium);
        box-shadow: var(--shadow-medium);
        z-index: 10000;
        transform: translateX(100%);
        transition: transform var(--transition-normal);
        max-width: 400px;
    `;
    
    document.body.appendChild(notification);
    
    // Animate in
    setTimeout(() => {
        notification.style.transform = 'translateX(0)';
    }, 100);
    
    // Close button functionality
    const closeBtn = notification.querySelector('.notification-close');
    closeBtn.addEventListener('click', function() {
        hideNotification(notification);
    });
    
    // Auto-hide after 5 seconds
    setTimeout(() => {
        hideNotification(notification);
    }, 5000);
}

function hideNotification(notification) {
    notification.style.transform = 'translateX(100%)';
    
    setTimeout(() => {
        if (notification.parentNode) {
            notification.parentNode.removeChild(notification);
        }
    }, 300);
}

/**
 * Performance optimization
 */
function optimizePerformance() {
    // Lazy load images
    const images = document.querySelectorAll('img[data-src]');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });
        
        images.forEach(img => imageObserver.observe(img));
    } else {
        // Fallback for older browsers
        images.forEach(img => {
            img.src = img.dataset.src;
            img.classList.remove('lazy');
        });
    }
}

// Initialize performance optimizations
document.addEventListener('DOMContentLoaded', optimizePerformance);

/**
 * Initialize product tabs specifically for products page
 */
function initializeProductTabs() {
    const productTabBtns = document.querySelectorAll('.products-tabs-navigation .tab-btn');
    const productTabPanels = document.querySelectorAll('.products-tabs-content .tab-panel');
    
    if (!productTabBtns.length || !productTabPanels.length) return;
    
    productTabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const targetTab = btn.getAttribute('data-tab');
            
            // Remove active class from all tabs and panels
            productTabBtns.forEach(tab => tab.classList.remove('active'));
            productTabPanels.forEach(panel => panel.classList.remove('active'));
            
            // Add active class to clicked tab and corresponding panel
            btn.classList.add('active');
            const targetPanel = document.getElementById(targetTab);
            if (targetPanel) {
                targetPanel.classList.add('active');
                
                // Trigger animations when tab becomes active
                const animatedElements = targetPanel.querySelectorAll('.product-item, .tab-image, .category-title');
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
        });
        
        // Keyboard navigation support
        btn.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                btn.click();
            }
        });
    });
    
    // Initialize first tab with animations
    if (productTabPanels[0]) {
        const firstPanel = productTabPanels[0];
        const animatedElements = firstPanel.querySelectorAll('.product-item, .tab-image, .category-title');
        animatedElements.forEach((el, index) => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                el.style.transition = 'all 0.6s ease';
                el.style.opacity = '1';
                el.style.transform = 'translateY(0)';
            }, index * 100 + 300);
        });
    }
}

/**
 * Network Section Animations - DISABLED per user request
 */
function initializeNetworkAnimations() {
    // Animations disabled for network section
    return;
}

/**
 * Animate network statistics counters - DISABLED
 */
function animateNetworkCounter(statElement) {
    // Counter animations disabled
    return;
}

/**
 * Add special effects to location items - DISABLED
 */
function addLocationEffects(locationElement) {
    // Location effects disabled
    return;
}

/**
 * Add floating network elements background - DISABLED
 */
function addNetworkFloatingElements(networkSection) {
    // Floating elements disabled
    return;
}

// Export functions for global access
window.FerroxaMain = {
    showNotification,
    hideNotification
};
