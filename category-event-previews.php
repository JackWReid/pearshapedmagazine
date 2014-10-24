<?php get_header(); ?>
<div class="section-header">
    <h1 class="section-header__title">Events</h1>
    <ul class="category-toggle">
        <li class="category-toggle__button"><a href="<?php echo site_url(); ?>/category/listings">Listings</a></li>
        <li class="category-toggle__button_active"><a href="<?php echo site_url(); ?>/category/event-previews">Upcoming</a></li>
        <li class="category-toggle__button"><a href="<?php echo site_url(); ?>/category/event-reviews">Reviews</a></li>
    </ul>
</div>

<div class="link-section-green">
    <span class="link-section-green__title"><a href="<?php echo site_url(); ?>/category/event-preview-archives">View Past Events</a></span>
</div>

<div class="preview-stream">
	<?php
	$cat_id = 11;
	$rev_post_query = new WP_Query( array('posts_per_page' => '30', 'category__in' => array($cat_id), 'order' => 'ASC'));
    if ( $rev_post_query->have_posts() ) : while ( $rev_post_query->have_posts() ) : $rev_post_query->the_post(); ?>
    <div class="preview-stream__item">
        <div class="preview-stream__item__image">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium') ?>
            </a>
        </div>
        <div class="preview-stream__item__info">
            <a href="<?php the_permalink(); ?>">
                <h1 class="preview-stream__item__title"><?php the_title(); ?></h1>
                <h3 class="preview-stream__item__author">
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
                <div class="preview-stream__item__content">
                    <?php the_excerpt(); ?>
                </div>
            </a>
        </div>
    </div>
    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>