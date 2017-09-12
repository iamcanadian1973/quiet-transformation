<?php
section_testimonial();
function section_testimonial() {
    
    $testimonials = get_testimonials();
    
    if( empty( $testimonials ) ) {
        return;   
    }
    
    $attr = array( 'class' => 'section testimonial' );
    
    _s_section_open( $attr );
    
    print( '<div class="entry-content">' );
    
    echo '<div class="row">';
    echo '<div class="column small-centered large-7 text-center">';
    
    echo $testimonials;
    
    echo '</div></div>';
    
    print( '</div>' );
    
    echo  '<hr class="ruler" />';
    
    _s_section_close();	   
}