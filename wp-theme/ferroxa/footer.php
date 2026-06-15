<?php
/**
 * Theme footer: footer grid, copyright, scripts.
 *
 * @package Ferroxa
 */
?>
<!-- Footer -->
<footer class="main-footer">
	<div class="footer-container">
		<!-- Footer Top -->
		<div class="footer-top">
			<div class="footer-grid">
				<!-- Company Info -->
				<div class="footer-section company-info">
					<div class="footer-logo">
						<img src="<?php echo ferroxa_asset( 'assets/images/logo.png' ); ?>" alt="Ferroxa" class="footer-logo-img">
					</div>
					<p class="footer-description"><?php ferroxa_t( 'footer_tagline' ); ?></p>
					<div class="footer-social">
						<a href="https://www.linkedin.com/company/ferroxa-trading-fzco/" class="social-link" title="LinkedIn">
							<i class="fab fa-linkedin-in"></i>
						</a>
						<a href="#" class="social-link" title="Twitter">
							<i class="fab fa-twitter"></i>
						</a>
					</div>
				</div>

				<!-- Quick Links -->
				<div class="footer-section">
					<h4 class="footer-title"><?php ferroxa_t( 'footer_quicklinks' ); ?></h4>
					<ul class="footer-links">
						<li><a href="<?php echo ferroxa_url( 'about' ); ?>" class="footer-link"><?php ferroxa_t( 'footer_about_us' ); ?></a></li>
						<li><a href="<?php echo ferroxa_url( 'products' ); ?>" class="footer-link"><?php ferroxa_t( 'nav_products' ); ?></a></li>
						<li><a href="<?php echo ferroxa_url( 'contact' ); ?>" class="footer-link"><?php ferroxa_t( 'nav_contact' ); ?></a></li>
						<li><a href="<?php echo ferroxa_url( 'blog' ); ?>" class="footer-link"><?php ferroxa_t( 'nav_blog' ); ?></a></li>
					</ul>
				</div>

				<!-- Products -->
				<div class="footer-section">
					<h4 class="footer-title"><?php ferroxa_t( 'footer_our_products' ); ?></h4>
					<ul class="footer-links">
						<li><a href="<?php echo ferroxa_url( 'products' ); ?>" class="footer-link"><?php ferroxa_t( 'footer_prod_1' ); ?></a></li>
						<li><a href="<?php echo ferroxa_url( 'products' ); ?>" class="footer-link"><?php ferroxa_t( 'footer_prod_2' ); ?></a></li>
						<li><a href="<?php echo ferroxa_url( 'products' ); ?>" class="footer-link"><?php ferroxa_t( 'footer_prod_3' ); ?></a></li>
					</ul>
				</div>

				<!-- Contact Info -->
				<div class="footer-section">
					<h4 class="footer-title"><?php ferroxa_t( 'footer_contact_info' ); ?></h4>
					<div class="contact-info">
						<div class="contact-item">
							<i class="fas fa-map-marker-alt"></i>
							<span>38 Robinson Road, #26-01, Oxley Tower, Singapore 068906</span>
						</div>
						<div class="contact-item">
							<i class="fas fa-phone"></i>
							<a href="tel:+6568906800" class="contact-link" style="color: white !important;">+65 6890 6800</a>
						</div>
						<div class="contact-item">
							<i class="fas fa-envelope"></i>
							<a href="mailto:sales@ferroxa.com" class="contact-link" style="color: white !important;">sales@ferroxa.com</a>
						</div>
						<div class="contact-item">
							<i class="fas fa-clock"></i>
							<span><?php ferroxa_t( 'footer_hours' ); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="footer-bottom-content">
				<div class="copyright">
					<p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> Ferroxa. <?php ferroxa_t( 'footer_rights' ); ?></p>
				</div>
				<div class="footer-bottom-links">
					<a href="#" class="footer-bottom-link"><?php ferroxa_t( 'footer_privacy' ); ?></a>
					<a href="#" class="footer-bottom-link"><?php ferroxa_t( 'footer_terms' ); ?></a>
					<a href="#" class="footer-bottom-link"><?php ferroxa_t( 'footer_cookie' ); ?></a>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- Back to Top Button -->
<button class="back-to-top" id="back-to-top" title="Back to top">
	<i class="fas fa-chevron-up"></i>
</button>

<?php wp_footer(); ?>
</body>
</html>
