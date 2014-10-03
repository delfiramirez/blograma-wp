<?php
get_header();
$archive_title=$pagename;
$pagename     ='Noticias FM';
$paged        =(get_query_var('paged'))?get_query_var('paged'):1;
$myquery      =new WP_Query(array(
    'numberposts'   =>-1,
    'post_status'   =>'publish',
    'post_type'     =>'noticias',
    'posts_per_page'=>4,
    'paged'         =>$paged)
);
?>

<main id="primary" class="content-area" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
 <header class="page-header">
  <h1 class="page-title"><?php echo esc_html($pagename); ?></h1>
 </header>
 <?php if ($myquery->have_posts()) : ?>
  <ul class="post-list items-list">
   <?php while ($myquery->have_posts()) : $myquery->the_post(); ?>
    <li class="noticiasfm">
     <div class="details">
      <h1 class="article-title"><a  href="<?php echo get_permalink($post->ID); ?>"  title="<?php the_title(); ?>"> <?php the_title(); ?></a></h1>
      <p><?php
       $excerpt=get_the_excerpt();
       echo string_limit_words($excerpt, 40);
       ?></p></div>
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

  <?php get_template_part('templates/no-resultado', 'archive'); ?>

 <?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>
