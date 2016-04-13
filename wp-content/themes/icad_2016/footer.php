			</div>
			<!-- /container -->	
			
			<?php if(have_rows('partners', 'options')):
			$i = 1; ?>		
			
				<section class="partners">
					<div class="container">
						<div class="row">
							<div class="col-lg-4">
								<h2>Our Partners</h2>
							</div>
							
							<?php 
								while( have_rows('partners', 'options') ): the_row();
									// Do not show more than 4 in this block
									if($i == 5) { break; }
											
									$partner_url = get_sub_field('partner_url');
									$partner_logo = get_sub_field('partner_logo');
											
										if( !empty($partner_logo)): 
														
										// Resizing
										$partner_size = 'partner';
												
											echo '<div class="col-lg-3">';
											echo 	'<a href="'. $partner_url .'" target="_blank">';
											echo	wp_get_attachment_image( $partner_logo, $partner_size);
											echo 	'</a>';
											echo '</div>';
											
										endif; ?>
								<?php $i++; ?>
								<?php endwhile; ?> 		
						</div>
						<!-- /row -->
					</div>
					<!-- /container -->
				</section>
			
			<?php endif; ?>
			
			<div class="clearfix"></div>
			
			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="container">
					<div class="row">
						<div class="col-lg-2">
							<?php 
								if(get_field('footer_address', 'option')) {	
									echo '<address>' . get_field('footer_address', 'option') . '</address>';
								}
								
								if(get_field('footer_telephone', 'option')) {	
									echo '<p><a href="tel:' . get_field('footer_telephone', 'option') . ' ">' . get_field('footer_telephone', 'option') . '</a><br/>';
								}
								
								if(get_field('footer_email', 'option')) {	
									echo '<a href="mailto:' . get_field('footer_email', 'option'). '">' . get_field('footer_email', 'option') . '</a></p>';
								}
							?>
						</div>
						
						<div class="col-lg-5">
							<?php echo do_shortcode('[contact-form-7 id="49" title="Newsletter"]'); ?>
						</div>
						
						<div class="col-lg-8">
							<nav class="footer-nav">
							 	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
							 	<a href="#top"><div class="arrow-top"></div></a>
							</nav>
							
							<?php 
								if(get_field('footer_copyright', 'option')) {	
									echo '<p class="copyright">' . get_field('footer_copyright', 'option') . '</p>';
								}	 
							?>
						</div>
					</div>
					<!-- /row -->
					
					<!-- humans -->
					<?php
						if(get_field('footer_humans', 'option')) {	
							echo '<p class="humans">' . get_field('footer_humans', 'option') . '</p>';	
						}
					?>
					
				</div>
				<!-- /container -->
				
				<hr class="alt-01">
				
				<?php if(have_rows('sponsors', 'options')):
					  $i = 1; ?>
					  
					  <section class="sponsors">
							<div class="container">
								<h2>Our Sponsors</h2>
									<div class="row">
										<?php 
											while( have_rows('sponsors', 'options') ): the_row();
											
											$sponsor_name = get_sub_field('sponsor_name');
											$sponsor_url = get_sub_field('sponsor_url');
											$sponsor_logo = get_sub_field('sponsor_logo');
										
												if( !empty($sponsor_logo)): 
													
													// Resizing
													$sponsor_size = 'small';
											
													echo '<div class="col-lg-2">';
													echo 	'<a href="'. $sponsor_url .'" target="_blank">';
													echo	wp_get_attachment_image( $sponsor_logo, $sponsor_size);
													echo 	'</a>';
													echo '</div>';
										
												endif; ?>
												
											<?php $i++; ?>  
											<?php endwhile; ?> 
										
									</div>
									<!-- /row -->
							</div>
							<!-- /container -->
						</section>
				<?php endif; ?>
				
			</footer>
			<!-- /footer -->

		<?php wp_footer(); ?>

	</body>
</html>
