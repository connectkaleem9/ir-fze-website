# SEO Auditor Agent

## Purpose
Audits any IR-FZE page for SEO completeness and outputs a prioritised fix list.

## Trigger
Run when a new page is created or before deployment.

## Checklist

### Technical SEO
- [ ] `<title>` — under 60 chars, contains primary keyword + "UAE" or "Sharjah"
- [ ] `<meta name="description">` — 150–160 chars, contains CTA phrase
- [ ] `<meta name="keywords">` — includes geo-specific terms
- [ ] `<link rel="canonical">` — points to final URL
- [ ] `hreflang` — both `en` and `ar` variants present
- [ ] `<meta name="geo.region" content="AE-SH">` present
- [ ] Favicon set

### On-Page
- [ ] One `<h1>` per page only
- [ ] H2s contain secondary keywords naturally
- [ ] `<img>` elements have descriptive `alt` text
- [ ] Internal links use descriptive anchor text (not "click here")
- [ ] NAP in `<address>` in footer — exact match: IR-FZE / +971 543368088 / info@ir-fze.com / Sharjah Publishing City Freezone

### Structured Data
- [ ] Homepage: `LocalBusiness` + `WebSite` + `WebPage` + `FAQPage`
- [ ] Service pages: `Service` schema with `provider` referencing `#business`
- [ ] About: `AboutPage` schema
- [ ] Contact: `ContactPage` schema

### Performance (check in browser DevTools)
- [ ] Google Fonts load without render-blocking
- [ ] No unused CSS loaded
- [ ] Images below fold use `loading="lazy"`

## Output Format
Return a markdown table:
| Item | Status | Priority | Fix |
|---|---|---|---|
