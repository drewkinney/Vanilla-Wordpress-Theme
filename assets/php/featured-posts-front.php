<!-- featured-posts-front.php -->
<?php	
// Query loop for category by name
$featured_posts_query = new WP_Query( array( 
	'category_name' => 'featured', 		// <- Change catgeory 'name' (use the slug) to switch to different post category
	'posts_per_page' => '4', 			// Do not chnage this count unless the columns are altered below
	'orderby' => 'date'					// Refer to WP Codex for alternate sort methods
));
?>
<section class="featured-posts">
	<header class="section-header container">
		<h2>Featured</h2>
		<?php echo category_description(2); ?>
	</header><!-- /.section-header.container -->
	<aside class="section-content row">
		<div class="container featured">
		<!-- The "featured-post" Loop -->	
		<?php if ( $featured_posts_query->have_posts() ) : while ( $featured_posts_query->have_posts() ) : $featured_posts_query->the_post(); ?>
			<div class="col-sm-6 col-md-3 info">
				<div class="featured-image">
				<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>" title="Click to learn more about <?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium'); ?></a>
				<?php else: ?>
					<img src="http://placehold.it/500x350" alt="This is a placeholder image, specify a featured image for this post">
				<?php endif; ?>
				</div><!-- /.featured-posts-image -->
				<div class="featured-blurb">
					<h3><?php the_title();?></h3>
					<p>
						<?php the_excerpt();?>
						<a href="<?php the_permalink();?>" class="more-link pull-right">
							<span class="label-txt">More </span><i class="fa fa-chevron-right" aria-hidden="true"></i>
						</a>
					</p>
				</div><!-- /.featured-blurb -->
			</div><!-- /.col-sm-6.col-md-3 -->
		<?php endwhile; wp_reset_postdata();endif; ?>
		</div><!-- /.featured -->     
	</aside><!-- /.section-content -->
</section><!-- /.featured-posts -->
<!-- /featured-posts-front.php -->