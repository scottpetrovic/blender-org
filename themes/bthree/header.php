<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>blender.org - Home of the Blender project - Free and Open 3D Creation Software </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Blender is the open source, cross platform suite of tools for 3D creation." />
		<meta name="author" content="">

		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:400,700,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,500' rel='stylesheet' type='text/css'>
		<link href="<?php bloginfo( 'template_directory' ); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php bloginfo( 'template_directory' ); ?>/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="<?php bloginfo( 'template_directory' ); ?>/assets/css/bthree.css" rel="stylesheet">
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<!-- Fav and touch icons -->
		<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo( 'template_directory' ); ?>/assets/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo( 'template_directory' ); ?>/assets/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo( 'template_directory' ); ?>/assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php bloginfo( 'template_directory' ); ?>/assets/ico/apple-touch-icon-57-precomposed.png">
	</head>

	<body>
	
		<div class="header">
			<div class="container">
			    <div class="navbar">
					<a class="logo" href="<?php echo site_url(); ?>"></a>
				    <div class="navbar-inner">

			          <div class="nav-collapse collapse">
			            <ul class="nav">
		            	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => '', 'items_wrap' => '%3$s') ); ?>  
						<?php
						  if($post->post_parent)
						  	$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
						  else
						  	$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0&depth=1");
						  if ($children) { ?>
						  	<ul class="sub-nav">
							  	<?php echo $children; ?>
							</ul>
						<?php } ?>
			            </ul>
			            <ul class="nav pull-right">
			                <li><a href="#">Store</a></li>
		                </ul>
			          </div><!--/.nav-collapse -->

				    </div>

			          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			          </a>

				    <div class="clearfix"></div>
			    </div> <!--  // NAV BAR -->
			</div>
		</div>