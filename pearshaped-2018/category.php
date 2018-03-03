<?php get_header(); ?>

<div class="page-list">

<?php get_template_part('partials/headers/compact'); ?>

<section class="post-list grid-main">
  <header>
    <h1><?php single_cat_title(); ?></h1>
    <?php
      $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $max = $wp_query->max_num_pages;

      if ($page > 1) {
        echo "<p>(" . $page . "/" . $max . ")</p>";
      }
    ?>
  </header>
	<ul>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <li>
      <?php the_post_thumbnail('medium') ?>
      <div>
					<a href="<?php the_permalink(); ?>">
					<h1><?php the_title(); ?></h1>
          <p class="post-list__author"><?php echo get_post_meta($post->ID, 'Author', true); ?></p>
          <p class="post-list__rating" data-rating=<?php echo get_post_meta($post->ID, 'Rating', true); ?>></p>
					<p class="post-list__excerpt"><?php the_excerpt(); ?></p>
					</a>
				</div>
    </li>
    <?php endwhile; endif; ?>
  </ul>
  
  <div class="pagination">
    <p><?php next_posts_link('Older posts'); ?></p>
    <p><?php previous_posts_link('Newer posts'); ?></p>    
  </div>
</section>

</div>

<?php get_template_part('partials/scripts/ratings'); ?>
<?php get_footer(); ?>