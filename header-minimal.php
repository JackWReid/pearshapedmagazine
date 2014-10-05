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
    <meta name="keywords" content="magazine, music, exeter, reviews, events, live, student">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?> <?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <link rel="alternate" type="application/rss+xml" title="PearShaped Exeter" href="<?php bloginfo('rss2_url'); ?>">
</head>
<body>

<div class="nav-bar">
    <ul class="nav-bar__list">
        <li><a href="<?php echo site_url(); ?>/">Home</a></li>
        <li><a href="<?php echo site_url(); ?>/category/event-previews">Events</a></li>
        <li><a href="<?php echo site_url(); ?>/category/reviews/">Reviews</a></li>
        <li><a href="<?php echo site_url(); ?>/category/features/">Features</a></li>
        <li><a href="<?php echo site_url(); ?>/category/columns/">Columns</a></li>
        <li><a href="<?php echo site_url(); ?>/category/interviews/">Interviews</a></li>
        <li><a href="<?php echo site_url(); ?>/category/guides">Guides</a></li>
        <li><a href="<?php echo site_url(); ?>/contact-us/">Contact Us</a></li>
        <li><a href="https://www.exeterguild.org/societies/15967/">Join</a></li>
    </ul>
</div>
