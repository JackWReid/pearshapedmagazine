<?php get_header(); ?>
<div class="section-header">
	<h1 class="section-title"><?php single_cat_title(); ?></h1>
</div>

</div>
<div class="thumbnail-grid">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="thumbnail-card">
			<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail() ?>
			<span class="thumbnail-title"><?php the_title(); ?></span>
		</div>
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
<?php get_footer(); ?>