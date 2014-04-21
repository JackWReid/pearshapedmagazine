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
    <style>
        /* This needs to be assimilated into the scss structure and into minified CSS */
        @media screen and (max-width: 650px){
            .top-bar{
                position: relative;
                margin-bottom: 0;
            }
            /* Overriding app.scss */
            .site-header, .section-header{
                margin-top: 0;
            }
            h1.site-title{
                font-size: 3em;
            }
            .section-title{
                width: auto;
            }
            .post-header{
                top: 0;
            }
            .post-content{
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>
<div class="top-bar">
    <div class="top-bar-wrap">
        <ul class="nav">
            <li class="top-bar-title"><a href="http://pearshapedexeter.com">PearShaped</a></li>
            <li><a href="http://pearshapedexeter.com/category/listings">Events</a></li>
            <li><a href="http://pearshapedexeter.com/category/reviews/">Reviews</a></li>
            <li><a href="http://pearshapedexeter.com/category/features/">Features</a></li>
            <li><a href="http://pearshapedexeter.com/category/columns/">Columns</a></li>
            <li><a href="http://pearshapedexeter.com/category/interviews/">Interviews</a></li>
            <li><a href="http://pearshapedexeter.com/directory/">Directory</a></li>
            <li><a href="http://pearshapedexeter.com/contact-us/">Contact Us</a></li>
            <li><a href="https://www.exeterguild.org/societies/15967/">Join</a></li>
        </ul>
        <?php get_search_form(); ?>
        <div class="social">
            <a href="https://www.facebook.com/PearShapedExeter"><img src="http://i.imgur.com/VXGTdj0.png" alt="Facebook" /></a>
            <a href="http://twitter.com/pearshapedexe"><img src="http://i.imgur.com/caAQrTA.png" alt="Twitter"></a>
            <a href="http://soundcloud.com/pearshaped-exeter"><img src="http://i.imgur.com/DrFWOyr.png" alt="Soundcloud"></a>
        </div>
    </div>
</div>
