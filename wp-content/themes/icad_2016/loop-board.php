<?php
	
			$color = array('#cfa2f3', '#00ffdc', '#ffa2a0');
			$choose_color = array_rand($color);
			
			$board_content_title = get_field('board_content_title');
			$board_content_text = get_field('board_content_text');
			$board_content_link = get_field('board_content_link');

			echo    	'<div class="col-lg-5">';
			echo 			'<div class="board-wrapper">';
			echo 				'<div class="img-wrapper">';
			echo 					'<img class="loader box-size" data-src="' . get_template_directory_uri() .'/includes/img/profile_photo.jpg" src="' . get_template_directory_uri() . '/includes/img/icons/loading.png" alt="" />';
			echo 				'</div>';
			
			echo 				'<div class="box-meta">';
			echo 					'<small>Board Member</small>';
			echo 					'<h4><a style="color: ' . $color[$choose_color] . '" href="#">Kathryn Wilson</a></h4>';
			echo 					'<p>Slater Design</p>';
			echo 					'<a href="#">View Profile</a>';
			echo 				'</div>';
			echo 			'</div>';
			echo 		'</div>';
			
			echo    	'<div class="col-lg-5">';
			echo 			'<div class="board-wrapper">';
			echo 				'<div class="img-wrapper">';
			echo 					'<img class="loader box-size" data-src="' . get_template_directory_uri() .'/includes/img/profile_photo.jpg" src="' . get_template_directory_uri() . '/includes/img/icons/loading.png" alt="" />';
			echo 				'</div>';
			
			echo 				'<div class="box-meta">';
			echo 					'<small>Board Member</small>';
			echo 					'<h4><a style="color: ' . $color[$choose_color] . '" href="#">Kathryn Wilson</a></h4>';
			echo 					'<p>Slater Design</p>';
			echo 					'<a href="#">View Profile</a>';
			echo 				'</div>';
			echo 			'</div>';
			echo 		'</div>';
			
			echo    	'<div class="col-lg-5">';
			echo 			'<div class="board-wrapper">';
			echo 				'<div class="img-wrapper">';
			echo 					'<img class="loader box-size" data-src="' . get_template_directory_uri() .'/includes/img/profile_photo.jpg" src="' . get_template_directory_uri() . '/includes/img/icons/loading.png" alt="" />';
			echo 				'</div>';
			
			echo 				'<div class="box-meta">';
			echo 					'<small>Board Member</small>';
			echo 					'<h4><a style="color: ' . $color[$choose_color] . '" href="#">Kathryn Wilson</a></h4>';
			echo 					'<p>Slater Design</p>';
			echo 					'<a href="#">View Profile</a>';
			echo 				'</div>';
			echo 			'</div>';
			echo 		'</div>';
			
			echo    	'<div class="col-lg-5">';
			echo 			'<div class="board-wrapper">';
			echo 				'<div class="img-wrapper">';
			echo 					'<img class="loader box-size" data-src="' . get_template_directory_uri() .'/includes/img/profile_photo.jpg" src="' . get_template_directory_uri() . '/includes/img/icons/loading.png" alt="" />';
			echo  				'</div>';
			
			echo 				'<div class="box-meta">';
			echo 					'<small>Board Member</small>';
			echo 					'<h4><a style="color: ' . $color[$choose_color] . '" href="#">Kathryn Wilson</a></h4>';
			echo 					'<p>Slater Design</p>';
			echo 					'<a href="#">View Profile</a>';
			echo 				'</div>';
			echo 			'</div>';
			echo 		'</div>';

			echo    	'<div class="col-lg-5">';
			echo 			'<div class="board-wrapper">';
			echo        	'<div class="img-wrapper">';
			echo 				'<img class="loader logo-img" data-src="' . get_template_directory_uri() .'/includes/img/profile_photo.jpg" src="' . get_template_directory_uri() . '/includes/img/icons/loading.png" alt="" />';
			echo            '</div>';
			
			echo 				'<div class="box-meta">';
			echo 					'<small>Board Member</small>';
			echo 					'<h4><a style="color: ' . $color[$choose_color] . '" href="#">Kathryn Wilson</a></h4>';
			echo 					'<p>Slater Design</p>';
			echo 					'<a href="#">View Profile</a>';
			echo 				'</div>';
			echo 			'</div>';
			echo 		'</div>';
			
			echo    	'<div class="col-lg-5 last">';
			echo 			'<div class="board-wrapper">';
			echo        	'<div style="background-color: ' . $color[$choose_color] . '" class="img-wrapper">';
			echo 				'<h4>' . $board_content_title . '</h4>';
			echo            '</div>';
			
			echo 				'<div class="box-meta">';
			echo 					'<p><a style="color: ' . $color[$choose_color] . '" href="#">' . $board_content_text . '</a></p>';
			echo 					'<a href=" ' . $board_content_link . '">Contact us</a>';
			echo 				'</div>';
			echo 			'</div>';
			echo 		'</div>';
	
?>