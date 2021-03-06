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
				<div class="column small-centered large-8">
					<p>Every Quiet Transformation journey starts with an inner turning. Sign up for weekly prompts for slowing down and practicing mindfulness, consectetur adipiscing elit. Quisque nulla elit, posuere nec mi vel, mattis laoreet nulla.</p>
				</div>
				<div class="column small-centered large-8">
					<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
				</div>
			</div><!-- content -->
	</div><!-- wrap -->
</section>
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="wrap">
		<div class="row column">
			<nav class="footer-nav" role="navigation">
					<?php
						// Desktop Menu
						$args = array(
							'theme_location' => 'footer',
							'menu' => 'Footer Menu',
							'container' => 'false',
							'container_class' => '',
							'container_id' => '',
							'menu_id'        => 'footer-menu',
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
		
            <?php
            echo _s_get_social_icons();
            
            footer_copyright();
            
            function footer_copyright() {
             
                $menu = '';
          
                if ( has_nav_menu( 'copyright' ) ) {
                    $args = array(
                        'theme_location' => 'copyright',
                        'container' => false,
                        'container_class' => '',
                        'container_id' => '',
                        'menu_id'        => 'copyright-menu',
                        'menu_class'     => 'menu',
                        'before' => '',
                        'after' => '',
                        'link_before' => '',
                        'link_after' => '',
                        'depth' => 0,
                        'echo' => false
                    );
                    
                    $menu = sprintf( '<span class="links">%s</span>', strip_tags( wp_nav_menu($args), '<a>' ) );	
                }
                
                $designer_url = 'http://bravenarrative.com';
                $designer = 'Branding and Web Design by Brave Narrative';
                            
                printf( '<p>&copy; %s Quiet Transformation. All Rights Reserved.  <span class="divider">|</span>
                        <a href="%s" target="_blank">%s</a> <span class="divider">|</span>  %s</p>', 
                        date( 'Y' ), 
                        $designer_url, 
                        $designer,
                        $menu );
                
            }
            
            
            ?>
			
     </div>
            
	</div>

 </footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>
