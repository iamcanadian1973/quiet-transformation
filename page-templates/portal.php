<?php
/*
Template Name: Portal
*/

get_header(); ?>

<?php
// Hero
get_template_part( 'template-parts/section', 'hero' );
?>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">
	
	<?php
    // Intro
    get_template_part( 'template-parts/section', 'intro' );
    ?>
    
    <?php
    // Resources
    section_resources();
    function section_resources() {
                
        global $post;
        
        $resources = get_free_resources();
        
        if( empty( $resources ) ) {
            return;
        }
        
        $attr = array( 'class' => 'section resources' );
        
        _s_section_open( $attr );	
                
        printf( '<div class="column row"><h2 class="heading">Free Resources</h2>%s</div>', $resources );
        
        _s_section_close();	
    }
    ?>
	

	
    <?php
    // Courses and Retreats
    get_template_part( 'template-parts/section', 'courses-retreats' );
    
    // Articles
    get_template_part( 'template-parts/section', 'articles' );
    
    ?>
	</main>


</div>

<?php
get_footer();
