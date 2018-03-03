<?php get_header(); ?>

<div class="page-article">

<?php get_template_part('partials/headers/compact'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article>
	<header>
		<h1><?php the_title(); ?></h1>
    <p>by <?php echo get_post_meta($post->ID, 'Author', true); ?></p>
    <?php
      $giginfo = get_post_meta($post->ID, 'giginfo', true);
      if ($giginfo) {
        echo "<p>" . $giginfo . "</p>";
      }
    ?>
  </header>
  
  <figure>
    <?php the_post_thumbnail('full'); ?>
  </figure>

  <p class="article-dek">
  <?php echo get_post_meta($post->ID, 'Kicker', true); ?>
  </p>

  <div class="article-content">
    <time><?php the_date(); ?></time>

    <?php $tickets = get_post_meta($post->ID, 'Tickets', true);
			if ($tickets) {
        echo "<p><a href='" . $tickets . "'>Buy Tickets</a></p>";
			}
		?>

    <?php the_content(); ?>

		<?php $picks = get_post_meta($post->ID, 'Picks', true);
			if ($picks) {
        echo "<p>Picks: </p>" . $picks;
			}
		?>

		<?php
		  $rating = get_post_meta($post->ID, 'Rating', true);
			if ($rating) {
        echo "<p class='article-rating'>Rating: " . $rating . "/5</p>";
			}
    ?>

    <?php the_category (' &middot; '); ?>

    <?php
      $sidebar = get_post_meta($post->ID, 'Sidebar', true);
      if ($sidebar) {
        echo $sidebar;
      }
    ?>
  </div>

  <?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; ?>

  </article>

  <aside class="recirc">
    <h1>More Like This</h1>
    <ul class="recirc-list">
  </aside>

</div>

<?php get_template_part('partials/scripts/recirc'); ?>
<?php get_template_part('partials/footer'); ?>