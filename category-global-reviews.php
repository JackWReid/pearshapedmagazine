<?php get_header(); ?>
<div class="section-header">
	<h1 class="section-header__title"><?php single_cat_title(); ?></h1>
	
	<ul class="category-toggle">
		<li class="category-toggle__button"><a href="http://pearshapedexeter.com/category/reviews">All</a></li>
		<li class="category-toggle__button"><a href="http://pearshapedexeter.com/category/local-reviews">Local</a></li>
		<li class="category-toggle__button_active"><a href="http://pearshapedexeter.com/category/global-reviews">Global</a></li>
	</ul>
</div>

<div class="thumbnail-grid">
<?php
// set current month to that of first post, and print it.
$current_month = get_the_time('F');
echo "<h2>" . $current_month . "</h2>";

while (have_posts()) : the_post();

    // check each subsequent post to see if the month is the same
    // or has changed and needs to be printed:
    $this_month = get_the_time('F');
    if( $this_month!=$current_month ):
        $current_month = $this_month;
        echo "<h2>" . $current_month . "</h2>";
    endif;

    // output data for the post
    echo "<div class='thumbnail-grid__item'><a href='" . get_permalink() . "'>";
    the_post_thumbnail();
    echo "</a></div>";

endwhile;

?>
</div>

<?php get_footer(); ?>