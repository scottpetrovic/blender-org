<?php get_header(); ?>

<?php
// hero-unit class defines the background image
?>
<div class="hero-unit header_static">
	    <div id="header_static">
			<div class="backdrop"
	        	style="background-image: url();
	        		   background-position: 50% '. $header_image_offset_vertical . '%;">
				<div class="container">			  
					<div class="panel">
						 <h1>Page Not Found (404)</h1>
					</div>
				</div>
			</div>
	    </div>
</div>


   <div class="container">
	   <div class="row row-fluid">
	   		<div class="span12">
		   		<h1>Page doesn't exist (anymore)</h1>
				<article>					
						<p>Oops! You have accessed the Blender website with a link to a page that does not exist, or was moved away. Please browse our site to find the content you were looking for. Below you can find sitemap overview as well.</p>
						<p>Thanks,</p>
						<p>blender.org web team</p>
				</article>				
	   		</div>
	   </div>
	   
   
<div class="row">
		<div class="span12 horizontal">
				<hr/>						
				<div class="row">
						<ul id="sidebar">
								<div class="widget widget_text widgetable-wrap">
									<h4 class="title widgetable-title">Car Modeling and Texturing</h4>
									<div class="textwidget widgetable-content">
										<p><a href="http://www.blender3d.org/e-shop/product_info_n.php?products_id=159"><img class="alignnone size-full wp-image-637" alt="camaro" src="<?php  bloginfo( 'siteurl' );   ?>/wp-content/uploads/2013/06/camaro.jpg" width="370" height="100" /></a></p>
									</div>
								</div>
								
								<div class="widget widget_text widgetable-wrap">
									<h4 class="title widgetable-title">Blender Network</h4>
									<div class="textwidget widgetable-content">
										<p><a href="<?php bloginfo( 'siteurl' );  ?>/wp-content/uploads/2013/06/network.jpg"><img class="alignnone size-full wp-image-354" alt="network" src="<?php  bloginfo( 'siteurl' );  ?>/wp-content/uploads/2013/06/network.jpg" width="370" height="100" /></a></p>
									</div>
								</div>
								
								<div class="widget widget_text widgetable-wrap">
									<h4 class="title widgetable-title">Tears of Steel</h4>
									<div class="textwidget widgetable-content">
										<p><a href="<?php  bloginfo( 'siteurl' );  ?>/wp-content/uploads/2013/06/tos.jpg"><img class="alignnone size-full wp-image-355" alt="tos" src="<?php  bloginfo( 'siteurl' );  ?>/wp-content/uploads/2013/06/tos.jpg" width="370" height="100" /></a></p>
									</div>
								</div>
								
								<div class="widget widget_text widgetable-wrap">
									<h4 class="title widgetable-title">Blender Conference</h4>
									<div class="textwidget widgetable-content">
										<p><a href="<?php bloginfo( 'siteurl' );  ?>/wp-content/uploads/2013/07/conference-2012.jpg"><img class="alignnone size-full wp-image-585" alt="conference-2012" src="<?php  bloginfo( 'siteurl' );   ?>/wp-content/uploads/2013/07/conference-2012.jpg" width="800" height="217" /></a></p>
									</div>
								</div>
						</ul>	<!-- // sidebar -->				
				</div>
					
		</div> <!-- // span12 -->
</div> <!-- // row --> 	   
	   
	   
	   
	   
	   
	   
	   
   </div> <!-- //end container -->

<?php get_footer('sitemap'); ?>
<?php get_footer(); ?>