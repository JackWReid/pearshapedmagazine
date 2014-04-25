<?php
/*
 * Template Name: Directory Page
 *
 * @package WordPress
 * @subpackage pearshapedtheme
 */
get_header(); ?>
<div class="section-header">
	<h1 class="section-title"><a href="http://pearshapedexeter.com/directory"><?php the_title(); ?></a></h1>

	<ul class="category-toggler">
		<li class="button"><a href="http://pearshapedexeter.com/directory/artists">Artists</a></li>
		<li class="button"><a href="http://pearshapedexeter.com/directory/venues">Venues</a></li>
		<li class="button"><a href="http://pearshapedexeter.com/directory/promoters">Promoters</a></li>
	</ul>
</div>
<div class="page-wrapper directory-pad">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
</div>

<?php get_footer(); ?>