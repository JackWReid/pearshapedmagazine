<?php get_header(); ?>
<?php get_template_part('partials/navigation/topnav/topnav-full'); ?>

<div class="section-header">
	<h1 class="section-header__title"><?php the_title(); ?></h1>
</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>