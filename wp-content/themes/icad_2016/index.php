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
									echo 		'<a href="' . $slide_link . '">Find our more</a>';
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
		echo 			'<div class="home-box">';
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
			
			echo '<div class="block module-1 ';
			if ( $counter > 3 ) { echo '3-col-slider';}
			echo  '">';
			echo 	'<div class="row">';
			echo 		'<div class="col-lg-5">';
			echo        	'<div class="img-wrapper">';
			echo 				'<h2>We Foster Creative Excellence</h2>';
			echo            '</div>';
			echo            '<div class="box-meta static">';
			echo 				'<p>Intro blurb about the foster aspect of ICAD. Positive inclusive messaging outlining importance of organisation and its role within the creative industry</p>';
			echo 				'<a href="#">Meaningful Link</a>';
			echo            '</div>';
			echo        '</div>';
				
			foreach( $post_objects as $post_object):
				//Vars
				$title = get_the_title($post_object->ID);
				$date = get_the_date('d.m.y', $post_object->ID);
				$url = get_permalink($post_object->ID);
					
				echo '<div class="col-lg-5">';
				echo 	'<div class="img-wrapper">';
						 // Image		
				echo     '</div>';
				echo     '<div class="box-meta">';
				
			    if($post_object->post_type == 'upstart') {
				echo      	'<small>Member Profile</small>';
				} else {
				echo		'<small>'. $date .'</small>';
				}
				echo        '<span> - </span>';
				echo 	    '<h3>' . $title . '</h3>';
				echo        '<a href="' . $url . '">More</a>';		
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
			
			echo '<div class="block module-2 ';
			if ( $counter > 3 ) { echo '3-col-slider';}
			echo  '">';
			echo 	'<div class="row">';
			echo 		'<div class="col-lg-5">';
			echo        	'<div class="img-wrapper">';
			echo 				'<h2>We Promote Creative Excellence</h2>';
			echo            '</div>';
			echo            '<div class="box-meta static">';
			echo 				'<p>Intro blurb about the promotion aspect of ICAD. Positive inclusive messaging outlining importance of organisation and its role within the creative industry</p>';
			echo 				'<a href="#">Meaningful Link</a>';
			echo            '</div>';
			echo        '</div>';
				
			foreach( $post_objects as $post_object):
				//Vars
				$title = get_the_title($post_object->ID);
				$date = get_the_date('d.m.y', $post_object->ID);
				$url = get_permalink($post_object->ID);
					
				echo '<div class="col-lg-5">';
				echo 	'<div class="img-wrapper">';
						 // Image		
				echo     '</div>';
				echo     '<div class="box-meta">';
				if($post_object->post_type == 'event') {
				echo      	'<small>Upcoming Event</small>';
				echo		'<small>'. $date .'</small>';
				} else {
				echo 		'<small>' . $title . '</small>';
				}
				echo        '<span> - </span>';
				echo 	    '<h3>' . $title . '</h3>';
				echo        '<a href="' . $url . '">More</a>';		
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
			
			echo '<div class="block module-3 ';
			if ( $counter > 3 ) { echo '3-col-slider';}
			echo  '">';
			echo 	'<div class="row">';
			echo 		'<div class="col-lg-5">';
			echo        	'<div class="img-wrapper">';
			echo 				'<h2>We Reward Creative Excellence</h2>';
			echo            '</div>';
			echo            '<div class="box-meta static">';
			echo 				'<p>Intro blurb about the ICAD awards and their value. Positive inclusive messaging outlining importance of organisation and its role within the creative industry</p>';
			echo 				'<a href="#">Meaningful Link</a>';
			echo            '</div>';
			echo        '</div>';
				
			foreach( $post_objects as $post_object):
				//Vars
				$title = get_the_title($post_object->ID);
				$date = get_the_date('d.m.y', $post_object->ID);
				$url = get_permalink($post_object->ID);
					
				echo '<div class="col-lg-5">';
				echo 	'<div class="img-wrapper">';
						 // Image		
				echo     '</div>';
				echo     '<div class="box-meta">';
				
				echo      	'<small>Member Profile</small>';
				echo		'<small>'. $date .'</small>';
				echo        '<span> - </span>';
				echo 	    '<h3>' . $title . '</h3>';
				echo        '<a href="' . $url . '">More</a>';		
				echo     '</div>';
				echo '</div>';
					
			endforeach;
				
			echo 	'</div>';
			echo '</div>';
					
		endif;

				
	echo 		'</div>';
	echo 	'</div>';
	
	echo '</main>';


				
/*
		<?php if(have_rows('key_dates', 'options')):
		$i = 1; ?>
		<section class="key-dates">
			<div class="row"> 
			 	<div class="col-lg-4">
				 	<h2>Key<br/> Dates</h2>
			 	</div>
			 	
			 	<?php while( have_rows('key_dates', 'options') ): the_row();
					  // Do not show more than 3 in this block
			  	  	  if($i == 4) { break; }
			  	  
					  $date = get_sub_field('date');
				  	  $time = get_sub_field('time');
				  	  $title = get_sub_field('title');
				  	  $text = get_sub_field('event_intro');
				  	  $link = get_sub_field('link'); 
				  	  
				  	  $text = substr($text, 0, 100);
				  	  
				  	  ?>
				  	
				  	  <div class="col-lg-4">
					  	 <center>
					  	 <?php 
				  	 	 	echo '<p><small>' . $date . '</small></p>';
				  	 	 	
				  	 	 	echo '<p><small>' . $time  . '</small></p>';
				  	 	 	
				  	 	 	echo '<h4>' . $title  . '</h4>';

				  	 	 	echo '<p>' . $text  . '</p>';

				  	 	 	echo '<p><a href="' . $link . '">Enter Today</a></p>';
				  	 	 ?>
					  	 </center>
				  	  </div>
			  
			 <?php $i++; ?>  
			 <?php endwhile; ?> 		 
			 
			</div>
		</section>
		
		<?php endif; ?>
		
		<hr>
*/
get_footer(); 
?>