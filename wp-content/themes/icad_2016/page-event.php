<?php
	/*
		Template Name: Contact
	*/	
?>

<?php get_header(); ?>
	
	<div class="row">
		<div class="col-lg-4">
			<aside class="sidebar top-border">
					<nav class="sidebar-nav" role="navigation">
						<h4 class="menu-header">Contact Us</h4>
						<ul>
							<?php 
								if(get_field('footer_address', 'option')) {	
									echo '<li><a href="#">' . get_field('footer_address', 'option') . '</a></li>';
								}
								
								if(get_field('footer_telephone', 'option')) {	
									echo '<li><a href="tel:' . get_field('footer_telephone', 'option') . ' ">' . get_field('footer_telephone', 'option') . '</li>';
								}
								
								if(get_field('footer_email', 'option')) {	
									echo '<li><a href="mailto:' . get_field('footer_email', 'option'). '">' . get_field('footer_email', 'option') . '</a></li>';
								}
							?>
						</ul>
					</nav>
			</aside>
		</div>
		<!-- /sidebar -->
		
		<div class="col-lg-12">
			<section id="contact" class="content top-border">
				<div class="row">
					<div class="col-lg-10">
						<div class="newsletter">
							<h4>Sign up for our Bulletins</h4>
							<?php echo do_shortcode('[contact-form-7 id="49" title="Newsletter"]'); ?>
						</div>
					</div>
					
					<div class="col-lg-6">
						<div class="social">
							<nav class="social-nav" role="navigation">
								<ul>
									<?php 
										if(get_field('facebook', 'option')) {	
											echo '<li><a href="' . get_field('facebook', 'option') . '" target="_blank">Facebook</a></li>';
										}
										
										if(get_field('twitter', 'option')) {	
											echo '<li><a href="' . get_field('twitter', 'option') . '" target="_blank">Twitter</a></li>';
										}
										
										if(get_field('linkedin', 'option')) {	
											echo '<li><a href="' . get_field('linkedin', 'option') . '" target="_blank">Linkedin</a></li>';
										}
									?>
								</ul>
							</nav>
						</div>
					</div>
					<!-- /row -->
				</div>
			</section>
		</div>	
		<!-- /content -->
	</div>
	<!-- /row -->

<?php get_footer(); ?>
