# Skill: /build-page

## Description
Builds any new HTML page for the IR-FZE website from a plain-English description — landing pages, case studies, blog posts, campaign pages, team pages, or custom layouts.

## Usage
```
/build-page <filename> <title> <description>
```

## Examples
```
/build-page case-studies.html "Case Studies" "Showcase of completed UAE projects"
/build-page team.html "Our Team" "Meet the IR-FZE engineering team"
/build-page ai-audit.html "Free AI Audit" "Landing page for free AI automation audit offer"
/build-page faq.html "FAQ" "Frequently asked questions about IR-FZE services"
/build-page blog-construction.html "UAE Construction Trends" "Blog post on 2025 construction market"
```

## What This Skill Does
1. Takes filename, title, and description
2. Asks any clarifying questions needed (sections, CTAs, nav inclusion)
3. Selects the best layout pattern for the page type
4. Builds the full HTML page with standard nav, hero, sections, CTA band, footer, WhatsApp FAB
5. Adds SEO meta, canonical, hreflang, geo.region, and JSON-LD schema
6. Updates footer on all existing pages
7. Updates navbar/mobile drawer if nav inclusion is requested
8. Runs SEO audit and returns results
