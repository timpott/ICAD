<?php get_header();
	
	if (have_posts()): 
		while (have_posts()) : the_post();
		
		echo '<div class="row">';
		echo 	'<div class="col-lg-4">';
		echo		'<aside id="sidebar">';
		echo			get_sidebar();
		echo     	'</aside>';
		echo 	'</div>';
		
		echo 	'<div class="col-lg-12">';
		echo		'<section id="content" role="main">';
		echo			get_template_part('loop');
		echo    	'</section>';
		echo 	'</div>';
		echo '</div>';
		
		endwhile;
	endif;

get_footer(); ?>
