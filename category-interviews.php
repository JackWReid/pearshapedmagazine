<?php get_header(); ?>
<?php get_template_part('partials/navigation/topnav/topnav-full'); ?>

<div class="section-header">
	<h1 class="section-header__title"><?php single_cat_title(); ?></h1>
</div>

<!--
<div class="section-info">
	<p><b>Chief Interviewer (Signed Acts):</b> Emily Pratten</p>
	<p><b>Chief Interviewer (Unsigned Acts):</b> Nickie Shobeiry</p>
</div>
-->

</div>

<?php get_template_part('partials/loops/thumbnail-grid'); ?>

<?php get_footer(); ?>s