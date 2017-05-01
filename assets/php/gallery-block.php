<!-- gallery-block.php -->
<?php $gallery_query = new WP_Query( array( 
	'category_name' => 'gallery', 	// <- Change catgeory 'name' (use the slug) to switch to different post category
	'posts_per_page' => '12', 		// Do not chnage this count unless the columns are altered below
	'orderby' => 'date'				// Refer to WP Codex for alternate sort methods
));?>


<section class="gallery row">
	<div class="container">
		<header>
			<h3>Gallery</h3>
			<?php echo category_description(7); ?>
		</header>
		<div class="gallery-block">
		<?php if ( $gallery_query->have_posts() ) : while ( $gallery_query->have_posts() ) : $gallery_query->the_post(); ?>
			<div class="col-sm-6 col-md-3">
			<?php if ( has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink(); ?>" class="thumbnail"  rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium'); ?></a>
			<?php else: ?>
				<img src="http://placehold.it/300x300" alt="This is a placeholder image, specify a featured image for this post">
			</div>
			<?php endif; ?>
		<?php endwhile; wp_reset_postdata(); endif; ?>
		</div><!-- /.gallery-block -->
	</div><!-- /.container -->
</section><!-- /.gallery -->

<!-- /gallery-block.php -->