<div class="hero-unit page_title">
	    <div id="page_title">
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