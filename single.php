<?php get_header(); ?>
<?php get_template_part('partials/navigation/topnav/topnav-minimal'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div itemscope itemtype="http://schema.org/Article" class="post-content">

	<div class="post-header">
		<div itemprop="articleSection" class="post-category-info">

			<?php the_category (' &gt; '); ?>

		</div>

		<h1 itemprop="name" itemprop="headline" class="post-title"><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h1>
		<meta itemprop="dateCreated" content='<?php the_date(); ?>'>
		<div class="giginfo">
			<?php 
			    $giginfo = get_post_meta($post->ID, 'giginfo', true); 

				if ($giginfo) {
				    echo "<span class='giginfo-content'>" . $giginfo . "</span>";
				}
			?>
		</div>

		<div class="author">
			by
			<span itemprop="author">
			<?php $author = get_post_meta($post->ID, 'Author', true);
				if ($author){
					echo $author;
			} ?>
			</span>
		</div>

	</div>

	<div itemprop="image" class="post-thumbnail">
		<?php the_post_thumbnail('full'); ?>
	</div>

	<div class="post-body">

		<div itemprop="about" itemprop="description" class="kicker">
			<?php 
			    $kicker = get_post_meta($post->ID, 'Kicker', true); 

				if ($kicker) {
				    echo $kicker;
				}
			?>
		</div>

		<div itemprop="articleBody">
		<?php the_content(); ?>
		</div>

		<div itemprop="offers" class="tickets">
		<?php 
		    $tickets = get_post_meta($post->ID, 'Tickets', true); 

			if ($tickets) {
			    echo "<span class='tickets-title'><a href='" . $tickets . "'>Buy Tickets</a></span>";
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

		<div itemprop="keywords" class="post-tags"><?php the_tags(); ?></div>
		
	</div>
</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
<?php get_footer(); ?>