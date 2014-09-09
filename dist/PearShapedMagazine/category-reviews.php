<?php get_header(); ?>
<div class="section-header">

	<h1 class="section-header__title"><?php single_cat_title(); ?></h1>
	
	<ul class="category-toggle">
		<li class="category-toggle__button_active"><a href="http://pearshapedexeter.com/category/reviews">All</a></li>
		<li class="category-toggle__button"><a href="http://pearshapedexeter.com/category/local-reviews">Local</a></li>
		<li class="category-toggle__button"><a href="http://pearshapedexeter.com/category/global-reviews">Global</a></li>
	</ul>

</div>

<div class="thumbnail-grid">
<?php
$current_month = get_the_time('F');
$current_year = get_the_time('Y');
echo "<div class='date-divider'><div class='date-divider__info'><h3>" . $current_month . "</h3><h3>" . $current_year . "</h3></div></div>";

while (have_posts()) : the_post();
    $current_year = get_the_time('Y');
    $this_month = get_the_time('F');
    if( $this_month!=$current_month ):
        $current_month = $this_month;
        echo "<div class='date-divider'><div class='date-divider__info'><h3>" . $current_month . "</h3><h3>" . $current_year . "</h3></div></div>";
    endif;

    $author = get_post_meta($post->ID, 'Author', true);
    echo "<div class='thumbnail-grid__item'><a href='" . get_permalink() . "'>";
    the_post_thumbnail('medium'); 
    echo "<div class='thumbnail-grid__item__meta'><h3>"; the_title(); echo "</h3>";
    if ($author) { echo "<p>" . $author . "</p></div>"; }
    echo "</a></div>";
endwhile;
?>
</div>

<?php get_footer(); ?>