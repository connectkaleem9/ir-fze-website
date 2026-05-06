# Code Style Rules — IR-FZE Project

## HTML
- Use semantic HTML5 elements (`<section>`, `<article>`, `<nav>`, `<footer>`, `<address>`)
- Every `<section>` must have an `aria-label` or `aria-labelledby`
- Every image needs `alt` text; decorative elements get `aria-hidden="true"`
- SVG icons inline (no icon fonts, no external SVG files)
- Use `<address>` for NAP (Name, Address, Phone) blocks in footer — required for SEO
- Self-closing tags: use ` />` style (`<meta />`, `<link />`, `<input />`)

## CSS (global.css)
- All new values go through CSS custom properties (`:root` tokens) — never hardcode hex colors
- Use `clamp()` for fluid typography and spacing instead of breakpoint-heavy overrides
- Mobile-first: base styles are mobile, `@media (min-width)` for larger screens
- New components go at the bottom of `global.css` before the `@media` blocks
- Page-specific styles go in a `<style>` block inside the page's `<head>` — not in `global.css`
- Never use `!important` except inside `.delay-N` utility classes

## JavaScript (global.js)
- Vanilla JS only — no libraries, no CDN imports
- All code wrapped in an IIFE: `(function() { 'use strict'; ... })()`
- Use `IntersectionObserver` for all scroll-triggered effects — never `scroll` event polling
- Feature detection before use: check `if ('IntersectionObserver' in window)`
- Event listeners on dynamic content use event delegation from a stable parent

## Naming Conventions
- CSS classes: kebab-case (`.section-header`, `.hero-badge`)
- JS variables: camelCase (`const navBar`, `let isOpen`)
- HTML IDs: kebab-case, unique per page (`id="contactForm"`, `id="navbar"`)
- Files: kebab-case (`service-ai.html`, `global.css`)

## Performance Rules
- No external CSS or JS libraries
- Google Fonts loaded with `preconnect` + `display=swap`
- All SVG icons inline (zero HTTP requests for icons)
- `passive: true` on all scroll/touch event listeners
- Images (when added): WebP format, `loading="lazy"` on below-fold images
- Target: Lighthouse Performance score ≥ 90

## Accessibility
- Minimum contrast ratio: 4.5:1 for body text, 3:1 for large text
- All interactive elements keyboard-accessible with visible focus ring
- Forms: every input has a `<label>` with matching `for`/`id`
- Error messages use `role="alert"` and `aria-live="polite"`
- Navigation: `role="menubar"` on `<ul>`, `role="menuitem"` on links
