<?php
/**
 * Function File Name: Enqueue Styles and Scripts
 * 
 * The file for enqueue styles and scripts files.
 */

// Register and enqueue styles
function customtheme_register_styles() {
    $version = wp_get_theme()->get('Version');

    // Enqueue Ionicons CSS
    wp_enqueue_style('ionicons', 'https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.5.2/ionicons.min.css', [], null);

    // Enqueue Font Awesome CSS
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', [], null);

    // Main theme stylesheet
    wp_enqueue_style('customtheme-style', get_stylesheet_uri(), [], $version);

    // Enqueue custom CSS files
    $styles = [
        'customtheme-root-style'                    => 'assets/css/root.css',
        'customtheme-job-listings-style'            => 'assets/css/job-listings.css',
        'customtheme-find-match-style'              => 'assets/css/find-match.css',
        'customtheme-featured-candidates-style'     => 'assets/css/featured-candidates.css',
        'customtheme-job-request-style'             => 'assets/css/job-request.css',
        'customtheme-auth-style'                    => 'assets/css/auth.css',
        'customtheme-candidate-portal-style'        => 'assets/css/candidate-portal.css',
    ];

    foreach ($styles as $handle => $path) {
        wp_enqueue_style($handle, get_template_directory_uri() . '/' . $path, [], $version);
    }

    // Enqueue Elementor styles if Elementor is active
    if (did_action('elementor/loaded')) {
        wp_enqueue_style('elementor-frontend');
        if (class_exists('ElementorPro\Plugin')) {
            wp_enqueue_style('elementor-pro-frontend');
        }
    }
}
add_action('wp_enqueue_scripts', 'customtheme_register_styles');

// Register and enqueue scripts
function customtheme_register_scripts() {
    $version = wp_get_theme()->get('Version');

    // Enqueue jQuery (included with WordPress core)
    wp_enqueue_script('jquery');

    // Enqueue Ionicons JS (ES module for modern browsers)
    wp_enqueue_script('ionicons-esm', 'https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js', [], null, true);

    // Enqueue Ionicons JS (nomodule for older browsers)
    wp_enqueue_script('ionicons-nomodule', 'https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js', [], null, true);

    // Enqueue custom JavaScript files
    $scripts = [
        'customtheme-job-listing' => 'assets/js/job-listing.js',
        'customtheme-auth' => 'assets/js/auth.js',
        'customtheme-single-job' => 'assets/js/single-job.js',
    ];

    foreach ($scripts as $handle => $path) {
        wp_enqueue_script($handle, get_template_directory_uri() . '/' . $path, [], $version, true);
    }
}
add_action('wp_enqueue_scripts', 'customtheme_register_scripts');

// Register and enqueue wp admin styles
function customtheme_admin_styles($hook) {
    // Only load on specific admin pages if needed, or load globally
    wp_enqueue_style(
        'customtheme-wp-dashboard-style',
        get_template_directory_uri() . '/assets/css/wp-dashboard.css',
        [],
        wp_get_theme()->get('Version')
    );
}
add_action('admin_enqueue_scripts', 'customtheme_admin_styles');