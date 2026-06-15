/**
 * Ferroxa - Language dropdown (WordPress theme).
 *
 * Language switching itself is handled server-side: each .lang-option is a
 * real link to the current page with ?lang=xx. This script only opens and
 * closes the language menu. The previous static-file switcher (language.js)
 * is intentionally not loaded.
 */
(function () {
	'use strict';

	document.addEventListener('DOMContentLoaded', function () {
		var toggle = document.getElementById('lang-toggle');
		var menu = document.getElementById('lang-menu');

		if (!toggle || !menu) {
			return;
		}

		function openMenu() {
			menu.classList.add('show');
			menu.style.opacity = '1';
			menu.style.visibility = 'visible';
			menu.style.transform = 'translateY(0)';
			toggle.setAttribute('aria-expanded', 'true');
		}

		function closeMenu() {
			menu.classList.remove('show');
			menu.style.opacity = '0';
			menu.style.visibility = 'hidden';
			menu.style.transform = 'translateY(-10px)';
			toggle.setAttribute('aria-expanded', 'false');
		}

		toggle.addEventListener('click', function (e) {
			e.preventDefault();
			e.stopPropagation();
			if (menu.classList.contains('show')) {
				closeMenu();
			} else {
				openMenu();
			}
		});

		// Let language links navigate normally; just close the menu.
		menu.querySelectorAll('.lang-option').forEach(function (option) {
			option.addEventListener('click', function () {
				closeMenu();
			});
		});

		// Close when clicking outside.
		document.addEventListener('click', function (e) {
			if (!toggle.contains(e.target) && !menu.contains(e.target)) {
				closeMenu();
			}
		});

		// Close on Escape.
		document.addEventListener('keydown', function (e) {
			if (e.key === 'Escape') {
				closeMenu();
			}
		});
	});
})();
