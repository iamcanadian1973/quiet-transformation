<?php
/*
Template Name: Retreats
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
    ?>
    
    
    <?php
    section_workshops();
    function section_workshops() {
                
        global $post;
        
        $prefix = 'workshop';
        $prefix = set_field_prefix( $prefix );
    
        $content = get_field( sprintf( '%sintro', $prefix ) );
        
        $attr = array( 'class' => 'section workshops' );
        
        _s_section_open( $attr );		
        
        printf( '<div class="row"><div class="column small-centered large-6"><div class="entry-content">%s</div></div></div>', $content );
        
        // events shortcode?
                
        _s_section_close();	
    }
 
 
    // Courses and Retreats
    get_template_part( 'template-parts/section', 'courses-retreats' );
    
    // Testimonials
    get_template_part( 'template-parts/section', 'testimonials' );
    ?>
    
	</main>


</div>

<?php
get_footer();
