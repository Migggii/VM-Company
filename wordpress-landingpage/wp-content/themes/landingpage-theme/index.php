<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php get_header(); ?>

    <div class="content">
        <h1>Willkommen auf unserer Landingpage!</h1>
        <p>Hier finden Sie alle Informationen zu unseren Dienstleistungen und Angeboten.</p>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn">Kontaktieren Sie uns</a>
    </div>

    <?php get_footer(); ?>
</body>
</html>