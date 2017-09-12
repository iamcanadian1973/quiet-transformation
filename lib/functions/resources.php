<?php

function get_free_resources() {
 
    $data = '';
    
    $args = array(
        'post_type'      => 'resource',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
    );
    
 
    // Use $loop, a custom variable we made up, so it doesn't overwrite anything
    $loop = new WP_Query( $args );

    // have_posts() is a wrapper function for $wp_query->have_posts(). Since we
    // don't want to use $wp_query, use our custom variable instead.
    if ( $loop->have_posts() ) : 
        
        while ( $loop->have_posts() ) : $loop->the_post(); 
        
        $thumbnail_title = get_field( 'thumbnail_title' );
        
        if( !empty( $thumbnail_title ) ) {
            $thumbnail_title = _s_wrap_text( $thumbnail_title );
        }
        
        $thumbnail = '';
        
        if( has_post_thumbnail() ) {
            $thumbnail = sprintf( 'style="background-image: url(%s);"', get_the_post_thumbnail_url( get_the_ID(), 'medium' ) );
        }
               
        $thumbnail = sprintf( '<div class="thumbnail" %s>
                <div class="border"></div>
                <div class="text">
                    %s
                </div>
            </div>', $thumbnail, $thumbnail_title );
            
        $audio_file = get_field( 'audio_file' );
        
        if( !empty( $audio_file ) ) {
            $audio_file = do_shortcode( sprintf( '[audio src="%s"]', $audio_file ) );
        }
        
        $button = '';
        $button_text = get_field( 'button_text' );
        $button_link = get_field( 'button_link' );
        
        if( !empty( $button_text ) && !empty( $button_link ) ) {
            $button = sprintf( '<p class="cta"><a href="%s" class="btn-primary">%s</a></p>', $button_link, $button_text );
        }
            
        $data .= sprintf( '<div class="resource clearfix">%s<div class="resource-details"><h2>%s</h2>%s%s%s</div></div>', 
                          $thumbnail, 
                          get_the_title(), 
                          apply_filters( 'the_content', get_the_content() ),
                          $audio_file,
                          $button
                );    
            
        endwhile;
        
     endif;

    wp_reset_postdata();
    
    return $data;
    
}