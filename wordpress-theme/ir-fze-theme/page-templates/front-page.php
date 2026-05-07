<?php
/**
 * Template Name: Homepage
 * Template Post Type: page
 */
get_header(); ?>

<!-- HERO -->
<section class="hero-section nav-dark" aria-label="Homepage hero">
  <div class="hero-grid-bg" aria-hidden="true"></div>
  <div class="container hero-inner">
    <div class="hero-content reveal-left">
      <div class="hero-badge reveal">
        <span class="badge-dot"></span>
        UAE Technical Consultancy — Sharjah Publishing City Freezone
      </div>
      <h1 class="h1 hero-headline">
        Engineering Confidence<br/>
        <span class="text-silver">Into Every Decision</span>
      </h1>
      <p class="lead hero-sub">
        IR-FZE delivers technical feasibility, design review, project management systems, document control, and AI automation for UAE enterprises and construction programmes.
      </p>
      <div class="hero-actions">
        <a href="<?php echo esc_url( irfze_page_url( 'contact' ) ); ?>" class="btn btn-primary btn-lg">Get a Free Consultation</a>
        <a href="<?php echo esc_url( irfze_page_url( 'services' ) ); ?>" class="btn btn-ghost btn-lg">Explore Services</a>
      </div>
      <div class="hero-trust reveal">
        <div class="trust-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> UAE Registered</div>
        <div class="trust-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> 120+ Projects</div>
        <div class="trust-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> 5 Core Services</div>
      </div>
    </div>
    <div class="hero-visual reveal-right">
      <div class="hero-card card-glass">
        <div class="hero-card-header">
          <span class="eyebrow" style="color:var(--silver-light);">Live Project Overview</span>
        </div>
        <div class="hero-stats-grid">
          <div class="hero-stat"><span data-target="97" data-suffix="%">0</span><span>Accuracy</span></div>
          <div class="hero-stat"><span data-target="120" data-suffix="+">0</span><span>Projects</span></div>
          <div class="hero-stat"><span data-target="2" data-suffix="B+">0</span><span>AED Value</span></div>
          <div class="hero-stat"><span data-target="5" data-suffix="">0</span><span>Services</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ACHIEVEMENTS -->
<section class="section-py" style="background:var(--blue);" aria-labelledby="ach-heading">
  <div class="container">
    <div class="section-header centered reveal">
      <span class="eyebrow" style="color:var(--silver-light);">By The Numbers</span>
      <div class="rule centered" aria-hidden="true"></div>
      <h2 class="h2" style="color:var(--white);" id="ach-heading">Proven Performance Across the UAE</h2>
    </div>
    <div class="stats-grid reveal">
      <div class="stat-card"><span data-target="120" data-suffix="+">0</span><div>Projects Completed</div></div>
      <div class="stat-card"><span data-target="2" data-suffix="B+ AED">0</span><div>Project Value Assessed</div></div>
      <div class="stat-card"><span data-target="97" data-suffix="%">0</span><div>Assessment Accuracy</div></div>
      <div class="stat-card"><span data-target="60" data-suffix="%">0</span><div>Avg Manpower Reduction via AI</div></div>
    </div>
  </div>
</section>

<!-- SERVICES TEASER -->
<section class="section-py" style="background:var(--off-white);" aria-labelledby="services-heading">
  <div class="container">
    <div class="section-header centered reveal">
      <span class="eyebrow">What We Do</span>
      <div class="rule centered" aria-hidden="true"></div>
      <h2 class="h2 text-blue" id="services-heading">Five Pillars of Technical Excellence</h2>
      <p class="lead">Every service is built around UAE market realities — authority requirements, local regulations, and the pace of Gulf development.</p>
    </div>
    <div class="services-grid reveal">
      <a href="<?php echo esc_url( irfze_page_url( 'service-feasibility' ) ); ?>" class="card services-card">
        <div class="services-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div>
        <h3 class="h4 text-blue">Technical Feasibility Studies</h3>
        <p>Data-driven viability assessments and risk advisory for UAE projects.</p>
        <span class="services-card-link">Learn more →</span>
      </a>
      <a href="<?php echo esc_url( irfze_page_url( 'service-design-review' ) ); ?>" class="card services-card">
        <div class="services-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg></div>
        <h3 class="h4 text-blue">Design Review & Constructability</h3>
        <p>Independent review that catches gaps before they reach the site.</p>
        <span class="services-card-link">Learn more →</span>
      </a>
      <a href="<?php echo esc_url( irfze_page_url( 'service-pms' ) ); ?>" class="card services-card">
        <div class="services-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></div>
        <h3 class="h4 text-blue">Project Management Systems</h3>
        <p>PMO frameworks and controls that scale with your programme.</p>
        <span class="services-card-link">Learn more →</span>
      </a>
      <a href="<?php echo esc_url( irfze_page_url( 'service-document-control' ) ); ?>" class="card services-card">
        <div class="services-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14,2 14,8 20,8"/></svg></div>
        <h3 class="h4 text-blue">Document Control System</h3>
        <p>Every document controlled, traceable, and authority-ready.</p>
        <span class="services-card-link">Learn more →</span>
      </a>
      <a href="<?php echo esc_url( irfze_page_url( 'service-ai' ) ); ?>" class="card services-card services-card-featured">
        <div class="services-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a10 10 0 100 20 10 10 0 000-20z"/><path d="M12 6v6l4 2"/></svg></div>
        <span class="badge badge-white" style="margin-bottom:.75rem;">Featured</span>
        <h3 class="h4" style="color:var(--white);">AI Integration & Automation</h3>
        <p style="color:rgba(255,255,255,.8);">Reduce operational manpower by up to 60% with bespoke AI solutions.</p>
        <span class="services-card-link" style="color:var(--white);">Learn more →</span>
      </a>
    </div>
  </div>
</section>

<!-- CTA BAND -->
<section class="cta-band" aria-label="Call to action">
  <div class="container">
    <div class="cta-band-inner">
      <div class="reveal-left">
        <div class="cta-band-title">Ready to Work with IR-FZE?</div>
        <div class="cta-band-sub">Talk to our team about your UAE project — no obligation, no pressure.</div>
      </div>
      <div class="cta-band-actions reveal-right">
        <a href="<?php echo esc_url( irfze_page_url( 'contact' ) ); ?>" class="btn btn-white btn-lg">Get a Consultation</a>
        <a href="tel:+971543368088" class="btn btn-outline-white btn-lg">+971 54 336 8088</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
