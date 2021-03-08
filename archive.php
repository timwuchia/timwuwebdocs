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

		<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>

                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>

            <?php

			endwhile;

			the_posts_navigation();

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
