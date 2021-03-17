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
			<h1 class="pb-4"><?php the_title(); ?></h1>
			<?php if ( get_field( 'request' ) ) : ?>
				<div class="py-3 border-bottom">
					<h4>Request: <b><?php echo the_field('request'); ?></b></h4>
				</div>
			<?php endif; ?>
			<?php if ( get_field( 'route' ) ) : ?>
				<div class="py-3 border-bottom">
					<h4>Route: <?php echo the_field('route'); ?></h4>
				</div>
			<?php endif; ?>
			<?php if ( have_rows( 'queries' ) ) : ?>
				<div class="py-3 border-bottom">
					<h4>Queries: </h4>
					<?php while ( have_rows( 'queries' ) ) : the_row(); ?>
					<?php 
						$key = get_sub_field("key");
						$value= get_sub_field("value");
					?>
					<p><?php echo $key?> : <?php echo $value?></p>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<?php if ( have_rows( 'header' ) ) : ?>
				<div class="py-3 border-bottom">
					<h4>Request Headers: </h4>
					<?php while ( have_rows( 'header' ) ) : the_row(); ?>
					<?php 
						$key = get_sub_field("key");
						$value= get_sub_field("value");
					?>
					<p><?php echo $key?> : <?php echo $value?></p>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<?php if ( have_rows( 'body' ) ) : ?>
				<div class="py-3 border-bottom">
					<h4>Request Body: </h4>
					<?php while ( have_rows( 'body' ) ) : the_row(); ?>
					<?php 
						$key = get_sub_field("key");
						$value= get_sub_field("value");
					?>
					<p><?php echo $key?> : <?php echo $value?></p>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<?php
			$middlewares = get_field('middlewares');
			if( $middlewares ): ?>
			<div class="py-3 border-bottom">
				<h4>Route Middlewares</h4>
				<ul>
					<?php foreach( $middlewares as $middleware ): ?>
						<li><?php echo $middleware; ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<?php endif; ?>
			<div class="py-3 border-bottom">
				<h4>Descriptions: </h4>
				<?php the_content(); ?>
			</div>
			<?php endwhile; // End of the loop. ?>
		</div>
	</main><!-- #main -->

<?php
get_footer();
