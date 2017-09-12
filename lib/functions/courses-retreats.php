<?php

function get_course( $float = '' ) {
            
    global $post;
    
    $attr = array( 'class' => 'section course flex' );
    
     
    $size = 'hero';
    $background = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), $size );
         
    if( !empty( $background ) ) {
        $attr['style'] = sprintf( 'background-image: url(%s);', $background[0] );
    }
    
    _s_section_open( $attr );		
                                        
        printf( '<div class="row"><div class="small-12 large-6 columns %s">', $float );
        
        $size = 'large';
        $image = _s_get_acf_image( get_post_thumbnail_id(), $size );
        
        if( !empty( $image ) ) {
            printf( '<div class="show-for-small-only">%s</div>', $image );
        }
        
        
        $description = get_field( 'description' );
        
        if( !empty( $description ) )
            $description = sprintf( '<h5><em>%s</em></h5>', $description );
            
        
        $button = '';
        $button_text = get_field( 'button_text' );
        $button_link = get_field( 'button_link' );
        
        if( !empty( $button_text ) && !empty( $button_link ) ) {
            $button = sprintf( '<p class="cta"><a href="%s" class="btn-primary">%s</a></p>', $button_link, $button_text );
        }
         
        printf( '<div class="entry-content">%s%s%s%s</div>', the_title('<h2>', '</h2>', false ), $description, apply_filters( 'the_content', get_the_content() ), $button );

        echo '</div></div>';
    
    _s_section_close();	
}



function get_retreat( $float = '' ) {
            
    global $post;
    
    $attr = array( 'class' => 'section retreat flex' );
    
    $size = 'hero';
    $background = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), $size );
         
    if( !empty( $background ) ) {
        $attr['style'] = sprintf( 'background-image: url(%s);', $background[0] );
    }
    
    _s_section_open( $attr );		
                                        
        printf( '<div class="row"><div class="small-12 large-6 columns %s">', $float );
            
        $size = 'large';
        $image = _s_get_acf_image( get_post_thumbnail_id(), $size );
        
        if( !empty( $image ) ) {
            printf( '<div class="show-for-small-only">%s</div>', $image );
        }
        
        
        $description = get_field( 'description' );
        
        if( !empty( $description ) ) {
            $description = sprintf( '<h5><em>%s</em></h5>', $description );
        }
        
        $heading_prefix = get_field( 'heading_prefix' );
        
        if( !empty( $heading_prefix ) ) {
            $heading_prefix = sprintf( '<p class="upcoming">%s</p>', $heading_prefix );
        }
        
        $button = '';
        $button_text = get_field( 'button_text' );
        $button_link = get_field( 'button_link' );
        
        if( !empty( $button_text ) && !empty( $button_link ) ) {
            $button = sprintf( '<p class="cta"><a href="%s" class="btn-primary">%s</a></p>', $button_link, $button_text );
        }
         
        printf( '<div class="entry-content">%s%s%s%s%s</div>', 
                $heading_prefix, the_title('<h2>', '</h2>', false ), $description, apply_filters( 'the_content', get_the_content() ), $button );

        echo '</div></div>';
    
    _s_section_close();	
}