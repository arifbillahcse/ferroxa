/**
 * Metallura Website - Theme System
 * Dark/Light mode toggle functionality
 */

class ThemeManager {
    constructor() {
        this.currentTheme = this.getStoredTheme() || this.getSystemTheme();
        this.themeToggle = document.getElementById('theme-toggle');
        
        this.init();
    }
    
    init() {
        // Apply initial theme
        this.applyTheme(this.currentTheme);
        
        // Setup toggle button
        if (this.themeToggle) {
            this.setupToggleButton();
        }
        
        // Listen for system theme changes
        this.listenForSystemThemeChanges();
        
        // Update meta theme-color
        this.updateMetaThemeColor();
    }
    
    getStoredTheme() {
        try {
            return localStorage.getItem('metallura-theme');
        } catch (e) {
            console.warn('localStorage not available:', e);
            return null;
        }
    }
    
    getSystemTheme() {
        // Always default to light theme unless user specifically chooses dark
        return 'light';
    }
    
    storeTheme(theme) {
        try {
            localStorage.setItem('metallura-theme', theme);
        } catch (e) {
            console.warn('Could not store theme preference:', e);
        }
    }
    
    applyTheme(theme) {
        // Remove existing theme classes
        document.body.classList.remove('light-theme', 'dark-theme');
        
        // Add new theme class
        document.body.classList.add(`${theme}-theme`);
        
        // Update data attribute
        document.body.setAttribute('data-theme', theme);
        
        // Update current theme
        this.currentTheme = theme;
        
        // Store preference
        this.storeTheme(theme);
        
        // Update toggle button state
        this.updateToggleButton();
        
        // Update meta theme-color
        this.updateMetaThemeColor();
        
        // Dispatch theme change event
        this.dispatchThemeChangeEvent(theme);
    }
    
    toggleTheme() {
        const newTheme = this.currentTheme === 'light' ? 'dark' : 'light';
        this.applyTheme(newTheme);
        
        // Analytics tracking (if available)
        if (typeof gtag !== 'undefined') {
            gtag('event', 'theme_toggle', {
                'theme': newTheme
            });
        }
    }
    
    setupToggleButton() {
        this.themeToggle.addEventListener('click', () => {
            this.toggleTheme();
        });
        
        // Keyboard support
        this.themeToggle.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                this.toggleTheme();
            }
        });
        
        // Initial button state
        this.updateToggleButton();
        
        // Setup mobile navigation theme toggle
        this.setupMobileNavToggle();
    }
    
    setupMobileNavToggle() {
        const mobileNavThemeToggle = document.getElementById('mobile-nav-theme-toggle');
        if (mobileNavThemeToggle) {
            mobileNavThemeToggle.addEventListener('click', () => {
                this.toggleTheme();
                // Close mobile menu after theme toggle
                this.closeMobileMenu();
            });
            
            // Keyboard support
            mobileNavThemeToggle.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    this.toggleTheme();
                    this.closeMobileMenu();
                }
            });
        }
    }
    
    closeMobileMenu() {
        const mobileNavOverlay = document.getElementById('mobile-nav-overlay');
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        
        if (mobileNavOverlay) {
            mobileNavOverlay.classList.remove('active');
        }
        
        if (mobileMenuToggle) {
            mobileMenuToggle.classList.remove('active');
            mobileMenuToggle.setAttribute('aria-expanded', 'false');
        }
        
        // Re-enable body scroll
        document.body.style.overflow = '';
    }
    
    updateToggleButton() {
        if (!this.themeToggle) return;
        
        const isDark = this.currentTheme === 'dark';
        
        // Update title
        this.themeToggle.title = `Switch to ${isDark ? 'light' : 'dark'} mode`;
        
        // Update aria-label
        this.themeToggle.setAttribute('aria-label', `Switch to ${isDark ? 'light' : 'dark'} mode`);
        
        // Update aria-pressed
        this.themeToggle.setAttribute('aria-pressed', isDark.toString());
    }
    
    updateMetaThemeColor() {
        const metaThemeColor = document.querySelector('meta[name="theme-color"]');
        const color = this.currentTheme === 'dark' ? '#1a1a1a' : '#1a2332';
        
        if (metaThemeColor) {
            metaThemeColor.setAttribute('content', color);
        } else {
            const meta = document.createElement('meta');
            meta.name = 'theme-color';
            meta.content = color;
            document.head.appendChild(meta);
        }
    }
    
    listenForSystemThemeChanges() {
        if (!window.matchMedia) return;
        
        const mediaQuery = window.matchMedia('(prefers-color-scheme: dark)');
        
        const handleSystemThemeChange = (e) => {
            // Only update if user hasn't manually set a preference
            if (!this.getStoredTheme()) {
                const systemTheme = e.matches ? 'dark' : 'light';
                this.applyTheme(systemTheme);
            }
        };
        
        // Modern browsers
        if (mediaQuery.addEventListener) {
            mediaQuery.addEventListener('change', handleSystemThemeChange);
        } else {
            // Fallback for older browsers
            mediaQuery.addListener(handleSystemThemeChange);
        }
    }
    
    dispatchThemeChangeEvent(theme) {
        const event = new CustomEvent('themechange', {
            detail: { theme }
        });
        document.dispatchEvent(event);
    }
    
    // Public methods
    setTheme(theme) {
        if (['light', 'dark'].includes(theme)) {
            this.applyTheme(theme);
        }
    }
    
    getCurrentTheme() {
        return this.currentTheme;
    }
    
    resetToSystemTheme() {
        try {
            localStorage.removeItem('metallura-theme');
        } catch (e) {
            console.warn('Could not remove theme preference:', e);
        }
        
        const systemTheme = this.getSystemTheme();
        this.applyTheme(systemTheme);
    }
}

// Theme-specific utilities
class ThemeUtils {
    static isDarkTheme() {
        return document.body.classList.contains('dark-theme');
    }
    
    static isLightTheme() {
        return document.body.classList.contains('light-theme');
    }
    
    static getCurrentTheme() {
        return document.body.getAttribute('data-theme') || 'light';
    }
    
    static onThemeChange(callback) {
        document.addEventListener('themechange', callback);
    }
    
    static offThemeChange(callback) {
        document.removeEventListener('themechange', callback);
    }
    
    // Color utilities
    static getThemeColor(variable) {
        return getComputedStyle(document.documentElement)
            .getPropertyValue(variable).trim();
    }
    
    static setThemeColor(variable, value) {
        document.documentElement.style.setProperty(variable, value);
    }
}

// CSS-in-JS theme-dependent styles
class ThemeStyles {
    constructor() {
        this.styleSheet = this.createStyleSheet();
        this.init();
    }
    
    createStyleSheet() {
        const style = document.createElement('style');
        style.id = 'theme-dynamic-styles';
        document.head.appendChild(style);
        return style.sheet;
    }
    
    init() {
        this.addAnimationStyles();
        this.addUtilityStyles();
        
        // Update styles on theme change
        document.addEventListener('themechange', () => {
            this.updateDynamicStyles();
        });
    }
    
    addAnimationStyles() {
        const animationCSS = `
            .animate-element {
                opacity: 0;
                transform: translateY(30px);
                transition: opacity 0.6s ease, transform 0.6s ease;
            }
            
            .animate-element.animate-in {
                opacity: 1;
                transform: translateY(0);
            }
            
            .hero-video {
                transition: opacity 0.8s ease;
            }
            
            .theme-transition,
            .theme-transition *,
            .theme-transition *:before,
            .theme-transition *:after {
                transition: all 0.3s ease !important;
                transition-delay: 0 !important;
            }
        `;
        
        this.addRule(animationCSS);
    }
    
    addUtilityStyles() {
        const utilityCSS = `
            .sr-only {
                position: absolute !important;
                width: 1px !important;
                height: 1px !important;
                padding: 0 !important;
                margin: -1px !important;
                overflow: hidden !important;
                clip: rect(0, 0, 0, 0) !important;
                white-space: nowrap !important;
                border: 0 !important;
            }
            
            .error-message {
                color: #dc3545;
                font-size: 0.875rem;
                margin-top: 0.25rem;
                display: block;
            }
            
            .form-input.error,
            .form-textarea.error {
                border-color: #dc3545;
                box-shadow: 0 0 0 3px rgba(220, 53, 69, 0.1);
            }
            
            .notification-content {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 1rem;
            }
            
            .notification-close {
                background: transparent;
                border: none;
                color: currentColor;
                cursor: pointer;
                padding: 0.25rem;
                border-radius: 50%;
                transition: background-color 0.2s ease;
            }
            
            .notification-close:hover {
                background: rgba(255, 255, 255, 0.2);
            }
        `;
        
        this.addRule(utilityCSS);
    }
    
    updateDynamicStyles() {
        // Add theme-specific dynamic styles here
        const isDark = ThemeUtils.isDarkTheme();
        
        const dynamicCSS = `
            .main-header.scrolled {
                background: ${isDark ? 'rgba(45, 45, 45, 0.98)' : 'rgba(26, 35, 50, 0.98)'};
                box-shadow: 0 2px 20px ${isDark ? 'rgba(0, 0, 0, 0.3)' : 'rgba(0, 0, 0, 0.1)'};
            }
        `;
        
        this.addRule(dynamicCSS, 'dynamic-theme-styles');
    }
    
    addRule(css, id = null) {
        if (id) {
            // Remove existing rule with same id
            this.removeRule(id);
        }
        
        try {
            // Clean CSS by removing extra whitespace and newlines
            const cleanCSS = css.replace(/\s+/g, ' ').trim();
            const index = this.styleSheet.insertRule(cleanCSS, this.styleSheet.cssRules.length);
            
            if (id) {
                this.styleSheet.cssRules[index].id = id;
            }
        } catch (e) {
            console.warn('Could not insert CSS rule:', e);
            // Fallback: add CSS via style element
            try {
                const style = document.createElement('style');
                style.textContent = css;
                if (id) style.id = id;
                document.head.appendChild(style);
            } catch (fallbackError) {
                console.warn('Fallback CSS insertion also failed:', fallbackError);
            }
        }
    }
    
    removeRule(id) {
        for (let i = this.styleSheet.cssRules.length - 1; i >= 0; i--) {
            if (this.styleSheet.cssRules[i].id === id) {
                this.styleSheet.deleteRule(i);
                break;
            }
        }
    }
}

// Initialize theme system when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    // Add transition class for smooth theme switching
    document.body.classList.add('theme-transition');
    
    // Initialize theme manager
    window.themeManager = new ThemeManager();
    
    // Initialize theme styles
    window.themeStyles = new ThemeStyles();
    
    // Remove transition class after initialization
    setTimeout(() => {
        document.body.classList.remove('theme-transition');
    }, 100);
    
    // Handle prefers-reduced-motion
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        document.body.classList.add('reduced-motion');
    }
});

// Global theme utilities
window.ThemeUtils = ThemeUtils;

// Export for ES6 modules (if needed)
if (typeof module !== 'undefined' && module.exports) {
    module.exports = { ThemeManager, ThemeUtils, ThemeStyles };
}
