<?php
/*
Template Name: Frontpage
*/
?>
<?php get_header(); ?>
<div class="frontpage">
<?php get_header('carousel'); ?>
</div>
	<div class="container sections">
		<div class="row">
			<div class="span12">
			<?php while ( have_posts() ) : the_post(); ?>
	
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-<?php the_ID(); ?> -->
	
			<?php endwhile; // end of the loop. ?>
			</div>
		</div>
		<div class="row">
			<?php get_sidebar('Footer'); ?> 
		</div>
	</div>
  <div id="push"></div>
</div>
<?php get_footer('sitemap'); ?>
<?php get_footer(); ?>
