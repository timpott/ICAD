<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<link rel="dns-prefetch" href="//google-analytics.com">
		<link rel="dns-prefetch" href="//www.google-analytics.com">
		
        <link href="<?php echo get_template_directory_uri(); ?>/includes/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/includes/img/icons/apple-touch-icon.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>
		
	<!--[if lt IE 8]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    <div class="top-bar">    
    </div>
    <!-- /top -->
    
    <div class="container">
	    <div class="row">
		    <header class="header" role="banner">
			    <div class="col-lg-16">
				    <nav class="sub-nav pull-right">
					    <ul>
						    <li><a href="#">Login</a></li>
						    <li><a href="#">Search</a></li>
						    <li><a href="#">Cart</a></li>
						    <li><a href="#" target="_blank">Facebook</a></li>
						    <li><a href="#" target="_blank">Twitter</a></li>
						    <li><a href="#" target="_blank">Linkedin</a></li>
					    </ul>
				    </nav>
			    </div>
			    
			    <div class="col-lg-8">
				    <a href="<?php echo home_url(); ?>">
					    <?php $blog_title = get_bloginfo( 'name' ); ?>
			    		<p><?php echo $blog_title; ?></p>
			    	</a>
			    </div>
			    
			    <div class="col-lg-8">
				    <p>Hero</p>
			    </div> 
			    
			    <div class="clearfix"></div>
			    
			    <nav class="nav" role="navigation">
				    <?php html5blank_nav(); ?>
			    </nav>
			    <!-- /nav -->
		    </header>
		    <!-- /header -->
	    </div>
	    <!-- /row -->
	
<!--
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
-->

