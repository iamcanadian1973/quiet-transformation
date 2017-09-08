<?php
/*
Template Name: About
*/

get_header(); ?>

<?php
// Hero
get_template_part( 'template-parts/section', 'hero' );
?>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">
	<?php
 	// Default
	//section_default();
	/* function section_default() {

		global $post;

		$attr = array( 'class' => 'section default' );

		_s_section_open( $attr );

		print( '<div class="row">' );

			echo '<div class="small-12 large-4 columns">';
			// lib/functions/theme.php
			$footer 	= get_field( 'footer', 'option' );
			printf( '<h3>%s</h3>%s', __( 'Veritas Legal Services', '_s' ), $footer );
			$phone_number = get_field( 'phone_number', 'option' );
            if( !empty( $phone_number ) ) {
                printf( '<p><a href="tel:%1$s" class="phone-number">%1$s</a></p>', $phone_number );
            }
			echo '</div>';

			echo '<div class="small-12 large-7 columns">';
			while ( have_posts() ) :

				the_post();

                echo '<div class="entry-content">';

				the_content();

                echo '</div>';

			endwhile;
			echo '</div>';

		print( '</div>' );
		_s_section_close();
	} */
	?>
	<section class="intro" id="intro">
		<div class="wrap">
			<div class="row"> <!-- row  -->
				<header class="entry-header column"><!-- column  -->
					<h1>What is Quiet Transformation?</h1>
				</header>
			</div>
				<div class="entry-content row">
					<div class="column large-10 text-center small-centered">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porta consequat eros eu sollicitudin. Etiam vestibulum vehicula accumsan. Nunc nec consequat nibh. Nullam porttitor mi massa, id tristique libero suscipit eu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non orci id augue laoreet faucibus ac nec est. Donec aliquet arcu in dolor facilisis luctus. Nullam luctus ipsum est, eget suscipit diam mattis in. Suspendisse potenti. Curabitur ut libero semper nisl venenatis fermentum. Cras nec tortor sit amet libero viverra auctor.</p>
					</div>
				</div><!-- content -->
		</div><!-- wrap -->
	</section>

	<section class="the-story" id="the-story">
		<div class="wrap">
				<div class="row">
					<div class="column large-5">
						<img src="wp-content/themes/quiettransformations/assets/images/about/about-long.jpg" />
					</div>
					<div class="column large-7">
						<header class="entry-header"><!-- column  -->
							<h2>The Story</h2>
						</header>
						<div class="entry-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porta consequat eros eu sollicitudin. Etiam vestibulum vehicula accumsan. Nunc nec consequat nibh. Nullam porttitor mi massa, id tristique libero suscipit eu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non orci id augue laoreet faucibus ac nec est. Donec aliquet arcu in dolor facilisis luctus. Nullam luctus ipsum est, eget suscipit diam mattis in. Suspendisse potenti. Curabitur ut libero semper nisl venenatis fermentum. Cras nec tortor sit amet libero viverra auctor.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porta consequat eros eu sollicitudin. Etiam vestibulum vehicula accumsan. Nunc nec consequat nibh. Nullam porttitor mi massa, id tristique libero suscipit eu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non orci id augue laoreet faucibus ac nec est.</p>
						</div>
					</div>
				</div><!-- content -->
		</div><!-- wrap -->
	</section>

	<section class="three-images bg-img" id="three-images">
		<div class="wrap">
					<div class="column row show-for-small-only mobile-img">
						<img src="wp-content/themes/quiettransformations/assets/images/about/3-photos.png" />
					</div>
		</div><!-- wrap -->
	</section>

	<section class="intro" id="intro">
		<div class="wrap">
			<div class="row"> <!-- row  -->
				<header class="entry-header column"><!-- column  -->
					<h2>Meet Maria</h2>
				</header>
			</div>
				<div class="entry-content row">
					<div class="column large-10 text-center small-centered">
						<p>Hi, I am Maria, the chief caregiver around here. I teach yoga, meditation, and radical self-care. I have a most adorable kitten. I wake up to the gorgeous turquoise blue of the Caribbean. I play piano. I scuba dive. And I am utterly content with my life. Every single day.</p>
						<p>My lifestyle hasn’t always sounded so tranquil. Once upon a time, I was a high power executive at a mutual fund consulting firm in Manhattan, my day planner perpetually overstuffed with business events and social commitments. Truth be told, I really loved this whirlpool of intense energy… until sudden and severe migraines shredded my life to pieces, eventually making me quit my job of 12 years and set off on a quest for a cure.</p>
						<p>This journey eventually brought me to Cozumel, a Mexican island in the Caribbean, abundant with sun, scuba dive shops, and — randomly — migraine treatments that even my neurologist in NYC had never heard of. Guided by necessity and intuition, I’ve learnt to arrange my life in such a way that allows me to live fully and productively even with periodic bouts of excruciating pain.</p>
						<p>
							<a href="">Read Maria’s full story on the Quiet Transformation Blog » </a>
						</p>

					</div>
				</div><!-- content -->
		</div><!-- wrap -->
	</section>
<hr class="ruler" />
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
