<?php
/**
 * The template for displaying post meta information.
 *
 * @package nowell
 * @subpackage BlogramaFM
 */
?>

<dl class="entry-meta">
 <dt class="posted-by"><?php _e('Autor', 'BlogramaFM'); ?></dt>
 <dd class="posted-by"><?php nowell_posted_by(); ?></dd>

 <?php if ($category_list=get_the_category_list(__(', ', 'BlogramaFM'))) : ?>

  <?php $label=_n('Categoria', 'Categorias', count($category_list), 'BlogramaFM'); ?>
  <dt class="category-list"><?php _e('Categorias', 'BlogramaFM'); ?></dt>
  <dd class="category-list"><?php
   foreach ((get_the_category()) as $category) {
    echo $category->cat_name.' , ';
   }//echo $category_list;
   ?></dd>

 <?php endif; ?>

 <?php if ($tag_list=get_the_tag_list('', ', ')) : ?>

  <dt class="tag-list"><?php _e('Tags', 'BlogramaFM'); ?></dt>

  <dd class="tag-list"><?php
   $posttags=get_the_tags();
   if ($posttags){
    foreach ($posttags as $tag) {
     echo $tag->name.', ';
    }
   }//echo $tag_list;
   ?></dd>

 <?php endif; ?>

</dl>
