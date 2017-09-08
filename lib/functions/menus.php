<?php

function nav_replace_wpse_189788($item_output, $item) {
  //   var_dump($item_output, $item);
  if ( in_array( 'logo', $item->classes ) ) { 
    $site_url = home_url();
    return sprintf('<a href="%s" title="%s"><img src="%s" alt="%s"/></a>',
				    $site_url, get_bloginfo( 'name' ), THEME_IMG .'/logo.png', get_bloginfo( 'name' ) );
  }
  return $item_output;
}
add_filter('walker_nav_menu_start_el','nav_replace_wpse_189788',10,2);



// remove parent class from homepage - used for single page scroll menus
function clear_nav_menu_item_class($classes, $item, $args) {
    	
	if( is_front_page() && ( $args->theme_location == 'primary' ) ) {
		$classes = array_filter($classes, "remove_parent_classes");
	}
	
	return $classes;
}

//add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);


// Filter menu items as needed and set a custom class etc....
function set_current_menu_class($classes) {
	global $post;
	
	/*
	if( _s_is_page_template_name( 'find-an-agent' ) || is_post_type_archive( 'agent' ) || is_singular( 'agent' ) ) {
		
		$classes = array_filter($classes, "remove_parent_classes");
		
		if ( in_array('menu-item-206', $classes ) )
			$classes[] = 'current-menu-item';
	}
	*/
			
	return $classes;
}

//add_filter('nav_menu_css_class', 'set_current_menu_class',1,2); 


// check for current page classes, return false if they exist.
function remove_parent_classes($class){
  return in_array( $class, array( 'current_page_item', 'current_page_parent', 'current_page_ancestor', 'current-menu-item' ) )  ? FALSE : TRUE;
}



function _s_is_page_template_name( $template_name ) {
	
	if( is_page() ) {
		$template_found = str_replace( '.php', '', basename( get_page_template_slug( get_queried_object_id() ) ) );
		return $template_name === $template_found ? true : false;
	}
	
}
