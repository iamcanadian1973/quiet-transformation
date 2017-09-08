<?php

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
					<h1>Blog</h1>
				</header>
			</div>
				<div class="entry-content row">
					<div class="column large-10 text-center small-centered">
						<p>Through studying yoga, I have experienced infinite transformation in all areas of life; in my body, mind and relationships. And through teaching, I have seen many of my students have the same life-changing experience. I am privileged to constantly witness the profound and positive effect it has on everyone who practices. Each day, the journey becomes more fascinating and engaging. It is impossible to outgrow Yoga because it reveals more to you every time you practice.</p>
						<p>Here in this blog I share the things that inspire my boundless passion for yoga. Be sure to check back frequently. And sign up to receive our emails for more tips on bringing yoga and relaxation into your daily life. Thanks for visiting me here. I am excited to have the opportunity to share the adventure with you.</p>
					</div>
				</div><!-- content -->
		</div><!-- wrap -->
	</section>
<hr class="ruler" />
  <section class="blog" id="blog">
    <div class="wrap">
        <div class="entry-content">
					<?php $loop = new WP_Query( array('post_type' => 'post' ) );
							 while ( $loop->have_posts() ) : $loop->the_post(); ?>
				          <div class="row">
										<div class="column large-8 text-center small-centered">
											<?php $title = get_the_title(); ?>
											<?php the_post_thumbnail(); ?>
											<h2><a href="<?php the_permalink(); ?>"><?php echo $title; ?></a></h2>
											<span class="post-meta"><?php the_date(); ?> by <span class="author"><?php the_author(); ?></span> - <a href="<?php the_permalink(); ?>">Leave a comment</a></span>
											<?php the_excerpt(); ?>
										</div>
				          </div>
					<?php endwhile; ?>
        </div><!-- content -->
    </div><!-- wrap -->
  </section>
	</main>

</div>

<?php
get_footer();
