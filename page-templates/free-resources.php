<?php
/*
Template Name: Free Resources
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
    section_resources();
    function section_resources() {
                
        global $post;
        
        $attr = array( 'class' => 'section resources' );
        
        _s_section_open( $attr );	
                
        printf( '<div class="column row">%s</div>', get_free_resources() );
        
        _s_section_close();	
    }
    
                

    // Courses and Retreats
    get_template_part( 'template-parts/section', 'courses-retreats' );
    
    section_subscribe();
    function section_subscribe() {
                
        global $post;
        
        $prefix = 'subscribe';
        $prefix = set_field_prefix( $prefix );
    
        $content = get_field( sprintf( '%scontent', $prefix ) );
        
        $button = '';
        $button_text = get_field( sprintf( '%sbutton_text', $prefix ) );
        $button_link = get_field( sprintf( '%sbutton_link', $prefix ) );
        
        if( !empty( $button_text ) && !empty( $button_link ) ) {
            $button = sprintf( '<p class="cta"><a href="%s" class="btn-primary">%s</a></p<', $button_link, $button_text );
        }
        
        $attr = array( 'class' => 'section subscribe' );
        
        _s_section_open( $attr );		
        
        printf( '<div class="row"><div class="column small-centered large-8 text-center small-centered"><div class="entry-content">%s%s</div><hr /></div></div>', $content, $button );
        
        // events shortcode?
                
        _s_section_close();	
    }
    ?>
    
	</main>


</div>

<?php
get_footer();
