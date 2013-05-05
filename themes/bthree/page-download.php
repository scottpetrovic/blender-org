<?php
/*
Template Name: Download Page
*/
?>

<?php get_header(); ?>
<?php get_header('title'); ?>

		<div class="container download">
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
				  <li class="active windows"><a id="active_windows" href="#windows" data-toggle="tab">Windows</a></li>
				  <li><a id="active_osx" href="#osx" data-toggle="tab">Mac OSX</a></li>
				  <li><a id="active_linux" href="#linux" data-toggle="tab">Linux</a></li>
				  <li><a id="active_source" href="#source" data-toggle="tab">Source Code</a></li>
				</ul>
				<div class="tab-content windows">
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
<script type="text/javascript">
	$(document).ready(function(){
		$('#active_windows').live('click',function(){
		    $('.tab-content').addClass('windows').removeClass('linux osx source');
		    $('.nav-tabs li').removeClass('osx linux source');
			$('.nav-tabs li.active').addClass('windows');
		});
		$('#active_osx').live('click',function(){
		    $('.tab-content').addClass('osx').removeClass('windows linux source');
		    $('.nav-tabs li').removeClass('windows linux source');
			$('.nav-tabs li.active').addClass('osx');
		});
		$('#active_linux').live('click',function(){
		    $('.tab-content').addClass('linux').removeClass('windows osx source');
		    $('.nav-tabs li').removeClass('windows osx source');
			$('.nav-tabs li.active').addClass('linux');
		});
		$('#active_source').live('click',function(){
		    $('.tab-content').addClass('source').removeClass('windows linux osx');
		    $('.nav-tabs li').removeClass('windows linux osx');
			$('.nav-tabs li.active').addClass('source');
		});
	});
</script>
<?php get_footer('sitemap'); ?>
<?php get_footer(); ?>