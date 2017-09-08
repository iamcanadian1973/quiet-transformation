<?php
/*
Template Name: Pain Portal
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
					<h1>Free Resources</h1>
				</header>
			</div>
				<div class="entry-content row">
					<div class="column large-10 text-center small-centered">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nulla elit, posuere nec mi vel, mattis laoreet nulla. Mauris rutrum dignissim velit, ac dignissim nulla molestie nec. Donec tortor nunc vehicula pretium sapien, elementum rutrum nisl condimentum id.</p>
					</div>
				</div><!-- content -->
		</div><!-- wrap -->
	</section>
	<hr class="ruler" />

	<section class="resources" id="resources">
		<div class="wrap">
			<div class="row">
				<div class="column large-4">
					<div class="resource-image">
						<div class="border"></div>
						<div class="text">
							<p>Meditation<br /> for Mindfulness</p>
						</div>
					</div>
				</div>
				<div class="column large-8">
					<h2>become more mindful</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nulla elit, posuere nec mi vel, mattis laoreet nulla. Mauris rutrum dignissim velit, ac dignissim nulla molestie nec. Donec tortor nunc.
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="pain-management-retreat bg-img" id="pain-management-retreat">
		<div class="wrap">
			<div class="column row show-for-small-only mobile-img">
				<img src="wp-content/themes/quiettransformations/assets/images/home/Become-more-mindful-1920.jpg" />
			</div>
			<div class="row"> <!-- row  -->
				<header class="entry-header column large-5"><!-- column  -->
					<p class="upcoming">Retreats</p>
					<h2>Pain Management Retreat</h2>
					<h3 class="italic">September 2 – 14, 2017</h3>
				</header>
			</div>
				<div class="entry-content row align-middle">
					<div class="column large-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nulla elit, posuere nec mi vel, mattis laoreet nulla. Mauris rutrum dignissim velit, ac dignissim nulla molestie nec. Donec tortor nunc, venenatis sit amet efficitur ac, fermentum eget sem. Integer quis volutpat magna, ut consectetur est.</p>
						<a href="" class="btn-primary">Learn More</a>
					</div>
				</div><!-- content -->
		</div><!-- wrap -->
	</section>

	<section class="pain-articles" id="pain-articles">
		<div class="wrap">
			<div class="row"> <!-- row  -->
				<header class="entry-header column"><!-- column  -->
					<p class="upcoming">FROM THE BLOG</p>
					<h1>Articles on Pain Management</h1>
				</header>
			</div>
				<div class="entry-content row">
					<div class="column large-10 text-center small-centered">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nulla elit, posuere nec mi vel, mattis laoreet nulla. Mauris rutrum dignissim velit, ac dignissim molestie nec. Donec tortor nunc vehicula pretium sapien.</p>
					</div>
				</div><!-- content -->
					<hr class="ruler" />
				<div class="row">
						<div class="column large-6">
							<img src="wp-content/themes/quiettransformations/assets/images/free-resources/free-resources-bg.jpg" />
							<h3>Title</h3>
							<p class="date text-center">date by author - Leave a comment</p>
							<p>I was recently reminded of a 10-year plan I made for myself in 2007: it included paying off my mortgage, getting another promotion at work, and going to Brazil on vacation. It would seem that I failed miserably... Read more »</p>
						</div>
						<div class="column large-6">
							<img src="wp-content/themes/quiettransformations/assets/images/free-resources/free-resources-bg.jpg" />
							<h3>Title</h3>
							<p class="date text-center">date by author - Leave a comment</p>
							<p>I was recently reminded of a 10-year plan I made for myself in 2007: it included paying off my mortgage, getting another promotion at work, and going to Brazil on vacation. It would seem that I failed miserably... Read more »</p>
						</div>
				</div>
				<div class="row column read-more">
					<a class="text-center" href="">Read all Articles on Pain Management » </a>
				</div>
		</div><!-- wrap -->
	</section>


	</main>


</div>

<?php
get_footer();
