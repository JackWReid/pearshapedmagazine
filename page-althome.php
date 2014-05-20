<?php
/*
 * Template Name: Alt Homepage
 *
 * @package WordPress
 * @subpackage pearshapedtheme
 */
get_header(); ?>

<div class="featured-posts">
<?php
    $args=array(
      'tag' => 'featured',
      'showposts'=>2,
      'caller_get_posts'=>1
    );
    $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {
      while ($my_query->have_posts()) : $my_query->the_post(); ?>
        	<div class="featured-posts__module">
        		<a href="<?php the_permalink(); ?>">
        		<div class="featured-posts__image">
	        		<?php the_post_thumbnail(); ?>
	        		<h4><?php the_title(); ?></h4>
        		</div>
        		</a>
        	</div>
       <?php
      endwhile;
    }
  wp_reset_query();
?>
</div>

<div class="cat-box-bold">

	<div class="cat-box-bold__module">
		<?php $cat_id = 580;
		$latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id), 'order' => 'ASC'));
		if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>

		<a href="<?php the_permalink(); ?>">
			<div class="cat-box-bold__image">
				<?php the_post_thumbnail(); ?>
				<h5>Event Previews</h5>
				<h4><?php the_title(); ?></h4>
			</div>
		</a>

		<?php endwhile; endif; ?>
	</div>

	<div class="cat-box-bold__module">
		<?php $cat_id = 25;
		$latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id)));
		if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>

		<a href="<?php the_permalink(); ?>">
			<div class="cat-box-box__image">
				<?php the_post_thumbnail(); ?>
				<h5>Event Reviews</h5>
				<h4><?php the_title(); ?></h4>
			</div>
		</a>

		<?php endwhile; endif; ?>
	</div>

	<div class="cat-box-bold__module">
		<?php $cat_id = 17;
		$latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id)));
		if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>

		<a href="<?php the_permalink(); ?>">
			<div class="cat-box-box__image">
				<?php the_post_thumbnail(); ?>
				<h5>Album Reviews</h5>
				<h4><?php the_title(); ?></h4>
			</div>

		</a>

		<?php endwhile; endif; ?>
	</div>

	<div class="cat-box-bold__module">
		<?php $cat_id = 125;
		$latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id)));
		if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>

		<a href="<?php the_permalink(); ?>">
			<div class="cat-box-box__image">
				<?php the_post_thumbnail(); ?>
				<h5>Features</h5>
				<h4><?php the_title(); ?></h4>
			</div>

		</a>

		<?php endwhile; endif; ?>
	</div>
	<div class="cat-box-bold__module">
		<?php $cat_id = 42;
		$latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id)));
		if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>

		<a href="<?php the_permalink(); ?>">
			<div class="cat-box-box__image">
				<?php the_post_thumbnail(); ?>
				<h5>Columns</h5>
				<h4><?php the_title(); ?></h4>
			</div>
		</a>

		<?php endwhile; endif; ?>
	</div>
	<div class="cat-box-bold__module">
		<?php $cat_id = 111;
		$latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id)));
		if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>

		<a href="<?php the_permalink(); ?>">
			<div class="cat-box-box__image">
				<?php the_post_thumbnail(); ?>
				<h5>Interviews</h5>
				<h4><?php the_title(); ?></h4>
			</div>
		</a>

		<?php endwhile; endif; ?>
	</div>
</div>

<div class="frontpage-about">
	<h1>About PearShaped</h1>
	<p>PearShaped is an online music magazine run by students at the University of Exeter. Established to bring the city's music scene closer together, PearShaped is dedicated to keeping the student body informed of what's happening in the city.</p>
	<p>Originally founded in 2013 by four first year English students (Colin Bugler, Tom Elliott, Matt Hacke, and Jack Reid), PearShaped began as a mission to make sure that nobody would have to hear about an amazing gig the previous week that they would have loved to go to, had they known about it. Hashed out first in the smokers' area of Timepiece and then semi-officially founded over a few beers at The Rusty Bike, the organisation quickly learned that Exeter's budding music journalists desperately wanted an outlet. PearShaped has quickly become a lightning rod for the most passionate music journalism in the city, covering both the vibrant local music scene and releases and news from the wider world.</p>
	<p>In 2014, PearShaped became an official society with the Student's Guild of the University of Exeter to be better tied to the student body. Now, students can reap the benefits of joining the student society, such as timely newsletters containing the magazine's latest journalism, and weekly listings. In addition, those members can become valued writers for the magazine, and flex their journalistic muscles to have their best work seen. The committee of PearShaped magazine is comprised of the President, Chief Editor, Assistant Editor, Press Officer, Treasurer, Publicity Officer, Assistant Publicity Officer, and Social Sec - and is re-elected each year.</p>
	<p>The PearShaped website was designed by the first President and Chief Editor, Jack Reid and Lizzie Hatfield, and developed by Jack. The pears that you'll see dotted around were drawn by Hannah Peck. Additional art was supplied by Rachael Moreland.</p>
</div>
	
<?php get_footer(); ?>