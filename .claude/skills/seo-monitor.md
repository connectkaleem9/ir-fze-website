# Skill: /seo-monitor

## Description
Runs a full SEO audit across all 9 IR-FZE website pages and returns a site-wide health report with a prioritised fix list.

## Usage
```
/seo-monitor          # audit all pages
/seo-monitor fix      # audit all pages then auto-fix all Critical issues
```

## Examples
```
/seo-monitor
/seo-monitor fix
```

## What This Skill Does
1. Reads all 9 HTML pages (index, about, services, 5 service pages, contact)
2. Checks every page against the full SEO checklist (technical, on-page, structured data, NAP)
3. Returns a site-wide summary table with a score per page
4. Returns per-page detail for any page with issues
5. Returns a master fix list sorted: Critical → High → Low
6. If "fix" argument given: automatically applies all Critical fixes and reports what changed
