<?php get_header(); ?>
<div class="section-header">
	<h1 class="section-title">Events</h1>

	<ul class="category-toggler">
		<li class="button-active"><a href="http://pearshapedexeter.com/category/listings-2">Listings</a></li>
		<li class="button"><a href="http://pearshapedexeter.com/category/event-previews">Upcoming</a></li>
		<li class="button"><a href="http://pearshapedexeter.com/category/event-reviews">Reviews</a></li>
	</ul>
</div>

<div class="listings-stream">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<a href="<?php the_permalink(); ?>">
		<h1 class="preview-title"><?php the_title(); ?></h1>
		<div class="listings-content">
			<?php the_content(); ?>
		</div>
	</a>
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
</div>

<?php get_footer(); ?>