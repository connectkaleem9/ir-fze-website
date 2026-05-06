# Frontend Rules — HTML Page Template

## Required Structure for Every Page

```html
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <!-- 1. Meta essentials -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PAGE TITLE | IR-FZE — Sharjah, UAE</title>
  <meta name="description" content="..." />  <!-- 150–160 chars -->
  <meta name="keywords" content="..." />
  <meta name="robots" content="index, follow" />
  <meta name="geo.region" content="AE-SH" />
  <link rel="canonical" href="https://www.ir-fze.com/PAGE.html" />

  <!-- 2. hreflang (bilingual readiness) -->
  <link rel="alternate" hreflang="en" href="https://www.ir-fze.com/PAGE.html" />
  <link rel="alternate" hreflang="ar" href="https://www.ir-fze.com/ar/PAGE.html" />

  <!-- 3. Open Graph -->
  <meta property="og:title" content="..." />
  <meta property="og:description" content="..." />
  <meta property="og:url" content="https://www.ir-fze.com/PAGE.html" />

  <!-- 4. Favicon (inline SVG, no file needed) -->
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,..." />
  <meta name="theme-color" content="#114691" />

  <!-- 5. Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet" />

  <!-- 6. Global CSS -->
  <link rel="stylesheet" href="css/global.css" />

  <!-- 7. JSON-LD schema -->
  <script type="application/ld+json">{ ... }</script>

  <!-- 8. Page-specific CSS only -->
  <style> /* page-specific only */ </style>
</head>
<body>

  <!-- NAVBAR (identical on all pages) -->
  <nav id="navbar"> ... </nav>

  <!-- PAGE HERO (inner pages) or SECTION HERO (homepage) -->

  <!-- PAGE SECTIONS -->

  <!-- CTA BAND (on every page before footer) -->
  <section class="cta-band"> ... </section>

  <!-- FOOTER (identical on all pages, with NAP in <address>) -->
  <footer> ... </footer>

  <!-- WhatsApp FAB (on every page) -->
  <a href="https://wa.me/971543368088?text=..." class="wa-fab"> ... </a>

  <!-- Global JS — always last -->
  <script src="js/global.js"></script>
</body>
</html>
```

## Inner Page Hero Pattern

```html
<section class="page-hero" aria-label="[page] hero">
  <div class="page-hero-grid" aria-hidden="true"></div>
  <div class="container page-hero-inner">
    <nav class="page-breadcrumb" aria-label="Breadcrumb">
      <a href="index.html">Home</a>
      <span>/</span>
      <span class="current">Page Name</span>
    </nav>
    <span class="eyebrow" style="color:var(--silver-light);">Eyebrow Label</span>
    <h1 class="h1" style="color:var(--white); max-width:700px; margin-bottom:1rem;">
      Page Title
    </h1>
    <p class="lead" style="color:rgba(255,255,255,.7); max-width:600px;">
      Subtitle text.
    </p>
  </div>
</section>
```

## Section Pattern

```html
<section class="section-py" style="background:var(--off-white);" aria-labelledby="section-id">
  <div class="container">
    <div class="section-header centered reveal">
      <span class="eyebrow">Label</span>
      <div class="rule centered" aria-hidden="true"></div>
      <h2 class="h2 text-blue" id="section-id">Section Title</h2>
      <p class="lead">Subtitle.</p>
    </div>
    <!-- content -->
  </div>
</section>
```

## Scroll Animation Usage

```html
<!-- Basic reveal (fade up) -->
<div class="reveal">...</div>

<!-- Directional reveals -->
<div class="reveal-left">...</div>
<div class="reveal-right">...</div>

<!-- Stagger siblings -->
<div class="reveal delay-1">...</div>
<div class="reveal delay-2">...</div>
<div class="reveal delay-3">...</div>
```

## Counter Animation

```html
<span data-target="120" data-suffix="+" data-prefix="">0</span>
```

## Stat Bar Animation

```html
<div class="stat-bar">
  <div class="stat-bar-header">
    <span class="stat-bar-label">Label</span>
    <span class="stat-bar-value">85%</span>
  </div>
  <div class="stat-bar-track">
    <div class="stat-bar-fill" data-width="85"></div>
  </div>
</div>
```
