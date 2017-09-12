<?php


add_shortcode( 'social-icons', '_s_get_social_icons' );
 
/**
 * Echo social icons with SVG.
 */
function _s_get_social_icons( $profiles = array() ) { 

	if( !is_array( $profiles ) || empty( array_filter( $profiles ) ) ) {
		
        // defaults
        $profiles = array( 
              'twitter' => get_field( 'twitter', 'options' ),
              'facebook' => get_field( 'facebook', 'options' ),
              'instagram' => get_field( 'instagram', 'options' ),
              
        );
  	}
    
    $profiles = array_filter( $profiles );
 	
	$out = '';
	
	foreach( $profiles as $type => $url ) {
		
        $svg = get_svg( $type );
        
        if( !empty( $svg ) ) {
			$out .= sprintf( '<li class="social-icon"><a href="%s" title="%s">%s</a></li>', $url, ucwords( $type ), $svg );
		}
	}
	
	return sprintf( '<ul class="social-icons">%s</ul>', $out );

 }
 
 
 function _s_do_social_icons( $profiles = array() ) { 
	if( !empty( $profiles ) ) {
		echo _s_get_social_icons( $profiles );
	}
	
 }