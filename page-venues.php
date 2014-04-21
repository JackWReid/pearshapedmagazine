<?php
/*
 * Template Name: Default Page
 *
 * @package WordPress
 * @subpackage pearshapedtheme
 */
get_header(); ?>
<div class="section-header">
	<h1 class="section-title"><a href="http://localhost:8888/directory">Directory</a></h1>

	<ul class="category-toggler">
		<li class="button"><a href="http://localhost:8888/directory/artists">Artists</a></li>
		<li class="button-active"><a href="http://localhost:8888/directory/venues">Venues</a></li>
		<li class="button"><a href="http://localhost:8888/directory/promoters">Promoters</a></li>
	</ul>
</div>
<div class="thumbnail-grid">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
</div>

<?php get_footer(); ?>