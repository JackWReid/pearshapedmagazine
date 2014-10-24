<?php get_header(); ?>
<div class="section-header">
	<h1 class="section-header__title">Columns</h1>

	<ul class="category-toggle">
		<li class="category-toggle__button"><a href="<?php echo site_url(); ?>/category/columns">All</a></li>
		<!--<li class="category-toggle__button_active"><a href="<?php echo site_url(); ?>/category/opinion">Opinion</a></li>-->
		<li class="category-toggle__button"><a href="<?php echo site_url(); ?>/category/listening_post">Listening Post</a></li>
		<li class="category-toggle__button"><a href="<?php echo site_url(); ?>/category/spotlight">Spotlight</a></li>
		<li class="category-toggle__button"><a href="<?php echo site_url(); ?>/category/column-archive">Archive</a></li>
	</ul>
</div>

<div class="preview-stream">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="preview-stream__item">
		<div class="preview-stream__item__image">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('medium') ?>
			</a>
		</div>
		<div class="preview-stream__item__info">
			<a href="<?php the_permalink(); ?>">
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
					<?php the_excerpt(); ?>
				</div>
			</a>
		</div>
	</div>
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
</div>

<?php get_footer(); ?>