<?php
/**
 * The header for our theme
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
    <?php
    $headline_icon = get_theme_mod('estatain_headline_icon');
    $headline_text = get_theme_mod('estatain_headline');
    $headline_link = get_theme_mod('estatain_headline_link');
    $headline_link_label = get_theme_mod('estatain_headline_link_label');
    ?>
    <?php if ($headline_text || $headline_icon || ($headline_link && $headline_link_label)) : ?>
    <div class="site-headline-bar" id="site-headline-bar">
        <div class="site-headline-inner">
            <?php if ($headline_icon) : ?>
                <span class="headline-icon"><?php echo esc_html($headline_icon); ?></span>
            <?php endif; ?>
            <?php if ($headline_text) : ?>
                <span class="headline-text"><?php echo esc_html($headline_text); ?></span>
            <?php endif; ?>
            <?php if ($headline_link && $headline_link_label) : ?>
                <a class="headline-link" href="<?php echo esc_url($headline_link); ?>"><?php echo esc_html($headline_link_label); ?></a>
            <?php endif; ?>
        </div>
        <button class="headline-close" id="headline-close" aria-label="Close headline">&times;</button>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var closeBtn = document.getElementById('headline-close');
        var bar = document.getElementById('site-headline-bar');
        if (closeBtn && bar) {
            closeBtn.addEventListener('click', function() {
                bar.style.display = 'none';
            });
        }
    });
    </script>
    <?php endif; ?>
    <div class="header-columns">

        <!-- Mobile Menu Button -->
        <div class="mobile-menu">
            <?php if ( has_custom_logo() || get_bloginfo( 'name' ) ) : ?>
                <div class="site-branding">
                    <?php if ( has_custom_logo() ) {
                        the_custom_logo();
                    } else { ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                    <?php } ?>
                </div>
            <?php endif; ?>
            <button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="Open menu">
                <span></span><span></span><span></span>
            </button>
        </div>
       

        <!-- Desktop Menus -->
        <div class="desktop-menus">
            <?php if ( has_custom_logo() || get_bloginfo( 'name' ) ) : ?>
                <div class="site-branding">
                    <?php if ( has_custom_logo() ) {
                        the_custom_logo();
                    } else { ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                    <?php } ?>
                </div>
            <?php endif; ?>
            <?php if ( has_nav_menu( 'primary' ) ) : ?>
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
            <?php endif; ?>

            <?php if ( has_nav_menu( 'secondary' ) ) : ?>
                <nav id="site-contact" class="contact-navigation" aria-label="Contact Menu">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'secondary',
                        'menu_class'     => 'secondary-menu',
                        'container'      => false,
                        'fallback_cb'    => false,
                    ]);
                    ?>
                </nav>
            <?php endif; ?>
        </div>

        <!-- Mobile Dropdown Menu -->
        <div class="mobile-menu-dropdown" id="mobile-menu-dropdown">
            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                <nav class="mobile-primary-menu" aria-label="Mobile Primary Menu">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'menu_class'     => 'primary-menu',
                        'container'      => false,
                        'fallback_cb'    => false,
                    ]);
                    ?>
                </nav>
            <?php endif; ?>
            <?php if ( has_nav_menu( 'secondary' ) ) : ?>
                <nav class="mobile-secondary-menu" aria-label="Mobile Contact Menu">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'secondary',
                        'menu_class'     => 'secondary-menu',
                        'container'      => false,
                        'fallback_cb'    => false,
                    ]);
                    ?>
                </nav>
            <?php endif; ?>
        </div>
    </div>
</header>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var toggle = document.getElementById('mobile-menu-toggle');
    var dropdown = document.getElementById('mobile-menu-dropdown');
    if (toggle && dropdown) {
        toggle.addEventListener('click', function() {
            dropdown.classList.toggle('open');
            toggle.classList.toggle('open');
        });
    }
});
</script> 