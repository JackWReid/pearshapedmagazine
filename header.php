<?php
/**
 * Minified header for the theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage pearshapedtheme
 */
 ?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo( 'name' ); ?> <?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <link rel="alternate" type="application/rss+xml" title="PearShaped Exeter" href="<?php bloginfo('rss2_url'); ?>">

    <?php wp_head(); ?>
</head>
<body>
<div class="top-bar">
    <div class="top-bar-wrap">
        <ul class="nav">
            <li class="top-bar-title"><a href="http://localhost:8888">PearShaped</a></li>
            <li><a href="http://localhost:8888/category/listings-2">Events</a></li>
            <li><a href="http://localhost:8888/category/reviews/">Reviews</a></li>
            <li><a href="http://localhost:8888/category/features/">Features</a></li>
            <li><a href="http://localhost:8888/category/columns/">Columns</a></li>
            <li><a href="http://localhost:8888/category/interviews/">Interviews</a></li>
            <li><a href="http://localhost:8888/directory/">Directory</a></li>
            <li><a href="http://localhost:8888/contact-us/">Contact Us</a></li>
            <li><a href="https://www.exeterguild.org/societies/15967/">Join</a></li>
        </ul>
        <?php get_search_form(); ?>
        <div class="social">
            <a href="https://www.facebook.com/PearShapedExeter"><img src="http://localhost:8888/wp-content/themes/jackwreid/assets/facebook.png" alt="Facebook" /></a>
            <a href="http://twitter.com/pearshapedexe"><img src="http://localhost:8888/wp-content/themes/jackwreid/assets/twitter.png" alt="Twitter"></a>
            <a href="http://soundcloud.com/pearshaped-exeter"><img src="http://localhost:8888/wp-content/themes/jackwreid/assets/soundcloud.png" alt="Soundcloud"></a>
        </div>
    </div>
</div>
