<?php get_header();

if (is_singular('event')) {
	
	get_template_part( 'loop', 'event' );

} elseif(is_singular('upstart')) {
	
	get_template_part( 'loop', 'upstart-single' );
	
} else {
	
}

get_footer(); ?>
