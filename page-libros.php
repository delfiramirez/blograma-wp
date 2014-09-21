<?php
/**
 * Template Name: Libros FM
 *
 * The template for displaying all book pages
 *
 * @package nowell
 */
get_header();
?>
<?php
$archive_title=$pagename;
$pagename     ='Libros FM';
?>
<?php
$paged        =(get_query_var('paged'))?get_query_var('paged'):1;
$myquery      =new WP_Query(array(
    'post_type'     =>'libros',
    'posts_per_page'=>4,
    'post_status'   =>'publish',
    'category_name' =>'libros',
    'paged'         =>$paged)
);
?>

<main id="primary" class="content-area" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
 <!---Libros -->
 <?php get_template_part('templates/parts/hero', 'page'); ?>
 <header class="page-header">
  <h1 class="page-title"><?php echo esc_html($pagename); ?></h1>
 </header>
 <?php while ($myquery->have_posts()) : $myquery->the_post(); ?>

  <?php get_template_part('archive-libros', 'archive'); ?>

  <?php
 endwhile;
 wp_reset_query();
 ?>
 <?php nowell_paging_nav(); ?>
</main>

<?php get_sidebar(); ?>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>