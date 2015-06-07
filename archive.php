<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package nowell
 */
get_header();
?>

<main id="primary" class="content-area" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
    <?php if (have_posts()) : ?>
        <header class="page-header">
            <h1 class="page-title">
                <?php
                if (is_category()) :
                    single_cat_title();

                elseif (in_category('aun-de-repuesto')):
                    $archive_title = $pagename;
                    $pagename = 'Aún De Repuesto';
                    echo $pagename;

                elseif (is_tag()) :
                    single_tag_title();

                elseif (is_author()) :
                    /* Queue the first post, that way we know
                     * what author we're dealing with (if that is the case).
                     */
                    the_post();
                    printf(__('Author: %s', 'nowell'), '<span class="vcard">' . get_the_author() . '</span>');
                    /* Since we called the_post() above, we need to
                     * rewind the loop back to the beginning that way
                     * we can run the loop properly, in full.
                     */
                    rewind_posts();

                elseif (is_day()) :
                    printf(__('Day: %s', 'nowell'), '<span>' . get_the_date() . '</span>');

                elseif (is_month()) :
                    printf(__('Month: %s', 'nowell'), '<span>' . get_the_date('F Y') . '</span>');

                elseif (is_year()) :
                    printf(__('Year: %s', 'nowell'), '<span>' . get_the_date('Y') . '</span>');

                else :
                    _e('Archivos', 'nowell');

                endif;
                ?>
            </h1>

            <?php
            if (!is_paged() && ( $term_description = term_description() )) :
                printf('<div class="lead taxonomy-description">%s</div>', $term_description);
            endif;
            ?>
        </header>

        <ul class="post-list items-list">

            <?php while (have_posts()) : the_post(); ?>

                <li class="noticiasfm">

                    <?php //get_template_part( 'templates/parts/content', 'archive' );  ?>
                    <div class="details">
                        <h1 class="article-title"><a  href="<?php echo get_permalink($post->ID); ?>"  title="<?php the_title(); ?>"> <?php the_title(); ?></a></h1>
                        <p><?php
                            $excerpt = get_the_excerpt();
                            echo string_limit_words($excerpt, 40);
                            ?></p>
                    </div>
                    <?php if (has_post_thumbnail()) : ?>
                        <figure>
                            <a class="link-article" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <?php echo get_the_post_thumbnail(); ?>
                            </a>
                        </figure>
                    <?php endif; ?>
                </li>

            <?php endwhile; ?>

        </ul>

        <?php nowell_paging_nav(); ?>

    <?php else : ?>

        <?php get_template_part('no-results', 'archive'); ?>

    <?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>