<?php
/**
 * The header part for our theme
 *
 * @package Estatain
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="masthead" class="site-header">
    <div class="site-branding">
        <?php if ( has_custom_logo() ) {
            the_custom_logo();
        } else { ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        <?php } ?>
    </div>
    <nav id="site-navigation" class="main-navigation" aria-label="Primary Menu">
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'menu_class'     => 'primary-menu',
            'container'      => false,
            'fallback_cb'    => false,
        ]);
        ?>
    </nav>
</header> 