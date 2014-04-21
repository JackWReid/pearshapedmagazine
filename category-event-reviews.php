<?php get_header(); ?>
<div class="section-header">
	<h1 class="section-title">Events</h1>
</div>
<ul class="category-toggler">
	<li class="button"><a href="http://pearshapedexeter.com/category/listings">Listings</a></li>
	<li class="button"><a href="http://pearshapedexeter.com/category/event-previews">Upcoming</a></li>
	<li class="button-active"><a href="http://pearshapedexeter.com/category/event-reviews">Reviews</a></li>
</ul>
<div class="preview-stream">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<a href="<?php the_permalink(); ?>">
	<div class="preview-item row">
		<div class="four columns">
			<?php the_post_thumbnail() ?>
		</div>
		<div class="eight columns">
			<h1 class="preview-title"><?php the_title(); ?></h1>
			<h3 class="preview-author">
				<?php 
				    $author = get_post_meta($post->ID, 'Author', true); 

					if ($author) {
					    echo $author;
					}
				?>
			</h3>
			<div class="preview-content">
				<?php the_content(); ?>
			</div>
		</div>
		</a>
	</div>
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
</div>
<?php get_footer(); ?>