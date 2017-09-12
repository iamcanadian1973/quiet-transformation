<?php
// Yoga Template functions

function get_yoga_schedule() {
 
    $data = '';
    
    $args = array(
        'post_type'      => 'yoga_schedule',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
    );
    
    $weeks = get_field('weeks');
        
    if( !empty( $weeks ) ) {
        $args['post__in'] = $weeks;
        $args['orderby'] = 'post__in';
    }
    
 
    // Use $loop, a custom variable we made up, so it doesn't overwrite anything
    $loop = new WP_Query( $args );

    // have_posts() is a wrapper function for $wp_query->have_posts(). Since we
    // don't want to use $wp_query, use our custom variable instead.
    if ( $loop->have_posts() ) : 
        
        $table = new CI_Table();
        
        
        
        while ( $loop->have_posts() ) : $loop->the_post(); 
            
            $rows = get_field( 'schedule' );
            
            if( empty( $rows ) ) {
                continue;
            }
            
            $i = 0;
            
            foreach( $rows as $row ) {
                
                
                
                $day = $row['day'];
                
                $classes = $row['classes'];
                
                if( empty( $classes ) ) {
                    continue;
                }
                
                $cell = array();
                $cell[] = array( 'data' => $day, 'class' => 'th' );
                $cell[] = array( 'data' => 'Class', 'class' => 'th' );
                $cell[] = array( 'data' => 'Instructor', 'class' => 'th' );
                
                $table->add_row( $cell );
                
                foreach( $classes as $entry ) {
                    
                    $td = (++$i % 2 == 0 ) ? 'even' : 'odd';
                    
                    $time = $entry['time'];
                    $class_id = $entry['class'];
                    $class = $entry['class_optional_text'];
                    $instructor_id = $entry['instructor'];
                    
                    if( !empty( $class_id ) ) {
                        $class = get_the_title( $class_id );
                    }
                    
                    if( !empty( $instructor_id ) ) {
                        $instructor = get_the_title( $instructor_id );
                    }
                    
                    $cell = array();
                    $cell[] = array( 'data' => $time, 'class' => $td );
                    $cell[] = array( 'data' => $class, 'class' => $td );
                    $cell[] = array( 'data' => $instructor, 'class' => $td );
                    
                    $table->add_row( $cell );
                     
                }
                 
            }
            
            $template = array(
                    'table_open' => '<table class="">'
            );
            
            $table->set_template( $template );
            
            $data .= sprintf( '<div class="week">%s%s</div>', the_title( '<h3>', '</h3>', false ), $table->generate() );

        endwhile;
        
     endif;

    wp_reset_postdata();
    
    return $data;
    
}


function get_yoga_classes() {
 
    $data = '';
    
    $args = array(
        'post_type'      => 'yoga_class',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
    );
    
    $yoga_classes = get_field('yoga_classes');
        
    if( !empty( $yoga_classes ) ) {
        $args['post__in'] = $yoga_classes;
        $args['orderby'] = 'post__in';
    }
    
 
    // Use $loop, a custom variable we made up, so it doesn't overwrite anything
    $loop = new WP_Query( $args );

    // have_posts() is a wrapper function for $wp_query->have_posts(). Since we
    // don't want to use $wp_query, use our custom variable instead.
    if ( $loop->have_posts() ) : 
        
        while ( $loop->have_posts() ) : $loop->the_post(); 
            
        $data .= sprintf( '<h5>%s</h5>%s', get_the_title(), apply_filters( 'the_content', get_the_content() ) );    
            
        endwhile;
        
     endif;

    wp_reset_postdata();
    
    return $data;
    
}


function get_teachers() {
 
    $data = '';
    
    $args = array(
        'post_type'      => 'teacher',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
    );
    
    $yoga_teachers = get_field('yoga_teachers');
        
    if( !empty( $yoga_teachers ) ) {
        $args['post__in'] = $yoga_teachers;
        $args['orderby'] = 'post__in';
    }
    
 
    // Use $loop, a custom variable we made up, so it doesn't overwrite anything
    $loop = new WP_Query( $args );

    // have_posts() is a wrapper function for $wp_query->have_posts(). Since we
    // don't want to use $wp_query, use our custom variable instead.
    if ( $loop->have_posts() ) : 
        
        while ( $loop->have_posts() ) : $loop->the_post(); 
            
        $data .= sprintf( '<h5>%s</h5>%s', get_the_title(), apply_filters( 'the_content', get_the_content() ) );    
            
        endwhile;
        
     endif;

    wp_reset_postdata();
    
    return $data;
    
}



function get_testimonials() {
 
    $data = '';
    
    $args = array(
        'post_type'      => 'testimonial',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
    );
    
    $testimonials = get_field('testimonials');
        
    if( empty( $testimonials ) ) {
        return false;
    }
    
    $args['post__in'] = $testimonials;
    $args['orderby'] = 'post__in';
    
    // Use $loop, a custom variable we made up, so it doesn't overwrite anything
    $loop = new WP_Query( $args );

    // have_posts() is a wrapper function for $wp_query->have_posts(). Since we
    // don't want to use $wp_query, use our custom variable instead.
    if ( $loop->have_posts() ) : 
        
        while ( $loop->have_posts() ) : $loop->the_post(); 
           
            $data .= '<div class="quote">';
            
            if( has_post_thumbnail() ) {
                $data .= sprintf( '<div class="thumbnail"><div class="circle">%s</div></div>', 
                get_the_post_thumbnail( get_the_ID(), 'testimonial-thumbnail', array( 'class' => 'float-center client' ) ) );
            }
          
            $data .= apply_filters( 'the_content', get_the_content() );
            $data .= the_title( '<p><em>- ', '</em></p>', false );
            
            $data .= sprintf( '<img src="%shome/butterfly.png" class="float-center butterfly"/>', trailingslashit( THEME_IMG ) );
            
            $data .= '</div>';
            
        endwhile;
        
     endif;

    wp_reset_postdata();
    
    return $data;
      
}




