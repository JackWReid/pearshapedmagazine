<?php get_header(); ?>
<?php get_template_part('partials/navigation/topnav/topnav-full'); ?>

<div class="section-header">
	<h1 class="section-header__title"><?php single_cat_title(); ?></h1>
</div>

<div class="preview-stream">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<a href="<?php the_permalink(); ?>">
	<div class="preview-stream__item row">
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
			<div class="preview-stream__item__content">
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