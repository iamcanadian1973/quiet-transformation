<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

<?php
get_template_part( 'template-parts/section', 'hero' );
?>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">    
        
		<?php
        // Default
        section_default();
        function section_default() {
                    
            global $post;
            
            $attr = array( 'class' => 'section intro' );
            
            _s_section_open( $attr );		
            
            print( '<div class="entry-content"><div class="row"><div class="large-10 columns small-centered  text-center">' );
            
            while ( have_posts() ) :
    
                the_post();
                
                the_content();
                    
            endwhile;
            
            print( '</div></div></div>' );
            _s_section_close();	
        }
        ?>

		<section class="become-more-mindful bg-img" id="become-more-mindful">
			<div class="wrap">
				<div class="column row show-for-small-only mobile-img">
					<img src="wp-content/themes/quiettransformations/assets/images/home/Become-more-mindful-1920.jpg" />
				</div>
				<div class="row"> <!-- row  -->
					<header class="entry-header column large-6"><!-- column  -->
						<h2>become more mindful</h2>
						<h3 class="italic">7 Days of Mindfulness Course</h3>
					</header>
				</div>
					<div class="entry-content row align-middle">
						<div class="column large-6">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nulla elit, posuere nec mi vel, mattis laoreet nulla. Mauris rutrum dignissim velit, ac dignissim nulla molestie nec. Donec tortor nunc.
							</p>
							<a href="" class="btn-primary">subscribe</a>
						</div>
					</div><!-- content -->
			</div><!-- wrap -->
		</section>
		<section class="self-care-retreat bg-img flex-container align-middle" id="self-care-retreat">
			<div class="wrap">
				<div class="column row show-for-small-only mobile-img">
					<img src="wp-content/themes/quiettransformations/assets/images/home/self-care-1920.jpg" />
				</div>
				<div class="row align-right">
					<header class="entry-header large-6 column float-right">
						<p class="upcoming">UPCOMING</p>
						<h2>Self Care Retreat</h2>
						<h3 class="italic">March 2 – 14, 2017</h3>
					</header>
				</div>
					<div class="entry-content row align-right">
						<div class="large-6 column float-right">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nulla elit, posuere nec mi vel, mattis laoreet nulla. Mauris rutrum dignissim velit, ac dignissim nulla molestie nec. Donec tortor nunc, venenatis sit amet efficitur ac, fermentum eget sem. Integer quis volutpat magna, ut consectetur est.
							</p>
							<a href="" class="btn-primary">learn more</a>
						</div>
					</div><!-- content -->
			</div><!-- wrap -->
		</section>

		<section class="portal" id="portal">
			<div class="wrap">
				<div class="column row">
					<header class="entry-header text-center">
						<h2>Choose Your Portal</h2>
					</header>
				</div>
					<div class="entry-content row">
						<div class="column large-6">
							<div class="purple-portal">
								<div class="border"></div>
								<div class="text">
									<h3>Self Care</h3>
									<p>Etiam tristique purus in magna ullamcorper, eu sagittis mauris varius sem quis consectetur.</p>
									<a href="" class="arrow"></a>
								</div>
							</div>
						</div>
							<div class="column large-6">
								<div class="teal-portal">
									<div class="border"></div>
									<div class="text">
										<h3>Pain Management</h3>
										<p>Proin vehicula varius sem quis consectetur. Pellentesque quis eros ultricies nibh imperdiet.</p>
										<a href="" class="arrow"></a>
									</div>
								</div>
							</div>
					</div><!-- content -->
			</div><!-- wrap -->
		</section>

		<section class="who-is-maria bg-img flex-container align-middle" id="who-is-maria">
			<div class="wrap">
				<div class="column row show-for-small-only mobile-img">
					<img src="wp-content/themes/quiettransformations/assets/images/home/who-is-maria-1920.jpg" />
				</div>
				<div class="row">
					<header class="entry-header column large-6">
						<h2>Who is Maria Hykin?</h2>
					</header>
				</div>
					<div class="entry-content row">
						<div class="column medium-8 large-6">
							<p>As a yoga and meditation teacher, Maria embodies the knowledge and inspiration needed to create a safe and tranquil space for your transformation. Her mission is to ensure that your trip is a meaningful experience. She will help you gain clarity and shape your life into one you will truly enjoy.</p>
							<p>In her past life as a chief of administration at a Manhattan-based consulting firm, Maria was an expert in workplace relationships & talent management. In 2010, she traded her executive boardroom in New York City for an oceanfront one-bedroom on Cozumel. Now she calls this island her home and will be happy to share its magical secrets with you. Maria’s brilliant hosting skills will take all the worry and guesswork out of your trip, making you feel like a local.</p>
							<a href="" class="btn-primary">read more</a>
						</div>
					</div><!-- content -->
			</div><!-- wrap -->
		</section>

		<section class="testimonial" id="testimonial">
			<div class="wrap">
					<div class="entry-content">
						<div class="row">
							<div class="column">
								<img src="wp-content/themes/quiettransformations/assets/images/home/testimonial.png" class="float-center client"/>
							</div>
						</div>
						<div class="row">
							<div class="column small-centered large-7 text-center">
								<p class="quote">"I spent a lifetime believing self-care was a shameful notion. Synonymous with self-centered. Maria's beautifully planned and executed retreat on the breathtaking island of Cozumel has changed my perspective. <strong>Self-care is what needs to occur before fully caring for anyone else. I have been quietly transformed.</strong>"</p>
								<p class="italic">— Jennifer Mann</p>
								<img src="wp-content/themes/quiettransformations/assets/images/home/butterfly.png" class="float-center butterfly"/>
							</div>
						</div>
					</div><!-- content -->
			</div><!-- wrap -->
		</section>

	</main>
</div>
<?php
get_footer();
