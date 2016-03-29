<?php	
	echo '<aside class="sidebar" role="complementary">';
		if(get_field('sidebar_menu')) {
			echo '<nav class="sidebar-nav" role="navigation">';
			echo 	wpb_list_child_pages();
			echo '</nav>';
		} else {
			// empty case
		}
		
		if( have_rows('ad_block') ):
			while ( have_rows('ad_block') ) : the_row();
				
				$advert_image = get_sub_field('advert_image');
				$advert_link = get_sub_field('advert_link');
				
				if( !empty($advert_image)): 
				
					// Resize
					$advert_size = 'advert-large';
					
					echo wp_get_attachment_image( $advert_image, $advert_size);

				endif;
				
			endwhile;

			else :
				// Empty Case

			endif;

	echo '</aside>';

?>