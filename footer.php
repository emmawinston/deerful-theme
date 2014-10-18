<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package deerful
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			&copy; Deerful <?php echo date('Y'); ?>. Powered by <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'deerful' ) ); ?>"><?php printf( __( '%s', 'deerful' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
