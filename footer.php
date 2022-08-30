<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Persimmon
 */

?>
	</div><!-- .content-container -->
		<footer id="colophon" class="site-footer">
			<div class="site-info text-center">
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'live_deliciously_persimmon' ), 'Persimmon', '<a href="http://underscores.me/">Live Deliciously</a>' );
				?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
