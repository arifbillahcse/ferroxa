<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Ferroxa Global Pte Ltd — Build on Trust. Powered by Trade. Global trading of ferrous, non-ferrous, and precious metals." />
  <title>Ferroxa Global | Build on Trust. Powered by Trade.</title>
  <link rel="icon" type="image/png" href="favicon.png" />

  <!-- Google Fonts: Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <!-- AOS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>

  <!-- ===== NAVBAR ===== -->
  <nav class="navbar" id="navbar">
    <a href="#home" class="nav-logo">
      <img src="Ferroxa logo.jpeg" alt="Ferroxa Global" />
    </a>
    <ul class="nav-links">
      <li><a href="#about">About Us</a></li>
      <li><a href="#products">Products</a></li>
      <li><a href="#connect">Contact</a></li>
      <li><a href="#blog">Blog</a></li>
    </ul>
    <div class="hamburger" id="hamburger">
      <span></span><span></span><span></span>
    </div>
  </nav>

  <!-- Mobile Menu -->
  <div class="mobile-menu" id="mobileMenu">
    <button class="mobile-close" id="mobileClose">&times;</button>
    <a href="#about">About Us</a>
    <a href="#products">Products</a>
    <a href="#connect">Contact</a>
    <a href="#blog">Blog</a>
  </div>

  <!-- ===== HERO ===== -->
  <section class="hero" id="home">
    <video class="hero-video" autoplay muted loop playsinline>
      <source src="https://www.metallura.com/assets/videos/steel-blades-steel-billets-steel-plates.mp4" type="video/mp4" />
    </video>
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <img src="Ferroxa logo.jpeg" alt="Ferroxa Global" class="hero-logo" />
      <h1 class="hero-title">Ferroxa Global</h1>
      <p class="hero-tagline">Build on Trust. Powered by Trade.</p>
      <a href="#about" class="btn-outline-hero">Discover Who We Are &nbsp;&#8594;</a>
    </div>
    <div class="scroll-hint">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M12 5v14M5 12l7 7 7-7"/>
      </svg>
    </div>
  </section>

  <!-- ===== WHO WE ARE ===== -->
  <section id="about">
    <div class="container centered" data-aos="fade-up">
      <span class="section-tag">About Us</span>
      <h2 class="section-title">Who We Are</h2>
      <p class="section-subtitle" style="max-width:820px; text-align:center;">
        We are a global trading company registered in Singapore. We specialize in the international trade of ferrous, non-ferrous, and precious metals, serving as a reliable link between producers and end-users. Established with a vision to redefine trust and transparency in commodity trading, Ferroxa Global combines deep market knowledge with strong financial and operational expertise to deliver value to our partners worldwide. As an agile and ambitious company, we focus on providing tailored solutions that meet the evolving needs of our customers and suppliers. Our commitment goes beyond transactions — we believe in building long-term partnerships based on integrity, performance, and shared growth.
      </p>
    </div>
  </section>

  <!-- ===== WHAT WE DO ===== -->
  <section id="services">
    <div class="container centered" data-aos="fade-up">
      <span class="section-tag">Our Services</span>
      <h2 class="section-title">What We Do</h2>
      <p class="section-subtitle" style="text-align:center;">
        We specialize in the global trading of premium ferrous, non-ferrous, and precious metals. Our expertise spans supply chain management, quality assurance, and international logistics.
      </p>
    </div>

    <div class="container">
      <div class="tabs-wrapper" data-aos="fade-up" data-aos-delay="100">
        <button class="tab-btn active" data-tab="tab-sourcing">
          <i class="fa-solid fa-magnifying-glass"></i> Sourcing &amp; Procurement
        </button>
        <button class="tab-btn" data-tab="tab-supply">
          <i class="fa-solid fa-link"></i> Supply Chain Management
        </button>
        <button class="tab-btn" data-tab="tab-quality">
          <i class="fa-solid fa-shield-halved"></i> Quality Assurance
        </button>
        <button class="tab-btn" data-tab="tab-finance">
          <i class="fa-solid fa-coins"></i> Trade Finance Solutions
        </button>
        <button class="tab-btn" data-tab="tab-risk">
          <i class="fa-solid fa-chart-line"></i> Risk Management
        </button>
      </div>

      <!-- Tab 1 -->
      <div class="tab-content active" id="tab-sourcing" data-aos="fade-up" data-aos-delay="150">
        <img src="metal-trading-middle-east.png" alt="Sourcing & Procurement" class="tab-img" />
        <div class="tab-body">
          <h3>Sourcing &amp; Procurement</h3>
          <p>Strategic sourcing and procurement solutions connecting you with the best global suppliers and ensuring competitive pricing for premium metals.</p>
        </div>
      </div>

      <!-- Tab 2 -->
      <div class="tab-content" id="tab-supply">
        <img src="steel-billets-trading-uae.png" alt="Supply Chain Management" class="tab-img" />
        <div class="tab-body">
          <h3>Supply Chain Management</h3>
          <p>End-to-end supply chain management ensuring seamless movement of metals from source to destination with full visibility and operational control.</p>
        </div>
      </div>

      <!-- Tab 3 -->
      <div class="tab-content" id="tab-quality">
        <img src="heavy-duty-steel-plates-trading-uae.png" alt="Quality Assurance" class="tab-img" />
        <div class="tab-body">
          <h3>Quality Assurance</h3>
          <p>Rigorous quality control and assurance protocols ensuring all metals meet international standards and precise client specifications.</p>
        </div>
      </div>

      <!-- Tab 4 -->
      <div class="tab-content" id="tab-finance">
        <img src="steel-slabs-uae-trading.png" alt="Trade Finance" class="tab-img" />
        <div class="tab-body">
          <h3>Trade Finance Solutions</h3>
          <p>Flexible trade finance solutions including letters of credit, documentary collections, and structured payment terms tailored to your needs.</p>
        </div>
      </div>

      <!-- Tab 5 -->
      <div class="tab-content" id="tab-risk">
        <img src="prime-wire-rods-trading-uae.png" alt="Risk Management" class="tab-img" />
        <div class="tab-body">
          <h3>Risk Management</h3>
          <p>Comprehensive risk management strategies covering price volatility, counterparty risk, and regulatory compliance across global markets.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== OUR PRODUCTS ===== -->
  <section id="products">
    <div class="container centered" data-aos="fade-up">
      <span class="section-tag">What We Trade</span>
      <h2 class="section-title">Our Products</h2>
      <p class="section-subtitle" style="text-align:center;">Comprehensive range of metals meeting international standards.</p>
    </div>

    <div class="products-grid container" data-aos="fade-up" data-aos-delay="100">

      <!-- Ferrous — large left -->
      <div class="product-card large">
        <img src="slap1.jpg" alt="Ferrous Metals" />
        <div class="product-overlay">
          <span class="product-badge">Ferrous Metals</span>
          <div class="product-bottom">
            <h3>Ferrous Metals</h3>
            <p>Iron-based metals with carbon content, known for strength and durability, used in construction, automotive, and industrial sectors.</p>
            <div class="product-tags">
              <span class="product-tag">Semi-Finished</span>
              <span class="product-tag">Flat</span>
              <span class="product-tag">Long</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Non-Ferrous — top right -->
      <div class="product-card">
        <img src="aluminum2.webp" alt="Non-Ferrous Metals" />
        <div class="product-overlay">
          <span class="product-badge">Non-Ferrous Metals</span>
          <div class="product-bottom">
            <h3>Non-Ferrous Metals</h3>
            <p>Mainly copper, zinc, and aluminum — valued for conductivity, corrosion resistance, and versatility across manufacturing sectors.</p>
            <div class="product-tags">
              <span class="product-tag">Copper</span>
              <span class="product-tag">Aluminum</span>
              <span class="product-tag">Zinc</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Precious — bottom right -->
      <div class="product-card">
        <img src="raw_gold1.jpg" alt="Precious Metals" />
        <div class="product-overlay">
          <span class="product-badge">Precious Metals</span>
          <div class="product-bottom">
            <h3>Precious Metals</h3>
            <p>Dore, bullion gold, and silver — valued for purity, liquidity, and trusted use in investment, jewelry, and industry.</p>
            <div class="product-tags">
              <span class="product-tag">Dore</span>
              <span class="product-tag">Bullion</span>
              <span class="product-tag">Silver</span>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="products-cta" data-aos="fade-up">
      <a href="#" class="btn-primary">View All Products &nbsp;&#8594;</a>
    </div>
  </section>

  <!-- ===== TRUST / STATS ===== -->
  <section id="trust">
    <div class="container centered" data-aos="fade-up">
      <h2 class="section-title">We Build trusted connections across markets</h2>
      <p class="section-subtitle" style="text-align:center;">
        Our business connects producers and consumers across continents. We work with partners in over 20 countries worldwide.
      </p>
    </div>

    <div class="stats-grid" data-aos="fade-up" data-aos-delay="100">
      <div class="stat-card">
        <div class="stat-icon"><i class="fa-solid fa-globe"></i></div>
        <div>
          <h3>20+ Countries in Reach</h3>
          <p>Strategic partnerships linking suppliers from Africa, CIS, the Middle East, and Asia to end users.</p>
        </div>
      </div>
      <div class="stat-card">
        <div class="stat-icon"><i class="fa-solid fa-handshake"></i></div>
        <div>
          <h3>Strong Global Partnerships</h3>
          <p>An expanding network of trusted producers, suppliers, and consumers worldwide.</p>
        </div>
      </div>
      <div class="stat-card">
        <div class="stat-icon"><i class="fa-solid fa-award"></i></div>
        <div>
          <h3>Backed by Expertise</h3>
          <p>Our expertise covers the full metals value chain — from sourcing and verification to trading, and secure logistics.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== CONNECT ===== -->
  <section id="connect">
    <div class="container centered" data-aos="fade-up">
      <h2 class="section-title">Connect with us</h2>
      <p class="section-subtitle">Ready to explore opportunities across our international network?</p>
      <a href="mailto:SALES@FERROXA.COM" class="btn-primary" style="margin-top:10px;">Get in Touch &nbsp;&#8594;</a>
    </div>
  </section>

  <!-- ===== FOOTER ===== -->
  <footer id="blog">
    <div class="footer-grid">

      <!-- Brand -->
      <div class="footer-brand">
        <img src="Ferroxa logo.jpeg" alt="Ferroxa Global" />
        <p>Build on Trust. Powered by Trade.</p>
        <div class="social-links">
          <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="#about">About Us</a></li>
          <li><a href="#products">Products</a></li>
          <li><a href="#connect">Contact</a></li>
          <li><a href="#blog">Blog</a></li>
        </ul>
      </div>

      <!-- Products -->
      <div class="footer-col">
        <h4>Our Products</h4>
        <ul>
          <li><a href="#products">Ferrous Metals</a></li>
          <li><a href="#products">Non-Ferrous Metals</a></li>
          <li><a href="#products">Precious Metals</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="footer-col">
        <h4>Contact Information</h4>
        <div class="contact-item">
          <i class="fa-solid fa-location-dot"></i>
          <span>38 Robinson Road, #26-01, Oxley Tower, Singapore 068906</span>
        </div>
        <div class="contact-item">
          <i class="fa-solid fa-envelope"></i>
          <span><a href="mailto:SALES@FERROXA.COM" style="color:inherit;">SALES@FERROXA.COM</a></span>
        </div>
        <div class="contact-item">
          <i class="fa-solid fa-envelope"></i>
          <span><a href="mailto:Director@ferroxa.com" style="color:inherit;">Director@ferroxa.com</a></span>
        </div>
        <div class="contact-item">
          <i class="fa-solid fa-clock"></i>
          <span>Mon - Fri : 9:00 AM - 6:00 PM</span>
        </div>
      </div>

    </div>

    <div class="footer-bottom">
      <span>&copy; 2026 Ferroxa Global Pte Ltd. All rights reserved.</span>
      <div class="footer-bottom-links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms &amp; Conditions</a>
        <a href="#">Cookie Policy</a>
      </div>
    </div>
  </footer>

  <!-- Scroll to Top -->
  <button id="scrollTop" aria-label="Scroll to top">&#8593;</button>

  <!-- AOS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <!-- Main JS -->
  <script src="assets/js/main.js"></script>
</body>
</html>
