<?php
/*
Template Name: Page with Header
*/
?>

<?php get_header(); ?>

		<div class="container">

				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</header><!-- .entry-header -->
					
						<div class="row entry-content">
							<?php the_content(); ?>
						</div><!-- .entry-content -->
					</article><!-- #post-<?php the_ID(); ?> -->


				<?php endwhile; // end of the loop. ?>
		</div>
<?php get_footer(); ?>