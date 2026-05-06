# New Service Page Agent

## Purpose
Creates a new individual service page following the IR-FZE template exactly.

## Inputs Required
Before running, confirm:
1. Service number (01–05 or new)
2. Service name (exact)
3. File name (kebab-case, e.g. `service-xyz.html`)
4. Hero headline and subtitle
5. 4-step process steps (title + description each)
6. 6 deliverables (bullet points)
7. 4 KPI stats (number + label)
8. Next service page link

## Steps
1. Copy the structure from `service-feasibility.html`
2. Update all content: title, meta, hero, KPIs, process, deliverables
3. Update JSON-LD `Service` schema with new service name
4. Update breadcrumb to correct page name
5. Add the new page to the mega menu in **all existing pages** (`service-feasibility.html`, `service-ai.html`, `services.html`, `index.html`, `about.html`, `contact.html`)
6. Add the new page to the mobile drawer in all pages
7. Add the new page to the footer Services column in all pages
8. Run SEO audit against the new page

## Mega Menu Entry Template
```html
<a href="service-NEW.html" class="mega-service-link">
  <div class="mega-service-icon">
    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
      <!-- icon path -->
    </svg>
  </div>
  <div>
    <div class="mega-service-title">Service Name</div>
    <div class="mega-service-desc">Short description</div>
  </div>
</a>
```
