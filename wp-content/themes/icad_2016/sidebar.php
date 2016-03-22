<?php	
	echo '<aside class="sidebar" role="complementary">';
	echo 	'<nav class="sidebar-nav" role="navigation">';
	echo 		wpb_list_child_pages();
	echo 	'</nav>';
	echo '</aside>';
/*
	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>
*/

?>