<?php
/**
 * The template for displaying post meta information.
 *
 * @package nowell
 */
?>

<dl class="entry-meta">
 <dt class="posted-by"><?php _e('Autor', 'nowell'); ?></dt>
 <dd class="posted-by"><?php nowell_posted_by(); ?></dd>

 <?php if ($category_list=get_the_category_list(__(', ', 'nowell'))) : ?>

  <?php $label=_n('Categoria', 'Categorias', count($category_list), 'nowell'); ?>
  <dt class="category-list"><?php _e('Categorias', 'nowell'); ?></dt>
  <dd class="category-list"><?php
   foreach ((get_the_category()) as $category) {
    echo $category->cat_name.' , ';
   }//echo $category_list;
   ?></dd>

 <?php endif; ?>

 <?php if ($tag_list=get_the_tag_list('', ', ')) : ?>

  <dt class="tag-list"><?php _e('Tags', 'nowell'); ?></dt>

  <dd class="tag-list"><?php
   $posttags=get_the_tags();
   if ($posttags){
    foreach ($posttags as $tag) {
     echo $tag->name.', ';
    }
   }//echo $tag_list;
   ?></dd>

 <?php endif; ?>

 <?php if (!post_password_required()&&( comments_open()||'0'!=get_comments_number() )) : ?>

  <dt class="comments-number"><?php _e('Comments', 'nowell'); ?></dt>
  <dd class="comments-number"><?php comments_popup_link(__('Leave a comment', 'nowell'), __('1 Comment', 'nowell'), __('% Comments', 'nowell')); ?></dd>

 <?php endif; ?>
</dl>
