<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HC Parent Theme
 */

?>

	<footer id="colophon" class="site-footer p-3 bg-dark-gray">
		<p class='text-center text-white mb-0'>&copy; <?php echo date("Y") ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> All Rights Reserved</p>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>

</script>
</body>
</html>