<?php get_header(); ?>

<div class="home-content">

	<div class="frontpage-slider">
		<?php echo do_shortcode("[metaslider id=4]"); ?>
	</div>

	<div class="preview-scroller">
		<h2>Recent Posts</h2>
		<?php $cat_slug = '';
		$latest_cat_post = new WP_Query( array('posts_per_page' => 24, 'category_name' => $cat_slug));
		if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>
		
		<div class="preview-scroller-item">
			<a href="<?php the_permalink(); ?>">
			<div class="preview-scroller-title"><?php the_title(); ?></div>
			</a>
		</div>
		<?php endwhile; endif; ?>
	</div>

</div>
<div class="frontpage-body">
	<h1>About PearShaped</h2>
	<div class="kicker">PearShaped is an online music magazine run by students at the University of Exeter. Established to bring the city's music scene closer together, PearShaped is dedicated to keeping the student body informed of what's happening in the city.</div>
	<p>Originally founded in 2013 by four first year English students (Colin Bugler, Tom Elliott, Matt Hacke, and Jack Reid), PearShaped began as a mission to make sure that nobody would have to hear about an amazing gig the previous week that they would have loved to go to, had they known about it. Hashed out first in the smokers' area of Timepiece and then semi-officially founded over a few beers at The Rusty Bike, the organisation quickly learned that Exeter's budding music journalists desperately wanted an outlet. PearShaped has quickly become a lightning rod for the most passionate music journalism in the city, covering both the vibrant local music scene and releases and news from the wider world.</p>
	<p>In 2014, PearShaped became an official society with the Student's Guild of the University of Exeter to be better tied to the student body. Now, students can reap the benefits of joining the student society, such as timely newsletters containing the magazine's latest journalism, and weekly listings. In addition, those members can become valued writers for the magazine, and flex their journalistic muscles to have their best work seen. The committee of PearShaped magazine is comprised of the President, Chief Editor, Assistant Editor, Press Officer, Treasurer, Publicity Officer, Assistant Publicity Officer, and Social Sec - and is re-elected each year.</p>
	<p>The PearShaped website was designed by the first President and Chief Editor, Jack Reid and Lizzie Hatfield, and developed by Jack. The pears that you'll see dotted around were drawn by Hannah Peck. Additional art was supplied by Rachael Moreland.</p>
</div>
<?php get_footer(); ?>