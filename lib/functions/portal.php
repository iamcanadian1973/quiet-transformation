<?php

function get_blog_posts( $category ) {
 
         
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 4,
        'post_status'    => 'publish',
    );
    
    if( empty( $category ) ) {
        return false;
    }
    
    
    $args['tax_query'] = array(
        array(
        'taxonomy' => 'category',
        'field' => 'id',
        'terms' => array( $category )
         )
      );
      
     
    // Use $loop, a custom variable we made up, so it doesn't overwrite anything
    $loop = new WP_Query( $args );

    // have_posts() is a wrapper function for $wp_query->have_posts(). Since we
    // don't want to use $wp_query, use our custom variable instead.
    if ( $loop->have_posts() ) : 
        
        print( '<div class="row small-up-1 large-up-2">' );
        
        while ( $loop->have_posts() ) : $loop->the_post(); 
        
            $post_image = get_the_post_thumbnail( get_the_ID(), 'large' );

            if( !empty( $post_image ) ) {
                $post_image = sprintf( '<a href="%s">%s</a>', get_permalink(), $post_image );
            }
            
            $post_title = sprintf( '<h2 class="entry-title"><a href="%s">%s</a></h2>', get_permalink(), get_the_title() );
            
            $post_date = _s_get_posted_on();
            
            $author_id = get_the_author_meta('ID');
            $display_name = get_the_author_meta('display_name', $author_id );
            $author_url = get_author_posts_url( $author_id ); 
            $post_author =  sprintf( '<span class="post-author">By <a href="%s">%s</a></span>',$author_url, $display_name );
            
            $post_comments = comments_open() ? sprintf( '<span class="post-comments-link">- <a href="%s">%s</a></span>', 
                                      get_comments_link( get_the_ID() ), __( 'Leave a Comment', '_s' ) ) : '';
            
            $entry_meta = sprintf( '<div class="entry-meta">%s%s%s</div>', $post_date, $post_author, $post_comments );
            
            $excerpt = _s_get_the_excerpt( '...', 'Read More &raquo;', 80 );
             
            printf( '<div class="column"><article class="post">%s<header class="entry-header">%s%s</header>%s</article></div>', 
                    $post_image, $post_title, $entry_meta, $excerpt );
            
        endwhile;
        
        echo '</div>';
        
     endif;

    wp_reset_postdata();
              
}