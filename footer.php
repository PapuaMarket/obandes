<?php
/**
 * The footer for obandes.
 *
 * @package WordPress
 * @subpackage obandes
 * @since obandes 0.1
 */
?>


<br style="clear:both;" />

<footer class="bar">
		<div id="colophon">

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar('footer');

?>

			<address>
				theme: <a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</address><!-- #site-info -->

			<div id="site-generator">
<a href="<?php echo esc_url( __('http://wordpress.org/', 'obandes') ); ?>" 						title="<?php esc_attr_e('Semantic Personal Publishing Platform', 'obandes'); ?>" rel="generator"><?php printf( __('Proudly powered by %s.', 'obandes'), 'WordPress' ); ?>				</a>
			</div><!-- #site-generator -->

		</div><!-- #colophon -->
	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</footer>
</div>
</body>
</html>