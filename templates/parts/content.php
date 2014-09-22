<?php
/**
 * The default template part for displaying content.
 *
 * @package nowell
 * @subpackage BlogramaFM
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
  
  <?php the_title('<h1 class="entry-title" itemprop="headline"><a href="' . esc_url(get_permalink()) . '" rel="bookmark" itemprop="url">', '</a></h1>'); ?>

</article>
