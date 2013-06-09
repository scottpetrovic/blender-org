<?php
$count = 0;
while ( have_posts() ) : the_post();

$carousel_size = get_post_meta(get_the_ID(), 'carousel_size', true);

function slides($number){

	global $count;

	$carousel_slides = get_post_meta(get_the_ID(), 'carousel_slides', true);

	if (in_array($number, $carousel_slides)) {

		$slide_title = get_post_meta(get_the_ID(), 'slide_' . $number . '_title', true);
		$slide_link = get_post_meta(get_the_ID(), 'slide_' . $number . '_link', true);
		$slide_description = get_post_meta(get_the_ID(), 'slide_' . $number . '_description', true);
		$slide_position = get_post_meta(get_the_ID(), 'slide_' . $number . '_position', true);
		$slide_image_id = get_post_meta(get_the_ID(), 'slide_' . $number . '_image', true);
		$slide_image = wp_get_attachment_url($slide_image_id);

		echo '
		<!-- Item ' . $number . ' -->
		<div class="item' . (($count == 0) ? ' active' : '') . '"
			style="background-image: url(' . $slide_image . ');
	        		   background-position: 50% 30%;" >
          <div class="container">

            <div class="carousel-caption ' . $slide_position . '">
              <h1 ' . (($slide_description != '') ? '' : 'style="margin-top: 50px"'). '>' . $slide_title . '&nbsp</h1>
              ' . (($slide_description != '') ? '<p class="lead"> ' . $slide_description . '</p>' : ''). '
              <div class="clearfix"></div>
          	</div>
		  </div>
		</div>
	   		';
		$count = $count + 1;
	} // in_array
}

function slides_indicator(){

		$count = 0;
		$carousel_slides = get_post_meta(get_the_ID(), 'carousel_slides', true);

		foreach ($carousel_slides as $slide) {

		if (count($carousel_slides) > 1) {
			echo '
			<!-- Item ' . $count . ' -->
				<li data-target="#carousel" data-slide-to="' . $count . '" class="' . (($count == 0) ? 'active' : '').'" ></li>
		   		';
	
				$count = $count + 1;
			}
		}
}
?>
<?=(($carousel_size == 'full') ? '<div class="full">' : '')?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#carousel').carousel({
			interval: 5000
		});
	});
</script>
<div class="clearfix"></div>
<div class="hero-unit">
    <div id="carousel" class="carousel slide">
    <div class="container">
	  <ol class="carousel-indicators">
		<? slides_indicator(); ?>
	  </ol>
      </div>
      <div class="carousel-inner">
		<? slides('1'); ?>
		<? slides('2'); ?>
		<? slides('3'); ?>
		<? slides('4'); ?>
      </div>
    </div><!-- //carousel -->
</div><!-- //hero-unit -->
<?=(($carousel_size == 'full') ? '</div>' : '')?>
<?php endwhile; // end of the loop. ?>