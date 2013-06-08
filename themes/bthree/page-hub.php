<?php
/*
Template Name: Page for Hubs
*/
?>
<?php get_header(); ?>
<?php get_header('carousel'); ?>
		<div class="container">
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
		</div>
<?php get_footer('sitemap'); ?>
<?php get_footer(); ?>