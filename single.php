<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage pearshapedtheme
 */
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="post-content">

	<div class="post-header">
		<div class="post-category-info">

			<?php the_category (' &gt; '); ?>

		</div>

		<h1 class="post-title"><?php the_title(); ?></h1>

		<div class="giginfo">
			<?php 
			    $giginfo = get_post_meta($post->ID, 'giginfo', true); 

				if ($giginfo) {
				    echo "<span class='giginfo-content'>" . $giginfo . "</span>";
				}
			?>
		</div>

		<div class="author">
			<?php 
			    $author = get_post_meta($post->ID, 'Author', true); 

				if ($author) {
				    echo "by " . $author;
				}
			?>
		</div>

	</div>

	<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div>

	<div class="post-body">

		<div class="kicker">
			<?php 
			    $kicker = get_post_meta($post->ID, 'Kicker', true); 

				if ($kicker) {
				    echo $kicker;
				}
			?>
		</div>

		<?php the_content(); ?>

		<div class="tickets">
		<?php 
		    $tickets = get_post_meta($post->ID, 'Tickets', true); 

			if ($tickets) {
			    echo "<span class='tickets-title'><a href='" . $tickets . "'>Buy tickets</a></span>";
			}
		?>
		</div>

		<div class="fans-of">
		<?php 
		    $fansof = get_post_meta($post->ID, 'fansof', true); 

			if ($fansof) {
			    echo "<span class='fans-of-title'>Recommended for fans of: </span>" . $fansof;
			}
		?>
		</div>

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

	</div>
	<div class="sidebar">
		<?php 
		    $sidebar = get_post_meta($post->ID, 'Sidebar', true); 

				if ($sidebar) {
				    echo $sidebar;
				}
		?>
		</div>
	<div class="related-posts">

		<?php wp_related_posts()?>

		<div class="post-tags"><?php the_tags(); ?></div>
		
	</div>
</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
<?php get_footer(); ?>