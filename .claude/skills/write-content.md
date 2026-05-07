# Skill: /write-content

## Description
Writes any content for the IR-FZE website and saves it as a complete HTML page.

## Usage
```
/write-content <type> <topic> [filename]
```

## Examples
```
/write-content blog "UAE Construction Trends 2025"
/write-content article "Why Document Control Matters in UAE Projects" blog-document-control.html
/write-content landing "Free AI Automation Audit for UAE Businesses" ai-audit.html
```

## What This Skill Does
1. Asks for any missing details (audience, length, keyword, filename)
2. Writes SEO-optimised content in IR-FZE brand voice
3. Wraps it in the full standard HTML page template
4. Adds correct JSON-LD schema (Article or WebPage)
5. Saves the file and updates footer links if needed
6. Runs SEO audit on the new page
7. Returns a summary with the file path and audit results
