<?php	
	
	if (have_posts()): while (have_posts()) : the_post();
		echo '<div class="row">';	
			echo '<div class="col-lg-4">';
					get_sidebar();
			echo '</div>';	
			echo '<div class="col-lg-12">';
			
				echo '<section id="content" class="upstart" role="main">';
				
						// Vars
						$title = get_the_title();
						$role = get_field('role');
						$profile = get_field('profile_photo');
						$description = get_field('description');
						$website = get_field('website');
						$email = get_field('email');
						$linkedin = get_field('linkedin');
						$telephone = get_field('telephone');
						$twitter = get_field('twitter');
						
						echo '<div class="title-wrapper">';
							echo '<h1 class="page-title">Upstarts</h1>';
						echo '</div>';
						
						echo '<div class="profile-header">';
							echo '<div class="row">';	
							
								if($profile) {
									echo '<div class="col-lg-6">';
										echo '<div class="img-wrapper">';
										echo 	wp_get_attachment_image($profile);	
										echo '</div>';
									echo '</div>';
								}
								
								echo '<div class="col-lg-10">';
									echo '<div class="profile-meta">';
										echo '<h2>' . $title . '</h2>';
										
										if($role) {
											echo '<p>' . $role . ' </p>';
										}
									echo '</div>';
								echo '</div>';
							
							echo '</div>';
						echo '</div>';
						
						echo '<div class="clearfix"></div>';
						
						if($description) {
							echo '<div class="description-wrapper">';
							echo 	$description; 
							echo '</div>';	
						}
						
						echo '<div class="row">';
						
						if($website) {
							echo 	'<div class="col-lg-5">';
							echo    	'<p class="border"><a href=" ' . $website . '" target="_blank">View Website</a></p>';
							echo  	'</div>';
						}
						
						if($email) {
							echo 	'<div class="col-lg-5">';
							echo 		'<p class="border"><a href="mailto:' . $email . '">Email</a></p>';
							echo  	'</div>';
						}
						
						if($linkedin) {
							echo 	'<div class="col-lg-5">';
							echo 		'<p class="border"><a href=" ' . $linkedin . '" target="_blank">Connect on Linkedin</a></p>';
							echo  	'</div>';
						}
						
						if($telephone) {
							echo 	'<div class="col-lg-5">';
							echo 		'<p class="border"><a href="tel:' . $telephone . '">Call</a></p>';
							echo  	'</div>';
						}
						
						if($twitter) {
							echo 	'<div class="col-lg-5">';
							echo 		'<p class="border"><a href=" ' . $twitter . '" target="_blank">@' . $twitter . '</a></p>';
							echo  	'</div>';
						}
						
						echo '</div>';
						
						if( have_rows('portfolio') ):
							echo '<div class="portfolio">';
								while ( have_rows('portfolio') ) : the_row();
									$work = get_sub_field('work');
									
									echo wp_get_attachment_image($work);
	
								endwhile;
							echo '</div>';
						else :
						// no rows found
						endif;
											
					endwhile;
				echo '</section>';
		echo '</div>';
	echo '</div>';
    endif;
?>