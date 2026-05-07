# Skill: /competitor-research

## Description
Researches UAE technical consultancy competitors and produces keyword gaps, content gaps, and actionable recommendations to improve IR-FZE's market position.

## Usage
```
/competitor-research [service] [focus]
```

## Examples
```
/competitor-research
/competitor-research feasibility
/competitor-research "ai automation" keywords
/competitor-research pms "dubai"
/competitor-research all content
```

## Arguments
- `[service]` — specific service to research, or omit for all services
- `[focus]` — `keywords` / `content` / `positioning` / `features` (default: all)
- Optional location: `dubai` / `sharjah` / `abu dhabi` / `uae` (default: uae)

## What This Skill Does
1. Researches the UAE technical consultancy market for the specified service
2. Identifies keyword opportunities IR-FZE pages are missing
3. Identifies content gaps (case studies, blogs, FAQs, sector pages competitors have)
4. Identifies positioning opportunities where IR-FZE can differentiate
5. Returns a keyword opportunity table with recommended pages
6. Returns a content gap table with recommendations
7. Returns top 5 actionable recommendations, highest impact first
8. Asks: "Shall I implement any of these now?"
