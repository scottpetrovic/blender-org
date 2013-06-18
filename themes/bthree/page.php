<?php get_header(); ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
				<?php endwhile; // end of the loop. ?>
<?php get_footer('sitemap'); ?>
<?php get_footer(); ?>