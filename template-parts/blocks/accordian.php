<?php
get_template_part( 'template-parts/blocks/before', 'blocks-before', $block); // passing the $block variable to the before content
?>
<?php if ( have_rows( 'accordian' ) ) : ?>
	<div class='hc-accordian'>
		<?php
		while ( have_rows( 'accordian' ) ) :
			the_row();
			?>
			<?php
			$title   = get_sub_field( 'title' );
			$content = get_sub_field( 'content' );
			?>
		<div class='hc-accordian-wrap'>
			<h2 class='hc-accordian-title'><?php echo esc_html( $title ); ?><span class='acc-toggle-btn'><i class="fas fa-chevron-down"></i></span></h2>
			<div class='hc-accordian-content'><?php echo $content; ?></div>
		</div>
		<?php endwhile; ?>
	</div>
<?php endif; ?>

<?php
get_template_part( 'template-parts/blocks/after' );
?>
