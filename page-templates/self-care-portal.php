<?php
/*
Template Name: Self Care Portal
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
