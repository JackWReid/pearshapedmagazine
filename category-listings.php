<?php get_header(); ?>
<div class="section-header">
	<h1 class="section-header__title">Events</h1>

	<ul class="category-toggle">
		<li class="category-toggle__button_active"><a href="http://pearshapedexeter.com/category/listings">Listings</a></li>
		<li class="category-toggle__button"><a href="http://pearshapedexeter.com/category/event-previews">Upcoming</a></li>
		<li class="category-toggle__button"><a href="http://pearshapedexeter.com/category/event-reviews">Reviews</a></li>
	</ul>
</div>

<div class="listings-slider">
	<?php echo do_shortcode("[metaslider id=1730]"); ?>
</div>

<?php get_footer(); ?>