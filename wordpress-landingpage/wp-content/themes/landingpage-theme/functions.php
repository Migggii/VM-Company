<?php
// Funktionen für das Landingpage-Theme

// Theme-Support aktivieren
function landingpage_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Hauptnavigation', 'landingpage-theme'),
    ));
}
add_action('after_setup_theme', 'landingpage_theme_setup');

// Enqueue Styles und Scripts
function landingpage_enqueue_scripts() {
    wp_enqueue_style('landingpage-style', get_stylesheet_uri());
    // Hier können weitere Styles und Scripts hinzugefügt werden
}
add_action('wp_enqueue_scripts', 'landingpage_enqueue_scripts');

// Beispiel für eine benutzerdefinierte Funktion
function landingpage_custom_function() {
    // Funktionalität hier hinzufügen
}
?>