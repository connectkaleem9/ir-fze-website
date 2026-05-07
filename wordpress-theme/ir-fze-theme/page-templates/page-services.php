<?php
/**
 * Template Name: Services Hub
 * Template Post Type: page
 */
get_header(); ?>

<section class="page-hero" aria-label="Services hero">
  <div class="page-hero-grid" aria-hidden="true"></div>
  <div class="container page-hero-inner">
    <nav class="page-breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span>/</span>
      <span class="current">Services</span>
    </nav>
    <span class="eyebrow" style="color:var(--silver-light);">What We Offer</span>
    <h1 class="h1" style="color:var(--white);max-width:700px;margin-bottom:1rem;">Five Pillars of UAE Technical Consultancy</h1>
    <p class="lead" style="color:rgba(255,255,255,.7);max-width:600px;">From project inception to AI-powered operations — IR-FZE delivers end-to-end technical services built for the pace and complexity of UAE development.</p>
  </div>
</section>

<?php
$services = [
  [
    'num'   => '01',
    'slug'  => 'service-feasibility',
    'title' => 'Technical Feasibility Studies',
    'desc'  => 'Data-driven viability assessments and risk advisory reports that equip UAE decision-makers with the clarity to commit capital confidently. We evaluate site conditions, technical constraints, regulatory requirements, and risk exposure.',
    'kpis'  => [ '97% Accuracy', '2–4 Wk Turnaround', '120+ Studies', 'AED 2B+ Assessed' ],
    'cta'   => 'Request a Study',
  ],
  [
    'num'   => '02',
    'slug'  => 'service-design-review',
    'title' => 'Design Review & Constructability',
    'desc'  => 'Independent engineering review that identifies design gaps, interdisciplinary clashes, and buildability risks before they reach the construction site. We review architectural, structural, MEP, and civil drawings against UAE authority standards.',
    'kpis'  => [ '94% Clash Detection', '3–6 Wk Cycle', '200+ Packages', '30% RFI Reduction' ],
    'cta'   => 'Request a Review',
  ],
  [
    'num'   => '03',
    'slug'  => 'service-pms',
    'title' => 'Project Management Systems',
    'desc'  => 'Structured PMO frameworks and project management systems that bring order, visibility, and accountability to complex UAE programmes — from single-project setup to multi-contract programme controls.',
    'kpis'  => [ '40% Schedule Recovery', '4–8 Wk Setup', '80+ Programmes', '25% Cost Variance' ],
    'cta'   => 'Request a PMO Review',
  ],
  [
    'num'   => '04',
    'slug'  => 'service-document-control',
    'title' => 'Document Control System',
    'desc'  => 'End-to-end document management system setup — from numbering conventions and transmittal workflows to team training and live DMS deployment. Every document controlled, traceable, and authority-ready.',
    'kpis'  => [ '99% Traceability', '2–3 Wk Go-Live', '150+ Systems', '50% Time Saved' ],
    'cta'   => 'Request a DMS Review',
  ],
  [
    'num'   => '05',
    'slug'  => 'service-ai',
    'title' => 'AI Integration & Automation',
    'desc'  => 'Bespoke AI solutions for UAE enterprises — custom dashboards, intelligent chatbots, and task automation that reduce operational manpower by up to 60%. We build practical automation tailored to your workflows.',
    'kpis'  => [ '60% Manpower Reduction', '85% Process Accuracy', '24/7 Automation', 'Custom Built' ],
    'cta'   => 'Get a Free AI Audit',
  ],
];

foreach ( $services as $i => $s ) :
  $is_odd  = ( $i % 2 === 0 );
  $bg      = $is_odd ? 'var(--off-white)' : 'var(--white)';
?>
<section class="section-py" style="background:<?php echo $bg; ?>;" aria-labelledby="service-<?php echo esc_attr( $s['num'] ); ?>">
  <div class="container">
    <div style="display:grid;grid-template-columns:<?php echo $is_odd ? '1fr 1fr' : '1fr 1fr'; ?>;gap:4rem;align-items:center;">
      <div class="<?php echo $is_odd ? 'reveal-left' : 'reveal-right'; ?>">
        <span class="eyebrow">Service <?php echo esc_html( $s['num'] ); ?> / 05</span>
        <div class="rule"></div>
        <h2 class="h2 text-blue" id="service-<?php echo esc_attr( $s['num'] ); ?>" style="margin-bottom:1rem;"><?php echo esc_html( $s['title'] ); ?></h2>
        <p class="lead" style="margin-bottom:2rem;"><?php echo esc_html( $s['desc'] ); ?></p>
        <a href="<?php echo esc_url( irfze_page_url( $s['slug'] ) ); ?>" class="btn btn-primary"><?php echo esc_html( $s['cta'] ); ?></a>
      </div>
      <div class="<?php echo $is_odd ? 'reveal-right' : 'reveal-left'; ?>">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;">
          <?php foreach ( $s['kpis'] as $kpi ) : ?>
          <div style="background:var(--white);border:1px solid var(--border);border-radius:var(--radius-lg);padding:1.25rem;text-align:center;box-shadow:var(--shadow-xs);">
            <div style="font-family:var(--font-head);font-size:1.1rem;font-weight:800;color:var(--blue);"><?php echo esc_html( $kpi ); ?></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endforeach; ?>

<section class="cta-band" aria-label="Call to action">
  <div class="container">
    <div class="cta-band-inner">
      <div class="reveal-left">
        <div class="cta-band-title">Not Sure Which Service You Need?</div>
        <div class="cta-band-sub">Call or message us — we'll advise you on the right engagement for your project.</div>
      </div>
      <div class="cta-band-actions reveal-right">
        <a href="<?php echo esc_url( irfze_page_url( 'contact' ) ); ?>" class="btn btn-white btn-lg">Get a Consultation</a>
        <a href="tel:+971543368088" class="btn btn-outline-white btn-lg">+971 54 336 8088</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
