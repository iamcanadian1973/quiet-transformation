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
    // Intro
    get_template_part( 'template-parts/section', 'intro' );
    ?>

    <?php
    section_story();
    function section_story() {
                
        global $post;
        
        
        $prefix = 'story';
        $prefix = set_field_prefix( $prefix );
    
 
        $content 		= get_field( sprintf( '%scontent', $prefix ) );
        $attachment_id  = get_post_meta( get_the_ID(), sprintf( '%sphoto', $prefix ), true );
        $image = _s_get_acf_image( $attachment_id );
        
        if( empty( $image ) && empty( $content ) ) {
            return false;
        }
        
        $attr = array( 'class' => 'section the-story' );
        
        _s_section_open( $attr );	
                
        printf( '<div class="row">
					<div class="column medium-8 medium-push-4 large-7 large-push-5">
						<div class="entry-content">%s</div>
					</div>
					<div class="column medium-4 medium-pull-8 large-5 large-pull-7">
 							%s
 					</div>
				</div>', $content, $image );
        
        _s_section_close();	
    }


    section_meet_maria();
    function section_meet_maria() {
                
        global $post;
         
        $prefix = 'meet';
        $prefix = set_field_prefix( $prefix );
    
 
        $attachment_id  = get_post_meta( get_the_ID(), sprintf( '%sphoto', $prefix ), true );
        $image = _s_get_acf_image( $attachment_id, 'hero'  );
        $content 		= get_field( sprintf( '%scontent', $prefix ) );
        
        
        if( empty( $image ) && empty( $content ) ) {
            return false;
        }
        
        $attr = array( 'class' => 'section meet-maria' );
        
        _s_section_open( $attr );	
        
        printf( '<div class="expanded column row">%s</div>',  $image );	
        
        printf( '<div class="row"><div class="column large-10 text-center small-centered"><div class="entry-content">%s</div><hr class="ruler" />
                </div>', $content );
          
        _s_section_close();	
    }
    
    
    
    // Testimonials
    get_template_part( 'template-parts/section', 'testimonials' );
    ?>

	</main>


</div>

<?php
get_footer();
