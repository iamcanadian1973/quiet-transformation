<?php
// Articles
section_articles();
function section_articles() {
            
    global $post;
    
    $attr = array( 'class' => 'section articles' );
    
    _s_section_open( $attr );		
    
    $title = sprintf( '<h2 class="heading">%s</h2>', 'From the Blog' );

    $content = get_field( 'blog_intro' );
    
    if( !empty( $content ) ) {
        printf( '<div class="row"><div class="column large-10 text-center small-centered"><div class="entry-content">%s%s</div><hr /></div>', 
                $title,
                $content );
    }
    
    $category = get_field('category');
      
    get_blog_posts( $category );
    
    printf( '<div class="row column read-more">
                <a class="text-center" href="%s">Read all Articles on %s &raquo; </a>
            </div>', get_category_link( $category ), get_the_category_by_ID( $category ) );
    
    _s_section_close();	
}