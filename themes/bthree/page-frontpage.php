<?php
/*
Template Name: Frontpage
*/
?>
<?php get_header(); ?>
<div class="frontpage hero-unit">

	    <div id="frontpage" class="carousel slide">
	      <div class="carousel-inner">
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
<div class="container sections">
  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="span4">
      <h2>Support</h2>
      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
      <p><a class="btn" href="#">View details &raquo;</a></p>
    </div><!-- /.span4 -->
    <div class="span4">
      <h2>Get Involved</h2>
      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn" href="#">View details &raquo;</a></p>
    </div><!-- /.span4 -->
    <div class="span4">
      <h2>News</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn" href="#">View details &raquo;</a></p>
    </div><!-- /.span4 -->
  </div><!-- /.row -->

  <div id="push"></div>
</div>
<?php get_footer('sitemap'); ?>
<?php get_footer(); ?>
