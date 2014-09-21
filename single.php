<?php
/**
 * The Template for displaying all single posts.
 *
 * @package nowell
 */
get_header();
?>

<main id="primary" class="content-area" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">

    <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('templates/parts/format', get_post_format()); ?>

        <?php //comments_template( '', true );  ?>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>
