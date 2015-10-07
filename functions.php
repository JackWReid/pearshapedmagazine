<?php add_theme_support( 'post-thumbnails' ); ?>
<?php add_action( 'wp_enqueue_script', 'load_jquery' );
	function load_jquery() {
	wp_enqueue_script( 'jquery' );
	}
?>
<?php add_action( 'wp_enqueue_scripts', 'add_my_script' ); ?>
<?php function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );
?>
<?php
add_filter( 'excerpt_more', 'pearshaped_read_more' );
function pearshaped_read_more( $text ) {
    global $post;
    return '... <br><a class="read-more-link" href="' . get_permalink( $post->ID ) . '">Read more</a>';
}
?>