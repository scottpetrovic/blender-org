<div class="hero-unit header_static">
	    <div id="header_static">
			<?php while ( have_posts() ) : the_post();
				$header_title = get_post_meta(get_the_ID(), 'header_static_title', true);
				$header_image_id = get_post_meta(get_the_ID(), 'header_static_image', true);
				$header_image_src = wp_get_attachment_url( $header_image_id);
			?>
	        <div class="backdrop"
	        	style="background-image: url(<?=$header_image_src?>);">
	          <div class="container">
	              <div class="panel"><h1><?=($header_title != '') ? $header_title : the_title() ; ?></h1>
	              </div>

				<?php endwhile; // end of the loop. ?>
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