<?php
/**
 * The footer for our theme
 *
 * @package Estatain
 */
?>
<footer id="colophon" class="site-footer">
    <div class="site-info">
        <?php if ( get_theme_mod('estatain_footer_text') ) : ?>
            <div class="custom-footer-text">
                &copy; <?php echo esc_html( get_theme_mod('estatain_footer_year', date('Y')) ); ?> <?php echo wp_kses_post( get_theme_mod('estatain_footer_text') ); ?>
            </div>
        <?php endif; ?>
        <div class="footer-socials">
            <?php
            $svg_dir = get_template_directory() . '/assets/images/';
            $fb_svg = file_exists($svg_dir . 'fb.svg') ? file_get_contents($svg_dir . 'fb.svg') : '';
            $linkedin_svg = file_exists($svg_dir . 'linkedIn.svg') ? file_get_contents($svg_dir . 'linkedIn.svg') : '';
            $twitter_svg = file_exists($svg_dir . 'twitter.svg') ? file_get_contents($svg_dir . 'twitter.svg') : '';
            $youtube_svg = file_exists($svg_dir . 'youtube.svg') ? file_get_contents($svg_dir . 'youtube.svg') : '';
            ?>
            <?php if ( get_theme_mod('estatain_footer_facebook') ) : ?>
                <a href="<?php echo esc_url( get_theme_mod('estatain_footer_facebook') ); ?>" target="_blank" rel="noopener" aria-label="Facebook">
                    <?php echo $fb_svg; ?>
                </a>
            <?php endif; ?>
            <?php if ( get_theme_mod('estatain_footer_linkedin') ) : ?>
                <a href="<?php echo esc_url( get_theme_mod('estatain_footer_linkedin') ); ?>" target="_blank" rel="noopener" aria-label="LinkedIn">
                    <?php echo $linkedin_svg; ?>
                </a>
            <?php endif; ?>
            <?php if ( get_theme_mod('estatain_footer_twitter') ) : ?>
                <a href="<?php echo esc_url( get_theme_mod('estatain_footer_twitter') ); ?>" target="_blank" rel="noopener" aria-label="Twitter">
                    <?php echo $twitter_svg; ?>
                </a>
            <?php endif; ?>
            <?php if ( get_theme_mod('estatain_footer_youtube') ) : ?>
                <a href="<?php echo esc_url( get_theme_mod('estatain_footer_youtube') ); ?>" target="_blank" rel="noopener" aria-label="YouTube">
                    <?php echo $youtube_svg; ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html> 