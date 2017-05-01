<!-- single.php -->
<?php get_header();?>

	<!-- START the Loop -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<article class="single-post row">
		<div class="container">
			<div class="col-md-7">
				<h2><?php the_title();?></h2> 
				<div><?php the_content(); ?></div>
			</div><!-- /.col-md-7 -->
			<div class="col-md-5">
				<?php if ( has_post_thumbnail() ) : ?>
				<a href="<?php the_post_thumbnail_url('full'); ?>" title="See a lerger version of <?php the_title_attribute(); ?>"><?php the_post_thumbnail('large'); ?></a>
				<?php else: ?>
				<img src="http://placehold.it/800x600" alt="This is a placeholder image, specify a featured image for this post">
				<?php endif // end of 'if ( has_post_thumbnail() ) :'?>
			</div><!-- /.col-md-5 -->
		</div><!-- /.container -->
	</article><!-- /.sinlge-post -->
	
	<?php endwhile; else: ?>
	
	<article class="container error">
		<h1 class="error-header">Oops!</h1>
		<p class="error-message">There seems to be slight issue with your request. We aplogize for the inconvenience.</p>   
	</article><!-- /.error -->
	
	<?php endif; ?>
	<!-- END the Loop -->
	
<?php get_footer();?>
<!-- /single.php -->