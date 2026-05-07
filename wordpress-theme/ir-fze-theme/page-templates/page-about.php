<?php
/**
 * Template Name: About Us
 * Template Post Type: page
 */
get_header(); ?>

<section class="page-hero" aria-label="About hero">
  <div class="page-hero-grid" aria-hidden="true"></div>
  <div class="container page-hero-inner">
    <nav class="page-breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span>/</span>
      <span class="current">About Us</span>
    </nav>
    <span class="eyebrow" style="color:var(--silver-light);">Who We Are</span>
    <h1 class="h1" style="color:var(--white);max-width:700px;margin-bottom:1rem;">UAE Technical Consultancy Built on Precision</h1>
    <p class="lead" style="color:rgba(255,255,255,.7);max-width:600px;">IR-FZE is a Sharjah-registered technical consultancy delivering engineering rigour, project systems, and AI-driven efficiency to UAE enterprises and construction programmes.</p>
  </div>
</section>

<!-- MISSION -->
<section class="section-py" aria-labelledby="mission-heading">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1.2fr;gap:4rem;align-items:center;" class="reveal">
      <div style="background:var(--blue);border-radius:var(--radius-xl);padding:2.5rem;color:var(--white);">
        <span class="eyebrow" style="color:var(--silver-light);">Our Mission</span>
        <div class="rule"></div>
        <h2 class="h2" style="color:var(--white);margin-bottom:1rem;" id="mission-heading">Engineering Confidence Into Every UAE Decision</h2>
        <p style="color:rgba(255,255,255,.8);line-height:1.85;">IR-FZE exists to give UAE decision-makers the technical clarity they need to commit capital, approve designs, and run programmes with confidence — backed by rigorous analysis and delivered with precision.</p>
      </div>
      <div>
        <span class="eyebrow">Registered in Sharjah Publishing City Freezone</span>
        <div class="rule"></div>
        <p class="lead" style="margin-bottom:1.5rem;">We are a UAE-registered technical consultancy operating from Sharjah Publishing City Freezone — positioned at the heart of one of the most active construction and development markets in the world.</p>
        <p style="font-size:.9rem;color:var(--text-mid);line-height:1.85;">Our team combines deep engineering expertise with practical UAE market knowledge — we understand authority requirements, local contracting norms, and the pace of Gulf development in a way that matters to our clients.</p>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-top:2rem;">
          <div class="sp-kpi" style="background:var(--off-white);border:1px solid var(--border);border-radius:var(--radius-lg);padding:1.25rem;text-align:center;">
            <span style="font-family:var(--font-head);font-size:1.6rem;font-weight:800;color:var(--blue);display:block;"><span data-target="120" data-suffix="+">0</span></span>
            <div style="font-size:.75rem;color:var(--silver);font-family:var(--font-head);font-weight:600;">Projects Delivered</div>
          </div>
          <div class="sp-kpi" style="background:var(--off-white);border:1px solid var(--border);border-radius:var(--radius-lg);padding:1.25rem;text-align:center;">
            <span style="font-family:var(--font-head);font-size:1.6rem;font-weight:800;color:var(--blue);display:block;">5</span>
            <div style="font-size:.75rem;color:var(--silver);font-family:var(--font-head);font-weight:600;">Core Service Pillars</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- VALUES -->
<section class="section-py" style="background:var(--off-white);" aria-labelledby="values-heading">
  <div class="container">
    <div class="section-header centered reveal">
      <span class="eyebrow">Our Values</span>
      <div class="rule centered" aria-hidden="true"></div>
      <h2 class="h2 text-blue" id="values-heading">What Drives Every Engagement</h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:1.5rem;" class="reveal">
      <div class="card" style="padding:2rem;">
        <div style="width:44px;height:44px;background:var(--blue-xlt);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;margin-bottom:1rem;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--blue)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
        <h3 class="h4 text-blue">Precision</h3>
        <p style="font-size:.88rem;color:var(--text-mid);line-height:1.75;">We do not estimate when we can calculate. Every deliverable is traceable back to evidence — never opinion dressed up as expertise.</p>
      </div>
      <div class="card" style="padding:2rem;">
        <div style="width:44px;height:44px;background:var(--blue-xlt);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;margin-bottom:1rem;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--blue)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
        <h3 class="h4 text-blue">Partnership</h3>
        <p style="font-size:.88rem;color:var(--text-mid);line-height:1.75;">We work alongside your team, not above it. Our value is in making your people better at delivering, not in creating dependency on consultants.</p>
      </div>
      <div class="card" style="padding:2rem;">
        <div style="width:44px;height:44px;background:var(--blue-xlt);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;margin-bottom:1rem;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--blue)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
        <h3 class="h4 text-blue">Speed</h3>
        <p style="font-size:.88rem;color:var(--text-mid);line-height:1.75;">UAE projects move fast. We match that pace — mobilising quickly, structuring efficiently, and delivering on the timelines that matter to your programme.</p>
      </div>
      <div class="card" style="padding:2rem;">
        <div style="width:44px;height:44px;background:var(--blue-xlt);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;margin-bottom:1rem;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--blue)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
        <h3 class="h4 text-blue">Innovation</h3>
        <p style="font-size:.88rem;color:var(--text-mid);line-height:1.75;">We bring AI and modern automation to traditional consultancy — giving UAE organisations tools that transform how their teams work, not just what they produce.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA BAND -->
<section class="cta-band" aria-label="Call to action">
  <div class="container">
    <div class="cta-band-inner">
      <div class="reveal-left">
        <div class="cta-band-title">Ready to Work with IR-FZE?</div>
        <div class="cta-band-sub">Get in touch to discuss your UAE project requirements.</div>
      </div>
      <div class="cta-band-actions reveal-right">
        <a href="<?php echo esc_url( irfze_page_url( 'contact' ) ); ?>" class="btn btn-white btn-lg">Get a Consultation</a>
        <a href="tel:+971543368088" class="btn btn-outline-white btn-lg">+971 54 336 8088</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
