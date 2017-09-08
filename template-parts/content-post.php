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
    
    $post_title = sprintf( '<h3 class="entry-title"><a href="%s">%s</a></h3>', get_permalink(), get_the_title() );
    
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
	?>
	
	<div class="entry-content">
	
		<?php 
		if( is_single() ) {
			
			the_content(); 
			
		} else {
	
			_s_the_excerpt( '...', 'Read More &raquo;', 80 );
			
			//printf( '<p class="read-more"><a href="%s" class="more">%s ></a></p>', get_permalink(), __( 'Continue Reading', '_s' ) ) ;
		}
		?>
		
	</div><!-- .entry-content -->

	<footer class="entry-footer">
        
        <?php 
        if( is_single() ) {
  			
            printf( '<h4 class="text-left">%s</h4>', __( 'Share This:', '_s' ) );
            
            printf( '<div class="column row">%s<div class="a2a_kit a2a_default_style facebook-like"><a class="a2a_button_facebook_like"></a></div></div>', _s_get_addtoany_share_icons() );
  			
		} 
        
        ?>
        
         
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
