<!-- front-info.php -->
<?php 
// Query loop for category by name
$front_info_query = new WP_Query( array( 
	'category_name' => 'info', 	// <- Change catgeory 'name' (use the slug) to switch to different post category
	'posts_per_page' => '3', 	// Do not chnage this count unless the columns are altered below
	'orderby' => 'date'			// Refer to WP Codex for alternate sort methods
)); ?>

 <div class="front-info container">
	<section class="info-content row">
		<header class="section-header container">
			<h3>Information</h3>
			<?php echo category_description(6); ?>
		</header><!-- /.section-header -->
		<aside class="front-info container">
			<!-- START $front_info_query Loop -->	
			<?php if ( $front_info_query->have_posts() ) : while ( $front_info_query->have_posts() ) : $front_info_query->the_post(); ?>
			<div class="col-sm-4 front-info">
				<div class="front-info-image">
					<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('large'); ?></a>
					<?php else: ?>
					<img src="http://placehold.it/500x350" alt="This is a placeholder image, specify a featured image for this post">
					<?php endif; ?>
				</div><!-- /.front-info-image  -->
				<div class="front-info-blurb">
				
				
				
				
					<h3><?php the_title();?></h3>
					<p>
						<?php the_excerpt();?>
						<a href="<?php the_permalink();?>" class="more-link pull-right">
							<span class="label-txt">More </span><i class="fa fa-chevron-right" aria-hidden="true"></i>
						</a>
					</p>
				</div><!-- /.front-info-blurb  -->
			</div><!-- /.front-info  -->
			<?php endwhile; wp_reset_postdata(); endif; ?>
			<!-- END $front_info_query Loop -->	
		</aside><!-- /.front-info -->
	</section><!-- /.info-content -->
 </div><!-- /.front-info -->

<!-- /front-info.php -->