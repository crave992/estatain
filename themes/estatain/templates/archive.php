<?php
/**
 * The template for displaying archive pages
 *
 * @package Estatain
 */
require get_template_directory() . '/templates/header.php';
?>
<main id="primary" class="site-main">
    <header class="page-header">
        <h1 class="page-title"><?php the_archive_title(); ?></h1>
        <?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
    </header>
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            echo '<article id="post-' . get_the_ID() . '" '; post_class(); echo '>';
            the_title( '<h2>', '</h2>' );
            the_excerpt();
            echo '</article>';
        endwhile;
    else :
        echo '<p>' . esc_html__( 'No posts found.', 'estatain' ) . '</p>';
    endif;
    ?>
</main>
<?php
require get_template_directory() . '/templates/footer.php'; 