<?php 
	
	// Display Page Title
	$page_title = get_the_title();
	echo '<div class="title-wrapper">';
	echo 	'<h1 class="page-title">' . $page_title . '</h1>';
	
	// Flexible Content Loop
	if(have_rows('flexible_content')):
		// loop through the rows of data
		while ( have_rows('flexible_content') ) : the_row();
		
			if(get_row_layout() == 'sub_title'):
				$sub_title = get_sub_field('sub_title_f01');
				echo 	'<p class="sub-title">' . $sub_title . '</p>';
				echo '</div>'; // title-wrapper close
				
			elseif(get_row_layout() == 'hero_introduction'):	
				$introduction_text = get_sub_field('hero_introduction_f01');
				echo '<h3 class="intro-text">' . $introduction_text . '</h3>';
				
			elseif(get_row_layout() == 'hero_image'):
				$hero_image = get_sub_field('hero_image_f01');
				if( !empty($hero_image)): 	
					echo wp_get_attachment_image($hero_image);
				endif;
				
			elseif(get_row_layout() == 'hero_slider'):
				if( have_rows('slides')):
					echo '<ul class="hero-slider">';
					while (have_rows('slides')) : the_row();
						$slide_image = get_sub_field('slide');
							
						echo '<li><img class="loader full-width" data-src="' . $slide_image['url'] . '" alt="' . $slide_image['alt'] . '" /></li>';
					endwhile;
						
					echo '</ul>';
				endif;
				
			elseif(get_row_layout() == 'call_to_action'):
				$link_url = get_sub_field('link_f01');
				$text_url = get_sub_field('text_f01');
				echo '<a class="btn-icad-small" href="' . $link_url . '">' . $text_url . '</a>';
				
			elseif(get_row_layout() == 'key_dates'):
				$key_title = get_sub_field('key_date_header');
				
				echo '<div class="key-date-module">';
				echo 	'<h3>' . $key_title . '</h3>';
				echo 	'<div class="row">';
				
				if(have_rows('key_dates_f01')):
			    	while ( have_rows('key_dates_f01') ) : the_row();
			    	$key_date = get_sub_field('date');
			    	$key_date_title = get_sub_field('title');
			    	$key_date_content = get_sub_field('content');
					
					echo 	'<div class="inner">';
			    	echo 		'<div class="col-lg-6">';
			    	echo 			'<small>' . $key_date . '</small>';
			    	echo    		'<h4>' . $key_date_title . '</h4>';
			    	echo 		'</div>';
			    	
			    	echo    	'<div class="col-lg-10">';
			    	echo 			'<p>' . $key_date_content . '</p>';
			    	echo 		'</div>';
			    	echo 	'</div>';
			    	
					endwhile;
				endif;
				
 				echo 	'</div>';
				echo '</div>';
				
			elseif(get_row_layout() == 'faq'):
				$faq_title = get_sub_field('faq_title');
				
				echo '<div class="faq-module">';
				echo 	'<h3>' . $faq_title . '</h3>';

				
				if(have_rows('faqs')):
			    	while ( have_rows('faqs') ) : the_row();
			    	$faq_title = get_sub_field('heading');
			    	$faq_content = get_sub_field('content');
					
					echo 	'<div class="inner">';
			    	echo 		'<h4>' . $faq_title . '</h4>';		
			    	echo 		'<p>' . $faq_content . '</p>';
			    	echo 	'</div>';
			    	
					endwhile;
				endif;

				echo '</div>';
				
			elseif(get_row_layout() == 'upstarts'):
				echo get_template_part('loop', 'upstarts');
			
			elseif(get_row_layout() == 'alumni'):
				echo get_template_part('loop', 'alumni');
				
			elseif(get_row_layout() == 'content_block'):
				$content_block = get_sub_field('content', false, false);
				
				echo '<div class="page-content">';
				echo $content_block;
				echo '</div>';
				
			elseif(get_row_layout() == 'tabs'):
				if(have_rows('tab')):
					$i = 1;
					$x = 1;
					echo '<ul class="nav nav-tabs">';	
								
			    	while ( have_rows('tab') ) : the_row();
			    	
				    	$tab_title = get_sub_field('tab_title');
						
						echo 	'<li ';
						if ( $i == 1 ) { echo 'class="active"';}
						echo 		'><a data-toggle="tab" href="#tab'. $i .'">' . $tab_title . '</a>';
						echo 	'</li>';
						
						$i++;
				    	endwhile;
			    	
			    	echo '</ul>';
			    	
			    	echo '<div class="tab-content">';
			    	
			    	while ( have_rows('tab') ) : the_row();
			    	$tab_content = get_sub_field('tab_content');
			    	
				    	echo 	'<div id="tab' . $x . '" class="tab-pane fade in ';
				    	if ( $x == 1 ) { echo 'active';} 
				    	echo 	'">';
				    	echo 	$tab_content;
				    	echo 	'</div>';
				    
				    $x++;
				    endwhile;
				    
				    echo '</div>';
			   
			    endif;
			    
			elseif(get_row_layout() == '2_columns'):
				$post_objects = get_sub_field('content_type');
				if($post_objects):
					echo '<div class="flex-module">';
						echo '<div class="row">';
							foreach( $post_objects as $post_object):	
								// Global Vars
								$flex_title = get_the_title($post_object->ID);
								$flex_link = get_the_permalink($post_object->ID);
								
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
									
									if( !empty($flex_event_image)): 								
										$flex_size = 'box-size';
										echo '<div class="img-wrapper">';
										echo 	wp_get_attachment_image( $flex_event_image, $flex_size);
										echo '</div>';
									endif;
									
									echo 	'<div class="box-meta">';
									echo    	'<small>Upcoming Event</small>';
									echo        '<h4><a href="' . $flex_link . '">' . $flex_title . '</a></h4>';
									echo        '<p>' . $flex_event_date . '</p>';
									echo        '<a href="' . $flex_link . '">Find Out More</a>';
									echo    '</div>';
											
									echo '</div>';
								
								}
								
								if($post_object->post_type == 'page') {
									
								}
								
								if($post_object->post_type == 'upstart') {
									
									// Upstart Vars
									$flex_profile_photo = get_field('profile_photo', $post_object->ID);
									$flex_profile_role = get_field('role', $post_object->ID);
									
									echo '<div class="col-lg-8">';
									
									if( !empty($flex_profile_photo)): 								
										$flex_size2 = 'box-size';
										echo '<div class="img-wrapper">';
										echo 	wp_get_attachment_image( $flex_profile_photo, $flex_size2);
										echo '</div>';
									endif;
									
									echo 	'<div class="box-meta">';
									echo    	'<small>Featured</small>';
									echo        '<h4><a href="' . $flex_link . '">' . $flex_title . '</a></h4>';
									echo        '<p>' . $flex_profile_role . '</p>';
									echo        '<a href="' . $flex_link . '">Find Out More</a>';
									echo    '</div>';
											
									echo '</div>';
									
								}
								
							endforeach;
						echo '</div>';
					echo '</div>';
				
				endif;
				
			endif;
			
		endwhile;
		
		else:
		// No layouts found
	endif;
	
?>
