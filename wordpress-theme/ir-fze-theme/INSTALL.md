# IR-FZE WordPress Theme — Installation Guide

## Step 1: Upload the Theme

1. Go to your WordPress Admin → **Appearance → Themes → Add New → Upload Theme**
2. Upload the `ir-fze-theme.zip` file
3. Click **Install Now** → then **Activate**

## Step 2: Create These Pages (exact slugs required)

Go to **Pages → Add New** and create each page below. 
**The slug (URL) must match exactly** — WordPress uses it to find the right page.

| Page Title | Slug | Page Template to Assign |
|---|---|---|
| Home | `home` | Homepage |
| About Us | `about` | About Us |
| Services | `services` | Services Hub |
| Technical Feasibility Studies | `service-feasibility` | Service - Technical Feasibility |
| Design Review & Constructability | `service-design-review` | Service - Design Review |
| Project Management Systems | `service-pms` | Service - Project Management Systems |
| Document Control System | `service-document-control` | Service - Document Control |
| AI Integration & Automation | `service-ai` | Service - AI Integration |
| Contact | `contact` | Contact |

**How to assign a template:**
In the page editor → look for the **Page Attributes** panel on the right → **Template** dropdown → select the template name listed above.

## Step 3: Set Homepage

1. Go to **Settings → Reading**
2. Select **A static page**
3. Set **Homepage** to your "Home" page
4. Click **Save Changes**

## Step 4: Set Permalinks

1. Go to **Settings → Permalinks**
2. Select **Post name** (`/%postname%/`)
3. Click **Save Changes**

## Step 5: Done!

Your site is live. All navigation, mega menu, footer links, and WhatsApp FAB work automatically.

---

## Theme File Structure

```
ir-fze-theme/
├── style.css              ← Theme declaration (required by WordPress)
├── functions.php          ← Loads CSS/JS, registers menus, adds SEO meta
├── header.php             ← Navbar with mega menu (used on all pages)
├── footer.php             ← Footer with NAP + WhatsApp FAB (used on all pages)
├── index.php              ← Fallback template
├── assets/
│   ├── css/global.css     ← Full design system (colors, fonts, components)
│   └── js/global.js       ← Nav, scroll animations, counters, form validation
└── page-templates/
    ├── front-page.php     ← Homepage
    ├── page-about.php     ← About Us
    ├── page-services.php  ← Services Hub
    ├── page-contact.php   ← Contact
    ├── page-service-feasibility.php
    ├── page-service-design-review.php
    ├── page-service-pms.php
    ├── page-service-document-control.php
    └── page-service-ai.php
```

## Notes

- The theme uses no plugins — pure HTML/CSS/JS, no WooCommerce, no Elementor needed
- The contact form submits via `admin-post.php` — you can connect it to WPForms or Contact Form 7 if preferred
- To change phone/email/address: edit `header.php` and `footer.php`
- All animations (scroll reveal, counters, stat bars) activate automatically via `global.js`
