<?php
/*
Template Name: Page for Hubs
*/
?>

<?php get_header(); ?>

<div class="hero-unit">

	    <div id="frontpage" class="carousel slide">
	      <div class="carousel-inner">
	        <!-- Item 1 -->
	        <div class="item active"
	        	style="background-image: url('http://cgcookie.com/blender/files/2012/10/Butterfly_1600px-956x678.jpg');
	        		   background-position: 50% 30%;">
	          <div class="container">
	            <div class="carousel-caption">
	              <h1>Your Own 3D Software</h1>
	              <p class="lead">Blender is the free open source 3D content creation suite, available
	                                for all major operating systems under the GNU General Public License.</p>
	            </div>
				<div class="download">
					<a class="btn btn-large btn-primary" href="#">Download Now</a>
					<p class="small"><small><a href="">What's new?</a> - <a href="">Other Operating Systems</a></small></p>
				</div>
	          </div>
	        </div>
	        <!-- Item 2 -->
	        <div class="item"
	        	style="background-image: url('http://cgcookie.com/blender/files/2012/05/Revelation-956x537.jpg');
	        		   background-position: 50% 10%;">
	          <div class="container">
	            <div class="carousel-caption">
	              <h1>Another example headline.</h1>
	              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	              <a class="btn btn-large btn-primary" href="#">Learn more</a>
	            </div>
	          </div>
	       </div>
	        <!-- Item 3 -->
	        <div class="item"
	        	style="background-image: url('http://cgcookie.com/blender/files/2012/12/X-mas-20121600-956x711.jpg');
	        		   background-position: 50% 80%;">
	          <div class="container">
	            <div class="carousel-caption">
	              <h1>One more for good measure.</h1>
	              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	              <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
	            </div>
	          </div>
	        </div>
		  <ol class="carousel-indicators">
		    <li data-target="#frontpage" data-slide-to="0" class="active"></li>
		    <li data-target="#frontpage" data-slide-to="1"></li>
		    <li data-target="#frontpage" data-slide-to="2"></li>
		  </ol>
	      </div>
	    </div><!-- //carousel -->

</div><!-- //hero-unit -->

		<div class="container">
			<div class="row">
				<div class="span12">
				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</header><!-- .entry-header -->
					
						<div class="entry-content">
						<div class="row">
							<?php the_content(); ?>
						</div>
						</div><!-- .entry-content -->
					</article><!-- #post-<?php the_ID(); ?> -->


				<?php endwhile; // end of the loop. ?>

				</div>
			</div>
		</div>
<?php get_footer('sitemap'); ?>
<?php get_footer(); ?>
