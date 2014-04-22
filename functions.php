<?php add_theme_support( 'post-thumbnails' ); ?>
<?php add_action( 'wp_enqueue_script', 'load_jquery' );
	function load_jquery() {
	wp_enqueue_script( 'jquery' );
	}
?>
<?php function add_my_script() {
	wp_enqueue_script(
	    'sticky-top-bar', // name your script so that you can attach other scripts and de-register, etc.
	    get_template_directory_uri() . '/js/sticky-top-bar.js', // this is the location of your script file
	    array('jquery') // this array lists the scripts upon which your script depends
	);
	}
?>
<?php add_action( 'wp_enqueue_scripts', 'add_my_script' ); ?>
<?php function posts_by_month_reviews() {
  // array to use for results
  $month = array();

  // get posts from WP
  $posts = get_posts(array(
    'numberposts' => -1,
    'category' => 17,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish'
  ));

  // loop through posts, populating $month arrays
  foreach($posts as $post) {
    $month[date('F', strtotime($post->post_date))][] = $post;
  }

  // reverse sort by month
  //krsort($month);

  return $month;
}
?>
<?php function posts_by_month_local_reviews() {
  // array to use for results
  $month = array();

  // get posts from WP
  $posts = get_posts(array(
    'numberposts' => -1,
    'category' => 47,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish'
  ));

  // loop through posts, populating $month arrays
  foreach($posts as $post) {
    $month[date('F', strtotime($post->post_date))][] = $post;
  }

  // reverse sort by month
  //krsort($month);

  return $month;
}
?>
<?php function posts_by_month_global_reviews() {
  // array to use for results
  $month = array();

  // get posts from WP
  $posts = get_posts(array(
    'numberposts' => -1,
    'category' => 16,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish'
  ));

  // loop through posts, populating $month arrays
  foreach($posts as $post) {
    $month[date('F', strtotime($post->post_date))][] = $post;
  }

  // reverse sort by month
  //krsort($month);

  return $month;
}
?>