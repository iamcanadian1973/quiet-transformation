<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

<?php
get_template_part( 'template-parts/section', 'hero' );
?>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">    
        
		<?php
        // Default
        section_default();
        function section_default() {
                    
            global $post;
            
            $attr = array( 'class' => 'section intro' );
            
            _s_section_open( $attr );		
            
            print( '<div class="entry-content"><div class="row"><div class="large-10 columns small-centered  text-center">' );
            
            while ( have_posts() ) :
    
                the_post();
                
                the_content();
                    
            endwhile;
            
            print( '</div></div></div>' );
            _s_section_close();	
        }
        ?>
        
        <?php
        get_template_part( 'template-parts/section', 'courses-retreats' );
        ?>
        
        
		<?php
        // Default
        section_portals();
        function section_portals() {
                    
            global $post;
            
            $rows = get_field( 'portals' );
            
            if( empty( $rows ) ) {
                return;   
            }
            
            $attr = array( 'class' => 'section portals' );
            
            _s_section_open( $attr );		
            
            printf( '<div class="column row">
					<header class="entry-header text-center">
						<h2>%s</h2>
					</header>
				</div>', 'Choose Your Portal' );
                
            print( '<div class="entry-content"><div class="row small-up-1 large-up-2" data-equalizer data-equalize-on="medium">' );
             
            foreach( $rows as $row ) {
                printf( '<div class="column">%s</div>', get_portal( $row ) );
            }
             
            print( '</div></div>' );
            _s_section_close();	
        }
        
        // Get single portal from repeater
        function get_portal( $row ) {
            
            $heading       = _s_get_heading( $row['heading'], 'h3' );
            $description   = wpautop( $row['description'] );
            $link          = $row['link'];
            $background    = strtolower( $row['background'] );
            
            $class = 'arrow';   
            
            $button = 'Click Here'; 
            
            if( !empty( $link ) ) {
                $link = sprintf( '<p style="margin-bottom: 0;"><a href="%s" class="%s"><span class="screen-reader-text">%s</span></a></p>', $link, $class, $button );
            }
            
            return sprintf( '<div class="portal %s" data-equalizer-watch><div class="border"></div><div class="text">%s%s%s</div></div>', 
                    $background, $heading, $description, $link );
        }
        
        ?>
		
    
        <?php
        // Who
        section_who();
        function section_who() {
                    
            global $post;
            
            $attr = array( 'class' => 'section flex who-is-maria' );
             
            $prefix = 'who';
            $prefix = set_field_prefix( $prefix );
            
            $content 		= get_field( sprintf( '%scontent', $prefix ) );
            
            $button = '';
            $button_text = get_field( sprintf( '%sbutton_text', $prefix ) );
            $button_link = get_field( sprintf( '%sbutton_link', $prefix ) );
            
            if( !empty( $button_text ) && !empty( $button_link ) ) {
                $button = sprintf( '<p><a href="%s" class="btn-primary">%s</a></p<', $button_link, $button_text );
            }
            
            
            $attachment_id = get_field( sprintf( '%sphoto', $prefix ) );
            if( !empty( $attachment_id ) ) {
                  
                $size = 'hero';
                $background = wp_get_attachment_image_src( $attachment_id, $size );
                if( !empty( $background ) ) {
                    $attr['style'] = sprintf( 'background-image: url(%s);', $background[0] );
                }
                
                
                
                $size = 'large';
                $image = _s_get_acf_image( $attachment_id, $size );
                  
                if( !empty( $image ) ) {
                    $image = sprintf( '<div class="show-for-small-only">%s</div>', $image );
                }
            }
              
            _s_section_open( $attr );		
            
            echo '<div class="row"><div class="small-12 large-6 columns">';
            
            echo $image;
            
            printf( '<div class="entry-content">%s%s</div>', $content, $button );

            echo '</div></div>';
            
            _s_section_close();	
        }
        ?>


		<?php
        // Testimonials
        get_template_part( 'template-parts/section', 'testimonials' );
        ?>

	</main>
</div>
<?php
get_footer();
