# SEO Monitor Agent

## Purpose
Audits every page on the IR-FZE website for SEO health, produces a full site-wide report, and outputs a prioritised fix list ordered by impact.

## Trigger
Run when user says: "check my SEO", "run SEO report", "audit all pages", `/seo-monitor`

## Pages to Audit (always all of these)
- index.html
- about.html
- services.html
- service-feasibility.html
- service-design-review.html
- service-pms.html
- service-document-control.html
- service-ai.html
- contact.html

## Checklist Per Page (from seo-auditor.md)

### Technical SEO
- `<title>` — under 60 chars, contains primary keyword + "UAE" or "Sharjah"
- `<meta name="description">` — 150–160 chars, contains CTA phrase
- `<meta name="keywords">` — includes geo-specific terms
- `<link rel="canonical">` — points to correct final URL
- `hreflang` — both `en` and `ar` variants present
- `<meta name="geo.region" content="AE-SH">` present
- Favicon set

### On-Page
- One `<h1>` per page only
- H2s contain secondary keywords naturally
- `<img>` elements have descriptive `alt` text
- Internal links use descriptive anchor text
- NAP in `<address>` in footer — exact: IR-FZE / +971 543368088 / info@ir-fze.com / Sharjah Publishing City Freezone

### Structured Data
- Homepage: `LocalBusiness` + `WebSite` + `WebPage` + `FAQPage`
- Service pages: `Service` schema with `provider` referencing `#business`
- About: `AboutPage` schema
- Contact: `ContactPage` schema

## Output Format

### Site-Wide Summary Table
| Page | Title OK | Description OK | Canonical | hreflang | geo.region | H1 | Schema | NAP | Score |
|---|---|---|---|---|---|---|---|---|---|

### Per-Page Detail
For any page scoring below 100%:
| Item | Status | Priority | Fix |
|---|---|---|---|

### Master Fix List (prioritised)
**Critical** — must fix before launch
**High** — fix within 1 week
**Low** — fix when time allows

Output the fix list as actionable instructions, not just observations.
