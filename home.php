<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

<?php
// Hero
$args = array(
	'post_type'      => 'page',
	'p'				 => get_option('page_for_posts'),
	'posts_per_page' => 1,
	'post_status'    => 'publish'
);

// Use $loop, a custom variable we made up, so it doesn't overwrite anything
$loop = new WP_Query( $args );

// have_posts() is a wrapper function for $wp_query->have_posts(). Since we
// don't want to use $wp_query, use our custom variable instead.
if ( $loop->have_posts() ) : 
	while ( $loop->have_posts() ) : $loop->the_post(); 
	
		get_template_part( 'template-parts/section', 'hero' );
 
	endwhile;
endif;

// We only need to reset the $post variable. If we overwrote $wp_query,
// we'd need to use wp_reset_query() which does both.
wp_reset_postdata();

?>


    
<div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">
        
        
        <?php
        // Default
        section_default();
        function section_default() {
                    
            global $post;
            
            $args = array(
                'post_type'      => 'page',
                'p'				 => get_option('page_for_posts'),
                'posts_per_page' => 1,
                'post_status'    => 'publish'
            );
            
            // Use $loop, a custom variable we made up, so it doesn't overwrite anything
            $loop = new WP_Query( $args );
            
            // have_posts() is a wrapper function for $wp_query->have_posts(). Since we
            // don't want to use $wp_query, use our custom variable instead.
            if ( $loop->have_posts() ) : 
                
                $attr = array( 'class' => 'section intro' );
            
                _s_section_open( $attr );		
                
                print( '<div class="row"><div class="large-10 columns text-center small-centered"><div class="entry-content">' );
                
                while ( $loop->have_posts() ) : $loop->the_post(); 
                
                     the_title( '<h1>', '</h1>' );
                     
                     the_content();
                     
                 endwhile;
            
                print( '</div></div></div>' );
                
                echo '<hr class="ruler" />';
                
                _s_section_close();	
                
            endif;
            
            wp_reset_postdata();
            
             
        }
        ?>
        
        
        <?php
         
        if ( have_posts() ) : ?>

           <div class="row"><div class="large-8 columns text-center small-centered">

           <?php
            while ( have_posts() ) :

                the_post();

                get_template_part( 'template-parts/content', 'post' );

            endwhile;
            
            the_posts_navigation();
            
            ?>
            </div></div>
            <?php
            
        else :

            get_template_part( 'template-parts/content', 'none' );

        endif; ?>

    </main>

</div>
    

<?php
get_footer();
