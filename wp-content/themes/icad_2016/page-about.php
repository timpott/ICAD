<?php
	/*
		Template Name: About
	*/	

get_header();

	if (have_posts()): 
		while (have_posts()) : the_post();
		// Vars
		$hero_title = get_field('hero_title');
		$hero_image = get_field('hero_image');
		$hero_intro = get_field('hero_introduction');
		$about_icad = get_field('about_icad');
		$ad_block = get_field('about_advert2');
		$about_content = get_field('about_content_block');
		
			echo '<section id="content" class="about" role="main">';
			echo 	'<div class="row">';
			echo 		'<div class="col-lg-4">';
							if($hero_title):
								echo '<h1 class="page-title">' . $hero_title . '</h1>';
							endif;
			echo 		'</div>';
			if( !empty($hero_image)): 	
				echo 	'<div class="col-lg-12">';
				echo 		wp_get_attachment_image($hero_image);
				echo 	'</div>';
			endif;
			echo 	'</div>'; // row 1
			
			echo 	'<div class="row">';
			echo 		'<div class="col-lg-11">';
							if($hero_intro):
								echo '<h3 class="intro-text">' . $hero_intro . '</h3>';
							endif;
							
							if(have_rows('hero_link_block')):
								echo '<nav class="link-block" role="navigation">';
								echo 	'<ul>';
									while ( have_rows('hero_link_block') ) : the_row();
									$link_block_url = get_sub_field('link_url');
									$link_block_text = get_sub_field('link_title');
									
									echo 	'<li><a href=" '. $link_block_url .' ">' . $link_block_text . '</a></li>';
									
									endwhile;
								echo 	'</ul>';
								echo '</nav>';
							endif;							
			echo  		'</div>';
			
			echo 		'<div class="col-lg-5">';
			echo 			'<p>' . $about_icad . '</p>';
			
			echo 		'</div>';
			echo 	'</div>'; // row 2
			
			// Hardcoded board member module, replace with member profile loop
			echo '<div class="flex-module">';
			echo 	'<div class="row">';
			echo 	get_template_part('loop', 'board');				
			echo 	'</div>';
			echo '</div>'; // row 3
			
			echo '<div class="row">';
			
			if( !empty($ad_block)): 
				echo 	'<div class="col-lg-4">';
							$advert_size = 'advert-large';
				echo		wp_get_attachment_image( $ad_block, $advert_size);
				echo 	'</div>';
			endif;
				
			echo 	'<div class="col-lg-12">';
			echo 		'<div class="page-content">';
			echo 			$about_content;
			echo 		'</div>';
			echo 	'</div>';
			echo '</div>'; // row 4
			
			
			
		echo '</section>';
			
		endwhile;
	endif;
	
get_footer(); 
?>
