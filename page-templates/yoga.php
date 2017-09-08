<?php
/*
Template Name: Yoga
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
					<h1>Yoga for Mindfulness</h1>
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

<section class="schedule" id="schedule">
	<div class="wrap">
		<div class="row"> <!-- row  -->
			<div class="column large-7">
				<header class="entry-header"><!-- column  -->
					<h2>Group Yoga Schedule</h2>
				</header>
				<p class="teal text-center">Tamart, 2nd Floor — 15th Avenue & 10th Street<br />(entrance from the garden on 10th)</p>
				<p class="date">May 7 – 14</p>
				<table>
				  <thead>
				    <tr>
				      <th>day</th>
				      <th>Class</th>
				      <th>instructor</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td>7:45am – 9:00am</td>
				      <td>yin yoga</td>
				      <td>Laura</td>
				    </tr>
						<tr>
							<td>7:45am – 9:00am</td>
							<td>yin yoga</td>
							<td>Laura</td>
						</tr>
				  </tbody>
				</table>
				<table>
					<thead>
						<tr>
							<th>day</th>
							<th>Class</th>
							<th>instructor</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>7:45am – 9:00am</td>
							<td>yin yoga</td>
							<td>Laura</td>
						</tr>
						<tr>
							<td>7:45am – 9:00am</td>
							<td>yin yoga</td>
							<td>Laura</td>
						</tr>
					</tbody>
				</table>
				<table>
					<thead>
						<tr>
							<th>day</th>
							<th>Class</th>
							<th>instructor</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>7:45am – 9:00am</td>
							<td>yin yoga</td>
							<td>Laura</td>
						</tr>
						<tr>
							<td>7:45am – 9:00am</td>
							<td>yin yoga</td>
							<td>Laura</td>
						</tr>
					</tbody>
				</table>
				<table>
					<thead>
						<tr>
							<th>day</th>
							<th>Class</th>
							<th>instructor</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>7:45am – 9:00am</td>
							<td>yin yoga</td>
							<td>Laura</td>
						</tr>
						<tr>
							<td>7:45am – 9:00am</td>
							<td>yin yoga</td>
							<td>Laura</td>
						</tr>
					</tbody>
				</table>
				<table>
					<thead>
						<tr>
							<th>day</th>
							<th>Class</th>
							<th>instructor</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>7:45am – 9:00am</td>
							<td>yin yoga</td>
							<td>Laura</td>
						</tr>
						<tr>
							<td>7:45am – 9:00am</td>
							<td>yin yoga</td>
							<td>Laura</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="entry-content">
				<div class="column large-5 text-center">
					<div class="teal-portal">
						<div class="border"></div>
						<div class="text">
							<h3>Private Classes</h3>
							<p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vehicula pretium sapien, elementum rutrum nisl condimentum id.</p>
							<p class="medium">Private Yoga with Maria<br />
								75 min<br />
								sat Tamart, 2nd Floor $50.00 USD</p>
							<a href="/" class="btn-primary">Book Now</a>
						</div>
					</div>
					<div class="purple-portal">
						<div class="border"></div>
						<div class="text">
							<h3>Facebook Live</h3>
							<h4>Video Streaming Yoga</h4>
							<p class="medium">Thursdays 9:30 am EST</p>
							<p class="small">Etiam tristique purus in magna ullamcorper, eu sagittis mauris varius sem quis consectetur.</p>
							<a href="/" class="arrow"></a>
						</div>
					</div>

				</div>
			</div><!-- content -->
		</div>
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
	<hr class="ruler" />

	<section class="classes" id="classes">
		<div class="wrap">
				<div class="entry-content">
					<div class="row">
						<div class="column large-6 text-center">
							<h2>Class Description</h2>
							<h3>Yin Yoga</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nulla elit, posuere nec mi vel, mattis laoreet nulla. Mauris rutrum dignissim velit, ac dignissim nulla molestie.</p>
							<h3>Restorative</h3>
							<p>Donec tortor nunc vehicula pretium sapien, elementum rutrum nisl condimentum id. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nulla elit, posuere nec mi vel, mattis laoreet nulla.</p>
							<h3>Yin Yoga Basics</h3>
							<p>Mauris rutrum dignissim velit, ac dignissim nulla molestie nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nulla elit, posuere nec mi vel, mattis laoreet nulla.</p>
							<h3>Kundalini</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nulla elit, posuere nec mi vel, mattis laoreet nulla. Mauris rutrum dignissim velit, ac dignissim nulla molestie.</p>
							<h3>Strong Flow</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nulla elit, posuere nec mi vel, mattis laoreet nulla. Mauris rutrum dignissim velit, ac dignissim nulla molestie.</p>
						</div>
						<div class="column large-6 text-center">
							<h2 class="teachers">Teachers</h2>
							<h3>Yin Yoga</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nulla elit, posuere nec mi vel, mattis laoreet nulla. Mauris rutrum dignissim velit, ac dignissim nulla molestie.</p>
							<h3>Restorative</h3>
							<p>Donec tortor nunc vehicula pretium sapien, elementum rutrum nisl condimentum id. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nulla elit, posuere nec mi vel, mattis laoreet nulla.</p>
							<h3>Yin Yoga Basics</h3>
							<p>Mauris rutrum dignissim velit, ac dignissim nulla molestie nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nulla elit, posuere nec mi vel, mattis laoreet nulla.</p>
							<h3>Kundalini</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nulla elit, posuere nec mi vel, mattis laoreet nulla. Mauris rutrum dignissim velit, ac dignissim nulla molestie.</p>
							<h3>Strong Flow</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nulla elit, posuere nec mi vel, mattis laoreet nulla. Mauris rutrum dignissim velit, ac dignissim nulla molestie.</p>
						</div>
					</div>
				</div><!-- content -->
		</div><!-- wrap -->
	</section>
	</main>


</div>

<?php
get_footer();
