<?php
/**
 * The default template part for displaying content.
 *
 * @package nowell
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

    <?php get_template_part('templates/parts/hero', get_post_format()); ?>

    <div class="primary-secondary-area">
        <div class="primary-area">
            <header class="entry-header">
                <?php the_title('<h1 class="entry-title" itemprop="headline">', '</h1>'); ?>

                <?php edit_post_link(__('(edit)', 'nowell'), '<span class="edit-link">', '</span>'); ?>
            </header>

            <div class="entry-content" itemprop="text">
                <?php the_content(__('Continue reading', 'nowell')); ?>

                <?php
                wp_link_pages(array(
                    'next_or_number'   => 'next',
                    'nextpagelink'     => __('Next Page', 'nowell'),
                    'previouspagelink' => __('Prev Page', 'nowell'),
                    'before'           => '<p class="page-links">',
                    'after'            => '</p>',
                ));
                ?>
            </div>
        </div>

        <div class="secondary-area">
            <h4 class="archive-link">
                <?php
                if ('page' == get_option('show_on_front')) {
                    $posts_page_id = get_option('page_for_posts');
                    $archive_link  = get_permalink($posts_page_id);
                    $archive_title = get_the_title($posts_page_id);
                }
                if (is_post_type_archive('libros')) {
                    $post_types    = get_post_types(array('public' => true, '_builtin' => false), 'object');
                    $archive_link  = get_post_type_archive_link('libros');
                    $archive_title = post_type_archive_title();
                }
                if (is_post_type_archive('noticias')) {
                    $post_types    = get_post_types(array('public' => true, '_builtin' => false), 'object');
                    $archive_link  = get_permalink($posts_page_id);
                    $archive_title = post_type_archive_title();
                }
                else {
                    $archive_link  = nowell_post_nav();
                    $archive_title = nowell_get_archive_title();
                }
                ?>

                <a href="<?php echo esc_url($archive_link); ?>">
                    <?php //nowell_icon('chevron-left');  ?>

                    <?php // echo esc_html($archive_title);  ?>
                </a>
            </h4>

            <?php get_template_part('templates/parts/sharing'); ?>

            <?php get_template_part('templates/parts/entry-meta', get_post_format()); ?>
        </div>
    </div><!-- .primary-secondary-area -->
</article>
