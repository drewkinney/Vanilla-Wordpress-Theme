<!-- front-page.php -->
<?php get_header();?>

	<?php get_template_part( 'assets/php/featured-posts-front' ); ?>
   
	<!-- START the Loop -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="content row">
		<header class="section-header container">
			<h1><?php the_title(); ?></h1>
		</header>
		<section class="section-content container">
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
	</section><!-- /.content.row -->
	<?php endwhile; else: ?><?php endif; ?>
	<!-- END the Loop -->

<?php get_footer();?>
<!-- /front-page.php -->