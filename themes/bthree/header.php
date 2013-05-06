<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>blender.org - Home of the Blender project - Free and Open 3D Creation Software </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Blender is the open source, cross platform suite of tools for 3D creation." />
		<meta name="author" content="">

		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,500' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,500' rel='stylesheet' type='text/css'>
		<link href="<?php bloginfo( 'template_directory' ); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php bloginfo( 'template_directory' ); ?>/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="<?php bloginfo( 'template_directory' ); ?>/assets/css/bthree.css" rel="stylesheet">
		<link href="<?php bloginfo( 'template_directory' ); ?>/assets/css/font-awesome.css" rel="stylesheet">
		<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/assets/js/jquery-1.8.3.min.js" /></script>
		<?php
		$template_name = get_page_template_name();
		if ($template_name == 'page-download') { ?>
			<link href="<?php bloginfo( 'template_directory' ); ?>/assets/css/page_download.css" rel="stylesheet">
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

<<<<<<< HEAD

		<div class="header">
			<div class="container">
=======
<?php 
	function page_ancestry() { 
		//generating an array with page ids 
		//with the top most page in array element $page_tree[0]
		global $post;
		$this_page = $post;
		$test = true;
		$page_lineage = array();
		$page_lineage[] = $this_page->ID; 
		  while( $test ) :
		    if($this_page->post_parent) :
		    $page_lineage[] = $this_page->post_parent;
		    $this_page = get_page($this_page->post_parent);
		    else :
		    $test = false;
		    endif;
		  endwhile;
		$page_tree = array_reverse($page_lineage);
		return $page_tree;
	}
	
	/*
	function top_level_list_pages() {
		?>
		<div class="layer-parent">
			<?php wp_page_menu('depth=1'); ?>
		</div> <!--/ .layer-parent -->
		<?php } 
	*/
	
	function child_level_list_pages() {
		global $post; 
		$pages_tree = page_ancestry(); 
		if($pages_tree[0]) : 
			$this_page = $pages_tree[0]; 
			// find a condition that shows this page and its brothers/sisters in the ancestry of the current page
			$plist = wp_list_pages('title_li=&child_of=' . $this_page .'&depth=1&echo=0'); 
			if(plist) { ?>
				<div class="navbar second_level">
					<ul class="nav">
						<?php echo $plist; ?>
					</ul>
					<div class="clearfix"></div>
				</div> <!--/ .second-level -->
			<?php }
		endif; //end if($pages_tree[0]) 
	}
	
	function grandchild_level_list_pages() { 
		global $post; 
		$pages_tree = page_ancestry(); 
		if($pages_tree[1]) : 
			$this_page = $pages_tree[1]; 
			// find a condition that shows this page and its brothers/sisters in the ancestry of the current page
			$plist = wp_list_pages('title_li=&child_of=' . $this_page .'&depth=1&echo=0'); 
			if(plist) { ?>
				<div class="navbar third_level">
					<ul class="nav">
						<?php echo $plist; ?>
					</ul>
					<div class="clearfix"></div>
				</div> <!--/ .third-level -->
			<?php }
		endif; //end if($pages_tree[1]) 
	}
	
?>
		<div class="container">
			<div class="header">
>>>>>>> 8367549cadc3c36d7712b9fe88dcfe94a6742fc7
			    <div class="navbar">
					<a class="logo" href="<?php echo site_url(); ?>"></a>
				    <div class="navbar-inner">

			          <div class="nav-collapse collapse">
			            <ul class="nav">
		            	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => '', 'items_wrap' => '%3$s') ); ?>  
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
<<<<<<< HEAD
			    <?php second_level_nav();?>
			    <div class="clearfix"></div>
			    <?php third_level_nav();?>
			</div>
=======
				    <?php child_level_list_pages();?>
				    <?php grandchild_level_list_pages();?>
>>>>>>> 8367549cadc3c36d7712b9fe88dcfe94a6742fc7

			</div>
			 <div class="clearfix"></div>
		</div>
