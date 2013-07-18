<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
	<head>
		<? $template_name = get_page_template_name(); ?>
		<meta charset="utf-8">
		<title><?=(($template_name != 'page-frontpage') ? the_title() . ' - ': '' )?><?=get_bloginfo('name');?> - <?=get_bloginfo('description');?> </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Blender is the open source, cross platform suite of tools for 3D creation." />
		<meta name="author" content="">

		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
		<link href="<?php bloginfo( 'template_directory' ); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php bloginfo( 'template_directory' ); ?>/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="<?php bloginfo( 'template_directory' ); ?>/assets/css/bthree.css" rel="stylesheet">
		<link href="<?php bloginfo( 'template_directory' ); ?>/assets/css/font-awesome.css" rel="stylesheet">
		<link href="<?php bloginfo( 'template_directory' ); ?>/assets/css/font-blont.css" rel="stylesheet">
		<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/assets/js/jquery-1.8.3.min.js" /></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/assets/js/bootstrap-tooltip.js"></script>
		<?php
		if ($template_name == 'page-download') { ?>
		<link href="<?php bloginfo( 'template_directory' ); ?>/assets/css/page_download.css" rel="stylesheet">
		<? } else if ($template_name == 'page-frontpage') { ?>
		<link href="<?php bloginfo( 'template_directory' ); ?>/assets/css/page_frontpage.css" rel="stylesheet">
		<? } ?>
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
			                <!-- <li class="nav pull-right"><i class="icon-search"></i></li> -->
			                <li class="nav pull-right"><a href="<?=site_url()?>/e-shop">Store</a></li>
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
<div class="clearfix"></div>
<?php global $user_ID; if( $user_ID ) : ?>
	<?=(current_user_can('level_10') ? '<div class="soyadmin"><i class="icon-rocket"></i></div>' : '')?>
<?php endif; ?>