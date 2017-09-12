<?php

/*
Hero
		
*/
	
// Hero
section_hero();
function section_hero() {
    global $post;
    
    $prefix = 'hero';
    $prefix = set_field_prefix( $prefix );
    
    $attr = array( 'id' => 'hero', 'class' => 'section hero' );

    $heading 		= get_field( sprintf( '%sheading', $prefix ) );
    $description	= get_field( sprintf( '%sdescription', $prefix ) );
    $background_image = get_post_meta( get_the_ID(), sprintf( '%sbackground_image', $prefix ), true );
    
    $style = '';
    $content = '';
    
    if( !empty( $background_image ) ) {
        $attachment_id = $background_image;
        $size = 'hero';
        $background = wp_get_attachment_image_src( $attachment_id, $size );
        $attr['style'] = sprintf( 'background-image: url(%s);', $background[0] );
    }
    
    
    if( !empty( $heading ) ) {
        $content .= sprintf( '<h1>%s</h1>', $heading );
    }
    
    
    if( !empty( $description ) ) {
        $description = _s_wrap_text( $description, "\n" );
        $content .= sprintf( '<p>%s</p>', $description );
    }
    
    if( !empty( $content ) ) {
        $attr['class'] .= ' with-heading';
    }
    
     
    _s_section_open( $attr );
            
        if( !empty( $content ) ) {
            
            $img = sprintf( '<img src="%shome/hero-butterfly.png" />', trailingslashit( THEME_IMG ) );
            
            print( '<div class="column row">' );

            printf( '<header class="entry-header">%s%s</header>', $img, $content );
            
            echo '</div>';
        }
        
 
    _s_section_close();	   
        
}