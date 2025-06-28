<?php
/**
 * The template for displaying all pages
 *
 * @package Estatain
 */
require get_template_directory() . '/templates/header.php';
?>
<main id="primary" class="site-main">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            if ( ! function_exists( 'estatain_should_hide_title' ) || ! estatain_should_hide_title() ) {
                echo '<h1 class="page-title">' . get_the_title() . '</h1>';
            }
            the_content();
        endwhile;
    endif;
    ?>
    
</main>
<?php
require get_template_directory() . '/templates/footer.php'; 