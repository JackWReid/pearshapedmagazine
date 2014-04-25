<?php get_header(); ?>
<div class="section-header">
	<h1 class="section-title">Events</h1>

	<ul class="category-toggler">
		<li class="button-active"><a href="http://pearshapedexeter.com/category/listings-2">Listings</a></li>
		<li class="button"><a href="http://pearshapedexeter.com/category/event-previews">Upcoming</a></li>
		<li class="button"><a href="http://pearshapedexeter.com/category/event-reviews">Reviews</a></li>
	</ul>
</div>

<div class="listings-slider">
	<?php echo do_shortcode("[metaslider id=1730]"); ?>
</div>

<?php get_footer(); ?>