<?php
/**
 * Template Name: Service - Document Control
 * Template Post Type: page
 */
get_header(); ?>
<style>.sp-kpi-row{display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-bottom:3rem}.sp-kpi{background:var(--white);border:1px solid var(--border);border-radius:var(--radius-lg);padding:1.5rem;text-align:center;box-shadow:var(--shadow-xs)}.sp-kpi-num{font-family:var(--font-head);font-size:1.8rem;font-weight:800;color:var(--blue);display:block;margin-bottom:.25rem}.sp-kpi-label{font-size:.75rem;color:var(--silver);font-family:var(--font-head);font-weight:600}.sp-body-grid{display:grid;grid-template-columns:1.1fr 1fr;gap:4rem;align-items:start}.sp-process{display:flex;flex-direction:column;gap:0}.sp-process-item{display:flex;gap:1.25rem;padding-bottom:2rem;position:relative}.sp-process-item:not(:last-child)::before{content:'';position:absolute;left:18px;top:40px;bottom:0;width:1px;background:var(--border)}.sp-process-num{width:38px;height:38px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-family:var(--font-head);font-weight:800;font-size:.8rem;color:var(--white);flex-shrink:0}.sp-process-title{font-family:var(--font-head);font-size:.95rem;font-weight:700;color:var(--text-dark);margin-bottom:.3rem}.sp-process-desc{font-size:.84rem;color:var(--text-mid);line-height:1.65}.sp-deliverables{background:var(--off-white);border-radius:var(--radius-xl);padding:2.25rem;border:1px solid var(--border)}.sp-deliverables h3{font-family:var(--font-head);font-size:1rem;font-weight:700;color:var(--blue);margin-bottom:1.25rem}.sp-next{display:flex;align-items:center;justify-content:space-between;background:var(--blue-xlt);border:1px solid rgba(17,70,145,.12);border-radius:var(--radius-lg);padding:1.25rem 1.5rem;margin-top:2rem;transition:all var(--t-base)}.sp-next:hover{background:var(--blue)}.sp-next:hover .sp-next-label,.sp-next:hover .sp-next-title{color:var(--white)}.sp-next:hover .sp-next-arrow svg{stroke:var(--white)}.sp-next-label{font-family:var(--font-head);font-size:.65rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:var(--silver);margin-bottom:.2rem}.sp-next-title{font-family:var(--font-head);font-size:.95rem;font-weight:700;color:var(--blue)}.sp-next-arrow svg{width:22px;height:22px;stroke:var(--blue)}@media(max-width:900px){.sp-kpi-row{grid-template-columns:repeat(2,1fr)}.sp-body-grid{grid-template-columns:1fr}}</style>

<section class="page-hero" aria-label="Document Control hero">
  <div class="page-hero-grid" aria-hidden="true"></div>
  <div class="container page-hero-inner">
    <nav class="page-breadcrumb" aria-label="Breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a><span>/</span><a href="<?php echo esc_url(irfze_page_url('services')); ?>">Services</a><span>/</span><span class="current">Document Control</span></nav>
    <div style="display:flex;gap:.75rem;margin-bottom:1.25rem;flex-wrap:wrap;"><span class="badge badge-white">Service 04 / 05</span><span class="badge badge-white">UAE Document Management</span></div>
    <h1 class="h1" style="color:var(--white);max-width:700px;margin-bottom:1rem;">Document Control System</h1>
    <p class="lead" style="color:rgba(255,255,255,.7);max-width:600px;margin-bottom:2rem;">End-to-end document management system setup — from numbering conventions and transmittal workflows to team training and live DMS deployment.</p>
    <div style="display:flex;gap:1rem;flex-wrap:wrap;"><a href="<?php echo esc_url(irfze_page_url('contact')); ?>" class="btn btn-white btn-lg">Request a DMS Review</a><a href="tel:+971543368088" class="btn btn-outline-white btn-lg">+971 54 336 8088</a></div>
  </div>
</section>

<section class="section-py" style="background:var(--off-white);" aria-labelledby="dc-content">
  <div class="container">
    <div class="sp-kpi-row reveal">
      <div class="sp-kpi"><span class="sp-kpi-num">99%</span><div class="sp-kpi-label">Document Traceability</div></div>
      <div class="sp-kpi"><span class="sp-kpi-num">2–3 Wk</span><div class="sp-kpi-label">DMS Go-Live Timeline</div></div>
      <div class="sp-kpi"><span class="sp-kpi-num">150+</span><div class="sp-kpi-label">Systems Implemented</div></div>
      <div class="sp-kpi"><span class="sp-kpi-num">50%</span><div class="sp-kpi-label">Avg. Retrieval Time Saved</div></div>
    </div>
    <div class="sp-body-grid">
      <div>
        <span class="eyebrow">What We Do</span><div class="rule"></div>
        <h2 class="h2 text-blue" id="dc-content" style="margin-bottom:1rem;">Every Document. Controlled. Traceable. Auditable.</h2>
        <p class="lead" style="margin-bottom:1.5rem;">IR-FZE designs and implements Document Control Systems that give your project a single source of truth — drawings, specifications, submittals, transmittals, and correspondence, fully auditable and authority-ready.</p>
        <h3 class="h4 text-blue" style="margin-bottom:1.25rem;">Our 4-Step Process</h3>
        <div class="sp-process reveal">
          <div class="sp-process-item"><div class="sp-process-num">1</div><div><div class="sp-process-title">Audit & Requirements Capture</div><div class="sp-process-desc">We review your current document landscape to define the target system spec aligned to UAE authority expectations.</div></div></div>
          <div class="sp-process-item"><div class="sp-process-num">2</div><div><div class="sp-process-title">System Design & Procedures</div><div class="sp-process-desc">We create your Document Control Procedure manual covering numbering, revision control, transmittal protocols, and approval workflows.</div></div></div>
          <div class="sp-process-item"><div class="sp-process-num">3</div><div><div class="sp-process-title">DMS Configuration & Go-Live</div><div class="sp-process-desc">We configure your chosen platform (Aconex, Procore, SharePoint, or custom) with folder structures, permission levels, and workflow automations.</div></div></div>
          <div class="sp-process-item"><div class="sp-process-num">4</div><div><div class="sp-process-title">Training & Ongoing Support</div><div class="sp-process-desc">We train all document controllers and key users, provide quick-reference guides, and offer ongoing support during the first months of live operation.</div></div></div>
        </div>
        <a href="<?php echo esc_url(irfze_page_url('service-ai')); ?>" class="sp-next reveal">
          <div><div class="sp-next-label">Next Service</div><div class="sp-next-title">AI Integration &amp; Automation →</div></div>
          <div class="sp-next-arrow"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
        </a>
      </div>
      <div class="reveal">
        <div class="sp-deliverables">
          <h3>Deliverables Included</h3>
          <ul class="check-list" style="margin-bottom:1.75rem;">
            <li class="check-item">Document Control Procedure manual</li>
            <li class="check-item">Document numbering and revision convention guide</li>
            <li class="check-item">Transmittal and submittal workflow templates</li>
            <li class="check-item">Configured DMS platform with live document register</li>
            <li class="check-item">User training sessions and quick-reference guides</li>
            <li class="check-item">Authority submission filing structure and index</li>
          </ul>
          <div style="height:1px;background:var(--border);margin-bottom:1.5rem;"></div>
          <h3>Platforms We Support</h3>
          <div style="display:flex;flex-wrap:wrap;gap:.5rem;margin-bottom:1.75rem;"><span class="badge badge-blue">Aconex</span><span class="badge badge-blue">Procore</span><span class="badge badge-blue">SharePoint</span><span class="badge badge-blue">Viewpoint</span><span class="badge badge-blue">Custom DMS</span></div>
          <div style="height:1px;background:var(--border);margin-bottom:1.5rem;"></div>
          <a href="<?php echo esc_url(irfze_page_url('contact')); ?>" class="btn btn-primary" style="width:100%;justify-content:center;">Request a DMS Review</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-band" aria-label="CTA"><div class="container"><div class="cta-band-inner"><div class="reveal-left"><div class="cta-band-title">Ready to Take Control of Your Documents?</div><div class="cta-band-sub">Contact IR-FZE to discuss setting up a document control system for your UAE project.</div></div><div class="cta-band-actions reveal-right"><a href="<?php echo esc_url(irfze_page_url('contact')); ?>" class="btn btn-white btn-lg">Get a Consultation</a><a href="tel:+971543368088" class="btn btn-outline-white btn-lg">+971 54 336 8088</a></div></div></div></section>

<?php get_footer(); ?>
