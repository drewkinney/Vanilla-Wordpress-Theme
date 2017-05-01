<?php 
/*
Template Name: Full-Width layout
Template Post Type: post, page, event
*/
?>


<!-- front-page.php -->
<?php get_header();?>

	<!-- START the Loop -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article class="page container">
		<div class="pull-right">
			<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php the_post_thumbnail_url('full'); ?>" title="See a lerger version of <?php the_title_attribute(); ?>"><?php the_post_thumbnail('large'); ?></a>
			<?php else: ?>
			<img src="http://placehold.it/800x600" alt="This is a placeholder image, specify a featured image for this post">
			<?php endif // end of 'if ( has_post_thumbnail() ) :'?>
		</div><!-- /.col-md-5 -->
		<h2><?php the_title();?></h2> 
		<div><?php the_content(); ?></div>
	</article><!-- /.page -->
	<footer class="article-meta">
		<ul class="meta">
			<li class="published-meta"><?php echo get_the_date('F j, Y'); ?></li>
			<li class="author-meta"><?php get_the_author();?></li>
			<li class="tags-meta"><?php get_the_tags();?></li>
		</ul>
	</footer>

	<?php endwhile; else: ?>
	
	<article class="error container">
		<h1 class="error-header">Oops!</h1>
		<p class="error-message">There seems to be slight issue with your request. We aplogize for the inconvenience.</p>   
	</article><!-- /.error -->
	
	<?php endif; ?>
	<!-- END the Loop -->
	

<?php get_footer();?>
<!-- /front-page.php -->