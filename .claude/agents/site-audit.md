# Site Audit Agent

## Purpose
Performs a full technical health check of the entire IR-FZE website — covering broken links, missing files, content consistency, NAP accuracy, navigation sync, and code quality — then delivers a prioritised fix report.

## Trigger
Run when user says: "audit my site", "check the whole site", "health check", `/site-audit`

## Pages to Audit
- index.html
- about.html
- services.html
- service-feasibility.html
- service-design-review.html
- service-pms.html
- service-document-control.html
- service-ai.html
- contact.html

## Audit Checklist

### 1. Navigation Consistency
- [ ] All 9 pages have identical mega menu with all 5 service links
- [ ] All 9 pages have identical mobile drawer with all links
- [ ] Active nav link is correct for each page
- [ ] Footer services column lists all 5 services on every page
- [ ] Footer company column is consistent across all pages

### 2. Internal Links
- [ ] Every `href` pointing to a local `.html` file — file actually exists
- [ ] No `href="#"` placeholders left on live content (only Privacy/Terms acceptable)
- [ ] WhatsApp FAB present on every page with correct URL
- [ ] CTA band "Get a Consultation" links to `contact.html` on every page

### 3. NAP Consistency
- [ ] Phone: `+971 543368088` — exact match in footer `<address>` on every page
- [ ] Email: `info@ir-fze.com` — exact match
- [ ] Address: `Sharjah Publishing City Freezone, Sharjah, UAE` — exact match
- [ ] WhatsApp URL: `https://wa.me/971543368088?text=Hello%20IR-FZE...` — exact match

### 4. SEO Basics
- [ ] Every page has `<title>`, `<meta description>`, `<meta keywords>`, `<canonical>`
- [ ] Every page has `hreflang` en + ar
- [ ] Every page has `geo.region` AE-SH
- [ ] Every page has JSON-LD schema
- [ ] One H1 per page

### 5. Code Quality
- [ ] `<script src="js/global.js"></script>` is last element before `</body>` on every page
- [ ] `<link rel="stylesheet" href="css/global.css">` present in every `<head>`
- [ ] No inline `style` blocks redefining CSS tokens (should use variables)
- [ ] All `<img>` tags have `alt` attributes

### 6. Content
- [ ] Service badge numbers correct (01–05) on each service page
- [ ] "Next Service" card at bottom of each service page links to correct next service
- [ ] Copyright year uses `<span class="js-year"></span>` (not hardcoded)

## Output Format

### Health Score per Page
| Page | Nav | Links | NAP | SEO | Code | Score |
|---|---|---|---|---|---|---|

### Issues Found
| Page | Category | Issue | Priority | Fix |
|---|---|---|---|---|

### Fix List (by priority)
**Critical** | **High** | **Low**

After reporting, ask user: "Shall I fix all Critical issues now?"
