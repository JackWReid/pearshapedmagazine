<?php get_header(); ?>
<?php get_template_part('partials/navigation/topnav/topnav-full'); ?>

<section class="slider">
	<?php echo do_shortcode("[metaslider id=2499]"); ?>
</section>

<section class="home-reviews">
	<h1><a href="http://pearshapedexeter.com/category/reviews">Reviews</a></h1>
	<div class="home-reviews__stream">

		<?php $cat_id = 10;
		$latest_cat_post = new WP_Query( array(
			'posts_per_page' => 4,
			'category__in' => array($cat_id)
		));

		if( $latest_cat_post->have_posts() ) :
			while( $latest_cat_post->have_posts() ) :
				$latest_cat_post->the_post();  ?>

		<a href="<?php the_permalink(); ?>">
		<div class="home-reviews__item">
			<?php the_post_thumbnail('medium'); ?>
		</div>
		</a>

		<?php endwhile; endif; ?>	
	</div>

</section>

<section class="home-events">

	<div class="home-events__upcoming">
		<h1><a href="http://pearshapedexeter.com/category/event-previews">Upcoming Gigs</a></h1>
		<div class="home-upcoming__stream">

			<?php $cat_id = 11;
			$latest_cat_post = new WP_Query( array(
				'posts_per_page' => 4,
				'category__in' => array($cat_id),
				'order' => 'ASC'
			));

			if( $latest_cat_post->have_posts() ) :
				while( $latest_cat_post->have_posts() ) :
					$latest_cat_post->the_post();  ?>

			<a href="<?php the_permalink(); ?>">
			<div class="home-upcoming__item">
				<div>
					<?php the_post_thumbnail('medium'); ?>
				</div>
				<div>
					<h1><?php the_title(); ?></h1>
		            <?php $giginfo = get_post_meta($post->ID, 'giginfo', true); 
		            echo "<p>" . $giginfo . "</p>"; ?>
				</div>
			</div>
			</a>

			<?php endwhile; endif; ?>
		</div>
	</div>

	<div class="home-events__reviews">
		<h1><a href="http://pearshapedexeter.com/category/event-reviews/">Live Reviews</a></h1>
		<div class="home-event-reviews__stream">
			<?php $cat_id = 12;
			$latest_cat_post = new WP_Query( array(
				'posts_per_page' => 4,
				'category__in' => array($cat_id)
			));

			if( $latest_cat_post->have_posts() ) :
				while( $latest_cat_post->have_posts() ) :
					$latest_cat_post->the_post();  ?>

			<a href="<?php the_permalink(); ?>">
			<div class="home-event-reviews__item">
				<div>
					<?php the_post_thumbnail('medium'); ?>
				</div>
				<div>
					<h1><?php the_title(); ?></h1>
		            <?php $author = get_post_meta($post->ID, 'Author', true); 
		            echo "<p>" . $author . "</p>"; ?>
				</div>
			</div>
			</a>

			<?php endwhile; endif; ?>	
		</div>
	</div>
</section>

<section class="home-misc">

	<div class="home-columns">
		<h1><a href="http://pearshapedexeter.com/category/columns/">Columns</a></h1>
		<div class="home-columns__stream">
			<?php $cat_id = 2;
			$latest_cat_post = new WP_Query( array(
				'posts_per_page' => 1,
				'category__in' => array($cat_id)
			));

			if( $latest_cat_post->have_posts() ) :
				while( $latest_cat_post->have_posts() ) :
					$latest_cat_post->the_post();  ?>

			<a href="<?php the_permalink(); ?>">
			<div class="home-columns__item">
				<h1><?php the_title(); ?></h1>
				<?php the_post_thumbnail('medium'); ?>
			</div>
			</a>

			<?php endwhile; endif; ?>			
		</div>
	</div>

	<div class="home-interviews">
		<h1><a href="http://pearshapedexeter.com/category/interviews/">Interviews</a></h1>
		<div class="home-interviews__stream">
			<?php $cat_id = 5;
			$latest_cat_post = new WP_Query( array(
				'posts_per_page' => 1,
				'category__in' => array($cat_id)
			));

			if( $latest_cat_post->have_posts() ) :
				while( $latest_cat_post->have_posts() ) :
					$latest_cat_post->the_post();  ?>

			<a href="<?php the_permalink(); ?>">
			<div class="home-interviews__item">
				<h1><?php the_title(); ?></h1>
				<?php the_post_thumbnail('medium'); ?>
			</div>
			</a>

			<?php endwhile; endif; ?>	
		</div>
	</div>
	
</section>

<section class="home-about">
	<h1>About PearShaped</h1>
	<p>PearShaped is an online music magazine run by students at the University of Exeter. Established to bring the city's music scene closer together, PearShaped is dedicated to keeping the student body informed of what's happening in the city.</p>
	<p>Originally founded in 2013 by four first year English students (Colin Bugler, Tom Elliott, Matt Hacke, and Jack Reid), PearShaped began as a mission to make sure that nobody would have to hear about an amazing gig the previous week that they would have loved to go to, had they known about it. Hashed out first in the smokers' area of Timepiece and then semi-officially founded over a few beers at The Rusty Bike, the organisation quickly learned that Exeter's budding music journalists desperately wanted an outlet. PearShaped has quickly become a lightning rod for the most passionate music journalism in the city, covering both the vibrant local music scene and releases and news from the wider world.</p>
	<p>In 2014, PearShaped became an official society with the Student's Guild of the University of Exeter to be better tied to the student body. Now, students can reap the benefits of joining the student society, such as timely newsletters containing the magazine's latest journalism, and weekly listings. In addition, those members can become valued writers for the magazine, and flex their journalistic muscles to have their best work seen. The committee of PearShaped magazine is comprised of the President, Chief Editor, Assistant Editor, Press Officer, Treasurer, Publicity Officer, Assistant Publicity Officer, and Social Sec - and is re-elected each year.</p>
	<p>The PearShaped website was designed by the first President and Chief Editor, Jack Reid and Lizzie Hatfield, and developed by Jack. The pears that you'll see dotted around were drawn by Hannah Peck. Additional art was supplied by Rachael Moreland.</p>
</section>

<?php get_footer(); ?>