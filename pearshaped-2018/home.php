<?php get_header(); ?>

<div class="page-home">

<?php get_template_part('partials/headers/full'); ?>

<?php
	$sticky = get_option('sticky_posts');
	rsort($sticky);
	$sticky = array_slice($sticky, 0, 5);
	$the_query = new WP_Query(array('post__in' => $sticky, 'ignore_sticky_posts' => 1 ));
	if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

<section class="lead-article">
	<figure><?php the_post_thumbnail('large'); ?></figure>
	<div>
		<p class="lead-article__category"><?php the_category (' &middot; '); ?></p>
		<h1 class="lead-article__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<time><?php the_date(); ?></time> 
		<p><?php the_excerpt(); ?></p>
	</div>
</section>

<?php endwhile; endif; ?>

<div class="grid-main">
	<section class="post-list post-list--compact">
		<header>
				<h1>Reviews</h1>
		</header>
		<ul>
			<?php $cat_id = 12;
			$latest_cat_post = new WP_Query(array(
				'posts_per_page' => 4,
				'category__in' => array($cat_id)
			));

			if( $latest_cat_post->have_posts() ) :
				while( $latest_cat_post->have_posts() ) :
					$latest_cat_post->the_post();  ?>
			<li>
				<?php the_post_thumbnail('medium') ?>
				<div>
					<a href="<?php the_permalink(); ?>">
					<h1><?php the_title(); ?></h1>
					<p class="post-list__author"><?php echo get_post_meta($post->ID, 'Author', true); ?></p>
					<p class="post-list__rating" data-rating=<?php echo get_post_meta($post->ID, 'Rating', true); ?>></p>
					<p class="post-list__excerpt"><?php echo get_post_meta($post->ID, 'Kicker', true); ?></p>
					</a>
				</div>
			</li>
			<?php endwhile; endif; ?>
		</ul>
	</section>

	<section class="post-list post-list--compact">
		<header>
				<h1>Upcoming Gigs</h1>
			</header>
			<ul>
			<?php $cat_id = 16;
				$latest_cat_post = new WP_Query(array(
					'posts_per_page' => 4,
					'category__in' => array($cat_id),
					'order' => 'ASC'
				));

				if( $latest_cat_post->have_posts() ) :
					while( $latest_cat_post->have_posts() ) :
						$latest_cat_post->the_post();  ?>
				<li>
					<?php the_post_thumbnail('medium') ?>
					<div>
						<a href="<?php the_permalink(); ?>">
							<h1><?php the_title(); ?></h1>
							<p class="post-list__author"><?php echo get_post_meta($post->ID, 'Author', true); ?></p>
							<p class="post-list__rating"><?php echo get_post_meta($post->ID, 'giginfo', true); ?></p>
							<p class="post-list__excerpt"><?php echo get_post_meta($post->ID, 'Kicker', true); ?></p>
						</a>
					</div>
				</li>
				<?php endwhile; endif; ?>
			</ul>
	</section>

	<section class="post-list post-list--compact">
		<header>
				<h1>Gig Reviews</h1>
			</header>
			<ul>
			<?php $cat_id = 17;
				$latest_cat_post = new WP_Query(array(
					'posts_per_page' => 4,
					'category__in' => array($cat_id),
					'order' => 'DESC'
				));

				if( $latest_cat_post->have_posts() ) :
					while( $latest_cat_post->have_posts() ) :
						$latest_cat_post->the_post();  ?>
				<li>
					<?php the_post_thumbnail('medium') ?>
					<div>
						<a href="<?php the_permalink(); ?>">
							<h1><?php the_title(); ?></h1>
							<p class="post-list__author"><?php echo get_post_meta($post->ID, 'Author', true); ?></p>
							<p class="post-list__rating"><?php echo get_post_meta($post->ID, 'giginfo', true); ?></p>
							<p class="post-list__excerpt"><?php echo get_post_meta($post->ID, 'Kicker', true); ?></p>
						</a>
					</div>
				</li>
				<?php endwhile; endif; ?>
			</ul>
	</section>

	<section class="about">
		<p>PearShaped is an online music magazine run by students at the University of Exeter. Established to bring the city's
			music scene closer together, PearShaped is dedicated to keeping the student body informed of what's happening in
			the city.</p>
		<p>Originally founded in 2013 by four first year English students (Colin Bugler, Tom Elliott, Matt Hacke, and Jack Reid),
			PearShaped began as a mission to make sure that nobody would have to hear about an amazing gig the previous week
			that they would have loved to go to, had they known about it. Hashed out first in the smokers' area of Timepiece
			and then semi-officially founded over a few beers at The Rusty Bike, the organisation quickly learned that Exeter's
			budding music journalists desperately wanted an outlet. PearShaped has quickly become a lightning rod for the most
			passionate music journalism in the city, covering both the vibrant local music scene and releases and news from the
			wider world.</p>
		<p>In 2014, PearShaped became an official society with the Student's Guild of the University of Exeter to be better tied
			to the student body. Now, students can reap the benefits of joining the student society, such as timely newsletters
			containing the magazine's latest journalism, and weekly listings. In addition, those members can become valued writers
			for the magazine, and flex their journalistic muscles to have their best work seen. The committee of PearShaped magazine
			is comprised of the President, Chief Editor, Assistant Editor, Press Officer, Treasurer, Publicity Officer, Assistant
			Publicity Officer, and Social Sec - and is re-elected each year.</p>
		<p>The PearShaped website was designed by the first President and Chief Editor, Jack Reid and Lizzie Hatfield, and developed
			by Jack. The pears that you'll see dotted around were drawn by Hannah Peck. Additional art was supplied by Rachael
			Moreland.
		</p>
	</section>
</div>

<?php get_template_part('partials/scripts/ratings'); ?>
<?php get_template_part('partials/scripts/image-blank'); ?>
<?php get_template_part('partials/footer'); ?>