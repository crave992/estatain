<?php
/**
 * The template for displaying all single posts
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
            the_content();
        endwhile;
    endif;
    ?>
</main>
<?php
require get_template_directory() . '/templates/footer.php'; 