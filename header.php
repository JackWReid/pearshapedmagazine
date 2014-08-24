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
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" href="/favicon-196x196.png" sizes="196x196">
    <link rel="icon" type="image/png" href="/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <link rel="alternate" type="application/rss+xml" title="PearShaped Exeter" href="<?php bloginfo('rss2_url'); ?>">
</head>
<body>

<div class="site-header">
    <h1 class="site-header__title"><a href="<?php echo home_url(); ?>">PearShaped</a></h1>
    <?php get_search_form(); ?>
    <div class="site-header__social-icons">
        <a href="https://www.facebook.com/PearShapedExeter"><i class="fa fa-facebook-square fa-2x"></i></a>
        <a href="http://twitter.com/pearshapedexe"><i class="fa fa-twitter fa-2x"></i></a>
        <a href="http://soundcloud.com/pearshaped-exeter"><i class="fa fa-soundcloud fa-2x"></i></a>
    </div>
</div>

<div class="nav-bar">
    <ul class="nav-bar__list">
        <li><a href="http://pearshapedexeter.com/category/event-previews">Events</a></li>
        <li><a href="http://pearshapedexeter.com/category/reviews/">Reviews</a></li>
        <li><a href="http://pearshapedexeter.com/category/features/">Features</a></li>
        <li><a href="http://pearshapedexeter.com/category/columns/">Columns</a></li>
        <li><a href="http://pearshapedexeter.com/category/interviews/">Interviews</a></li>
        <li><a href="http://pearshapedexeter.com/directory/">Directory</a></li>
        <li><a href="http://pearshapedexeter.com/contact-us/">Contact Us</a></li>
        <li><a href="https://www.exeterguild.org/societies/15967/">Join</a></li>
    </ul>
</div>
