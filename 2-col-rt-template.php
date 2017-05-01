<?php 
/*
Template Name: 2 Col-Right Sidebar layout
Template Post Type: page
*/
?>
<!-- front-page.php -->
<?php get_header();?>
   
	<!-- START the Loop -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="content row">
		<div class="container">
			<?php if ( is_active_sidebar( '2-col-rt-sidebar' ) ) : ?>
			<div class="col-md-8">
			<?php endif; ?>

				<header class="section-header">
					<h1><?php the_title(); ?></h1>
				</header>
				<section class="section-content row">
					<?php if ( has_post_thumbnail() ) : ?>
						<article class="col-md-7 content">
							<?php the_content(); ?>
						</article>
						<aside class="col-md-5 featured-image">
							<?php the_post_thumbnail('large'); ?>
						</aside>
					<?php else: ?>
						<article class="col-md-12 content">
							<?php the_content(); ?>
						</article>
					<?php endif // end of 'if ( has_post_thumbnail() ) :'?>
				</section>
			<?php if ( is_active_sidebar( '2-col-rt-sidebar' ) ) : ?>
			</div>
			<div class="col-md-4">
				<?php dynamic_sidebar( '2-col-rt-sidebar' ); ?>
			</div>
		<?php endif; ?>
		</div>
		
	</section><!-- /.content.row -->
	<?php endwhile; else: ?>	
		<article class="container error">
			<h1 class="error-header">Oops!</h1>
			<p class="error-message">There seems to be slight issue with your request. We aplogize for the inconvenience.</p>   
		</article><!-- /.error -->

	<?php endif; ?>
	<!-- END the Loop -->

<?php get_footer();?>
<!-- /front-page.php -->