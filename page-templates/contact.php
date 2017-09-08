<?php
/*
Template Name: Contact
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
	<section class="contact-intro">
		<div class="wrap">
			<header class="entry-header">
				<div class="row">
					<div class="column">
						<h1><?php echo get_the_title(); ?></h1>
					</div>
				</div>
			</header>
				<div class="entry-content">
					<div class="row">
						<div class="column small-centered large-9 text-center">
							<p>Between Cozumel, Mexico & New York City, consectetur adipiscing elit. Quisque nulla elit, posuere nec mi vel, mattis laoreet nulla. Mauris rutrum dignissim velit, ac dignissim molestie nec. Donec tortor nunc vehicula pretium sapien.</p>
						</div>
					</div>
				</div><!-- content -->
		</div><!-- wrap -->
	</section>
	<hr class="ruler" />
	<section class="contact-info">
		<div class="wrap">
			<header class="entry-header">
				<div class="row column">
					<h2>Tamart Yoga Studio</h2>
				</div>
			</header>
			<div class="entry-content">
				<div class="row column">
					<p>2nd Floor — 15th Avenue & 10th Street<br /> (entrace from the garden on 10th Street)
						Cozumel, Mexico</p>
				</div>
				<div class="row column social-media-row text-center">
					<a href="www.facebook.com" class="social-media"><?php echo get_svg('facebook'); ?></a>
					<a href="www.twitter.com" class="social-media"><?php echo get_svg('twitter'); ?></a>
					<a href="www.instagram.com" class="social-media"><?php echo get_svg('instagram'); ?></a>
				</div>
			</div>
		</div>
	</section>
	<section class="contact-form">
		<div class="wrap">
			<header class="entry-header">
				<div class="row column">
					<h2>Get in Touch</h2>
					<p>Required fields are marked *</p>
				</div>
			</header>
			<div class="entry-content">
				<div class="row column large-6 small-centered">
					<p>
						<?php echo do_shortcode('[gravityform id="2" title="false" description="false"]'); ?>
					</p>
				</div>
			</div>
		</div>
	</section>
	</main>

</div>

<?php
get_footer();
