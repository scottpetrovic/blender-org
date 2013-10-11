<?php
/*
 * The Template for displaying all single posts.
 */
?>
<?php get_header(); ?>

<?php
global $category, $category_id; 

$category = get_the_category();
$category_id = $category[0]->cat_ID;

if (in_category( 'press' ) || in_category( 'faq' )) {
	$is_archive = TRUE;
	include(TEMPLATEPATH . '/header-archive.php');
}
?>

<? if ($is_archive){ ?>
<div class="archive">
	<div class="row">
		<div class="container">
			<select id="archive_select">
				<option selected="selected">Select an item...</option>
			<?php
			query_posts('cat=' . $category_id);
			while (have_posts()) : the_post(); ?>
				<option value="<?php the_permalink() ?>"><?php the_title(); ?></option>
	           <?php 
			endwhile; ?>
			</select>
			<? // let's reset the query, otherwise it keeps going
			wp_reset_query(); ?>
			<div class="article_navigation">
				<?php previous_post_link('%link', '<i class="icon-angle-left"></i> Previous', TRUE); ?>
				<?php next_post_link('%link', 'Next <i class="icon-angle-right"></i>', TRUE); ?>
			</div>
		</div>
	</div>
</div>
<? } ?>
		<div class="container">
			<div class="row">
				<div class="<?=(($sidebar_type == 'sidebar') ? 'span8' : 'span12')?>">
				<?=(($sidebar_type == 'sidebar') ? '<div class="row-fluid"><div class="span12">' : '')?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php edit_post_link('<i class="icon-edit"></i> Edit', '<span class="edit" style="margin-top: -17px;">', '</span>'); ?>
						<h1><?php the_title(); ?></h1>
						<?php if (in_category( 'press' )){?>
							<h5 style="margin-bottom: 0;"><i class="icon-time"></i>  <?php the_time('F jS, Y'); ?></h5>
						<?php } ?>
						<hr class="left width-full" />
						<div class="entry-content">
							<?php the_content(); ?>
						</div>
					</article>
				<?php endwhile; ?>
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
		</div>
<?php get_footer('sitemap'); ?>
<?php get_footer(); ?>
<script>
    $(function(){
      $('#archive_select').bind('change', function () {
          var url = $(this).val();
          if (url) { window.location = url; }
          return false;
      });
    });
</script>