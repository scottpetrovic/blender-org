<?php
/*
Template Name: Download Page
*/
?>

<?php get_header(); ?>
<?php get_header('title'); ?>
		<div class="container">
			<div class="row">
				<div class="span8">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
					<?php 
					$blender_version = get_post_meta(get_the_ID(), 'blender_version', true);
					$blender_version_char = get_post_meta(get_the_ID(), 'blender_version_char', true);
					
					if ($blender_version_char){
						$current_version = $blender_version . $blender_version_char;						
					} else {
						$current_version = $blender_version;
					}

					?>

				<ul class="nav nav-tabs">
				  <li class="active" ><a href="#windows" data-toggle="tab">Windows</a></li>
				  <li><a href="#osx" data-toggle="tab">Mac OSX</a></li>
				  <li><a href="#linux" data-toggle="tab">Linux</a></li>
				  <li><a href="#source" data-toggle="tab">Source Code</a></li>
				</ul>
				<div class="tab-content">
				  <div class="tab-pane fade in active" id="windows">
				  	<h1>Windows <?=$current_version?></h1>
			  	  </div>
				  <div class="tab-pane fade" id="osx">
				  	<h1>Mac OSX <?=$current_version?></h1>				  	
				  </div>
				  <div class="tab-pane fade" id="linux">
				  	<h1>Linux <?=$current_version?></h1>
				  </div>
				  <div class="tab-pane fade" id="source">
				  	<h1>Source code for Blender <?=$current_version?></h1>
				  </div>
				</div>
 
 				<?php endwhile; // end of the loop. ?>
				</div> <!-- // span8 -->
				<div class="span4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
<?php get_footer('sitemap'); ?>
<?php get_footer(); ?>