<?php get_header(); ?>

<div class="page-static">
	<?php get_template_part('partials/headers/compact'); ?>
	<div class="grid-main">
		<div class="page-static__title">
			<h1><?php the_title(); ?></h1>
		</div>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="page-static__content">
			<?php the_content(); ?>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
	</article>
</div>

<?php get_footer(); ?>