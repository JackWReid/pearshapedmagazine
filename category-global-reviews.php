<?php get_header(); ?>
<?php get_template_part('partials/navigation/topnav/topnav-full'); ?>

<div class="section-header">
	<h1 class="section-header__title"><?php single_cat_title(); ?></h1>
	<?php get_template_part('partials/navigation/subnav-reviews/global-reviews'); ?>
</div>

<?php get_template_part('partials/loops/reviews'); ?>

<?php get_footer(); ?>