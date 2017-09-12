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
 	// Intro
    get_template_part( 'template-parts/section', 'intro' );
    
    // Schedule
    get_template_part( 'template-parts/section', 'schedule' );
    
    // Testimonials
    get_template_part( 'template-parts/section', 'testimonials' );
    
    // Classes
    get_template_part( 'template-parts/section', 'classes' );
    ?>
	</main>


</div>

<?php
get_footer();