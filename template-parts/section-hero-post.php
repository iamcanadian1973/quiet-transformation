<?php

/*
Hero
		
*/

section_hero();
function section_hero() {
    
    global $post;
    
     
    $attr = array( 'id' => 'hero', 'class' => 'section hero' );
    
    $prefix = 'hero';
    $prefix = set_field_prefix( $prefix );
      
    $background_image = get_the_post_thumbnail_url( get_the_ID(), 'hero' );
    
    if( !empty( $background_image ) ) {
        $attr['style'] = sprintf( 'background-image: url(%s);', $background_image );
        $attr['class'] .= ' background-image';
    }
     
    _s_section_open( $attr );
 
    _s_section_close();	   
        
}