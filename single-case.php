<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package HC Parent Theme
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<div><?php the_content(); ?></div>
			<?php if ( have_rows ("cases") ) : ?>
				<div class="mb-3 card card-body">
					<?php while ( have_rows ("cases") ) : the_row(); ?>
					<?php
						$title = get_sub_field("title");
						$description = get_sub_field("description");
						$test_process = get_sub_field("test_process");
						$result = get_sub_field("result");
					?>
					<?php if ( $title ) : ?>
						<h4>Sub Case: <?php echo $title; ?></h4>
					<?php endif; ?>
					<?php if ( $description ) : ?>
						<div class="pb-4">
							<?php echo $description; ?>
						</div>
					<?php endif; ?>
					<?php if ( $test_process ) : ?>
						<div class="pb-3">
							<h5>Test Process</h5>
							<?php echo $test_process; ?>
						</div>
					<?php endif; ?>
					<?php if ( $result ) : ?>
						<div class="pb-3">
							<h5>Result</h5>
							<?php echo $result; ?>
						</div>
					<?php endif; ?>
					<?php endwhile; ?>
				</div>
			<?php endif; ?> <!-- end of if have rows -->
		<?php endwhile; // End of the loop. ?>
		</div>
	</main><!-- #main -->

<?php
get_footer();
