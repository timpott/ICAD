			</div>
			<!-- /container -->			
			
			<section class="partners">
				
			</section>
			
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
									echo '<p><a href="tel:' . get_field('footer_telephone', 'option') . ' ">' . get_field('footer_telephone', 'option') . '</a></p>';
								}
								
								if(get_field('footer_email', 'option')) {	
									echo '<p><a href="mailto:' . get_field('footer_email', 'option'). '">' . get_field('footer_email', 'option') . '</a></p>';
								}
							?>
						</div>
						
						<div class="col-lg-5">
							<?php echo do_shortcode('[contact-form-7 id="49" title="Newsletter"]'); ?>
						</div>
						
						<div class="col-lg-8">
							<nav class="footer-nav">
							 	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
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
					
				<div class="clearfix"></div>
				
				<hr class="c-04">
				
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
													$size = 'small';
											
													echo '<div class="col-lg-2">';
													echo 	'<a href="'. $sponsor_url .'" target="_blank">.';
													echo	wp_get_attachment_image( $sponsor_logo, $size);
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
