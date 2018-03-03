<?php get_header(); ?>

<div class="page-list">

	<?php get_template_part('partials/headers/compact'); ?>

	<div class="grid-main">
	<?php get_search_form(); ?>

	<?php if ( get_search_query() != '' ): ?>

	<section class="post-list">
		<header>
			<h1>Results for '<?php echo get_search_query(); ?>'</h1>
		</header>
		<ul>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<li>
				<?php the_post_thumbnail('medium') ?>
				<div>
					<a href="<?php the_permalink(); ?>">
						<h1><?php the_title(); ?></h1>
						<h3>
							<?php echo get_post_meta($post->ID, 'Author', true); ?>
						</h3>
						<div>
							<?php echo get_post_meta($post->ID, 'Kicker', true); ?>
						</div>
					</a>
				</div>
			</li>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</ul>
	</section>

	<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>