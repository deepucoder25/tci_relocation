<body>
<?php
// Exact Brand Colors sampled directly from assets/img/logo/logo.png:
// Primary: Deep Midnight Charcoal Navy (#141f27)
// Secondary: Vibrant Golden Warm Yellow (#fec503)
$primaryColor = '#141f27';
$secondaryColor = '#fec503';

// Contact & Company Variables
$companyName = !empty($company3) ? $company3 : 'TCI Relocation Packers Movers';
$phoneClean = !empty($phone) ? preg_replace('/[^0-9+]/', '', $phone) : '+917566809037';
$phoneDisplay = !empty($phone) ? $phone : '+91 7566809037';
$whatsappLink = !empty($whatsapphtml) ? $whatsapphtml : "https://wa.me/{$phoneClean}";
$supportEmail = !empty($mail) ? $mail : (!empty($supportmail) ? $supportmail : 'support@mycompany.com');

// Route & Active Tab Detection
$ci =& get_instance();
$class = strtolower($ci->router->fetch_class());
$method = strtolower($ci->router->fetch_method());
$segment1 = $ci->uri->segment(1);

$active_tab = '';
if (empty($segment1) || $segment1 === 'home' || $class === 'home') {
  $active_tab = 'home';
} elseif ($class === 'about' || in_array($segment1, ['about-us', 'why-choose-us', 'faqs', 'testimonials', 'photo-gallery', 'video-gallery'])) {
  $active_tab = 'about';
} elseif ($class === 'services' || in_array($segment1, [
  'our-services', 'home-shifting', 'office-relocation', 'car-transportation',
  'bike-transportation', 'warehouse-and-storage', 'domestic-relocation',
  'international-shifting', 'corporate-shifting', 'intercity-shifting',
  'local-shifting', 'logistic-services', 'pet-relocation', 'home-relocation',
  'storage-services', 'car-transportation-service', 'packing-and-moving', 'loading-unloading'
])) {
  $active_tab = 'services';
} elseif ($class === 'packers_movers' || $segment1 === 'our-branches') {
  $active_tab = 'locations';
} elseif ($class === 'blog' || $segment1 === 'blog') {
  $active_tab = 'blog';
} elseif ($class === 'contacts' || $segment1 === 'contact-us') {
  $active_tab = 'contact';
} elseif ($class === 'tracking' || $segment1 === 'tracking') {
  $active_tab = 'tracking';
}
?>

<!-- Dynamic Brand Colors Variable Override -->
<style>
  :root {
    --primary-color: <?= $primaryColor ?>;
    --secondary-color: <?= $secondaryColor ?>;
  }
</style>

<!-- SEO Friendly SiteNavigationElement Schema -->
<?php
$nav_schema = [
  "@context" => "https://schema.org",
  "@graph" => [
    ["@type" => "SiteNavigationElement", "name" => "Home", "url" => site_url()],
    ["@type" => "SiteNavigationElement", "name" => "About Us", "url" => site_url('about-us')],
    ["@type" => "SiteNavigationElement", "name" => "Services", "url" => site_url('our-services')],
    ["@type" => "SiteNavigationElement", "name" => "Locations", "url" => site_url('our-branches')],
    ["@type" => "SiteNavigationElement", "name" => "Blog", "url" => site_url('blog')],
    ["@type" => "SiteNavigationElement", "name" => "Contact Us", "url" => site_url('contact-us')],
    ["@type" => "SiteNavigationElement", "name" => "Track Order", "url" => site_url('tracking')]
  ]
];
?>
<script type="application/ld+json">
<?= json_encode($nav_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) ?>
</script>

<!-- Top Branded Utility Bar (Desktop & Tablet) in Midnight Navy (#141f27) & Golden Yellow (#fec503) -->
<div class="d-none d-lg-block py-1 text-white" style="background-color: var(--primary-color); font-size: 0.8125rem;">
  <div class="container-xl d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center gap-3">
      <a href="tel:<?= $phoneClean ?>" class="text-decoration-none text-white d-inline-flex align-items-center gap-1 opacity-90">
        <i class="bi bi-telephone-inbound-fill" style="color: var(--secondary-color);"></i>
        <span><?= $phoneDisplay ?></span>
      </a>
      <span class="opacity-40">|</span>
      <a href="mailto:<?= $supportEmail ?>" class="text-decoration-none text-white d-inline-flex align-items-center gap-1 opacity-90">
        <i class="bi bi-envelope-open-fill" style="color: var(--secondary-color);"></i>
        <span><?= $supportEmail ?></span>
      </a>
      <span class="opacity-40">|</span>
      <span class="badge rounded-pill fw-bold px-2 py-1 shadow-sm" style="background-color: var(--secondary-color); color: #141f27; font-size: 0.72rem;">
        <i class="bi bi-patch-check-fill me-1"></i>IBA Approved &amp; ISO Certified
      </span>
    </div>

    <div class="d-flex align-items-center gap-3">
      <a href="<?= $whatsappLink ?>" target="_blank" rel="noopener" class="text-decoration-none text-white d-inline-flex align-items-center gap-1 opacity-90">
        <i class="bi bi-whatsapp text-success bg-white rounded-circle p-1" style="font-size: 0.75rem;"></i>
        <span>WhatsApp 24/7</span>
      </a>
      <span class="opacity-40">|</span>
      <a href="<?= site_url('tracking') ?>" class="text-decoration-none text-white d-inline-flex align-items-center gap-1 opacity-90">
        <i class="bi bi-box-seam" style="color: var(--secondary-color);"></i>
        <span>Track Consignment</span>
      </a>
    </div>
  </div>
</div>

<!-- Main Navbar (Strictly NO padding & NO height on main navbar) -->
<header class="sticky-top shadow-sm">
  <nav class="navbar navbar-expand-lg main-navbar" id="mainNavbar">
    <div class="container-xl d-flex align-items-center justify-content-between">
      
      <!-- Brand Logo & Identity -->
      <a class="navbar-brand d-flex align-items-center gap-2 my-0 me-3 py-1 text-decoration-none" href="<?= site_url() ?>">
        <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="<?= htmlspecialchars($companyName) ?>" class="nav-logo img-fluid" style="height: 52px; width: auto;">
        <div class="d-none d-sm-flex flex-column lh-1">
          <span class="fw-bold fs-5 text-dark" style="letter-spacing: -0.5px;">TCI <span style="color: var(--secondary-color);">RELOCATION</span></span>
          <span class="text-muted fw-semibold text-uppercase mt-1" style="font-size: 0.65rem; letter-spacing: 0.8px;">Safe &amp; Reliable Moving</span>
        </div>
      </a>

      <!-- Mobile Quick Actions & Hamburger (Visible only on < lg screens) -->
      <div class="d-flex align-items-center gap-2 d-lg-none">
        <a href="tel:<?= $phoneClean ?>" class="mobile-action-btn mobile-call-btn" title="Call Helpline" aria-label="Call Helpline">
          <i class="bi bi-telephone-fill"></i>
        </a>
        <a href="<?= $whatsappLink ?>" target="_blank" rel="noopener" class="mobile-action-btn mobile-wa-btn" title="WhatsApp Chat" aria-label="WhatsApp Chat">
          <i class="bi bi-whatsapp"></i>
        </a>
        <button class="navbar-toggler border-0 p-1 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#navOffcanvas" aria-controls="navOffcanvas" aria-label="Toggle navigation" id="openMenu">
          <i class="bi bi-list fs-1 text-dark"></i>
        </button>
      </div>

      <!-- Desktop Nav Items (Visible on >= lg screens) -->
      <div class="collapse navbar-collapse d-none d-lg-flex justify-content-center" id="mainNavbarCollapse">
        <ul class="navbar-nav align-items-center my-0">
          
          <!-- Home -->
          <li class="nav-item">
            <a class="nav-link <?= $active_tab === 'home' ? 'active' : '' ?>" href="<?= site_url() ?>">Home</a>
          </li>

          <!-- About Us Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link <?= $active_tab === 'about' ? 'active' : '' ?>" href="<?= site_url('about-us') ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span>About Us</span>
              <i class="bi bi-chevron-down nav-arrow"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item <?= ($segment1 === 'about-us' || $class === 'about' && $method === 'index') ? 'active' : '' ?>" href="<?= site_url('about-us') ?>"><i class="bi bi-building"></i> About Company</a></li>
              <li><a class="dropdown-item <?= $segment1 === 'why-choose-us' ? 'active' : '' ?>" href="<?= site_url('why-choose-us') ?>"><i class="bi bi-patch-check"></i> Why Choose Us</a></li>
              <li><a class="dropdown-item <?= $segment1 === 'testimonials' ? 'active' : '' ?>" href="<?= site_url('testimonials') ?>"><i class="bi bi-chat-square-quote"></i> Testimonials</a></li>
              <li><a class="dropdown-item <?= $segment1 === 'faqs' ? 'active' : '' ?>" href="<?= site_url('faqs') ?>"><i class="bi bi-question-circle"></i> FAQs</a></li>
              <li><hr class="dropdown-divider my-1"></li>
              <li><a class="dropdown-item <?= $segment1 === 'photo-gallery' ? 'active' : '' ?>" href="<?= site_url('photo-gallery') ?>"><i class="bi bi-images"></i> Photo Gallery</a></li>
              <li><a class="dropdown-item <?= $segment1 === 'video-gallery' ? 'active' : '' ?>" href="<?= site_url('video-gallery') ?>"><i class="bi bi-play-btn"></i> Video Gallery</a></li>
            </ul>
          </li>

          <!-- Services Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link <?= $active_tab === 'services' ? 'active' : '' ?>" href="<?= site_url('our-services') ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span>Services</span>
              <i class="bi bi-chevron-down nav-arrow"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item <?= in_array($segment1, ['home-relocation', 'home-shifting']) ? 'active' : '' ?>" href="<?= site_url('home-relocation') ?>"><i class="bi bi-house-door"></i> Household Shifting</a></li>
              <li><a class="dropdown-item <?= in_array($segment1, ['office-relocation']) ? 'active' : '' ?>" href="<?= site_url('office-relocation') ?>"><i class="bi bi-briefcase"></i> Office Relocation</a></li>
              <li><a class="dropdown-item <?= in_array($segment1, ['car-transportation', 'car-transportation-service']) ? 'active' : '' ?>" href="<?= site_url('car-transportation') ?>"><i class="bi bi-car-front"></i> Car Transportation</a></li>
              <li><a class="dropdown-item <?= in_array($segment1, ['bike-transportation']) ? 'active' : '' ?>" href="<?= site_url('bike-transportation') ?>"><i class="bi bi-bicycle"></i> Bike Transportation</a></li>
              <li><a class="dropdown-item <?= in_array($segment1, ['packing-and-moving']) ? 'active' : '' ?>" href="<?= site_url('packing-and-moving') ?>"><i class="bi bi-box-seam"></i> Packing &amp; Moving</a></li>
              <li><a class="dropdown-item <?= in_array($segment1, ['loading-unloading']) ? 'active' : '' ?>" href="<?= site_url('loading-unloading') ?>"><i class="bi bi-arrow-down-up"></i> Loading &amp; Unloading</a></li>
              <li><a class="dropdown-item <?= in_array($segment1, ['storage-services', 'warehouse-and-storage']) ? 'active' : '' ?>" href="<?= site_url('storage-services') ?>"><i class="bi bi-shop"></i> Warehousing &amp; Storage</a></li>
              <li><hr class="dropdown-divider my-1"></li>
              <li><a class="dropdown-item fw-bold <?= $segment1 === 'our-services' ? 'active' : '' ?>" href="<?= site_url('our-services') ?>" style="color: var(--primary-color);"><i class="bi bi-grid-fill"></i> View All Services</a></li>
            </ul>
          </li>

          <!-- Locations -->
          <li class="nav-item">
            <a class="nav-link <?= $active_tab === 'locations' ? 'active' : '' ?>" href="<?= site_url('our-branches') ?>">Locations</a>
          </li>

          <!-- Tracking with LIVE badge in Golden Yellow -->
          <li class="nav-item">
            <a class="nav-link <?= $active_tab === 'tracking' ? 'active' : '' ?>" href="<?= site_url('tracking') ?>">
              <i class="bi bi-geo-alt-fill" style="color: var(--secondary-color);"></i>
              <span>Track</span>
              <span class="badge rounded-pill ms-1 fw-bold" style="background-color: var(--secondary-color); color: #141f27; font-size: 0.65rem;">LIVE</span>
            </a>
          </li>

          <!-- Blog -->
          <li class="nav-item">
            <a class="nav-link <?= $active_tab === 'blog' ? 'active' : '' ?>" href="<?= site_url('blog') ?>">Blog</a>
          </li>

          <!-- Contact Us -->
          <li class="nav-item">
            <a class="nav-link <?= $active_tab === 'contact' ? 'active' : '' ?>" href="<?= site_url('contact-us') ?>">Contact</a>
          </li>

        </ul>
      </div>

      <!-- Desktop Right Action Area -->
      <div class="d-none d-lg-flex align-items-center gap-3">
        <!-- Call Widget -->
        <a href="tel:<?= $phoneClean ?>" class="nav-call-widget text-decoration-none d-flex align-items-center gap-2">
          <span class="call-pulse-icon">
            <i class="bi bi-telephone-fill"></i>
          </span>
          <div class="d-flex flex-column text-start">
            <span class="call-subtitle">24x7 Helpline</span>
            <span class="call-number"><?= $phoneDisplay ?></span>
          </div>
        </a>

        <!-- CTA Free Quote in Warm Golden Yellow from Logo -->
        <a href="<?= site_url('contact-us') ?>" class="btn btn-quote-cta d-inline-flex align-items-center gap-2">
          <span>Get Free Quote</span>
          <span class="btn-cta-arrow"><i class="bi bi-arrow-right"></i></span>
        </a>
      </div>

    </div>
  </nav>
</header>

<!-- Mobile Offcanvas Drawer -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="navOffcanvas" aria-labelledby="navOffcanvasLabel">
  <!-- Offcanvas Header -->
  <div class="offcanvas-header border-bottom py-3">
    <a class="d-flex align-items-center gap-2 text-decoration-none" href="<?= site_url() ?>">
      <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="<?= htmlspecialchars($companyName) ?>" style="height: 42px; width: auto;">
      <span class="fw-bold text-dark fs-6">TCI <span style="color: var(--secondary-color);">RELOCATION</span></span>
    </a>
    <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close" id="closeMenu"></button>
  </div>

  <!-- Offcanvas Body -->
  <div class="offcanvas-body d-flex flex-column justify-content-between p-3">
    <div class="mobile-nav-list">
      
      <!-- Home -->
      <a href="<?= site_url() ?>" class="offcanvas-nav-link <?= $active_tab === 'home' ? 'active' : '' ?>">
        <span><i class="bi bi-house-door me-2" style="color: var(--primary-color);"></i>Home</span>
      </a>

      <!-- About Us Accordion -->
      <div class="my-1">
        <button class="offcanvas-accordion-btn <?= $active_tab === 'about' ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#mobileAboutMenu" aria-expanded="<?= $active_tab === 'about' ? 'true' : 'false' ?>">
          <span><i class="bi bi-building me-2" style="color: var(--primary-color);"></i>About Us</span>
          <i class="bi bi-chevron-down fs-6"></i>
        </button>
        <div class="collapse <?= $active_tab === 'about' ? 'show' : '' ?> ps-3 mt-1" id="mobileAboutMenu">
          <a href="<?= site_url('about-us') ?>" class="offcanvas-sublink"><i class="bi bi-info-circle"></i> About Company</a>
          <a href="<?= site_url('why-choose-us') ?>" class="offcanvas-sublink"><i class="bi bi-patch-check"></i> Why Choose Us</a>
          <a href="<?= site_url('testimonials') ?>" class="offcanvas-sublink"><i class="bi bi-chat-square-quote"></i> Testimonials</a>
          <a href="<?= site_url('faqs') ?>" class="offcanvas-sublink"><i class="bi bi-question-circle"></i> FAQs</a>
          <a href="<?= site_url('photo-gallery') ?>" class="offcanvas-sublink"><i class="bi bi-images"></i> Photo Gallery</a>
          <a href="<?= site_url('video-gallery') ?>" class="offcanvas-sublink"><i class="bi bi-play-btn"></i> Video Gallery</a>
        </div>
      </div>

      <!-- Services Accordion -->
      <div class="my-1">
        <button class="offcanvas-accordion-btn <?= $active_tab === 'services' ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#mobileServicesMenu" aria-expanded="<?= $active_tab === 'services' ? 'true' : 'false' ?>">
          <span><i class="bi bi-truck me-2" style="color: var(--primary-color);"></i>Services</span>
          <i class="bi bi-chevron-down fs-6"></i>
        </button>
        <div class="collapse <?= $active_tab === 'services' ? 'show' : '' ?> ps-3 mt-1" id="mobileServicesMenu">
          <a href="<?= site_url('home-relocation') ?>" class="offcanvas-sublink"><i class="bi bi-house-door"></i> Household Shifting</a>
          <a href="<?= site_url('office-relocation') ?>" class="offcanvas-sublink"><i class="bi bi-briefcase"></i> Office Relocation</a>
          <a href="<?= site_url('car-transportation') ?>" class="offcanvas-sublink"><i class="bi bi-car-front"></i> Car Transportation</a>
          <a href="<?= site_url('bike-transportation') ?>" class="offcanvas-sublink"><i class="bi bi-bicycle"></i> Bike Transportation</a>
          <a href="<?= site_url('packing-and-moving') ?>" class="offcanvas-sublink"><i class="bi bi-box-seam"></i> Packing &amp; Moving</a>
          <a href="<?= site_url('loading-unloading') ?>" class="offcanvas-sublink"><i class="bi bi-arrow-down-up"></i> Loading &amp; Unloading</a>
          <a href="<?= site_url('storage-services') ?>" class="offcanvas-sublink"><i class="bi bi-shop"></i> Warehousing &amp; Storage</a>
          <a href="<?= site_url('our-services') ?>" class="offcanvas-sublink fw-bold" style="color: var(--primary-color);"><i class="bi bi-grid-fill"></i> View All Services</a>
        </div>
      </div>

      <!-- Locations -->
      <a href="<?= site_url('our-branches') ?>" class="offcanvas-nav-link <?= $active_tab === 'locations' ? 'active' : '' ?>">
        <span><i class="bi bi-map me-2" style="color: var(--primary-color);"></i>Locations</span>
      </a>

      <!-- Track Order -->
      <a href="<?= site_url('tracking') ?>" class="offcanvas-nav-link <?= $active_tab === 'tracking' ? 'active' : '' ?>">
        <span><i class="bi bi-geo-alt-fill me-2" style="color: var(--secondary-color);"></i>Track Order</span>
        <span class="badge rounded-pill fw-bold" style="background-color: var(--secondary-color); color: #141f27; font-size: 0.7rem;">LIVE</span>
      </a>

      <!-- Blog -->
      <a href="<?= site_url('blog') ?>" class="offcanvas-nav-link <?= $active_tab === 'blog' ? 'active' : '' ?>">
        <span><i class="bi bi-journal-text me-2" style="color: var(--primary-color);"></i>Blog</span>
      </a>

      <!-- Contact Us -->
      <a href="<?= site_url('contact-us') ?>" class="offcanvas-nav-link <?= $active_tab === 'contact' ? 'active' : '' ?>">
        <span><i class="bi bi-chat-dots me-2" style="color: var(--primary-color);"></i>Contact Us</span>
      </a>

    </div>

    <!-- Offcanvas Footer Contact Info & CTA -->
    <div class="border-top pt-3 mt-4">
      <div class="d-grid gap-2 mb-3">
        <a href="<?= site_url('contact-us') ?>" class="btn btn-quote-cta py-2 text-center">
          Get Instant Free Quote <i class="bi bi-arrow-right ms-1"></i>
        </a>
      </div>
      <div class="d-flex justify-content-around text-center py-2 bg-light rounded-3 mb-3">
        <a href="tel:<?= $phoneClean ?>" class="text-decoration-none text-dark d-flex flex-column align-items-center">
          <i class="bi bi-telephone-fill fs-5" style="color: var(--primary-color);"></i>
          <span class="small fw-semibold mt-1">Call Us</span>
        </a>
        <a href="<?= $whatsappLink ?>" target="_blank" rel="noopener" class="text-decoration-none text-dark d-flex flex-column align-items-center">
          <i class="bi bi-whatsapp fs-5 text-success"></i>
          <span class="small fw-semibold mt-1">WhatsApp</span>
        </a>
        <a href="mailto:<?= $supportEmail ?>" class="text-decoration-none text-dark d-flex flex-column align-items-center">
          <i class="bi bi-envelope-fill fs-5" style="color: #b58900;"></i>
          <span class="small fw-semibold mt-1">Email</span>
        </a>
      </div>
      <div class="text-center text-muted small">
        <i class="bi bi-shield-check text-success me-1"></i>100% Safe &amp; Insured Relocation
      </div>
    </div>

  </div>
</div>

<!-- Interaction Handler (Supports Bootstrap 5 native + Robust Vanilla Fallback) -->
<script>
(function() {
  const openBtn = document.getElementById('openMenu');
  const closeBtn = document.getElementById('closeMenu');
  const offcanvasEl = document.getElementById('navOffcanvas');

  // Fallback offcanvas toggling if Bootstrap JS is absent
  if (openBtn && offcanvasEl) {
    openBtn.addEventListener('click', function(e) {
      if (typeof bootstrap === 'undefined' || !bootstrap.Offcanvas) {
        e.preventDefault();
        offcanvasEl.classList.add('show');
        offcanvasEl.style.visibility = 'visible';
        document.body.classList.add('overflow-hidden');
      }
    });
  }

  if (closeBtn && offcanvasEl) {
    closeBtn.addEventListener('click', function(e) {
      if (typeof bootstrap === 'undefined' || !bootstrap.Offcanvas) {
        e.preventDefault();
        offcanvasEl.classList.remove('show');
        offcanvasEl.style.visibility = 'hidden';
        document.body.classList.remove('overflow-hidden');
      }
    });
  }

  // Fallback accordion collapse toggling in mobile menu if Bootstrap JS is absent
  document.querySelectorAll('.offcanvas-accordion-btn').forEach(function(btn) {
    btn.addEventListener('click', function(e) {
      if (typeof bootstrap === 'undefined' || !bootstrap.Collapse) {
        e.preventDefault();
        const targetId = btn.getAttribute('data-bs-target');
        const target = targetId ? document.querySelector(targetId) : null;
        if (target) {
          const isShown = target.classList.contains('show');
          if (isShown) {
            target.classList.remove('show');
            btn.classList.add('collapsed');
            btn.setAttribute('aria-expanded', 'false');
          } else {
            target.classList.add('show');
            btn.classList.remove('collapsed');
            btn.setAttribute('aria-expanded', 'true');
          }
        }
      }
    });
  });
})();
</script>