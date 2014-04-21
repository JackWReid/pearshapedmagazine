<?php
/**
 * Template Name: Contact Us
 *
 * @package WordPress
 * @subpackage pearshapedtheme
 */
get_header(); ?>
<div class="section-header">
	<h1 class="section-title"><?php the_title(); ?></h1>
</div>
<div class="link-section-mobile">
	<span class="link-title"><a href="http://localhost:8888/contact-us/email-us">Email Us</a></span>
</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>