<?php get_header(); ?>
<div class="section-header">
	<h1 class="section-title"><?php single_cat_title(); ?></h1>
	
	<ul class="category-toggler">
		<li class="button"><a href="http://localhost:8888/category/reviews">All</a></li>
		<li class="button-active"><a href="http://localhost:8888/category/local-reviews">Local</a></li>
		<li class="button"><a href="http://localhost:8888/category/global-reviews">Global</a></li>
	</ul>
</div>

</div>
<div class="thumbnail-grid">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="thumbnail-card">
			<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail() ?>
		</div>
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
<?php get_footer(); ?>