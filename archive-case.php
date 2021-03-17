<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Drama_Forum
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
		<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>

				<div class="card card-body">
					<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php the_content(); ?>
				</div>

            <?php

			endwhile;

			the_posts_navigation();

		endif;
		?>

	</main><!-- #main -->
	</div>
<?php
get_footer();
