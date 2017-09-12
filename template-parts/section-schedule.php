<?php
section_schedule();
function section_schedule() {
    
    $attr = array( 'class' => 'section schedule' );
    
    _s_section_open( $attr );
    
    $title = '<h2>Group Yoga Schedule</h2>';	
    
    $location = get_field( 'location' );
    if( !empty( $location ) ) {
        $location = sprintf( '<h5>%s</h5>', $location );
    }	
    
    $heading = sprintf( '<header class="entry-header">%s%s</header>', $title, $location );
    
    $calendar =  get_yoga_schedule();
            
    if( !empty( $calendar ) ) {
        $calendar = sprintf( '<div class="slick-calendar">%s</div>', $calendar );
    }
    else {
        $calendar = sprintf( '<p>%s</p>', 'No calendar available' );   
    }
    
    print( '<div class="row">' );
    
    $centered = ( is_active_sidebar( 'primary' ) ) ? '' : ' small-centered';

    
    printf( '<div class="large-7%s columns">%s%s</div>', $centered, $heading, $calendar );
    
    if( is_active_sidebar( 'primary' ) ) {
        print( '<div class="large-5 columns">' );
        dynamic_sidebar( 'primary' );
        print( '</div>' );
    }
    
    
    print( '</div>' );
    
    _s_section_close();	   
}