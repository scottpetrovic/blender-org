<div class="hero-unit page_title">
	    <div id="page_title">
	        <div
	        	style="background-image: url('http://cgcookie.com/blender/files/2012/10/Butterfly_1600px-956x678.jpg');
	        		   background-position: 50% 30%;">
	          <div class="container">
				<?php while ( have_posts() ) : the_post(); ?>
	              <div class="panel"><h1><?php the_title(); ?></h1></div>
				<?php endwhile; // end of the loop. ?>
	          </div>
	      </div>
	    </div><!-- //carousel -->
</div><!-- //hero-unit -->