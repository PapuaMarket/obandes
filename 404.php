<?php
/**
 * The index for obandes.
 *
 * @package WordPress
 * @subpackage obandes
 * @since obandes 0.41
 */
?>
<?php get_header();?>
<?php
if(WP_DEBUG == true){
    echo '<!--'.basename(__FILE__,'.php').'['.basename(dirname(__FILE__)).']-->'."\n";
}?>
<section id="yui-main">
<div id="post-0" class="post error404 not-found yui-b">
  <h1 class="entry-title h1">
    <?php _e( 'Not Found', 'obandes' ); ?>
  </h1>
  <div class="entry-content">
    <p>
      <?php _e( 'Apologies, but no results were found for the requested Archive. Perhaps searching will help find a related post.', 'obandes' ); ?>
    </p>
    <?php get_search_form(); ?>
  </div>
</div>
<div class="clear"></div>	
</section>

<?php if ( is_active_sidebar( 'sidebar-1' ) ){ ?>
<nav class="yui-b" id="toc">
<ul>
    <?php dynamic_sidebar('sidebar-1');?>
  </ul>
</nav>


<?php }?>
<?php get_footer();?>
