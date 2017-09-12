<?php

$events = tribe_get_events( array(
                               'eventDisplay' => 'custom',
                               'posts_per_page' => -1,
                               //'tribe_events_cat' => 'pain-management' 
                               ) 
                            );
     
                           // The result set may be empty
                           if ( empty( $events ) ) {
                               //return false;
                           }
                           
                           foreach( $events as $event ) {
                                echo get_single_event( $event );                            
                           } 
                           
                           wp_reset_postdata();
                           
                           function get_single_event( $event ) {
                                
                                setup_postdata( $event );
                                
                                $thumbnail = get_the_post_thumbnail( $event );
                               
                                return sprintf( '<div class="event clearfix">%s<div class="event-details"><h3>%s</h3>%s%s%s</div></div>', 
                                                $thumbnail,
                                                get_the_title( $event ),
                                                tribe_get_start_date( $event ),
                                                tribe_get_venue( $event ),
                                                get_the_excerpt( $event )   
                                
                                );
                           }