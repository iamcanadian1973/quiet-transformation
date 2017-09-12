<?php
section_intro();
function section_intro() {
            
    global $post;
    
    $attr = array( 'class' => 'section intro text-center' );
    
    _s_section_open( $attr );		
    
    print( '<div class="entry-content"><div class="column row">' );
    
    while ( have_posts() ) :

        the_post();
        
        the_content();
            
    endwhile;
    
    print( '</div></div>' );
    
     echo '<hr class="ruler" />';
    
    _s_section_close();	
}