<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo THEME_FAVICONS;?>/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo THEME_FAVICONS;?>/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo THEME_FAVICONS;?>/favicon-16x16.png">
<link rel="manifest" href="<?php echo THEME_FAVICONS;?>/manifest.json">
<link rel="mask-icon" href="<?php echo THEME_FAVICONS;?>/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrap">
			<div class="column row">

 				<div class="site-branding hide-for-xlarge">
					<div class="site-title">
					<?php
					$site_url = home_url();
					printf('<a href="%s" title="%s"><img src="%s" alt="%s"/></a>',
							$site_url, get_bloginfo( 'name' ), THEME_IMG .'/logo.png', get_bloginfo( 'name' ) );
							//$site_url, get_bloginfo( 'name' ), THEME_IMG .'/logo.svg', get_bloginfo( 'name' ) );
  					?>
					</div>
				</div><!-- .site-branding -->
					<nav id="site-navigation" class="nav-primary" role="navigation">
						<?php
							// Desktop Menu
							$args = array(
								'theme_location' => 'primary',
								'menu' => 'Primary Menu',
								'container' => 'false',
								'container_class' => '',
								'container_id' => '',
								'menu_id'        => 'primary-menu',
								'menu_class'     => 'menu',
								'before' => '',
								'after' => '',
								'link_before' => '',
								'link_after' => '',
								'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth' => 0
							);
							wp_nav_menu($args);
						?>
				</nav><!-- #site-navigation -->
			</div>
		</div><!-- wrap -->
	</header><!-- #masthead -->



<div id="page" class="site-container">

	<div id="content" class="site-content">
