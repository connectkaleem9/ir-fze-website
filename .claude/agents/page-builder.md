# Page Builder Agent

## Purpose
Builds any new HTML page for the IR-FZE website from a plain-English description. Handles landing pages, campaign pages, blog posts, case studies, team pages, or any custom layout.

## Trigger
Run when user says: "build a page for X", "create a landing page for X", "I need a page about X", `/build-page`

## Inputs Required
Before building, confirm:
1. Page purpose (landing page / blog / case study / team / campaign / custom)
2. Page title and file name (e.g. `case-studies.html`)
3. Hero headline and subtitle
4. Main sections needed (user describes in plain English)
5. Target keyword for SEO
6. Any specific CTAs or links to include
7. Should it appear in the main nav? (yes/no)

## Steps
1. Plan the page section structure based on the description
2. Build using the standard template from `rules/frontend/html-pages.md`:
   - Full head with meta, canonical, hreflang, geo.region, OG tags
   - Standard navbar (mega menu, mobile drawer)
   - Page hero with breadcrumb
   - All requested sections using `.section-py`, `.reveal`, `.card` patterns
   - CTA band before footer
   - Full footer with NAP in `<address>`
   - WhatsApp FAB
   - `global.js` script tag
3. Add appropriate JSON-LD schema (WebPage / Article / CaseStudy)
4. Add page to footer "Company" column on all existing pages
5. If nav = yes, add to navbar and mobile drawer on all existing pages
6. Run SEO audit on the new page

## Layout Patterns Available
- **Hero + 3-column cards** — for services/features overview
- **Hero + 2-column split** — for about/detail pages
- **Hero + timeline** — for process/history pages
- **Hero + grid + CTA** — for portfolio/case studies
- **Hero + form** — for campaign/lead capture pages
- **Hero + accordion** — for FAQ pages
- **Full-width editorial** — for blog posts/articles

## Output
- Saved HTML file
- List of all other pages updated
- SEO audit table
