# IR-FZE Website — Project Instructions

## Project Overview
Static multi-page corporate website for **IR-FZE**, a UAE technical consultancy registered in Sharjah Publishing City Freezone. The site targets B2B decision-makers in the UAE and GCC construction, real estate, and enterprise sectors.

**Live preview:** `http://localhost:3000` (run `node server.js`)

## Architecture

```
e:\Claud Experiment\
├── index.html                  # Homepage
├── about.html                  # About Us
├── services.html               # Services hub
├── service-feasibility.html    # Service page
├── service-design-review.html  # Service page
├── service-pms.html            # Service page
├── service-document-control.html
├── service-ai.html             # AI Integration (featured)
├── contact.html                # Contact + form
├── css/
│   └── global.css              # Full design system (single source of truth)
├── js/
│   └── global.js               # Nav, scroll reveal, counters, form validation
└── server.js                   # Local dev server (Node.js, port 3000)
```

No build system, no bundler, no frameworks. Pure HTML5 / CSS3 / Vanilla JS.

## Brand & Design System

### Colors (never deviate)
| Token | Hex | Usage |
|---|---|---|
| `--blue` | `#114691` | Primary — headings, CTAs, icons, nav |
| `--blue-dark` | `#0C3060` | Hover states, hero gradients |
| `--silver` | `#A0A6AD` | Accents, borders, eyebrow labels |
| `--white` | `#FFFFFF` | Backgrounds, text on dark |
| `--off-white` | `#F8F9FB` | Alternating section backgrounds |

### Typography
- **Headings:** `Montserrat` — 700/800 weight
- **Body:** `Inter` — 400/500 weight
- Both loaded via Google Fonts with `display=swap`

### Key CSS Classes (from `global.css`)
- `.reveal` / `.reveal-left` / `.reveal-right` / `.reveal-scale` — scroll animations
- `.eyebrow` — small uppercase label above section titles
- `.rule` — blue-to-silver gradient divider bar
- `.btn-primary` / `.btn-ghost` / `.btn-white` / `.btn-outline-white` — buttons
- `.card` / `.card-glass` — card containers
- `.check-list` / `.check-item` — tick-mark feature lists
- `.stat-bar` / `.stat-bar-fill[data-width]` — animated progress bars
- `.cta-band` — full-width blue CTA section
- `.page-hero` — inner page hero (blue gradient)
- `.mega-menu` — services dropdown in nav

## Company Information (verbatim — never change)
- **Name:** IR-FZE
- **Phone:** +971 543368088
- **Email:** info@ir-fze.com
- **Address:** Sharjah Publishing City Freezone, Sharjah, UAE
- **WhatsApp link:** `https://wa.me/971543368088?text=Hello%20IR-FZE%2C%20I%20am%20interested%20in%20your%20consultancy%20services.`

## Navigation Rules
Every page must include:
1. `<nav id="navbar">` with the mega menu for Services
2. Mobile drawer (`id="mobile-drawer"`) with all nav links
3. WhatsApp FAB (`.wa-fab`) at the bottom
4. Footer with NAP block in `<address>` tags (for SEO crawlability)
5. `<script src="js/global.js"></script>` before `</body>`

The mega menu lists all 5 service pages. Always keep it in sync when adding pages.

## Services (5 pillars — fixed)
| # | Name | File |
|---|---|---|
| 01 | Technical Feasibility Studies | `service-feasibility.html` |
| 02 | Design Review & Constructability | `service-design-review.html` |
| 03 | Project Management Systems | `service-pms.html` |
| 04 | Document Control System | `service-document-control.html` |
| 05 | AI Integration & Automation | `service-ai.html` |

## SEO Requirements
- Every page needs: `<title>`, `<meta name="description">`, `<meta name="keywords">`, `<link rel="canonical">`
- NAP must be in `<address>` in the footer — verbatim, every page
- JSON-LD `LocalBusiness` schema on homepage; `Service` schema on each service page
- `hreflang` tags for `en` and `ar` on every page (Arabic readiness)
- Geographic meta tags: `geo.region = AE-SH`

## JS Conventions (`global.js`)
- Counter animation: `<span data-target="120" data-suffix="+">0</span>`
- Stat bars: `<div class="stat-bar-fill" data-width="85"></div>`
- Scroll reveal: add `.reveal` class + optional `.delay-1` through `.delay-5`
- Form validation targets `id="contactForm"` and `id="formSuccess"`
- Year auto-fill: `<span class="js-year"></span>`

## RTL / Arabic Readiness
HTML structure uses `<html lang="en" dir="ltr">`. To activate Arabic:
- Change to `lang="ar" dir="rtl"`
- RTL overrides are pre-written at the bottom of `global.css` under `[dir="rtl"]`

## What NOT to Do
- Do not add CSS frameworks (Bootstrap, Tailwind) — the design system in `global.css` is the single source
- Do not add JS frameworks (React, Vue) — vanilla JS only
- Do not invent new brand colors outside the token list above
- Do not change NAP details (phone, email, address)
- Do not remove the WhatsApp FAB from any page
- Do not remove `<address>` NAP from the footer
