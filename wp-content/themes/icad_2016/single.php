<?php get_header();

if (is_singular('event')) {
	
	get_template_part( 'loop', 'event' );

} else {
	
}

get_footer(); ?>
