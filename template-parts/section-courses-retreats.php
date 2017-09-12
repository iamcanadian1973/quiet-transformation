<?php

section_courses_retreats();
function section_courses_retreats() {
 
    $data = '';
    
    $args = array(
        'post_type'      => array( 'course', 'retreat' ),
        'posts_per_page' => -1,
        'post_status'    => 'publish',
    );
    
    $courses_retreats = get_field('courses_retreats');
        
    if( empty( $courses_retreats ) ) {
        return false;
    }
    
    $args['post__in'] = $courses_retreats;
    $args['orderby'] = 'post__in';
    
    // Use $loop, a custom variable we made up, so it doesn't overwrite anything
    $loop = new WP_Query( $args );

    // have_posts() is a wrapper function for $wp_query->have_posts(). Since we
    // don't want to use $wp_query, use our custom variable instead.
    if ( $loop->have_posts() ) : 
        
        echo '<div class="section-group">';
        
        
        $count = 0;
         
        while ( $loop->have_posts() ) : $loop->the_post(); 
        
            $float = ( 0 == $count % 2 ) ? '' : 'float-right';
            
            if( 'course' == get_post_type() ) {
                get_course( $float );
            }
            else {
                get_retreat( $float );
            }
            
            $count++;
            
        endwhile;
        
        
        echo '</div>';
        
     endif;

    wp_reset_postdata();
      
}