<?php
	
	// Get current year, then loop through Upstarts NOT in current year
	$current_year = date("Y");
	
	$i = 0;
	query_posts(array(
		'post_type' => 'upstart',   
		'posts_per_page' => '-1', 
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'tax_query' => array(
			array(
				'taxonomy' => 'years',
				'field' => 'slug',
				'terms' =>  $current_year,
				'operator' => 'NOT IN',
			),
		)
	)); 
			
	if (have_posts()): 
		
		echo '<div class="alumni-module">';
		echo '<h3>Upstarts Alumni</h3>';
		echo 	'<ul>';
		
		while (have_posts()) : the_post();

			$profile_name = get_the_title();
			$profile_link = get_the_permalink();

			echo '<li>';
			echo 	'<h4><a href=" '. $profile_link .'">' . $profile_name . '</a></h4>';	
			echo '</li>';
			
		$i++;
		endwhile;
		
		echo 	'</ul>';
		echo '</div>';
	else:
		// No Posts found
	endif;
	wp_reset_query();
	
?>