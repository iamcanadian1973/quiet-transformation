<?php
 
/**
 * Create new CPT - Schedule
 */
 
class CPT_SCHEDULE extends CPT_Core {

    const POST_TYPE = 'yoga_schedule';
	const TEXTDOMAIN = '_s';
	
	/**
     * Register Custom Post Types. See documentation in CPT_Core, and in wp-includes/post.php
     */
    public function __construct() {

 		
		// Register this cpt
        // First parameter should be an array with Singular, Plural, and Registered name
        parent::__construct(
        
        	array(
				__( 'Week', self::TEXTDOMAIN ), // Singular
				__( 'Yoga Schedule', self::TEXTDOMAIN ), // Plural
				self::POST_TYPE // Registered name/slug
			),
			array( 
				'public'              => false,
				'publicly_queryable'  => false,
				'show_ui'             => true,
				'query_var'           => true,
				'capability_type'     => 'post',
				'has_archive'         => false,
				'hierarchical'        => false,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'show_in_nav_menus'   => false,
				'exclude_from_search' => true,
				'rewrite'             => false,
				'supports' => array( 'title', 'page-attributes', 'revisions' ),
				)

        );
		
        add_filter('pre_get_posts', array( $this, 'query_filter' ) );
		
     }
     
     
     /**
     * Registers admin columns to display. Hooked in via _s.
     * @since  0.1.0
     * @param  array  $columns Array of registered column names/labels
     * @return array           Modified array
     */
    public function columns( $columns ) {
        
	   $current_screen = get_current_screen();
        
 	   
	   if( $this->post_type != $current_screen->post_type )
			return;
		
		$new_column = array(
            'custom_date' => __( 'Date', '_s' ),
         );
        
  		
		unset( $columns['date'] ); 
		unset( $columns['post_type'] ); 
        return $columns;
        //return array_merge( $new_column, $columns );
        return array_slice( $columns, 0, 2, true ) + $new_column + array_slice( $columns, 1, null, true );
    }

    /**
     * Handles admin column display. Hooked in via _s.
     * @since  0.1.0
     * @param  array  $column Array of registered column names
     */
    public function columns_display( $column, $post_id ) {
        
		$current_screen = get_current_screen();
	   
	    if( $this->post_type != $current_screen->post_type )
			return;
		
		switch ( $column ) {
            case 'custom_date':
            $date = get_field( 'date');
            $date = DateTime::createFromFormat('Ymd', $date );
            echo $date->format('F j, Y');
			break;
        }
    }
	
	
	function query_filter($query) {
						
 		
		if ( $query->is_main_query() &&   'yoga_schedule' == $query->get('post_type') ) {
														
			//$date_now = date_i18n('Ymd'); // get date based on WP timezone setting
									
			//$query->set( 'meta_key', 'date' );
			//$query->set( 'meta_type', 'DATE' );
			
			// Order By
			$query->set( 'orderby', 'menu_order' );
			
			if( is_admin() ) {
				$query->set( 'order', 'DESC' );
			}
			else {
				$query->set( 'order', 'ASC' );	
			}
 						
		}
			
		return $query;
	}
	 
	 
 
}

new CPT_SCHEDULE();