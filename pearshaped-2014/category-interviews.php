<?php get_header(); ?>
<?php get_template_part('partials/navigation/topnav/topnav-full'); ?>

<div class="section-header">
	<h1 class="section-header__title"><?php single_cat_title(); ?></h1>
</div>

</div>

<div class="thumbnail-grid-wrapper__interview">
	<?php get_template_part('partials/loops/thumbnail-grid'); ?>
</div>

<?php get_footer(); ?>s