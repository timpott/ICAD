<?php

$color = array('#cfa2f3', '#00ffdc', '#ffa2a0');

$post_objects = get_sub_field('content_type');
	if($post_objects):
		$counter = count($post_objects);	
		
		echo '<div class="flex-module ';
		if ( $counter > 2 ) { echo '2-col-slider';}
		echo '">';
		echo 	'<div class="row">';
		
		foreach( $post_objects as $post_object):
		// Global Vars
		$flex_title = get_the_title($post_object->ID);
		$flex_link = get_the_permalink($post_object->ID);
		$choose_color = array_rand($color);
								
/*
			// Dev
			echo '<pre>';
				print_r($post_object);
			echo '</pre>';
*/								
		// Loop
		if($post_object->post_type == 'event') {
																
		// Event Vars
		$flex_event_date = get_field('opening_date', $post_object->ID);
		$flex_event_image = get_field('event_image', $post_object->ID);
									
		echo '<div class="col-lg-8">';
																	
			$flex_size = 'box-size';
			echo '<div class="img-wrapper">';
			echo 	wp_get_attachment_image( $flex_event_image, $flex_size);
			echo '</div>';
									
			echo 	'<div class="box-meta">';
			echo    	'<small>Upcoming Event</small>';
			echo        '<h4><a style="color:' . $color[$choose_color] . '" href="' . $flex_link . '">' . $flex_title . '</a></h4>';
			echo        '<p>' . $flex_event_date . '</p>';
			echo        '<a class="more white" href="' . $flex_link . '">Find Out More</a>';
			echo    '</div>';
											
			echo '</div>';
								
		}
								
		if($post_object->post_type == 'page') {

			$flex_page_excerpt = $post_object->post_excerpt;
									
			echo '<div class="col-lg-8">';
															
				$flex_size3 = 'box-size';
				echo '<div class="img-wrapper">';
					
				if(have_rows('flexible_content', $post_object->ID )):
					while ( have_rows('flexible_content', $post_object->ID) ) : the_row();	
						
						if(get_row_layout() == 'hero_image'):
							$flex_page_image = get_sub_field('hero_image_f01', $post_object->ID);
							echo 	wp_get_attachment_image( $flex_page_image, $flex_size3);
							echo '</div>';
						endif;
						
					endwhile;
				endif;
											
				echo 	'<div class="box-meta">';
				echo        '<h4><a href="' . $flex_link . '">' . $flex_title . '</a></h4>';
				echo        '<p>' . $flex_page_excerpt . '</p>';
				echo        '<a class="more white" href="' . $flex_link . '">Find Out More</a>';
				echo    '</div>';
													
		echo '</div>';				
		}
								
		if($post_object->post_type == 'upstart') {
									
			// Upstart Vars
			$flex_profile_photo = get_field('profile_photo', $post_object->ID);
			$flex_profile_role = get_field('role', $post_object->ID);
										
			echo '<div class="col-lg-8">';
																
			$flex_size2 = 'box-size';
			echo '<div class="img-wrapper">';
			echo 	wp_get_attachment_image( $flex_profile_photo, $flex_size2);
			echo '</div>';
									
			echo 	'<div class="box-meta">';
			echo    	'<small>Featured</small>';
			echo        '<h4><a href="' . $flex_link . '">' . $flex_title . '</a></h4>';
			echo        '<p>' . $flex_profile_role . '</p>';
			echo        '<a class="more white" href="' . $flex_link . '">Find Out More</a>';
			echo    '</div>';
											
			echo '</div>';
									
		}			
		endforeach;
	echo '</div>';
echo '</div>';
				
endif;
?>