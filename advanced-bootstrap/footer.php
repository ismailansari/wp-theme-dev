<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials\
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info <?php echo get_theme_mod('container_class'); ?>">
			<a href="<?php echo esc_url( esc_html__( 'https://wordpress.org/', 'awesomesauce' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'awesomesauce' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'awesomesauce' ), 'awesomesauce', '<a href="http://www.daggerhart.com" rel="designer">Jonathan Daggerhart</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
