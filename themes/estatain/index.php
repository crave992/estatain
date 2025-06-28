<?php
/**
 * The main template file
 *
 * @package Estatain
 */
// Silence is golden.

require get_template_directory() . '/templates/header.php';
?>

<main id="primary" class="site-main">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
    else :
        echo '<p>' . esc_html__( 'Sorry, no posts matched your criteria.', 'estatain' ) . '</p>';
    endif;
    ?>
</main>
<?php
require get_template_directory() . '/templates/footer.php'; 