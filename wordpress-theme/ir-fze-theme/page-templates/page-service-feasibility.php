<?php
/**
 * Template Name: Service - Technical Feasibility
 * Template Post Type: page
 */
get_header(); ?>
<style>
  .sp-kpi-row{display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-bottom:3rem}
  .sp-kpi{background:var(--white);border:1px solid var(--border);border-radius:var(--radius-lg);padding:1.5rem;text-align:center;box-shadow:var(--shadow-xs)}
  .sp-kpi-num{font-family:var(--font-head);font-size:1.8rem;font-weight:800;color:var(--blue);display:block;margin-bottom:.25rem}
  .sp-kpi-label{font-size:.75rem;color:var(--silver);font-family:var(--font-head);font-weight:600}
  .sp-body-grid{display:grid;grid-template-columns:1.1fr 1fr;gap:4rem;align-items:start}
  .sp-process{display:flex;flex-direction:column;gap:0}
  .sp-process-item{display:flex;gap:1.25rem;padding-bottom:2rem;position:relative}
  .sp-process-item:not(:last-child)::before{content:'';position:absolute;left:18px;top:40px;bottom:0;width:1px;background:var(--border)}
  .sp-process-num{width:38px;height:38px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-family:var(--font-head);font-weight:800;font-size:.8rem;color:var(--white);flex-shrink:0}
  .sp-process-title{font-family:var(--font-head);font-size:.95rem;font-weight:700;color:var(--text-dark);margin-bottom:.3rem}
  .sp-process-desc{font-size:.84rem;color:var(--text-mid);line-height:1.65}
  .sp-deliverables{background:var(--off-white);border-radius:var(--radius-xl);padding:2.25rem;border:1px solid var(--border)}
  .sp-deliverables h3{font-family:var(--font-head);font-size:1rem;font-weight:700;color:var(--blue);margin-bottom:1.25rem}
  .sp-next{display:flex;align-items:center;justify-content:space-between;background:var(--blue-xlt);border:1px solid rgba(17,70,145,.12);border-radius:var(--radius-lg);padding:1.25rem 1.5rem;margin-top:2rem;transition:all var(--t-base)}
  .sp-next:hover{background:var(--blue)}
  .sp-next:hover .sp-next-label,.sp-next:hover .sp-next-title{color:var(--white)}
  .sp-next:hover .sp-next-arrow svg{stroke:var(--white)}
  .sp-next-label{font-family:var(--font-head);font-size:.65rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:var(--silver);margin-bottom:.2rem}
  .sp-next-title{font-family:var(--font-head);font-size:.95rem;font-weight:700;color:var(--blue)}
  .sp-next-arrow svg{width:22px;height:22px;stroke:var(--blue)}
  @media(max-width:900px){.sp-kpi-row{grid-template-columns:repeat(2,1fr)}.sp-body-grid{grid-template-columns:1fr}}
</style>

<section class="page-hero" aria-label="Technical Feasibility hero">
  <div class="page-hero-grid" aria-hidden="true"></div>
  <div class="container page-hero-inner">
    <nav class="page-breadcrumb" aria-label="Breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a><span>/</span><a href="<?php echo esc_url(irfze_page_url('services')); ?>">Services</a><span>/</span><span class="current">Technical Feasibility</span></nav>
    <div style="display:flex;gap:.75rem;margin-bottom:1.25rem;flex-wrap:wrap;"><span class="badge badge-white">Service 01 / 05</span><span class="badge badge-white">UAE Engineering Advisory</span></div>
    <h1 class="h1" style="color:var(--white);max-width:700px;margin-bottom:1rem;">Technical Feasibility Studies</h1>
    <p class="lead" style="color:rgba(255,255,255,.7);max-width:600px;margin-bottom:2rem;">Data-driven viability assessments and risk advisory reports that equip UAE decision-makers with the clarity to commit capital confidently.</p>
    <div style="display:flex;gap:1rem;flex-wrap:wrap;">
      <a href="<?php echo esc_url(irfze_page_url('contact')); ?>" class="btn btn-white btn-lg">Request a Study</a>
      <a href="tel:+971543368088" class="btn btn-outline-white btn-lg">+971 54 336 8088</a>
    </div>
  </div>
</section>

<section class="section-py" style="background:var(--off-white);" aria-labelledby="fs-content">
  <div class="container">
    <div class="sp-kpi-row reveal">
      <div class="sp-kpi"><span class="sp-kpi-num">97%</span><div class="sp-kpi-label">Assessment Accuracy</div></div>
      <div class="sp-kpi"><span class="sp-kpi-num">2–4 Wk</span><div class="sp-kpi-label">Typical Turnaround</div></div>
      <div class="sp-kpi"><span class="sp-kpi-num">120+</span><div class="sp-kpi-label">Studies Completed</div></div>
      <div class="sp-kpi"><span class="sp-kpi-num">AED 2B+</span><div class="sp-kpi-label">Project Value Assessed</div></div>
    </div>
    <div class="sp-body-grid">
      <div>
        <span class="eyebrow">What We Do</span><div class="rule"></div>
        <h2 class="h2 text-blue" id="fs-content" style="margin-bottom:1rem;">Clarity Before Capital Commitment</h2>
        <p class="lead" style="margin-bottom:1.5rem;">IR-FZE's Technical Feasibility Studies provide a structured, evidence-based assessment of your project's viability before capital is committed.</p>
        <p style="font-size:.9rem;color:var(--text-mid);line-height:1.85;margin-bottom:2rem;">Whether you are assessing a greenfield development in Sharjah, a mixed-use tower in Dubai, or an industrial facility across the Emirates, our methodology is consistent, rigorous, and calibrated to UAE authority requirements.</p>
        <h3 class="h4 text-blue" style="margin-bottom:1.25rem;">Our 4-Step Process</h3>
        <div class="sp-process reveal">
          <div class="sp-process-item"><div class="sp-process-num">1</div><div><div class="sp-process-title">Scope Definition</div><div class="sp-process-desc">We align on project parameters, authority requirements, and the specific risk areas your stakeholders need clarity on.</div></div></div>
          <div class="sp-process-item"><div class="sp-process-num">2</div><div><div class="sp-process-title">Site & Document Review</div><div class="sp-process-desc">Desktop study of existing documentation combined with site visits to gather primary technical data.</div></div></div>
          <div class="sp-process-item"><div class="sp-process-num">3</div><div><div class="sp-process-title">Risk Assessment</div><div class="sp-process-desc">Structured risk identification, probability and impact scoring, and mitigation planning in a quantified risk register.</div></div></div>
          <div class="sp-process-item"><div class="sp-process-num">4</div><div><div class="sp-process-title">Report & Presentation</div><div class="sp-process-desc">Delivery of a comprehensive report and executive presentation with a clear Go/No-Go recommendation.</div></div></div>
        </div>
        <a href="<?php echo esc_url(irfze_page_url('service-design-review')); ?>" class="sp-next reveal">
          <div><div class="sp-next-label">Next Service</div><div class="sp-next-title">Design Review &amp; Constructability →</div></div>
          <div class="sp-next-arrow"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
        </a>
      </div>
      <div class="reveal">
        <div class="sp-deliverables">
          <h3>Deliverables Included</h3>
          <ul class="check-list" style="margin-bottom:1.75rem;">
            <li class="check-item">Site and project viability assessment report</li>
            <li class="check-item">Technical risk register with quantified exposure</li>
            <li class="check-item">UAE regulatory and authority compliance advisory</li>
            <li class="check-item">Market and programme feasibility analysis</li>
            <li class="check-item">Executive advisory report with clear recommendations</li>
            <li class="check-item">Go / No-Go decision framework for board use</li>
          </ul>
          <div style="height:1px;background:var(--border);margin-bottom:1.5rem;"></div>
          <h3>Sectors Served</h3>
          <div style="display:flex;flex-wrap:wrap;gap:.5rem;margin-bottom:1.75rem;">
            <span class="badge badge-blue">Real Estate</span><span class="badge badge-blue">Infrastructure</span><span class="badge badge-blue">Industrial</span><span class="badge badge-blue">Government</span><span class="badge badge-blue">Hospitality</span><span class="badge badge-blue">Logistics</span>
          </div>
          <div style="height:1px;background:var(--border);margin-bottom:1.5rem;"></div>
          <a href="<?php echo esc_url(irfze_page_url('contact')); ?>" class="btn btn-primary" style="width:100%;justify-content:center;">Request a Feasibility Study</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-band" aria-label="CTA"><div class="container"><div class="cta-band-inner"><div class="reveal-left"><div class="cta-band-title">Ready to Validate Your Project?</div><div class="cta-band-sub">Contact IR-FZE for a no-obligation discussion about your feasibility requirements.</div></div><div class="cta-band-actions reveal-right"><a href="<?php echo esc_url(irfze_page_url('contact')); ?>" class="btn btn-white btn-lg">Get a Consultation</a><a href="tel:+971543368088" class="btn btn-outline-white btn-lg">+971 54 336 8088</a></div></div></div></section>

<?php get_footer(); ?>
