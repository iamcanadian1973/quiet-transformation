<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */
?>

</div><!-- #content -->


<?php
 // Footer functions located inside: theme.php
?>
<section class="newsletter text-center" id="newsletter">
	<div class="wrap">
		<div class="row">
			<header class="entry-header small-centered column large-6">
				<h2>Just Begin</h2>
					<h3>Your Journey Starts Within</h3>
			</header>
		</div>
			<div class="entry-content row">
				<div class="column small-centered medium-8 large-8">
					<p>Every Quiet Transformation journey starts with an inner turning. Sign up for weekly prompts for slowing down and practicing mindfulness, consectetur adipiscing elit. Quisque nulla elit, posuere nec mi vel, mattis laoreet nulla.</p>
				</div>
				<div class="column small-centered medium-7 large-7">
					<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
				</div>
			</div><!-- content -->
	</div><!-- wrap -->
</section>
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="wrap">
		<div class="row column">
				<nav id="site-navigation" class="footer-nav" role="navigation">
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
			<div class="row column social-media-row text-center">
				<a href="www.facebook.com" class="social-media"><?php echo get_svg('facebook'); ?></a>
				<a href="www.twitter.com" class="social-media"><?php echo get_svg('twitter'); ?></a>
				<a href="www.instagram.com" class="social-media"><?php echo get_svg('instagram'); ?></a>
			</div>
			<div class="row column text-center copyright-row">
				<p>© 2017 Quiet Transformation. All Rights Reserved.  <span class="divider">|</span>
					<a href="http://bravenarrative.com/" target="_blank">Branding and Web Design by Brave Narrative</a>   <span class="divider">|</span>  Terms and Conditions</p>
			</div>
	</div>

 </footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>
