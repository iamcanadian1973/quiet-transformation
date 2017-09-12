<?php
section_classes();
function section_classes() {
    
    $attr = array( 'class' => 'section classes' );
    
    _s_section_open( $attr );
    
    $title = '<h2>Group Yoga Schedule</h2>';	
    
    print( '<div class="entry-content">' );
    
    print( '<div class="row">' );
    
    printf( '<div class="large-6 text-center columns"><h2>Class Description</h2>%s</div>', get_yoga_classes() );
    
    printf( '<div class="large-6 text-center columns"><h2 class="teachers">Teachers</h2>%s</div>', get_teachers() );
    
    print( '</div>' );
    
    print( '</div>' );
    
    _s_section_close();	   
}