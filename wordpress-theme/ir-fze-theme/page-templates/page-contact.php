<?php
/**
 * Template Name: Contact
 * Template Post Type: page
 */
get_header(); ?>

<section class="page-hero" aria-label="Contact hero">
  <div class="page-hero-grid" aria-hidden="true"></div>
  <div class="container page-hero-inner">
    <nav class="page-breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span>/</span>
      <span class="current">Contact</span>
    </nav>
    <span class="eyebrow" style="color:var(--silver-light);">Get In Touch</span>
    <h1 class="h1" style="color:var(--white);max-width:700px;margin-bottom:1rem;">Let's Talk About Your Project</h1>
    <p class="lead" style="color:rgba(255,255,255,.7);max-width:600px;">Contact IR-FZE for a no-obligation discussion about your technical consultancy requirements.</p>
  </div>
</section>

<section class="section-py" style="background:var(--off-white);" aria-labelledby="contact-heading">
  <div class="container">
    <div style="display:grid;grid-template-columns:1.4fr 1fr;gap:4rem;align-items:start;">

      <!-- Contact Form -->
      <div class="reveal">
        <span class="eyebrow">Send Us a Message</span>
        <div class="rule"></div>
        <h2 class="h2 text-blue" id="contact-heading" style="margin-bottom:1.5rem;">How Can We Help?</h2>
        <form id="contactForm" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="POST" novalidate>
          <?php wp_nonce_field( 'irfze_contact', 'irfze_contact_nonce' ); ?>
          <input type="hidden" name="action" value="irfze_contact_form" />
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-bottom:1rem;">
            <div class="form-group">
              <label for="name" class="form-label">Full Name *</label>
              <input type="text" id="name" name="name" class="form-input" placeholder="Ahmed Al Mansouri" required />
            </div>
            <div class="form-group">
              <label for="company" class="form-label">Company</label>
              <input type="text" id="company" name="company" class="form-input" placeholder="Your Company" />
            </div>
          </div>
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-bottom:1rem;">
            <div class="form-group">
              <label for="phone" class="form-label">Phone (UAE) *</label>
              <input type="tel" id="phone" name="phone" class="form-input" placeholder="+971 5X XXX XXXX" required />
            </div>
            <div class="form-group">
              <label for="email" class="form-label">Email *</label>
              <input type="email" id="email" name="email" class="form-input" placeholder="you@company.com" required />
            </div>
          </div>
          <div class="form-group" style="margin-bottom:1rem;">
            <label for="service" class="form-label">Service Interested In</label>
            <select id="service" name="service" class="form-input">
              <option value="">Select a service...</option>
              <option value="feasibility">Technical Feasibility Studies</option>
              <option value="design-review">Design Review & Constructability</option>
              <option value="pms">Project Management Systems</option>
              <option value="document-control">Document Control System</option>
              <option value="ai">AI Integration & Automation</option>
              <option value="other">Other / General Enquiry</option>
            </select>
          </div>
          <div class="form-group" style="margin-bottom:1.5rem;">
            <label for="message" class="form-label">Message *</label>
            <textarea id="message" name="message" class="form-input" rows="5" placeholder="Tell us about your project..." required></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-lg" style="width:100%;">Send Message</button>
          <div id="formSuccess" style="display:none;margin-top:1rem;padding:1rem;background:#e8f5e9;border-radius:var(--radius-md);color:#2e7d32;font-family:var(--font-head);font-weight:600;">
            Thank you! We'll be in touch within one business day.
          </div>
        </form>
      </div>

      <!-- Sidebar -->
      <div class="reveal">
        <div style="display:flex;flex-direction:column;gap:1.25rem;">
          <a href="tel:+971543368088" class="btn btn-primary btn-lg" style="justify-content:center;gap:.6rem;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8 19.79 19.79 0 012 1.18 2 2 0 014 0h3a2 2 0 012 1.72c.13.96.36 1.9.7 2.81a2 2 0 01-.45 2.11L8.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0122 14.92z"/></svg>
            Call +971 54 336 8088
          </a>
          <a href="https://wa.me/971543368088?text=Hello%20IR-FZE%2C%20I%20am%20interested%20in%20your%20consultancy%20services." class="btn btn-ghost btn-lg" style="justify-content:center;gap:.6rem;" target="_blank" rel="noopener noreferrer">
            WhatsApp Us Now
          </a>
          <div class="card" style="padding:1.5rem;">
            <h3 style="font-family:var(--font-head);font-size:.9rem;font-weight:700;color:var(--blue);margin-bottom:1rem;">Office Details</h3>
            <address style="font-style:normal;">
              <p style="font-size:.84rem;color:var(--text-mid);line-height:1.75;margin:0;">
                IR-FZE Technical Consultancy<br/>
                Sharjah Publishing City Freezone<br/>
                Sharjah, United Arab Emirates
              </p>
              <p style="margin-top:.75rem;font-size:.84rem;"><a href="tel:+971543368088" style="color:var(--blue);font-weight:600;">+971 543368088</a></p>
              <p style="font-size:.84rem;"><a href="mailto:info@ir-fze.com" style="color:var(--blue);font-weight:600;">info@ir-fze.com</a></p>
            </address>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="cta-band" aria-label="Call to action">
  <div class="container">
    <div class="cta-band-inner">
      <div class="reveal-left">
        <div class="cta-band-title">Prefer to Talk Directly?</div>
        <div class="cta-band-sub">Call or WhatsApp our team — we respond within one business day.</div>
      </div>
      <div class="cta-band-actions reveal-right">
        <a href="tel:+971543368088" class="btn btn-white btn-lg">+971 54 336 8088</a>
        <a href="mailto:info@ir-fze.com" class="btn btn-outline-white btn-lg">info@ir-fze.com</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
