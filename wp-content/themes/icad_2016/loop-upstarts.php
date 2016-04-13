<?php
	
	$year = get_sub_field('year');
	
	if($year):
	
		$year_id = $year->term_id;
		$year_name = $year->name;
		
	endif;
	
	$color = array('#cfa2f3', '#00ffdc', '#ffa2a0');

	$i = 0;
	query_posts(array(
		'post_type' => 'upstart',   
		'posts_per_page' => '-1', 
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'tax_query' => array(
			array(
				'taxonomy' => 'years',
				'field' => 'id',
				'terms' =>  $year_id,
			),
		)
	)); 
			
	if (have_posts()): 
		
		echo '<div class="upstarts-module">';
		echo '<h3>' . $year_name . ' Upstarts</h3>';
		echo 	'<div class="row">';
		
		while (have_posts()) : the_post();
		
			$profile_photo = get_field('profile_photo');
			$profile_role = get_field('role');
			$profile_name = get_the_title();
			$profile_link = get_the_permalink();
			$choose_color = array_rand($color);
			
			echo '<div class="col-lg-5">';
			echo 	'<div class="upstart-wrapper">';
			
			if( !empty($profile_photo)): 								
				$profile_size = 'upstart';
				echo wp_get_attachment_image( $profile_photo, $profile_size);
			endif;
		
			echo 		'<div class="upstart-meta">';
			echo 			'<p>' . $profile_role . '</p>';
			echo 			'<h4><a style="color: ' . $color[$choose_color] . '" href="' . $profile_link . '">' . $profile_name . '</a></h4>';
			echo 			'<a class="more white" href="' . $profile_link . '">View Profile</a>';
			echo 		'</div>';
			echo 	'</div>';
			echo '</div>';
		
		$i++;
		endwhile;
		
		echo 	'</div>';
		echo '</div>';
	else:
		// No Posts found
	endif;
	wp_reset_query();
	
	echo '<center><a class="btn" href="#">View More</a></center>';
	
?>