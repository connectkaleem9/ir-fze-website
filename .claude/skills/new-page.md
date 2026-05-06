# Skill: /new-page

## Description
Scaffolds a new IR-FZE website page using the standard template.

## Usage
```
/new-page <filename> <page-title> <hero-subtitle>
```

## Example
```
/new-page case-studies.html "Case Studies" "Real projects, real results across the UAE."
```

## What This Skill Does
1. Creates `<filename>.html` using the standard page template from `rules/frontend/html-pages.md`
2. Sets correct `<title>`, `<meta description>`, `<canonical>`, JSON-LD schema
3. Adds standard nav, page-hero, CTA band, footer, and WhatsApp FAB
4. Adds the new page to the footer "Company" column on all existing pages
5. Reminds you to add nav link if needed
