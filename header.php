<?php
/**
 * Minified header for the theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage pearshapedtheme
 */
?>
 <!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?> <?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <link rel="alternate" type="application/rss+xml" title="PearShaped Exeter" href="<?php bloginfo('rss2_url'); ?>">
</head>
<body>

<div class="site-header">
    <h1 class="site-title"><a href="<?php echo home_url(); ?>">PearShaped</a></h1>
    <?php get_search_form(); ?>
    <!--<div class="social">
        <a href="https://www.facebook.com/PearShapedExeter"><img src="http://i.imgur.com/VXGTdj0.png" alt="Facebook" /></a>
        <a href="http://twitter.com/pearshapedexe"><img src="http://i.imgur.com/caAQrTA.png" alt="Twitter"></a>
        <a href="http://soundcloud.com/pearshaped-exeter"><img src="http://i.imgur.com/DrFWOyr.png" alt="Soundcloud"></a>
    </div>-->
</div>

<div class="top-bar">
    <div class="top-bar-wrap">
        <ul class="nav">
            <li><a href="http://pearshapedexeter.com/category/listings">Events</a></li>
            <li><a href="http://pearshapedexeter.com/category/reviews/">Reviews</a></li>
            <li><a href="http://pearshapedexeter.com/category/features/">Features</a></li>
            <li><a href="http://pearshapedexeter.com/category/columns/">Columns</a></li>
            <li><a href="http://pearshapedexeter.com/category/interviews/">Interviews</a></li>
            <li><a href="http://pearshapedexeter.com/directory/">Directory</a></li>
            <li><a href="http://pearshapedexeter.com/contact-us/">Contact Us</a></li>
            <li><a href="https://www.exeterguild.org/societies/15967/">Join</a></li>
        </ul>
    </div>
</div>
