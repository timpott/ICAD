<?php 
	
	// Display Page Title
	$page_title = get_the_title();
	echo '<div class="title-wrapper">';
	echo 	'<h1 class="page-title">' . $page_title . '</h1>';
	echo '</div>'; // title-wrapper close
	
	// Flexible Content Loop
	if(have_rows('flexible_content')):
		// loop through the rows of data
		while ( have_rows('flexible_content') ) : the_row();
		
			if(get_row_layout() == 'sub_title'):
				$sub_title = get_sub_field('sub_title_f01');
				echo 	'<p class="sub-title">' . $sub_title . '</p>';
			endif;
					
			if(get_row_layout() == 'hero_introduction'):	
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
				
			elseif(get_row_layout() == 'link_block'):
				
				echo '<nav class="link-block" role="navigation">';
				echo 	'<ul>';
				
				if(have_rows('link')):					
			    	while ( have_rows('link') ) : the_row();
			    	$link_block_url = get_sub_field('link_url');
					$link_block_text = get_sub_field('link_title');
			    	echo 	'<li><a href=" '. $link_block_url .' ">' . $link_block_text . '</a></li>';
					endwhile;
					
				endif;
					
			    echo 	'</ul>';
			    echo '</nav>';
			    echo '<div class="clearfix"></div>';
				
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
				echo get_template_part('loop', 'flex');				
			endif;
			
		endwhile;
		
		else:
		// No layouts found
	endif;
	
?>
