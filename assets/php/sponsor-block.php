<!-- sponsor-block.php -->
<?php $sponsor_query = new WP_Query( array( 
	'category_name' => 'sponsors', 	// <- Change catgeory 'name' (use the slug) to switch to different post category 
	'posts_per_page' => '8', 		// Do not chnage this count unless the columns are altered below
	'orderby' => 'date' 			// Refer to WP Codex for alternate sort methods
));?>

<section class="sponsor-block">
		<header>
			<h3>Sponsors</h3>
			<?php echo category_description(10); ?>
		</header>

	<!-- START $$sponsor_query Loop -->	
	<?php if ( $sponsor_query->have_posts() ) : while ( $sponsor_query->have_posts() ) : $sponsor_query->the_post(); ?>
	
	<div class="col-sm-6 col-md-3">
		<a href="<?php the_permalink(); ?>" class="thumbnail"  rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
			<?php the_post_thumbnail('medium'); ?>
		</a>
	</div>
	<?php endwhile; wp_reset_postdata(); endif; ?>
	<!-- END $$sponsor_query Loop -->	
	
</section><!-- /.sponsor-block -->
<!-- /sponsor-block.php -->