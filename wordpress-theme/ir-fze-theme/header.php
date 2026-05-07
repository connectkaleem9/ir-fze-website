<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav id="navbar" aria-label="Main navigation">
  <div class="nav-wrap">

    <!-- Logo -->
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo">
      <div class="logo-box"><span>IR</span></div>
      <div class="logo-meta"><strong>IR-FZE</strong><small>Technical Consultancy</small></div>
    </a>

    <!-- Desktop Links -->
    <ul class="nav-links" role="menubar">
      <li class="nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="<?php echo esc_url( irfze_page_url( 'about' ) ); ?>" class="nav-link">About</a></li>

      <!-- Mega Menu -->
      <li class="nav-item has-mega">
        <a href="<?php echo esc_url( irfze_page_url( 'services' ) ); ?>" class="nav-link" aria-haspopup="true">
          Services
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 9l6 6 6-6"/></svg>
        </a>
        <div class="mega-menu">
          <div class="mega-services">
            <a href="<?php echo esc_url( irfze_page_url( 'service-feasibility' ) ); ?>" class="mega-service-link">
              <div class="mega-service-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div>
              <div><div class="mega-service-title">Technical Feasibility Studies</div><div class="mega-service-desc">Risk assessments & advisory reports</div></div>
            </a>
            <a href="<?php echo esc_url( irfze_page_url( 'service-design-review' ) ); ?>" class="mega-service-link">
              <div class="mega-service-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg></div>
              <div><div class="mega-service-title">Design Review & Constructability</div><div class="mega-service-desc">Document review & gap analysis</div></div>
            </a>
            <a href="<?php echo esc_url( irfze_page_url( 'service-pms' ) ); ?>" class="mega-service-link">
              <div class="mega-service-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></div>
              <div><div class="mega-service-title">Project Management Systems</div><div class="mega-service-desc">PMO setup & workflow alignment</div></div>
            </a>
            <a href="<?php echo esc_url( irfze_page_url( 'service-document-control' ) ); ?>" class="mega-service-link">
              <div class="mega-service-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14,2 14,8 20,8"/></svg></div>
              <div><div class="mega-service-title">Document Control System</div><div class="mega-service-desc">Setup, procedures & training</div></div>
            </a>
            <a href="<?php echo esc_url( irfze_page_url( 'service-ai' ) ); ?>" class="mega-service-link">
              <div class="mega-service-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a10 10 0 100 20 10 10 0 000-20z"/><path d="M12 6v6l4 2"/></svg></div>
              <div><div class="mega-service-title">AI Integration & Automation</div><div class="mega-service-desc">Dashboards, chatbots & task automation</div></div>
            </a>
          </div>
          <div class="mega-promo">
            <div>
              <div class="mega-promo-label">Featured Service</div>
              <div class="mega-promo-title">AI Automation for UAE Enterprises</div>
              <div class="mega-promo-body">Reduce operational manpower by up to 60%.</div>
            </div>
            <a href="<?php echo esc_url( irfze_page_url( 'service-ai' ) ); ?>" class="mega-view-all">
              Explore AI Services
              <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>
      </li>

      <li class="nav-item"><a href="<?php echo esc_url( irfze_page_url( 'contact' ) ); ?>" class="nav-link">Contact</a></li>
    </ul>

    <!-- Nav Actions -->
    <div class="nav-actions">
      <a href="tel:+971543368088" class="btn btn-ghost btn-sm">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8 19.79 19.79 0 012 1.18 2 2 0 014 0h3a2 2 0 012 1.72c.13.96.36 1.9.7 2.81a2 2 0 01-.45 2.11L8.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0122 14.92z"/></svg>
        Call Now
      </a>
      <a href="<?php echo esc_url( irfze_page_url( 'contact' ) ); ?>" class="btn btn-primary btn-sm">Get Consultation</a>
    </div>

    <!-- Hamburger -->
    <button class="hamburger" id="hamburger" aria-label="Toggle menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </div>

  <!-- Mobile Drawer -->
  <div class="mobile-drawer" id="mobile-drawer">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
    <span class="drawer-section-label">Services</span>
    <a href="<?php echo esc_url( irfze_page_url( 'service-feasibility' ) ); ?>">— Technical Feasibility Studies</a>
    <a href="<?php echo esc_url( irfze_page_url( 'service-design-review' ) ); ?>">— Design Review & Constructability</a>
    <a href="<?php echo esc_url( irfze_page_url( 'service-pms' ) ); ?>">— Project Management Systems</a>
    <a href="<?php echo esc_url( irfze_page_url( 'service-document-control' ) ); ?>">— Document Control System</a>
    <a href="<?php echo esc_url( irfze_page_url( 'service-ai' ) ); ?>">— AI Integration & Automation</a>
    <a href="<?php echo esc_url( irfze_page_url( 'about' ) ); ?>">About Us</a>
    <a href="<?php echo esc_url( irfze_page_url( 'contact' ) ); ?>">Contact</a>
    <a href="<?php echo esc_url( irfze_page_url( 'contact' ) ); ?>" class="btn btn-primary drawer-cta">Get a Consultation</a>
  </div>
</nav>
