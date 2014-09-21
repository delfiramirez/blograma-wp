<?php
/**
 * The template for displaying all pages.
 *
 * @package nowell
 */
get_header();
?>

<?php get_template_part('templates/parts/hero', 'page'); ?>

<main id="primary" class="content-area" role="main" itemprop="mainContentOfPage">

    <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('templates/parts/content', 'page'); ?>

        <?php //comments_template( '', true );  ?>

    <?php endwhile; ?>
</main>

<?php get_sidebar('page'); ?>

<?php get_footer(); ?>
