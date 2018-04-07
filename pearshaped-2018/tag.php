<?php get_header(); ?>

<div class="page-list">

<?php get_template_part('partials/headers/compact'); ?>

<section class="post-list grid-main">
  <header>
    <h1><?php single_cat_title(); ?></h1>
  </header>
	<ul>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <li>
        <?php the_post_thumbnail('medium') ?>
				<div>
					<a href="<?php the_permalink(); ?>">
					<h1><?php the_title(); ?></h1>
					<p class="post-list__author"><?php echo get_post_meta($post->ID, 'Author', true); ?></p>
					<p class="post-list__excerpt"><?php the_excerpt(); ?></p>
					</a>
				</div>
      </a>
    </li>
    <?php endwhile; endif; ?>
	</ul>

  <div class="pagination">
    <p><?php next_posts_link('Older posts'); ?></p>
    <p><?php previous_posts_link('Newer posts'); ?></p>    
  </div>
</section>

</div>

<?php get_footer(); ?>