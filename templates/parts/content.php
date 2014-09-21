<?php
/**
 * The default template part for displaying content.
 *
 * @package nowell
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
    <?php //nowell_entry_date(); ?>

    <?php the_title('<h1 class="entry-title" itemprop="headline"><a href="' . esc_url(get_permalink()) . '" rel="bookmark" itemprop="url">', '</a></h1>'); ?>

    <?php // nowell_posted_by(); ?>

    <?php if (!post_password_required() && comments_open() && '0' != get_comments_number()) : ?>

        <span class="comments-link">
            <?php nowell_icon('bubble'); ?>
            <?php number_format_i18n(comments_popup_link('', 1, '%')); ?>
        </span>

    <?php endif; ?>
</article>
