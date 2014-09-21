<?php
/**
 * Template Name: NoticiasFM
 *
 *
 * The template for displaying all news pages
 *
 * @package nowell
 */
get_header();

$archive_title=$pagename;
$pagename     ='Noticias FM';
?>
<?php
$paged        =(get_query_var('paged'))?get_query_var('paged'):1;
$myquery      =new WP_Query(array(
    'numberposts'   =>-1,
    'orderby'       =>'date',
    'order'         =>'ASC',
    'post_status'   =>'publish',
    'post_type'     =>'noticias',
    'posts_per_page'=>4,
    'paged'         =>$paged));
?>

<main id="primary" class="content-area" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">


 <?php if ($myquery->have_posts()) : ?>
  <header class="page-header">
   <h1 class="page-title"><?php echo esc_html($pagename); ?></h1>
  </header>
  <ul class="post-list items-list">
   <?php while ($myquery->have_posts()) : $myquery->the_post(); ?>
    <li>
     <?php get_template_part('archive-noticias', 'archive'); ?>
    </li>
    <?php
   endwhile;
   wp_reset_query();
   ?>
  </ul>
  <?php nowell_paging_nav(); ?>

 <?php else : ?>
  <?php get_template_part('no-resultado', 'archive'); ?>
 <?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>
