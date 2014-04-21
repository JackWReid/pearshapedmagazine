<?php get_header(); ?>
<div class="site-header">
	<h1 class="site-title"><a href="<?php site_url(); ?>">PearShaped</a></h1>
	<span class="site-sub-title">Online Music Magazine</span>
</div>

<div class="home-content">

	<div class="frontpage-slider">
		<?php echo do_shortcode("[metaslider id=4]"); ?>
	</div>

	<div class="preview-scroller">
		<h2>Recent Posts</h2>
		<?php $cat_slug = '';
		$latest_cat_post = new WP_Query( array('posts_per_page' => 16, 'category_name' => $cat_slug));
		if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>
		
		<div class="preview-scroller-item">
			<a href="<?php the_permalink(); ?>">
			<div class="preview-scroller-title"><?php the_title(); ?></div>
			</a>
		</div>
		<?php endwhile; endif; ?>
	</div>

</div>

<div class="link-section">
	<span class="link-title"><a href="http://pearshapedexeter.com/about-us">About PearShaped</a></span>
</div>
<?php get_footer(); ?>