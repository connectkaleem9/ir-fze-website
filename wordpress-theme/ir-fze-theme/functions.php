<?php
/**
 * IR-FZE Theme Functions
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/* ------------------------------------------------------------------
   1. Theme Setup
------------------------------------------------------------------ */
function irfze_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );
    add_theme_support( 'custom-logo' );

    register_nav_menus( [
        'primary' => __( 'Primary Menu', 'ir-fze' ),
        'footer'  => __( 'Footer Menu', 'ir-fze' ),
    ] );
}
add_action( 'after_setup_theme', 'irfze_setup' );

/* ------------------------------------------------------------------
   2. Enqueue Styles & Scripts
------------------------------------------------------------------ */
function irfze_assets() {
    // Google Fonts
    wp_enqueue_style(
        'ir-fze-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap',
        [],
        null
    );

    // Main design system
    wp_enqueue_style(
        'ir-fze-global',
        get_template_directory_uri() . '/assets/css/global.css',
        [ 'ir-fze-fonts' ],
        '1.0.0'
    );

    // Global JS (nav, scroll reveal, counters, form validation)
    wp_enqueue_script(
        'ir-fze-global',
        get_template_directory_uri() . '/assets/js/global.js',
        [],
        '1.0.0',
        true // load in footer
    );
}
add_action( 'wp_enqueue_scripts', 'irfze_assets' );

/* ------------------------------------------------------------------
   3. Remove WordPress default emoji scripts (performance)
------------------------------------------------------------------ */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/* ------------------------------------------------------------------
   4. Helper: IR-FZE Page URL
   Returns the permalink for a page by its slug.
------------------------------------------------------------------ */
function irfze_page_url( $slug ) {
    $page = get_page_by_path( $slug );
    return $page ? get_permalink( $page->ID ) : home_url( '/' . $slug );
}

/* ------------------------------------------------------------------
   5. SEO: Add geo.region and theme-color meta tags
------------------------------------------------------------------ */
function irfze_head_meta() {
    echo '<meta name="geo.region" content="AE-SH" />' . "\n";
    echo '<meta name="theme-color" content="#114691" />' . "\n";
    echo '<link rel="alternate" hreflang="en" href="' . esc_url( get_permalink() ) . '" />' . "\n";
    echo '<link rel="alternate" hreflang="ar" href="' . esc_url( home_url( '/ar/' ) ) . '" />' . "\n";
}
add_action( 'wp_head', 'irfze_head_meta' );

/* ------------------------------------------------------------------
   6. Favicon (inline SVG — no file needed)
------------------------------------------------------------------ */
function irfze_favicon() {
    echo '<link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 32 32\'%3E%3Crect width=\'32\' height=\'32\' rx=\'8\' fill=\'%23114691\'/%3E%3Ctext x=\'50%25\' y=\'54%25\' dominant-baseline=\'middle\' text-anchor=\'middle\' font-family=\'Montserrat,sans-serif\' font-weight=\'800\' font-size=\'13\' fill=\'white\'%3EIR%3C/text%3E%3C/svg%3E" />' . "\n";
}
add_action( 'wp_head', 'irfze_favicon' );

/* ------------------------------------------------------------------
   7. JSON-LD LocalBusiness Schema (output on all pages)
------------------------------------------------------------------ */
function irfze_local_business_schema() {
    $schema = [
        '@context'        => 'https://schema.org',
        '@type'           => 'ProfessionalService',
        '@id'             => home_url( '/#business' ),
        'name'            => 'IR-FZE',
        'legalName'       => 'IR-FZE Technical Consultancy',
        'url'             => home_url( '/' ),
        'telephone'       => '+971543368088',
        'email'           => 'info@ir-fze.com',
        'address'         => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => 'Sharjah Publishing City Freezone',
            'addressLocality' => 'Sharjah',
            'addressCountry'  => 'AE',
        ],
        'areaServed'      => [ 'AE', 'SA', 'KW', 'QA', 'BH', 'OM' ],
        'sameAs'          => [],
    ];
    echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
}
add_action( 'wp_head', 'irfze_local_business_schema' );

/* ------------------------------------------------------------------
   8. Custom Page Templates registration
------------------------------------------------------------------ */
// WordPress auto-discovers page-templates/ subfolder templates via the
// "Template Name:" comment in each file — no extra registration needed.
