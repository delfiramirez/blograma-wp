<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * @package nowell
 */
?>

<article class="no-results not-found" role="article">
    <header class="page-header">
        <h1 class="page-title"><?php _e('No hay resultados', 'nowell'); ?></h1>
    </header>

    <?php if (is_home() && current_user_can('publish_posts')) : ?>

        <p>
            <?php printf(__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'nowell'), esc_url(admin_url('post-new.php'))); ?>
        </p>

    <?php elseif (is_search()) : ?>

        <p>
            <?php _e('No encontramos lo que buscabas. Por favor realiza la busqueda con otros terminos.', 'nowell'); ?>
        </p>

        <?php get_search_form(); ?>

    <?php elseif (is_404()) : ?>

        <p>
            <?php _e('No encontramos lo que buscabas. Por favor realiza la busqueda con otros terminos.', 'nowell'); ?>
        </p>

        <?php get_search_form(); ?>

    <?php else : ?>

        <p>
            <?php _e('No encontramos lo que buscabas. Por favor realiza la busqueda con otros terminos.', 'nowell'); ?>
        </p>

        <?php get_search_form(); ?>

    <?php endif; ?>

</article>
