<?php
$current_month = get_the_time('F');
$current_year = get_the_time('Y');
echo "<div class='date-divider'><h3>" . $current_month. " " . $current_year . "</h3></div><div class='thumbnail-grid'>";

while (have_posts()) : the_post();
    $current_year = get_the_time('Y');
    $this_month = get_the_time('F');
    if( $this_month!=$current_month ):
        $current_month = $this_month;
        echo "</div><div class='date-divider'><h3>" . $current_month . " " . $current_year . "</h3></div><div class='thumbnail-grid'>";
    endif;

    $author = get_post_meta($post->ID, 'Author', true);
    echo "<div class='thumbnail-grid__item'><a href='" . get_permalink() . "'>";
    the_post_thumbnail('medium'); 
    echo "<div class='thumbnail-grid__item__meta'><h3>"; the_title(); echo "</h3>";
    if ($author) { echo "<p>" . $author . "</p></div>"; }
    echo "</a></div>";
endwhile;
echo "</div>";
?>