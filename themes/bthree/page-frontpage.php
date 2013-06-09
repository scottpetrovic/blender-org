<?php
/*
Template Name: Frontpage
*/
?>
<?php get_header(); ?>
		<div class="container">
			<div class="row">
				<div class="<?=(($sidebar_type == 'sidebar') ? 'span8' : 'span12')?>">
				<?=(($sidebar_type == 'sidebar') ? '<div class="row-fluid"><div class="span12">' : '')?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="entry-content">
							<?php the_content(); ?>
						</div><!-- .entry-content -->
					</article><!-- #post-<?php the_ID(); ?> -->
				<?php endwhile; // end of the loop. ?>
				<?=(($sidebar_type == 'sidebar') ? '</div></div>' : '')?>
			<? if ($sidebar_type == 'bottombar'){ ?>
				</div> <!-- // span12 -->
			</div> <!-- // row --> 
			<div class="row">
				<div class="span12 horizontal">
					<hr/>
					<div class="row">
					<?php get_sidebar(); ?>
					</div>
				</div> <!-- // span12 -->
			</div> <!-- // row --> 
			<? } else if ($sidebar_type == 'sidebar') { ?>
				</div> <!-- // span8 -->
				<div class="span4">
					<?php get_sidebar(); ?>
				</div>
			</div><!-- // row --> 
			<? } else {
				echo '</div>';
			}?>
		</div>
<?php get_footer('sitemap'); ?>
<?php get_footer(); ?>