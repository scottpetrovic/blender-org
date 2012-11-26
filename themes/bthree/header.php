<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Hello &middot; blender.org</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<!-- Styles -->
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link href="<?php bloginfo( 'template_directory' ); ?>/assets/css/bootstrap.css" rel="stylesheet">
		<link href="<?php bloginfo( 'template_directory' ); ?>/assets/css/bootstrap-responsive.css" rel="stylesheet">
		<link href="<?php bloginfo( 'template_directory' ); ?>/assets/css/bthree.css" rel="stylesheet">
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<!-- Fav and touch icons -->
		<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/assets/ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo( 'template_directory' ); ?>/assets/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo( 'template_directory' ); ?>/assets/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo( 'template_directory' ); ?>/assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php bloginfo( 'template_directory' ); ?>/assets/ico/apple-touch-icon-57-precomposed.png">
	</head>

	<body>
	
		<!-- NAVBAR
	    ================================================== -->
	    <!-- Wrap the .navbar in .container to center it on the page and provide easy way to target it with .navbar-wrapper. -->
	    <div class="container navbar-wrapper">
	
	      <div class="navbar navbar-inverse">
	        <div class="navbar-inner">
	          <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
	          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </a>
	          <a class="brand" href="/">blender.org</a>
	          <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
	          <div class="nav-collapse collapse">
	            <ul class="nav">
	            	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => '', 'items_wrap' => '%3$s') ); ?>
	              <li class="active"><a href="#">features</a></li>
	              <li><a href="#">download</a></li>
	              <li><a href="#">developers</a></li> 
	              <li><a href="#">training</a></li>              
	            </ul>
	          </div><!--/.nav-collapse -->
	        </div><!-- /.navbar-inner -->
	      </div><!-- /.navbar -->
	
	    </div><!-- /.container -->
	    

	    