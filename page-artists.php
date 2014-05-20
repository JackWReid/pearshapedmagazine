<?php
/*
 * Template Name: Default Page
 *
 * @package WordPress
 * @subpackage pearshapedtheme
 */
get_header(); ?>
<div class="section-header">
	<h1 class="section-header__title"><a href="http://pearshapedexeter.com/directory">Directory</a></h1>

	<ul class="category-toggle">
		<li class="category-toggle__button_active"><a href="http://pearshapedexeter.com/directory/artists">Artists</a></li>
		<li class="category-toggle__button"><a href="http://pearshapedexeter.com/directory/venues">Venues</a></li>
		<li class="category-toggle__button"><a href="http://pearshapedexeter.com/directory/promoters">Promoters</a></li>
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