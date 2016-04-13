<?php 
	
	get_header();
	
	echo '<main class="home" role="main">';
	echo 	'<div class="row position">';
	echo 		'<div class="col-lg-5">';
	echo 			'<div class="home-intro">';
						if(get_field('home_lead', 'option')) {	
							echo '<h4>' . get_field('home_lead', 'option') . '</h4>';
						} else {
							// Empty Case
						}
							
						if(get_field('home_lead_link', 'option')) {	
							echo '<p><a class="btn-icad-large" href="' . get_field('home_lead_link', 'option') . '">' . get_field('home_lead_cta', 'option') . '</a></p>'; 
						} else {
							// Empty Case
						}
	echo 			'</div>';
	echo 		'</div>';
	
	if( have_rows('home_slider', 'option') ):
		echo '<div class="col-lg-11">';
		echo 	'<div class="home-img-wrapper">';
		echo 		'<div class="home-slider-img">';
						while ( have_rows('home_slider', 'option') ) : the_row();	
							// Vars
							$slide_image = get_sub_field('slide_image', 'option');
							
							// Resizing
							$slide_size = 'home-slider-size';
							
							echo '<div class="slide-img">';
							echo wp_get_attachment_image( $slide_image, $slide_size);
							echo '</div>';
							
						endwhile;
		echo        '</div>';
	    echo 	'</div>';
		echo '</div>';
	
	endif;
	
	echo 	'</div>';
	echo '</div>'; // Container
	
	
	if( have_rows('home_slider', 'option') ):
	
		echo 	'<div class="home-slider-wrapper">';
		echo 		'<div class="container">';
		echo 			'<div class="row">';
		echo 				'<div class="home-slider">';
								while ( have_rows('home_slider', 'option') ) : the_row();
									// Vars
									$slide_title = get_sub_field('slide_title', 'option');
									$slide_text = get_sub_field('slide_text', 'option');
									$slide_link = get_sub_field('slide_link', 'option');
									$slide_image = get_sub_field('slide_image', 'option');
									
									echo '<div class="slide">';
									echo 	'<div class="col-lg-5">';
									echo 		'<h3>' . $slide_title . '</h3>';
									echo 		'<p>' . $slide_text . '</p>';
									echo 		'<a class="more white" href="' . $slide_link . '">Find our more</a>';
									echo 	'</div>';

									echo '</div>';					
								endwhile;
								
		echo   				'</div>';			
		echo 			'</div>';
		echo 		'</div>';
		echo 	'</div>';
		
	endif;
		
	echo 	'<div class="container">';
	
	if( have_rows('quick_links', 'option') ):
		echo '<div class="quick-links">';
		echo 	'<div class="row">';
		echo 		'<div class="col-lg-4">';
		echo 			'<div class="home-box tw-icon">';
		echo 				'<p>RT @weloveoffset Oct 15 Student Day Passes available for OFFSET London. Nov 13th see @mcbeess @vincefrost @MoragMyerscough @TLPLondonPolic + more ONLY £60!</p>';
		echo 			'</div>';
		echo        '</div>';
   	 	while ( have_rows('quick_links', 'option') ) : the_row();
   	 		// Vars
   	 		$quick_image = get_sub_field('quick_link', 'option');
   	 		
   	 		$quick_image_size = 'quick-links';
   	 		
   	 		echo '<div class="col-lg-4">';
   	 		echo 	'<div class="home-box">';
   	 		echo 	wp_get_attachment_image( $quick_image, $quick_image_size);
   	 		echo 	'</div>';
   	 		echo '</div>';

		endwhile;
		
		echo '</div>';
		echo '</div>';
	else :
    // no rows found
    
	endif;
		
	$post_objects = get_field('foster', 'option');
		if($post_objects):
			$counter = count($post_objects);
			$counter = $counter + 1;
			
			// Vars
			$foster_title = get_field('foster_title', 'option');
			$foster_text = get_field('foster_blurb', 'option');
			$foster_link = get_field('foster_link', 'option');
			
			echo '<div class="block module-1 ';
			if ( $counter > 3 ) { echo '3-col-slider';}
			echo  '">';
			echo 	'<div class="row">';
			echo 		'<div class="col-lg-5">';
			echo        	'<div class="img-wrapper">';
			echo 				'<h2>' . $foster_title . '</h2>';
			echo            '</div>';
			echo            '<div class="box-meta static">';
			echo 				'<p>' . $foster_text . '</p>';
			echo 				'<a class="more white" href=" ' . $foster_link . '">Meaningful Link</a>';
			echo            '</div>';
			echo        '</div>';
				
			foreach( $post_objects as $post_object):
				//Vars
				$title = get_the_title($post_object->ID);
				$date = get_the_date('d.m.y', $post_object->ID);
				$url = get_permalink($post_object->ID);
				
				echo '<div class="col-lg-5">';
				echo 	'<div class="img-wrapper">';
				
					if($post_object->post_type == 'page') {
						if(have_rows('flexible_content', $post_object->ID )):
							while ( have_rows('flexible_content', $post_object->ID) ) : the_row();	
						
								if(get_row_layout() == 'hero_image'):
									$flex_page_image = get_sub_field('hero_image_f01', $post_object->ID);
									$flex_size3 = 'box-size';
									echo 	wp_get_attachment_image( $flex_page_image, $flex_size3);
								endif;
						
							endwhile;
						endif;
					}
				
					if($post_object->post_type == 'upstart') {
						$profile_photo = get_field('profile_photo', $post_object->ID);
						$flex_size2 = 'box-size';
						echo 	wp_get_attachment_image( $profile_photo, $flex_size2);
					}
				
					if($post_object->post_type == 'event') {
						$flex_event_image = get_field('event_image', $post_object->ID);
						$flex_size = 'box-size';
						echo wp_get_attachment_image( $flex_event_image, $flex_size);
					}
				echo  	'</div>';
				echo     '<div class="box-meta">';
				
			    if($post_object->post_type == 'upstart') {
				echo      	'<small>Member Profile</small>';
				} else {
				echo		'<small>'. $date .'</small>';
				}
				
				echo        '<span> - </span>';
				echo 	    '<h3>' . $title . '</h3>';
				echo        '<a class="more white" href="' . $url . '">More</a>';		
				echo     '</div>';
				echo '</div>';
					
			endforeach;
				
			echo 	'</div>';
			echo '</div>';
					
		endif;
		
	$post_objects = get_field('promote', 'option');
		if($post_objects):
			$counter = count($post_objects);
			$counter = $counter + 1;
			
			$promote_title = get_field('promote_title', 'option');
			$promote_text = get_field('promote_text', 'option');
			$promote_link = get_field('promote_link', 'option');
			
			echo '<div class="block module-2 ';
			if ( $counter > 3 ) { echo '3-col-slider';}
			echo  '">';
			echo 	'<div class="row">';
			echo 		'<div class="col-lg-5">';
			echo        	'<div class="img-wrapper">';
			echo 				'<h2>' . $promote_title . '</h2>';
			echo            '</div>';
			echo            '<div class="box-meta static">';
			echo 				'<p>' . $promote_text . '</p>';
			echo 				'<a class="more white" href="' . $promote_link . ' ">Meaningful Link</a>';
			echo            '</div>';
			echo        '</div>';
				
			foreach( $post_objects as $post_object):
				//Vars
				$title = get_the_title($post_object->ID);
				$date = get_the_date('d.m.y', $post_object->ID);
				$url = get_permalink($post_object->ID);
				$image = get_sub_field($post_object->ID);
					
				echo '<div class="col-lg-5">';
				echo 	'<div class="img-wrapper">';
				
					if($post_object->post_type == 'page') {
						if(have_rows('flexible_content', $post_object->ID )):
							while ( have_rows('flexible_content', $post_object->ID) ) : the_row();	
						
								if(get_row_layout() == 'hero_image'):
									$flex_page_image = get_sub_field('hero_image_f01', $post_object->ID);
									$flex_size3 = 'box-size';
									echo 	wp_get_attachment_image( $flex_page_image, $flex_size3);
								endif;
						
							endwhile;
						endif;
					}
				
					if($post_object->post_type == 'upstart') {
						$profile_photo = get_field('profile_photo', $post_object->ID);
						$flex_size2 = 'box-size';
						echo 	wp_get_attachment_image( $profile_photo, $flex_size2);
					}
				
					if($post_object->post_type == 'event') {
						$flex_event_image = get_field('event_image', $post_object->ID);
						$flex_size = 'box-size';
						echo wp_get_attachment_image( $flex_event_image, $flex_size);
					}
				echo  	 '</div>';				
				echo     '<div class="box-meta">';
				if($post_object->post_type == 'event') {
				echo      	'<small>Upcoming Event</small>';
				echo		'<small>'. $date .'</small>';
				} else {
				echo 		'<small>' . $title . '</small>';
				}
				echo        '<span> - </span>';
				echo 	    '<h3>' . $title . '</h3>';
				echo        '<a class="more white" href="' . $url . '">More</a>';		
				echo     '</div>';
				echo '</div>';
					
			endforeach;
				
			echo 	'</div>';
			echo '</div>';
					
		endif;
	
	$post_objects = get_field('reward', 'option');
		if($post_objects):
			$counter = count($post_objects);
			$counter = $counter + 1;
			
			// Vars
			$reward_title = get_field('reward_title', 'option');
			$reward_text = get_field('reward_text', 'option');
			$reward_link = get_field('reward_link', 'option');
			
			echo '<div class="block module-3 ';
			if ( $counter > 3 ) { echo '3-col-slider';}
			echo  '">';
			echo 	'<div class="row">';
			echo 		'<div class="col-lg-5">';
			echo        	'<div class="img-wrapper">';
			echo 				'<h2>' . $reward_title . '</h2>';
			echo            '</div>';
			echo            '<div class="box-meta static">';
			echo 				'<p>' . $reward_text .'</p>';
			echo 				'<a class="more white" href="' . $reward_link . '">Meaningful Link</a>';
			echo            '</div>';
			echo        '</div>';
				
			foreach( $post_objects as $post_object):
				//Vars
				$title = get_the_title($post_object->ID);
				$date = get_the_date('d.m.y', $post_object->ID);
				$url = get_permalink($post_object->ID);
					
				echo '<div class="col-lg-5">';
				echo 	'<div class="img-wrapper">';
				
					if($post_object->post_type == 'page') {
						if(have_rows('flexible_content', $post_object->ID )):
							while ( have_rows('flexible_content', $post_object->ID) ) : the_row();	
						
								if(get_row_layout() == 'hero_image'):
									$flex_page_image = get_sub_field('hero_image_f01', $post_object->ID);
									$flex_size3 = 'box-size';
									echo 	wp_get_attachment_image( $flex_page_image, $flex_size3);
								endif;
						
							endwhile;
						endif;
					}
				
					if($post_object->post_type == 'upstart') {
						$profile_photo = get_field('profile_photo', $post_object->ID);
						$flex_size2 = 'box-size';
						echo 	wp_get_attachment_image( $profile_photo, $flex_size2);
					}
				
					if($post_object->post_type == 'event') {
						$flex_event_image = get_field('event_image', $post_object->ID);
						$flex_size = 'box-size';
						echo wp_get_attachment_image( $flex_event_image, $flex_size);
					}
				echo  	'</div>';
				echo     '<div class="box-meta">';
				
				echo      	'<small>Member Profile</small>';
				echo		'<small>'. $date .'</small>';
				echo        '<span> - </span>';
				echo 	    '<h3>' . $title . '</h3>';
				echo        '<a class="more white" href="' . $url . '">More</a>';		
				echo     '</div>';
				echo '</div>';
					
			endforeach;
				
			echo 	'</div>';
			echo '</div>';
					
		endif;

	
	if(have_rows('key_dates', 'options')):
	$i = 1;
	echo '<section class="key-dates">';
	echo	'<div class="row">';
	echo		 '<div class="col-lg-4">';
	echo			 '<h2>Key<br/> Dates</h2>';
	echo          '</div>';
			 	
		while( have_rows('key_dates', 'options') ): the_row();
		// Do not show more than 3 in this block
			if($i == 4) { break; }
			  	  
			$date = get_sub_field('date');
			$time = get_sub_field('time');
			$title = get_sub_field('title');
			$text = get_sub_field('event_intro');
			$link = get_sub_field('link'); 
				  	  
			$text = substr($text, 0, 100);
				  	  			  	
	 echo 		   '<div class="col-lg-4">';
	 echo				'<center>';
	 echo 					'<p class="date"><small>' . $date . '</small></p>';			  	 	 	
	 echo 					'<p class="time"><small>' . $time  . '</small></p>';
	 echo                   '<span class="sep">-</span>';
	 echo 					'<h4>' . $title  . '</h4>';
	 echo 					'<p class="content">' . $text  . '</p>';
	 echo   				'<a class="more black" href="' . $link . '">Enter Today</a>';
	
	 echo				'</center>';
	 echo 			'</div>';
			  
		$i++;
		endwhile;		 
			 
	echo	'</div>';
	echo  '</section>';
		
	endif;
	
	echo 		'</div>';
	echo 	'</div>';
				
	echo '</main>';

get_footer(); 
?>