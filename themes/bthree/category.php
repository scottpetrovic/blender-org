<?php
/**
* A Simple Category Template
*/
?>

<?php get_header(); ?>
<?php
while ( have_posts() ) : the_post();
// loop to get custom ids, not efficient but headers can't be defined within a loop
$header_type = get_post_meta(get_the_ID(), 'header_type', true);
$sidebar_type = get_post_meta(get_the_ID(), 'sidebar_type', true);
endwhile; // end of the loop.

if ($header_type == 'static'){
	get_header('static');
} else if ($header_type == 'carousel'){ 
	get_header('carousel');
}?>

<div id="content" role="main" class="container">

<?php if ( have_posts() ) : ?>

<?php

// The Loop
while ( have_posts() ) : the_post();?>
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>

	<div class="entry">
	<?php the_excerpt(); ?>
	
	 <p class="postmetadata"><?php
	  comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
	?></p>
	</div>

<?php endwhile; // End Loop
else: ?>
<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>
</div>

<?php get_footer('sitemap'); ?>
<?php get_footer(); ?>