<?php
/**
 * The header of the theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HC Parent Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'hc_parent_theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class='d-flex justify-content-between align-items-center px-3 py-3'>
			<div class="site-branding">
				<?php if(get_field('logo', 'options')) : ?>
				<a href="/">
				<?php
				$logo = get_field('logo', 'options');
				echo wp_get_attachment_image($logo['id'], 'full');
				?>
				</a>
				<?php endif; ?>
			</div><!-- .site-branding -->
				
			<div class='d-flex align-items-center header-right'>
            <?php

                $mainMenu = array(
                    // 'menu'              => 'menu-1',
                    'theme_location' => 'top-nav',
                    'depth'          => 2,
                    'container'      => false,
                    /*'container' => 'div',
                    'container_class' => 'navbar-collapse offcanvas-collapse bg-primary',
                    'container_id' => 'main-navbar',*/
                    'menu_class'     => 'navbar-nav ml-auto',
                    'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
                    // 'walker'         => new WP_Bootstrap_Navwalker()
                );
                wp_nav_menu( $mainMenu );

            ?>
			</div>
		</div>
	</header><!-- #masthead -->
