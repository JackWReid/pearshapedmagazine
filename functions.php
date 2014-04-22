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