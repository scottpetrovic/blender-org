<?php
/*
 * Template for FAQ Category
 */
?>

<?php get_header(); ?>

<div class="hero-unit header_static">
	    <div id="header_static">
	        <div class="backdrop">
	          <div class="container">
	              <div class="panel"><h1><?php single_cat_title(); ?></h1>
	              </div>
	          </div>
	      </div>
	    </div><!-- //carousel -->
</div><!-- //hero-unit -->
<div class="subnav">
	<div class="container level-2">
	<?php second_level_nav();?>
	</div>
	<div class="level-3">
		<div class="container">
			<?php third_level_nav();?>
		</div>
	</div>
</div>


<div id="content" role="main" class="container">

<?php if ( have_posts() ) : ?>
	<?php
	while ( have_posts() ) : the_post();?>
	<h3>
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
	</h3>

	<?php endwhile;
	else: ?>
	<p>No articles under this category.</p>

	<?php endif; ?>
</div>

<?php get_footer('sitemap'); ?>
<?php get_footer(); ?>
