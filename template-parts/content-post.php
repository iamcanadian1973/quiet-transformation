<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'column row' ); ?>>
	
	<?php
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
                              get_comments_link( $post->ID ), __( 'Leave a Comment', '_s' ) ) : '';
    
    $entry_meta = sprintf( '<div class="entry-meta">%s%s%s</div>', $post_date, $post_author, $post_comments );

    if( !is_single() ) {
          echo $post_image;
          
          printf( '<header class="entry-header">%s%s</header>', $post_title, $entry_meta );  
    }
    else {
        printf( '<header class="entry-header">%s%s</header>', the_title( '<h2 class="entry-title">', '</h2>', false ), $entry_meta );
    }
    
          
	?>
	
	<div class="entry-content">
	
		<?php 
		if( is_single() ) {
			
			the_content(); 
            
		} 
        else {
	
			_s_the_excerpt( '...', 'Read More &raquo;', 80 );
			
		}
		?>
		
	</div><!-- .entry-content -->

	<footer class="entry-footer">
        
        <?php 
        if( is_single() ) {
  			            
            printf( '<div class="column row"><h5 class="text-center">%s</h5>%s</div>', 
                    __( 'Like It? Share It!', '_s' ), _s_get_addtoany_share_icons() );
                    
            printf( '<div class="column row">%s %s | %s</div>', 
                    __( 'Posted In', '_s' ), 
                    _s_get_post_terms( get_the_ID() ),
                    get_comments_number( get_the_ID() )
                    
                    );
  		    
            echo '<hr />';	
		} 
        
        
        ?>
        
       
         
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
