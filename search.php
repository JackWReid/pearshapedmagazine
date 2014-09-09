<?php get_header(); ?>
<div class="section-header">
	<h1 class="section-header__title">Search</h1>
</div>

<div class="link-section">
	<span class="link-section__title">Results for '<?php echo get_search_query(); ?>'</span>
</div>

<div class="preview-stream">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="preview-stream__item row">
	<a href="<?php the_permalink(); ?>">
		<div class="four columns">
			<?php the_post_thumbnail('medium') ?>
		</div>
		<div class="eight columns">
			<h1 class="preview-stream__item__title"><?php the_title(); ?></h1>
			<h3 class="preview-stream__item__author">
				<?php 
				    $author = get_post_meta($post->ID, 'Author', true); 

					if ($author) {
					    echo $author;
					}
				?>
			</h3>
			<?php the_excerpt(); ?>
			</a>
		</div>
		
	</div>
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
</div>
<?php get_footer(); ?>