<?php get_header();
	
	// Get current date
	$current_date_unix = date('U');
	
	if (have_posts()): while (have_posts()) : the_post();
	
		echo '<div class="row">';
			
			echo '<div class="col-lg-4">';
			echo '</div>';
		
			echo '<div class="col-lg-12">';
			
				echo '<section id="content" class="event" role="main">';
				
						// Vars
						$title = get_the_title();
						$sub_title = get_field('sub_title');
						$opening_date = get_field('opening_date');
						$closing_date = get_field('closing_date');
						// Create UNIX timestamp
						$closing_date_unix = strtotime(get_field('closing_date'));
						$opening_hours = get_field('opening_hours');
						$venue = get_field('venue');
						$cost = get_field('cost');
						$event_image = get_field('event_image');
						$booking_url = get_field('booking_url');
						$closed_booking = get_field('closed_booking');
						$description = get_the_content();
						
						echo '<h1 class="page-title">' . $title . '</h1>';
						  
						if($sub_title) {	
						  	echo '<p class="sub-title">' . $sub_title . '</p>';
						}
						
						echo '<div class="row">';
							echo '<div class="col-lg-5">';
						
								if($opening_date || $closing_date) {
									echo '<h4>Opening</h4>';
									echo '<p>' . $opening_date . '</p>';
									echo '<p>' . $closing_date . '</p>';
								}
								
								if($opening_hours) {
									echo '<p>' . $opening_hours . '</p>';
								}
								
							echo '</div>';
							
							
							echo '<div class="col-lg-5">';	
								if($venue) {
									echo '<h4>Venue</h4>';
									echo '<p>' . $venue . '</p>';
								}
							echo '</div>';
							
							echo '<div class="col-lg-5">';
								
								if($cost) {
									echo '<h4>Cost</h4>';
									echo '<p>' .  $cost . '</p>'; 
								}
								
							echo '</div>';
							
						echo '</div>';	
						
						if($event_image) {
							echo '<div class="img-wrapper">';
								echo wp_get_attachment_image($event_image);
							echo '</div>';
						}
						
						if($description) {
							echo $description; 
							
						}
						
						echo '<div class="clearfix"></div>';
						
						// Is Booking turned on
						if(get_field('booking')) {
							// Is current date equal or greater than closing date, if so show booking closed
							if($current_date_unix >= $closing_date_unix) {
								if($closed_booking) {
									echo '<p>' . $closed_booking . '</p>';
								}
							} else {								
								if($booking_url) {
									echo '<a class="btn" href="' . $booking_url . '" target="_blank">Book Now</a>';
								}
							}
						} else {
							if($closed_booking) {
								echo '<p>' . $closed_booking . '</p>';
							}
						}
					
					endwhile;
				echo '</section>';
			echo '</div>';
		echo '</div>';
    endif;
    
get_footer(); ?>