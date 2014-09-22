<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=content div and all content after
 *
 * @package nowell
 * @subpackage BlogramaFM
 */
?>

</div>

<footer id="colophon" class="site-footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
    <nav class="footer-navigation" role="navigation">
        <?php if (has_nav_menu('footer')) : ?>

         <?php
         wp_nav_menu(array(
             'theme_location'=>'footer',
             'container'     =>false,
             'menu_class'    =>'menu menu--footer',
             'depth'         =>1,
         ));
         ?>

        <?php endif; ?>
    </nav>

    <div class="site-info">
        <ul class="credits">

            <li>&copy; 2012 - <?php echo date('Y'); ?><strong> Blograma FM</strong> Todos los derechos reservados. </li>

        </ul>
        <?php wp_nav_menu(array('menu'=>'impresum')); ?>
    </div>
</footer>

</div>
</div>

<?php wp_footer(); ?>
<script type="text/javascript">
 jQuery.noConflict();
 jQuery(document).ready(function ($) {

     $('img').each(function () {
         $(this).removeAttr('width')
         $(this).removeAttr('height');
     });

 });
</script>
</body>
</html>
