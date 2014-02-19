PearShaped Theme
================

This is a repo for the theme that runs PearShaped's website, [pearshapedexeter.com](pearshapedexeter.com/home). PearShaped runs on Tumblr as a hacky CMS, and thus the theme file is a fairly standard framwork containing the global scripts, meta tags, and stylesheets. Then the necessary Tumblr block tags are used as content hooks, wherein the page and post files are inserted. If you see a CSS selector that isn't referenced in the the theme.css, it'll be because it's in a page or post HTML file.


The Theme
---------

The structure of the theme file can be broken down as follows:

Head:
- Meta Tags
- Stylesheets
- Redirect
- RSS Feed
- Nightly Styles

Body:
- Header
- Navigation
- Content hooks
- Scripts

### Head Elements ###

#### Meta Tags ####
The meta tags include the page title and stuff that Google likes to use like a description, as well as stuff like characters sets to make sure that text renders right.

#### Stylesheets ####
The point at which the stylesheet is inserted.

#### Redirect ####
A janky javascript redirect script that bounces the root domain to the /home page, to make sure that the static home page is displayed, rather than the stream of posts as is default for Tumblr. It isn't good for SEO but it has to be done this way because we don't have control over HTTP redirects.

#### RSS Feed ####
A simple tag that makes all posts render through an RSS reader very nicely.

#### Nightly Styles ####
This inline style tags are for when you absolutely need to fix something and don't have time to render all the stylesheets and re-upload them. Try and keep whatever goes between these style tags moving into the main stylesheets fairly quickly.

The Cascade
-----------

The CSS cascade goes as follows:
- reset.css
- type.css
- layout.css
- app.css

### reset.css ###
This is just the standard Meyer CSS Reset. It goes at the top so as to stop user agent stylesheets ruining the fun further down the cascade.

### type.css ###
Imports typefaces from the _fonts sheet and sets out basic styles, then header sizes and proportions. Header sizes are calculated in three tiers based on media queries. The header size is set at full size in px, then factored with a multiplier for either tablet or mobile size. The same is done to the header margins. Basic HTML inline elements are laid out, followed by 'cosmetics', or the elements we use to format some of our articles.

Next come titles, which are the large headers featured in Futura uppercase. Title size is calculated by multiplying the baseline and then factoring by mobile or tablet multipliers. The titles featured in headers have their own special styles that emulate the PearShaped logo type.

### layout.css ###
The layout sheet is primarily the grid. The grid was hand-coded and features columns of widths of 100%, 67%, 50%, 34%, and 25%. All columns collapse underneath eachother at the mobile breakpoint. At the end of this sheet are the full-width image default and any modifiers that alter layout, such as styles to center elements or hide them at mobile widths.

### app.css ###
This sheet is for element and page specific styles. Firstly is the nav bar, which at full width is a fixed bar. At tablet width it's a hoverable dropdown menu. At mobile width it disappears because I haven't thought of a nav solution for it yet. Under the reviews section are the hoverable album artwork styles, under reviews are the stroll cards (styling the lists of event previews), and under features are hero styling. Finally at the end of this stylesheet go the quick and dirty fixes.

Grunt & Sass
------------

The PearShaped stylesheets are written in [Sass](http://sass-lang.com/), a CSS preprocessor. Each of the underscored .scss files are libraries of reusable components and variables, which are then used by the non-underscored stylesheets. The .scss files are compiled by a Node-based task runner: [Grunt](http://gruntjs.com/). Grunt works by parsing gruntfile.js, a set of instructions for the command line tool 'grunt'. Grunt first renders the Sass into normal CSS, then it sews all the files end to end into one file (or concatenates them) and then it compresses all of the unecessary space out of it to make it a smaller file. The end result is called build.min.css.

To Do List
----------

- Add Grunt watch task
- Catch Sass version up to vanilla CSS