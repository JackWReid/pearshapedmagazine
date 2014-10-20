<?php get_header(); ?>
<div class="section-header">
	<h1 class="section-header__title">Events</h1>

	<ul class="category-toggle">
		<li class="category-toggle__button_active"><a href="<?php echo site_url(); ?>/category/listings">Listings</a></li>
		<li class="category-toggle__button"><a href="<?php echo site_url(); ?>/category/event-previews">Upcoming</a></li>
		<li class="category-toggle__button"><a href="<?php echo site_url(); ?>/category/event-reviews">Reviews</a></li>
	</ul>
</div>

<div class="listings-slider">
	<?php echo do_shortcode("[metaslider id=3364]"); ?>
</div>

<?php get_footer(); ?>