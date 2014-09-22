<?php
/* Template Name: Site-Map
 *
 * Contains  site map, categories and pages
 *
 * @package nowell
 * @subpackage BlogramaFM
 */
?>
<?php
get_header();
$pagename='SiteMap Blograma FM';
?>

<div id="main" class="content-area" role="main" itemprop="mainContentOfPage">
 <h1 class="page-title"><?php echo esc_html($pagename); ?></h1>
 <div class="blograma-sitemap">
  <h2 class="article-title">Secciones:</h2>
  <ul class="sitemap">
   <?php
   wp_list_pages('depth=1&sort_column=menu_order&orderby=rand&order=ASC&exclude=866,792,558,8,17,9&title_li=');
   ?>
  </ul>
  <h2 class="article-title">Contenidos:</h2>
  <ul>
   <?php
   $cats    =get_categories();
   foreach ($cats as $cat) {
    echo '<li class="categorias">'."\n".'<h5>'.$cat->cat_name.'</h5>'."\n";
    echo '<ul class="cat-posts">'."\n";
    query_posts('posts_per_page=-1&cat='.$cat->cat_ID);
    while (have_posts()): the_post();
     //http://codex.wordpress.org/Function_Reference/get_the_category
     $category=get_the_category();

     if ($category[0]->cat_ID==$cat->cat_ID){
      ?>
      <li><?php the_time('Y') ?> &raquo; <a href="<?php the_permalink() ?>"  title="Permanent Link to: <?php the_title(); ?>">
        <?php the_title(); ?></a></li>
      <?php
     }
    endwhile;
    ?>
   </ul>
  <?php } ?>

  <?php
  wp_reset_query();
  ?>
 </div>
</div>

<?php get_footer(); ?>