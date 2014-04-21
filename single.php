<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage pearshapedtheme
 */
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="post-header">
	<h1 class="post-title"><?php the_title(); ?></h1>
	<div class="author">
		<?php 
		    $author = get_post_meta($post->ID, 'Author', true); 

			if ($author) {
			    echo $author;
			}
		?>
	</div>
	<?php the_post_thumbnail(); ?>
	<div class="sidebar">
		<?php 
		    $sidebar = get_post_meta($post->ID, 'Sidebar', true); 

			if ($sidebar) {
			    echo $sidebar;
			}
		?>
	</div>
</div>

<div class="post-content">

	<div class="kicker">
		<?php 
		    $kicker = get_post_meta($post->ID, 'Kicker', true); 

			if ($kicker) {
			    echo $kicker;
			}
		?>
	</div>

	<?php the_content(); ?>

	<div class="picks">
	<?php 
	    $picks = get_post_meta($post->ID, 'Picks', true); 

		if ($picks) {
		    echo "<span class='picks-title'>Picks: </span>" . $picks;
		}
	?>
	</div>

	<div class="rating">
	<?php 
	    $rating = get_post_meta($post->ID, 'Rating', true); 

		if ($rating) {
		    echo "Rating: " . $rating . "/5";
		}
	?>
	</div>
	<div class="related-posts"><?php related_posts(); ?></div>
</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
<?php get_footer(); ?>