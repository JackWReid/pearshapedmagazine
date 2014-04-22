<?php get_header(); ?>
<div class="section-header">
	<h1 class="section-title"><?php single_cat_title(); ?></h1>
	
	<ul class="category-toggler">
		<li class="button"><a href="http://pearshapedexeter.com/category/reviews">All</a></li>
		<li class="button"><a href="http://pearshapedexeter.com/category/local-reviews">Local</a></li>
		<li class="button-active"><a href="http://pearshapedexeter.com/category/global-reviews">Global</a></li>
	</ul>
</div>

<div class="thumbnail-grid-wrapper">
<?php foreach(posts_by_month_global_reviews() as $month => $posts) : ?>
  <h2><?php echo $month; ?></h2>
	
	<div class="thumbnail-grid">
	    <?php foreach($posts as $post) : setup_postdata($post); ?>
	      <div class="thumbnail-card">
	        <a href="<?php the_permalink(); ?>">
	        <?php the_post_thumbnail() ?>
	        </a>
	      </div>
	    <?php endforeach; ?>
	</div>
<?php endforeach; ?>
</div>

<?php get_footer(); ?>