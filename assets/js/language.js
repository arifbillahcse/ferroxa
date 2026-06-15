/**
 * Ferroxa Website - Language System
 * Multi-language support for English, Arabic, and French
 */

class LanguageManager {
    constructor() {
        this.supportedLanguages = ['en', 'ar', 'fr'];
        this.currentLanguage = this.getCurrentLanguage();
        this.translations = {};
        this.langToggle = document.getElementById('lang-toggle');
        this.langMenu = document.getElementById('lang-menu');
        this.rtlLanguages = ['ar'];
        
        this.init();
    }
    
    init() {
        this.setupLanguageToggle();
        this.setupLanguageMenu();
        this.applyLanguage(this.currentLanguage);
        this.handleRTL();
        this.setupKeyboardNavigation();
    }
    
    getCurrentLanguage() {
        // Check URL parameter first
        const urlParams = new URLSearchParams(window.location.search);
        const urlLang = urlParams.get('lang');
        
        if (urlLang && this.supportedLanguages.includes(urlLang)) {
            return urlLang;
        }
        
        // Check stored preference
        try {
            const stored = localStorage.getItem('ferroxa-language');
            if (stored && this.supportedLanguages.includes(stored)) {
                return stored;
            }
        } catch (e) {
            console.warn('localStorage not available:', e);
        }
        
        // Check browser language
        const browserLang = navigator.language || navigator.userLanguage;
        const langCode = browserLang.split('-')[0];
        
        if (this.supportedLanguages && this.supportedLanguages.includes && this.supportedLanguages.includes(langCode)) {
            return langCode;
        }
        
        // Default to English
        return 'en';
    }
    
    setupLanguageToggle() {
        if (!this.langToggle) return;
        
        this.langToggle.addEventListener('click', () => {
            this.toggleLanguageMenu();
        });
        
        // Update current language display
        this.updateLanguageDisplay();
        
        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!this.langToggle.contains(e.target) && !this.langMenu?.contains(e.target)) {
                this.closeLanguageMenu();
            }
        });
    }
    
    setupLanguageMenu() {
        if (!this.langMenu) return;
        
        const langOptions = this.langMenu.querySelectorAll('.lang-option');
        
        langOptions.forEach(option => {
            option.addEventListener('click', (e) => {
                e.preventDefault();
                const selectedLang = option.getAttribute('data-lang');
                
                if (selectedLang && selectedLang !== this.currentLanguage) {
                    this.switchLanguage(selectedLang);
                }
                
                this.closeLanguageMenu();
            });
        });
        
        // Update active state
        this.updateActiveLanguageOption();
    }
    
    setupKeyboardNavigation() {
        if (!this.langToggle || !this.langMenu) return;
        
        this.langToggle.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                this.toggleLanguageMenu();
            } else if (e.key === 'ArrowDown') {
                e.preventDefault();
                this.openLanguageMenu();
                this.focusFirstMenuItem();
            }
        });
        
        this.langMenu.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                this.closeLanguageMenu();
                this.langToggle.focus();
            } else if (e.key === 'ArrowDown') {
                e.preventDefault();
                this.focusNextMenuItem();
            } else if (e.key === 'ArrowUp') {
                e.preventDefault();
                this.focusPreviousMenuItem();
            }
        });
    }
    
    toggleLanguageMenu() {
        if (this.langMenu.style.opacity === '1' || this.langMenu.classList.contains('show')) {
            this.closeLanguageMenu();
        } else {
            this.openLanguageMenu();
        }
    }
    
    openLanguageMenu() {
        if (!this.langMenu) return;
        
        this.langMenu.classList.add('show');
        this.langMenu.style.opacity = '1';
        this.langMenu.style.visibility = 'visible';
        this.langMenu.style.transform = 'translateY(0)';
        
        // Set aria-expanded
        this.langToggle.setAttribute('aria-expanded', 'true');
    }
    
    closeLanguageMenu() {
        if (!this.langMenu) return;
        
        this.langMenu.classList.remove('show');
        this.langMenu.style.opacity = '0';
        this.langMenu.style.visibility = 'hidden';
        this.langMenu.style.transform = 'translateY(-10px)';
        
        // Set aria-expanded
        this.langToggle.setAttribute('aria-expanded', 'false');
    }
    
    focusFirstMenuItem() {
        const firstItem = this.langMenu.querySelector('.lang-option');
        if (firstItem) firstItem.focus();
    }
    
    focusNextMenuItem() {
        const current = document.activeElement;
        const items = Array.from(this.langMenu.querySelectorAll('.lang-option'));
        const currentIndex = items.indexOf(current);
        const nextIndex = (currentIndex + 1) % items.length;
        items[nextIndex].focus();
    }
    
    focusPreviousMenuItem() {
        const current = document.activeElement;
        const items = Array.from(this.langMenu.querySelectorAll('.lang-option'));
        const currentIndex = items.indexOf(current);
        const prevIndex = currentIndex === 0 ? items.length - 1 : currentIndex - 1;
        items[prevIndex].focus();
    }
    
    switchLanguage(langCode) {
        if (!this.supportedLanguages.includes(langCode)) {
            console.warn('Unsupported language:', langCode);
            return;
        }

        try {
            localStorage.setItem('ferroxa-language', langCode);
        } catch (e) {
            console.warn('Could not store language preference:', e);
        }

        // Resolve the correct static file for this language
        const filename = window.location.pathname.split('/').pop() || 'index.html';

        // Strip any existing _lang=XX.html suffix to get the base name
        let base = filename.replace(/_lang=[a-z]+\.html$/, '');

        // .php.html files: strip the trailing .html so base ends in .php
        if (base.endsWith('.php.html')) {
            base = base.slice(0, -5);
        }

        const targetFile = base + '_lang=' + langCode + '.html';
        const dir = window.location.pathname.substring(0, window.location.pathname.lastIndexOf('/') + 1);
        window.location.href = dir + targetFile;
    }
    
    applyLanguage(langCode) {
        this.currentLanguage = langCode;
        
        // Update document language
        document.documentElement.lang = langCode;
        
        // Handle RTL
        this.handleRTL();
        
        // Update language display
        this.updateLanguageDisplay();
        
        // Update active option
        this.updateActiveLanguageOption();
        
        // Dispatch language change event
        this.dispatchLanguageChangeEvent(langCode);
    }
    
    handleRTL() {
        const isRTL = this.rtlLanguages.includes(this.currentLanguage);
        
        document.documentElement.dir = isRTL ? 'rtl' : 'ltr';
        document.body.classList.toggle('rtl', isRTL);
        
        // Update specific elements for RTL
        if (isRTL) {
            this.applyRTLStyles();
        } else {
            this.removeRTLStyles();
        }
    }
    
    applyRTLStyles() {
        // Add RTL-specific adjustments
        const rtlStyles = document.getElementById('rtl-dynamic-styles');
        if (!rtlStyles) {
            const style = document.createElement('style');
            style.id = 'rtl-dynamic-styles';
            style.textContent = `
                [dir="rtl"] .hero-cta-btn:hover i {
                    transform: translateX(-5px);
                }
                [dir="rtl"] .scroll-indicator {
                    animation: bounceRTL 2s infinite;
                }
                @keyframes bounceRTL {
                    0%, 20%, 50%, 80%, 100% {
                        transform: translateX(50%) translateY(0);
                    }
                    40% {
                        transform: translateX(50%) translateY(-10px);
                    }
                    60% {
                        transform: translateX(50%) translateY(-5px);
                    }
                }
            `;
            document.head.appendChild(style);
        }
    }
    
    removeRTLStyles() {
        const rtlStyles = document.getElementById('rtl-dynamic-styles');
        if (rtlStyles) {
            rtlStyles.remove();
        }
    }
    
    updateLanguageDisplay() {
        if (!this.langToggle) return;
        
        const currentLangSpan = this.langToggle.querySelector('.current-lang');
        if (currentLangSpan) {
            currentLangSpan.textContent = this.currentLanguage.toUpperCase();
        }
        
        // Update aria-label
        const langNames = {
            'en': 'English',
            'ar': 'العربية',
            'fr': 'Français'
        };
        
        this.langToggle.setAttribute('aria-label', `Current language: ${langNames[this.currentLanguage]}`);
    }
    
    updateActiveLanguageOption() {
        if (!this.langMenu) return;
        
        const langOptions = this.langMenu.querySelectorAll('.lang-option');
        
        langOptions.forEach(option => {
            const isActive = option.getAttribute('data-lang') === this.currentLanguage;
            option.classList.toggle('active', isActive);
            option.setAttribute('aria-current', isActive ? 'true' : 'false');
        });
    }
    
    dispatchLanguageChangeEvent(langCode) {
        const event = new CustomEvent('languagechange', {
            detail: { 
                language: langCode,
                isRTL: this.rtlLanguages.includes(langCode)
            }
        });
        document.dispatchEvent(event);
    }
    
    // Public methods
    getLanguage() {
        return this.currentLanguage;
    }
    
    isRTL() {
        return this.rtlLanguages.includes(this.currentLanguage);
    }
    
    getSupportedLanguages() {
        return [...this.supportedLanguages];
    }
    
    // Translation utilities (for future use with client-side translations)
    async loadTranslations(langCode) {
        try {
            const response = await fetch(`/api/translations/${langCode}`);
            if (response.ok) {
                this.translations[langCode] = await response.json();
                return this.translations[langCode];
            }
        } catch (e) {
            console.warn('Could not load translations:', e);
        }
        return null;
    }
    
    translate(key, langCode = null) {
        const lang = langCode || this.currentLanguage;
        return this.translations[lang]?.[key] || key;
    }
}

// Language utilities
class LanguageUtils {
    static getCurrentLanguage() {
        return document.documentElement.lang || 'en';
    }
    
    static isRTL() {
        return document.documentElement.dir === 'rtl';
    }
    
    static onLanguageChange(callback) {
        document.addEventListener('languagechange', callback);
    }
    
    static offLanguageChange(callback) {
        document.removeEventListener('languagechange', callback);
    }
    
    static formatNumber(number, langCode = null) {
        const lang = langCode || LanguageUtils.getCurrentLanguage();
        
        try {
            return new Intl.NumberFormat(lang).format(number);
        } catch (e) {
            return number.toString();
        }
    }
    
    static formatDate(date, langCode = null) {
        const lang = langCode || LanguageUtils.getCurrentLanguage();
        
        try {
            return new Intl.DateTimeFormat(lang).format(date);
        } catch (e) {
            return date.toLocaleDateString();
        }
    }
    
    static formatCurrency(amount, currency = 'USD', langCode = null) {
        const lang = langCode || LanguageUtils.getCurrentLanguage();
        
        try {
            return new Intl.NumberFormat(lang, {
                style: 'currency',
                currency: currency
            }).format(amount);
        } catch (e) {
            return `${currency} ${amount}`;
        }
    }
    
    // Text direction utilities
    static setTextDirection(element, direction = null) {
        const dir = direction || (LanguageUtils.isRTL() ? 'rtl' : 'ltr');
        element.dir = dir;
    }
    
    static getTextDirection() {
        return LanguageUtils.isRTL() ? 'rtl' : 'ltr';
    }
}

// Form handling for multilingual content
class MultilingualForm {
    constructor(formElement) {
        this.form = formElement;
        this.init();
    }
    
    init() {
        this.setupPlaceholders();
        this.setupValidation();
    }
    
    setupPlaceholders() {
        const inputs = this.form.querySelectorAll('input, textarea');
        const currentLang = LanguageUtils.getCurrentLanguage();
        
        inputs.forEach(input => {
            const placeholderKey = input.dataset.placeholder;
            if (placeholderKey) {
                // This would typically load from translation files
                const placeholders = {
                    'en': {
                        'name': 'Full Name',
                        'email': 'Email Address',
                        'phone': 'Phone Number',
                        'company': 'Company Name',
                        'subject': 'Subject',
                        'message': 'Your Message'
                    },
                    'ar': {
                        'name': 'الاسم الكامل',
                        'email': 'البريد الإلكتروني',
                        'phone': 'رقم الهاتف',
                        'company': 'اسم الشركة',
                        'subject': 'الموضوع',
                        'message': 'رسالتك'
                    },
                    'fr': {
                        'name': 'Nom Complet',
                        'email': 'Adresse E-mail',
                        'phone': 'Numéro de Téléphone',
                        'company': 'Nom de l\'Entreprise',
                        'subject': 'Sujet',
                        'message': 'Votre Message'
                    }
                };
                
                const placeholder = placeholders[currentLang]?.[placeholderKey] || placeholderKey;
                input.placeholder = placeholder;
            }
        });
    }
    
    setupValidation() {
        const inputs = this.form.querySelectorAll('input, textarea');
        
        inputs.forEach(input => {
            input.addEventListener('invalid', (e) => {
                this.setCustomValidationMessage(e.target);
            });
        });
    }
    
    setCustomValidationMessage(input) {
        const currentLang = LanguageUtils.getCurrentLanguage();
        const type = input.type;
        const isRequired = input.hasAttribute('required');
        
        const messages = {
            'en': {
                'required': 'This field is required',
                'email': 'Please enter a valid email address',
                'tel': 'Please enter a valid phone number'
            },
            'ar': {
                'required': 'هذا الحقل مطلوب',
                'email': 'يرجى إدخال عنوان بريد إلكتروني صحيح',
                'tel': 'يرجى إدخال رقم هاتف صحيح'
            },
            'fr': {
                'required': 'Ce champ est requis',
                'email': 'Veuillez saisir une adresse e-mail valide',
                'tel': 'Veuillez saisir un numéro de téléphone valide'
            }
        };
        
        let message = '';
        
        if (input.validity.valueMissing && isRequired) {
            message = messages[currentLang]?.['required'] || 'This field is required';
        } else if (input.validity.typeMismatch && type === 'email') {
            message = messages[currentLang]?.['email'] || 'Please enter a valid email address';
        } else if (input.validity.typeMismatch && type === 'tel') {
            message = messages[currentLang]?.['tel'] || 'Please enter a valid phone number';
        }
        
        input.setCustomValidity(message);
    }
}

// Initialize language system
document.addEventListener('DOMContentLoaded', function() {
    window.languageManager = new LanguageManager();
    
    // Initialize multilingual forms
    const forms = document.querySelectorAll('form');
    forms.forEach(form => new MultilingualForm(form));
    
    // Handle browser back/forward
    window.addEventListener('popstate', function() {
        location.reload();
    });
});

// Global utilities
window.LanguageUtils = LanguageUtils;
window.MultilingualForm = MultilingualForm;

// Export for ES6 modules (if needed)
if (typeof module !== 'undefined' && module.exports) {
    module.exports = { LanguageManager, LanguageUtils, MultilingualForm };
}
