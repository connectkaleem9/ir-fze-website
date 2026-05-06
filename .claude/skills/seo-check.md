# Skill: /seo-check

## Description
Runs the SEO Auditor against a specific page or all pages.

## Usage
```
/seo-check [filename]       # audit one page
/seo-check all              # audit all pages
```

## Example
```
/seo-check contact.html
/seo-check all
```

## What This Skill Does
1. Reads the target HTML file(s)
2. Checks all items in `.claude/agents/seo-auditor.md`
3. Returns a markdown table of Pass / Fail / Warning per item
4. Provides a prioritised fix list (Critical → High → Low)
