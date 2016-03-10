<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="hero-slider">
			<div class="row">
				<div class="col-lg-5">
					<?php 
					if(get_field('home_lead', 'option')) {	
						echo '<h4>' . get_field('home_lead', 'option') . '</h4>';
					} else {
						// Empty Case
					}
					
					if(get_field('home_lead_link', 'option')) {	
						echo '<p><a href="' . get_field('home_lead_link', 'option') . '">' . get_field('home_lead_cta', 'option') . '</a></p>'; 
					} else {
						// Empty Case
					} ?>
				</div>
			
				<div class="col-lg-11">
				
				</div>
			</div>
			<!-- /row -->
		</section>
		
		<section class="quick-links">
			<div class="row">
				<div class="col-lg-4">
					<div class="home-box" data-src=""></div>	
				</div>
					
				<div class="col-lg-4">
					<div class="home-box" data-src=""></div>		
				</div>
						
				<div class="col-lg-4">
					<div class="home-box" data-src=""></div>		
				</div>
					
				<div class="col-lg-4">
					<div class="home-box" data-src=""></div>	
				</div>
			</div>
			<!-- /row -->
		</section>
		
		<hr>
		
		<section class="block-1">
			<div class="row">
				<div class="col-lg-5">
					<div class="home-box large c-01"></div>
				</div>
				
				<div class="col-lg-5">
					<div class="home-box large c-01"></div>	
				</div>
					
				<div class="col-lg-5">
					<div class="home-box large c-01"></div>
				</div>
			</div>
			<!-- row -->
		</section>
		
		<hr>
		
		<section class="block-2">
			<div class="row">
				<div class="col-lg-5">
					<div class="home-box large c-02"></div>
				</div>
				
				<div class="col-lg-5">
					<div class="home-box large c-02"></div>	
				</div>
					
				<div class="col-lg-5">
					<div class="home-box large c-02"></div>
				</div>
			</div>
			<!-- row -->
		</section>
		
		<hr>
		
		<section class="block-3">
			<div class="row">
				<div class="col-lg-5">
					<div class="home-box large c-03"></div>
				</div>
				
				<div class="col-lg-5">
					<div class="home-box large c-03"></div>	
				</div>
					
				<div class="col-lg-5">
					<div class="home-box large c-03"></div>
				</div>
			</div>
			<!-- row -->
		</section>
		
		<hr>
		
		<?php if(have_rows('key_dates', 'options')):
		$i = 1; ?>
		<section class="key-dates">
			<div class="row"> 
			 	<div class="col-lg-4">
				 	<h2>Key<br/> Dates</h2>
			 	</div>
			 	
			 	<?php while( have_rows('key_dates', 'options') ): the_row();
					  // Do not show more than 3 in this block
			  	  	  if($i == 4) { break; }
			  	  
					  $date = get_sub_field('date');
				  	  $time = get_sub_field('time');
				  	  $title = get_sub_field('title');
				  	  $text = get_sub_field('event_intro');
				  	  $link = get_sub_field('link'); 
				  	  
				  	  $text = substr($text, 0, 100);
				  	  
				  	  ?>
				  	
				  	  <div class="col-lg-4">
					  	 <center>
					  	 <?php 
				  	 	 	echo '<p><small>' . $date . '</small></p>';
				  	 	 	
				  	 	 	echo '<p><small>' . $time  . '</small></p>';
				  	 	 	
				  	 	 	echo '<h4>' . $title  . '</h4>';

				  	 	 	echo '<p>' . $text  . '</p>';

				  	 	 	echo '<p><a href="' . $link . '">Enter Today</a></p>';
				  	 	 ?>
					  	 </center>
				  	  </div>
			  
			 <?php $i++; ?>  
			 <?php endwhile; ?> 		 
			 
			</div>
		</section>
		
		<?php endif; ?>
		
		<hr>

	</main>

<?php get_footer(); ?>