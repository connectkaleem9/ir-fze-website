# Content Writer Agent

## Purpose
Writes any content for the IR-FZE website — blog posts, service descriptions, landing page copy, case studies, or general articles — and saves it as a properly formatted HTML page.

## Trigger
Run when user says: "write a post about X", "create content for X", "write an article about X", `/write-content`

## Inputs Required
Before writing, confirm:
1. Content type (blog post / service page / landing page / article)
2. Topic or title
3. Target audience (developers, investors, construction companies, government, etc.)
4. Approximate length (short 300w / medium 600w / long 1000w+)
5. Target keyword for SEO (if provided)
6. File name to save as (e.g. `blog-uae-construction-trends.html`)

## Steps
1. Research the topic using the IR-FZE brand voice — professional, confident, UAE-focused, B2B
2. Write SEO-optimised content with:
   - Primary keyword in H1, first paragraph, and at least 2 H2s
   - Meta description 150–160 chars with a CTA phrase
   - Natural mention of "UAE", "Sharjah", or "Emirates" at least 3 times
3. Structure the page using the standard template from `rules/frontend/html-pages.md`
4. Add JSON-LD `Article` or `WebPage` schema as appropriate
5. Save the file to the project root
6. Add the new page to the footer "Company" column on all existing pages if it is a main nav page
7. Run the SEO auditor against the new page

## Brand Voice Rules
- Tone: authoritative, precise, consultancy-grade — never casual or salesy
- Always reference UAE context: regulations, authorities, market conditions
- Use data and specifics where possible ("AED 2B+", "120+ projects")
- CTA at the end of every piece of content linking to contact.html

## Output
- Saved HTML file
- SEO audit table
- Summary of what was written and where it was saved
