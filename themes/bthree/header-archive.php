<div class="hero-unit header_static">
	    <div id="header_static">
			<?php while ( have_posts() ) : the_post();
				$header_title = get_post_meta(get_the_ID(), 'header_static_title', true);
				$header_image_id = get_post_meta(get_the_ID(), 'header_static_image', true);
				$header_image_src = wp_get_attachment_url( $header_image_id);
				$header_image_offset_vertical = get_post_meta(get_the_ID(), 'header_static_image_vertical', true);
			?><?php endwhile; // end of the loop. ?>
	        <div class="backdrop"
	        	style="background-image: url(<?=$header_image_src?>);
	        		   background-position: 50% '. $header_image_offset_vertical . '%;">
	          <div class="container">
	              <div class="panel"><h1><?php echo($category[0]->cat_name); ?></h1>
	              </div>
	          </div>
	      </div>
	    </div><!-- //carousel -->
</div><!-- //hero-unit -->
<div class="subnav">
	<div class="container level-2">
	<?php second_level_nav();?>
	</div>
	<div class="level-3">
		<div class="container">
			<?php third_level_nav();?>
		</div>
	</div>
</div>
