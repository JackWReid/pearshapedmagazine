<?php get_header(); ?>
<div class="section-header">
	<h1 class="section-title"><?php single_cat_title(); ?></h1>
</div>

<div class="preview-stream">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="preview-item row">
	<a href="<?php the_permalink(); ?>">
		<div class="four columns">
			<?php the_post_thumbnail() ?>
		</div>
		<div class="eight columns">
			<h1 class="preview-title"><?php the_title(); ?></h1>
			<h3 class="preview-author">
				<?php 
				    $author = get_post_meta($post->ID, 'Author', true); 

					if ($author) {
					    echo $author;
					}
				?>
			</h3>
            <div class="giginfo-alt">
            <?php 
                $giginfo = get_post_meta($post->ID, 'giginfo', true); 

                if ($giginfo) {
                    echo "<span class='giginfo-content'>" . $giginfo . "</span>";
                }
            ?>
            </div>
			<div class="preview-content">
				<?php the_content(); ?>
			</div>
		</div>
		</a>
	</div>
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
</div>

<?php get_footer(); ?>