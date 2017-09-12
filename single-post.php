<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */

get_header();
get_template_part( 'template-parts/section', 'hero-post' );
?>
<div class="row">

	<div class="small-centered large-8 columns">

		<div id="primary" class="content-area">

			<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) :

				the_post();
				get_template_part( 'template-parts/content', 'post' );

				the_post_navigation(
                    array(
                        'prev_text' => __( '&laquo; %title' ),
                        'next_text' => __( '%title &raquo;' ),
                    )
                );

					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; ?>

			</main>

		</div>

	</div>

	<!-- <div class="medium-4 columns">

		<?php //get_sidebar(); ?>

	</div> -->

</div>

<?php
get_footer();
