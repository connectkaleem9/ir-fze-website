# Skill: /site-audit

## Description
Runs a full technical health check across all IR-FZE website pages — broken links, navigation sync, NAP accuracy, SEO basics, and code quality — then delivers a scored report with a fix list.

## Usage
```
/site-audit          # full audit, report only
/site-audit fix      # full audit then auto-fix all Critical issues
```

## Examples
```
/site-audit
/site-audit fix
```

## What This Skill Does
1. Reads all 9 HTML pages
2. Checks navigation consistency across all pages (mega menu, mobile drawer, footer)
3. Verifies all internal links point to files that actually exist
4. Confirms NAP is verbatim and consistent in every footer
5. Checks SEO basics on every page (title, meta, canonical, hreflang, geo.region, schema, H1)
6. Checks code quality (global.js, global.css, alt tags, js-year)
7. Checks content consistency (service badge numbers, next-service links, copyright year)
8. Returns a health score per page and a full issues table
9. If "fix" argument given: applies all Critical fixes automatically
